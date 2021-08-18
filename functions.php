<?php
enableExtension( 'zenpage', 0, false ); // we do not support it
error_reporting( 0 );
define( 'FLF_STABLE_THEME', '2.0.4' );
// This should resolve to /home/me/public_html/
define( 'FLF_BASE_DIR', dirname( SERVERPATH ) );

// Check for mobile and tablets, and set some options
require_once (CORE_SERVERPATH .  PLUGIN_FOLDER . '/mobileTheme/Mobile_Detect.php');
$detect = new Mobile_Detect;

if ($detect->isTablet()) {
	$isTablet = true;
} else {
	$isTablet = false;
}
if (($detect->isMobile()) && (!$detect->isTablet())) {
	$isMobile = true;
} else {
	$isMobile = false;
}
