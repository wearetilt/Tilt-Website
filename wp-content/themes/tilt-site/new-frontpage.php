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

  <div id="header-overlay" class="container container--header area-dark">
    <a id="blog_button" class="button button--no-border" href="<?php echo site_url(); ?>/submotion-orchestra">About this video</a>
    <div class="text-container">
      <p class="first-para sans-serif"><strong class="highlight">CRAFTED DIGITAL EXPERIENCES</strong> FROM AN OBSESSIVE BUNCH OF STRATEGISTS, ARTISTS, FILMMAKERS, ANIMATORS, PRODUCERS, ILLUSTRATORS, WRITERS, CODERS AND CREATIVES.</p>


      <a class="cube--link" href="<?php echo site_url(); ?>/about/">
        <div class="cube">
          <div class="cube--front">
            <p class="sans-serif">More about us</p>
          </div>
          <div class="cube--top">
            <p class="sans-serif">More about us</p>
          </div>
        </div>
      </a>
    </div>
  </div>

  <div class="front-content container area-dark">

    <?php
    // check if the repeater field has rows of data
    if(have_rows('front_page_content')):
      // loop through the rows of data
      while(have_rows('front_page_content') ) : the_row();
        // display a sub field value

        if( get_row_layout() == 'frontpage_work_items'):
          $left_item = get_sub_field('work_item_left');
          $right_item = get_sub_field('work_item_right');
          ?>

          <div class="cms-content area-dark">

            <div class="container area-dark work-item-left">
              <a href="<?php echo get_permalink($left_item);?>">
                <img src="<?php echo get_the_post_thumbnail_url($left_item);?>">
              </a>
              <div class="container title_section" style="background: transparent;">

                  <h2><?php echo get_the_title($left_item);?></h2>
                  <?php 
                    $string = $left_item->post_name;
                    $leftItem = str_replace("-", " ", $string);
                    echo $leftItem;
                  ?>

              </div>
            </div>

            <div class="container area-dark work-item-right">
              <a href="<?php echo get_permalink($right_item);?>">
                <img src="<?php echo get_the_post_thumbnail_url($right_item);?>">
              </a>
              <div class="container title_section" style="background: transparent;">

                  <h2><?php echo get_the_title($right_item);?></h2>
                  <?php 
                    $string = $right_item->post_name;
                    $rightItem = str_replace("-", " ", $string);
                    echo $rightItem;
                  ?>

              </div>
            </div>

          </div>

      <?php 
        elseif(get_row_layout() == 'news_row'):
          if(get_sub_field('news_list')) :
            foreach (get_sub_field('news_list') as $newsItem) {
              $newsItem = get_sub_field('news_item');
      ?>
        <div class="news-content"> 
          <a href="<?php echo get_permalink($newsItem);?>">
            <img src="<?php echo get_the_post_thumbnail_url($newsItem);?>">
          </a>
        </div>

      <?php
            }
        endif;

        endif;

      endwhile;
      ?>

    </div>
    
    <?php 

  else :
    // no rows found
  endif;
  ?>



  <?php get_footer(); ?>

