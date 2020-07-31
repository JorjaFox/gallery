<?php
if ( ! defined( 'WEBPATH' ) ) {
	die();
}
?>

<body itemtype='https://schema.org/Blog' itemscope='itemscope' class="blog no-customize-support wp-custom-logo ast-separate-container ast-two-container ast-right-sidebar astra-2.5.1 ast-header-custom-item-inside group-blog ast-inherit-site-logo-transparent ast-sticky-main-shrink ast-inherit-site-logo-sticky ast-primary-sticky-enabled astra-addon-2.6.1">

	<?php npgFilters::apply( 'theme_body_open' ); ?>

	<!--[if lte IE 8]>
			<script>
				document.body.className = document.body.className.replace( /(^|\s)(no-)?customize-support(?=\s|$)/, '' ) + ' no-customize-support';
			</script>
		<![endif]-->
	<!--[if gte IE 9]><!-->
	<script>
	(function() {
		var request,
			b = document.body,
			c = 'className',
			cs = 'customize-support',
			rcs = new RegExp('(^|\\s+)(no-)?' + cs + '(\\s+|$)');

		request = true;

		b[c] = b[c].replace(rcs, ' ');
		// The customizer requires postMessage and CORS (if the site is cross domain).
		b[c] += (window.postMessage && request ? ' ' : ' no-') + cs;
	}());
	</script>
	<!--<![endif]-->

	<div class="hfeed site" id="page">
		<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
		<header class="site-header ast-primary-submenu-animation-fade header-main-layout-1 ast-primary-menu-enabled ast-logo-title-inline ast-menu-toggle-icon ast-mobile-header-inline" id="masthead" itemtype="https://schema.org/WPHeader" itemscope="itemscope" itemid="#masthead">
			<div class="main-header-bar-wrap">
				<div class="main-header-bar">
					<div class="ast-container">
						<div class="ast-flex main-header-container">
							<div class="site-branding">
								<div class="ast-site-identity" itemtype="https://schema.org/Organization" itemscope="itemscope">
									<span class="site-logo-img"><a href="https://jorjafox.net/" class="custom-logo-link" rel="home"><img width="120" height="120" src="https://static.jorjafox.net/wordpress/2019/01/flf-logo-120x120.png" class="custom-logo" alt="Fans of LeFox" srcset="//static.jorjafox.net/wordpress/2019/01/flf-logo-120x120.png 120w, //static.jorjafox.net/wordpress/2019/01/flf-logo-200x200.png 200w, //static.jorjafox.net/wordpress/2019/01/flf-logo.png 512w" sizes="(max-width: 120px) 100vw, 120px"/></a></span>
									<div class="ast-site-title-wrap">
										<span class="site-title" itemprop="name"><a href="https://jorjafox.net/" rel="home" itemprop="url">Fans of LeFox</a></span>
									</div>
								</div>
							</div>

							<div class="ast-mobile-menu-buttons">
								<div class="ast-button-wrap">
									<button type="button" class="menu-toggle main-header-menu-toggle  ast-mobile-menu-buttons-fill " aria-controls='primary-menu' aria-expanded='false'>
										<span class="screen-reader-text">Main Menu</span>
										<span class="menu-toggle-icon"></span>
									</button>
								</div>
							</div>
							<div class="ast-main-header-bar-alignment">
								<div class="main-header-bar-navigation">
									<nav class="ast-flex-grow-1 navigation-accessibility" id="site-navigation" aria-label="Site Navigation" itemtype="https://schema.org/SiteNavigationElement" itemscope="itemscope">
										<div class="main-navigation">
											<ul id="primary-menu" class="main-header-menu ast-nav-menu ast-flex ast-justify-content-flex-end  submenu-with-border astra-menu-animation-fade ">
												<li id="menu-item-14304" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14304"><a href="https://jorjafox.net/news/" class="menu-link">News</a></li>
												<li id="menu-item-3622" class="menu-photos menu-item menu-item-type-custom menu-item-object-custom menu-item-3622"><a href="https://jorjafox.net/gallery" class="menu-link">Photos</a></li>
												<li id="menu-item-3623" class="menu-videos menu-item menu-item-type-custom menu-item-object-custom menu-item-3623"><a href="https://jorjafox.net/videos/" class="menu-link">Videos</a></li>
												<li id="menu-item-3624" class="menu-jorjapedia menu-item menu-item-type-custom menu-item-object-custom menu-item-3624"><a href="https://jorjafox.net/library/" class="menu-link">Library</a></li>
											</ul>
										</div>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div data-stick-gutter="32" data-stick-maxwidth="1430">
			<header id="ast-fixed-header" class="site-header ast-primary-submenu-animation-fade header-main-layout-1 ast-primary-menu-enabled ast-logo-title-inline ast-menu-toggle-icon ast-mobile-header-inline" style="visibility: hidden;" data-type="fixed-header">
				<div class="main-header-bar-wrap">
					<div class="main-header-bar">
						<div class="ast-container">
							<div class="ast-flex main-header-container">
								<div class="site-branding">
									<div class="ast-site-identity" itemtype="https://schema.org/Organization" itemscope="itemscope">
										<span class="site-logo-img"><a href="https://jorjafox.net/" class="custom-logo-link" rel="home"><img width="120" height="120" src="https://static.jorjafox.net/wordpress/2019/01/flf-logo-120x120.png" class="custom-logo" alt="Fans of LeFox" srcset="//static.jorjafox.net/wordpress/2019/01/flf-logo-120x120.png 120w, //static.jorjafox.net/wordpress/2019/01/flf-logo-200x200.png 200w, //static.jorjafox.net/wordpress/2019/01/flf-logo.png 512w" sizes="(max-width: 120px) 100vw, 120px"/></a></span>
										<div class="ast-site-title-wrap">
											<span class="site-title" itemprop="name"><a href="https://jorjafox.net/" rel="home" itemprop="url">Fans of LeFox</a></span>
										</div>
									</div>
								</div>

								<div class="ast-mobile-menu-buttons">
									<div class="ast-button-wrap">
										<button type="button" class="menu-toggle main-header-menu-toggle  ast-mobile-menu-buttons-fill " aria-controls='primary-menu' aria-expanded='false'>
											<span class="screen-reader-text">Main Menu</span>
											<span class="menu-toggle-icon"></span>
										</button>
									</div>
								</div>
								<div class="ast-main-header-bar-alignment">
									<div class="main-header-bar-navigation">
										<nav class="ast-flex-grow-1 navigation-accessibility" id="site-navigation" aria-label="Site Navigation" itemtype="https://schema.org/SiteNavigationElement" itemscope="itemscope">
											<div class="main-navigation">
												<ul id="primary-menu" class="main-header-menu ast-nav-menu ast-flex ast-justify-content-flex-end  submenu-with-border astra-menu-animation-fade ">
													<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14304"><a href="https://jorjafox.net/news/" class="menu-link">News</a></li>
													<li class="menu-photos menu-item menu-item-type-custom menu-item-object-custom menu-item-3622"><a href="https://jorjafox.net/gallery" class="menu-link">Photos</a></li>
													<li class="menu-videos menu-item menu-item-type-custom menu-item-object-custom menu-item-3623"><a href="https://jorjafox.net/videos/" class="menu-link">Videos</a></li>
													<li class="menu-jorjapedia menu-item menu-item-type-custom menu-item-object-custom menu-item-3624"><a href="https://jorjafox.net/library/" class="menu-link">Library</a></li>
												</ul>
											</div>
										</nav>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
		</div>


	<div id="content" class="site-content" style="height: auto !important;">
		<div class="ast-container" style="height: auto !important;">
			<div id="content" class="site-content">
				<div class="ast-container">
					<div id="primary" class="content-area primary">
