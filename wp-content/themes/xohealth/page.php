<?php
/**
 * @package WordPress
 * @subpackage Beach
 */

?>
<?php get_header(); ?>

<script type="text/javascript">
	jQuery("#page").css("background-image", "url('images/bkg_small.jpg')");
</script>
		<div id="primary">
			<?php get_sidebar(); ?>
                        <script type="text/javascript">
                                jQuery("li.menu-item-type-post_type>a").click(function(event) {
                                        jQuery("#content-wrapper").load(jQuery(this).attr("href")+" #content");
                                        if (jQuery(this).is("ul#menu-sidebar>li.menu-item>a")) {
                                                jQuery("ul#menu-sidebar ul.sub-menu:visible").slideUp();
                                                jQuery(this).siblings("ul.sub-menu").slideDown();
                                        }
                                        event.preventDefault();
                                });
                                
                                jQuery("ul#menu-sidebar ul.sub-menu").hide();
                        </script>
			<div id="content" role="main">
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php //comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>
