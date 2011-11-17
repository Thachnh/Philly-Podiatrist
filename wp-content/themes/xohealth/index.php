<?php
/**
 * @package WordPress
 * @subpackage Beach
 */

get_header(); ?>
<?php //Slide   ?>
	<div id="wrapper">
	<div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
                <img src="<?php bloginfo('template_directory') ?>/images/slide-1.jpg" alt="" title="The Center for Enhanced Podiatric Function and Pain Management"/>
                <img src="<?php bloginfo('template_directory') ?>/images/slide-2.jpg" alt="" title="My goal is to determine & treat the CAUSE of your pain" /></a>
                <img src="<?php bloginfo('template_directory') ?>/images/slide-3.jpg" alt="" />
                <img src="<?php bloginfo('template_directory') ?>/images/slide-4.jpg" alt="" title="#htmlcaption" />
            </div>
            <div id="htmlcaption" class="nivo-html-caption">
                <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>.
            </div>
        </div>
	</div>
		<div id="primary">
			<div id="content" role="main" class="index-content">

				<?php beach_content_nav( 'nav-above' ); ?>

				<?php /* Start the Loop  ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', get_post_format() ); ?>

				<?php endwhile;*/ ?>
				
				<?php /* Loop of posts with category index-3-pieces */
				 global $post;
				 $arg = array('category' => 3, 'numberposts' => 3);
				 $myposts = get_posts($arg); 
				 /* Layout of 3 pieces */
				 foreach ($myposts as $post):
				 	setup_postdata($post);
				 	?>
				 	<div class="index-block">
				 	<?php the_content(); ?>
				 	</div>	
				 	<?php
				 endforeach;				 
				 
				?>

			<?php beach_content_nav( 'nav-below' ); ?>

			</div><!-- #content -->

			<?php get_sidebar(); ?>
		</div><!-- #primary -->

<?php get_footer(); ?>