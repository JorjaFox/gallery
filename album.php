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
							<span class="cat-links"><a href="/gallery">Gallery</a> / <?php printParentBreadcrumb( '', ' / ', '  / ' ); ?></span>
							By <span class="posted-by vcard author" itemtype="https://schema.org/Person" itemscope="itemscope" itemprop="author">the Fans of LeFox Librarians</span>
						</div>
					</div>
				</header>

				<div class="entry-content clear" itemprop="text">
					<!-- Content begins -->
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

					<div class="gallery-grid gallery-albums">
						<div class="gallery-items gallery-columns-2 gallery-is-grid gallery-equal-height">
							<?php while (next_album()): ?>
								<figure>
									<div class="gallery-inner-wrap">
										<div class="gallery-album-image"><a href="<?php echo htmlspecialchars(getAlbumURL());?>" title="<?php echo gettext('View album:'); ?> <?php echo getAnnotatedAlbumTitle();?>"><?php printAlbumThumbImage(getAnnotatedAlbumTitle()); ?></a></div>
										<div class="gallery-text">
											<h3 class="gallery-album-title"><a href="<?php echo htmlspecialchars(getAlbumURL());?>" title="<?php echo gettext('View album:'); ?> <?php echo getAnnotatedAlbumTitle();?>"><?php printAlbumTitle(); ?></a></h3>
											<div class="gallery-album-excerpt"><p>
												<?php
												printAlbumDesc();
												echo ' (' . getNumImages() . ' images)';
												?>
											</p></div>
										</div>
									</div>
								</figure>
							<?php endwhile; ?>
						</div>
					</div>

					<div class="gallery-grid gallery-images">
						<div class="gallery-items gallery-columns-2 gallery-is-grid gallery-equal-height">
							<?php while (next_image()): ?>
								<figure>
									<div class="gallery-inner-wrap">
										<div class="gallery-album-image"><a href="<?php echo html_encode( getDefaultSizedImage() );?>" rel="showcase" title="<?php echo getBareImageTitle();?>" full="<?php echo html_encode( getFullImageURL() ); ?>" solo="<?php echo html_encode( getImageURL() ); ?>" size="<?php echo getFullWidth() . 'x' . getFullHeight(); ?>" /> <?php printImageThumb( getAnnotatedImageTitle() ); ?></a></div>
									</div>
								</figure>
							<?php endwhile; ?>
						</div>
					</div>

					<p>Per our <a href="/copyrights/">Copyrights</a> and <a href="/terms-of-use/">Terms of Use</a>, you are welcome to copy and reuse images on this site for your own use, provided you credit this site in some way (via a link back, or simply by mentioning us by name).</p>

					<!-- Content Ends -->
				</div>
			</div>
		</article>
	</main>

	<div class="ast-pagination">
		<nav class="navigation pagination" role="navigation" aria-label="Posts">
			<h2 class="screen-reader-text">Gallery navigation</h2>
			<div class="nav-links"><?php printPageListWithNav( '← Previous Page', ' Next Page →', ); ?></div>
		</nav>
	</div>

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
