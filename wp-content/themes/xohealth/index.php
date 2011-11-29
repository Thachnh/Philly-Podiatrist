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
                <img src="<?php bloginfo('template_directory') ?>/images/slide-1.jpg" class="image" alt="" title="The Center for Enhanced Podiatric Function and Pain Management"/>
                <img src="<?php bloginfo('template_directory') ?>/images/slide-2.jpg" class="image" alt="" title="My goal is to determine & treat the CAUSE of your pain" /></a>
                <img src="<?php bloginfo('template_directory') ?>/images/slide-3.jpg" class="image" title="Patients of all ages welcomed" />
                <img src="<?php bloginfo('template_directory') ?>/images/slide-4.jpg" class="image" alt="" title="We treat “the cause of your condition”" />
                <img src="<?php bloginfo('template_directory') ?>/images/slide-5.jpg" class="image" alt="" title="Non-surgical treatment techniques emphasized" />
                <img src="<?php bloginfo('template_directory') ?>/images/slide-6.jpg" class="image" alt="" title="Specialize in sports injuries and work-related accidents" />
            </div>
        </div>
	</div>
		<div id="primary">
			<?php get_sidebar(); ?>
			<script type="text/javascript">
				jQuery("li.menu-item-type-post_type").click(function(event) {
					jQuery("#content-wrapper").load(jQuery(this).children("a").attr("href")+" #content");
					event.preventDefault();
				});
			</script>
			<div id="content-wrapper" class="content-wrapper">
			<div id="content" role="main">

				<?php get_a_post('welcome'); ?>
					<div class="entry-title"><?php the_title(); ?></div>
					<?php the_content(); ?>
			<?php beach_content_nav( 'nav-below' ); ?>
		</div><!-- #content -->
			</div><!-- .content-wrapper -->
			<?php include ('sidebar_right.php'); ?>
		</div><!-- #primary -->

<?php get_footer(); ?>
