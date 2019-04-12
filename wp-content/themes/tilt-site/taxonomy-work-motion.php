<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
<section id="primary" class="content-area">
    <main id="motion-archive" class="site-main" role="main">

        <div id="video-overlay" class="fullpage-overlay">
            <video id="overlay-video" width="100%" height="100%" controls class="video-js vjs-default-skin vertical-align" poster="<?php echo get_template_directory_uri(); ?>/images/work/showreel_poster.jpg" width="100%" height="auto">
                <source src="https://player.vimeo.com/external/139889786.hd.mp4?s=91a9df0c1f9574740a422a5f253fa81768da039e&profile_id=175" type="video/mp4">
            </video>
            <div id="video-overlay-close"></div>
        </div>


        <?php if (have_posts()) : ?>

            <header id="services--list" class="container container--header container--work-list">
                <p> Filter work by: </p>
                <a class='list-all' href="/work">All</a>
                <a class="list-web" href="/service/web">Web</a>
                <a class="list-motion" href="/service/motion">Motion</a>
                <a class="list-film" href="/service/film">Film</a>
            </header>

            <div class="motion-show-reel area-dark">
                <div class="header-play"></div>
                <div class="reel-title "> <h2>Motion Reel</h2></div>
                <video class="video-js vjs-default-skin" width="100%" height="100%" >
                  <source id="header-video" src="https://player.vimeo.com/external/306997716.hd.mp4?s=c30b980ad09357a76bb3b318dfcc5091c57101ee&profile_id=174" type="video/mp4">
                  </video>
            </div>

              <div class="group-container area-dark">
                <?php
            // Start the Loop.
                while (have_posts()) :
                    the_post();

                /*
                 * Include the Post-Format-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                 */
                get_template_part( 'content-web-link', get_post_format() );

            // End the loop.
            endwhile;

            // Previous/next page navigation.
            the_posts_pagination( array(
                'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
                'next_text'          => __( 'Next page', 'twentyfifteen' ),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
            ) );

            ?>
            <?php

        // If no content, include the "No posts found" template.
        else :
            get_template_part( 'content', 'none' );
        endif;
        ?>
    </div>

    <div class="archive-show-reel area-dark">
        <div id="header-play" class="header-play"></div>
        <div class="reel-title"> <h2>REEL 2019</h2></div>
            <video id="header-video-player" class="video-js vjs-default-skin" autoplay loop muted poster="<?php echo get_template_directory_uri(); ?>/images/work/showreel_poster.jpg" width="100%" height="100%" >
                <source id="header-video" src="https://player.vimeo.com/external/141548149.hd.mp4?s=c38947ea65f3bad06d05e9881fe92ead&profile_id=113" type="video/mp4">
            </video>
    </div>

        <div class="container container--half-top container--half-bot image-container client-logos">
            <h2> Featured Clients</h2>
            <img class="full-size" src="<?php echo get_template_directory_uri(); ?>/images/client_logos.jpg" alt="PBS Fear-o-Meter" />
        </div>
    </main><!-- .site-main -->
</section><!-- .content-area -->

<?php get_footer(); ?>
