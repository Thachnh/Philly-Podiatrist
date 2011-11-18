<?php
/*
Template Name: Practicepage
 */
/**
 * @package WordPress
 * @subpackage Beach
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

				<?php
				$posts = get_posts(array('cat'=>4));
				foreach ($posts as $post):
					setup_postdata($post);
					?><div id="page-<?php echo get_the_ID(); ?>" class="subpage"><div class="subpage-title"><?php
					the_title();
					?></div><?php
					the_excerpt();
					?></div>&nbsp;<?php
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