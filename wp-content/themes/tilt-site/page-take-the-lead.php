<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header('work-item'); ?>

<header class="work-item work-item--motion area-dark">
    <div class="module--video module--header">
        <div id="header-play" class="header-play">

        </div>
        <div class="ratio">
            <video id="header-video-player" class="video-js vjs-default-skin" autoplay loop muted width="100%" height="100%" >
                    <source id="header-video" src="https://player.vimeo.com/external/139331070.hd.mp4?s=b2d4b3506fa6f57cee7b8cf917f32298&profile_id=113" type="video/mp4">
            </video>
        </div>
    </div>
    <div class="container container--header">
        <div class="header-title">
            <p class="tag tag--no-italic">Motion</p>
            <h1>South Downs National Park<br />
                <span class="light underlined">Take the lead</span>
            </h1>
            <h2 class="light">Content Strategy | Illustration | Motion</h2>
        </div>
        <div class="header-text">
            <div class="header-text__module header-text__module--padding">
                <h2>The Challenge</h2>
                <p class="first-para">How can you change the behaviour of irresponsible dog owners in the South Downs National Park, without being patronising?</p>
            </div>
            <div class="header-text__module header-text__module--padding">
                <h2>The Big Idea</h2>
                <p class="first-para">Create an animated piece with a playful, warm tone that delivers serious messages underneath – the spoonful of sugar that helps the medicine go down.</p>
            </div>
        </div>
    </div>
</header>

<div class="container container--half-top area-dark">
    <div class="group-container">
        <div class="group group--right">
            <div class="module module--2-2">
                <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/mo_ttl/mo_ttl_04_ls.jpg')"></div>
            </div>
        </div> <!-- /end group -->
        <div class="group group--left">
            <div class="module module--2-1">
	            <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/mo_ttl/mo_ttl_01_mr.jpg')"></div>
            </div>
            <div class="module module--1-1">
	            <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/mo_ttl/mo_ttl_02_ss.jpg')"></div>
            </div>
            <div  class="module module--1-1">
	            <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/mo_ttl/mo_ttl_03_ss.jpg')"></div>
            </div>
        </div> <!-- /end group -->
    </div> <!-- /end group-container -->
</div>

<div class="container container--no-padding">
    <section>
        <div class="group-container">
            <div class="group group--left">
                <div class="module module--2-1 area-dark area-dark--lighter">
                    <div class="module__text">
                        <h2 class="underlined">What we did</h2>
                        <p class="first-para">We created a Creature Comforts-inspired animated film with a light-hearted tone. We interviewed dog walkers on the South Downs about responsible dog ownership and then put their words into the mouths of animated pets. The client hoped to get 1,000 unique views within the first week, but the piece went viral and was watched more than 10,000 times in seven days.</p>
                    </div>
                </div>
                <div class="module module--2-1">
	                <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/mo_ttl/mo_ttl_05_mr.jpg')"></div>
                </div>
            </div>
            <div class="group group--right">
                <div class="module module--2-2">
	                <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/mo_ttl/mo_ttl_06_ls.jpg')"></div>
                </div>
            </div> <!-- /end group -->
        </div> <!-- /end group-container -->
    </section>
</div> <!-- /end container -->

<div class="container container--no-padding">
    <section>
        <div class="group-container">
            <div class="group group--left">
                <div class="module module--2-1 area-dark area-dark--lighter">
                    <div class="module__text">
                        <p>The finished film was seen by thousands and as a result we were commissioned to rebuild the main South Downs website.</p>
                        <p>“Everyone thinks the film is really great and funny and I'm very impressed with the final product too!”</p>
                        <p>Nick Stewart - Programme Manager</p>
                    </div>
                </div>
            </div>
            <div class="group group--right">
                <div class="module module--1-1">
	            	<div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/mo_ttl/mo_ttl_07_ss.jpg')"></div>
                </div>
                <div class="module module--1-1">
	                <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/mo_ttl/mo_ttl_08_ss.jpg')"></div>
                </div>
            </div> <!-- /end group -->
        </div> <!-- /end group-container -->
    </section>
</div> <!-- /end container -->

<div class="group-container">
    <a class="project-navigation" href="">< Previous Project</a>
    <a class="project-navigation" href="">Next Project ></a>
</div>

</div>

<?php get_footer(); ?>
