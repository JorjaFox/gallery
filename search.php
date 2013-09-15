<?php if (!defined('WEBPATH')) die(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<?php zp_apply_filter('theme_head'); ?>
	<title>Search Results | <?php echo getBareGalleryTitle(); ?></title>
    <link rel="stylesheet" href="<?php echo $_zp_themeroot ?>/zen.css" type="text/css" />
	<link rel="stylesheet" href="http://jorjafox.net/wordpress/wp-content/themes/jfogenesis/style.css" type="text/css" />
	<link rel="stylesheet" href="http://jorjafox.net/content/code/fonts/fonts.css" type="text/css" />
	<link type="text/plain" rel="author" href="http://jorjafox.net/humans.txt" />
	
    <!--[if lt IE 9]>
    	<script type="text/javascript" src="http://jorjafox.net/content/code/respond.src.js"></script>
    	<link rel="stylesheet" href="<?php echo $_zp_themeroot ?>/zen-ie.css" type="text/css" />
    <![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	
	<script type="text/javascript">
	// <!-- <![CDATA[
	$(document).ready(function(){
	$(".colorbox").colorbox({inline:true, href:"#imagethumb"});
	$("a[rel='showcase']").colorbox({transition:"none", width:"75%", photo:true,title:function () { var size = $(this).attr('size'); return "View Image Page".link($(this).attr('solo')) + " | " + "View Full Sized".link($(this).attr('full')) + " ("+size+")" ;} });});
	// ]]> -->
	</script></head>
<body>

<?php 
zp_apply_filter('theme_body_open');
include("header.php"); 
?>
    <div class="breadcrumb">You are here: <a href="http://jorjafox.net/" title="View Home">Home</a> / <a href="http://jorjafox.net/gallery/">Gallery</a> / Search Results</div>
        	
    <div class="post-6100 post type-post status-publish format-standard hentry category-jorjafox tag-mediaarticle tag-jorja-foxproducer">

        <h2 class="entry-title">Search Results</h2>
		<div class="byline"><?php
		if (($total = getNumImages() + getNumAlbums()) > 0) {
			if (isset($_REQUEST['date'])){
				$searchwords = getSearchDate();
 		} else { $searchwords = getSearchWords(); }
			echo '<p>'.sprintf(gettext('Total matches for <em>%1$s</em>: %2$u'), $searchwords, $total).'</p>';
		}
		$c = 0;
		?></div>
		
		<div class="entry-content">

		<div id="padbox">

    <?php if ((getNumAlbums()) > 0) { ?>
        <div id="albums">
           <?php while (next_album()): ?>
           <div class="album">
		     <div class="albumdesc">
               <h3><a href="<?php echo html_encode(getAlbumLinkURL());?>" title="<?php echo gettext('View album:'); ?> <?php echo getAnnotatedAlbumTitle();?>"><?php printAlbumTitle(); ?></a></h3>
               <p><?php printAlbumDesc(); ?></p>
             </div>
             <div class="thumb">
               <a href="<?php echo html_encode(getAlbumLinkURL());?>" title="<?php echo gettext('View album:'); ?> <?php echo getAnnotatedAlbumTitle();?>"><?php printAlbumThumbImage(getAnnotatedAlbumTitle()); ?></a>
             </div>
             <p style="clear: both; "></p>
           </div>
        <?php endwhile; ?>
        </div>        
    <?php } ?>


    <?php if ((getNumImages()) > 0) { ?>
        <div id="images">
		   <?php $x=0; while (next_image(true)):
           if ($x>=1) { $show='style="display:none;"'; } else { $show='';}  ?>
           <div class="image"><div class="imagethumb">
		<a href="<?php echo html_encode(getDefaultSizedImage());?>" rel="showcase" title="<?php echo getBareImageTitle();?>" full="<?php echo html_encode(getFullImageURL()); ?>" solo="<?php echo html_encode(getImageLinkURL()); ?>" size="<?php echo getFullWidth() . "x" . getFullHeight(); ?>" /> <?php printImageThumb(getAnnotatedImageTitle()); ?></a>
		   </div></div>
           <?php $x=$x+1;
           endwhile; ?>
        </div>
    <?php } ?>

		<br clear="all" />

	</div>
<div class="sp-content"><iframe src="http://jorjafox.net/content/code/ads/studiopress-468x60.php" width="480" height="80" frameborder="0">
<?php include("/home/jorjafox/public_html/content/code/ads/studiopress-468x60.php"); ?></iframe></div>

		</div> <!-- entry content -->

        	</div> <!-- end post -->
        </div> <!-- end content hfeed -->

<?php include("sidebar.php"); ?>
<?php include("footer.php"); ?>

</div>
<?php zp_apply_filter('theme_body_close'); ?>

</body>
</html>