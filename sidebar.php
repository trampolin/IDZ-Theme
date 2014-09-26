<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

		<div id="primary" class="widget-area" role="complementary">
			<ul class="xoxo">

<?php
	/* When we call the dynamic_sidebar() function, it'll spit out
	 * the widgets for that widget area. If it instead returns false,
	 * then the sidebar simply doesn't exist, so we'll hard-code in
	 * some default sidebar stuff just in case.
	 */
	if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>
			<!--li id="widget-epk" class="widget-container">
				<a href="http://www.steenband.de/data/steen-epk.pdf" title="Electronic Press Kit"><div id="epk"></div></a>
			</li-->
			<li id="widget-facebook" class="widget-container">
				<a href="http://www.facebook.com/steenband.de" title="Steen bei Facebook"><div id="facebook"></div></a>
			</li>
			<li id="widget-youtube" class="widget-container">
				<a href="http://www.youtube.com/steenband" title="Steen bei Youtube"><div id="youtube"></div></a>
			</li>
			<li id="widget-twitter" class="widget-container">
				<a href="http://www.twitter.com/steenband" title="Steen bei Twitter"><div id="twitter"></div></a>
			</li>
			<li id="widget-rss" class="widget-container">
				<a href="<?php bloginfo('rss2_url'); ?>" title="RSS Feed"><div id="rssfeed"></div></a>
			</li>			
			<li id="widget-email" class="widget-container">
				<a href="mailto:booking@steenband.de" title="Email"><div id="emails"></div></a>
			</li>

		<?php endif; // end primary widget area ?>
			</ul>
		</div><!-- #primary .widget-area -->

<?php
	// A second sidebar for widgets, just because.
	if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>

		<div id="secondary" class="widget-area" role="complementary">
			<ul class="xoxo">
				<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
			</ul>
		</div><!-- #secondary .widget-area -->

<?php endif; ?>
