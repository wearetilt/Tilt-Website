<?php 
/* Template Name: new frontpage
*/ 
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

<header id="home-page" class="work-item work-item--motion area-dark">
  <div class="module--video module--header">
    <div class="ratio">
      <div class="container container--header strapline-container">
        <h1>We Are <strong id="strapline-text">Tilt</strong></h1>
        <a class="cube--link" href="<?php echo site_url(); ?>/work">
          <div class="cube">
            <div class="cube--front cube--front__no-bg">
              <p class="sans-serif">See our work</p>
            </div>
            <div class="cube--top cube--top__no-bg">
              <p class="sans-serif">See our work</p>
            </div>
          </div>
        </a>
      </div>
      <video id="header-video-player" class="video-js vjs-default-skin" autoplay loop muted poster="<?php echo get_template_directory_uri(); ?>/images/home/header_poster_image.jpg">
          <source id="header-video" src="https://player.vimeo.com/external/144378575.hd.mp4?s=9126a5c2a202cb2d55ecf33fefe42a3a&profile_id=113" type="video/mp4">
      </video>
    </div>
    <a class="scroll-down" href="#"><span><p>Scroll down</p></span></a>
  </div>
</header>



  <?php
    // check if the repeater field has rows of data
    if( have_rows('front_page_content') ):
      // loop through the rows of data
      while ( have_rows('front_page_content') ) : the_row();
        // display a sub field value

        if( get_row_layout() == 'frontpage_work_item'):
          $left_item = get_sub_field('work_item_left');
          $right_item = get_sub_field('work_item_right');
  ?>

        <div class="container area-dark"><?php echo $left_item; ?></div>

  <?php
        endif;

      endwhile;

    else :
    // no rows found
    endif;
  ?>

<?php get_footer(); ?>

