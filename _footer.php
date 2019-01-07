<?php
if ( ! defined( 'WEBPATH' ) ) {
	die();
}
?>

		</div> <!-- content-sidebar-wrap -->
	</div> <!-- end .site-inner -->

	<div id="footer" class="footer-widgets">
		<h2 class="genesis-sidebar-title screen-reader-text">Footer</h2>
		<div class="flexible-widgets widget-area widget-even featured-footer-layout">
			<div class="wrap">
				<section id="custom_html-7" class="widget_text widget widget_custom_html">
					<div class="widget_text widget-wrap">
						<h3 class="widgettitle widget-title">Follow Jorja</h3>
						<div class="textwidget custom-html-widget">
							<a href="http://jorjafox.com/" title="Jorja's Website"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="m23.633 9.518-1.633-1.337v-6.181h-4v2.909l-6-4.909-11.633 9.518c-.427.351-.49.98-.141 1.407.35.429.979.489 1.407.142l.367-.301v11.234c0 1.105.895 2 2 2h5v-6c0-1.657 1.343-3 3-3s3 1.343 3 3v6h5c1.105 0 2-.895 2-2v-11.234l.367.3c.186.151.41.226.633.226.29 0 .577-.125.774-.367.35-.427.287-1.057-.141-1.407z"></path></svg><span class="screen-reader-text">Home</span></a>
							<a href="https://www.facebook.com/JorjaFoxWorldwide" title="Jorja on Facebook"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M448 80v352c0 26.5-21.5 48-48 48h-85.3V302.8h60.6l8.7-67.6h-69.3V192c0-19.6 5.4-32.9 33.5-32.9H384V98.7c-6.2-.8-27.4-2.7-52.2-2.7-51.6 0-87 31.5-87 89.4v49.9H184v67.6h60.9V480H48c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48h352c26.5 0 48 21.5 48 48z"></path></svg><span class="screen-reader-text">Facebook</span></a>
							<a href="http://twitter.com/jorjafoxofficia" title="Jorja on Twitter"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm-48.9 158.8c.2 2.8.2 5.7.2 8.5 0 86.7-66 186.6-186.6 186.6-37.2 0-71.7-10.8-100.7-29.4 5.3.6 10.4.8 15.8.8 30.7 0 58.9-10.4 81.4-28-28.8-.6-53-19.5-61.3-45.5 10.1 1.5 19.2 1.5 29.6-1.2-30-6.1-52.5-32.5-52.5-64.4v-.8c8.7 4.9 18.9 7.9 29.6 8.3a65.447 65.447 0 0 1-29.2-54.6c0-12.2 3.2-23.4 8.9-33.1 32.3 39.8 80.8 65.8 135.2 68.6-9.3-44.5 24-80.6 64-80.6 18.9 0 35.9 7.9 47.9 20.7 14.8-2.8 29-8.3 41.6-15.8-4.9 15.2-15.2 28-28.8 36.1 13.2-1.4 26-5.1 37.8-10.2-8.9 13.1-20.1 24.7-32.9 34z"></path></svg><span class="screen-reader-text">Twitter</span></a>
						</div>
					</div>
				</section>
				<section id="search-2" class="widget widget_search">
					<div class="widget-wrap">
						<h3 class="widgettitle widget-title">Search</h3>
						<?php
						if ( getOption( 'Allow_search' ) ) {
							printSearchForm( '' );
						}
						?>
					</div>
				</section>
			</div>
		</div>
	</div>

	<footer class="site-footer" itemscope="" itemtype="https://schema.org/WPFooter">
		<div class="wrap">
			<nav class="nav-secondary" aria-label="Secondary" itemscope="" itemtype="https://schema.org/SiteNavigationElement">
				<div class="wrap">
					<ul id="menu-footer" class="menu genesis-nav-menu menu-secondary js-superfish sf-js-enabled sf-arrows">
						<li id="menu-item-14759" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14759"><a href="https://jorjafox.net/tos/" itemprop="url"><span itemprop="name">Terms of Use</span></a></li>
						<li id="menu-item-13717" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13717"><a href="https://jorjafox.net/tos/copyrights/" itemprop="url"><span itemprop="name">Copyright</span></a></li>
						<li id="menu-item-14767" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14767"><a href="https://jorjafox.net/tos/privacy/" itemprop="url"><span itemprop="name">Privacy Policy</span></a></li>
					</ul>
				</div>
			</nav>
			<p>Copyright &copy; 1996-<?php echo date( 'Y' ); ?> · <a href="https://zenphoto20.us/">ZenPhoto20</a> · <a href="https://shareasale.com/r.cfm?b=1085427&u=728549&m=28169&urllink=&afftrack=">Authority Pro</a> on <a href="https://shareasale.com/r.cfm?b=1294642&u=728549&m=28169&urllink=&afftrack=">Genesis Framework</a> · Hosted by <a href="https://liquidweb.evyy.net/c/294289/297312/4464">Liquidweb</a></p>
		</div>
	</footer>

	</div> <!-- End Site-Container -->
