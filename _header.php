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

		<header class="site-header ast-primary-submenu-animation-fade header-main-layout-1 ast-primary-menu-enabled ast-logo-title-inline ast-builder-menu-toggle-icon ast-mobile-header-inline" id="masthead" itemtype="https://schema.org/WPHeader" itemscope="itemscope" itemid="#masthead">
			<div id="ast-desktop-header" data-toggle-type="dropdown">
			<div class="ast-main-header-wrap main-header-bar-wrap ">
			<div class="ast-primary-header-bar ast-primary-header main-header-bar site-header-focus-item" data-section="section-primary-header-builder">
			<div class="site-primary-header-wrap ast-builder-grid-row-container site-header-focus-item ast-container" data-section="section-primary-header-builder">
			<div class="ast-builder-grid-row ast-builder-grid-row-has-sides ast-builder-grid-row-no-center">
			<div class="site-header-primary-section-left site-header-section ast-flex site-header-section-left">
			<div class="ast-builder-layout-element ast-flex site-header-focus-item" data-section="title_tagline">
			<div class="site-branding ast-site-identity" itemtype="https://schema.org/Organization" itemscope="itemscope">
			<span class="site-logo-img"><a href="https://jorjafox.net/" class="custom-logo-link" rel="home" aria-current="page"><img width="120" height="120" src="https://static.jorjafox.net/wordpress/2019/01/flf-logo-120x120.png" class="custom-logo" alt="Fans of LeFox" srcset="https://static.jorjafox.net/wordpress/2019/01/flf-logo-120x120.png 120w, https://static.jorjafox.net/wordpress/2019/01/flf-logo-200x200.png 200w, https://static.jorjafox.net/wordpress/2019/01/flf-logo.png 512w" sizes="(max-width: 120px) 100vw, 120px"></a></span><div class="ast-site-title-wrap">
			<h1 class="site-title" itemprop="name">
			<a href="https://jorjafox.net/" rel="home" itemprop="url">
			Fans of LeFox
			</a>
			</h1>
			<p class="site-description" itemprop="description">
			A fansite celebrating the actor and activist, Jorja Fox
			</p>
			</div> </div>

			</div>
			</div>
			<div class="site-header-primary-section-right site-header-section ast-flex ast-grid-right-section">
			<div class="ast-builder-menu-1 ast-builder-menu ast-flex ast-builder-menu-1-focus-item ast-builder-layout-element site-header-focus-item" data-section="section-hb-menu-1">
			<div class="ast-main-header-bar-alignment"><div class="main-header-bar-navigation"><nav class="ast-flex-grow-1 navigation-accessibility site-header-focus-item" id="site-navigation" aria-label="Site Navigation" itemtype="https://schema.org/SiteNavigationElement" itemscope="itemscope"><div class="main-navigation ast-inline-flex"><ul id="ast-hf-menu-1" class="main-header-menu ast-nav-menu ast-flex  submenu-with-border astra-menu-animation-slide-down  ast-menu-hover-style-underline  stack-on-mobile" aria-expanded="false"><li id="menu-item-14304" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14304"><a href="https://jorjafox.net/news/" class="menu-link">News</a></li>
			<li id="menu-item-3622" class="menu-photos menu-item menu-item-type-custom menu-item-object-custom menu-item-3622"><a href="https://jorjafox.net/gallery" class="menu-link">Photos</a></li>
			<li id="menu-item-3623" class="menu-videos menu-item menu-item-type-custom menu-item-object-custom menu-item-3623"><a href="https://jorjafox.net/videos/" class="menu-link">Videos</a></li>
			<li id="menu-item-3624" class="menu-jorjapedia menu-item menu-item-type-custom menu-item-object-custom menu-item-3624"><a href="https://jorjafox.net/library/" class="menu-link">Library</a></li>
			</ul></div></nav></div></div> </div>
			</div>
			</div>
			</div>
			</div>
			</div>
			<div class="ast-desktop-header-content content-align-flex-start ">
			</div>
			</div>
			<div id="ast-mobile-header" class="ast-mobile-header-wrap " data-type="dropdown">
			<div class="ast-main-header-wrap main-header-bar-wrap">
			<div class="ast-primary-header-bar ast-primary-header main-header-bar site-primary-header-wrap site-header-focus-item ast-builder-grid-row-layout-default ast-builder-grid-row-tablet-layout-default ast-builder-grid-row-mobile-layout-default" data-section="section-primary-header-builder">
			<div class="ast-builder-grid-row ast-builder-grid-row-has-sides ast-builder-grid-row-no-center">
			<div class="site-header-primary-section-left site-header-section ast-flex site-header-section-left">
			<div class="ast-builder-layout-element ast-flex site-header-focus-item" data-section="title_tagline">
			<div class="site-branding ast-site-identity" itemtype="https://schema.org/Organization" itemscope="itemscope">
			<span class="site-logo-img"><a href="https://jorjafox.net/" class="custom-logo-link" rel="home" aria-current="page"><img width="120" height="120" src="https://static.jorjafox.net/wordpress/2019/01/flf-logo-120x120.png" class="custom-logo" alt="Fans of LeFox" srcset="https://static.jorjafox.net/wordpress/2019/01/flf-logo-120x120.png 120w, https://static.jorjafox.net/wordpress/2019/01/flf-logo-200x200.png 200w, https://static.jorjafox.net/wordpress/2019/01/flf-logo.png 512w" sizes="(max-width: 120px) 100vw, 120px"></a></span><div class="ast-site-title-wrap">
			<h1 class="site-title" itemprop="name">
			<a href="https://jorjafox.net/" rel="home" itemprop="url">
			Fans of LeFox
			</a>
			</h1>
			<p class="site-description" itemprop="description">
			A fansite celebrating the actor and activist, Jorja Fox
			</p>
			</div> </div>

			</div>
			</div>
			<div class="site-header-primary-section-right site-header-section ast-flex ast-grid-right-section">
			<div class="ast-builder-layout-element ast-flex site-header-focus-item" data-section="section-header-mobile-trigger">
			<div class="ast-button-wrap">
			<button type="button" class="menu-toggle main-header-menu-toggle ast-mobile-menu-trigger-fill" aria-expanded="false">
			<span class="screen-reader-text">Main Menu</span>
			<span class="mobile-menu-toggle-icon">
			<span class="ahfb-svg-iconset ast-inline-flex svg-baseline"><svg role="img" class="ast-mobile-svg ast-menu-svg" fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M3 13h18c0.552 0 1-0.448 1-1s-0.448-1-1-1h-18c-0.552 0-1 0.448-1 1s0.448 1 1 1zM3 7h18c0.552 0 1-0.448 1-1s-0.448-1-1-1h-18c-0.552 0-1 0.448-1 1s0.448 1 1 1zM3 19h18c0.552 0 1-0.448 1-1s-0.448-1-1-1h-18c-0.552 0-1 0.448-1 1s0.448 1 1 1z"></path></svg></span><span class="ahfb-svg-iconset ast-inline-flex svg-baseline"><svg class="ast-mobile-svg ast-close-svg" fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M5.293 6.707l5.293 5.293-5.293 5.293c-0.391 0.391-0.391 1.024 0 1.414s1.024 0.391 1.414 0l5.293-5.293 5.293 5.293c0.391 0.391 1.024 0.391 1.414 0s0.391-1.024 0-1.414l-5.293-5.293 5.293-5.293c0.391-0.391 0.391-1.024 0-1.414s-1.024-0.391-1.414 0l-5.293 5.293-5.293-5.293c-0.391-0.391-1.024-0.391-1.414 0s-0.391 1.024 0 1.414z"></path></svg></span> </span>
			</button>
			</div>
			</div>
			</div>
			</div>
			</div>
			</div>
			<div class="ast-mobile-header-content content-align-flex-start ">
			<div class="ast-builder-menu-1 ast-builder-menu ast-flex ast-builder-menu-1-focus-item ast-builder-layout-element site-header-focus-item" data-section="section-hb-menu-1">
			<div class="ast-main-header-bar-alignment"><div class="main-header-bar-navigation"><nav class="ast-flex-grow-1 navigation-accessibility site-header-focus-item" id="site-navigation" aria-label="Site Navigation" itemtype="https://schema.org/SiteNavigationElement" itemscope="itemscope"><div class="main-navigation ast-inline-flex"><ul id="ast-hf-menu-1" class="main-header-menu ast-nav-menu ast-flex  submenu-with-border astra-menu-animation-slide-down  ast-menu-hover-style-underline  stack-on-mobile" aria-expanded="false"><li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14304"><a href="https://jorjafox.net/news/" class="menu-link">News</a></li>
			<li class="menu-photos menu-item menu-item-type-custom menu-item-object-custom menu-item-3622"><a href="https://jorjafox.net/gallery" class="menu-link">Photos</a></li>
			<li class="menu-videos menu-item menu-item-type-custom menu-item-object-custom menu-item-3623"><a href="https://jorjafox.net/videos/" class="menu-link">Videos</a></li>
			<li class="menu-jorjapedia menu-item menu-item-type-custom menu-item-object-custom menu-item-3624"><a href="https://jorjafox.net/library/" class="menu-link">Library</a></li>
			</ul></div></nav></div></div> </div>
			</div>
			</div>
		</header>
		<div data-stick-gutter="32" data-stick-maxwidth="1430">
			<header id="ast-fixed-header" class="site-header ast-primary-submenu-animation-fade header-main-layout-1 ast-primary-menu-enabled ast-logo-title-inline ast-menu-toggle-icon ast-mobile-header-inline" style="visibility: hidden; display:none;" data-type="fixed-header">
				<div class="main-header-bar-wrap">
					<div class="main-header-bar">
						<div class="ast-container">
							<div class="ast-flex main-header-container">
								<div class="site-branding">
									<div class="ast-site-identity" itemtype="https://schema.org/Organization" itemscope="itemscope">
										<span class="site-logo-img"><a href="https://jorjafox.net/" class="custom-logo-link" rel="home"><img width="120" height="120" src="https://static.jorjafox.net/wordpress/2019/01/flf-logo-120x120.png" class="custom-logo" alt="Fans of LeFox" srcset="//static.jorjafox.net/wordpress/2019/01/flf-logo-120x120.png 120w, //static.jorjafox.net/wordpress/2019/01/flf-logo-200x200.png 200w, //static.jorjafox.net/wordpress/2019/01/flf-logo.png 512w" sizes="(max-width: 120px) 100vw, 120px"/></a></span>
										<div class="ast-site-title-wrap">
											<h1 class="site-title" itemprop="name"><a href="https://jorjafox.net/" rel="home" itemprop="url">Fans of LeFox</a></h1>
											<p class="site-description" itemprop="description">A fansite celebrating the actor and activist, Jorja Fox</p>
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
