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

<header id="sainsburys" class="work-item area-dark">
    <div class="monitor-holder">
        <img class="monitor centre-image" src="<?php echo get_template_directory_uri(); ?>/images/monitor.png" alt="">
        <div class="monitor-screen">
            <img src="<?php echo get_template_directory_uri(); ?>/images/work/int_sain/int_sain_imacsmall.jpg" alt="" style="width: 100%; height: 100%;">
        </div>
    </div>
    <div class="container container--header">
        <div class="header-title">
            <p class="tag">Interactive</p>
            <h1>Sainsbury&lsquo;s <br />
                <span class="light underlined">History Timeline</span>
            </h1>
            <h2 class="light services">Strategy | Design | Dev | Motion</h2>
        </div>
        <div class="header-text">
            <div class="header-text__module header-text__module--padded">
                <h2>The Challenge</h2>
                <p class="first-para">Convey Sainsbury’s prestigious history in a way that excites and engages people way beyond the usual flat and lifeless company timelines.</p>
            </div>
            <div class="header-text__module">
                <h2>The Big Idea</h2>
                <p class="first-para">Flip the static corporate timeline on its head and take people on a journey through time via a user-controlled 3D perspective interface. </p>
            </div>
        </div>
    </div>
</header>

    <div class="container container--carousel" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/int_sain/gallery/int_sain_gallery_background.jpg')">
        <section class="carousel">
            <img class="carousel-monitor centre-image" src="<?php echo get_template_directory_uri(); ?>/images/monitor.png" alt="">
            <img id="carousel-girl" src="<?php echo get_template_directory_uri(); ?>/images/work/int_sain/gallery/int_sain_gallery_girl.png" alt="">
            <div class="carousel-images">
                <div id="carousel-image-1" class="carousel-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/int_sain/gallery/int_sain_gallery_01_imacsmall.jpg')"></div>
                <div id="carousel-image-2" class="carousel-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/int_sain/gallery/int_sain_gallery_02_imacsmall.jpg')"></div>
                <div id="carousel-image-3"  class="carousel-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/int_sain/gallery/int_sain_gallery_03_imacsmall.jpg')"></div>
                <div id="carousel-image-4"class="carousel-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/int_sain/gallery/int_sain_gallery_04_imacsmall.jpg')"></div>
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
                    <div class="module module--2-1 module--text-pad module--dark">
                        <div class="module__text">
                            <h2 class="underlined">What we did</h2>
                            <p class="first-para">Motion graphic treatment was an obvious choice for this project, but we wanted to let users control the flow of the story. So we used HTML, JavaScript and CSS to create an interactive animation so users can scroll through Sainsbury’s history via 3D front-on perspective. We set this against a backdrop of moments in British history, really bringing the piece to life.</p>
                            <p>We created a unique iterative loader to deliver a smooth experience. And our modular approach to the timeline build makes it easy to embed on other sites.</p>
                        </div>
                    </div>
                    <div class="module module--2-1">
	                    <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/int_sain/int_sain_01_mr.jpg')"></div>
                    </div>
                </div>
                <div class="group group--right">
                    <div class="module module--2-2">
	                    <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/int_sain/int_sain_02_ls.jpg')"></div>
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
                            <p>“We are really happy with the result and it has been getting great feedback internally. I am so pleased with the work you have produced, it would be really great if you were able to work with other teams in Sainsbury’s as well as L&amp;D.”</p>
                            <p>Joe Kelly - Behavioural Specialist in Learning &amp; Development</p>
                        </div>
                    </div>
                </div>
                <div class="group group--right">
                    <div class="module module--1-1">
	                    <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/int_sain/int_sain_03_ss.jpg')"></div>
                    </div>
                    <div class="module module--1-1">
	                    <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/int_sain/int_sain_04_ss.jpg')"></div>
                    </div>
                </div> <!-- /end group -->
            </div> <!-- /end group-container -->
        </section>
    </div> <!-- /end container -->


	<div class="container container--no-padding">

	    <video class="video-js vjs-default-skin" controls poster="<?php echo get_template_directory_uri(); ?>/images/work/int_sain/film_poster_image.jpg" width="100%" height="100%" >
	            <source src="https://player.vimeo.com/external/141178728.hd.mp4?s=ab67b1dcea7b7d9f5049c8a2723878ae&profile_id=113" type="video/mp4">
	    </video>

	</div> <!-- /end container -->

    <div class="container container--no-padding image-container">
    	<img class="full-size" src="<?php echo get_template_directory_uri(); ?>/images/work/int_sain/int_sain_05_hz.jpg" alt="Sainbury's Cars" />
    </div>

    <!-- TODO: Add Video and Images of Cars Thang -->

    <div class="group-container">
        <a class="project-navigation" href="../code-it">< Previous Project</a>
        <a class="project-navigation" href="../pbs">Next Project ></a>
    </div>

</div>

<?php get_footer(); ?>
