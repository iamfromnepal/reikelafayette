<?php
/* Template Name: Chakra Guide */

get_header();
?>

<section class="text-block text-sm-center text-left container max-width-650 py-lg-4 py-sm-3 py-2">
    <?php the_title('<h2 class="hidden-title">', '</h2>'); ?>
    <p>I vividly remember the moment someone told me about the chakras for the first time. It was at the end of a meditation retreat way back in October 2010 and it blew my mind. What was it for you? A mention in a yoga class? A Reiki practitioner giving you a pretty spot on assessment of … well… everything in your life based on these chakras? (haven’t had the pleasure of receiving a Reiki session yet? Book here). Whatever it is that got you researching, I hope to have you covered here.</p>
</section> <!-- /.text-block -->

<section class="banner-primary banner-primary--alt banner-primary--guide py-lg-4 py-sm-3 py-2">
    <div class="container has-border py-2 max-width-650">
        <div class="banner-primary__inner text-white text-center">
            <h2 class="h4">What are Chakras? </h2>
            <p>Traditionally, chakras are spoken about as wheels of energy, spinning in and around the body. They interact with the body, emotions, mind & spirit. I like to think of the chakras as energetic structures that work a bit like computer systems that organize the information system that is you.</p>

            <h2 class="h4">How many Chakras are there?</h2>
            <p>There are seven main chakras that run along the spine: the root, sacral, solar plexus, heart, throat, third eye and crown.</p>
        </div>
    </div>
</section> <!-- banner-primary -->

<section class="basic-guide container max-width-550 py-xl-6 py-lg-4 py-sm-3 py-2">
    <header class="basic-guide__heading text-center mb-lg-4 mb-sm-3 mb-2">
        <h4>Here, you’ll learn the basics. You’ll learn what the chakras are, how many there are, what they’re related to and what theme each of them governs.</h4>
    </header> <!-- /.basic-guide__heading -->

    <div class="basic-guide__info text-center">
        <strong class="info-title">Take me to…</strong>

        <div class="basic-guide__infoList list-unstyled">
            <ul>
                <li>
                    <span class="list-title">The Root Chakra -</span>
                    Security, Money, Food, Shelter.
                </li>
                <li>
                    <span class="list-title">The Sacral Chakra -</span>
                    Pleasure, Emotion, Sensuality, Creativity
                </li>
                <li>
                    <span class="list-title">The Solar Plexus Chakra –</span>
                    Sense of Self, Confidence, Ease
                </li>
                <li>
                    <span class="list-title">The Heart Chakra –</span>
                    Love, Acceptance, Relationships
                </li>
                <li>
                    <span class="list-title">The Throat Chakra –</span>
                    Authenticity, Communication, Creative Flow
                </li>
                <li>
                    <span class="list-title">The Third Eye Chakra –</span>
                    Intuition, Clarity, Imagination
                </li>
                <li>
                    <span class="list-title">The Crown Chakra –</span>
                    Faith, Connection, Deep Understanding
                </li>
            </ul>
        </div> <!-- /.basic-guide__infoList -->
    </div>
</section> <!-- /.basic-guide -->

<section class="banner-secondary has-bg-img">
    <picture class="bg-img">
        <source media="(min-width: 576px)" srcset="<?php echo site_url(); ?>/media/root-chakra-banner-img.webp" type="image/webp">
        <source media="(min-width: 576px)" srcset="<?php echo site_url(); ?>/media/root-chakra-banner-img.jpg" type="image/jpg">
        <source srcset="<?php echo site_url(); ?>/media/root-chakra-banner-img-xs.webp" type="image/webp">
        <source srcset="<?php echo site_url(); ?>/media/root-chakra-banner-img-xs.jpg" type="image/jpg">
        <img width="1440" height="643" src="<?php echo site_url(); ?>/media/root-chakra-banner-img.jpg" loading="lazy" alt="Root Chakra">
    </picture> <!-- /.bg-img -->
    <div class="container">
        <div class="banner-secondary__inner text-center text-white py-lg-4 py-sm-3 py-2">
            <picture class="banner-secondary__media">
                <source srcset="<?php echo site_url(); ?>/media/root-chakra.webp" type="image/webp">
                <source srcset="<?php echo site_url(); ?>/media/root-chakra.png" type="image/png">
                <img width="79" height="79" src="<?php echo site_url(); ?>/media/root-chakra.png" loading="lazy" alt="Root Chakra">
            </picture>

            <h2 class="heading-secondary text-center">
                <span>The Root Chakra </span>
                – Security, Money, Food, Shelter. 
            </h2>
        </div>
    </div>
</section>

<?php
get_footer();
