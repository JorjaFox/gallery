<?php if (!defined('WEBPATH')) die(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
	<?php zp_apply_filter('theme_head'); ?>
	<title>404 - file not found | <?php echo getBareGalleryTitle(); ?></title>
	<link rel="stylesheet" href="<?php echo $_zp_themeroot ?>/zen.css" type="text/css" />
	<link rel="stylesheet" href="http://jorjafox.net/wordpress/wp-content/themes/jfogenesis/style.css" type="text/css" />
	<link rel="stylesheet" href="http://jorjafox.net/content/code/fonts/fonts.css" type="text/css" />

    <!--[if IE 8]>
    	<script type="text/javascript" src="http://jorjafox.net/content/code/respond.src.js"></script>
    	<link rel="stylesheet" href="/gallery/themes/jfogenesis/zen-ie.css" type="text/css" />
    <![endif]-->
	<link type="text/plain" rel="author" href="http://jorjafox.net/humans.txt" />	
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>

<?php 
zp_apply_filter('theme_body_open');
include("header.php"); 
?>

    <div class="breadcrumb">You are here: <a href="http://jorjafox.net/" title="View Home">Home</a> / <a href="http://jorjafox.net/gallery/">Gallery</a> / 404</div>

    <div class="lq-content"><?php include("/home/jorjafox/public_html/content/code/ads/liquidweb-325x38.php"); ?></div>

    <div class="post type-post status-publish format-standard hentry category-jorjafox zenphoto-404">

        <h2 class="entry-title">404</h2>
		<div class="byline"><p>File Not Found</p></div>
		
		<div class="entry-content">

<div id="padbox">
    <?php
    echo '<p>'.gettext("Whoops, we can't find that page!").'</p>';
    if (isset($album)) {
        echo '<p>' . sprintf(gettext('Album: %s'), html_encode($album)).'</p>';
    }
    if (isset($image)) {
        echo '<p>' . sprintf(gettext('Image: %s'), html_encode($image)).'</p>';
    }
    if (isset($obj)) {
        echo '<p>' . sprintf(gettext('Page: %s'), html_encode(substr(basename($obj), 0, -4))).'</p>';
    }
    ?>
</div> <!-- PadBox -->
<div class="sp-content"><a target="_new" href="http://www.shareasale.com/r.cfm?b=281075&u=728549&m=28169&urllink=&afftrack="><img src="http://www.shareasale.com/image/28169/TotMCrystal468x60.gif"  alt="StudioPress Theme of the Month" border="0"></a></div>
		</div> <!-- entry content -->

        	</div> <!-- end post -->
        </div> <!-- end content hfeed -->

<?php include("sidebar.php"); ?>
<?php include("footer.php"); ?>

</div>
<?php zp_apply_filter('theme_body_close'); ?>

</body>
</html>
