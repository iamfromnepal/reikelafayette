<?php
/* Template Name: Static Courses */

get_header();
?>

<section class="hero hero-courses hero-mobile-overlap container-alt overlay-mobile overlay-mobile--bottom overlay-mobile--top">
    <div class="row align-items-center">
        <picture class="col-md-6 img-block img-fluid">
            <source media="(min-width: 576px)" srcset="<?php echo site_url(); ?>/media/courses-hero-feature.webp" type="image/webp">
            <source media="(min-width: 576px)" srcset="<?php echo site_url(); ?>/media/courses-hero-feature.jpg" type="image/jpg">
            <source srcset="<?php echo site_url(); ?>/media/courses-hero-feature-mobile.webp" type="image/webp">
            <source srcset="<?php echo site_url(); ?>/media/courses-hero-feature-mobile.jpg" type="image/jpg">
            <img src="<?php echo site_url(); ?>/media/courses-hero-feature.jpg" alt="Home Hero Background" width="706" height="863" loading="lazy">
        </picture>
        <div class="col-md-6 content-block content-block--alt justify-content-sm-end text-center">
            <div class="d-sm-none">
                <h1 class="heading-primary mb-1 mb-lg-3">
                    <span>Energy Healing Courses</span>
                </h1> <!-- /.heading-primary -->
            </div>
            <div class="font-nelphim font-size-lg block-width-350 mx-auto">
                <h2 class="heading-primary mb-3">
                    <span>Unleash</span>
                    Your inner Healer
                </h2> <!-- /.heading-primary -->
                <?php echo do_shortcode('[contentbox classes="box-quote box-quote--md mx-auto" paragraph="Your ability to heal is innate. Whether you’re exploring for yourself or responding to a deep call to guide others on their healing journey, it’s time to reclaim your inner healer."]'); ?>
            </div>
        </div>
    </div>
</section> <!-- /.hero -->

<section class="cta-block container text-center pb-xxl-6 pb-lg-4 pb-sm-3 pb-2">
    <div class="cta-block__heading title-has-bg">
        <h2 class="h4">We offer Reiki I, II, III & so much more.</h2>
    </div>
    <div class="btn-wrap">
        <a href="#" class="btn btn-lg btn-primary">Learn About Our Certification</a>
    </div>
</section> <!-- /.cta-block -->

<section class="info-block container-alt text-white bg-black has-bg-img pt-2 pb-lg-3 pb-sm-2 -b-1">
    <picture class="bg-img bg-img--alt">
        <source media="(min-width: 576px)" srcset="<?php echo site_url(); ?>/media/hand-bg-img.webp" type="image/webp">
        <source media="(min-width: 576px)" srcset="<?php echo site_url(); ?>/media/hand-bg-img.jpg" type="image/jpg">
        <source srcset="<?php echo site_url(); ?>/media/hand-bg-img-xs.webp" type="image/webp">
        <source srcset="<?php echo site_url(); ?>/media/hand-bg-img-xs.jpg" type="image/jpg">
        <img width="1440" height="805" src="<?php echo site_url(); ?>/media/hand-bg-img.jpg" loading="lazy" alt="Hand">
    </picture> <!-- /.bg-img -->
    <div class="container">
        <div class="info-block__inner block-width-612 mx-auto">
            <header class="info-block__heading text-center">
                <h2 class="heading-secondary text-center">
                    <span>What is</span>
                    The Reiki certificate?
                </h2>
            </header> <!-- /.info-block__heading -->
            <div class="info-block__content font-weight-light font-avenir">
                <div class="text-center font-size-18 font-nelphim font-weight-normal mb-lg-2">
                    <p>The mission of our Reiki certificate is simple: Empower you to become the energy healer you were born to be, one easy step at a time.</p>
                </div>
                <p>The Reiki Certificate is a series of seven courses: Reiki I, Reiki II, Reiki III, Energy Healing Toolkit, Chakra Journey & Mind Mastery 1 & 2(Mindfulness for Empaths and Healers respectively). Every course not only teaches you the concepts and practices necessary to master, but also takes you on a healing journey where you’ll continuously be invited to claim your soul’s gifts and to step into who you came here to be.
                    As a whole, these courses are designed to help you become a grounded, competent and transformational energy healer who loves what they do.</p>
            </div> <!-- /.info-block__content -->
        </div>
    </div>
</section> <!-- /.info-block -->

<section class="offset-col container-alt">
    <div class="row offset-col__inner">
        <div class="col-lg-6 offset-col__item">
            <div class="offset-col__left block-width-350 py-sm-3 py-2 ml-lg-auto mr-xl-3 mr-lg-2 text-center">
                <h2 class="heading-secondary text-center mb-2">
                    <span>Who</span>
                    is it for?
                </h2>
                <p> The Reiki Certificate is for you if:</p>

                <div class="counter-list">
                    <ul>
                        <li>You’re an explorer willing to dive in and do your own deep work</li>
                        <li>You’re hungry to clarify your thinking and understanding so you can stand firm and proud in your healing work.</li>
                        <li>You’re willing to see everyone as their own best healer and are willing to serve as a humble and joyful healing guide.</li>
                    </ul>
                </div> <!-- /.counter-list -->
            </div>
        </div>
        <div class="col-lg-6 offset-col__item">
            <div class="offset-col__right has-bg-img overlay-top py-sm-3 py-2 mr-n1 ml-lg-0 ml-n1">
                <picture class="bg-img">
                    <source media="(min-width: 576px)" srcset="<?php echo site_url(); ?>/media/accordion-block-bg.webp" type="image/webp">
                    <source media="(min-width: 576px)" srcset="<?php echo site_url(); ?>/media/accordion-block-bg.jpg" type="image/jpg">
                    <source srcset="<?php echo site_url(); ?>/media/accordion-block-bg-xs.webp" type="image/webp">
                    <source srcset="<?php echo site_url(); ?>/media/accordion-block-bg-xs.jpg" type="image/jpg">
                    <img width="720" height="691" src="<?php echo site_url(); ?>/media/accordion-block-bg.jpg" loading="lazy" alt="Hand">
                </picture> <!-- /.bg-img -->

                <div class="accordion-block block-width-365 mr-auto ml-xl-3 ml-lg-2">
                    <h2 class="heading-secondary text-center mb-lg-3 mb-2 text-white">
                        <span>How</span>
                        does it work ?
                    </h2>

                    <div class="accordion" id="accordion">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h3 class="h5 mb-0">
                                    <button class="accordion-btn" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <span>One class at a time OR dive in completely.</span>
                                        <i class="icon-caret-down"></i>
                                    </button>
                                </h3>
                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We believe in the power of staying true to oneself, in following one’s calling and in divine timing.</p>
                                    <p>That’s why you can dip your toe in and take one class at a time and make your way through the certificate by following your heart or you can dive in completely, plan ahead and reserve your spot in classes up to a year ahead of time. It’s completely up to you.</p>
                                    <p>See the schedule for classes below [anchor link].</p>
                                    <p>Nothing fits your schedule right now? No problem, you can still start with one of our self-study programs [anchor link] while you wait.</p>
                                    <p>Ready to begin but not sure where to start? Reiki I & Mind Mastery I are amazing
                                    <p>starting points, but the best is to go with whatever class is calling you.</p>
                                    <p>You’ve already done Reiki I, II, III or have a long-standing mindfulness practice? These are likely to be recognized and you can jump into the more advanced classes.</p>
                                </div>
                            </div>
                        </div> <!-- /.card -->
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h3 class="h5 mb-0">
                                    <button class="accordion-btn collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <span>A multi-layered approach to learning.</span>
                                        <i class="icon-caret-down"></i>
                                    </button>
                                </h3>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.</p>
                                </div>
                            </div>
                        </div> <!-- /.card -->
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h3 class="h5 mb-0">
                                    <button class="accordion-btn collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <span>In the process to being recognized by ABC, DEF & XYZ.</span>
                                        <i class="icon-caret-down"></i>
                                    </button>
                                </h3>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.</p>
                                </div>
                            </div>
                        </div> <!-- /.card -->
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h3 class="h5 mb-0">
                                    <button class="accordion-btn collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        <span>Pay in full or with easy payment plans.</span>
                                        <i class="icon-caret-down"></i>
                                    </button>
                                </h3>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.</p>
                                </div>
                            </div>
                        </div> <!-- /.card -->
                    </div> <!-- /.accordion -->
                </div> <!-- /.accordion-block -->
            </div>
        </div>
    </div> <!-- /.offset-col__inner -->
</section> <!-- /.offset-col -->

<section class="container max-width-510 py-lg-4 py-sm-3 py-2">
    <h2 class="heading-secondary text-center mb-2">
        <span>What</span>
        to do next?
    </h2>
    <div class="counter-list text-center">
        <ul>
            <li><a href="#">Make sure we’re a good fit by booking a discovery call.</a> I like to get to know to all my prospective students by speaking to them individually at least once before they dive in.</li>
            <li><a href="#">Pick your next course. Learn about each one here.</a> If you’re at the very beginning of your journey, we recommend starting with Reiki I or with Mind Mastery I.</li>
            <li><a href="#">Register for your next course.</a> Click through, fill out the form and make your first payment.</li>
        </ul>
    </div> <!-- /.counter-list -->
</section> <!-- /.container -->

<section class="container-alt offset-block has-bg-img">
    <picture class="bg-img bg-img--offset has-overlay">
        <source media="(min-width: 576px)" srcset="<?php echo site_url(); ?>/media/offset-block-bg-img.webp" type="image/webp">
        <source media="(min-width: 576px)" srcset="<?php echo site_url(); ?>/media/offset-block-bg-img.jpg" type="image/jpg">
        <source srcset="<?php echo site_url(); ?>/media/offset-block-bg-img-xs.webp" type="image/webp">
        <source srcset="<?php echo site_url(); ?>/media/offset-block-bg-img-xs.jpg" type="image/jpg">
        <img width="1440" height="826" src="<?php echo site_url(); ?>/media/offset-block-bg-img.jpg" loading="lazy" alt="Jungle">
    </picture> <!-- /.bg-img -->
    <div class="container text-center max-width-650 mx-auto">
        <div class="offset-block__heading mb-1">
            <h2 class="heading-secondary mb-4">
                <span>Who is</span>
                the teacher?
            </h2>
            <div class="avatar-circle-wrapper">
                <picture class="avatar-circle">
                    <source srcset="<?php echo site_url(); ?>/media/teacher-avatar.webp" type="image/webp">
                    <source srcset="<?php echo site_url(); ?>/media/teacher-avatar.png" type="image/png">
                    <img width="368" height="232" src="<?php echo site_url(); ?>/media/teacher-avatar.png" loading="lazy" alt="Teacher">
                </picture>
            </div>
        </div> <!-- /.offset-block__heading -->
        <div class="text-white">
            <div class="offset-block__info">
                <strong class="info-title">A life-long learner</strong>
                <p>As long as I can remember I’ve been interested in understanding how people work and particularly how they heal, transform and thrive. This learning journey started with me experiencing life as a (codependent) empath, led me to get a Masters in Neuropsychology (completed in 2013) as well as a Certificate in Energy Medicine (completed in 2014) and has continued way beyond my formal training. I am always learning from my clients, students, from new teachers and most of all: from life & the energy.</p>
            </div> <!-- /.offset-block__info -->
            <div class="offset-block__info">
                <strong class="info-title">Following a deep calling:</strong>
                <p>I want to live in a world where people are free to be exactly who they are. That’s why I build programs that help you transform stuckness into growth, transcend your conditioning to return you to your essence and help others do the same. Beyond The Reiki Certificate, I also have programs that take you further into energy mastery and love supporting new healers to launch their businesses.</p>
            </div> <!-- /.offset-block__info -->
            <div class="offset-block__info">
                <strong class="info-title">Obsessed with creating and delivering potent healing journeys: </strong>
                <p>As far as I’m concerned, the real teachers are always (1) your essence and (2) the energy. It’s my job to create experiences where you uncover your own knowing. I will use meditations, exercises, discussions & important concepts in order to make that happen for you.</p>
            </div> <!-- /.offset-block__info -->
        </div>
        <div class="btn-wrap">
            <a href="#" class="btn btn-primary">Read More</a>
        </div>
    </div>
</section> <!-- /.offset-block -->

<section class="container schedule-section max-width-750 mb-xl-6 mb-lg-4 mb-3 pt-lg-3 pt-sm-2 pt-1">
    <div class="schedule-section__heading title-has-bg title-has-bg--alt text-center mb-lg-4 mb-3">
        <h2 class="heading-secondary heading-secondary--alt">
            <span>The 7 Courses included</span>
            in the Reiki <br>Certificate
        </h2>
    </div> <!-- /.schedule-section__heading -->
    <div class="schedule-section__inner max-width-750 mx-auto">
        <div class="box-text position-relative">
            <span class="box-text__off text-center">Scheduled Courses</span>
            <div class="box-text__info text-center max-width-437 mx-auto">
                <strong class="info-title font-weight-normal">Reiki I</strong>
                <p>Awaken the energy healer within.</p>
                <strong class="info-title font-weight-normal">Reiki II</strong>
                <p>The Empowered Healer: Alchemize the triggers and shadows of being a healer</p>
                <strong class="info-title font-weight-normal">Reiki III</strong>
                <p>Create space for your soul’s gifts to infuse your healing work.</p>
                <strong class="info-title font-weight-normal">Energy Healing Toolkit: </strong>
                <p>Become an accomplished healing guide.</p>
                <strong class="info-title font-weight-normal">Mind Mastery 2</strong>
                <p>The Empowered Empath: Mastering Your Mind, Emotions & Energy with Mindfulness</p>
            </div> <!-- /.box-text__info -->
        </div>
    </div>
</section> <!-- /.schedule-section -->


<section class="course-foot mb-xl-6 mb-lg-4 mb-sm-3">
    <div class="course-foot__top container-alt has-bg-img pt-xl-6 pt-lg-4 py-3">
        <picture class="bg-img">
            <source media="(min-width: 576px)" srcset="<?php echo site_url(); ?>/media/course-page-foot-bg.webp" type="image/webp">
            <source media="(min-width: 576px)" srcset="<?php echo site_url(); ?>/media/course-page-foot-bg.jpg" type="image/jpg">
            <source srcset="<?php echo site_url(); ?>/media/course-page-foot-bg-xs.webp" type="image/webp">
            <source srcset="<?php echo site_url(); ?>/media/course-page-foot-bg-xs.jpg" type="image/jpg">
            <img width="1440" height="800" src="<?php echo site_url(); ?>/media/course-page-foot-bg.jpg" loading="lazy" alt="Face">
        </picture> <!-- /.bg-img -->
        <div class="container max-width-750">
            <div class="box-text box-text--white position-relative mx-auto max-width-350">
                <span class="box-text__off text-center text-capitalize">Start-Anytime Courses:</span>

                <div class="box-text__info text-center">
                    <strong class="info-title font-weight-normal">Chakra Journey</strong>
                    <p>Balance and heal each of your 7 chakras.</p>
                    <strong class="info-title font-weight-normal">Mind Mastery 1:</strong>
                    <p>Mindfulness for Empaths</p>
                </div> <!-- /.box-text__info -->
            </div> <!-- /.box-text -->
        </div>
    </div> <!-- /.course-foot__top -->
    <div class="course-foot__bottom container max-width-750 pt-sm-0 pt-2">
        <div class="course-foot__info max-width-650 mx-auto text-center font-avenir mb-lg-4 mb-sm-3 mb-2">
            <h2 class="heading-secondary mb-sm-2 mb-1">
                <span>What happens</span>
                When graduate?
            </h2>
            <p>When you graduate (and way before), you’re equipped with the know-how to strike out on your own as an energy healer. Of course, you’ll have a million business questions and I’ve got you covered there too.</p>
        </div> <!-- /.course-foot__info -->

        <div class="counter-list text-center has-bg-img pt-2 pb-lg-4 pb-3">
            <picture class="bg-img">
                <source media="(min-width: 576px)" srcset="<?php echo site_url(); ?>/media/course-page-foot-list-bg.webp" type="image/webp">
                <source media="(min-width: 576px)" srcset="<?php echo site_url(); ?>/media/course-page-foot-list-bg.jpg" type="image/jpg">
                <source srcset="<?php echo site_url(); ?>/media/course-page-foot-list-bg-xs.webp" type="image/webp">
                <source srcset="<?php echo site_url(); ?>/media/course-page-foot-list-bg-xs.jpg" type="image/jpg">
                <img width="706" height="668" src="<?php echo site_url(); ?>/media/course-page-foot-list-bg.jpg" loading="lazy" alt="Background Image">
            </picture> <!-- /.bg-img -->
            <h2 class="heading-secondary text-center mb-2">
                <span>What</span>
                to do next?
            </h2>
            <ul>
                <li><a href="#">Make sure we’re a good fit by booking a discovery call.</a> I like to get to know to all my prospective students by speaking to them individually at least once before they dive in.</li>
                <li><a href="#">Pick your next course. Learn about each one here.</a> If you’re at the very beginning of your journey, we recommend starting with Reiki I or with Mind Mastery I.</li>
                <li><a href="#">Register for your next course.</a> Click through, fill out the form and make your first payment.</li>
            </ul>
        </div> <!-- /.counter-list -->
    </div>
</section> <!-- /.course-foot -->

<?php
get_footer();
