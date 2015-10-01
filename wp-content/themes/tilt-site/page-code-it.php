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

<header id="codeit" class="work-item area-dark">
    <div class="monitor-holder">
        <img class="monitor centre-image" src="<?php echo get_template_directory_uri(); ?>/images/monitor.png" alt="">
        <div class="monitor-screen">
            <img src="<?php echo get_template_directory_uri(); ?>/images/work/int_codeit/int_ci_imacsmall.jpg" alt="" style="width: 100%; height: 100%;">
        </div>
    </div>
    <div class="container container--header">
        <div class="header-title">
            <p class="tag">Interactive: Case Study</p>
            <h1>Nickelodeon<br />
                <span class="light underlined">Code-it</span>
            </h1>
            <h2 class="light">UX | Visual Design | Development | Motion</h2>
        </div>
    </div>
</header>

<div class="container">
    <div class="monitor-holder">
        <img class="monitor centre-image" src="<?php echo get_template_directory_uri(); ?>/images/monitor.png" alt="">
        <div class="monitor-screen"></div>
    </div>
    <section class="text-section">
        <h2>Overview</h2>
        <div class="text-section__para">
            <p class="first-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi a voluptatem maiores velit voluptate, asperiores vitae, quisquam ratione non laborum temporibus rem minima dolor, adipisci repudiandae aut numquam earum dignissimos? Iste a commodi enim voluptates, fuga amet omnis laborum saepe praesentium veniam asperiores quibusdam, magnam nesciunt reprehenderit ipsum totam aspernatur! Consequatur autem excepturi perferendis incidunt dolor culpa quod. Omnis, quos!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi qui, praesentium aliquam, possimus rem, vitae consequatur et dignissimos quibusdam quas dolores modi suscipit minus quis cumque! Distinctio totam molestiae porro! Deserunt ipsam voluptatibus esse qui quod praesentium iusto eveniet, culpa! Suscipit incidunt fugit illum, quaerat atque rerum, numquam illo quis, tenetur hic assumenda praesentium ad. Magni vero consequuntur eos nesciunt!</p>
        </div>
    </section> <!-- /end text-section -->
</div> <!-- /end container -->

<div class="container container--no-padding">
    <section>
        <div class="group-container">
            <div class="group group--left">
                <div class="module module--2-2">
	                <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/int_codeit/int_ci_01_ls.jpg')"></div>
                </div>
            </div>
            <div class="group group--right">
                <div class="module module--2-1">
	                <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/int_codeit/int_ci_02_mr.jpg')"></div>
                </div>
                <div class="module module--1-1">
	                <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/int_codeit/int_ci_03_ss.jpg')"></div>
                </div>
                <div class="module module--1-1">
	                <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/int_codeit/int_ci_04_ss.jpg')"></div>
                </div>
            </div> <!-- /end group -->
        </div> <!-- /end group-container -->
    </section>
</div> <!-- /end container -->

<div class="container container--carousel" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/int_codeit/gallery/int_ci_gallery_background.jpg')">
    <section class="carousel">
        <img class="carousel-monitor centre-image" src="<?php echo get_template_directory_uri(); ?>/images/monitor.png" alt="">
        <div class="carousel-images">
            <div id="carousel-image-1" class="carousel-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/int_codeit/Gallery/int_ci_gallery_01_ipad.jpg')"></div>
            <div id="carousel-image-2" class="carousel-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/int_codeit/Gallery/int_ci_gallery_02_ipad.jpg')"></div>
            <div id="carousel-image-3" class="carousel-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/int_codeit/Gallery/int_ci_gallery_03_ipad.jpg')"></div>
            <div id="carousel-image-4" class="carousel-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/int_codeit/Gallery/int_ci_gallery_04_ipad.jpg')"></div>
        </div> <!-- /end carousel-images -->
        <div class="carousel-controls">
            <div id="carousel-control-1" class="carousel-control selected"></div>
            <div id="carousel-control-2" class="carousel-control"></div>
            <div id="carousel-control-3" class="carousel-control"></div>
            <div id="carousel-control-4" class="carousel-control"></div>
        </div> <!-- /end carousel-controls -->
    </section>
</div> <!-- /end container--carousel -->

<div class="container area-dark">
    <section class="text-section">
        <h2>Welcome to Tilt</h2>
        <div class="text-section__para">
            <p class="first-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi a voluptatem maiores velit voluptate, asperiores vitae, quisquam ratione non laborum temporibus rem minima dolor, adipisci repudiandae aut numquam earum dignissimos? Iste a commodi enim voluptates, fuga amet omnis laborum saepe praesentium veniam asperiores quibusdam, magnam nesciunt reprehenderit ipsum totam aspernatur! Consequatur autem excepturi perferendis incidunt dolor culpa quod. Omnis, quos!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi qui, praesentium aliquam, possimus rem, vitae consequatur et dignissimos quibusdam quas dolores modi suscipit minus quis cumque! Distinctio totam molestiae porro! Deserunt ipsam voluptatibus esse qui quod praesentium iusto eveniet, culpa! Suscipit incidunt fugit illum, quaerat atque rerum, numquam illo quis, tenetur hic assumenda praesentium ad. Magni vero consequuntur eos nesciunt!</p>
        </div>
    </section>
</div>


<div class="container container--no-padding">
    <section>
        <div class="group-container">
            <div class="group group--left">
                <div class="module module--2-1">
	                <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/int_codeit/int_ci_05_mr.jpg')"></div>
                </div>
                <div class="module module--1-1">
	                <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/int_codeit/int_ci_06_ss.jpg')"></div>
                </div>
                <div class="module module--1-1">
	                <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/int_codeit/int_ci_07_ss.jpg')"></div>
                </div>
            </div>
            <div class="group group--right">
                <div class="module module--2-2">
                	<div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/int_codeit/int_ci_08_ls.jpg')"></div>
				</div>
            </div> <!-- /end group -->
        </div> <!-- /end group-container -->
    </section>
</div> <!-- /end container -->

<div class="container area-dark">
    <section class="text-section">
        <h2>Branding</h2>
        <div class="text-section__para">
            <p class="first-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi a voluptatem maiores velit voluptate, asperiores vitae, quisquam ratione non laborum temporibus rem minima dolor, adipisci repudiandae aut numquam earum dignissimos? Iste a commodi enim voluptates, fuga amet omnis laborum saepe praesentium veniam asperiores quibusdam, magnam nesciunt reprehenderit ipsum totam aspernatur! Consequatur autem excepturi perferendis incidunt dolor culpa quod. Omnis, quos!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi qui, praesentium aliquam, possimus rem, vitae consequatur et dignissimos quibusdam quas dolores modi suscipit minus quis cumque! Distinctio totam molestiae porro! Deserunt ipsam voluptatibus esse qui quod praesentium iusto eveniet, culpa! Suscipit incidunt fugit illum, quaerat atque rerum, numquam illo quis, tenetur hic assumenda praesentium ad. Magni vero consequuntur eos nesciunt!</p>
        </div>
    </section>
</div>

<div class="container container--no-padding">
    <section>
        <div class="group-container">
            <div class="group group--left">
                <div class="module module--2-2">
	                <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/int_codeit/int_ci_09_ls.jpg')"></div>
                </div>
            </div>
            <div class="group group--right">
                <div class="module module--2-2">
	                <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/int_codeit/int_ci_10_ls.jpg')"></div>
                </div>
            </div> <!-- /end group -->
        </div> <!-- /end group-container -->
    </section>
</div> <!-- /end container -->

<div class="container area-dark">
    <section class="text-section">
        <h2>Intuitive User Experience</h2>
        <div class="text-section__para">
            <p class="first-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi a voluptatem maiores velit voluptate, asperiores vitae, quisquam ratione non laborum temporibus rem minima dolor, adipisci repudiandae aut numquam earum dignissimos? Iste a commodi enim voluptates, fuga amet omnis laborum saepe praesentium veniam asperiores quibusdam, magnam nesciunt reprehenderit ipsum totam aspernatur! Consequatur autem excepturi perferendis incidunt dolor culpa quod. Omnis, quos!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi qui, praesentium aliquam, possimus rem, vitae consequatur et dignissimos quibusdam quas dolores modi suscipit minus quis cumque! Distinctio totam molestiae porro! Deserunt ipsam voluptatibus esse qui quod praesentium iusto eveniet, culpa! Suscipit incidunt fugit illum, quaerat atque rerum, numquam illo quis, tenetur hic assumenda praesentium ad. Magni vero consequuntur eos nesciunt!</p>
        </div>
    </section>
</div>

<div class="container container--no-padding">
    <section>
        <div class="group-container">
            <div class="group group--left">
                <div class="module module--2-2">
	                <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/int_codeit/int_ci_11_ls.jpg')"></div>
                </div>
            </div>
            <div class="group group--right">
                <div class="module module--2-2">
	                <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/int_codeit/int_ci_12_ls.jpg')"></div>
                </div>
            </div> <!-- /end group -->
        </div> <!-- /end group-container -->
    </section>
</div> <!-- /end container -->

<div class="container">
    <section class="text-section">
        <h2>Advanced HTML 5</h2>
        <div class="text-section__para">
            <p class="first-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi a voluptatem maiores velit voluptate, asperiores vitae, quisquam ratione non laborum temporibus rem minima dolor, adipisci repudiandae aut numquam earum dignissimos? Iste a commodi enim voluptates, fuga amet omnis laborum saepe praesentium veniam asperiores quibusdam, magnam nesciunt reprehenderit ipsum totam aspernatur! Consequatur autem excepturi perferendis incidunt dolor culpa quod. Omnis, quos!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi qui, praesentium aliquam, possimus rem, vitae consequatur et dignissimos quibusdam quas dolores modi suscipit minus quis cumque! Distinctio totam molestiae porro! Deserunt ipsam voluptatibus esse qui quod praesentium iusto eveniet, culpa! Suscipit incidunt fugit illum, quaerat atque rerum, numquam illo quis, tenetur hic assumenda praesentium ad. Magni vero consequuntur eos nesciunt!</p>
        </div>
    </section>
</div>

<div class="container container--no-padding">
    <div class="module module--2-1">
	    <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/int_codeit/int_ci_13_hz.jpg')"></div>
    </div>
</div>

<div class="container area-dark">
    <section class="text-section">
        <h2>Feedback from Nickelodeon</h2>
        <div class="text-section__para">
            <p class="first-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi a voluptatem maiores velit voluptate, asperiores vitae, quisquam ratione non laborum temporibus rem minima dolor, adipisci repudiandae aut numquam earum dignissimos? Iste a commodi enim voluptates, fuga amet omnis laborum saepe praesentium veniam asperiores quibusdam, magnam nesciunt reprehenderit ipsum totam aspernatur! Consequatur autem excepturi perferendis incidunt dolor culpa quod. Omnis, quos!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi qui, praesentium aliquam, possimus rem, vitae consequatur et dignissimos quibusdam quas dolores modi suscipit minus quis cumque! Distinctio totam molestiae porro! Deserunt ipsam voluptatibus esse qui quod praesentium iusto eveniet, culpa! Suscipit incidunt fugit illum, quaerat atque rerum, numquam illo quis, tenetur hic assumenda praesentium ad. Magni vero consequuntur eos nesciunt!</p>
        </div>
    </section>
</div>

<div class="group-container">
    <a class="project-navigation" href="../alzheimers">< Previous Project</a>
    <a class="project-navigation" href="../sainsburys">Next Project ></a>
</div>

</div>

<?php get_footer(); ?>
