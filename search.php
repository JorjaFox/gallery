<?php
if ( ! defined( 'WEBPATH' ) ) {
	die();
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<?php npgFilters::apply( 'theme_head' ); ?>
	<title>Search Results | <?php printGalleryTitle(); ?></title>

	<?php require '_scripts.php'; ?>
</head>

<?php

require '_header.php';

$total = getNumImages() + getNumAlbums();
if ( 0 === $total ) {
	$_current_search->clearSearchWords();
}
?>

<main id="main" class="site-main">
	<article class="post type-post status-publish format-standard hentry ast-article-single" id="post-17379" itemtype="https://schema.org/CreativeWork" itemscope="itemscope">
		<div class="ast-post-format- single-layout-1">
			<header class="entry-header">
				<div class="ast-single-post-order">
					<h1 class="entry-title" itemprop="headline">Search Results</h1>
					<div class="entry-meta">
						By <span class="posted-by vcard author" itemtype="https://schema.org/Person" itemscope="itemscope" itemprop="author">the Fans of LeFox Librarians</span>
					</div>
				</div>
			</header>

			<div class="entry-content clear" itemprop="text">
				<!-- Content begins -->
				<div id="padbox">

					<?php
					$searchwords = getSearchWords();
					$searchdate  = getSearchDate();
					if ( ! empty( $searchdate ) ) {
						$searchwords .= $searchdate;
					}
					if ( $total ) {
						echo '<p>' . sprintf( gettext( 'Total matches for <em>%1$s</em>: %2$u' ), html_encode( $searchwords ), $total ) . '</p>';
					} else {
						echo '<p>' . gettext( 'Sorry, no matches for your search.' ) . '</p>';
					}

					if ( ( getNumAlbums() ) > 0 ) {
						echo '<div id="albums">';

						while ( next_album() ) {
							?>
							<div class="album">
								<div class="albumdesc">
									<h3><a href="<?php echo html_encode( getAlbumURL() ); ?>" title="<?php echo gettext( 'View album:' ) . getAnnotatedAlbumTitle(); ?>"><?php printAlbumTitle(); ?></a></h3>
									<p><?php printAlbumDesc(); ?></p>
								</div>
								<div class="thumb">
									<a href="<?php echo html_encode( getAlbumURL() ); ?>" title="<?php echo gettext( 'View album:' ); ?> <?php echo getAnnotatedAlbumTitle(); ?>"><?php printAlbumThumbImage( getAnnotatedAlbumTitle() ); ?></a>
								</div>
								<p style="clear: both; "><!-- End Albums --></p>
							</div>
							<?php
						}
						echo '</div>';
					}

					if ( ( getNumImages() ) > 0 ) {
						echo '<div id="images">';
						$x = 0;
						while ( next_image( true ) ) {
							if ( $x >= 1 ) {
								$show = 'style="display:none;"';
							} else {
								$show = '';
							}
							?>
							<div class="image"><div class="imagethumb">
								<a href="<?php echo html_encode( getDefaultSizedImage() ); ?>" rel="showcase" title="<?php echo getBareImageTitle(); ?>" full="<?php echo html_encode( getFullImageURL() ); ?>" solo="<?php echo html_encode( getImageURL() ); ?>" size="<?php echo getFullWidth() . 'x' . getFullHeight(); ?>" /> <?php printImageThumb( getAnnotatedImageTitle() ); ?></a>
							</div></div>
							<?php
							$x++;
						}
						echo '</div>';
					}
					?>

					<!-- End Images -->

					<br clear="all" />

				</div> <!-- PadBox -->
				<!-- Content Ends -->
			</div>
		</div>
	</article>
</main>

<?php
require '_sidebar.php';
require '_footer.php';
?>

<?php npgFilters::apply( 'theme_body_close' ); ?>

</body>
</html>
