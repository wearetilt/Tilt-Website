 <?php 
/* Template Name: Tilt Talk template
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

<div class="talk-sections">

  <?php
  global $post;

  if ( ! post_password_required( $post ) ) {
          // Your custom code should here
    ?>
    <?php
    // check if the repeater field has rows of data
    if( have_rows('talk_items') ):
      // loop through the rows of data
      while ( have_rows('talk_items') ) : the_row();
        // display a sub field value
        ?>

        <!-- intro -->

        <?php 
        if( get_row_layout() == 'header'):

          $pageId = get_the_ID();
          $terms = get_the_terms( $pageId, 'work_tags');
          $arrTerms = array();

          $image = get_sub_field('header_image'); 

          ?>

          <header class="talk-item-header area-dark" >

            <div class="header-image" style="background-image: url(<?php echo $image['url']?>);">
              <!--           <img src="<?php echo $image['url']?>"> -->
            </div>

          </header>

          <main class="main-talk-content">

            <!--- full text section -->

            <?php 

          elseif(get_row_layout() == 'full_text_section'):

            $text_section_speaker = get_sub_field('text_section_speaker');
            $text_section_title = get_sub_field('text_section_title');
            $text_section_date = get_sub_field('talk_date');
            $text_section_content = get_sub_field('text_section_content');

            ?>
                <div class="container text_section_container area-dark">
                  <div class="header-text">
                    <h2><?php echo $text_section_speaker; ?> </h2>
                    <h2><?php echo $text_section_title; ?> </h2>
                    <p><?php echo $text_section_date; ?> </p>
                    <p><?php echo $text_section_content; ?></p>
                  </div>
                </div>

              <!-- related project section -->

              <?php 
            elseif(get_row_layout() == 'video_blog') :

              $leftproject = get_sub_field('left_project');
              $rightproject = get_sub_field('right_project');

              $left = $leftproject->ID;
              $right = $rightproject->ID;

              $tax_right = wp_get_post_terms( $right, 'work' );
              $tax_left = wp_get_post_terms( $left, 'work' );

              $alt_left = get_post_meta($left, '_wp_attachment_image_alt', true);
              $alt_right = get_post_meta($right, '_wp_attachment_image_alt', true);

              ?>

              <div class="video-blog container area-dark">
                <div class="video-blog-container">
                  <div class="video_half">
                    <?php echo $leftproject; ?>
                    </div>
                    <div class="blog_half"><a href="<?php echo get_permalink($rightproject); ?>"></a>
                      <div class="related-titles">
                        <?php if($tax_right[0]->name != ''): ?>
                          <p class="tag"><?php echo $tax_right[0]->name; ?></p>
                          <?php else: endif;?>
                          <h2><?php echo get_the_title($right);?></h2>
                          <p><?php 
                          $string = $rightproject->post_name;
                          $rightItem = str_replace("-", " ", $string);
                          echo $rightItem;
                          ?></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php
                endif;
              endwhile;

            else :
    // no rows found
            endif;
            ?>

          </main>
          <?php 
        }else{
        // we will show password form here
          echo get_the_password_form();
        }

        ?>
        <?php get_footer(); ?>

