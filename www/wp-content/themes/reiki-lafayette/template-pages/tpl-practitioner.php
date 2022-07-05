<?php
/* Template Name: Practitioner */

get_header();
?>

<section class="hero container-alt">
    <div class="has-bg-img overlay overlay-80 overlay-80--top overlay-80--bottom">
        <picture class="bg-img">
            <source srcset="<?php echo site_url(); ?>/media/practitioner-hero-bg.webp" type="image/webp">
            <source srcset="<?php echo site_url(); ?>/media/practitioner-hero-bg.jpg" type="image/jpg">
            <source srcset="<?php echo site_url(); ?>/media/practitioner-hero-bg-mobile.webp" type="image/webp">
            <source srcset="<?php echo site_url(); ?>/media/practitioner-hero-bg-mobile.jpg" type="image/jpg">
            <img src="<?php echo site_url(); ?>/media/practitioner-hero-bg.jpg" alt="Home Hero Background" width="1440" height="865" loading="lazy">
        </picture>
        <div class="content-block d-flex flex-column mh-sm mh-lg mh-xl">
            <h1 class="heading-primary text-center text-white">
                Become
                <span>Who you are</span>
                with PRACTITIONER NAME
            </h1>
        </div>
    </div>
</section> <!-- /.hero -->

<?php
get_footer();
