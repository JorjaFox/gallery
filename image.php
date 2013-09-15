<?php if (!defined('WEBPATH')) die(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
        <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">

	<?php zp_apply_filter('theme_head'); ?>
	<title><?php echo getImageTitle()." | ".getBareGalleryTitle(); ?></title>
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
    <div class="breadcrumb">You are here: <a href="http://jorjafox.net/" title="View Home">Home</a> / <a href="http://jorjafox.net/gallery/">Gallery</a> / <?php printParentBreadcrumb('',' / ','  / '); ?></span> <span class="trail-end"><a href="<?php echo html_encode(getAlbumLinkURL());?>" title="<?php echo gettext('View album:'); ?><?php echo getAnnotatedAlbumTitle();?>"><?php printAlbumTitle(); ?></a></div>

    <div class="lq-content"><?php include("/home/jorjafox/public_html/content/code/ads/liquidweb-325x38.php"); ?></div>

    <div class="post type-post status-publish format-standard hentry category-jorjafox zenphoto-image">
        <h2 class="entry-title"><?php printImageTitle(true); ?></h2>
		<div class="byline"><p><strong>Description</strong><br /><?php printImageDesc(true); ?></p>
            <!-- Image Nav Above -->
            <div class="imgnav">
            <?php if (hasPrevImage()) { ?>
                <div class="imgprevious"><a href="<?php echo html_encode(getPrevImageURL()); ?>" title="<?php echo gettext("Previous Image"); ?>">« <?php echo gettext("prev"); ?></a></div>
                <?php } if (hasNextImage()) { ?>
                <div class="imgnext"><a href="<?php echo html_encode(getNextImageURL()); ?>" title="<?php echo gettext("Next Image"); ?>"><?php echo gettext("next"); ?> »</a></div>
            <?php } ?>
            </div>
            <p><em><a href="<?php echo htmlspecialchars(getFullImageURL());?>" title="Right-click on the link and Save-As"><?php echo gettext("Download Full Size:"); ?><?php echo getFullWidth() . "x" . getFullHeight(); ?></a></em><br />(Right-click on the link and Save-As)</p>
        <div style="clear:both;"><br /></div>
	
		</div>
		
		<div class="entry-content">                                
	<!-- The Image -->
        <div id="image"><div class="fullsize">
            <a href="<?php echo htmlspecialchars(getFullImageURL());?>" rel="showcase" full="<?php echo html_encode(getFullImageURL()); ?>" size="<?php echo getFullWidth() . "x" . getFullHeight(); ?>" title="<?php echo getBareImageTitle();?>"><?php printCustomSizedImageMaxSpace(getBareImageTitle(),580,580); ?></a>
		</div></div>

    <!-- Nav Below -->
        <div class="imgnav">
            <?php if (hasPrevImage()) { ?>
                <div class="imgprevious"><a href="<?php echo html_encode(getPrevImageURL()); ?>" title="<?php echo gettext("Previous Image"); ?>">« <?php echo gettext("prev"); ?></a></div>
                <?php } if (hasNextImage()) { ?>
                <div class="imgnext"><a href="<?php echo html_encode(getNextImageURL()); ?>" title="<?php echo gettext("Next Image"); ?>"><?php echo gettext("next"); ?> »</a></div>
            <?php } ?>
        </div>

<div style="clear:both;"><p>&nbsp;</p></div>
                        
<div class="sp-content"><iframe src="http://jorjafox.net/content/code/ads/studiopress-468x60.php" width="480" height="80" frameborder="0">
<?php include("/home/jorjafox/public_html/content/code/ads/studiopress-468x60.php"); ?></iframe></div>
<p>Per our <a href="http://jorjafox.net/wiki/JorjaPedia:Copyrights">Copyrights</a> and <a href="http://jorjafox.net/wiki/JorjaPedia:Terms_of_Use">Terms of Use</a>, you are welcome to copy and reuse images on this site for your own use, provided you credit this site in some way (via a link back, or simply by mentioning us by name).</p>

		</div> <!-- entry content -->

        	</div> <!-- end post -->
        </div> <!-- end content hfeed -->

<?php include("sidebar.php"); ?>
<?php include("footer.php"); ?>

</div>
<?php zp_apply_filter('theme_body_close'); ?>

</body>
</html>
