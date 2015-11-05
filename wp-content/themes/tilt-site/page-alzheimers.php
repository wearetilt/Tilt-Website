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

<header id="alzheimers" class="work-item area-dark">
    <div class="monitor-wrapper">
        <div class="monitor-holder">
            <a href="http://www.dementialab.org/" target="_blank">
                <div class="overlay area-dark">
                    <img class="vertical-align centre-image" src="<?php echo get_template_directory_uri(); ?>/images/link_button.png" alt="">
                </div>
            </a>
            <img class="monitor centre-image" src="<?php echo get_template_directory_uri(); ?>/images/monitor.png" alt="">
            <div class="monitor-screen">
                <img src="<?php echo get_template_directory_uri(); ?>/images/work/int_alz/int_alz_imacsmall.jpg" alt="" style="width: 100%; height: 100%;">
            </div>
        </div>
    </div>
    <div class="container container--header">
        <div class="header-title no--shadow">
        
        	<img class="awards" src="<?php echo get_template_directory_uri(); ?>/images/work/int_alz/alz_awards.png" alt="Awwards" />
        
            <p class="tag tag--work-body">Interactive</p>
            <h1>Alzheimer's<br />
                <span class="light underlined">The Lab</span>
            </h1>
            <h2 class="light services">Strategy | UX | Design | Dev | Motion | 3D</h2>
        </div>
        <div class="header-text">
            <div class="header-text__module header-text__module--padded">
                <h2>The Brief</h2>
                <p class="first-para tag--work-title">How can you move people to really understand Alzheimer’s Disease, see the life-saving importance of drug development, and motivate them to donate?</p>
            </div>
            <div class="header-text__module">
                <h2>The Big Idea</h2>
                <p class="first-para tag--work-title">Bring a dementia research lab to life. Help people understand through interaction. Pack an emotional punch by personalising the experience.</p>
            </div>
        </div>
    </div>
</header>

<div class="container container--carousel" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/int_alz/gallery/int_alz_gallery_background.jpg')">
    <section class="carousel">
        <img class="carousel-monitor centre-image" src="<?php echo get_template_directory_uri(); ?>/images/monitor.png" alt="">
        <div class="carousel-images">
            <div id="carousel-image-1"class="carousel-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/int_alz/gallery/int_alz_gallery_01_imacsmall.jpg')"></div>
            <div id="carousel-image-2"class="carousel-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/int_alz/gallery/int_alz_gallery_02_imacsmall.jpg')"></div>
            <div id="carousel-image-3"class="carousel-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/int_alz/gallery/int_alz_gallery_03_imacsmall.jpg')"></div>
            <div id="carousel-image-4"class="carousel-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/int_alz/gallery/int_alz_gallery_04_imacsmall.jpg')"></div>
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
                        <p class="first-para tag--work-title">We developed the Lab, an experiential site that takes users on a journey through the drug development process. The Lab opens with an emotive question: “What if you couldn’t remember your family and friends?”. The challenge then was how to create informative and interactive content that was bold enough to get people talking and practical enough to drive donations.</p>
                    </div>
                </div>
                <div class="module module--2-1">
	                <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/int_alz/int_alz_01_mr.jpg')"></div>
                </div>
            </div>
            <div class="group group--right">
                <div class="module module--2-2">
	                <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/int_alz/int_alz_02_ls.jpg')"></div>
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
                        <p>If logged in through Facebook, users can see a photo album filled with pictures of their own friends. This reminds people of the devastating effects of Alzheimer’s and reinforces the need to invest in research.</p>
                        <p>The piece ends with a call to action to donate. The Lab gained national press coverage and won the Association of Medical Research Charities’ <a class="pink" href="http://www.amrc.org.uk/our-work/science-communication-awards" target="_blank">Science Communication Award</a>.</p>
                    </div>
                </div>
            </div>
            <div class="group group--right">
                <div class="module module--1-1">
	                <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/int_alz/int_alz_03_ss.jpg')"></div>
                </div>
                <div class="module module--1-1">
	                <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/int_alz/int_alz_04_ss.jpg')"></div>
                </div>
            </div> <!-- /end group -->
        </div> <!-- /end group-container -->
    </section>
</div> <!-- /end container -->

<div class="container container--no-padding">
    <div class="group-container">
        <div class="module module--16-9 module--video module--nozoom">
            <div class="ratio">
                <video controls class="video-js vjs-default-skin page-video" poster="<?php echo get_template_directory_uri(); ?>/images/work/int_alz/alz_poster_image.jpg" width="100%" height="100%" >
                        <source src="https://player.vimeo.com/external/141651535.hd.mp4?s=901b115cf38db8ba32e762e7c227e7a3&profile_id=113" type="video/mp4">
                </video>
            </div>
        </div>
    </div>
</div>

<div class="container quote-container area-dark">
    <section class="text-section">
            <blockquote>“Tilt created a sleek and engaging website, which really brought our ideas to life. Their creative thinking presented us with ideas and functionality beyond our expectations that worked superbly in making the Lab a captivating and interactive experience for visitors.”</blockquote>
            <p class="sans-serif quote-attribute"><strong class="highlight">Laura Phipps,</strong> Science Communications Manager</p>
    </section>
</div>

<div class="group-container">
    <a class="project-navigation paginate_prev" href="../pbs">Previous Project</a>
    <a class="project-navigation paginate_next" href="../code-it">Next Project</a>
</div>

</div>

<!-- TODO: ADD BIG ASS VIDEO -->

<?php get_footer(); ?>
