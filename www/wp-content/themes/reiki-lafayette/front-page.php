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
<section class="hero has-bg-img container-alt py-3">
	<picture class="bg-img">
		<source media="(min-width: 576px)" srcset="<?php echo site_url(); ?>/media/home-hero-bg.webp" type="image/webp">
		<source media="(min-width: 576px)" srcset="<?php echo site_url(); ?>/media/home-hero-bg.jpg" type="image/jpg">
		<source srcset="<?php echo site_url(); ?>/media/home-hero-bg-mobile.webp" type="image/webp">
		<source srcset="<?php echo site_url(); ?>/media/home-hero-bg-mobile.jpg" type="image/jpg">
		<img src="<?php echo site_url(); ?>/media/home-hero-bg.jpg" alt="Home Hero Background" width="1440" height="862" loading="lazy">
	</picture>
	<div class="container">
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
		</div>
	</div>
</section> <!-- /.hero -->

<section class="has-bg-img container-alt pt-3 pb-4 pb-lg-6 mt-1">
	<picture class="bg-img">
		<source media="(min-width: 576px)" srcset="<?php echo site_url(); ?>/media/home-form-feature-bg.webp" type="image/webp">
		<source media="(min-width: 576px)" srcset="<?php echo site_url(); ?>/media/home-form-feature-bg.jpg" type="image/jpg">
		<source srcset="<?php echo site_url(); ?>/media/home-form-feature-bg-mobile.webp" type="image/webp">
		<source srcset="<?php echo site_url(); ?>/media/home-form-feature-bg-mobile.jpg" type="image/jpg">
		<img src="<?php echo site_url(); ?>/media/home-form-feature-bg.jpg" alt="Home Hero Background" width="1440" height="702" loading="lazy">
	</picture>
	<div class="container">
		<div class="d-flex flex-column justify-content-md-center mh-700">
			<div class="box-light block-width-625 font-500 text-center">
				<h2 class="heading-tertiary text-center mb-2 m-md-0">
					When we say <br>your energy healing journey starts here,
					<span>We Mean it.</span>
				</h2>
				<p>We have a year’s worth of FREE resources available for you via our newsletter. You’ll get highly valuable and easy to digest content every week delivered straight to your inbox.</p>
			</div>
		</div>
	</div>
</section> <!-- /section -->

<section>
	<div class="container">
		<div class="avatar-circle-wrapper offset-top-sm offset-top-lg">
			<picture class="avatar-circle">
				<source srcset="<?php echo site_url(); ?>/media/reiki-montreal-avatar.webp" type="image/webp">
				<source srcset="<?php echo site_url(); ?>/media/reiki-montreal-avatar.jpg" type="image/jpg">
				<img src="<?php echo site_url(); ?>/media/reiki-montreal-avatar.jpg" alt="Reiki Montreal Avatar" width="160" height="160" loading="lazy">
			</picture>
		</div>
	</div>
</section> <!-- /section -->

<?php
get_footer();
