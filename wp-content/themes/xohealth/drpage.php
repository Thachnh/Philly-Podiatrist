<?php
/*
Template Name: Practicepage
 */
/* Actually this page is for practices */
/**
 * @package WordPress
 * @subpackage Beach
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main" class="subpages">

				<?php
				$posts = get_posts(array('cat'=>5));
				foreach ($posts as $post):
					setup_postdata($post);
					?><div id="page-<?php echo get_the_ID(); ?>" class="subpage">
					<div class="subpage-title">
					<a name="<?php echo $post->post_name; ?>" class="slug"></a><?php
						the_title();
					?></div><div id="excerpt-<?php echo get_the_ID();?>" class="excerpt"><?php
						the_excerpt();
					?></div><div id="content-<?php echo get_the_ID();?>" class="fullcontent nondisplay"><?php
						the_content();
					?></div></div>&nbsp;<?php
				endforeach;
				?>
				<script>
					$('.subpage').click(function(event) {
						$('.subpage').width('45%').children('.excerpt').show()
							.end().children('.fullcontent').hide();
						$(this).animate({width:'95%'});
						$(this).children('.excerpt').hide()
						.end().children('.fullcontent').show();
						event.preventDefault();
						//alert($(this).find('a.slug').attr('name'));
						window.location.hash = $(this).find('a.slug').attr('name');
					});
				</script>

			</div><!-- #content -->

			<?php get_sidebar(); ?>
		</div><!-- #primary -->

<?php get_footer(); ?>