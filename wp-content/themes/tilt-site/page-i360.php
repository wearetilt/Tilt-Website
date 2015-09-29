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
                <span class="light underlined">Website design and development</span>
            </h1>
            <h2 class="light">Design | Development</h2>
        </div>
        <div class="header-text">
            <div class="header-text__module header-text__module--padded">
                <h2>The challenge</h2>
                <p class="first-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="header-text__module">
                <h2>The Big Idea</h2>
                <p class="first-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
    </div>
</header>

<div class="container container--carousel">
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


<div class="container container--no-padding">
    <section>
        <div class="group-container">
            <div class="group group--left">
                <div class="module module--2-1 module--dark">
                    <div class="module__text">
                        <h2 class="underlined">The Process</h2>
                        <p class="first-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum quos quod optio, delectus eaque temporibus, at ab placeat incidunt ad esse veritatis est, minima quidem animi omnis natus numquam illum. Repellat aliquid, natus amet quo. Quisquam voluptates magnam aspernatur itaque molestiae error debitis delectus sunt, est non pariatur assumenda accusantium vel maxime optio placeat sint enim explicabo voluptate asperiores natus.</p>
                    </div>
                </div>
                <div class="module module--2-1">
	                <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/web_i360/web_i360_01_mr.jpg')"></div>
                </div>
            </div>
            <div class="group group--right">
                <div class="module module--2-2">
	                <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/web_i360/web_i360_02_ls.jpg')"></div>
                </div>
            </div> <!-- /end group -->
        </div> <!-- /end group-container -->
    </section>
</div> <!-- /end container -->

<div class="container container--no-padding ">
    <section>
        <div class="group-container">
            <div class="group group--left">
                <div class="module module--2-1 module--dark">
                    <div class="module__text">
                        <p class="first-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum quos quod optio, delectus eaque temporibus, at ab placeat incidunt ad esse veritatis est, minima quidem animi omnis natus numquam illum. Repellat aliquid, natus amet quo. Quisquam voluptates magnam aspernatur itaque molestiae error debitis delectus sunt, est non pariatur assumenda accusantium vel maxime optio placeat sint enim explicabo voluptate asperiores natus.</p>
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
    <a class="project-navigation" href="">< Previous Project</a>
    <a class="project-navigation" href="">Next Project ></a>
</div>

</div>

<?php get_footer(); ?>
