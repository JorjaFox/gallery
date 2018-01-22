<?php
/*LegacyConverter was here*/ if (!defined('WEBPATH')) die(); ?>

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
	<div class="breadcrumb">You are here: <a href="/" title="View Home">Home</a> / <a href="/gallery/">Gallery</a> / <?php printParentBreadcrumb('',' / ','  / '); ?></span> <span class="trail-end"><a href="<?php echo html_encode(getAlbumURL());?>" title="<?php echo gettext('View album:'); ?><?php echo getAnnotatedAlbumTitle();?>"><?php printAlbumTitle(); ?></a></div>

	<article class="post type-post format-standard category-jorjafox entry zenphoto" itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">

		<header class="entry-header">
			<h1 class="entry-title" itemprop="headline"><?php printImageTitle(true); ?></h1>
			<div class="entry-meta">By the Fans of Le Fox Librarians</div>
		</header>

		<div class="entry-content" itemprop="text">
			<div id="padbox">
				<div class="byline">
					<p><?php printImageDesc(true); ?></p>

					<?php
						$credit = getImageData("credit");
						if ( $credit ) { ?><p><?php printImageData('credit', 'Credit: '); ?></p><?php };
					?>
				</div>

				<!-- The Image -->
				<div id="image"><div class="fullsize">
					<?php printCustomSizedImageMaxSpace(getBareImageTitle(),580,580); ?>
				</div></div>
				<div style="clear:both;"></div>

				<ul class="pager">
					<?php if (hasPrevImage()) { ?>
						<li><a href="<?php echo html_encode(getPrevImageURL()); ?>" title="<?php echo gettext('Previous Image'); ?>">&larr; <?php echo gettext('prev'); ?></a></li>
					<?php } else { ?>
						<li class="disabled"><a href="#">&larr; <?php echo gettext('prev'); ?></a></li>
					<?php } ?>
					<?php if (hasNextImage()) { ?>
						<li><a href="<?php echo html_encode(getNextImageURL()); ?>" title="<?php echo gettext('Next Image'); ?>"><?php echo gettext('next'); ?> &rarr;</a></li>
					<?php } else { ?>
						<li class="disabled"><a href="#"><?php echo gettext('next'); ?> &rarr;</a></li>
					<?php } ?>
				</ul>

				<!-- Download links -->
				<div class="downloadline"><p><em><a href="<?php echo htmlspecialchars(getFullImageURL());?>" title="Right-click on the link and Save-As"><?php echo gettext("Download Full Size:"); ?><?php echo getFullWidth() . "x" . getFullHeight(); ?></a></em><br />(Right-click on the link and Save-As)</p></div>

			</div> <!-- PadBox -->
		</div>

		<footer class="entry-footer"><p class="entry-meta">Per our <a href="/copyrights/">Copyrights</a> and <a href="/terms-of-use/">Terms of Use</a>, you are welcome to copy and reuse images on this site for your own use, provided you credit this site in some way (via a link back, or simply by mentioning us by name).</p></footer>
	</article>

	<div class="adboxes-footerwidget"><center>
		<?php
			$_GET['name'] = 'google-large-rectangle';
			include($_SERVER["DOCUMENT_ROOT"]."/static/content/code/ads/adboxes.php");

			$_GET['name'] = 'studiopress-120x240';
			include($_SERVER["DOCUMENT_ROOT"]."/static/content/code/ads/adboxes.php");

			$_GET['name'] = 'line-buttons-500x250';
			include($_SERVER["DOCUMENT_ROOT"]."/static/content/code/ads/adboxes.php");

		?>
	</center></div>
</main>

<?php include("_sidebar.php"); ?>
<?php include("_footer.php"); ?>

</div> <!-- End Site-container -->
<?php zp_apply_filter('theme_body_close'); ?>

</body>
</html>