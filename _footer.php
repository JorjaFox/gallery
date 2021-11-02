<?php
if ( ! defined( 'WEBPATH' ) ) {
	die();
}
?>

		</div> <!-- content-sidebar-wrap -->
	</div> <!-- end .site-inner -->
</div><!-- end ast-container -->

	<footer class="site-footer" id="colophon" itemtype="https://schema.org/WPFooter" itemscope="itemscope" itemid="#colophon">
			<div class="site-above-footer-wrap ast-builder-grid-row-container site-footer-focus-item ast-builder-grid-row-2-equal ast-builder-grid-row-tablet-2-equal ast-builder-grid-row-mobile-full ast-footer-row-inline ast-footer-row-tablet-stack ast-footer-row-mobile-stack" data-section="section-above-footer-builder">
				<div class="ast-builder-grid-row-container-inner">
					<div class="ast-builder-footer-grid-columns site-above-footer-inner-wrap ast-builder-grid-row">
						<div class="site-footer-above-section-1 site-footer-section site-footer-section-1">
							<aside class="footer-widget-area widget-area site-footer-focus-item" data-section="sidebar-widgets-footer-widget-2">
								<div class="footer-widget-area-inner site-info-inner">
									<section id="search-2" class="widget widget_search"><h2 class="widget-title">Search</h2>
										<!-- Search -->
										<?php
										if ( getOption( 'Allow_search' ) ) {
											printSearchForm( null, 'search', null, gettext( 'Search' ), null, null, null, null, 'Enter Search Term' );
										}
										?>
									</section>
								</div>
							</aside>
						</div>
						<div class="site-footer-above-section-2 site-footer-section site-footer-section-2">
							<aside>
								<h2 class="widget-title">Updates</h2>
								<a href="https://jorjafox.net/updates/"><button type="submit" style="margin-left: 0px;" name="jetpack_subscriptions_widget">Subscribe to Updates</button></a>
							</aside>
						</div>
					</div>
				</div>
			</div>
			<div class="site-primary-footer-wrap ast-builder-grid-row-container site-footer-focus-item ast-builder-grid-row-2-equal ast-builder-grid-row-tablet-2-equal ast-builder-grid-row-mobile-full ast-footer-row-inline ast-footer-row-tablet-stack ast-footer-row-mobile-stack" data-section="section-primary-footer-builder">
				<div class="ast-builder-grid-row-container-inner">
					<div class="ast-builder-footer-grid-columns site-primary-footer-inner-wrap ast-builder-grid-row">
						<div class="site-footer-primary-section-1 site-footer-section site-footer-section-1">
							<aside class="footer-widget-area widget-area site-footer-focus-item" data-section="sidebar-widgets-footer-widget-4" aria-label="Footer Widget 4">
								<div class="footer-widget-area-inner site-info-inner"><section id="block-19" class="widget widget_block"><p><?php include 'ads/footer-left.html'; ?></p></section></div>
							</aside>
						</div>
						<div class="site-footer-primary-section-2 site-footer-section site-footer-section-2">
							<aside class="footer-widget-area widget-area site-footer-focus-item" data-section="sidebar-widgets-footer-widget-3" aria-label="Footer Widget 3">
								<div class="footer-widget-area-inner site-info-inner"><section id="block-15" class="widget widget_block"><p>><?php include 'ads/footer-right.html'; ?></p></section></div>
							</aside>
						</div>
					</div>
				</div>
			</div>

			<div class="site-below-footer-wrap ast-builder-grid-row-container site-footer-focus-item ast-builder-grid-row-2-equal ast-builder-grid-row-tablet-2-equal ast-builder-grid-row-mobile-full ast-footer-row-stack ast-footer-row-tablet-stack ast-footer-row-mobile-stack" data-section="section-below-footer-builder">
				<div class="ast-builder-grid-row-container-inner">
					<div class="ast-builder-footer-grid-columns site-below-footer-inner-wrap ast-builder-grid-row">
						<div class="site-footer-below-section-1 site-footer-section site-footer-section-1">
							<div class="ast-builder-layout-element ast-flex site-footer-focus-item ast-footer-copyright" data-section="section-footer-builder">
								<div class="ast-footer-copyright"><div class="ast-footer-html-inner"><p>Copyright © 1996 — <?php echo date( 'Y' ); ?> <a href="/">Fans of LeFox</a><br>
								Powered by <strong><a href="https://wpastra.com/?bsf=5672">Astra</a></strong> on <strong><a href="https://netphotographics.org">NetPhotoGraphics</a></strong></p>
								</div></div>
							</div>
						</div>
						<div class="site-footer-below-section-2 site-footer-section site-footer-section-2">
							<div class="footer-widget-area widget-area site-footer-focus-item" data-section="section-footer-menu">
								<div class="footer-bar-navigation"><nav class="ast-flex-grow-1 navigation-accessibility footer-navigation" id="site-navigation" aria-label="Site Navigation" itemtype="https://schema.org/SiteNavigationElement" itemscope="itemscope"><div class="footer-nav-wrap"><ul id="astra-footer-menu" class="main-header-menu ast-nav-menu ast-flex astra-footer-horizontal-menu astra-footer-tablet-horizontal-menu astra-footer-mobile-horizontal-menu" aria-expanded="false"><li id="menu-item-14759" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14759"><a href="https://jorjafox.net/tos/" class="menu-link">Terms of Use</a></li><li id="menu-item-13717" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13717"><a href="https://jorjafox.net/tos/copyrights/" class="menu-link">Copyright</a></li><li id="menu-item-14767" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-14767"><a href="https://jorjafox.net/tos/privacy/" class="menu-link">Privacy Policy</a></li></ul></div></nav></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

</div> <!-- End Site Content -->
</div> <!-- End Site -->

<a id="ast-scroll-top" class="ast-scroll-top-icon ast-scroll-to-top-right" data-on-devices="both" style="display: inline;" href="#"><span class="screen-reader-text">Scroll to Top</span></a>

<script id='astra-theme-js-js-extra'>
	var astra = {
		"break_point": "768",
		"isRtl": "",
		"infinite_count": "2",
		"astinfiniteposttype": "page",
		"infinite_total": "0",
		"pagination": "number",
		"masonryEnabled": "",
		"blogMasonryBreakPoint": "768"
	};
</script>

<script src="/wordpress/wp-content/themes/astra/assets/js/minified/style.min.js?ver=<?php echo FLF_STABLE_THEME; ?>"></script>

<script id="astra-addon-js-js-extra">
	var astraAddon = {
	"sticky_active": "",
	"is_header_builder_active": "1"
};
</script>

<script src="/gallery/themes/fansoflefox/css/astra-addon.js?ver=<?php echo FLF_STABLE_THEME; ?>"></script>
