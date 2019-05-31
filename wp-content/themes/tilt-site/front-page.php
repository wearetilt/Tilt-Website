<?php
/**
 * Template Name: front page
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */


get_header('home'); ?>


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
      <video id="header-video-player" class="video-js vjs-default-skin" autoplay loop muted playsinline poster="<?php echo get_template_directory_uri(); ?>/images/home/header_poster_image.jpg">
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

  <main class="main-work-content">

    <?php

    if( have_rows('front_page_content') ):
      while ( have_rows('front_page_content') ) : the_row();

        ?>

        <?php
        if(get_row_layout() == 'frontpage_work_items'):

          $left_project = get_sub_field('work_item_left');
          $right_project = get_sub_field('work_item_right');
          $post_image_left = get_the_post_thumbnail($left_project);
          $post_image_right = get_the_post_thumbnail($right_project);
          $bold_left = get_post_meta($left_project->ID, 'work_items_0_title_bold');
          $bold_right = get_post_meta($right_project->ID, 'work_items_0_title_bold');
          $title_left = get_post_meta($left_project->ID, 'work_items_0_title');
          $title_right = get_post_meta($right_project->ID, 'work_items_0_title');
          $left_excerpt = get_the_excerpt($left_project->ID);
          $right_excerpt = get_the_excerpt($right_project->ID);
          ?>
          <div class="work-item area-dark" >

            <div class="left_container project_container">
              <a href='<?php echo get_permalink($left_project); ?>'>
                <?php if($post_image_left  != '') {
                  echo $post_image_left ;
                } else { ?>
                  <img src="/wp-content/themes/tilt-site/images/404_poster_loop.jpg"/>
                <?php } ?>
              </a>

              <div class="related-links">
                <p class="project_name"><?php echo $title_left[0]; ?></p>
                <h2 class="entry-title"><?php echo $bold_left[0]; ?></h2>
                <p class="sans-serif excerpt"><?php echo $left_excerpt; ?></p>
              </div>
            </div>

            <div class="right_container project_container">
              <a href='<?php echo get_permalink($right_project); ?>'>
                <?php if($post_image_right != '') {
                  echo $post_image_right;
                } else { ?>
                  <img src="/wp-content/themes/tilt-site/images/404_poster_loop.jpg"/>
                <?php } ?>
              </a>

              <div class="related-links">
                <p class="project_name"><?php echo $title_right[0]; ?></p>
                <h2 class="entry-title"><?php echo $bold_right[0]; ?></h2>
                <p class="sans-serif excerpt"><?php echo $right_excerpt; ?></p>
              </div>
            </div>

          </div>

          <?php

        elseif(get_row_layout() == 'see_all'):
          $our_work = get_sub_field('our_work');
          ?>
          <div class=" goto_projects area-dark">

            <a class="cube--link" href="<?php echo site_url(); ?>/work">
              <div class="cube">
                <div class="cube--front">
                  <p class="our_work_button sans-serif button"><?php echo $our_work; ?> </p>
                </div>
                <div class="cube--top">
                  <p class="our_work_button_black sans-serif button"><?php echo $our_work; ?> </p>
                </div>
              </div>
            </a>
          </div>



          <?php

        elseif(get_row_layout() == 'news_row') :
          if(have_rows('news_items')) :
            ?>
            <div class="news-line area-dark">
              <?php
              while(have_rows('news_items')): the_row();
                $news = get_sub_field('news_item');
                ?>

                <a href="<?php echo get_permalink($news);?>" class="news-item">
                  <div class="news_text">
                    <div>
                      <p>News</p>
                      <span><?php echo $news->post_title; ?></span>
                    </div>
                  </div>
                </a>

                <?php
              endwhile;
              ?>
            </div>
            <?php
          endif;
        endif;

      endwhile;
    else :
    // no rows found
    endif;
    ?>

  </main>


  <?php get_footer(); ?>

  <script type="text/javascript">

    var wordArray = ['Thinkers', 'Crafters', 'Grafters', 'Tilt', 'Time-Travellers', 'Navigators', 'Gymnasts', 'Firestarters', 'Geeks', 'Tilt', 'All Ears', 'Entertainers', 'Tea Drinkers'];
    var maxLoops = wordArray.length;
    var counter = 0;


    jQuery(document).ready(function(){

      (function next() {

        if (counter < maxLoops) {

          setTimeout(function() {

            jQuery('#strapline-text').fadeOut(500, function(){

              document.getElementById('strapline-text').innerHTML = wordArray[counter];
              jQuery('#strapline-text').fadeIn(500);
              next();
              counter++;
              if(counter == maxLoops) { counter = 0; }

            });

          }, 2000);

        } else {
          counter = 0;
          next();
        }

      })();

    });

  </script>
