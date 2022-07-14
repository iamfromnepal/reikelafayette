<?php
/* Template Name: Static Events */

get_header();
?>

<section class="hero hero-events hero-mobile-overlap container-alt overlay-mobile overlay-mobile--bottom overlay-mobile--top">
    <div class="row align-items-center">
        <picture class="col-md-6 img-block img-fluid">
            <source media="(min-width: 576px)" srcset="<?php echo site_url(); ?>/media/events-hero-feature.webp" type="image/webp">
            <source media="(min-width: 576px)" srcset="<?php echo site_url(); ?>/media/events-hero-feature.jpg" type="image/jpg">
            <source srcset="<?php echo site_url(); ?>/media/events-hero-feature-mobile.webp" type="image/webp">
            <source srcset="<?php echo site_url(); ?>/media/events-hero-feature-mobile.jpg" type="image/jpg">
            <img src="<?php echo site_url(); ?>/media/events-hero-feature.jpg" alt="Events Hero Background" width="718" height="865" loading="lazy">
        </picture>
        <div class="col-md-6 content-block text-center py-md-3">
            <div class="block-width-top mx-auto mb-5">
                <h1 class="mb-1 mb-lg-2 mb-xl-4">
                    <span class="heading-wrap">There are times where <span>Healing</span>is a solo adventure.</span>
                    <span class="heading-wrap">There are times <br>when it's <span>Decidedly</span>NOT.</span>
                </h1> <!-- /.heading-primary -->
            </div>
            <div class="block-width-bottom mx-auto font-nelphim font-size-lg">
                <div class="border-mini border-mini--center mb-1 mb-lg-2">
                    <p>Every Friday night we're holding an event to come together in community - whether they be Reiki shares, moon circles or truth nights.</p>
                </div>
            </div>
        </div>
    </div>
</section> <!-- /.hero -->

<section class="events-info container-alt pt-sm-3 pt-2 pb-sm-4 pb-2 px-0">
    <h2 class="hidden-title">Events</h2>
    <div class="container">
        <div class="title-bg">
            <p>Browse below for <strong>what’s coming up.</strong><br>
                You’ll find in-person events<br>
                all over town, online events<br>
                as well as sales events.<br>
            </p>
        </div>

        <div class="row justify-content-center text-center">
            <div class="col-md-6">
                <div class="content-holder ml-md-auto mr-md-2">
                    <h3 class="h4"><i class="icon-facebook"></i> Want community on the daily?</h3>
                    <p>Join the Facebook Group here. It’s our little corner of the internet where we get to share our struggles, celebrate our wins and learn in community.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="content-holder mr-md-auto ml-md-2">
                    <h3 class="h4"><i class="icon-instagram"></i> More in the mood for inspiration?</h3>
                    <p>Head on over to our Instagram for<br> inspiration & pictures of our events.</p>
                </div>
            </div>
        </div>
    </div>
</section> <!-- /.events-info -->


<?php
get_footer();
