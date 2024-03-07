 <?php 
/* Template Name: new work
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

<?php
    global $post;

    if ( ! post_password_required( $post ) ) {
          // Your custom code should here
      ?>
<?php
    // check if the repeater field has rows of data
if( have_rows('work_items') ):
      // loop through the rows of data
  while ( have_rows('work_items') ) : the_row();
        // display a sub field value
    ?>

    <!-- intro -->

    <?php 
    if( get_row_layout() == 'intro'):

      $pageId = get_the_ID();
      $terms = get_the_terms( $pageId, 'work_tags');
      $arrTerms = array();

      $image = get_sub_field('header_image'); 
      $mobileImage = get_sub_field('mobile_header_image'); 
      $video = get_sub_field('video');
      $awardLogo = get_sub_field('award_logo');
      $award = wp_get_attachment_image_src( $awardLogo, 'award_size' )[0]; 
      $awardMobile = wp_get_attachment_image_src( $awardLogo, 'award_mobile_size' )[0]; 
 

      ?>

        <?php
        if (get_sub_field('overlaid_title_colour') == 'dark-grey'){
            $title_class = 'area-light';
        }
        else{
            $title_class = 'area-dark';
        }
        ?>

      <header class="work-item <?php echo $title_class; ?>" >


        <div class="header-image" style="background-image: url(<?php echo $image['url']?>);">
          <!--           <img src="<?php echo $image['url']?>"> -->
        </div>
        <?php if( $mobileImage ) : ?>
        <div class="header-image-mobile" style="background-image: url(<?php echo $mobileImage['url']?>);"></div>
        <?php else : ?>
          <div class="header-image" style="background-image: url(<?php echo $image['url']?>);">
        <?php endif; ?>

        <?php 

        if(get_sub_field('type') == 'video') :

          ?>

          <div class="fullpage-overlay">
            <video data-video="<?php echo get_sub_field('video');?>" id="header-video-player" class="video-js vjs-default-skin" autoplay loop muted width="100%" height="100%" >
              <source id="header-video" src="<?php echo get_sub_field('video_loop');?>" type="video/mp4">
              </video>
            </div>

            <?php 
          endif;
          ?>   

          <!-- title section -->
          <div class="container container--header" <?php echo get_sub_field('type') == 'monitor' ? 'style="background-color: transparent"' : ''; ?> >
            <div class="header-title">
                            <?php 
              if(get_sub_field('title')) : 
                ?> 
                <p><?php echo get_sub_field('title'); ?></p>
                <?php
              endif;
              ?>
              <h1>
                <?php echo get_sub_field('title_bold');?>
              </h1>
              <p><?php echo get_sub_field('category');?></p>
              <div class="award-logo">
                <img src="<?php echo $award?>"/>
              </div>
              <div class="award-logo mobile">
                <img src="<?php echo $awardMobile?>"/>
              </div>
              <?php 
              if($arrTerms) : 
                ?>
                <h2 class="light services"><?php implode(' | ', $arrTerms);?></h2>
                <?php
              endif;
              ?>
            </div>
          </div>


        </header>

        <main class="main-work-content">

          <!-- headline text -->

          <?php 

        elseif( get_row_layout() == 'headline__text'):

          $brief = get_sub_field('text_brief');
          $solution = get_sub_field('text_solution');

          // $arrText = explode('</p>', $text);
          // $arrText[0] = str_replace('<p>', '<p class="first-para tag--work-title">', $arrText[0]);
          // $text2 = implode('</p>', $arrText);

          $background = get_sub_field('background');

          if(!$background) {
            $background = 'dark';
          }
          ?>

          <div class="container container-headline-text area-<?= $background ;?>">
            <section class="text-section">
              <h2>The Brief</h2>
              <div class="text-section__para"><p><?= $brief;?></p></div>
            </section>
            <section class="text-section">
              <h2>The Solution</h2>
              <div class="text-section__para"><p><?= $solution;?></p></div>
            </section>

          </div>

          <!-- launch project button -->

          <?php 
        elseif( get_row_layout() == 'launch_project'):
          $launch = get_sub_field('project_link');
          ?>

          <div class="launch-project-button container container-headline-text area-dark">
            <div class="launch-link">
              <a href="<?php echo $launch; ?>" target="_blank">
                  <div class="launch-box">
                    <p class="sans-serif">Launch Project</p>
                  </div>
              </a>
            </div>
          </div>

          <!-- gallery -->
          <?php
        elseif( get_row_layout() == 'gallery'):
          $galleryLayout = get_sub_field('layout');
          $arrLayouts = array(
            1 => array('2-2', '//2-1', '2-1'),
            2 => array('2-1', '2-1', '//2-2'),
            3 => array('1-1', '1-1'),
          );
          $arrVideos = array();
          $background = get_sub_field('background');

          if(get_sub_field('videos')) :
            foreach(get_sub_field('videos') as $v) {
              if($v['video']) {
                $arrVideos[($v['key']-1)] = $v['video'];
              }
            }
          endif;

          if(!$background) :
            $background = 'dark';
          endif;

          if(get_sub_field('images')) :
            ?>
            <div data-gallery="<?php $galleryLayout;?>" class="container gallery-container area-<?php echo $background;?> <?php echo get_sub_field('padding') ? 'container--padding':'container--no-padding';?> <?php echo get_sub_field('no_padding_bottom') ? 'container--no-padding-bottom' : '';?>">
              <div class="group-container">
                <div class="group group--left">
                  <?php
                  $i = 0;
                  foreach(get_sub_field('images') as $image) {
                    $break = false;
                    $moduleLayout = $arrLayouts[$galleryLayout][$i];

                    if(strpos($moduleLayout, '//') !== false) :
                      $break = true;
                      $moduleLayout = str_replace('//', '', $moduleLayout);
                    endif;

                    if($break) :
                      ?>
                    </div>
                    <div class="group group--right">
                      <?php
                    endif;
                    $moduleClass = 'module module--'.$moduleLayout;

                    if(isset($arrVideos[$i])) : 
                      ?>
                      <div class="<?php echo $moduleClass;?> module--16-9 module--video module--nozoom gallery-video">
                        <div class="ratio">
                          <video controls poster="<?php echo $image['url'];?>" class="video-js vjs-default-skin page-video" controls width="100%" height="100%">
                            <source src="<?php echo $arrVideos[$i];?>" type="video/mp4">
                            </video>
                          </div>
                        </div>
                        <?php
                      else :
                        ?>
                        <div class="<?php echo $moduleClass;?>">
                          <div class="ratio" style="background-image: url('<?php echo $image['url'];?>"></div>
                        </div>
                        <?php
                      endif;
                      $i++;
                    }
                    ?>
                  </div>
                </div>
              </div>

              <?php 
            endif;
            ?>

            <!-- full vh video section -->

            <?php 
          elseif(get_row_layout() == 'full_height_video'):
            $video = get_sub_field('video');

            ?>

            <div class="container full-height-video area-dark">
              <div class="embed-container">
                <?php echo $video; ?>
              </div>
              </div>

              <!-- video side by side -->

              <?php 

            elseif(get_row_layout() == 'video_row'):
              $count = count(get_sub_field('rows'));
              $m = 0;
// check if the repeater field has rows of data
              if( have_rows('rows') ):

               $classname = ($count > 1 ? 'no-padding' : '');

  // loop through the rows of data
               while ( have_rows('rows') ) : the_row();

        // display a sub field value
                $left_video = get_sub_field('video_left'); 
                $right_video = get_sub_field('video_right');


                ?>

                  <div class="container video-row area-dark <?php echo $classname; ?> section-<?php echo $m; ?>">
                    <div class="left-video">
                      <div class="video-wrapper">
                        <?php echo $left_video; ?>
                      </div>
                      </div>

                      <div class="right-video">
                        <div class="video-wrapper">
                          <?php echo $right_video; ?>
                        </div>
                        </div>
                  </div>

                    <?php
                    $m++;
                  endwhile;

                endif;


                ?>

              <?php elseif(get_row_layout() == 'looping_video'):
                $loop = get_sub_field('video_loop');
                ?>
                
                <div class="container area-dark looping-video">
                  <video id="header-video-player" class="video-js vjs-default-skin" autoplay loop muted playsinline >
                    <source id="header-video" src="<?php echo $loop; ?>" type="video/mp4">
                  </video>
                </div>

                <!--- full text section -->

                <?php 

              elseif(get_row_layout() == 'full_text_section'):

                $text_section_header = get_sub_field('text_section_header');
                $text_section_content = get_sub_field('text_section_content');
                $second_column = get_sub_field('two_columns');
                $second_header = get_sub_field('second_header');
                $second_text_content = get_sub_field('second_text_section');

                if($second_column == true) :
                  ?>
                  <div class="container text_section_container area-dark">

                    <div class="text_headings">
                      <?php if( $text_section_header != ''){ ?>
                        <h2><?php echo $text_section_header; ?> </h2>
                      <?php } else {} ?>

                      <?php if( $second_header != ''){ ?>
                        <h2><?php echo $second_header; ?> </h2>
                      <?php } else {} ?>
                    </div>


                    <div class="text_mid">

                      <p><?php echo $text_section_content; ?></p>

                    </div>

                      <div class="text_right">
                          <p><?php echo $second_text_content; ?></p>
                      </div>
                  </div>
                  <?php else: ?>
                    <div class="container text_section_container area-dark">
                      <div class="text_single">
                        <h2><?php echo $text_section_header; ?> </h2>
                        <p><?php echo $text_section_content; ?></p>
                      </div>
                    </div>
                  <?php endif; ?>

              <!-- reuslts section -->

              <?php 

              elseif(get_row_layout() == 'results_section'):

                $text_section_header = get_sub_field('text_section_header');
                $text_section_content = get_sub_field('text_section_content');
                $second_text_content = get_sub_field('second_text_section');
                $third_text_content = get_sub_field('third_text_section');
                $third_column = get_sub_field('three_columns');
                $second_line = get_sub_field('second_line');

                if($third_column == true && $second_line == true) :
                  ?>
                  <div class="container result_section_container no-padding area-dark">
                    <?php if($text_section_header != ''){?>
                    <h2><?php echo $text_section_header; ?> </h2>
                    <?php } else {}?>
                    <div class="text_left">
                      <p><?php echo $text_section_content; ?></p>
                    </div>
                    <div class="text_mid">
                      <p><?php echo $second_text_content; ?></p>
                    </div>
                    <div class="text_right">
                      <p><?php echo $third_text_content; ?></p>
                    </div>
                  </div>
                  <?php elseif($third_column == false && $second_line == true): ?>
                    <div class="container result_section_container no-padding area-dark">
                      <?php if($text_section_header != ''){?>
                      <h2><?php echo $text_section_header; ?> </h2>
                      <?php } else {}?>
                      <div class="text_mid">
                        <p><?php echo $text_section_content; ?></p>
                      </div>
                      <?php if($second_text_content != ''){?>
                      <div class="text_right">
                        <p><?php echo $second_text_content; ?></p>
                      </div>
                    <?php } else {}?>
                    </div>
                  <?php elseif($third_column == true && $second_line == false) :
                  ?>
                  <div class="container result_section_container area-dark">
                    <?php if($text_section_header != ''){?>
                    <h2><?php echo $text_section_header; ?> </h2>
                    <?php } else {}?>
                    <div class="text_left">
                      <p><?php echo $text_section_content; ?></p>
                    </div>
                    <div class="text_mid">
                      <p><?php echo $second_text_content; ?></p>
                    </div>
                    <div class="text_right">
                      <p><?php echo $third_text_content; ?></p>
                    </div>
                  </div>
                  <?php else : ?>
                    <div class="container result_section_container area-dark">
                      <?php if($text_section_header != ''){?>
                      <h2><?php echo $text_section_header; ?> </h2>
                      <?php } else {}?>
                      <div class="text_mid">
                        <p><?php echo $text_section_content; ?></p>
                      </div>
                      <?php if($second_text_content != ''){?>
                      <div class="text_right">
                        <p><?php echo $second_text_content; ?></p>
                      </div>
                    <?php } else {}?>
                    </div>



                  <?php endif; ?>

                  <!-- quote -->

                  <?php elseif( get_row_layout() == 'quote' ):?>
                    <div class="container area-dark quote-outer">
                      <div class="quote-container area-dark">
                        <section class="text-section">
                          <blockquote><?php echo the_sub_field('text'); ?></blockquote>
                          <p class="sans-serif quote-attribute"><strong class="highlight"><?php echo the_sub_field('name'); ?></strong> <?php echo the_sub_field('position'); ?></p>
                        </section>
                      </div>
                    </div>

                    <!-- related project section -->

                    <?php 
                  elseif(get_row_layout() == 'related_projects') :

                    $leftproject = get_sub_field('left_project');
                    $rightproject = get_sub_field('right_project');

                    $left = $leftproject->ID;
                    $right = $rightproject->ID;

                    $tax_right = wp_get_post_terms( $right, 'work' );
                    $tax_left = wp_get_post_terms( $left, 'work' );

                    $alt_left = get_post_meta($left, '_wp_attachment_image_alt', true);
                    $alt_right = get_post_meta($right, '_wp_attachment_image_alt', true);
                    
                    ?>

                    <div class="related-projects container area-dark">
                      <h2> Related Projects </h2>

                      <div class="related-container">
                        <div class="left-project"><a href="<?php echo get_permalink($leftproject); ?>"><img src="<?php echo get_the_post_thumbnail_url($left);?>" alt="<?php echo $alt_left; ?>"></a>
                          <div class="related-titles">
                            <?php if($tax_left[0]->name != ''):?>
                              <p><?php echo $tax_left[0]->name; ?></p>
                              <?php else: endif;?>

                              <h2><?php echo get_the_title($left);?></h2>
                              <p><?php 
                              $string = $leftproject->post_name;
                              $leftItem = str_replace("-", " ", $string);
                              echo $leftItem;
                              ?></p>
                            </div>
                          </div>
                          <div class="right-project"><a href="<?php echo get_permalink($rightproject); ?>"><img src="<?php echo get_the_post_thumbnail_url($right);?>" alt="<?php echo $alt_right; ?>"></a>
                            <div class="related-titles">
                              <?php if($tax_right[0]->name != ''): ?>
                                <p><?php echo $tax_right[0]->name; ?></p>
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


                        <!-- image carousel -->
                        <?php 
                      elseif (get_row_layout() == 'image_carousel') :

                        ?>

                        <div class="container image_carousel area-dark">

                          <?php 
                          $i = 0;

                          foreach(get_sub_field('carousel_image') as $image){
                            ?>
                            <div class="carousel-image slide<?php echo $i+1?>">
                              <div>
                                <img class="slideimage " src="<?php echo $image['url'];?>" alt="<?php echo $image['alt']; ?>">
                              </div>
                            </div>
                            <?php
                            $i++;
                          }
                          ?>

                        </div>

                        <!-- extended image -->

                        <?php 

                      elseif ( get_row_layout() == 'extended_image'):
                        $long_image = wp_get_attachment_image_src(get_sub_field('image'), false);
                        $image_id = attachment_url_to_postid($long_image[0]);
                        $alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);

                        if ($long_image) :
                          ?>

                          <div class="container padded_image_container_long area-dark">
                            <img src="<?php echo $long_image[0]; ?>" alt="<?php echo $alt; ?>">
                          </div>

                          <?php
                        endif;
                        ?>

                        <!-- image video -->

                        <?php
                      elseif( get_row_layout() == 'image'):
                        $image = wp_get_attachment_image_src(get_sub_field('image'), false);
                        $mobile_image = wp_get_attachment_image_src(get_sub_field('mobile_image'), false);

                        $image_id = attachment_url_to_postid($image[0]);
                        $mobile_image_id = attachment_url_to_postid($mobile_image[0]);
                        $alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                        if($image) :

                          if( get_sub_field('image_full_size')) : 
                            ?>
                            <div class="container full_image_container area-dark  <?php get_sub_field('padding_bottom') ? 'container--half-bot':'';?>">
                                  <img class="full-size" src="<?php echo $image[0];?>" alt="<?php echo $alt; ?>">
                                <?php if( $mobile_image) : ?>
                                  <img class="mobile-image" src="<?php echo $mobile_image[0];?>" alt="<?php echo $alt; ?>">
                                <?php endif; ?>
                              <?php 
                            else : 
                              ?>
                              <div class="container padded_image_container area-dark container--no-padding <?php get_sub_field('padding_bottom') ? 'container--half-bot':'';?>">
                                  <img class="img-contained" src="<?php echo $image[0];?>" alt="<?php echo $alt; ?>">
                                <?php if( $mobile_image) : ?>
                                  <img class="mobile-image" src="<?php echo $mobile_image[0];?>" alt="<?php echo $alt; ?>">
                                <?php endif; ?>
                                <?php
                              endif;
                              ?>
                            </div>

                            <?php
                          endif;
                          ?>
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

