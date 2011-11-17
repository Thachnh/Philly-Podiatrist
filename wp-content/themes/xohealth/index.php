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
                <img src="<?php bloginfo('template_directory') ?>/images/slide-1.jpg" height="446" alt="" title="The Center for Enhanced Podiatric Function and Pain Management"/>
                <img src="<?php bloginfo('template_directory') ?>/images/slide-2.jpg" alt="" title="My goal is to determine & treat the CAUSE of your pain" /></a>
                <img src="<?php bloginfo('template_directory') ?>/images/slide-3.jpg" title="Patients of all ages welcomed" />
                <img src="<?php bloginfo('template_directory') ?>/images/slide-4.jpg" alt="" title="We treat “the cause of your condition”" />
                <img src="<?php bloginfo('template_directory') ?>/images/slide-5.jpg" alt="" title="Non-surgical treatment techniques emphasized" />
                <img src="<?php bloginfo('template_directory') ?>/images/slide-6.jpg" alt="" title="Specialize in sports injuries and work-related accidents" />
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
				 $arg = array('category' => 3, 'numberposts' => 3, 'orderby'=> 'post_date', 'order'=>'ASC');
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