<?php if (!defined('WEBPATH')) die(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
	<?php zp_apply_filter('theme_head'); ?>
	<title>404 - file not found | <?php echo getBareGalleryTitle(); ?></title>
	<link rel="stylesheet" href="<?php echo $_zp_themeroot ?>/zen.css" type="text/css" />
    <!--[if IE 8]>
    	<script type="text/javascript" src="http://jorjafox.net/content/code/respond.src.js"></script>
    	<link rel="stylesheet" href="/gallery/themes/jfogenesis/zen-ie.css" type="text/css" />
    <![endif]-->
	<link type="text/plain" rel="author" href="http://jorjafox.net/humans.txt" />
	<script type="text/javascript" src="http://apis.google.com/js/plusone.js"></script>
	<meta name="pinterest" content="nopin" />
	<?php printRSSHeaderLink('Gallery',gettext('Gallery RSS')); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>

<?php 
zp_apply_filter('theme_body_open');
include("header.php"); 
?>

    <div class="breadcrumb">You are here: <a href="http://jorjafox.net/" title="View Home">Home</a> / <a href="http://jorjafox.net/gallery/">Gallery</a> / 404</div>
        	
    <div class="post-6100 post type-post status-publish format-standard hentry category-jorjafox tag-mediaarticle tag-jorja-foxproducer">

        <h2 class="entry-title">404</h2>
		<div class="byline">File Not Found</div>
		
		<div class="entry-content">

<div id="padbox">
    <?php
    echo gettext("Whoops, can't find that page!");
    if (isset($album)) {
        echo '<br />' . sprintf(gettext('Album: %s'), html_encode($album));
    }
    if (isset($image)) {
        echo '<br />' . sprintf(gettext('Image: %s'), html_encode($image));
    }
    if (isset($obj)) {
        echo '<br />' . sprintf(gettext('Page: %s'), html_encode(substr(basename($obj), 0, -4)));
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
