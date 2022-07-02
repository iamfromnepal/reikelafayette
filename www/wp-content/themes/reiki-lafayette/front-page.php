<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Reiki_Lafayette
 */

get_header();
?>

<!-- Home Banner -->
<section class="hero has-bg-img container container-alt py-3">
	<picture class="bg-img">
		<source media="(min-width: 576px)" srcset="<?php echo site_url(); ?>/media/home-hero-bg.webp" type="image/webp">
		<source media="(min-width: 576px)" srcset="<?php echo site_url(); ?>/media/home-hero-bg.jpg" type="image/jpg">
		<source srcset="<?php echo site_url(); ?>/media/home-hero-bg-mobile.webp" type="image/webp">
		<source srcset="<?php echo site_url(); ?>/media/home-hero-bg-mobile.jpg" type="image/jpg">
		<img src="<?php echo site_url(); ?>/media/home-hero-bg.jpg" alt="Home Hero Background" width="1440" height="862" loading="lazy">
	</picture>
	<div class="d-flex flex-column justify-content-between justify-content-lg-center mh-sm mh-lg mh-xl">
		<h1 class="heading-primary text-center text-white mb-2 mb-lg-3">
			Your
			<span>Energy Healing Journey</span>
			Starts Here.
		</h1> <!-- /.heading-primary -->

		<div class="collapse-acc collapse-acc--pri">
			<div class="collapse-acc__item">
				<button class="collapse-acc__head">
					<h2 class="h3"><i class="icon-courses"></i> Courses</h2>
				</button>
				<div class="collapse-acc__content">
					<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
				</div>
			</div> <!-- /.collapse-acc__item -->
			<div class="collapse-acc__item">
				<button class="collapse-acc__head">
					<h2 class="h3"><i class="icon-sessions"></i> Sessions</h2>
				</button>
				<div class="collapse-acc__content">
					<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
				</div>
			</div> <!-- /.collapse-acc__item -->
			<div class="collapse-acc__item">
				<button class="collapse-acc__head">
					<h2 class="h3"><i class="icon-event"></i> Events</h2>
				</button>
				<div class="collapse-acc__content">
					<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
				</div>
			</div> <!-- /.collapse-acc__item -->
		</div>
	</div> <!-- /. -->
</section> <!-- /.hero -->
<hr>
<hr>

<?php
get_footer();
