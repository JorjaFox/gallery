<?php if (!defined('WEBPATH')) die(); 

error_reporting(0);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
	<?php zp_apply_filter('theme_head'); ?>
	<title>404 - file not found | <?php echo getBareGalleryTitle(); ?></title>
	<link rel="stylesheet" href="<?php echo $_zp_themeroot ?>/zen.css" type="text/css" />
	<link rel="stylesheet" href="http://jorjafox.net/wordpress/wp-content/themes/jfogenesis/style.css" type="text/css" />
	<link rel="stylesheet" href="http://jorjafox.net/content/code/fonts/fonts.css" type="text/css" />
	<link type="text/plain" rel="author" href="http://jorjafox.net/humans.txt" />	
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body class="going-green-pro-forest">

<?php 
zp_apply_filter('theme_body_open');
include("header.php"); 
?>

<main class="content" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">
    <div class="breadcrumb">You are here: <a href="http://jorjafox.net/" title="View Home">Home</a> / <a href="http://jorjafox.net/gallery/">Gallery</a> / 404</div>

    

    <article class="post type-post format-standard category-jorjafox entry zenphoto" itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">

        <header class="entry-header">
            <h1 class="entry-title" itemprop="headline">404</h1>
            <div class="entry-meta"><div class="byline"><p>File Not Found</p></div></div>
        </header>

        <div class="entry-content" itemprop="text">
            <div id="padbox">
                <?php
                
                echo '<p>'.gettext("Whoops! We can't find that page...").'</p>';
            
                if (isset($album)) {
                    echo '<p>' . sprintf(gettext('Album: %s'), html_encode($album)).'</p>';
                }
                if (isset($image)) {
                    echo '<p>' . sprintf(gettext('Image: %s'), html_encode($image)).'</p>';
                }
                if (isset($obj)) {
                    echo '<p>' . sprintf(gettext('Page: %s'), html_encode(substr(basename($obj), 0, -4))).'</p>';
                }
                ?>
            </div> <!-- PadBox -->
        </div>

        <footer class="entry-footer"></footer>
        <div class="pw-footerwidget"><center>
            <?php include("/home/jorjafox/public_html/content/code/ads/medium-rectangle-300x250.php"); ?>
            <?php include("/home/jorjafox/public_html/content/code/ads/line-buttons-500x250.php"); ?>
        </center></div>    

    </article>	
</main>

<?php include("sidebar.php"); ?>
<?php include("footer.php"); ?>

</div> <!-- End Site-container -->
<?php zp_apply_filter('theme_body_close'); ?>

</body>
</html>
