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

get_header('interactive'); ?>

<div class="container container--carousel">
    <section class="carousel">
        <img class="carousel-monitor centre-image" src="<?php echo get_template_directory_uri(); ?>/images/monitor.png" alt="">
        <div class="carousel-images">
            <div id="carousel-image-1"class="carousel-image"></div>
            <div id="carousel-image-2"class="carousel-image"></div>
            <div id="carousel-image-3"class="carousel-image"></div>
            <div id="carousel-image-4"class="carousel-image"></div>
        </div> <!-- /end carousel-images -->
        <div class="carousel-controls">
            <div id="carousel-control-1" class="carousel-control selected"></div>
            <div id="carousel-control-2" class="carousel-control"></div>
            <div id="carousel-control-3" class="carousel-control"></div>
            <div id="carousel-control-4" class="carousel-control"></div>
        </div> <!-- /end carousel-controls -->
    </section>
</div>

<div class="container container--carousel">
    <section class="carousel">
        <img class="carousel-monitor centre-image" src="<?php echo get_template_directory_uri(); ?>/images/monitor.png" alt="">
        <div class="carousel-images">
            <div id="carousel-image-1"class="carousel-image"></div>
            <div id="carousel-image-2"class="carousel-image"></div>
            <div id="carousel-image-3"class="carousel-image"></div>
            <div id="carousel-image-4"class="carousel-image"></div>
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
                <div class="module module--2-1 area-dark">
                    <div class="module__text">
                        <h2 class="underlined">The Process</h2>
                        <p class="first-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum quos quod optio, delectus eaque temporibus, at ab placeat incidunt ad esse veritatis est, minima quidem animi omnis natus numquam illum. Repellat aliquid, natus amet quo. Quisquam voluptates magnam aspernatur itaque molestiae error debitis delectus sunt, est non pariatur assumenda accusantium vel maxime optio placeat sint enim explicabo voluptate asperiores natus.</p>
                    </div>
                </div>
                <div class="module module--2-1"></div>
            </div>
            <div class="group group--right">
                <div class="module module--2-2"></div>
            </div> <!-- /end group -->
        </div> <!-- /end group-container -->
    </section>
</div> <!-- /end container -->

<div class="container container--no-padding">
    <section>
        <div class="group-container">
            <div class="group group--left">
                <div class="module module--2-1 area-dark">
                    <div class="module__text">
                        <h2 class="underlined">The Process</h2>
                        <p class="first-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum quos quod optio, delectus eaque temporibus, at ab placeat incidunt ad esse veritatis est, minima quidem animi omnis natus numquam illum. Repellat aliquid, natus amet quo. Quisquam voluptates magnam aspernatur itaque molestiae error debitis delectus sunt, est non pariatur assumenda accusantium vel maxime optio placeat sint enim explicabo voluptate asperiores natus.</p>
                    </div>
                </div>
            </div>
            <div class="group group--right">
                <div class="module module--1-1"></div>
                <div class="module module--1-1"></div>
            </div> <!-- /end group -->
        </div> <!-- /end group-container -->
    </section>
</div> <!-- /end container -->
<!-- TODO: Add the fear-o-meter thang -->


<div class="group-container">
    <a class="project-navigation" href="">< Previous Project</a>
    <a class="project-navigation" href="">Next Project ></a>
</div>

</div>

<?php get_footer(); ?>
