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
	<title><?php printBareImageTitle(); ?> | <?php printGalleryTitle(); ?></title>

	<?php require '_scripts.php'; ?>

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
						<span class="author-name" itemprop="name">By the Fans of LeFox Librarians</span>
					</div>
				</div>
			</header>

			<div class="entry-content clear" itemprop="text">
				<!-- Content begins -->
				<div id="padbox">
					<div class="byline">
						<p><?php printImageDesc( true ); ?></p>

						<?php
						$credit = getImageData( 'credit' );
						if ( $credit ) {
							?>
								<p><?php printImageData( 'credit', 'Credit: ' ); ?></p>
							<?php
						}
						?>
					</div>

					<!-- The Image -->
					<div id="image"><div class="fullsize">
						<?php printCustomSizedImageMaxSpace( getBareImageTitle(), 580, 580 ); ?>
					</div></div>
					<div style="clear:both;"></div>

					<nav class="navigation post-navigation" role="navigation" aria-label="Posts">
						<h2 class="screen-reader-text">Post navigation</h2>
						<div class="nav-links">
							<?php
							if ( hasPrevImage() ) {
								?>
								<div class="nav-previous">
									<a href="<?php echo html_encode( getPrevImageURL() ); ?>" rel="prev"><span class="ast-left-arrow">←</span> Previous Image</a>
								</div>
								<?php
							}
							if ( hasNextImage() ) {
								?>
								<div class="nav-next">
									<a href="<?php echo html_encode( getNextImageURL() ); ?>" rel="next">Next Image <span class="ast-right-arrow">→</span></a>
								</div>
								<?php
							}
							?>
						</div>
					</nav>

					<!-- Download links -->
					<div class="downloadline"><p><em><a href="<?php echo htmlspecialchars( getFullImageURL() ); ?>" title="Right-click on the link and Save-As">Download Full Size: <?php echo getFullWidth() . 'x' . getFullHeight(); ?></a></em><br />(Right-click on the link and Save-As)</p></div>

				</div> <!-- PadBox -->

				<p>&nbsp;</br>Per our <a href="/copyrights/">Copyrights</a> and <a href="/terms-of-use/">Terms of Use</a>, you are welcome to copy and reuse images on this site for your own use, provided you credit this site in some way (via a link back, or simply by mentioning us by name).</p>

				<!-- Content Ends -->
			</div>
		</div>
		<?php require '_sharethis.php'; ?>
	</article>

</main>

<?php
	require '_sidebar.php';
	require '_footer.php';
?>

<?php npgFilters::apply( 'theme_body_close' ); ?>

</body>
</html>
