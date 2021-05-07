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



get_header(); ?>

<div class="careers-page__wrapper">
    <header class="careers-page">
        <div class="module module--16-5 module--image module--visible">
            <div class="ratio">
              <?php
              if ( has_post_thumbnail() ) {
               echo get_the_post_thumbnail( get_the_ID(), 'fullsize' );
              }
              ?>
            </div>
        </div> <!-- /end module -->
    </header>

    <?php the_content() ;?>



    <!-- <div class="header-container container area-dark">
        <div class="text-container first-para sans-serif">

            <p><strong>What you need to know about us</strong></p>

            <div class="header-content">
                <p></p>
                <p></p>
                <p></p>
            </div>

            <a class="cube--link" href="<?= $career_item['career_link'];?>">
                <div class="cube">
                    <div class="cube--front cube--front__no-bg">
                        <p class="sans-serif">Send us your details</p>
                    </div>
                </div>
            </a>
        </div>
    </div> -->

</div>

<?php get_footer(); ?>
