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

<header class="work-item work-item--motion area-dark">
    <div class="module--video module--header">
        <div id="header-play" class="header-play">

        </div>
        <div class="ratio">
            <video id="header-video-player" class="video-js vjs-default-skin" autoplay loop muted width="100%" height="100%" >
                    <source id="header-video" src="<?php echo get_template_directory_uri(); ?>/video/test-video.mp4" type="video/mp4">
            </video>
        </div>
    </div>
    <div class="container container--header">
        <div class="header-title">
            <p class="tag tag--no-italic">Film</p>
            <h1>Reliance<br />
                <span class="light underlined">Discover</span>
            </h1>
            <h2 class="light">Film</h2>
        </div>
        <div class="header-text">
            <div class="header-text__module header-text__module--padding">
                <h2>The Challenge</h2>
                <p class="first-para">How do you explain the many different services of a global company as complex and diverse as GfK in a single video piece? </p>
            </div>
            <div class="header-text__module header-text__module--padding">
                <h2>The solution</h2>
                <p class="first-para">Use motion graphics to keep things bold, clear and simple, telling the GfK story in just 90 seconds. </p>
            </div>
        </div>
    </div>
</header>

<div class="container container--half-top area-dark">
    <div class="group-container">
        <div class="group group--left">
            <div class="module module--2-2">
                <div class="overlay area-dark">
                    <div class="overlay-text">
                        <p class="tag">Motion: Case Study</p>
                        <h2>Barclays <br />
                            <span class="light underlined">Integrity</span>
                        </h2>
                        <p class="sans-serif">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure culpa qui deserunt, esse impedit unde ex.</p>
                    </div> <!-- /end overlay-text -->
                </div> <!-- /end overlay -->
                <div class="ratio" style="background-image: url('images/video-placeholder.jpg')">
                </div>
            </div>
        </div> <!-- /end group -->
        <div class="group group--right">
            <div  class="module module--1-1"></div>
            <div  class="module module--1-1"></div>
            <div class="module module--2-1"></div>
        </div> <!-- /end group -->
    </div> <!-- /end group-container -->
</div>

<div class="container container--no-padding">
    <section>
        <div class="group-container">
            <div class="group group--left">
                <div class="module module--2-1 area-dark">
                    <div class="module__text">
                        <h2 class="underlined">What we did</h2>
                        <p class="first-para">Motion graphics can be a quick and memorable way to convey complicated information. Using a mixture of 2D and 3D graphics to add depth, variety and texture, we were able to explain GfK’s core messages and services in less than two minutes.</p>
                        <p>The end result has become GFK’s most-viewed marketing material. Since its launch we have been asked to localise the promotional video for use in the multitude of countries that GfK operates in. </p>
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
                <div class="module module--2-1">
                    <div class="module__text">
                        <h2 class="underlined">What we did</h2>
                        <p class="first-para">Motion graphics can be a quick and memorable way to convey complicated information. Using a mixture of 2D and 3D graphics to add depth, variety and texture, we were able to explain GfK’s core messages and services in less than two minutes.</p>
                        <p>The end result has become GFK’s most-viewed marketing material. Since its launch we have been asked to localise the promotional video for use in the multitude of countries that GfK operates in. </p>
                    </div>
                </div>
            </div>
            <div class="group group--right">
                <div class="module module--1-1"></div>
                <div class="module module--1-1"></div>
            </div> <!-- /end group -->
        </div> <!-- /end group-container -->
    </section>
</div>

<div class="container container--no-padding">
    <div class="module module--2-1"></div>
</div>

<div class="container container--no-padding">
    <section>
        <div class="group-container">
            <div class="group group--left">
                <div class="module module--1-1"></div>
                <div class="module module--1-1"></div>
            </div>
            <div class="group group--right">
                <div class="module module--1-1"></div>
                <div class="module module--1-1"></div>
            </div> <!-- /end group -->
        </div> <!-- /end group-container -->
    </section>
</div>

<div class="group-container">
    <a class="project-navigation" href="">< Previous Project</a>
    <a class="project-navigation" href="">Next Project ></a>
</div>

</div>

<?php get_footer(); ?>
