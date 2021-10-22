<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
get_header('news'); ?>
<?php $post_id = get_the_id();

$attachedImg = '';
if(has_post_thumbnail()){
  $attachmentID = get_post_thumbnail_id();
  $attachedImg = wp_get_attachment_image_src($attachmentID);
}



?>
<header id="news" class="work-item area-dark" style="background-image: url('<?php the_field('header_image'); ?>');"></header>


<div class="news-wrapper">

  <div class="container--header container--header-news area-dark">
    <div class="news-wrapper--header">
      <div class="header-title">
        <h1><?php the_title(); ?></h1>
        <h2 class="light news-date"><?php echo get_the_date('d M y'); ?> <?php $post_author_id = get_post_field( 'post_author', $post_id );?><span class="author-name"><?php echo get_the_author_meta('display_name', $post_author_id);?></span></h2>
      </div>
    </div>
  </div>

  <div class="news-container intro">
            <div id="social">
              <h2 class="light news-share">SHARE:</h2>

              <a href="mailto:?subject=&body=<?php echo get_the_permalink(); ?>"><svg class="f-ico_mail"> <use xlink:href="#mail"></use></svg></a>

              <a href="https://twitter.com/intent/tweet?text=<?php echo urlencode('Currently reading '. get_the_title() .': '. wp_get_shortlink()); ?>" target="_blank"><svg class="f-ico_twitter"> <use xlink:href="#twitter"></use></svg></a>
              
              <a href="http://www.facebook.com/sharer.php?u=<?php echo get_post_permalink(); ?>" target="_blank"><svg class="f-ico_facebook"> <use xlink:href="#facebook"></use></svg></a><script src='http://static.ak.fbcdn.net/connect.php/js/FB.Share' type='text/javascript'></script>
            
            </div>
    <div class="intro-text">
      <?php the_field('standfirst_text'); ?>
    </div>
  </div>

  <?php if(get_field('image_1')) { ?>
    <div id="visual_content">
      <div class="container container--no-padding area-dark">
        <div class="group-container">
          <div class="group group--left">
            <div class="module module--2-2">
              <div class="ratio" style="background-image: url('<?php the_field('image_1'); ?>');"></div>
            </div>
          </div>
          <div class="group group--right">
            <div class="module module--1-1">
              <div class="ratio" style="background-image: url('<?php the_field('image_2'); ?>');"></div>
            </div>
            <div class="module module--1-1">
              <div class="ratio" style="background-image: url('<?php the_field('image_3'); ?>');"></div>
            </div>
            <div class="module module--2-1">
              <div class="ratio" style="background-image: url('<?php the_field('image_4'); ?>');"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

  <?php } ?>

<!-- pre-existing content from older posts and if wordpress standard cms is used -->

  <!-- SINGLE IMAGE - if the single image field is populated then show it here -->

  <?php if(get_field('single_image')) { ?>
    <div id="visual_content">
      <div class="container container--no-padding area-dark">
        <img src="<?php the_field('single_image'); ?>" alt="<?php the_title(); ?>" width="100%" />
      </div>
    </div>
  <?php } ?>

  <!-- VIDEO - if the video field is populated then show it here -->

  <?php if(get_field('vimeo_id') || get_field('vimeo_id_two') || get_field('youtube_id')) { ?>
    <div id="visual_content">
  <?php } ?>

    <?php if(get_field('vimeo_id')) { ?>
      <div class="container--newsvideo">
        <div class="group-container">
          <div class="module--16-9 module--video module--nozoom">
            <div class="ratio">
              <iframe src="https://player.vimeo.com/video/<?php the_field('vimeo_id'); ?>?color=FF406A&title=0&byline=0&portrait=0 " width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
              
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
    
  <?php if(get_field('vimeo_id_two')) { ?>
  
    <div class="container--newsvideo">
      <div class="group-container">
        <div class="module--16-9 module--video module--nozoom">
          <div class="ratio">
            <iframe src="https://player.vimeo.com/video/<?php the_field('vimeo_id_two'); ?>?color=FF406A&title=0&byline=0&portrait=0" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>

  <?php } ?>

  <?php if(get_field('youtube_id')) { ?>

    <div class="container--newsvideo">
      <div class="group-container">
        <div class="module--16-9 module--video module--nozoom">
          <div class="ratio">
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php the_field('youtube_id'); ?>" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>

  <?php } ?>

  <?php if(get_field('vimeo_id') || get_field('vimeo_id_two') || get_field('youtube_id')) { ?>
    </div>
  <?php } ?>

  <!-- BODY COPY - if the video field is populated then show it here -->

  <?php if(get_field('main_content_area')) { ?>
    <div id="visual_content">
      <div class="news-container news--footer">
        <p><?php the_field('main_content_area'); ?></p>
      </div>
    </div>
  <?php } ?>

  <!-- BODY COPY - NEW ACF field content -->

  <?php
    // check if the repeater field has rows of data
  if( have_rows('post_content') ):
      // loop through the rows of data
    while ( have_rows('post_content') ) : the_row();
        // display a sub field value
      ?>

      <!-- Content block -->

      <?php
      if( get_row_layout() == 'content_block'):
        ?>
        <div class="news-container">
          <?php echo the_sub_field('content'); ?>
        </div>

        <!-- Photo gallery block -->
        <?php
      elseif( get_row_layout() == 'gallery'):
        $galleryLayout = get_sub_field('layout');
        $arrLayouts = array(
          1 => array('2-2', '//2-1', '2-1'),
          2 => array('2-1', '2-1', '//2-2'),
          3 => array('1-1', '1-1'),
        );
        $background = get_sub_field('background');

        if(!$background) :
          $background = 'dark';
        endif;

        if(get_sub_field('images')) :
          ?>

          <div data-gallery="<?php $galleryLayout;?>" class="news-container gallery-container area-<?php echo $background;?> <?php echo get_sub_field('padding') ? 'container--padding':'container--no-padding';?> <?php echo get_sub_field('no_padding_bottom') ? 'container--no-padding-bottom' : '';?>">
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
                  ?>
                  <div class="<?php echo $moduleClass;?>">
                    <div class="ratio" style="background-image: url('<?php echo $image['url'];?>"></div>
                  </div>
                  <?php

                  $i++;
                }
                ?>

              </div>
            </div>
          </div>
        <?php endif; ?>

        <!-- video block -->
        <?php 
        elseif(get_row_layout() == 'video_block'): ?>
            <div class="news-container gallery-container area-dark">
          <?php if(get_sub_field('vimeo') || get_sub_field('youtube')) { ?>

          <?php } ?>

            <?php if(get_sub_field('vimeo')) { ?>
              <div class="container--newsvideo">
                <div class="group-container">
                  <div class="module--16-9 module--video module--nozoom">
                    <div class="ratio">
                      <iframe src="https://player.vimeo.com/video/<?php echo get_sub_field('vimeo'); ?>?color=FF406A&title=0&byline=0&portrait=0 " width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                  </div>
                </div>
              </div>
            <?php } ?>

            <?php if(get_sub_field('youtube')) { ?>
              <div class="container--newsvideo">
                <div class="group-container">
                  <div class="module--16-9 module--video module--nozoom">
                    <div class="ratio">
                      <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo get_sub_field('youtube'); ?>" frameborder="0" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>
              </div>
            <?php } ?>

          </div>

          <?php

        endif;
      endwhile;
    endif;
    ?>

  <div class="news-container footer-social">
            <div id="footer-social">
              <h2 class="light news-share">SHARE:</h2>

              <a href="mailto:?subject=&body=<?php echo get_the_permalink(); ?>"><svg class="f-ico_mail"> <use xlink:href="#mail"></use></svg></a>

              <a href="https://twitter.com/intent/tweet?text=<?php echo urlencode('Currently reading '. get_the_title() .': '. wp_get_shortlink()); ?>" target="_blank"><svg class="f-ico_twitter"> <use xlink:href="#twitter"></use></svg></a>
              
              <a href="http://www.facebook.com/sharer.php?u=<?php get_post_permalink(); ?>" target="_blank"><svg class="f-ico_facebook"> <use xlink:href="#facebook"></use></svg></a><script src='http://static.ak.fbcdn.net/connect.php/js/FB.Share' type='text/javascript'></script>
            </div>
  </div>

</div>


</div>

<?php get_footer(); ?>
