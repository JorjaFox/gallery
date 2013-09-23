<?php

/**

    This file has been modified by Mika to fit the needs of JFO.
    If you use it somewhere else, expect breakage. I hard coded
    some things in. Shut up, future me.

**/


//* Start the engine
include_once( get_template_directory() . '/lib/init.php' );

//* Set Localization (do not remove)
load_child_theme_textdomain( 'going-green', apply_filters( 'child_theme_textdomain', get_stylesheet_directory() . '/languages', 'going-green' ) );

//* Child theme (do not remove)
define( 'CHILD_THEME_NAME', __( 'JFO Going Green Pro Theme', 'going-green' ) );
define( 'CHILD_THEME_URL', 'http://my.studiopress.com/themes/goinggreen/' );
define( 'CHILD_THEME_VERSION', '3.0.0' );

//* Add HTML5 markup structure
add_theme_support( 'html5' );

//* Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

//* Enqueue Google fonts
add_action( 'wp_enqueue_scripts', 'going_green_google_fonts' );
function going_green_google_fonts() {
    wp_enqueue_style( 'JFOOpenSans', 'http://jorjafox.net/content/code/fonts/Open_Sans/OpenSans.css' );
    wp_enqueue_style( 'JFOAbel', 'http://jorjafox.net/content/code/fonts/Abel/Abel.css' );
	wp_enqueue_style( 'google-font', '//fonts.googleapis.com/css?family=Lato:300,700|Lora:700', array(), CHILD_THEME_VERSION );
}

//* Add new image sizes
add_image_size( 'featured-image', 275, 140, true );

//* Add support for custom background
add_theme_support( 'custom-background' );

//* Add support for additional color style options
add_theme_support( 'genesis-style-selector', array(
	'going-green-pro-forest' => __( 'Going Green Pro Forest', 'going-green' ),
	'going-green-pro-mint'   => __( 'Going Green Pro Mint', 'going-green' ),
	'going-green-pro-olive'  => __( 'Going Green Pro Olive', 'going-green' ),
) );

//* Add support for structural wraps
add_theme_support( 'genesis-structural-wraps', array(
	'header',
	'nav',
	'subnav',
	'inner',
	'footer-widgets',
	'footer'
) );

//* Add support for 3-column footer widgets
add_theme_support( 'genesis-footer-widgets', 3 );

//* Unregister layout settings
genesis_unregister_layout( 'content-sidebar-sidebar' );
genesis_unregister_layout( 'sidebar-content-sidebar' );
genesis_unregister_layout( 'sidebar-sidebar-content' );

//* Unregister secondary sidebar
unregister_sidebar( 'sidebar-alt' );

//* Reposition the navigation
remove_action( 'genesis_after_header', 'genesis_do_nav' );
remove_action( 'genesis_after_header', 'genesis_do_subnav' );
add_action( 'genesis_before_header', 'genesis_do_nav' );
add_action( 'genesis_before_header', 'genesis_do_subnav' );

//* Remove default post image
remove_action( 'genesis_entry_content', 'genesis_do_post_image', 8 );

//* Add featured image above the entry content
add_action( 'genesis_entry_header', 'going_green_featured_photo', 5 );
function going_green_featured_photo() {
	if ( is_singular() || ! genesis_get_option( 'content_archive_thumbnail' ) )
		return;

	if ( $image = genesis_get_image( array( 'format' => 'url', 'size' => genesis_get_option( 'image_size' ) ) ) ) {
		printf( '<div class="featured-image"><img src="%s" alt="%s" /></div>', $image, the_title_attribute( 'echo=0' ) );
	}
}

/*
 * Header and footer 
 */
 
// Remove Favicon
remove_action('genesis_meta', 'genesis_load_favicon');

// Remove site title and description from header
remove_action( 'genesis_site_title', 'genesis_seo_site_title' );
remove_action( 'genesis_site_description', 'genesis_seo_site_description');

add_action( 'genesis_site_title', 'jfo_seo_site_title' );
function jfo_seo_site_title() { 
	echo '<p id="header-image"><!-- Logo --></p>';
}

// Loads favicon from specified URL
add_filter( 'genesis_pre_load_favicon', 'jfo_custom_favicon_filter' );
function jfo_custom_favicon_filter( $favicon_url ) {
    return 'http://jorjafox.net/favicon.ico?v=3.0.0';
}
 
// Header and footer
add_action('wp_head', 'jfo_header');
function jfo_header() {
    include("/home/jorjafox/public_html/content/code/ads/projectwonderful.php");
    ?>
	<link type="text/plain" rel="author" href="http://jorjafox.net/humans.txt" />
	<meta property="og:type" content="website"/>
	<meta property="og:site_name" content="Jorja Fox: Online" />
	<link href="https://plus.google.com/112696204123972047628/" rel="publisher" />
    <?php
}

add_action('wp_footer', 'jfo_footer');
function jfo_footer() {
    // Plea for not using ad-block
    include("/home/jorjafox/public_html/content/code/ads/footer.php");
}

//* Customize the entire footer
remove_action( 'genesis_footer', 'genesis_do_footer' );
add_action( 'genesis_footer', 'jfo_do_footer' );
function jfo_do_footer() {
	?>
	<ul id="menu-subsidiary" class="menu"><li id="menu-item-3596" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3596">Copyright &copy; 1996-<?php echo date("Y"); ?> <em><a href="http://jorjafox.net/">Jorja Fox: Online</a></em></li><?php wp_nav_menu( array('menu' => 'Footer', 'container' => 'false', 'items_wrap' => '%3$s' )); ?></ul>
	<?php
}

/** Primary nav menu after footer */
add_action( 'genesis_after_footer', 'jfo_do_after_footer' );
function jfo_do_after_footer() {
    ?>
    <div class="pw-footer"><?php include("/home/jorjafox/public_html/content/code/ads/leaderboard-728x90.php"); ?></div>
    <?php
}

/** Customize the post meta function */
add_filter( 'genesis_post_meta', 'jfo_post_meta_filter' );
function jfo_post_meta_filter($post_meta) {
	if (!is_page()) {
	    $post_meta = '[post_categories before="<i class=\'genericond genericon genericon-category\'></i> "] &nbsp; [post_tags before="<i class=\'genericond genericon genericon-tag\'></i> "]';
	    return $post_meta;
	}
}

/* 
 * Comment Section
 */

// Customize Comments for avatar size and MY callback
add_filter('genesis_comment_list_args', 'jfo_comment_list_args');
    function jfo_comment_list_args($args) {
        $args['avatar_size'] = '90';
        $args['callback'] = 'jfo_comment_callback';
        return $args;
}

/** replace comment callback with my own **/
function jfo_comment_callback( $comment, $args, $depth ) {

	$GLOBALS['comment'] = $comment; 
	global $post; 
	?>

	<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">

		<?php do_action( 'genesis_before_comment' ); ?>

		<div class="comment-header">
			<div class="comment-author vcard">
				<?php echo get_avatar( $comment, $size = $args['avatar_size'] ); ?>
				<?php echo ( user_can( $comment->user_id, 'administrator' ) ) ? '<span class="jfo-title"><div class="genericon genericon-star"></div> Administrator</span>' : (
				    ( $comment->user_id === $post->post_author ) ? '<span class="jfo-title"><div class="genericon genericon-status"></div> Post author</span>' : ( 
				        ( user_can( $comment->user_id, 'editor' ) ) ? '<span class="jfo-title"><div class="genericon genericon-status"></div> Moderator</span>' : '' )
				) ; ?>
				
				<?php printf( '<cite><span class="fn">%1$s</span></cite> <span class="says">%2$s:</span>',
						get_comment_author_link(), 
						apply_filters( 'comment_author_says_text', __( 'says', 'genesis' ) ) ); ?>
		 	</div><!-- end .comment-author -->

			<div class="comment-meta commentmetadata">
				<a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>"><?php printf( __( '%1$s at %2$s', 'genesis' ), get_comment_date(), get_comment_time() ); ?></a>
				<?php edit_comment_link( __( '(Edit)', 'genesis' ), '' ); ?>
			</div><!-- end .comment-meta -->
		</div>

		<div class="comment-content">
			<?php if ( $comment->comment_approved == '0' ) : ?>
				<p class="alert"><?php echo apply_filters( 'genesis_comment_awaiting_moderation', __( 'Your comment is awaiting moderation.', 'genesis' ) ); ?></p>
			<?php endif; ?>

			<?php comment_text(); ?>
		</div><!-- end .comment-content -->

		<div class="reply">
			<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
		</div>

		<?php do_action( 'genesis_after_comment' );

	/** No ending </li> tag because of comment threading */
}

// Removing comment form 'allowed' tags
// http://wpsites.net/wordpress-admin/how-to-remove-comment-form-allowed-tags/
function jfo_remove_comment_form_allowed_tags() {
    add_filter('comment_form_defaults','jfo_comment_form_defaults');
}
add_action('after_setup_theme','jfo_remove_comment_form_allowed_tags');

function jfo_comment_form_defaults($default) {
	unset($default['comment_notes_after']);
	unset($default['comment_notes_before']);
	return $default;
}

//* Add a comment policy box in comments
add_action( 'genesis_after_comments', 'jfo_comment_policy' );
function jfo_comment_policy() {
	if ( is_single() && !is_user_logged_in() && comments_open() ) {
	?>
	    <div class="comment-policy-box">    
        <p class="comment-policy"><strong>Comment Policy:</strong></p>
        <p class="comment-policy">By posting a comment, you agree to our <a href="http://jorjafox.net/wiki/JorjaPedia:Terms_of_Use">Terms of Use</a> and promise to abide by our <a href="http://jorjafox.net/wiki/JorjaPedia:Policy">Policies</a>.  Violations will result in posts being deleted, moderated, or banned.</p>
        <p class="comment-policy">Your words are your own, so be nice and inclusive if you can. Online aliases are okay, abusing and trolling is not, and please use your real email address. You can use basic HTML in your posts for italics, links, etc, and embed YouTube and Tweets by just pasting in the URL. Don't overdo it please. If you want your own avatar, register at <a href="http://gravatar.com">Gravatar</a> with the email you use when commenting.</p> 
        <p class="comment-policy">Cookies will be stored on your computer when you comment, recording only the email and name you use when commenting.  This is done to make subsequent commenting faster.</p>
    </div>
	<?php
	}
}

/*
 * Misc
 */
 
// Advertisements

add_action('genesis_after_loop', 'jfo_after_loop');
function jfo_after_loop() {
    ?>
    <div class="sp-content"><?php include("/home/jorjafox/public_html/content/code/ads/studiopress-468x60.php"); ?></div>
    <?php
}

// Set default image size on the attachment pages

add_filter('prepend_attachment', 'jfo_prepend_attachment');
function jfo_prepend_attachment($p) {
   return '<p>'.wp_get_attachment_link(0, 'full', false).'</p>';
}

// Remove parts of attachments
if ( is_attachment() ) {
    remove_action( 'genesis_before_post_content', 'genesis_post_info' );
    remove_action( 'genesis_after_post_content', 'genesis_post_meta' );
}

add_post_type_support( 'video', 'genesis-layouts' );

add_filter( 'genesis_breadcrumb_args', 'jfo_breadcrumb_args' );
/**
 * Custom Breadcrumbs
 *
 */
function jfo_breadcrumb_args( $args ) {
	$args['heirarchial_attachments'] = true; // Genesis 1.5 and later
	$args['heirarchial_categories'] = true; // Genesis 1.5 and later
		$args['display'] = true;
	return $args;
	
}