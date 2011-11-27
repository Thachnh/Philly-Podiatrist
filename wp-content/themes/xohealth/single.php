<?php
/**
 * @package WordPress
 * @subpackage Beach
 */

get_header(); ?>

		<div id="primary">
			<?php get_sidebar(); ?>
			<div id="content" role="main">

			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<?php beach_content_nav( 'nav-above' ); ?>

				<?php get_template_part( 'content', 'single' ); ?>

				<?php beach_content_nav( 'nav-below' ); ?>

				<?php //comments_template( '', true ); ?>

			<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
			<?php include ('sidebar_right.php'); ?>
		</div><!-- #primary -->

<?php get_footer(); ?>