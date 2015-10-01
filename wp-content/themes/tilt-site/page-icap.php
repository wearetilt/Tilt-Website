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
    <div class="monitor-holder">
        <img class="monitor centre-image" src="<?php echo get_template_directory_uri(); ?>/images/monitor.png" alt="">
        <div class="monitor-screen">
            <img src="<?php echo get_template_directory_uri(); ?>/images/work/web_icap/web_icap_imacsmall.jpg" alt="" style="width: 100%; height: 100%;">
        </div>
    </div>
    <div class="container container--header">
        <div class="header-title">
            <p class="tag">Interactive</p>
            <h1>ICAP<br />
                <span class="light underlined">Graduate Portal</span>
            </h1>
            <h2 class="light">UX | VISUAL DESIGN | DEVELOPMENT</h2>
        </div>
        <div class="header-text">
            <div class="header-text__module header-text__module--padded">
                <h2>The brief</h2>
                <p class="first-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis nostrum, recusandae nobis nulla sapiente repellendus quia odio! Quibusdam veritatis placeat qui omnis doloremque rem veniam itaque tenetur inventore, amet, voluptates.</p>
            </div>
            <div class="header-text__module">
                <h2>The solution</h2>
                <p class="first-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi hic reiciendis perspiciatis voluptate numquam, laboriosam, incidunt accusantium quae, officia, doloremque eius? Vero deleniti soluta, totam nam ea quo recusandae cupiditate.</p>
            </div>
        </div>
    </div>
</header>

<div id="iCap-carousel" class="container container--carousel" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/web_icap/Gallery/web_icap_gallery_background.jpg')">
    <section class="carousel">
        <img class="carousel-monitor centre-image" src="<?php echo get_template_directory_uri(); ?>/images/monitor.png" alt="">
        <div class="carousel-images">
            <div id="carousel-image-1" class="carousel-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/web_icap/Gallery/web_icap_gallery_01_imacsmall.jpg')"></div>
            <div id="carousel-image-2" class="carousel-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/web_icap/Gallery/web_icap_gallery_02_imacsmall.jpg')"></div>
            <div id="carousel-image-3" class="carousel-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/web_icap/Gallery/web_icap_gallery_03_imacsmall.jpg')"></div>
            <div id="carousel-image-4" class="carousel-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/web_icap/Gallery/web_icap_gallery_04_imacsmall.jpg')"></div>
        </div> <!-- /end carousel-images -->
        <div class="carousel-controls">
            <div id="carousel-control-1" class="carousel-control selected"></div>
            <div id="carousel-control-2" class="carousel-control"></div>
            <div id="carousel-control-3" class="carousel-control"></div>
            <div id="carousel-control-4" class="carousel-control"></div>
        </div> <!-- /end carousel-controls -->
    </section>
</div>

<div class="container">
        <div class="mobile-holder">
            <img class="mobile-phone" src="<?php echo get_template_directory_uri();?>/images/mobile-phone.png" alt="">
            <div class="mobile-screen">
                <img src="<?php echo get_template_directory_uri(); ?>/images/work/web_icap/iphone/web_icap_01_iphone.jpg" alt="">
            </div>
        </div>
        <div class="mobile-holder">
            <img class="mobile-phone" src="<?php echo get_template_directory_uri();?>/images/mobile-phone.png" alt="">
            <div class="mobile-screen">
                <img src="<?php echo get_template_directory_uri(); ?>/images/work/web_icap/iphone/web_icap_02_iphone.jpg" alt="">
            </div>
        </div>
        <div class="mobile-holder">
            <img class="mobile-phone" src="<?php echo get_template_directory_uri();?>/images/mobile-phone.png" alt="">
            <div class="mobile-screen">
                <img src="<?php echo get_template_directory_uri(); ?>/images/work/web_icap/iphone/web_icap_03_iphone.jpg" alt="">
            </div>
        </div>
</div> <!-- /end container -->

<div class="container container--no-padding module-dark">
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
	                <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/web_icap/web_icap_01_mr.jpg')"></div>
                </div>
            </div>
            <div class="group group--right">
                <div class="module module--2-2">
	                <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/web_icap/web_icap_02_ls.jpg')"></div>
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
                        <h2 class="underlined">The Process</h2>
                        <p class="first-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum quos quod optio, delectus eaque temporibus, at ab placeat incidunt ad esse veritatis est, minima quidem animi omnis natus numquam illum. Repellat aliquid, natus amet quo. Quisquam voluptates magnam aspernatur itaque molestiae error debitis delectus sunt, est non pariatur assumenda accusantium vel maxime optio placeat sint enim explicabo voluptate asperiores natus.</p>
                    </div>
                </div>
            </div>
            <div class="group group--right">
                <div class="module module--1-1">
	                <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/web_icap/web_icap_03_ss.jpg')"></div>
                </div>
                <div class="module module--1-1">
	                <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/web_icap/web_icap_04_ss.jpg')"></div>
                </div>
            </div> <!-- /end group -->
        </div> <!-- /end group-container -->
    </section>
</div> <!-- /end container -->

<div class="container container--no-padding">
    <div class="module module--2-1">
	    <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/web_icap/web_icap_05_hz.jpg')"></div>
    </div>
</div>

<div class="group-container">
    <a class="project-navigation" href="../bp-fll">< Previous Project</a>
    <a class="project-navigation" href="../i360">Next Project ></a>
</div>

</div>

<?php get_footer(); ?>
