<?php
/**
 * @package WordPress
 * @subpackage Beach
 */

?>
<script type="text/javascript">
	jQuery("#page").css("background-image", "url('images/bkg_small.jpg')");
</script>
<?php get_header(); ?>

		<div id="primary">
			<?php get_sidebar(); ?>
                        <script type="text/javascript">
                                jQuery("li.menu-item-type-post_type>a").click(fu
nction(event) {
                                        jQuery("#content-wrapper").load(jQuery(t
his).attr("href")+" #content");
                                        if (jQuery(this).is("ul#menu-sidebar>li.
menu-item>a")) {
                                                jQuery("ul#menu-sidebar ul.sub-m
enu:visible").slideUp();
                                                jQuery(this).siblings("ul.sub-me
nu").slideDown();
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
