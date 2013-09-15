<?php if (!defined('WEBPATH')) die(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
	<?php zp_apply_filter('theme_head'); ?>
	<title>Newest Images | <?php echo getBareGalleryTitle(); ?></title>
	<link rel="stylesheet" href="<?php echo $_zp_themeroot ?>/zen.css" type="text/css" />
	<link rel="stylesheet" href="http://jorjafox.net/wordpress/wp-content/themes/jfogenesis/style.css" type="text/css" />
	<link rel="stylesheet" href="http://jorjafox.net/content/code/fonts/fonts.css" type="text/css" />
	<link type="text/plain" rel="author" href="http://jorjafox.net/humans.txt" />
    <!--[if lt IE 9]>
    	<script type="text/javascript" src="http://jorjafox.net/content/code/respond.src.js"></script>
    	<link rel="stylesheet" href="<?php echo $_zp_themeroot ?>/zen-ie.css" type="text/css" />
    <![endif]-->	
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>

<?php 
zp_apply_filter('theme_body_open');
include("header.php"); 
?>

    <div class="breadcrumb">You are here: <a href="http://jorjafox.net/" title="View Home">Home</a> / <a href="http://jorjafox.net/gallery/">Gallery</a> / Newest Albums</div>
        
    <div class="lq-content"><?php include("/home/jorjafox/public_html/content/code/ads/liquidweb-325x38.php"); ?></div>

    <div class="post type-post status-publish format-standard hentry category-jorjafox zenphoto-newest">
	
        <h2 class="entry-title">Newest Albums</h2>
		<div class="byline">Most recently uploaded albums</div>
		
		<div class="entry-content">

            <div id="padbox">
            		<?php if (function_exists('printLatestUpdatedAlbums')) { printLatestUpdatedAlbums($number = 4, $showtitle = true, $showdesc = true); } ?>
            		
                    <p>&nbsp;</p>
            </div> <!-- PadBox -->
		</div> <!-- entry content -->

    </div> <!-- end post -->
                
            <div class="sp-content"><iframe src="http://jorjafox.net/content/code/ads/studiopress-468x60.php" width="480" height="80" frameborder="0">
            <?php include("/home/jorjafox/public_html/content/code/ads/studiopress-468x60.php"); ?></iframe></div>
            
    </div> <!-- end content hfeed -->

<?php include("sidebar.php"); ?>
<?php include("footer.php"); ?>

</div>
<?php zp_apply_filter('theme_body_close'); ?>

</body>
</html>
