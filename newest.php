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
	<title>Newest Images | <?php echo getBareGalleryTitle(); ?></title>

	<?php include("_scripts.php"); ?>

</head>

<?php require '_header.php'; ?>

<main id="main" class="site-main">
	<article class="post type-post status-publish format-standard hentry ast-article-single" id="post-17379" itemtype="https://schema.org/CreativeWork" itemscope="itemscope">
		<div class="ast-post-format- single-layout-1">
			<header class="entry-header">
				<div class="ast-single-post-order">
					<h1 class="entry-title" itemprop="headline">Newest Albums</h1>
					<div class="entry-meta">
						By <span class="posted-by vcard author" itemtype="https://schema.org/Person" itemscope="itemscope" itemprop="author">the Fans of LeFox Librarians</span>
					</div>
				</div>
			</header>

			<div class="entry-content clear" itemprop="text">
				<!-- Content begins -->
				<div id="padbox">
					<?php if (function_exists('printLatestUpdatedAlbums')) { printLatestUpdatedAlbums($number = 4, $showtitle = true, $showdesc = true); } ?>
				</div> <!-- PadBox -->
				<!-- Content Ends -->
			</div>
		</div>
	</article>
</main>

<?php
require '_sidebar.php';
require '_footer.php';
?>

<?php npgFilters::apply( 'theme_body_close' ); ?>

</body>
</html>
