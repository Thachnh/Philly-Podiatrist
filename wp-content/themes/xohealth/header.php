<?php
/**
 * @package WordPress
 * @subpackage XoHealth
 */
?><!DOCTYPE html>
<!--[if IE 7 ]><html class="ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8 ]><html class="ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html <?php language_attributes(); ?>><!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'beach' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/nivo-slider.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/nivo-slider-theme.css" />
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/html5.js" type="text/javascript"></script>
<![endif]-->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/jquery.nivo.slider.pack.js" type="text/javascript"></script>
<?php wp_head(); ?>
	<script>
	  $(document).ready(function() {
		    $("#accordion").accordion();
		  });
	  $(window).load(function() {
	        $('#slider').nivoSlider();
	    });
	</script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed">
	<header id="branding">
			<hgroup role="banner" class="left">
				<span><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<img src="<?php bloginfo('template_directory') ?>/images/logo.png" width="350px" alt="<?php the_author() ?>" title="<?php the_author() ?>" />
				</a></span>
			</hgroup>

			<nav class="access right" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><!-- #main .access -->
	</header><!-- #branding -->
	
	<div id="wrapper">
	<div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
                <img src="<?php bloginfo('template_directory') ?>/images/slide-1.jpg" alt="" title="The Center for Enhanced Podiatric Function and Pain Management"/>
                <img src="<?php bloginfo('template_directory') ?>/images/slide-2.jpg" alt="" title="My goal is to determine & treat the CAUSE of your pain" /></a>
                <img src="<?php bloginfo('template_directory') ?>/images/slide-3.jpg" alt="" />
                <img src="<?php bloginfo('template_directory') ?>/images/slide-4.jpg" alt="" title="#htmlcaption" />
            </div>
            <div id="htmlcaption" class="nivo-html-caption">
                <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>.
            </div>
        </div>
	</div>
	
	<div id="main">