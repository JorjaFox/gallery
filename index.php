<?php
if ( ! defined( 'WEBPATH' ) ) {
	die();
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">

	<?php zp_apply_filter('theme_head'); ?>
	<title><?php echo getBareGalleryTitle(); ?></title>

	<?php include("_scripts.php"); ?>

</head>

<?php require '_header.php'; ?>

<main class="content" id="genesis-content">
	<div class="breadcrumb">You are here: <a href="/" title="View Home">Home</a> / <a href="/gallery/">Gallery</a> </div>

	<article class="post type-post format-standard category-jorjafox entry zenphoto" itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">

		<header class="entry-header">
			<h2 class="entry-title" itemprop="headline">Welcome to the Gallery</h2>
			<div class="entry-meta">By the Fans of LeFox Librarians</div>
		</header>

		<div class="entry-content" itemprop="text">
			<div id="padbox">
				<div id="albums">
					<?php while (next_album()): ?>
					<div class="indexalbum">
						<div class="thumb"><a href="<?php echo htmlspecialchars(getAlbumURL());?>" title="<?php echo gettext('View album:'); ?> <?php echo getAnnotatedAlbumTitle();?>"><?php printAlbumThumbImage(getAnnotatedAlbumTitle()); ?></a></div>
						<div class="albumdesc"><h3><a href="<?php echo htmlspecialchars(getAlbumURL());?>" title="<?php echo gettext('View album:'); ?> <?php echo getAnnotatedAlbumTitle();?>"><?php printAlbumTitle(); ?></a></h3>
						<p><?php printAlbumDesc(); ?></p></div>
						<p style="clear: both; "></p>
					</div>
					<?php endwhile; ?>
				</div>
			</div> <!-- PadBox -->
		</div>

		<footer class="entry-footer"></footer>
	</article>
</main>

<?php
	require '_sidebar.php';
	require '_footer.php';
?>

</div> <!-- End Site-container -->
<?php zp_apply_filter( 'theme_body_close' ); ?>

</body>
</html>
