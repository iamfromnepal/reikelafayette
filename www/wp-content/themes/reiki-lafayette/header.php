<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Reiki_Lafayette
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/fonts/AvenirLTStd-Roman.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/fonts/AvenirLTStd-Book.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/fonts/AvenirLTStd-Black.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/fonts/DoubleSignature.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/fonts/Nelphim-Regular.woff2" as="font" type="font/woff2" crossorigin>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div class="site-wrapper">
		<header id="masthead" class="site-header">
			<nav class="navbar navbar-expand-lg px-0">
				<div class="container">
					<?php the_brand(); ?>
					<?php
					wp_nav_menu(array(
						'theme_location'  => 'nav-pri',
						'depth'	          => 3, // 1 = no dropdowns, 2 = with dropdowns.
						'container'       => 'div',
						'container_class' => 'collapse navbar-collapse offset',
						'container_id'    => 'nav-pri',
						'menu_class'      => 'nav navbar-nav justify-content-end ml-auto',
						'walker'         => new WP_Bootstrap_NavWalker(),
						'fallback_cb'    => 'WP_Bootstrap_NavWalker::fallback',
					));
					?>
					<div class="navbar-toggler-wrap">
						<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#nav-pri" aria-controls="nav-pri" aria-expanded="false" aria-label="Toggle Navigation">
							<span></span>
							<span></span>
							<span></span>
						</button>
					</div> <!-- /.site-header-wrap -->
				</div>
			</nav>
		</header><!-- #masthead -->

		<main class="site-content">