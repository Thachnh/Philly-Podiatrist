<?php
/**
 * @package WordPress
 * @subpackage Beach
 */

?>
<?php get_header(); ?>

<script type="text/javascript">
	jQuery("#page").removeClass('page-big-bkg').addClass("page-small-bkg");
</script>
		<div id="primary">
			<?php get_sidebar(); ?>
                        <script type="text/javascript">
                        </script>
            <div id="content-wrapper">
			<div id="content" role="main">
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php //comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
			</div>
		</div><!-- #primary -->

<?php get_footer(); ?>
