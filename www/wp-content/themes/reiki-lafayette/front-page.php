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

<section class="pb-3">
	<div class="container">
		<div class="block-width-625 mx-auto font-avenir font-300 px-1">
			<div class="avatar-circle-wrapper offset-top-sm offset-top-lg mb-1">
				<picture class="avatar-circle">
					<source srcset="<?php echo site_url(); ?>/media/reiki-montreal-avatar.webp" type="image/webp">
					<source srcset="<?php echo site_url(); ?>/media/reiki-montreal-avatar.jpg" type="image/jpg">
					<img src="<?php echo site_url(); ?>/media/reiki-montreal-avatar.jpg" alt="Reiki Montreal Avatar" width="160" height="160" loading="lazy">
				</picture>
			</div>
			<!-- /.avatar-circle-wrapper -->
			<div class="text-center font-nelphim font-400 mb-3 mb-lg-2">
				<h2 class="heading-primary heading-primary--sm">
					A warm-hearted
					<span>Welcome</span>
				</h2>
				<p>from Inge, Reiki Montreal’s founder.</p>
			</div>
			<p>When I took my first Reiki class back in 2010, I had my arms crossed, a scowl on my face and the thoughts: “This doesn’t make sense” running rampant through my head. Yet, something deeply intuitive in me kept having me show up.</p>
			<div class="box-quote box-quote--lg mx-auto font-size-lg text-center mt-1 mt-lg-3 px-lg-3 mb-1 mb-lg-2">
				<p>I can genuinely say Reiki changed my life and has accompanied me on a long & beautiful healing journey. </p>
			</div>
			<p>Wherever you are on your healing path, know this: You are welcome here. My vision is that this be a place for you to heal, to learn, to connect and above all: to become who you are. </p>
		</div>
	</div>
</section> <!-- /section -->

<section class="has-bg-img container-alt home-slider-section py-2">
	<picture class="bg-img overlay overlay-53--top overlay-53--bottom">
		<source media="(min-width: 576px)" srcset="<?php echo site_url(); ?>/media/home-slides-bg.webp" type="image/webp">
		<source media="(min-width: 576px)" srcset="<?php echo site_url(); ?>/media/home-slides-bg.jpg" type="image/jpg">
		<source srcset="<?php echo site_url(); ?>/media/home-slides-bg-mobile.webp" type="image/webp">
		<source srcset="<?php echo site_url(); ?>/media/home-slides-bg-mobile.jpg" type="image/jpg">
		<img src="<?php echo site_url(); ?>/media/home-slides-bg.jpg" alt="Home Hero Background" width="1440" height="702" loading="lazy">
	</picture>
	<h2 class="heading-secondary text-white text-center">
		<span>Who is</span>
		Reiki Montreal
	</h2>
	<div class="home-slider slider-col-1 hide-arrow vertical-dots mh-446 mh-lg-784">
		<div class="home-slider__item text-center">
			<div class="home-slider__content text-white d-inline-block text-right py-3 px-2">
				<span class="home-slider__count">01</span>
				<p>An energy healing school</p>
			</div>
		</div>
		<div class="home-slider__item text-center">
			<div class="home-slider__content text-white d-inline-block text-right py-3 px-2">
				<span class="home-slider__count">02</span>
				<p>An energy healing school</p>
			</div>
		</div>
	</div> <!-- /.home-slider -->
</section>

<?php
get_footer();
