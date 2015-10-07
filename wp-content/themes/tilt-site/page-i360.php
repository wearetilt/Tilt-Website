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

<header id="i360" class="work-item area-dark">
    <div class="monitor-holder">
        <img class="monitor centre-image" src="<?php echo get_template_directory_uri(); ?>/images/monitor.png" alt="">
        <div class="monitor-screen">
            <img src="<?php echo get_template_directory_uri(); ?>/images/work/web_i360/web_i360_imacsmall.jpg" alt="" style="width: 100%; height: 100%;">
        </div>
    </div>
    <div class="container container--header">
        <div class="header-title">
            <p class="tag">Web</p>
            <h1>i360<br />
                <span class="light underlined">Promotional Website</span>
            </h1>
            <h2 class="light">Design | Development</h2>
        </div>
        <div class="header-text">
            <div class="header-text__module header-text__module--padded">
                <h2>The challenge</h2>
                <p class="first-para">Create a new website to help attract support from investors and the local community for an ambitious new project – the i360, the world’s tallest moving observation platform.</p>
            </div>
            <div class="header-text__module">
                <h2>The Big Idea</h2>
                <p class="first-para">Build a website that unapologetically conveys the scale, ambition and sheer excitement of the i360 – and give a sneak preview of the awe-inspiring views.</p>
            </div>
        </div>
    </div>
</header>

<div class="container">
        <div class="mobile-holder">
            <img class="mobile-phone" src="<?php echo get_template_directory_uri();?>/images/mobile-phone.png" alt="">
            <div class="mobile-screen">
                <img src="<?php echo get_template_directory_uri(); ?>/images/work/web_i360/iphones/web_i360_01_iphone.jpg" alt="">
            </div>
        </div>
        <div class="mobile-holder">
            <img class="mobile-phone" src="<?php echo get_template_directory_uri();?>/images/mobile-phone.png" alt="">
            <div class="mobile-screen">
                <img src="<?php echo get_template_directory_uri(); ?>/images/work/web_i360/iphones/web_i360_02_iphone.jpg" alt="">
            </div>
        </div>
        <div class="mobile-holder">
            <img class="mobile-phone" src="<?php echo get_template_directory_uri();?>/images/mobile-phone.png" alt="">
            <div class="mobile-screen">
                <img src="<?php echo get_template_directory_uri(); ?>/images/work/web_i360/iphones/web_i360_03_iphone.jpg" alt="">
            </div>
        </div>
</div> <!-- /end container -->

<div class="container container--carousel" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/web_i360/gallery/web_i360_gallery_background.jpg')">
    <section class="carousel">
        <img class="carousel-monitor centre-image" src="<?php echo get_template_directory_uri(); ?>/images/monitor.png" alt="">
        <div class="carousel-images">
            <div id="carousel-image-1" class="carousel-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/web_i360/Gallery/web_i360_gallery_01_imacsmall.jpg')"></div>
            <div id="carousel-image-2" class="carousel-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/web_i360/Gallery/web_i360_gallery_02_imacsmall.jpg')"></div>
            <div id="carousel-image-3" class="carousel-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/web_i360/Gallery/web_i360_gallery_03_imacsmall.jpg')"></div>
            <div id="carousel-image-4" class="carousel-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/web_i360/Gallery/web_i360_gallery_04_imacsmall.jpg')"></div>
        </div> <!-- /end carousel-images -->
        <div class="carousel-controls">
            <div id="carousel-control-1" class="carousel-control selected"></div>
            <div id="carousel-control-2" class="carousel-control"></div>
            <div id="carousel-control-3" class="carousel-control"></div>
            <div id="carousel-control-4" class="carousel-control"></div>
        </div> <!-- /end carousel-controls -->
    </section>
</div>


<div class="container container--no-padding area-dark">
    <section>
        <div class="group-container">
            <div class="group group--left">
                <div class="module module--2-1 module--text-pad module--dark">
                    <div class="module__text">
                        <h2 class="underlined">What We Did</h2>
                        <p class="first-para">The i360, developed by the team behind the London Eye, was designed to give Brighton and Hove a truly international-class tourist attraction. While the idea initially gained a lot of attention, project delays affected public support. The website needed an upgrade in order to help gain more positive PR. The site also needed to help facilitate the i360 team’s blogging and social media outreach strategy.</p>
                    </div>
                </div>
                <div class="module module--2-1 module--video">
                    <div class="ratio">
                        <video poster="<?php echo get_template_directory_uri(); ?>/images/work/web_i360/iphone_poster_frame.jpg" autoplay loop="true" muted="true">
                                <source src="https://player.vimeo.com/external/141169001.sd.mp4?s=a3333fb671bc35d39e72113bf3341783&profile_id=112" type="video/mp4">
                        </video>
                    </div>
                </div> <!-- /end module -->
            </div>
            <div class="group group--right module--dark">
                <div class="module module--2-2">
	                <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/web_i360/web_i360_02_ls.jpg')"></div>
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
                        <p>The site uses a clean, responsive scrolling experience that recreates a sense of moving up and down the tower. Through 3D-rendered graphics and photography, we illustrated what visitors can expect to see from the top, and how the tower will look against the Brighton skyline. As part of an ongoing promotional campaign, the website has helped tip the balance in favour of the project, with a real sense of anticipation building in the city for launch in 2016.</p>
                    </div>
                </div>
            </div>
            <div class="group group--right">
                <div class="module module--1-1">
	                <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/web_i360/web_i360_03_ss.jpg')"></div>
                </div>
                <div class="module module--1-1">
	                <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/web_i360/web_i360_04_ss.jpg')"></div>
                </div>
            </div> <!-- /end group -->
        </div> <!-- /end group-container -->
    </section>
</div> <!-- /end container -->

<div class="container container--no-padding">
    <div class="module module--2-1">
	    <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/web_i360/web_i360_05_hz.jpg')"></div>
    </div>
</div>

<div class="group-container">
    <a class="project-navigation" href="../icap">< Previous Project</a>
    <a class="project-navigation" href="../discover-bp">Next Project ></a>
</div>

</div>

<?php get_footer(); ?>
