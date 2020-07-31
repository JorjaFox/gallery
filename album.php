<?php
if ( ! defined( 'WEBPATH' ) ) {
	die();
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">

	<?php npgFilters::apply( 'theme_head' ); ?>
	<title><?php echo getAlbumTitle() . ' * ' . getBareGalleryTitle(); ?></title>

	<?php
	require '_scripts.php';
	require 'colorbox.php';
	?>

</head>

	<?php require '_header.php'; ?>

	<main id="main" class="site-main">
		<article class="post type-post status-publish format-standard hentry ast-article-single" id="post-17379" itemtype="https://schema.org/CreativeWork" itemscope="itemscope">
			<div class="ast-post-format- single-layout-1">
				<header class="entry-header">
					<div class="ast-single-post-order">
						<h1 class="entry-title" itemprop="headline"><?php printAlbumTitle( true ); ?></h1>
						<div class="entry-meta">
							<span class="cat-links"><?php printParentBreadcrumb( '', ' / ', '  / ' ); ?></span>
							By <span class="posted-by vcard author" itemtype="https://schema.org/Person" itemscope="itemscope" itemprop="author">the Fans of LeFox Librarians</span>
						</div>
					</div>
				</header>

				<div class="entry-content clear" itemprop="text">
					<!-- Content begins -->
					<div id="padbox">
						<div class="byline">
							<p><?php printAlbumDesc(); ?></p>
							<?php if ( function_exists( 'printDownloadAlbumZipURL' ) && getNumAlbums() == 0 ) {
								echo '<p><strong>';
								printDownloadAlbumZipURL( 'Download a zip of all images in this album' );
								echo ' (' . getNumImages() . ' images)';
								echo '</strong></p>';
								}
							?>
						</div>

						<div id="albums">
							<?php while ( next_album() ) : ?>
								<div class="album">
									<div class="thumb">
										<a href="<?php echo html_encode( getAlbumURL() ); ?>" title="<?php echo gettext( 'View album:' ); ?> <?php printAnnotatedAlbumTitle(); ?>"><?php printAlbumThumbImage( getAnnotatedAlbumTitle() ); ?></a>
									</div>
									<div class="albumdesc">
										<h3><a href="<?php echo html_encode( getAlbumURL() ); ?>" title="<?php echo gettext( 'View album:' ); ?> <?php printAnnotatedAlbumTitle(); ?>"><?php printAlbumTitle(); ?></a></h3>
										<center><p><?php printAlbumDesc(); ?></p></center>
									</div>
									<p style="clear: both; "></p>
								</div>
							<?php endwhile; ?>
						</div>
						<div id="images">
							<?php while ( next_image() ) : ?>
								<div class="image">
									<div class="imagethumb">
										<a href="<?php echo html_encode( getDefaultSizedImage() );?>" rel="showcase" title="<?php echo getBareImageTitle();?>" full="<?php echo html_encode( getFullImageURL() ); ?>" solo="<?php echo html_encode( getImageURL() ); ?>" size="<?php echo getFullWidth() . 'x' . getFullHeight(); ?>" /> <?php printImageThumb( getAnnotatedImageTitle() ); ?></a>
									</div>
								</div>
							<?php endwhile; ?>
						</div>
					</div> <!-- PadBox -->

					<div class="nav-links"><span class="page-numbers current"><div class="archive-pagination pagination"><?php printPageListWithNav("« " . gettext("prev"), gettext("next") . " »"); ?></div></span></div>

					<footer class="entry-footer"><p class="entry-meta">Per our <a href="/copyrights/">Copyrights</a> and <a href="/terms-of-use/">Terms of Use</a>, you are welcome to copy and reuse images on this site for your own use, provided you credit this site in some way (via a link back, or simply by mentioning us by name).</p></footer>

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
