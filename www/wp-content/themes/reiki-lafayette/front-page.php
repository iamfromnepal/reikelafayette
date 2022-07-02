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
	<!-- <picture class="has-bg-img">
		<img src="https://via.placeholder.com/1440x865.jpg/a59090/000000?Text=1440x865" alt="Home Hero Background" width="1440" height="865" loading="lazy">
	</picture> -->
	<picture class="bg-img">
		<!-- <source media="(min-width: 576px)" srcset="<?php echo site_url(); ?>/media/home-hero-bg.webp" type="image/webp"> -->
		<source media="(min-width: 576px)" srcset="<?php echo site_url(); ?>/media/home-hero-bg.jpg" type="image/jpg">
		<!-- <source srcset="<?php echo site_url(); ?>/media/home-hero-bg-mobile.webp" type="image/webp"> -->
		<source srcset="<?php echo site_url(); ?>/media/home-hero-bg-mobile.jpg" type="image/jpg">
		<img src="<?php echo site_url(); ?>/media/home-hero-bg.jpg" alt="Home Hero Background" width="1440" height="862" loading="lazy">
	</picture>
	<div class="d-flex flex-column justify-content-between justify-content-lg-center mh-sm mh-lg mh-xl">
		<h1 class="heading-primary text-center text-white mb-2 mb-lg-3">
			Your
			<span>Energy Healing Journey</span>
			Starts Here.
		</h1> <!-- /.heading-primary -->

		<div class="collapse-acc" style="width: 100%; max-width: 319px; margin: 0 auto;">
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

<!-- Banner ii -->
<section class="hero container-alt">
	<div class="row align-items-center">
		<picture class="col-md-6 hero__img-block img-fluid">
			<img src="https://via.placeholder.com/706x863.jpg/a59090/000000?Text=706x863" alt="Home Hero Background" width="706" height="863" loading="lazy">
		</picture>
		<!-- <picture class="col-md-6 hero__img-block img-fluid">
			<source srcset="<?php echo site_url(); ?>/media/courses-hero-feature.webp" type="image/webp">
			<source srcset="<?php echo site_url(); ?>/media/courses-hero-feature.jpg" type="image/jpg">
			<img src="<?php echo site_url(); ?>/media/courses-hero-feature.jpg" alt="Home Hero Background" width="706" height="863" loading="lazy">
		</picture> -->
		<div class="col-md-6 hero__content-block text-center">
			<h1 class="heading-primary mb-1 mb-lg-3">
				<span>Unleash</span>
				Your inner Healer
			</h1> <!-- /.heading-primary -->
			<div class="box-quote box-quote--md mx-auto">
				<p>Your ability to heal is innate. Whether you’re exploring for yourself or responding to a deep call to guide others on their healing journey, it’s time to reclaim your inner healer.</p>
			</div>
		</div>
	</div> <!-- /.hero__inner -->
</section> <!-- /.hero -->
<hr>
<hr>

<!-- Banner iii -->
<section class="hero container-alt">
	<div class="row align-items-center">
		<picture class="col-md-6 hero__img-block img-fluid">
			<img src="https://via.placeholder.com/706x863.jpg/a59090/000000?Text=706x863" alt="Home Hero Background" width="706" height="863" loading="lazy">
		</picture>
		<!-- <picture class="col-md-6 hero__img-block img-fluid">
			<source srcset="<?php echo site_url(); ?>/media/individual-course-hero-feature.webp" type="image/webp">
			<source srcset="<?php echo site_url(); ?>/media/individual-course-hero-feature.jpg" type="image/jpg">
			<img src="<?php echo site_url(); ?>/media/individual-course-hero-feature.jpg" alt="Home Hero Background" width="706" height="863" loading="lazy">
		</picture> -->
		<div class="col-md-6 hero__content-block text-center">
			<div class="font-nelphim font-size-lg" style="max-width: 321px; margin: auto;">
				<div class="box-text mb-1 mb-lg-2">
					<span class="box-text__off">Reiki I</span>
					<h1 class="heading-primary">
						<span>Awaken</span>
						Your inner Healer
					</h1> <!-- /.heading-primary -->
				</div>
				<p>You’ve heard the call for some time now. You’ve been meditating, diving into your spiritual work and you’re fascinated. The next step is now clear: awaken the healer in you, learn more about energy in an experiential way, find out how it all works… and maybe, just maybe learn to help others heal too.</p>
			</div>
		</div>
	</div> <!-- /.hero__inner -->
</section> <!-- /.hero -->
<hr>
<hr>

<!-- Banner iv -->
<section class="hero container-alt">
	<div class="row align-items-center">
		<picture class="col-md-6 hero__img-block img-fluid">
			<img src="https://via.placeholder.com/708x865.jpg/a59090/000000?Text=708x865" alt="Home Hero Background" width="708" height="865" loading="lazy">
		</picture>
		<!-- <picture class="col-md-6 hero__img-block img-fluid">
			<source srcset="<?php echo site_url(); ?>/media/session-hero-feature.webp" type="image/webp">
			<source srcset="<?php echo site_url(); ?>/media/session-hero-feature.jpg" type="image/jpg">
			<img src="<?php echo site_url(); ?>/media/session-hero-feature.jpg" alt="Home Hero Background" width="708" height="865" loading="lazy">
		</picture> -->
		<div class="col-md-6 hero__content-block text-center">
			<div class="font-nelphim font-size-lg" style="max-width: 458px; margin: auto;">
				<h1 class="heading-primary mb-1 mb-lg-2 mb-xl-4">
					<span>Healing Sessions</span>
				</h1> <!-- /.heading-primary -->
				<div class="border-mini border-mini--center mb-1 mb-lg-2">
					<p>We're a team of reiki + energy healing professionals spread throughout the Montreal area here to help you get back to your most whole & vibrant self.</p>
				</div>
				<a href="#" class="btn btn-primary">Find Your Practitioner Here</a>
			</div>
		</div>
	</div> <!-- /.hero__inner -->
</section> <!-- /.hero -->
<hr>
<hr>

<!-- Banner v -->
<section class="hero container-alt">
	<div class="overlay overlay-80 overlay-80--top overlay-80--bottom">
		<picture class="img-fluid">
			<img src="https://via.placeholder.com/1440x865.jpg/a59090/000000?Text=1440x865" alt="Home Hero Background" width="1440" height="865" loading="lazy">
		</picture>
		<!-- <picture class="img-fluid">
		<source srcset="<?php echo site_url(); ?>/media/practitioner-hero-bg.webp" type="image/webp">
		<source srcset="<?php echo site_url(); ?>/media/practitioner-hero-bg.jpg" type="image/jpg">
		<img src="<?php echo site_url(); ?>/media/practitioner-hero-bg.jpg" alt="Home Hero Background" width="1440" height="865" loading="lazy">
	</picture> -->
	</div>
</section> <!-- /.hero -->
<hr>
<hr>

<?php
get_footer();
