<?php
if ( ! defined( 'WEBPATH' ) ) {
	die();
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">

	<?php npgFilters::apply('theme_head'); ?>
	<title><?php echo getImageTitle(); ?> * <? echo getBareGalleryTitle(); ?></title>

	<?php include("_scripts.php"); ?>

</head>

<?php require '_header.php'; ?>

<main id="main" class="site-main">
	<article class="post type-post status-publish format-standard hentry ast-article-single" id="post-17379" itemtype="https://schema.org/CreativeWork" itemscope="itemscope">
		<div class="ast-post-format- single-layout-1">
			<header class="entry-header">
				<div class="ast-single-post-order">
					<h1 class="entry-title" itemprop="headline"><?php printAlbumTitle( true ); ?></h1>
					<div class="entry-meta">
						<span class="cat-links"><a href="/gallery">Gallery</a> / <?php printParentBreadcrumb( '', ' / ', '  / ' ); ?></span>
						By <span class="posted-by vcard author" itemtype="https://schema.org/Person" itemscope="itemscope" itemprop="author">the Fans of LeFox Librarians</span>
					</div>
				</div>
			</header>

			<div class="entry-content clear" itemprop="text">
				<!-- Content begins -->
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

				<p>Per our <a href="/copyrights/">Copyrights</a> and <a href="/terms-of-use/">Terms of Use</a>, you are welcome to copy and reuse images on this site for your own use, provided you credit this site in some way (via a link back, or simply by mentioning us by name).</p>

				<!-- Content Ends -->
			</div>
		</div>
	</article>
</main>

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Horizontal (Responsive) -->
<ins class="adsbygoogle"
	 style="display:block"
	 data-ad-client="ca-pub-7868382837959636"
	 data-ad-slot="3514530332"
	 data-ad-format="auto"
	 data-full-width-responsive="true"></ins>
<script>
	 (adsbygoogle = window.adsbygoogle || []).push({});
</script>

<?php
	require '_sidebar.php';
	require '_footer.php';
?>

<?php npgFilters::apply( 'theme_body_close' ); ?>

</body>
</html>
