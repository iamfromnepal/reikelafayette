<?php
/* Template Name: Session */

get_header();
?>

<section class="hero hero-session hero-mobile-overlap container-alt overlay-mobile overlay-mobile--bottom overlay-mobile--top">
    <div class="row align-items-center">
        <picture class="col-md-6 img-block img-fluid">
            <source media="(min-width: 576px)" srcset="<?php echo site_url(); ?>/media/session-hero-feature.webp" type="image/webp">
            <source media="(min-width: 576px)" srcset="<?php echo site_url(); ?>/media/session-hero-feature.jpg" type="image/jpg">
            <source srcset="<?php echo site_url(); ?>/media/session-hero-feature-mobile.webp" type="image/webp">
            <source srcset="<?php echo site_url(); ?>/media/session-hero-feature-mobile.jpg" type="image/jpg">
            <img src="<?php echo site_url(); ?>/media/session-hero-feature.jpg" alt="Session Hero Background" width="718" height="865" loading="lazy">
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

<section class="session-about pt-3 py-xl-6 pb-7">
    <div class="container">
        <div class="block-width-612 mx-auto text-md-center mobile-px">
            <?php echo do_shortcode('[contentbox classes="box-quote box-quote--md mx-auto text-center font-size-lg mb-3" paragraph="Become who you are with Reiki & Energy Healing"]'); ?>

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

<section class="session-info container-alt has-bg-img pt-2 pb-3">
    <picture class="bg-img">
        <source media="(min-width: 576px)" srcset="<?php echo site_url(); ?>/media/session-info-bg.webp" type="image/webp">
        <source media="(min-width: 576px)" srcset="<?php echo site_url(); ?>/media/session-info-bg.jpg" type="image/jpg">
        <source srcset="<?php echo site_url(); ?>/media/session-info-bg-mobile.webp" type="image/webp">
        <source srcset="<?php echo site_url(); ?>/media/session-info-bg-mobile.jpg" type="image/jpg">
        <img src="<?php echo site_url(); ?>/media/session-info-bg.jpg" alt="Session Info Background" width="1440" height="669" loading="lazy">
    </picture>
    <div class="container">
        <div class="content-block mx-auto counter-list text-center">
            <h2 class="heading-secondary">
                Our
                <span>Philosophy</span>
            </h2>
            <p>At Reiki Montreal, we all:</p>

            <ul class="row justify-content-between mb-4">
                <li class="col-md-3">Practice Reiki</li>
                <li class="col-md-5">Use energy healing in our sessions with you (sometimes in combination with our other modalities such as osteopathy, massage, intuitive readings, coaching & more).</li>
                <li class="col-md-3">Have the experience of transforming stuck energy into personal growth.</li>
                <li class="col-md-6">Work with you to help you become the most whole version of yourself again.</li>
                <li class="col-md-6">Receive mentoring in view of giving you the best of ourselves.</li>
            </ul>

            <div class="foot">
                <h3>As for the rest?</h3>
                <p>We’re all different people, with different sensitivities, styles & specialties.</p>
            </div>
        </div>
    </div>
</section> <!-- /.session-info -->

<div class="session-mini-block container pt-6 pb-7 pb-xl-10">
    <div class="mini-block">
        <p>Find your healing ally by answering the questions below or by browsing our team.</p>
    </div>
</div> <!-- /.session-mini-block -->

<section class="session-team has-bg-img container-alt has-bg-img mb-2 mb-sm-0 pt-3 pb-1 pb-xl-5">
    <picture class="bg-img overlay overlay-80--bottom">
        <source media="(min-width: 576px)" srcset="<?php echo site_url(); ?>/media/session-team-bg.webp" type="image/webp">
        <source media="(min-width: 576px)" srcset="<?php echo site_url(); ?>/media/session-team-bg.jpg" type="image/jpg">
        <source srcset="<?php echo site_url(); ?>/media/session-team-bg-mobile.webp" type="image/webp">
        <source srcset="<?php echo site_url(); ?>/media/session-team-bg-mobile.jpg" type="image/jpg">
        <img src="<?php echo site_url(); ?>/media/session-team-bg.jpg" alt="Session Team Background" width="1440" height="669" loading="lazy">
    </picture>
    <div class="d-flex d-sm-none content-block text-white text-center">
        <h2>Our <span>Team</span></h2>
    </div>
    <div class="d-none d-sm-flex content-block text-white text-center">
        <h2>Our <span>Team</span></h2>
        <p>Finding the right practitioner for you is almost everything. Working with someone who really gets you is a gift you give yourself potentially for years to come. Trust your intuition while browsing the practitioners on our team.</p>
        <p>… but right now you just want to try Reiki and you don’t REALLY care with whom? As long as it’s in the right price range, neighborhood? We’ve got you covered there too.</p>

        <a href="#" class="btn btn-primary">Click Here</a>
    </div>
</section> <!-- /.session-team -->

<section class="container py-xl-6 py-lg-4 py-sm-3 py-2 block-width-950 px-sm-1 px-0">
    <h2 class="hidden-title">More on Our Team</h2>
    <div class="accordion accordion-reverse" id="accordion">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h3 class="h5 mb-0 has-bg-img">
                    <img class="bg-img" src="<?php echo site_url(); ?>/media/accordion-reverse-bg01.jpg" alt="Background Image" width="914" height="78" loading="lazy">
                    <button class="accordion-btn" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <span class="accordion-btn__info">
                            <span class="img-wrap">
                                <img src="<?php echo site_url(); ?>/media/teacher-avatar.png" alt="Headshot" width="166" height="162" loading="lazy">
                            </span>
                            <span class="title-wrap">
                                <strong>Inge Broer</strong><br>
                                The Alchemical Creatrix
                            </span>
                        </span>
                        <i class="icon-caret-down"></i>
                    </button>
                </h3>
            </div>

            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body text-center">
                    <p> Founder of Reiki Montreal & Energy School, Inge is a passionate explorer of the creative life and she specializes in helping her beloved 1:1 clients heal their way to the life of their dreams.</p>
                    <p>With her guidance, they learn the tools to live a life of deep fulfillment, clarity & trust in their intuition.</p>
                    <a href="#" class="btn btn-primary">Learn more</a>
                </div>
            </div>
        </div> <!-- /.card -->
        <div class="card">
            <div class="card-header" id="headingTwo">
                <h3 class="h5 mb-0 has-bg-img">
                    <img class="bg-img" src="<?php echo site_url(); ?>/media/accordion-reverse-bg02.jpg" alt="Background Image" width="914" height="78" loading="lazy">
                    <button class="accordion-btn" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <span class="accordion-btn__info">
                            <span class="img-wrap">
                                <img src="<?php echo site_url(); ?>/media/author-avatar01.png" alt="Headshot" width="80" height="80" loading="lazy">
                            </span>
                            <span class="title-wrap">
                                <strong>Inge Broer</strong><br>
                                The Alchemical Creatrix
                            </span>
                        </span>
                        <i class="icon-caret-down"></i>
                    </button>
                </h3>
            </div>

            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body text-center">
                    <p> Founder of Reiki Montreal & Energy School, Inge is a passionate explorer of the creative life and she specializes in helping her beloved 1:1 clients heal their way to the life of their dreams.</p>
                    <p>With her guidance, they learn the tools to live a life of deep fulfillment, clarity & trust in their intuition.</p>
                    <a href="#" class="btn btn-primary">Learn more</a>
                </div>
            </div>
        </div> <!-- /.card -->
        <div class="card">
            <div class="card-header" id="headingThree">
                <h3 class="h5 mb-0 has-bg-img">
                    <img class="bg-img" src="<?php echo site_url(); ?>/media/accordion-reverse-bg03.jpg" alt="Background Image" width="914" height="78" loading="lazy">
                    <button class="accordion-btn" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                        <span class="accordion-btn__info">
                            <span class="img-wrap">
                                <img src="<?php echo site_url(); ?>/media/author-avatar01.png" alt="Headshot" width="80" height="80" loading="lazy">
                            </span>
                            <span class="title-wrap">
                                <strong>Inge Broer</strong><br>
                                The Alchemical Creatrix
                            </span>
                        </span>
                        <i class="icon-caret-down"></i>
                    </button>
                </h3>
            </div>

            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body text-center">
                    <p> Founder of Reiki Montreal & Energy School, Inge is a passionate explorer of the creative life and she specializes in helping her beloved 1:1 clients heal their way to the life of their dreams.</p>
                    <p>With her guidance, they learn the tools to live a life of deep fulfillment, clarity & trust in their intuition.</p>
                    <a href="#" class="btn btn-primary">Learn more</a>
                </div>
            </div>
        </div> <!-- /.card -->
        <div class="card">
            <div class="card-header" id="headingFour">
                <h3 class="h5 mb-0 has-bg-img">
                    <img class="bg-img" src="<?php echo site_url(); ?>/media/accordion-reverse-bg04.jpg" alt="Background Image" width="914" height="78" loading="lazy">
                    <button class="accordion-btn" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                        <span class="accordion-btn__info">
                            <span class="img-wrap">
                                <img src="<?php echo site_url(); ?>/media/author-avatar01.png" alt="Headshot" width="80" height="80" loading="lazy">
                            </span>
                            <span class="title-wrap">
                                <strong>Inge Broer</strong><br>
                                The Alchemical Creatrix
                            </span>
                        </span>
                        <i class="icon-caret-down"></i>
                    </button>
                </h3>
            </div>

            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                <div class="card-body text-center">
                    <p> Founder of Reiki Montreal & Energy School, Inge is a passionate explorer of the creative life and she specializes in helping her beloved 1:1 clients heal their way to the life of their dreams.</p>
                    <p>With her guidance, they learn the tools to live a life of deep fulfillment, clarity & trust in their intuition.</p>
                    <a href="#" class="btn btn-primary">Learn more</a>
                </div>
            </div>
        </div> <!-- /.card -->
        <div class="card">
            <div class="card-header" id="headingFive">
                <h3 class="h5 mb-0 has-bg-img">
                    <img class="bg-img" src="<?php echo site_url(); ?>/media/accordion-reverse-bg05.jpg" alt="Background Image" width="914" height="78" loading="lazy">
                    <button class="accordion-btn" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                        <span class="accordion-btn__info">
                            <span class="img-wrap">
                                <img src="<?php echo site_url(); ?>/media/author-avatar01.png" alt="Headshot" width="80" height="80" loading="lazy">
                            </span>
                            <span class="title-wrap">
                                <strong>Inge Broer</strong><br>
                                The Alchemical Creatrix
                            </span>
                        </span>
                        <i class="icon-caret-down"></i>
                    </button>
                </h3>
            </div>

            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                <div class="card-body text-center">
                    <p> Founder of Reiki Montreal & Energy School, Inge is a passionate explorer of the creative life and she specializes in helping her beloved 1:1 clients heal their way to the life of their dreams.</p>
                    <p>With her guidance, they learn the tools to live a life of deep fulfillment, clarity & trust in their intuition.</p>
                    <a href="#" class="btn btn-primary">Learn more</a>
                </div>
            </div>
        </div> <!-- /.card -->
        <div class="card">
            <div class="card-header" id="headingSix">
                <h3 class="h5 mb-0 has-bg-img">
                    <img class="bg-img" src="<?php echo site_url(); ?>/media/accordion-reverse-bg06.jpg" alt="Background Image" width="914" height="78" loading="lazy">
                    <button class="accordion-btn" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                        <span class="accordion-btn__info">
                            <span class="img-wrap">
                                <img src="<?php echo site_url(); ?>/media/author-avatar01.png" alt="Headshot" width="80" height="80" loading="lazy">
                            </span>
                            <span class="title-wrap">
                                <strong>Inge Broer</strong><br>
                                The Alchemical Creatrix
                            </span>
                        </span>
                        <i class="icon-caret-down"></i>
                    </button>
                </h3>
            </div>

            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                <div class="card-body text-center">
                    <p> Founder of Reiki Montreal & Energy School, Inge is a passionate explorer of the creative life and she specializes in helping her beloved 1:1 clients heal their way to the life of their dreams.</p>
                    <p>With her guidance, they learn the tools to live a life of deep fulfillment, clarity & trust in their intuition.</p>
                    <a href="#" class="btn btn-primary">Learn more</a>
                </div>
            </div>
        </div> <!-- /.card -->
        <div class="card">
            <div class="card-header" id="headingSeven">
                <h3 class="h5 mb-0 has-bg-img">
                    <img class="bg-img" src="<?php echo site_url(); ?>/media/accordion-reverse-bg07.jpg" alt="Background Image" width="914" height="78" loading="lazy">
                    <button class="accordion-btn" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                        <span class="accordion-btn__info">
                            <span class="img-wrap">
                                <img src="<?php echo site_url(); ?>/media/author-avatar01.png" alt="Headshot" width="80" height="80" loading="lazy">
                            </span>
                            <span class="title-wrap">
                                <strong>Inge Broer</strong><br>
                                The Alchemical Creatrix
                            </span>
                        </span>
                        <i class="icon-caret-down"></i>
                    </button>
                </h3>
            </div>

            <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                <div class="card-body text-center">
                    <p> Founder of Reiki Montreal & Energy School, Inge is a passionate explorer of the creative life and she specializes in helping her beloved 1:1 clients heal their way to the life of their dreams.</p>
                    <p>With her guidance, they learn the tools to live a life of deep fulfillment, clarity & trust in their intuition.</p>
                    <a href="#" class="btn btn-primary">Learn more</a>
                </div>
            </div>
        </div> <!-- /.card -->
    </div> <!-- /.accordion -->
</section>

<div class="session-team-mobile container pb-3">
    <div class="d-block d-sm-none content-block text-center mobile-px">
        <p>Finding the right practitioner for you is almost everything. Working with someone who really gets you is a gift you give yourself potentially for years to come. Trust your intuition while browsing the practitioners on our team.</p>
        <p>… but right now you just want to try Reiki and you don’t REALLY care with whom? As long as it’s in the right price range, neighborhood? We’ve got you covered there too.</p>

        <a href="#" class="btn btn-primary">Click Here</a>
    </div>
</div>

<div class="session-bleeding container-alt bg-primary pt-3 pt-sm-4 pb-2 pb-sm-3">
    <div class="container">
        <?php echo do_shortcode('[contentbox classes="box-quote box-quote--pri mx-auto text-center" paragraph="We do our best to show up as our best selves so you can too"]'); ?>
    </div>
</div> <!-- /section-bleeding -->

<section class="session-founder pt-2 pt-sm-3">
    <div class="container">
        <h2 class="heading-secondary text-center mb-2">
            All our practitioners
            <span>Receive Mentoring</span>
        </h2>
    </div>
    <div class="container-alt has-bg-img">
        <picture class="bg-img">
            <source media="(min-width: 576px)" srcset="<?php echo site_url(); ?>/media/session-founder-bg.webp" type="image/webp">
            <source media="(min-width: 576px)" srcset="<?php echo site_url(); ?>/media/session-founder-bg.jpg" type="image/jpg">
            <source srcset="<?php echo site_url(); ?>/media/session-founder-bg-mobile.webp" type="image/webp">
            <source srcset="<?php echo site_url(); ?>/media/session-founder-bg-mobile.jpg" type="image/jpg">
            <img src="<?php echo site_url(); ?>/media/session-founder-bg.jpg" alt="Session Founder Background" width="1438" height="435" loading="lazy">
        </picture>
        <div class="inner text-white text-center mx-auto">
            <h3>
                <span>About</span>
                Inge Broer
            </h3>
            <p>Founder of Reiki Montreal & mentor of the other healing practitioners.</p>
        </div>
    </div>
</section> <!-- /.section-founder -->

<div class="session-founderInfo container pt-sm-5 pn-2 pb-sm-4">
    <div class="content-block block-width-625 mx-auto text-center">
        <p>Since founding Reiki Montreal in 2013, Inge has worked with thousands of clients and trained hundreds of Reiki practitioners.</p>
        
        <?php echo do_shortcode('[contentbox classes="box-quote box-quote--md mx-auto text-center mb-2 mb-sm-1" paragraph="She’s seen miracles unfold and receives deep satisfaction in knowing how many lives she’s been able to touch."]'); ?>

        <p>Now, she’s devoted to put her experience, skills & knowledge to the best use by mentoring her practitioners to be the best healers they can be. When you work with a healer at Reiki Montreal, you also receive the benefit form knowing they are guided by an experienced healer.</p>

        <p>All Reiki Montreal practitioners have done at least some of their training with Inge & receive mentoring from her.</p>
    </div>
</div> <!-- /.section-founderInfo -->

<section class="session-healing container-alt has-bg-img py-2">
    <picture class="bg-img">
        <source media="(min-width: 576px)" srcset="<?php echo site_url(); ?>/media/session-healing-bg.webp" type="image/webp">
        <source media="(min-width: 576px)" srcset="<?php echo site_url(); ?>/media/session-healing-bg.jpg" type="image/jpg">
        <source srcset="<?php echo site_url(); ?>/media/session-healing-bg-mobile.webp" type="image/webp">
        <source srcset="<?php echo site_url(); ?>/media/session-healing-bg-mobile.jpg" type="image/jpg">
        <img src="<?php echo site_url(); ?>/media/session-healing-bg.jpg" alt="Session Healing Background" width="1438" height="712" loading="lazy">
    </picture>
    <div class="inner text-center mx-auto">
        <h2>What is <br>Energy Healing</h2>
    </div>
</section> <!-- /.session-healing -->

<div class="container py-2">
    <div class="block-width-625 text-center mx-auto">
        <p>Energy healing operates on the notion that everything is energy (or vibrating information) and works in the present moment to help people reconnect to the truth of who they are (at our core: we are love). Different energy healing modalities include Reiki, Visualization (such as inner child healing), Tapping/EFT, Hypnosis and more. Different people respond to different modalities at different times so we make it our business to have a full toolkit at your disposal.</p>
    </div>
</div>

<?php
get_footer();
