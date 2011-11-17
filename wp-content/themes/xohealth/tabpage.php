<?php
/*
Template Name: Tabpage
 */
/**
 * @package WordPress
 * @subpackage Beach
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

				<?php /* while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. */ 
				$posts = get_posts(array('cat'=>4));
				foreach ($posts as $post):
					setup_postdata($post);
					?><a id="tab-<?php echo get_the_ID(); ?>" href="#" class="page_tab"><?php
					the_title();
					?></a>&nbsp;<?php
				endforeach;
				foreach ($posts as $post):
					setup_postdata($post);
					?><div id="page-<?php echo get_the_ID(); ?>" href="#" class="page_page"><?php
					the_content();
					?></div><?php
				endforeach; 
				?>
				<script>
					$(".page_page").hide();
					$(".page_page:first").show();
					$(".page_tab").click(function(){
						id = $(this).attr('id').substr(4);
						$(".page_page").hide();
						$("#page-"+id).show();
					});
				</script>

			</div><!-- #content -->

			<?php get_sidebar(); ?>
		</div><!-- #primary -->

<?php get_footer(); ?>