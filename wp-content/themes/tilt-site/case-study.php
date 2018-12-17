<?php 
/* Template Name: case study 
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
                <blockquote>“<?php echo the_sub_field('text'); ?>”</blockquote>
                <p class="sans-serif quote-attribute"><strong class="highlight"><?php echo the_sub_field('name'); ?></strong> <?php echo the_sub_field('position'); ?></p>
              </section>
            </div>

<!-- intro -->
  <?php 
          elseif(get_row_layout() == 'intro'):
            $pageId = get_the_ID();
            $terms = get_the_terms( $pageId, 'work_tags');
            $arrTerms = array();
            $monitorTop = get_sub_field ('monitor_gradient_top');
            $monitorBottom = get_sub_field ('monitor_gradient_bottom');

              if($terms) :
                foreach($terms as $term) {
                  $arrTerms[] = $term->name;
                }
              endif;

              if(get_sub_field('image')) :
                $image = get_sub_field('image')['url'];
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
        if( get_sub_field('type') == 'monitor' && $image) : 
  ?>
                  <div class="monitor-wrapper">
                    <div class="monitor-holder">
  <?php 
            if(get_sub_field('link')) : 
  ?>
                        <a href="<?php echo get_sub_field('link');?>" target="_blank">
                            <div class="overlay area-dark">
                              <img class="vertical-align centre-image" src="<?php echo get_template_directory_uri(); ?>/images/link_button.png" alt="">
  <?php 
            endif;

            if(get_sub_field('link')) : 
  ?>
                            </div>
                        </a> 
  <?php 
            endif;
  ?>
                            <img class="monitor centre-image" src="<?php echo get_template_directory_uri(); ?>/images/monitor.png" alt="an image of an empty apple monitor">
                              <div class="monitor-screen">
                                <img src="<?php echo $image;?>" alt="" style="width: 100%; height: 100%;">
                              </div>
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
  <?php 
        if(get_sub_field('text_brief') || get_sub_field('text_idea')) : 
  ?>
                    <div class="header-text">
  <?php
            if(get_sub_field('text_brief')) : 
  ?>
                      <div class="header-text__module header-text__module--padding">
                        <h2>The Brief</h2>
                          <p class="first-para tag--work-title"><?php echo get_sub_field('text_brief');?></p>
                      </div>
  <?php
            endif;

            if(get_sub_field('text_idea')) : 
  ?>
                      <div class="header-text__module header-text__module--padding">
                        <h2>The Big Idea</h2>
                        <p class="first-para tag--work-title"><?php echo get_sub_field('text_idea');?></p>
                      </div>
  <?php
            endif;
  ?>
                    </div>
  <?php
        endif;
  ?>
                </div>
            </header>


  <!-- gallery -->
  <?php
          elseif( get_row_layout() == 'gallery'):
          $galleryLayout = get_sub_field('layout');
          $arrLayouts = array(
              1 => array('2-2', '//2-2'),
              2 => array('2-2', '//2-1', '1-1', '1-1'),
              3 => array('2-2', '//1-1', '1-1', '2-1'),
              4 => array('2-2', '//2-1', '2-1'),
              5 => array('2-1', '1-1', '1-1', '//2-2'),
              6 => array('2-1', '2-1', '//2-2'),
              7 => array('1-1', '1-1', '1-1', '1-1'),
              8 => array('1-1', '1-1', '2-1', '1-1', '1-1', '//2-1', '2-2'),
              9 => array('2-1', '//2-1'),
              10 => array('2-2', '2-1', '1-1', '1-1', '//1-1', '1-1', '2-1', '2-2')
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
            <div data-gallery="<?php $galleryLayout;?>" class="container area-<?php echo $background;?> <?php echo get_sub_field('padding') ? 'container--padding':'container--no-padding';?> <?php echo get_sub_field('no_padding_bottom') ? 'container--no-padding-bottom' : '';?>">
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
                            <div class="<?php echo $moduleClass;?> module--16-9 module--video">
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

  <!-- text-image-image -->

  <?php
        elseif( get_row_layout() == 'text__image_image'):
          $mediaCount = 0;
            foreach(get_sub_field('media') as $media) {
                if($media['image']) :
                    $mediaCount++;
                endif;
            }

            if(get_sub_field('media')) : 
  ?>
                <div class="container area-dark container--no-padding">
                  <section>
                    <div class="group-container">
                      <div class="group group--left">
  <?php 
        $i=0;
        foreach(get_sub_field('media') as $media) {
            $image = wp_get_attachment_image_src($media['image'], false);
            $moduleClass = 'module module--1-1';

                  if($mediaCount == 1) :
                      $moduleClass = 'module module--2-1';
                  endif;
                  
                  if($i == 0) :
  ?>
                <div class="module module--2-1 module--text-pad module--dark module--visible">
                    <div class="module__text">
  <?php 
                    if(get_sub_field('headline')) : 
  ?>
                          <h2 class="underlined"><?php echo get_sub_field('headline');?></h2>
  <?php 
                    endif;
  ?>
                          <?php echo get_sub_field('text');?>
                    </div>
                </div>
  <?php
                  endif;

                  if($i == 0) :
  ?>
                      </div>
                        <div class="group group--right">
  <?php
                  endif;
  ?>
                          <div class="<?php echo $moduleClass;?>">
  <?php 
                  if($media['video']) : 
  ?>
                            <video controls poster="<?php echo get_template_directory_uri(); ?>/images/work/film_values/harish_poster_image.jpg" class="video-js vjs-default-skin page-video" controls width="100%" height="100%">
                              <source src="https://player.vimeo.com/external/88791772.sd.mp4?s=dc9ba217fd78b585bddab86b37b9888a&profile_id=112" type="video/mp4">
                             </video>
  <?php 
                    else : 
  ?>
                              <div class="ratio" style="background-image: url('<?php echo $image[0];?>"></div>
  <?php
                  endif;
  ?>
                          </div>
  <?php
                  if($mediaCount == 1) :
                      break;
                  endif; 
                    $i++;
        } 
  ?>
                      </div>
              </div>
            </section>
          </div>         
<?php
        endif;
?>

  <!-- text-image--image -->

  <?php
        elseif( get_row_layout() == 'text_image__image'):
            if(get_sub_field('media')) : 
  ?>
              <div class="container area-dark container--no-padding">
                <section>
                    <div class="group-container">
                    <div class="group group--left">
  <?php 
        $i=0;
              foreach(get_sub_field('media') as $media) { 
                  $image = wp_get_attachment_image_src($media['image'], false);
                  $video = $media['video'];
                  $moduleClass = 'module module--2-1';

                    if($i == 1) :
                      $moduleClass = 'module module--2-2';
                    endif;

                    if($i == 0) : 
  ?>
                      <div class="module module--2-1 module--text-pad module--dark module--visible">
                        <div class="module__text">
  <?php 
                      if(get_sub_field('headline')) : 
  ?>
                          <h2 class="underlined"><?php echo get_sub_field('headline');?></h2>
  <?php 
                      endif; 
                  $arrP = explode('</p>',  get_sub_field('text'));
                  $arrP[0] = str_replace('<p>', '<p class="first-para tag--work-title">', $arrP[0]);
                  echo implode('</p>', $arrP);
  ?>
                        </div>
                      </div>
  <?php
                    endif;

                    if($i == 1) : 
  ?>
                    </div>
                      <div class="group group--right">
  <?php 
                    endif;
                    
                    if($video) : 
  ?>
                        <div class="<?php $moduleClass;?> module--video">
                            <div class="ratio">
                                <video poster="<?php echo $image[0];?>" autoplay loop muted>
                                    <source src="<?php echo $video;?>" type="video/mp4">
                                </video>
                            </div>
                        </div> <!-- /end module -->
  <?php 
                      else : 
  ?>
                        <div class="<?php echo $moduleClass;?>">
                            <div class="ratio" style="background-image: url('<?php echo $image[0];?>"></div>
                        </div>
  <?php 
                    endif;
                $i++;
              } 
  ?>
                    </div>
                    </div>
                </section>
            </div>
  <?php
        endif;
  ?>

<!-- full vh video section -->

<?php 
  elseif(get_row_layout() == 'full_height_video'):
?>
    <div class="container full-height-video area-dark container--no-padding">
                              <video autoplay loop muted>
                                    <source src="<?php echo get_sub_field('video');?>" type="video/mp4">
                                </video>
    </div>



  <!-- mac headline -->

  <?php
        elseif(get_row_layout() == 'mac_headline'):
  ?>
                        <div class="container container--half-top container--fareshare-bg">
                          <div class="monitor-holder">
                              <img class="iphone" src="<?php echo get_template_directory_uri(); ?>/images/work/web_fare/web_fareshare_iphone.png" alt="">
                              <img class="monitor centre-image" src="<?php echo get_template_directory_uri(); ?>/images/monitor.png" alt="">
                              <div class="monitor-screen">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/work/web_fare/web_fareshare_gallery2_01_imacsmall.jpg" alt="" style="width: 100%; height: 100%;">
                              </div>
                          </div>
                          <section class="text-section">
  <?php
            if(get_sub_field('headline')):
  ?>

                              <h2><?php echo get_sub_field('headline');?></h2>
  <?php
            endif;
  ?>
                                  <div class="text-section__para">
  <?php
            if(get_sub_field('text')):
  ?>
                                  <p class="first-para tag--work-body"<?php echo get_sub_field('text');?></p>
  <?php
            endif;
  ?>
                                  </div>
                          </section> <!-- /end text-section -->
                      </div> <!-- /end container -->


    <!-- iphone gallery -->

  <?php
        elseif( get_row_layout() == 'iphone_gallery'):
          $entries = get_sub_field('entries');
              if(get_sub_field('background_image')) :
                $background = wp_get_attachment_image_src( get_sub_field('background_image'), false);
              endif;
              if($entries) :
  ?>
                    <div class="container container-iphone-gallery" <?php echo $background ? 'style="background-image: url('.$background[0].')"':'';?>>
  <?php 
              foreach($entries as $entry) :
                if($entry['image']) : 
  ?>
                        <div class="mobile-holder">
                            <img class="mobile-phone" src="<?php echo get_template_directory_uri();?>/images/mobile-phone.png" alt="">
                            <div class="mobile-screen">
                                <?php echo wp_get_attachment_image($entry['image'], false);?>
                            </div>
                        </div>
  <?php 
                endif;
              endforeach;
  ?>
                    </div>
  <?php
        endif;
  ?>

  <!-- screen slider -->

  <?php 
        elseif( get_row_layout() == 'screen_slider'):
          $images = get_sub_field('images');
            if(get_sub_field('background_image')) :
                $background = wp_get_attachment_image_src(get_sub_field('background_image'), false);
            endif;
            if($images) :
  ?>
                  <div class="container container--carousel container-screen-slider" <?php echo $background ? 'style="background-image: url('.$background[0].')"':'';?> >
                      <section class="carousel">

                        <img class="carousel-monitor centre-image" src="<?php echo get_template_directory_uri(); ?>/images/monitor.png" alt="">
                          <div class="carousel-images">
  <?php 
            $i=1;
            foreach($images as $image) :
  ?>
                            <div class="carousel-image <?php $i==1 ? ' selected':'';?>" style="background-image: url('<?php echo $image['url'];?>')"></div>
  <?php
              $i++;
            endforeach;
  ?>
                          </div> <!-- /end carousel-images -->
                            <div class="carousel-controls carousel-controls--imac">
  <?php 
            $i=1;
            foreach($images as $image) : 
  ?>
                                <div class="carousel-control carousel-control <?php  echo $i==1 ? ' selected':'';?>"></div>
  <?php
              $i++;
            endforeach;
  ?>
                            </div> <!-- /end carousel-controls -->
                          
                      </section>
                  </div>
  <?php 
        endif;
  ?>

<!-- image video -->

  <?php
        elseif( get_row_layout() == 'image_video'):
          $image = wp_get_attachment_image_src(get_sub_field('image'), false);
          $video = get_sub_field('video');
            if($image) :
  ?>
                  <div class="container container--no-padding <?php get_sub_field('padding_bottom') ? 'container--half-bot':'';?>">
  <?php 
              if($video) :
  ?>
                    <div class="group-container">
                        <div class="module module--16-9 module--video module--nozoom module--visible">
                            <div class="ratio">
                            <video controls poster="<?php $image[0];?>" class="video-js vjs-default-skin page-video" controls width="100%" height="100%">
                                    <source src="<?php echo $video;?>" type="video/mp4">
                            </video>
                            </div>
                        </div>
                    </div>
  <?php
                else : 
                  if( get_sub_field('image_full_size')) : 
  ?>
                            <img class="full-size" src="<?php echo $image[0];?>" alt="">
  <?php 
                    else : 
  ?>
                              <div class="module module--2-1 module--visible">
                                  <div class="ratio" style="background-image: url(<?php $image[0];?>)"></div>
                              </div>
  <?php
                  endif;
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

    <div class="group-container">
        <a class="project-navigation paginate_prev" href="../reliance"><span>&#8249;</span> Previous Project</a>
        <a class="project-navigation paginate_next" href="../bp-fll-stories">Next Project <span>&#8250;</span></a>
    </div>

<?php get_footer(); ?>

