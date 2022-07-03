<?php
/* Template Name: Session */

get_header();
?>

<section class="hero hero-mobile-overlap container-alt overlay-mobile overlay-mobile--bottom overlay-mobile--top">
    <div class="row align-items-center">
        <picture class="col-md-6 img-block img-fluid">
            <source media="(min-width: 576px)" srcset="<?php echo site_url(); ?>/media/session-hero-feature.webp" type="image/webp">
            <source media="(min-width: 576px)" srcset="<?php echo site_url(); ?>/media/session-hero-feature.jpg" type="image/jpg">
            <source srcset="<?php echo site_url(); ?>/media/session-hero-feature-mobile.webp" type="image/webp">
            <source srcset="<?php echo site_url(); ?>/media/session-hero-feature-mobile.jpg" type="image/jpg">
            <img src="<?php echo site_url(); ?>/media/session-hero-feature.jpg" alt="Home Hero Background" width="718" height="865" loading="lazy">
        </picture>
        <div class="col-md-6 content-block content-block--alt text-center">
            <div class="block-width-460 mx-auto">
                <h1 class="heading-primary mb-1 mb-lg-2 mb-xl-4">
                    <span>Healing Sessions</span>
                </h1> <!-- /.heading-primary -->
            </div>
            <div class="block-width-460 mx-auto font-nelphim font-size-lg">
                <div class="border-mini border-mini--center mb-1 mb-lg-2">
                    <p>We're a team of reiki + energy healing professionals spread throughout the Montreal area here to help you get back to your most whole & vibrant self.</p>
                </div>
                <div class="btn-wrapper">
                    <a href="#" class="btn btn-primary">Find Your Practitioner Here</a>
                </div>
            </div>
        </div>
    </div>
</section> <!-- /.hero -->

<section class="session-about py-3 py-xl-6">
    <div class="container">
        <div class="block-width-612 mx-auto text-md-center mobile-px">
            <div class="box-quote box-quote--md mx-auto text-center font-size-lg mb-3">
                <p>Become who you are with Reiki & Energy Healing</p>
            </div>

            <h2 class="heading-secondary text-center mb-2">
                <span>About</span>
                Reiki
            </h2>

            <p>Reiki relieves stress in a deep way<br>
                Reiki reconnects you to your inner wisdom & knowing.<br>
                Reiki balances your chakras<br>
                Reiki releases energy blocks<br>
                Reiki facilitates adopting a spiritual & holistic perspective to the issues you’re experiencing.<br>
                Reiki brings healing on the physical, mental, emotional & spiritual levels.</p>

            <h3>... and so much more.</h3>

            <p>After a session, people tell me they have less pain or that they “feel lighter !” or I often hear: “I’m so much calmer and less anxious!”. Sometimes it’s hard to pinpoint what happens, but Reiki always connects you with your next healing step.</p>

            <p>Every practitioner at Reiki Montreal is here to be a Reiki channel for you. Besides that, they’ve also developed their own energy healing expertise that they can use to guide you back to wholeness.</p>

            <div class="btn-wrapper text-center">
                <a href="#" class="btn btn-lg btn-primary">Book Your healing Session</a>
            </div>
        </div>
    </div>
</section> <!-- /.session-about -->

<?php
get_footer();
