<?php
/**
 * @package WordPress
 * @subpackage Beach
 */

get_header(); ?>
<?php //Slide   ?>
		<div id="primary">
			<?php get_sidebar(); ?>
			<script type="text/javascript">
				jQuery("li.menu-item-type-post_type").click(function(event) {
					jQuery("#content-wrapper").load(jQuery(this).children("a").attr("href")+" #content");
					event.preventDefault();
				});
			</script>
			<div id="next-to-slider" style="display:none;">
				<?php get_a_post('doctor-intro'); ?>
				<?php the_content(); ?>
			</div>
			<script type="text/javascript">
				jQuery("#next-to-slider").appendTo(".slider-wrapper").show();
			</script>
			<div id="content-wrapper" class="content-wrapper">
			<div id="content" role="main">

				<?php get_a_post('welcome'); ?>
					<div class="entry-title"><?php the_title(); ?></div>
					<?php the_content(); ?>
		</div><!-- #content -->
			</div><!-- .content-wrapper -->
			<?php include ('sidebar_right.php'); ?>
		</div><!-- #primary -->

<?php get_footer(); ?>
