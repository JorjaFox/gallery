<?php if (!defined('WEBPATH')) die(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
	<?php zp_apply_filter('theme_head'); ?>
	<title>Newest Images | <?php echo getBareGalleryTitle(); ?></title>

	<?php include("_scripts.php"); ?>

</head>

<?php include("_header.php"); ?>

<main class="content" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">
    <div class="breadcrumb">You are here: <a href="/" title="View Home">Home</a> / <a href="/gallery/">Gallery</a> / Newest Albums</div>

    <article class="post type-post format-standard category-jorjafox entry zenphoto" itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">

        <header class="entry-header">
            <h2 class="entry-title" itemprop="headline">Newest Albums</h2>
            <div class="entry-meta"><div class="byline"><p>Most recently uploaded albums</p></div></div>
        </header>

        <div class="entry-content" itemprop="text">
            <div id="padbox">
                <?php if (function_exists('printLatestUpdatedAlbums')) { printLatestUpdatedAlbums($number = 4, $showtitle = true, $showdesc = true); } ?>
            </div> <!-- PadBox -->
        </div>

        <footer class="entry-footer"></footer>
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