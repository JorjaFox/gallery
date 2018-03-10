<body class="zenphoto custom-background sidebar-content utility-pro-green" itemscope="itemscope" itemtype="http://schema.org/WebPage">

<?php
/*LegacyConverter was here*/
	zp_apply_filter('theme_body_open');
?>

<div class="site-container">
<ul class="genesis-skip-link">
	<li><a href="#genesis-nav-primary" class="screen-reader-shortcut"> Skip to primary navigation</a></li>
	<li><a href="#genesis-nav-footer" class="screen-reader-shortcut"> Skip to footer navigation</a></li>
	<li><a href="#genesis-content" class="screen-reader-shortcut"> Skip to content</a></li>
	<li><a href="#genesis-sidebar-primary" class="screen-reader-shortcut"> Skip to primary sidebar</a></li>
	<li><a href="#genesis-footer-widgets" class="screen-reader-shortcut"> Skip to footer</a></li>
</ul>

<div class="utility-bar">
	<div class="wrap">
		<section id="text-16" class="widget widget_text">
			<div class="widget-wrap">
				<div class="textwidget"><?php
					$curl = curl_init();
				
					curl_setopt_array( $curl, array(
						CURLOPT_FAILONERROR    => true,
						CURLOPT_CONNECTTIMEOUT => 30,
						CURLOPT_TIMEOUT        => 60,
						CURLOPT_FOLLOWLOCATION => false,
						CURLOPT_MAXREDIRS      => 3,
						CURLOPT_SSL_VERIFYPEER => false,
						CURLOPT_RETURNTRANSFER => true,
						CURLOPT_URL            => 'https://jorjafox.net/wp-json/wp/v2/pages/14363'
					) );
				
					$url = curl_exec( $curl );
					curl_close( $curl );

					$obj = json_decode( $url );
					if ( json_last_error() === JSON_ERROR_NONE ) echo $obj->content->rendered;
				?></div>
			</div>
		</section>
	</div>
</div>

<header class="site-header" role="banner" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
	<div class="wrap">
		<div class="title-area"><h1 class="site-title" itemprop="headline"><a href="/">Fans of LeFox</a></h1>
		<p class="site-description" itemprop="description">A fansite for Jorja Fox</p></div>
		<aside class="widget-area header-widget-area"><section id="text-17" class="widget widget_text"><div class="widget-wrap"><div class="textwidget"><img src="/static/content/code/rotate.php"></div>
		</div></section></aside>
	</div>
</header><!--end #header-->

<nav class="nav-primary" role="navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement" id="genwpacc-genesis-nav-primary">
	<div class="wrap">
		<ul id="menu-header" class="menu genesis-nav-menu menu-primary">
			<li class="menu-news menu-item menu-item-type-custom menu-item-object-custom"><a href="/#news">News</a></li>
			<li class="menu-photos menu-item menu-item-type-custom menu-item-object-custom"><a href="/gallery">Photos</a></li>
			<li class="menu-videos menu-item menu-item-type-custom menu-item-object-custom"><a href="/videos/">Videos</a></li>
			<li class="menu-library menu-item menu-item-type-custom menu-item-object-custom"><a href="/library/">Library</a></li>
		</ul>
	</div>
</nav>

<div class="site-inner utility-pro-green"><div class="wrap">
	<div class="content-sidebar-wrap">