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
    <video id="overlay-video" controls class="video-js vjs-default-skin vertical-align" poster="<?php echo get_template_directory_uri(); ?>/images/work/film_npower/npower_poster.jpg" width="100%" height="auto">
        <source src="https://player.vimeo.com/external/191931513.hd.mp4?s=aeb7805bfe67a4c143f4fbe4b5c0a7ac6e14e4b7&profile_id=119" type="video/mp4">
    </video>
    <div id="video-overlay-close"></div>
</div>
<header id="page_caroline_lucas" class="work-item work-item--motion area-dark">
    <div class="module--video module--header">
        <div id="header-play" class="header-play">

        </div>
        <div class="ratio">
            <video id="header-video-player" class="video-js vjs-default-skin" autoplay loop poster="<?php echo get_template_directory_uri(); ?>/images/work/film_npower/npower_poster.jpg" width="100%" height="100%" >
                    <source id="header-video" src="https://player.vimeo.com/external/304407179.sd.mp4?s=d10d70684ff83c3472c87962eb2a1b6886af0478&profile_id=165" type="video/mp4">
            </video>
        </div>
    </div>
    <div class="container container--header">
        <div class="header-title">
            <p class="tag tag--work-body">Film</p>
            <h1>nPower<br />
                <span class="light underlined">Carbon Monoxide Awareness</span>
            </h1>
            <h2 class="light services">Film</h2>
        </div>
        <div class="header-text">
            <div class="header-text__module header-text__module--padding">
                <h2>The Brief</h2>
                <p class="first-para tag--work-title">How do you create a film about an invisible danger in the family home?</p>
            </div>
            <div class="header-text__module header-text__module--padding">
                <h2>The Big Idea</h2>
                <p class="first-para tag--work-title">Use the incomparable imaginative power of children to visualise these dangers.</p>
            </div>
        </div>
    </div>
</header>

<div class="container container--half-top area-dark">
    <div class="group-container">
        <div class="group group--left">
            <div class="module module--2-2">
            	<div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/film_npower/npower_featured.jpg')"></div>
            </div>
        </div> <!-- /end group -->
        <div class="group group--right">
            <div  class="module module--1-1">
	            <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/film_npower/npower_square_small.jpg')"></div>
            </div>
            <div  class="module module--1-1">
	            <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/film_npower/npower_square_small_two.jpg')"></div>
            </div>
            <div class="module module--2-1">
	            <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/film_npower/npower_rectangle.jpg')"></div>
            </div>
        </div> <!-- /end group -->
    </div> <!-- /end group-container -->
</div>

<div class="container container--no-padding area-dark area-dark">
    <section>
        <div class="group-container">
            <div class="group group--left">
                <div class="module module--2-1 module--text-pad module--dark module--mobile-double-height">
                    <div class="module__text">
                        <h2 class="underlined">What we did</h2>
                        <p class="first-para tag--work-title">We used the incomparable imagination of kids, asking them to to draw what they thought an invisible monster in their home might look like. They came up with all kinds of exciting, spooky images which helps the viewer to conceptualise the idea of CO in their home.</p>
                    </div>
                </div>
                <div class="module module--2-1">
	                <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/film_npower/npower_rectangle-1.jpg')"></div>
                </div>
            </div>
            <div class="group group--right">
                <div class="module module--2-2">
	                <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/film_npower/npower_lg-1.jpg')"></div>
                </div>
            </div> <!-- /end group -->
        </div> <!-- /end group-container -->
    </section>
</div> <!-- /end container -->

<div class="container container--no-padding">
    <section>
        <div class="group-container">
            <div class="group group--left">
                <div class="module module--2-1 module--text-pad module--dark module--mobile-double-height">
                    <div class="module__text">
                         <p>The film plays with the viewers emotions; packing an emotive punch by flipping from this fun experiment through to the seriousness of this invisible danger at the end.</p>
                    </div>
                </div>
            </div>
            <div class="group group--right">
                <div class="module module--1-1">
	                <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/film_npower/npower_sm1-1.jpg')"></div>
                </div>
                <div class="module module--1-1">
	                <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/film_npower/npower_sm2-1.jpg')"></div>
                </div>
            </div> <!-- /end group -->
        </div> <!-- /end group-container -->
    </section>
</div>



<div class="group-container">
    <a class="project-navigation paginate_prev" href="../sdnpa"><span>&#8249;</span> Previous Project</a>
    <a class="project-navigation paginate_next" href="../barclays-values">Next Project <span>&#8250;</span></a>
</div>

</div>

<?php get_footer(); ?>
