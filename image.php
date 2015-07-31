<?php if (!defined('WEBPATH')) die(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
        <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">

	<?php zp_apply_filter('theme_head'); ?>
	<title><?php echo getImageTitle(); ?> | <? echo getBareGalleryTitle(); ?></title>

	<?php include("_scripts.php"); ?>

</head>

<?php include("_header.php"); ?>

<main class="content" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">
    <div class="breadcrumb">You are here: <a href="http://jorjafox.net/" title="View Home">Home</a> / <a href="http://jorjafox.net/gallery/">Gallery</a> / <?php printParentBreadcrumb('',' / ','  / '); ?></span> <span class="trail-end"><a href="<?php echo html_encode(getAlbumURL());?>" title="<?php echo gettext('View album:'); ?><?php echo getAnnotatedAlbumTitle();?>"><?php printAlbumTitle(); ?></a></div>

    <article class="post type-post format-standard category-jorjafox entry zenphoto" itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">

        <header class="entry-header">
            <h2 class="entry-title" itemprop="headline"><?php printImageTitle(true); ?></h2>
        </header>

        <div class="entry-content" itemprop="text">
            <div class="entry-meta"><div class="byline"><p><?php printImageDesc(true); ?></p>
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
            </div></div>
            <div id="padbox">
            	<!-- The Image -->
                <div id="image"><div class="fullsize">
                    <?php printCustomSizedImageMaxSpace(getBareImageTitle(),580,580); ?>
        		</div></div>

            <div style="clear:both;"><p>&nbsp;</p></div>
            </div> <!-- PadBox -->
        </div>

        <footer class="entry-footer"><p>Per our <a href="http://jorjafox.net/wiki/JorjaPedia:Copyrights">Copyrights</a> and <a href="http://jorjafox.net/wiki/JorjaPedia:Terms_of_Use">Terms of Use</a>, you are welcome to copy and reuse images on this site for your own use, provided you credit this site in some way (via a link back, or simply by mentioning us by name).</p></footer>

        <div class="adboxes-footerwidget"><center>
			<?php
				$_GET['name'] = 'google-medium-rectangle';
				include($_SERVER["DOCUMENT_ROOT"]."/content/code/ads/adboxes.php");

				$_GET['name'] = 'studiopress-120x240';
				include($_SERVER["DOCUMENT_ROOT"]."/content/code/ads/adboxes.php");

				$_GET['name'] = 'line-buttons-500x250';
				include($_SERVER["DOCUMENT_ROOT"]."/content/code/ads/adboxes.php");

			?>
        </center></div>

    </article>
</main>

<?php include("_sidebar.php"); ?>
<?php include("_footer.php"); ?>

</div> <!-- End Site-container -->
<?php zp_apply_filter('theme_body_close'); ?>

</body>
</html>