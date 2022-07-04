<?php
/* Template Name: Resources */

get_header();
?>

<section class="resources-intro container max-width-510 py-lg-4 py-sm-3 py-2">
    <header class="resources-intro__heading title-has-bg text-center">
        <h2 class="heading-secondary text-center">
            Your energy healing journey
            <span>Starts Here</span>
        </h2>
        <p>Sign up to receive a year's worth of FREE resources. Some of it will take you back right here to the blog. Some of it is available only by e-mail. All of it is highly valuable and easily digestible. </p>
    </header> <!-- /.title-has-bg -->
    <div class="form-primary max-width-300 mx-auto">
        <?php echo do_shortcode('[gravityform id=1 title=false description=false ajax=true]'); ?>
    </div>
</section> <!-- /.resources-intro -->

<section class="article-block container max-width-580">
    <div class="article-block__heading mb-2">
        <h2 class="heading-secondary text-center">
            <span>Recommended</span>
            Starting Points:
        </h2>
    </div>

    <div class="row article-block__inner">
        <div class="col-md-4 col-6 article-block__item">
            <article class="card-article">
                <div class="card-article__media">
                    <picture>
                        <source srcset="<?php echo site_url(); ?>/media/card-article-feature-img01.webp" type="image/webp">
                        <source srcset="<?php echo site_url(); ?>/media/card-article-feature-img01.jpg" type="image/jpg">
                        <img src="<?php echo site_url(); ?>/media/card-article-feature-img01.jpg" alt="Preparatory" width="158" height="133" loading="lazy">
                    </picture>
                    <span class="figcaption">Preparatory</span>
                </div>
                <div class="card-article__title">
                    <h6><a href="#" class="stretched-link">How to know you’re called to be a healer</a></h6>
                </div>
            </article> <!-- /.card-article -->
        </div>
        <div class="col-md-4 col-6 article-block__item">
            <article class="card-article">
                <div class="card-article__media">
                    <picture>
                        <source srcset="<?php echo site_url(); ?>/media/card-article-feature-img02.webp" type="image/webp">
                        <source srcset="<?php echo site_url(); ?>/media/card-article-feature-img02.jpg" type="image/jpg">
                        <img src="<?php echo site_url(); ?>/media/card-article-feature-img02.jpg" alt="Preparatory" width="158" height="133" loading="lazy">
                    </picture>
                    <span class="figcaption">Preparatory</span>
                </div>
                <div class="card-article__title">
                    <h6><a href="#" class="stretched-link">How to prepare for a Reiki session</a></h6>
                </div>
            </article> <!-- /.card-article -->
        </div>
        <div class="col-md-4 col-6 article-block__item">
            <article class="card-article">
                <div class="card-article__media">
                    <picture>
                        <source srcset="<?php echo site_url(); ?>/media/card-article-feature-img03.webp" type="image/webp">
                        <source srcset="<?php echo site_url(); ?>/media/card-article-feature-img03.jpg" type="image/jpg">
                        <img src="<?php echo site_url(); ?>/media/card-article-feature-img03.jpg" alt="Library" width="158" height="133" loading="lazy">
                    </picture>
                    <span class="figcaption">Library</span>
                </div>
                <div class="card-article__title">
                    <h6><a href="#" class="stretched-link">The seven chakras</a></h6>
                </div>
            </article> <!-- /.card-article -->
        </div>
        <div class="col-md-4 col-6 article-block__item">
            <article class="card-article">
                <div class="card-article__media">
                    <picture>
                        <source srcset="<?php echo site_url(); ?>/media/card-article-feature-img04.webp" type="image/webp">
                        <source srcset="<?php echo site_url(); ?>/media/card-article-feature-img04.jpg" type="image/jpg">
                        <img src="<?php echo site_url(); ?>/media/card-article-feature-img04.jpg" alt="Laboratory" width="158" height="133" loading="lazy">
                    </picture>
                    <span class="figcaption">Laboratory</span>
                </div>
                <div class="card-article__title">
                    <h6><a href="#" class="stretched-link">Self-love for empaths</a></h6>
                </div>
            </article> <!-- /.card-article -->
        </div>
        <div class="col-md-4 col-6 article-block__item">
            <article class="card-article">
                <div class="card-article__media">
                    <picture>
                        <source srcset="<?php echo site_url(); ?>/media/card-article-feature-img05.webp" type="image/webp">
                        <source srcset="<?php echo site_url(); ?>/media/card-article-feature-img05.jpg" type="image/jpg">
                        <img src="<?php echo site_url(); ?>/media/card-article-feature-img05.jpg" alt="Library" width="158" height="133" loading="lazy">
                    </picture>
                    <span class="figcaption">Library</span>
                </div>
                <div class="card-article__title">
                    <h6><a href="#" class="stretched-link">Mindfulness Journey</a></h6>
                </div>
            </article> <!-- /.card-article -->
        </div>
        <div class="col-md-4 col-6 article-block__item">
            <article class="card-article">
                <div class="card-article__media">
                    <picture>
                        <source srcset="<?php echo site_url(); ?>/media/card-article-feature-img06.webp" type="image/webp">
                        <source srcset="<?php echo site_url(); ?>/media/card-article-feature-img06.jpg" type="image/jpg">
                        <img src="<?php echo site_url(); ?>/media/card-article-feature-img06.jpg" alt="Preparatory" width="158" height="133" loading="lazy">
                    </picture>
                    <span class="figcaption">Preparatory</span>
                </div>
                <div class="card-article__title">
                    <h6><a href="#" class="stretched-link">Back to Basics of Energy</a></h6>
                </div>
            </article> <!-- /.card-article -->
        </div>
    </div>
</section> <!-- /.article-block -->

<section class="cat-section container max-width-800 py-xl-6 py-lg-4 py-sm-3 py-2">
    <div class="cat-section__top has-border text-center pt-2 mb-md-3 mb-2">
        <h4>Search By Category:</h4>
        <div class="row">
            <div class="col-md-4 mb-2">
                <div class="cat-section__panel">
                    <strong>Category 1:</strong>
                    <p>The Preparatory <br>(Introductions, The Basics,
                        How to Decide & Prepare)</p>
                </div> <!-- /.cat-section__panel -->
            </div>
            <div class="col-md-4 mb-2">
                <div class="cat-section__panel">
                    <strong>Category 1:</strong>
                    <p>The Preparatory <br>(Introductions, The Basics,
                        How to Decide & Prepare)</p>
                </div> <!-- /.cat-section__panel -->
            </div>
            <div class="col-md-4 mb-2">
                <div class="cat-section__panel">
                    <strong>Category 1:</strong>
                    <p>The Preparatory <br>(Introductions, The Basics,
                        How to Decide & Prepare)</p>
                </div> <!-- /.cat-section__panel -->
            </div>
        </div>
    </div>
    <div class="cat-section__search text-center max-width-300 mx-auto">
        <h4>Search By Keyword:</h4>
        <form class="form-search" method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>">
            <label for="s" class="sr-only"><?php _e('Search', 'reikelafayette'); ?></label>
            <div class="input-group">
                <input type="text" class="form-control field" name="s" id="s" placeholder="<?php esc_attr_e('What are you looking for ?', 'reikelafayette'); ?>">
                <div class="input-group-append">
                    <button type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e('Search', 'reikelafayette'); ?>"><i class="icon-search"></i></button>
                </div>
            </div>
        </form>
    </div>
</section> <!-- /.cat-section -->

<section class="banner-primary banner-primary--alt">
    <div class="container">
        <div class="banner-primary__inner text-white max-width-650 mx-auto text-center pb-lg-3 py-2">
            <h2 class="heading-secondary text-center mb-lg-3 mb-2">
                <span>A note</span>
                from Inge:
            </h2>
            <p>I’m so glad you found your way to this page. Ultimately, you are your own best healer. It’s my aim to have collected here some of our best resources and tools for you to explore, heal, grow and to get the absolute most out of your <a href="#">sessions</a>, <a href="#">courses</a> & <a href="#">events</a> with us.</p>
        </div>
    </div>
</section> <!-- banner-primary -->

<section class="about-author container max-width-510 py-xl-5 py-lg-4 py-sm-3 py-2">
    <div class="about-author__heading">
        <h2 class="heading-secondary text-center mb-lg-3 mb-2">
            <span>About</span>
            The Authors
        </h2>
    </div>
    <div class="author-slider slider-col-1 hide-dots">
        <div class="slider-item">
            <div class="about-panel">
                <div class="about-panel__head mb-1">
                    <picture>
                        <source srcset="<?php echo site_url(); ?>/media/teacher-avatar.webp" type="image/webp">
                        <source srcset="<?php echo site_url(); ?>/media/teacher-avatar.png" type="image/png">
                        <img src="<?php echo site_url(); ?>/media/teacher-avatar.png" alt="Home Hero Background" width="166" height="162" loading="lazy">
                    </picture>
                    <h6>Inge Broer</h6>
                    <small>The Alchemical Creatrix</small>
                </div>
                <div class="about-panel__body">
                    <p><em>Founder of Reiki Montreal & Energy School, Inge is a passionate explorer of the creative life and she specializes in helping her beloved 1:1 clients heal their way to the life of their dreams.</em></p>

                    <p><em>With her guidance, they learn the tools to live a life of deep fulfillment, clarity & trust in their intuition.</em></p>
                </div>
                <div class="about-panel__action">
                    <a href="#" class="btn btn-primary">Book a Session with Inge</a>
                </div>
            </div> <!-- /.about-panel -->
        </div>
        <div class="slider-item">
            <div class="about-panel">
                <div class="about-panel__head mb-1">
                    <picture>
                        <source srcset="<?php echo site_url(); ?>/media/teacher-avatar.webp" type="image/webp">
                        <source srcset="<?php echo site_url(); ?>/media/teacher-avatar.png" type="image/png">
                        <img src="<?php echo site_url(); ?>/media/teacher-avatar.png" alt="Home Hero Background" width="166" height="162" loading="lazy">
                    </picture>
                    <h6>Inge Broer</h6>
                    <small>The Alchemical Creatrix</small>
                </div>
                <div class="about-panel__body">
                    <p><em>Founder of Reiki Montreal & Energy School, Inge is a passionate explorer of the creative life and she specializes in helping her beloved 1:1 clients heal their way to the life of their dreams.</em></p>
                </div>
                <div class="about-panel__action">
                    <a href="#" class="btn btn-primary">Book a Session with Inge</a>
                </div>
            </div> <!-- /.about-panel -->
        </div>
    </div>
</section> <!-- /.about-author -->

<?php
get_footer();
