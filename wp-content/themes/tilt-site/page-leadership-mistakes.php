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
    <video id="overlay-video" controls class="video-js vjs-default-skin vertical-align" poster="<?php echo get_template_directory_uri(); ?>/images/work/mo_leadership/poster.jpg" width="100%" height="auto">
        <source src="https://player.vimeo.com/external/129132162.hd.mp4?s=b321063322e2949a1a5fd2ff900f21663cd265f4&profile_id=113" type="video/mp4">
    </video>
    <div id="video-overlay-close"></div>
</div>
<header id="page_gfk" class="work-item work-item--motion area-dark">
    <div class="module--video module--header">
        <div id="header-play" class="header-play">

        </div>
        <div class="ratio">
            <video id="header-video-player" class="video-js vjs-default-skin" autoplay loop width="100%" height="100%" poster="<?php echo get_template_directory_uri(); ?>/images/work/mo_leadership/poster.jpg">
                    <source id="header-video" src="https://player.vimeo.com/external/164256445.hd.mp4?s=f141fb096147d76282bf00a36a29a1f83cd9a84c&profile_id=119" type="video/mp4">
            </video>
        </div>
    </div>
    <div class="container container--header">
        <div class="header-title">
            <p class="tag tag--work-body">Motion</p>
            <h1>BP<br />
                <span class="light underlined">Leadership Mistakes</span>
            </h1>
            <h2 class="light services">Strategy | Motion | 3D</h2>
        </div>
        <div class="header-text">
            <div class="header-text__module header-text__module--padding">
                <h2>The Brief</h2>
                <p class="first-para tag--work-title">How do you help leaders in BP to avoid making the same leadership mistakes as their predecessors.</p>
            </div>
            <div class="header-text__module header-text__module--padding">
                <h2>The Big Idea</h2>
                <p class="first-para tag--work-title">Create short, humorous 3D motion graphics that summarise the eight most common leadership mistakes in 20 seconds or less.</p>
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
                        <p class="first-para tag--work-title">Taking inspiration from Rube Goldberg, we created a concept that visualised the top 8 most common leadership mistakes made by leaders within their first few months of a new role. The films were designed to work either as a continuous movie or as separate pieces with supporting advice and guidance.</p>
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
                        <p>We married the content with humour and kept the sequences short & snappy to ensure we captured & held our audiences attention. The films were created in 3D to help bring to life the metaphors used to visualise each mistake.</p>
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



<div class="group-container">
    <a class="project-navigation paginate_prev" href="../legacy"><span>&#8249;</span> Previous Project</a>
    <a class="project-navigation paginate_next" href="../barclays-integrity">Next Project <span>&#8250;</span></a>
</div>

</div>

<?php get_footer(); ?>
