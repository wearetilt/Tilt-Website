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

<?php echo the_archive_title();?>

<section id="primary" class="content-area">
    <main id="web-archive" class="site-main" role="main">

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
                    <a class="list-web" href="/web">Web</a>
                    <a class="list-motion" href="/motion">Motion</a>
                    <a class="list-film" href="/film">Film</a>
                </header>

                <div class="group-container area-dark">
                    <?php
                    while (have_posts()) :
                        the_post();

                        get_template_part( 'content-web-link', get_post_format() );

                    endwhile;

                    the_posts_pagination( array(
                        'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
                        'next_text'          => __( 'Next page', 'twentyfifteen' ),
                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
                    ) );

                    ?>
                    <?php

                else :
                    get_template_part( 'content', 'none' );
                endif;
                ?>
            </div>


            <div class="container container--half-top container--half-bot image-container client-logos">
                <h2> Featured Clients</h2>
                <img class="full-size" src="<?php echo get_template_directory_uri(); ?>/images/client_logos.jpg" alt="PBS Fear-o-Meter" />
            </div>
        </main>
    </section>

    <?php get_footer(); ?>
