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

get_header(); ?>

<header id="icap" class="work-item area-dark">
    <div class="monitor">
        <img class="centre-image" src="<?php echo get_template_directory_uri(); ?>/images/monitor.png" alt="">
    </div>
    <div class="container container--header">
        <div class="header-title">
            <p class="tag">Interactive</p>
            <h1>Alzheimer's Research UK<br />
                <span class="light underlined">Interactive Website: The Lab</span>
            </h1>
            <h2 class="light">UX | DESIGN | DEVELOPMENT | MOTION | DEVELOPMENT</h2>
        </div>
        <div class="header-text">
            <div class="header-text__module header-text__module--padded">
                <h2>The Challenge</h2>
                <p class="first-para">How can you move people to really understand Alzheimer’s Disease, see the life-saving importance of drug development, and motivate them to donate?</p>
            </div>
            <div class="header-text__module">
                <h2>The solution</h2>
                <p class="first-para">Bring a dementia research lab to life. Help people understand through interaction. Pack an emotional punch by personalising the experience. Make it easy to share through social. </p>
            </div>
        </div>
    </div>
</header>

<div class="container container--carousel">
    <section class="carousel">
        <img class="carousel-monitor centre-image" src="<?php echo get_template_directory_uri(); ?>/images/monitor.png" alt="">
        <div class="carousel-images">
            <div id="carousel-image-1"class="carousel-image"></div>
            <div id="carousel-image-2"class="carousel-image"></div>
            <div id="carousel-image-3"class="carousel-image"></div>
            <div id="carousel-image-4"class="carousel-image"></div>
        </div> <!-- /end carousel-images -->
        <div class="carousel-controls">
            <div id="carousel-control-1" class="carousel-control selected"></div>
            <div id="carousel-control-2" class="carousel-control"></div>
            <div id="carousel-control-3" class="carousel-control"></div>
            <div id="carousel-control-4" class="carousel-control"></div>
        </div> <!-- /end carousel-controls -->
    </section>
</div>

<div class="container container--no-padding">
    <section>
        <div class="group-container">
            <div class="group group--left">
                <div class="module module--2-1 area-dark">
                    <div class="module__text">
                        <h2 class="underlined">What we did</h2>
                        <p class="first-para">We developed the Lab, an experiential site that takes users on a journey through the drug development process. The Lab opens with an emotive question: “What if you couldn’t remember your family and friends?”.</p>
                        <p>The challenge then was how to create informative and interactive content that was bold enough to get people talking and practical enough to drive donations.</p>
                    </div>
                </div>
                <div class="module module--2-1"></div>
            </div>
            <div class="group group--right">
                <div class="module module--2-2"></div>
            </div> <!-- /end group -->
        </div> <!-- /end group-container -->
    </section>
</div> <!-- /end container -->

<div class="container container--no-padding">
    <section>
        <div class="group-container">
            <div class="group group--left">
                <div class="module module--2-1 area-dark">
                    <div class="module__text">
                        <h2 class="underlined">Quote</h2>
                        <p class="first-para">“Tilt created a sleek and engaging website, which really brought our ideas to life. Their creative thinking presented us with ideas and functionality beyond our expectations that worked superbly in making the Lab a captivating and interactive experience for visitors.”</p>
                        <p>Laura Phipps, Science Communications Manager</p>
                    </div>
                </div>
            </div>
            <div class="group group--right">
                <div class="module module--1-1"></div>
                <div class="module module--1-1"></div>
            </div> <!-- /end group -->
        </div> <!-- /end group-container -->
    </section>
</div> <!-- /end container -->

<div class="group-container">
    <a class="project-navigation" href="">< Previous Project</a>
    <a class="project-navigation" href="">Next Project ></a>
</div>

</div>

<!-- TODO: ADD BIG ASS VIDEO -->

<?php get_footer(); ?>
