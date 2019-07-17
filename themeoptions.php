<?php
// force UTF-8 Ø

/* Plug-in for theme option handling
 * The Admin Options page tests for the presence of this file in a theme folder
 * If it is present it is linked to with a require_once call.
 * If it is not present, no theme options are displayed.
 *
 */

require 'functions.php';

/* Fix because my server is stupid */
setOption( 'locale', 'en_US', true );

// This should resolve to /home/me/public_html/
define( 'FLF_BASE_DIR', dirname( SERVERPATH ) );

class ThemeOptions {

	public function __construct() {
		$me = basename( dirname( __FILE__ ) );
		setThemeOptionDefault( 'Allow_search', true );
		setThemeOptionDefault( 'Theme_colors', 'light' );
		setThemeOptionDefault( 'albums_per_page', 6 );
		setThemeOptionDefault( 'albums_per_row', 2 );
		setThemeOptionDefault( 'images_per_page', 20 );
		setThemeOptionDefault( 'images_per_row', 5 );
		setThemeOptionDefault( 'image_size', 595 );
		setThemeOptionDefault( 'image_use_side', 'longest' );
		setThemeOptionDefault( 'thumb_size', 200 );
		setThemeOptionDefault( 'thumb_crop_width', 200 );
		setThemeOptionDefault( 'thumb_crop_height', 200 );
		setThemeOptionDefault( 'thumb_crop', 1 );
		setThemeOptionDefault( 'thumb_transition', 1 );
		setOptionDefault( 'colorbox_' . $me . '_album', 1 ); /* TODO:replace with a call to colorbox::registerScripts(); */
		setOptionDefault( 'colorbox_' . $me . '_image', 1 ); /* TODO:replace with a call to colorbox::registerScripts(); */
		setOptionDefault( 'colorbox_' . $me . '_search', 1 ); /* TODO:replace with a call to colorbox::registerScripts(); */
		if ( class_exists( 'cacheManager' ) ) {
			$me = basename( dirname( __FILE__ ) );
			cacheManager::deleteCacheSizes( $me );
			cacheManager::addCacheSize( $me, getThemeOption( 'image_size' ), null, null, null, null, null, null, false, null, null, null );
			cacheManager::addCacheSize( $me, getThemeOption( 'thumb_size' ), null, null, getThemeOption( 'thumb_crop_width' ), getThemeOption( 'thumb_crop_height' ), null, null, true, null, null, null );
		}
	}

	public function getOptionsSupported() {
		return array(
			gettext( 'Allow search' ) => array(
				'key'  => 'Allow_search',
				'type' => OPTION_TYPE_CHECKBOX,
				'desc' => gettext( 'Check to enable search form.' ),
			),
		);
	}

	public function getOptionsDisabled() {
		return array( 'custom_index_page' );
	}

}
