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
<div id="video-overlay" class="fullpage-overlay">
    <video id="overlay-video" controls class="video-js vjs-default-skin vertical-align" poster="<?php echo get_template_directory_uri(); ?>/images/work/mo_integrity/film_poster_image.jpg" width="100%" height="auto">
        <source src="https://player.vimeo.com/external/141548149.hd.mp4?s=c38947ea65f3bad06d05e9881fe92ead&profile_id=113" type="video/mp4">
    </video>
    <div id="video-overlay-close"><p class="vertical-align sans-serif">X</p></div>
</div>
<header id="page_gfk" class="work-item work-item--motion area-dark">
    <div class="module--video module--header">
        <div id="header-play" class="header-play">

        </div>
        <div class="ratio">
            <video id="header-video-player" class="video-js vjs-default-skin" autoplay loop width="100%" height="100%" >
                    <source id="header-video" src="https://player.vimeo.com/external/140667746.hd.mp4?s=65dbf2593c9f3bed0c770c497eda1964&profile_id=113" type="video/mp4">
            </video>
        </div>
    </div>
    <div class="container container--header">
        <div class="header-title">
            <p class="tag tag--no-italic">Motion</p>
            <h1>GFK<br />
                <span class="light underlined">Brand Promo</span>
            </h1>
            <h2 class="light services">Strategy | Motion | 3D</h2>
        </div>
        <div class="header-text">
            <div class="header-text__module header-text__module--padding">
                <h2>The Challenge</h2>
                <p class="first-para">How do you explain the many different services of a global company as complex and diverse as GfK in a single video piece? </p>
            </div>
            <div class="header-text__module header-text__module--padding">
                <h2>The Big Idea</h2>
                <p class="first-para">Use motion graphics to keep things bold, clear and simple, telling the GfK story in just 90 seconds.</p>
            </div>
        </div>
    </div>
</header>

<div class="container container--half-top area-dark">
    <div class="group-container">
        <div class="group group--left">
            <div class="module module--2-2">
                <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/mo_gfk/mo_gfk_01_ls.jpg')"></div>
            </div>
        </div> <!-- /end group -->
        <div class="group group--right">
            <div class="module module--1-1">
	            <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/mo_gfk/mo_gfk_02_ss.jpg')"></div>
            </div>
            <div  class="module module--1-1">
	            <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/mo_gfk/mo_gfk_03_ss.jpg')"></div>
            </div>
            <div class="module module--2-1">
	            <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/mo_gfk/mo_gfk_04_mr.jpg')"></div>
            </div>
        </div> <!-- /end group -->
    </div> <!-- /end group-container -->
</div>

<div class="container container--no-padding">
    <section>
        <div class="group-container">
            <div class="group group--left">
                <div class="module module--2-1 module--text-pad module--dark">
                    <div class="module__text">
                        <h2 class="underlined">What we did</h2>
                        <p class="first-para">Motion graphics can be a quick and memorable way to convey complicated information. Using a mixture of 2D and 3D graphics to add depth, variety and texture, we were able to explain GfK’s core messages and services in less than two minutes.</p>
                    </div>
                </div>
                <div class="module module--2-1">
	                <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/mo_gfk/mo_gfk_05_mr.jpg')"></div>
                </div>
            </div>
            <div class="group group--right">
                <div class="module module--2-2">
	                <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/mo_gfk/mo_gfk_06_ls.jpg')"></div>
                </div>
            </div> <!-- /end group -->
        </div> <!-- /end group-container -->
    </section>
</div> <!-- /end container -->

<div class="container container--no-padding">
    <section>
        <div class="group-container">
            <div class="group group--left">
                <div class="module module--2-1 module--text-pad module--dark">
                    <div class="module__text">
                        <p>The end result has become GFK’s most-viewed marketing material. Since its launch we have been asked to localise the promotional video for use in the multitude of countries that GfK operates in.</p>
                    </div>
                </div>
            </div>
            <div class="group group--right">
                <div class="module module--1-1">
                    <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/mo_gfk/mo_gfk_07_ss.jpg')"></div>
                </div>
                <div class="module module--1-1">
	                <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/mo_gfk/mo_gfk_08_ss.jpg')"></div>
                </div>
            </div> <!-- /end group -->
        </div> <!-- /end group-container -->
    </section>
</div> <!-- /end container -->

<div class="container quote-container area-dark">
    <section class="text-section">
            <blockquote>“Tilt helped us realise a great 90 second 3D animation with VO. The production allowed us to simplify our complete matrix portfolio in the rapidly changing market research industry. The project was well organised and the team a pleasure to work with.”</blockquote>
            <p class="sans-serif quote-attribute"><strong class="highlight">Glenn Ward,</strong> Global Director, Digital Marketing at GfK</p>
    </section>
</div>

<div class="group-container">
    <a class="project-navigation" href="../legacy">< Previous Project</a>
    <a class="project-navigation" href="../barclays-integrity">Next Project ></a>
</div>

</div>

<?php get_footer(); ?>
