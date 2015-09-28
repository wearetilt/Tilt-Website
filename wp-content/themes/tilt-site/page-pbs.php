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

<header id="icap" class="work-item area-dark">
    <div class="monitor">
        <img class="centre-image" src="<?php echo get_template_directory_uri(); ?>/images/monitor.png" alt="">
    </div>
    <div class="container container--header">
        <div class="header-title">
            <p class="tag">Interactive</p>
            <h1>Passion Pictures<br />
                <span class="light underlined">Interactive microsite for Earth - A New Wild</span>
            </h1>
            <h2 class="light">Design | Illustration | DEVELOPMENT</h2>
        </div>
        <div class="header-text">
            <div class="header-text__module header-text__module--padded">
                <h2>The challenge</h2>
                <p class="first-para">Use the power of digital to help young people explore the ideas behind a National Geographic nature documentary.</p>
            </div>
            <div class="header-text__module">
                <h2>The Big Idea</h2>
                <p class="first-para">Create a batch of addictive, playful HTML5 micro-games that take students deep into the amazing worlds of vultures, wolves and sharks.</p>
            </div>
        </div>
    </div>
</header>

<div class="container container--carousel">
    <section class="carousel">
        <img class="carousel-monitor centre-image" src="<?php echo get_template_directory_uri(); ?>/images/monitor.png" alt="">
        <div class="carousel-images">
            <div id="carousel-image-1"class="carousel-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/int_pbs/gallery/int_pbs_gallery_01_imacsmall.jpg')"></div>
            <div id="carousel-image-2"class="carousel-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/int_pbs/gallery/int_pbs_gallery_02_imacsmall.jpg')"></div>
            <div id="carousel-image-3"class="carousel-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/int_pbs/gallery/int_pbs_gallery_03_imacsmall.jpg')"></div>
            <div id="carousel-image-4"class="carousel-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/int_pbs/gallery/int_pbs_gallery_04_imacsmall.jpg')"></div>
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
                <div class="module module--2-1 module--dark">
                    <div class="module__text">
                        <h2 class="underlined">What we did</h2>
                        <p class="first-para">Earth - A New Wild is a nature documentary that shows young audiences that ecosystems often hang in a delicate balance and are easily disrupted by the actions of man. The producer, Passion Pictures, approached us to create an engaging digital experience to support the show. The original brief asked for a microsite with an overview of each show, but we saw an opportunity to do much more...</p>
                    </div>
                </div>
                <div class="module module--2-1">
	                <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/int_pbs/int_pbs_01_mr.jpg')"></div>
                </div>
            </div>
            <div class="group group--right">
                <div class="module module--2-2">
	                <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/int_pbs/int_pbs_02_ls.jpg')"></div>
                </div>
            </div> <!-- /end group -->
        </div> <!-- /end group-container -->
    </section>
</div> <!-- /end container -->

<div class="container container--no-padding">
    <section>
        <div class="group-container">
            <div class="group group--left">
                <div class="module module--2-1 module--dark">
                    <div class="module__text">
                        <p>We created Ecosystem Explorer, a portal jam-packed with videos, games and infographics designed to take students deep into three thrilling ecosystems based on the lives of vultures, wolves and sharks. Built using Create JS and HTML5, the games work in any browser and feature original artwork, illustrations and sound effects created by our team.</p>
                    </div>
                </div>
            </div>
            <div class="group group--right">
                <div class="module module--1-1">
	                <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/int_pbs/int_pbs_03_ss.jpg')"></div>
                </div>
                <div class="module module--1-1">
	                <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/int_pbs/int_pbs_04_ss.jpg')"></div>
                </div>
            </div> <!-- /end group -->
        </div> <!-- /end group-container -->
    </section>
</div> <!-- /end container -->

<div class="container container--no-padding">
    <section>
        <div class="group-container">
            <div class="group group--left">
                <div class="module module--2-2">
	                <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/int_pbs/int_pbs_05_ls.jpg')"></div>
                </div>
            </div>
            <div class="group group--right">
                <div class="module module--2-1 area-dark">
                	<div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/int_pbs/int_pbs_06_mr.jpg')"></div>
                </div>
                <div class="module module--1-1">
	                <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/int_pbs/int_pbs_07_ss.jpg')"></div>
                </div>
                <div class="module module--1-1">
	                <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/int_pbs/int_pbs_08_ss.jpg')"></div>
                </div>
            </div> <!-- /end group -->
        </div> <!-- /end group-container -->
    </section>
</div> <!-- /end container -->

<div class="container container--no-padding image-container">
	<img class="full-size" src="<?php echo get_template_directory_uri(); ?>/images/work/int_pbs/int_pbs_09_hz.jpg" alt="PBS Fear-o-Meter" />
</div>



<!-- TODO: Add the fear-o-meter thang -->

<div class="group-container">
    <a class="project-navigation" href="">< Previous Project</a>
    <a class="project-navigation" href="">Next Project ></a>
</div>

</div>

<?php get_footer(); ?>
