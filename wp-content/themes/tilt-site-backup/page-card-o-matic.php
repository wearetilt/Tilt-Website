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

<header id="nickjr" class="work-item area-dark">
    <div class="monitor-wrapper">
        <div class="monitor-holder">
            <a href="http://www.nickjr.co.uk/_/cardomatic/" target="_blank">
                <div class="overlay area-dark">
                    <img class="vertical-align centre-image" src="<?php echo get_template_directory_uri(); ?>/images/link_button.png" alt="">
                </div>
            </a>
            <img class="monitor centre-image" src="<?php echo get_template_directory_uri(); ?>/images/monitor.png" alt="">
            <div class="monitor-screen">
                <img src="<?php echo get_template_directory_uri(); ?>/images/work/int_card/start.jpg" alt="" style="width: 100%; height: 100%;">
            </div>
        </div>
    </div>
    <div class="container container--header">
        <div class="header-title no--shadow">
        
            <p class="tag tag--work-body">Interactive</p>
            <h1>Nick Jr<br />
                <span class="light underlined">Card-o-Matic</span>
            </h1>
            <h2 class="light services">Design | Dev | Interactive | Animation</h2>
        </div>
        <div class="header-text">
            <div class="header-text__module header-text__module--padded">
                <h2>The Brief</h2>
                <p class="first-para tag--work-title">How do you bring the sense of fun that goes hand in hand with the Nick Jr brand to a greeting's card creator. </p>
            </div>
            <div class="header-text__module">
                <h2>The Big Idea</h2>
                <p class="first-para tag--work-title">Create a fun 'card factory' that captures kids imagination and takes them on a journey of discovery each and every time.</p>
            </div>
        </div>
    </div>
</header>

<div class="container container--carousel" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/int_card/gallery_bg.jpg')">
    <section class="carousel">
        <img class="carousel-monitor centre-image" src="<?php echo get_template_directory_uri(); ?>/images/monitor.png" alt="">
        <div class="carousel-images">
            <div id="carousel-image-1"class="carousel-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/int_card/gallery/selectcard.jpg')"></div>
            <div id="carousel-image-2"class="carousel-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/int_card/gallery/selecttye.jpg')"></div>
            <div id="carousel-image-3"class="carousel-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/int_card/gallery/selectcharacter.jpg')"></div>
            <div id="carousel-image-4"class="carousel-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/int_card/gallery/create_seasonal_tab.jpg')"></div>
        </div> <!-- /end carousel-images -->
        <div class="carousel-controls carousel-controls--imac">
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
                <div class="module module--2-1 module--text-pad area-dark module--dark">
                    <div class="module__text">
                        <h2 class="underlined">What we did</h2>
                        <p class="first-para tag--work-title">We created the Card-o-matic, a Dr Seuss- inspired card making machine. Children and parents could create personalised cards using a choice of assets and various art options. They could also add their own photos and messages. Using HTML5 to build the experience, we ensured that it was a truly multi-platform experience.</p>
                    </div>
                </div>
                <div class="module module--2-1">
	                <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/int_card/card_wide.jpg')"></div>
                </div>
            </div>
            <div class="group group--right">
                <div class="module module--2-2">
	                <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/int_card/card_sq_lg.jpg')"></div>
                </div>
            </div> <!-- /end group -->
        </div> <!-- /end group-container -->
    </section>
</div> <!-- /end container -->

<div class="container container--no-padding">
    <section>
        <div class="group-container">
            <div class="group group--left">
                <div class="module module--2-1 module--text-pad area-dark module--dark">
                    <div class="module__text">
                        <p>What set this project apart from other apps was the animated machine which crunched, gurgled and burped it way through the card making process. Our fun animation helped to inspire our audience and old their a ention. The client was so pleased with the result they produced a TV campaign to accompany the launch of the app.</p>
                    </div>
                </div>
            </div>
            <div class="group group--right">
                <div class="module module--1-1">
	                <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/int_card/card_sq_sm_1.jpg')"></div>
                </div>
                <div class="module module--1-1">
	                <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/int_card/card_sq_sm_2.jpg')"></div>
                </div>
            </div> <!-- /end group -->
        </div> <!-- /end group-container -->
    </section>
</div> <!-- /end container -->

<div class="container container--no-padding">
    <section>
        <div class="group-container">
            <div class="group group--left">
                <div class="module module--16-9 module--video module--nozoom">
                    <div class="ratio">
                    	<video poster="<?php echo get_template_directory_uri(); ?>/images/work/int_card/anim_one_poster_image.jpg" class="video-js vjs-default-skin page-video" controls width="100%" height="100%">
                        	<source src="https://player.vimeo.com/external/163399442.sd.mp4?s=e7d09cc371e32ca2a0282608e4a19f80220a9fe8&profile_id=165" type="video/mp4">
                        </video>
                    </div>
                </div>

            </div>
            <div class="group group--right">
                <div class="module module--16-9 module--video module--nozoom">
                    <div class="ratio">
                    	<video poster="<?php echo get_template_directory_uri(); ?>/images/work/int_card/anim_two_poster_image.jpg" class="video-js vjs-default-skin page-video" controls width="100%" height="100%">
                        	<source src="https://player.vimeo.com/external/163399443.sd.mp4?s=f24b857f42fbd3d41884052ac473f5f829e2f618&profile_id=165" type="video/mp4">
                        </video>
                    </div>
                </div>

            </div> <!-- /end group -->
        </div> <!-- /end group-container -->
    </section>
</div>

<div class="container container--no-padding">
    <div class="module module--2-1">
	    <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/int_card/card_rectangle_lg.jpg')"></div>
    </div>
</div>

<div class="container container--no-padding image-container">
	<img class="full-size" src="<?php echo get_template_directory_uri(); ?>/images/work/int_card/card_icons.jpg" alt="Card-o-Matic" />
</div>

<div class="container quote-container area-dark">
    <section class="text-section">
            <blockquote>“We LOVE Card-O-Matic, you guys have thought about everything. Very thorough easy to work with agency, looking forward to working with you again soon.”</blockquote>
            <p class="sans-serif quote-attribute"><strong class="highlight">Suzie Adams,</strong> Digital Director</p>
    </section>
</div>

<div class="group-container">
    <a class="project-navigation paginate_prev" href="../pbs"><span>&#8249;</span> Previous Project</a>
    <a class="project-navigation paginate_next" href="../code-it">Next Project <span>&#8250;</span></a>
</div>

</div>

<!-- TODO: ADD BIG ASS VIDEO -->

<?php get_footer(); ?>
