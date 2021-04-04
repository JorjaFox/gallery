<?php
/**
 * TV Maze Widget
 */

if ( ! defined( 'WEBPATH' ) ) {
	die();
}

$url        = TVMAZE_URL;
$parsed_url = parse_url( $url );
$path_parts = explode( '/', $parsed_url['path'] );
foreach ( $path_parts as $part ) {
	if ( is_numeric( $part ) ) {
		$show_id = $part;
	}
	if ( is_string( $part ) && 'shows' !== $part ) {
		$slug = $part;
	}
}

$title = '<h2 class="widget-title">Upcoming "CSI: Vegas" Episodes</h2>';

if ( isset( $show_id ) ) {
	// This is where you run the code and display the output
	// Extract Show name and next ep.
	$ch_show = curl_init( 'http://api.tvmaze.com/shows/' . $show_id );
	curl_setopt( $ch_show, CURLOPT_RETURNTRANSFER, true );
	curl_setopt( $ch_show, CURLOPT_FAILONERROR, true );
	$show_get = curl_exec( $ch_show );
	if ( curl_errno( $ch_show ) ) {
		$error_msg_show = curl_error( $ch_show );
	}
	curl_close( $ch_show );

	if ( is_array( $show_get ) && ! isset( $error_msg_show ) ) {
		$show_info = json_decode( $show_get['body'], true );
		if ( isset( $show_info['_links']['nextepisode']['href'] ) ) {
			$ch_next = curl_init( $show_info['_links']['nextepisode']['href'] );
			curl_setopt( $ch_next, CURLOPT_RETURNTRANSFER, true );
			curl_setopt( $ch_next, CURLOPT_FAILONERROR, true );
			$next_get = curl_exec( $ch_next );
			if ( curl_errno( $ch_next ) ) {
				$error_msg_next = curl_error( $ch_next );
			}
			curl_close( $ch_next );

			if ( is_array( $next_get ) && ! isset( $error_msg_next ) ) {
				$next_info = json_decode( $next_get['body'], true );
				if ( isset( $next_info['summary'] ) ) {
					$next_date_time   = DateTime::createFromFormat( 'Y-m-d', $next_info['airdate'] );
					$next_date_string = $next_date_time->format( 'M d, Y' );

					$content  = '<p><strong>' . $next_info['name'] . '</strong><br />Episode ' . $next_info['season'] . 'x' . $next_info['number'] . '; ' . $next_date_string . '</p><small>' . $next_info['summary'] . '</small>';
					$content .= '<p><a href="https://jorjafox.net/library/actor/' . $slug . '-episodes">More <em>' . $show_info['name'] . '</em> Episodes</a><br /><small><a href="' . $url . '">Powered by TV Maze</a></small>';
				}
			}
		}
	}
}

if ( ! isset( $content ) ) {
	$content = ( isset( $slug ) ) ? '<p><a href="https://jorjafox.net/library/actor/' . $slug . '-episodes">Coming soon...</a></p>' : '<p>Coming soon...</p>';
}

?>

<aside id="custom_html-23" class="widget_text widget widget_custom_html">
	<div class="textwidget custom-html-widget">
		<?php echo $title . $content; ?>
	</div>
</aside>
