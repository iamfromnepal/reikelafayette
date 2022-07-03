<?php
/* Template Name: Session */

get_header();
?>

<section class="hero hero-mobile-overlap container-alt overlay-mobile overlay-mobile--bottom">
    <div class="row align-items-center">
        <picture class="col-md-6 img-block img-fluid">
            <source media="(min-width: 576px)" srcset="<?php echo site_url(); ?>/media/session-hero-feature.webp" type="image/webp">
            <source media="(min-width: 576px)" srcset="<?php echo site_url(); ?>/media/session-hero-feature.jpg" type="image/jpg">
            <source srcset="<?php echo site_url(); ?>/media/session-hero-feature-mobile.webp" type="image/webp">
            <source srcset="<?php echo site_url(); ?>/media/session-hero-feature-mobile.jpg" type="image/jpg">
            <img src="<?php echo site_url(); ?>/media/session-hero-feature.jpg" alt="Home Hero Background" width="718" height="865" loading="lazy">
        </picture>
        <div class="col-md-6 content-block text-center">
            <div class="font-nelphim font-size-lg block-width-350 mx-auto">
                <h1 class="heading-primary mb-1 mb-lg-2 mb-xl-4">
                    <span>Hi</span>
                </h1> <!-- /.heading-primary -->
                <div class="border-mini border-mini--center mb-1 mb-lg-2">
                    <p>I’m Inge. <br>I’m the creator, founder & mentor behind Reiki Montreal.</p>
                </div>
            </div>
        </div>
    </div>
</section> <!-- /.hero -->

<?php
get_footer();
