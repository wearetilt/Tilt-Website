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
    // check if the repeater field has rows of data
    if( have_rows('work_items') ):
      // loop through the rows of data
      while ( have_rows('work_items') ) : the_row();
        // display a sub field value

          if( get_row_layout() == 'quote' ):
  ?>

<!-- quote -->
            <div class="container quote-container area-dark">
              <section class="text-section">
                <blockquote><?php echo the_sub_field('text'); ?></blockquote>
                <p class="sans-serif quote-attribute"><strong class="highlight"><?php echo the_sub_field('name'); ?></strong> <?php echo the_sub_field('position'); ?></p>
              </section>
            </div>

<!-- intro -->
  <?php 
          elseif(get_row_layout() == 'intro'):
            $pageId = get_the_ID();
            $terms = get_the_terms( $pageId, 'work_tags');
            $arrTerms = array();
            // $monitorTop = get_sub_field ('monitor_gradient_top');
            // $monitorBottom = get_sub_field ('monitor_gradient_bottom');
            $image_background = get_sub_field('header_image');

              if($terms) :
                foreach($terms as $term) {
                  $arrTerms[] = $term->name;
                }
              endif;

              if(get_sub_field('image')) :
                $image = get_sub_field('header_image')['url'];
              endif;

              if(get_sub_field('type') == 'video' && get_sub_field('video')) :
  ?>
                  <div id="video-overlay" class="fullpage-overlay">
                      <video id="overlay-video" controls class="video-js vjs-default-skin vertical-align" poster="<?php echo get_sub_field('video_loop_poster'); ?>" width="100%" height="auto">
                          <source src="https://player.vimeo.com/external/141548149.hd.mp4?s=c38947ea65f3bad06d05e9881fe92ead&profile_id=113" type="video/mp4">
                      </video>
                      <div id="video-overlay-close"></div>
                  </div>
  <?php
    endif;
  ?>
                <header data-color="<?php echo get_sub_field('project_color');?>" class="work-item area-dark work-header-video <?php echo get_sub_field('type') == 'video' &&  get_sub_field('video_loop') ? 'work-header-video' : 'work-header';?><?php $content['intro_background'] ? ' work-item--background' : '';?><?php echo get_sub_field('type') == 'background' ? ' work-item--background-image' : '';?><?php echo get_sub_field('type') == 'monitor' ? ' work-item--monitor' : '';?>" <?php echo get_sub_field('type') == 'background' ? 'style="background-image: url('.$image.')"' : '';?> <?php echo get_sub_field('type') == 'monitor' ? 'style="background: linear-gradient(to bottom, '.$monitorTop.' 0%, '.$monitorBottom.' 74%)"' : '';?> >
  <?php
          if(get_sub_field('type') == 'video' && get_sub_field('video_loop')) :
  ?>
                  <div class="module--video module--header">
  <?php 
            if(get_sub_field('video')) : 
  ?>
                    <div id="header-play" class="header-play video-ready"></div>
  <?php 
            endif;
  ?>
                      <div class="ratio">
                          <video data-video="<?php echo get_sub_field('video');?>" id="header-video-player" class="video-js vjs-default-skin" autoplay loop muted poster="<?php echo get_sub_field('video_loop_poster'); ?>" width="100%" height="100%" >
                              <source id="header-video" src="<?php echo get_sub_field('video_loop');?>" type="video/mp4">
                          </video>
                      </div>
                  </div>
  <?php 
          endif;
  ?>
                <div class="container container--header" <?php echo get_sub_field('type') == 'monitor' ? 'style="background-color: transparent"' : ''; ?> >
                  <div class="header-title">
                    <p class="tag tag--work-body"><?php echo get_sub_field('category');?></p>
                      <h1>
                        <?php echo get_sub_field('title_bold');?>
  <?php 
        if(get_sub_field('title')) : 
  ?> 
                          <br><span class="light underlined"><?php echo get_sub_field('title');?></span>
  <?php
       endif;
  ?>
                      </h1>
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
?>
    <div class="container full-height-video area-dark">
                              <video autoplay loop muted>
                                    <source src="<?php echo get_sub_field('video');?>" type="video/mp4">
                                </video>
    </div>

<!-- video side by side -->

<?php 

  elseif(get_row_layout() == 'video_row'):
 
    $left_video = get_sub_field('video_left'); 
    $right_video = get_sub_field('video_right');

?>

    <div class="container video-row area-dark">

      <div class="left-video">
        <video autoplay loop muted> 
          <source src="<?php echo $left_video; ?>" type="video/mp4">
        </video>
      </div>
      
      <div class="right-video">
        <video autoplay loop muted> 
          <source src="<?php echo $right_video; ?>" type="video/mp4">
        </video>
      </div>

    </div>

<!--- full text section -->

<?php 

  elseif(get_row_layout() == 'full_text_section'):

    $text_section_header = get_sub_field('text_section_header');
    $text_section_content = get_sub_field('text_section_content');

?>
    <div class="container text_section_container area-dark">
      <h2><?php echo $text_section_header; ?> </h2>
      <p><?php echo $text_section_content; ?></p>
    </div>


<!-- related project section -->

<?php 
  elseif(get_row_layout() == 'related_projects') :

    $leftproject = get_sub_field('left_project');
    $rightproject = get_sub_field('right_project');

    $left = $leftproject->ID;
    $right = $rightproject->ID;

?>

  <div class="related-projects container area-dark">
    <h2> Related Projects </h2>

    <div class="left-project"><a href="<?php echo get_permalink($leftproject); ?>"><img src="<?php echo get_the_post_thumbnail_url($left);?>"></a></div>
    <div class="right-project"><a href="<?php echo get_permalink($rightproject); ?>"><img src="<?php echo get_the_post_thumbnail_url($right);?>"></a></div>
  </div>


<!-- image carousel -->
<?php 
  elseif (get_row_layout() == 'image_carousel') :

?>




<!-- image video -->

  <?php
        elseif( get_row_layout() == 'image'):
          $image = wp_get_attachment_image_src(get_sub_field('image'), false);
            if($image) :

                  if( get_sub_field('image_full_size')) : 
  ?>
                          <div class="container full_image_container area-dark container--no-padding <?php get_sub_field('padding_bottom') ? 'container--half-bot':'';?>">
                            <img class="full-size" src="<?php echo $image[0];?>" alt="">
  <?php 
                    else : 
  ?>
                          <div class="container padded_image_container area-dark container--no-padding <?php get_sub_field('padding_bottom') ? 'container--half-bot':'';?>">
                                  <img src="<?php echo $image[0];?>" alt="">
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

<?php get_footer(); ?>

