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

<header class="work-item work-item--motion area-dark">
    <div class="module--video module--header">
        <div id="header-play" class="header-play">

        </div>
        <div class="ratio">
            <video id="header-video-player" class="video-js vjs-default-skin" autoplay loop muted width="100%" height="100%" >
                    <source id="header-video" src="<?php echo get_template_directory_uri(); ?>/video/Discover_10_Cut_1.mp4" type="video/mp4">
            </video>
        </div>
    </div>
    <div class="container container--header">
        <div class="header-title">
            <p class="tag tag--no-italic">Film</p>
            <h1>South Downs National Park<br />
                <span class="light underlined">Discover Another Way</span>
            </h1>
            <h2 class="light">CS | Film | 3D</h2>
        </div>
        <div class="header-text">
            <div class="header-text__module header-text__module--padding">
                <h2>The Challenge</h2>
                <p class="first-para">How can you encourage people to take public transport to the beautiful South Downs National Park, and even make them excited to do so? </p>
            </div>
            <div class="header-text__module header-text__module--padding">
                <h2>The solution</h2>
                <p class="first-para">Merge film and motion graphics to create a magical experience that brings an entire journey to the South Downs to life through the eyes of a child. </p>
            </div>
        </div>
    </div>
</header>

<div class="container container--half-top">
    <div class="group-container">
        <div class="group group--left">
            <div class="module module--2-2">
                <div class="overlay area-dark">
                    <div class="overlay-text">
                        <p class="tag">Motion: Case Study</p>
                        <h2>Barclays <br />
                            <span class="light underlined">Integrity</span>
                        </h2>
                        <p class="sans-serif">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure culpa qui deserunt, esse impedit unde ex.</p>
                    </div> <!-- /end overlay-text -->
                </div> <!-- /end overlay -->
                <div class="ratio" style="background-image: url('images/video-placeholder.jpg')">
                </div>
            </div>
        </div> <!-- /end group -->
        <div class="group group--right">
            <div class="module module--1-1"></div>
            <div  class="module module--1-1"></div>
            <div class="module module--2-1"></div>
        </div> <!-- /end group -->
    </div> <!-- /end group-container -->
</div>

<div class="container container--no-padding">
    <section>
        <div class="group-container">
            <div class="group group--left">
                <div class="module module--2-1 area-dark">
                    <div class="module__text">
                        <h2 class="underlined">What we did</h2>
                        <p class="first-para">We developed a mixed media film that follows the journey into the South Downs from the wide-eyed perspective of a child. In addition to 3D animation elements we used RED Epic cameras to add big-screen production values, a drone-mounted camera to deliver a dramatic aerial shot of the South Downs, and original music to create a wistful mood. </p>
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
                        <p>The client was delighted with the film and we have since been commissioned to produce other projects for South Downs National Park. The film has been viewed more than 25,000 times since launch – far exceeding expectations. </p>
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

<div class="container container--no-padding">
    <section>
        <div class="group-container">
            <div class="group group--right">
            <div id="module-5" class="module module--2-2"></div>
            </div>
            <div class="group group--left">
                <div class="module module--2-1"></div>
                <div class="module module--2-1"></div>
            </div>
        </div>
    </section>
</div>

<div class="container container--no-padding">
    <section>
        <div class="group-container">
            <div class="group group--left">
            <div id="module-5" class="module module--2-2"></div>
            </div>
            <div class="group group--right">
                <div class="module module--2-1"></div>
                <div class="module module--2-1"></div>
            </div>
        </div>
    </section>
</div>

<div class="group-container">
    <a class="project-navigation" href="">< Previous Project</a>
    <a class="project-navigation" href="">Next Project ></a>
</div>

</div>

<?php get_footer(); ?>
