<?php
/**
 * The loop that displays posts.
 *
 * The loop displays the posts and the post content. See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop.php or
 * loop-template.php, where 'template' is the loop context
 * requested by a template. For example, loop-index.php would
 * be used if it exists and we ask for the loop with:
 * <code>get_template_part( 'loop', 'index' );</code>
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
<div id="topcontentcontainer">
	<div class="topcontentbox shiny">
		<!--iframe width="380" height="213" src="//www.youtube.com/embed/S-EJNmlUfwQ" frameborder="0" allowfullscreen></iframe-->
		<iframe width="380" height="213" src="//www.youtube.com/embed/h6ilv5udZ08" frameborder="0" allowfullscreen></iframe>
	</div>
	
	<?php 
	 // Custom widget Area Start
	 if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Top Widget Area 1') ) : ?>
	<?php endif;
	// Custom widget Area End
	?>
	
	<div class="topcontentbox shiny" id="next-shows">
	
	
	<iframe src="http://www.fanrx.com/facebook/events.php?theme=zuck&page=steenband.de&bgcolor=ffffff&textcolor=000000&linkcolor=555555&max=100" width="380" height="213" frameborder="no" scrolling="auto"></iframe>
	
	<!--h1>NEXT SHOWS</h1>
		<ul>
		
		<?php /*query_posts(array ( 
				'post_type' => 'gig',
				/*'category_name' => 'gigs', */
				/*'posts_per_page' => 4,*/
				/*'custom_location' => 'next_shows',
				'meta_key' => 'gigdate',
				'meta_compare' => '>=',
				'meta_value' => date('Ymd')
			)); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<li><a href="<?php echo get_permalink(); ?>">
			 <?php 
				$date = DateTime::createFromFormat('Ymd', get_field('gigdate'));
				echo $date->format('d.m.Y')." - ".get_field('gigcity');
				$venue = get_field('gigvenue');
				if ($venue != '') {
					echo " - ".$venue;
				}
				
				/*$gigdate = get_field('gigdate');
				echo $gigdate;
				foreach ($gigdate as $key => $value)
				{
					echo $key." -> ".$value;
				}*/
			 ?>
			 </a>
			</li>
		<?php /*endwhile; else: ?>
			<li>Keine Shows</li>
		<?php endif; ?>
		<?php wp_reset_query();*/ ?>
			
		</ul-->
	
	</div>
</div>


<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if ( $wp_query->max_num_pages > 1 ) : ?>
	<div id="nav-above" class="navigation">
		<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'twentyten' ) ); ?></div>
		<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?></div>
	</div><!-- #nav-above -->
<?php endif; ?>
<div class="post gig"><!-- SnapWidget -->
<!-- SnapWidget -->
<?php 
	//ifttt_instagram_gallery();
?>

<iframe src="http://snapwidget.com/in/?u=c3RlZW5iYW5kfGlufDExNXwzfDN8fG5vfDEwfG5vbmV8b25TdGFydHx5ZXN8bm8=&ve=110914" title="Instagram Widget" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:375px; height:375px"></iframe>
</div>
<a href="http://steen.bigcartel.com/product/steen-impuls-der-zeit" title="Zum Shop" style="display:block" target="_blank">
	<div class="post gig" id="shop"></div>
</a>


<div id="prefootercontainer">
	<div class="prefootercontent shiny" id="leftprefoot">
	</div>
	<div class="prefootercontent shiny" id="rightprefoot">
	</div>
</div>