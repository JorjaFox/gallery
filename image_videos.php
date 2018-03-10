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

				<!-- The Image -->
				<div id="image"><div class="fullsize">
					<div class="zen-video"><?php
						$getID3 = new getID3;
						$videofile = $getID3->analyze( "/home/jorjafox/public_html".getUnprotectedImageURL() );
						$videowide = $videofile['video']['resolution_x'];
						$videohigh = $videofile['video']['resolution_y'];

						printCustomSizedImage( getImageTitle(), NULL, $videowide, $videohigh, $videowide, $videohigh, NULL, NULL, "thumbnail", NULL, false, false); ?></div>
				</div></div>
				<div style="clear:both;"></div>

<!-- Download links -->
				<div class="downloadline"><p><em><a href="<?php echo htmlspecialchars(getFullImageURL());?>" title="Right-click on the link and Save-As">Download Video (
					<?php
						function humanFileSize($size,$unit="") {
							if( (!$unit && $size >= 1<<30) || $unit == "GB")
								return number_format($size/(1<<30),2)." GB";
							if( (!$unit && $size >= 1<<20) || $unit == "MB")
								return number_format($size/(1<<20),2)." MB";
							if( (!$unit && $size >= 1<<10) || $unit == "KB")
								return number_format($size/(1<<10),2)." KB";
							return number_format($size)." bytes";
						}
						echo humanFileSize($videofile['filesize']);

					?>)</a></em><br />(Right-click on the link and Save-As)</p></div>

				<div class="byline"><p><?php printImageDesc(true); ?></p></div>

			</div> <!-- PadBox -->
		</div>

		<footer class="entry-footer"><p class="entry-meta">Per our <a href="/copyrights/">Copyrights</a> and <a href="/terms-of-use/">Terms of Use</a>, you are welcome to copy and reuse images on this site for your own use, provided you credit this site in some way (via a link back, or simply by mentioning us by name).</p></footer>
	</article>
</main>

<?php include("_sidebar.php"); ?>
<?php include("_footer.php"); ?>

</div> <!-- End Site-container -->
<?php zp_apply_filter('theme_body_close'); ?>

</body>
</html>