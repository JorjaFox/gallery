    </div> <!-- content-sidebar-wrap -->
    </div><!-- end wrap --></div> <!-- end .site-inner -->

	<div class="footer-widgets" id="genwpacc-genesis-footer-widgets">
		<div class="wrap"><div class="footer-widgets-1 widget-area">
			<section id="text-11" class="widget widget_text"><div class="widget-wrap">
				<h4 class="widget-title widgettitle">Follow Jorja</h4>
				<div class="textwidget"><a href="http://jorjafox.com/" title="Jorja's Website"><i class="fa fa-home fa-home fa-3x"></i></a> <a href="https://www.facebook.com/JorjaFoxWorldwide" title="Jorja on Facebook"><i class="fa fa-facebook-square fa-3x"></i></a> <a href="http://twitter.com/jorjafoxofficia" title="Jorja on Twitter"><i class="fa fa-twitter-square fa-3x"></i></a> </div>
			</div></section>
		</div>
		<div class="footer-widgets-2 widget-area">
			<section id="search-2" class="widget widget_search"><div class="widget-wrap">
				<h4 class="widget-title widgettitle">Search</h4>
				<?php 
				if (getOption('Allow_search')) {
					printSearchForm('');
				}
				?>
			</div></section>
		</div>
		<div class="footer-widgets-3 widget-area">
			<section id="text-10" class="widget widget_text"><div class="widget-wrap">
				<h4 class="widget-title widgettitle">Follow Us</h4>
				<div class="textwidget"><a href="https://www.facebook.com/JFO.Fans" title="Facebook"><i class="fa fa-facebook-square fa-3x"></i></a> <a href="https://google.com/+JorjafoxNet" title="Google+"><i class="fa fa-google-plus-square fa-3x"></i></a> <a href="http://twitter.com/LeFoxFans" title="Twitter"><i class="fa fa-twitter-square fa-3x"></i></a> <a href="http://tumblr.jorjafox.net/" title="Tumblr"><i class="fa fa-tumblr-square fa-3x"></i></a></div>
			</div></section>
		</div>
	</div></div>

	<nav class="nav-footer" role="navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement" id="genwpacc-genesis-nav-footer"><div class="wrap">
		<ul id="menu-footer" class="menu genesis-nav-menu menu-footer">
			<li id="menu-item-13467" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-13467"><a href="http://jorjafox.net/about">About Us</a></li>
			<li id="menu-item-3597" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3597"><a href="http://jorjafox.net/disclaimer/">Disclaimer</a></li>
			<li id="menu-item-3598" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3598"><a href="http://jorjafox.net/copyrights/">Copyright</a></li>
			<li id="menu-item-3599" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3599"><a href="http://jorjafox.net/policy/">Policy</a></li>
		</ul>
	</div></nav>

	<footer class="site-footer" role="contentinfo" itemscope="itemscope" itemtype="http://schema.org/WPFooter">
		<div class="wrap"><p>Copyright &copy; 1996-<?php echo date("Y"); ?> <em><a href="/">Fans of LeFox</a></em><br />Powered by <a href="https://http://zenphoto20.us/">ZenPhoto20</a> & <a href="http://www.shareasale.com/r.cfm?b=778546&u=728549&m=61628&urllink=&afftrack=">Utility Pro</a></p></div>
		<div class="adboxes-footer">
			<?php
				$_GET['name'] = 'leaderboard-728x90';
				include($_SERVER["DOCUMENT_ROOT"]."/static/content/code/ads/adboxes.php");
			?>
		</footer>
</div> <!-- End Site-Container -->

<div id="bit" class="">
    <a class="bsub" href="javascript:void(0)"><span id="bsub-text">Follow Us</span></a>
    <div id="bitsubscribe">
        <div class="widget-wrap">
            <p>Want the latest news about Jorja (and Fans of LeFox) in your in-box ASAP? <a href="/updates/">Sign up for email updates</a> and they're yours!</p>
            <a href="/updates/"><input type="submit" value="Sign me up!" name="jetpack_subscriptions_widget"></a>
        </div>
    </div>
</div>
