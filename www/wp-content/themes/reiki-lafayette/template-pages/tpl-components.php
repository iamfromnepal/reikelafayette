<?php
/* Template Name: Components */

get_header();
?>

<section class="components-page">
    <div class="container">
        <h1>This is Heading One.</h1>
        <h2>This is Heading Two.</h2>
        <h3>This is Heading Three.</h3>
        <h4>This is Heading Four.</h4>
        <h5>This is Heading Five.</h5>
        <h6>This is Heading Six.</h6>
        <hr>
        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore eaque provident maiores molestiae cupiditate quibusdam sed quidem, labore voluptates modi sint est omnis consequuntur eius quo voluptatem! Voluptates, dolore incidunt.</p>
        <hr>
        <hr>
        <p><a href="#" class="btn btn-primary">Sign Up</a></p>
        <p><a href="#" class="btn btn-lg btn-primary">Learn About Our Certification</a></p>
        <p><a href="#" class="btn btn-primary btn-block">Sign Up</a></p>
        <hr>
        <hr>
        <h2 class="text-center mb-1"><code>[.heading-primary]</code></h2>
        <h1 class="heading-primary text-center">
            Your
            <span>Energy Healing Journey</span>
            Starts Here.
        </h1>
        <hr>
        <hr>
        <div style="background-color: rgba(0, 0, 0, .6)" class="p-4">
            <h2 class="text-center text-white mb-1"><code>[.heading-primary.text-white]</code></h2>
            <h1 class="heading-primary text-center text-white">
                Your
                <span>Energy Healing Journey</span>
                Starts Here.
            </h1>
        </div>
        <hr>
        <hr>
        <h2 class="text-center mb-1"><code>[.heading-primary]</code></h2>
        <h1 class="heading-primary text-center">
            <span>Unleash</span>
            Your inner Healer
        </h1>
        <hr>
        <hr>
        <h2 class="text-center mb-1"><code>[.heading-secondary]</code></h2>
        <h2 class="heading-secondary text-center">
            <span>What is</span>
            The Reiki certificate?
        </h2>
        <hr>
        <hr>
        <h2 class="text-center mb-4 mb-lg-6"><code>.avatar-circle</code></h2>
        <div class="avatar-circle-wrapper offset-top-sm offset-top-lg">
            <picture class="avatar-circle">
                <!-- <source srcset="<?php echo site_url(); ?>/media/reiki-montreal-avatar.webp" type="image/webp">
                <source srcset="<?php echo site_url(); ?>/media/reiki-montreal-avatar.jpg" type="image/jpg">
                <img src="<?php echo site_url(); ?>/media/reiki-montreal-avatar.jpg" alt="Reiki Montreal Avatar" width="160" height="160" loading="lazy"> -->
                <img src="https://via.placeholder.com/160x160.png/a59090/000000?Text=160x160" alt="Reiki Montreal Avatar" width="160" height="160" loading="lazy">
            </picture>
        </div>
    </div>

    <div class="container">
        <hr>
        <hr>

        <h2 class="my-3">[.list-arrow]</h2>

        <div class="list-arrow list-unstyled font-avenir">
            <ul>
                <li><strong>Receiving information + training:</strong> attunements, conceptual training, “how to” guides, the history of Reiki & so much more is included</li>

                <li><strong>Doing a 21-day self-healing journey.</strong> Every day, you connect to Reiki energy, healing, balancing,</li>

                <li><strong>Becoming a Reiki channel for others.</strong> As of week 3, we’re shifting our focus from channeling Reiki for yourself, to</li>
            </ul>
        </div> <!-- /.list-arrow -->

        <hr>
        <hr>

        <h2 class="my-3 text-center">[.title-has-bg]</h2>

        <div class="title-has-bg text-center">
            <h2 class="h4 max-width-330 mx-auto">Within Reiki I, you will awaken your inner healer through:</h2>
        </div> <!-- /.title-has-bg -->

        <hr>
        <hr>

        <div class="counter-list text-center">
            <ul>
                <li><a href="#">Make sure we’re a good fit by booking a discovery call.</a> I like to get to know to all my prospective students by speaking to them individually at least once before they dive in.</li>
                <li><a href="#">Pick your next course. Learn about each one here.</a> If you’re at the very beginning of your journey, we recommend starting with Reiki I or with Mind Mastery I.</li>
                <li><a href="#">Register for your next course.</a> Click through, fill out the form and make your first payment.</li>
            </ul>
        </div>
        <hr>
        <hr>

        <h2>[.box-light]</h2>
        <div style="background-color: #000; padding: 2rem;">
            <div class="box-light box-light--mb font-500 text-center">
                <h2 class="heading-tertiary text-center mb-2 m-md-0">
                    When we say <br>your energy healing journey starts here,
                    <span>We Mean it.</span>
                </h2>
                <p>We have a year’s worth of FREE resources available for you via our newsletter. You’ll get highly valuable and easy to digest content every week delivered straight to your inbox.</p>
            </div> <!-- /.box-light -->
        </div>
        <hr>
        <hr>

        <h2>[.box-quote.box-quote--md]</h2>
        Shortcode = [contentbox classes="" paragraph=""]
        <?php echo do_shortcode('[contentbox classes="box-quote box-quote--md mx-auto font-size-lg text-center mt-1 mt-lg-3 px-lg-3 mb-1 mb-lg-2" paragraph="I can genuinely say Reiki changed my life and has accompanied me on a long & beautiful healing journey."]'); ?>
        <hr>
        <hr>

        <h2>[.box-quote.box-quote--lg]</h2>
        Shortcode = [contentbox classes="" paragraph=""]
        <?php echo do_shortcode('[contentbox classes="box-quote box-quote--lg mx-auto font-size-lg text-center mt-1 mt-lg-3 px-lg-3 mb-1 mb-lg-2" paragraph="I can genuinely say Reiki changed my life and has accompanied me on a long & beautiful healing journey."]'); ?>
        <hr>
        <hr>

        <h2>[.box-quote]</h2>
        Shortcode = [contentbox classes="" paragraph=""]
        <?php echo do_shortcode('[contentbox classes="box-quote mx-auto font-size-lg text-center mt-1 mt-lg-3 px-lg-3 mb-1 mb-lg-2" paragraph="I can genuinely say Reiki changed my life and has accompanied me on a long & beautiful healing journey."]'); ?>
        <hr>
        <hr>

        <div class="mb-2"><h2>[.box-text]</h2>
        Shortcode = [contentbox classes="" offtext="" headingsig="" heading="" paragraph=""]</div>
        <?php echo do_shortcode('[contentbox classes="box-text text-center mb-2" offtext="Reiki I" headingsig="Awaken" heading="Your inner Healer" paragraph="I can genuinely say Reiki changed my life and has accompanied me on a long & beautiful healing journey."]'); ?>
        <hr>
        <hr>

        <div class="mb-2"><h2>[.box-text]</h2>
        Shortcode = [contentbox classes="" offtext="" headingsig="" heading=""]</div>
        <?php echo do_shortcode('[contentbox classes="box-text text-center mb-2" offtext="Reiki I" headingsig="Awaken" heading="Your inner Healer"]'); ?>
        <hr>
        <hr>
    </div>
</section> <!-- /.components-page -->
<?php
get_footer();
