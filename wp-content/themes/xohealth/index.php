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
			
			<div id="next-to-slider" style="display:none;">
				<div id="slide-divider"></div>
				<div class="content">
					<?php get_a_post('doctor-intro'); ?>
					<?php the_content(); ?>
				</div>
			</div>
			<script type="text/javascript">
				jQuery("#next-to-slider").appendTo(".slider-wrapper").show();
			</script>
			<div id="content-wrapper" class="content-wrapper">
			<div id="content" role="main">
			<article class="post type-post hentry">
				<?php get_a_post('welcome'); ?>
				<header class="entry-header"><h1 class="entry-title"><?php the_title(); ?></h1></header>
				<?php the_content(); ?>
			</article>
		</div><!-- #content -->
			</div><!-- .content-wrapper -->
			<script type="text/javascript">

			jQuery("#concerns li").each( function(){ 
				jQuery(this).next("summary").hide();
				jQuery(this).append(jQuery("<img class='arrowdown'/>").css({'margin':'2px', 'vertical-align':'text-bottom'}).attr("src","<?php bloginfo('template_directory') ?>/images/icon_arrowdown_gray.gif"));
				jQuery(this).append(jQuery("<img class='arrowup'/>").css({'margin':'2px', 'vertical-align':'text-bottom','display':'none'}).attr("src","<?php bloginfo('template_directory') ?>/images/icon_arrowup_gray.gif"));
				jQuery(this).wrapInner("<a href='#'/>");
				jQuery(this).click(function(event){event.preventDefault();jQuery(this).next("summary").toggle();jQuery(this).find('img.arrowdown').toggle();jQuery(this).find('img.arrowup').toggle();});
			});
			jQuery("div.page-link a").live("click",function(event) {
				jQuery("#content-wrapper").load(jQuery(this).attr("href")+" #content");
				event.preventDefault();
			});
			</script>
		</div><!-- #primary -->

<?php get_footer(); ?>
