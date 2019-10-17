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

$work_groups = get_field('work_items');

get_header(); ?>

<div id="services--list" class="container container--header container--work-list">
 <p> Filter work by: </p>
 <a class='list-all' href="/work">All</a>
 <a class="list-web" href="/web">Web</a>
 <a class="list-motion" href="/motion">Motion</a>
 <a class="list-film" href="/film">Film</a>
</div>

<!-- All work overview -->

<?php
$entries_left = array(1);
$entries_right = array(0,2);
?>
<div class="work-wrapper">
<?php if($work_groups) : ?>
 <?php foreach($work_groups as $work_group) : ?>

  <?php if($work_group['work_entries']) : ?>
   <div class="work-container container container--no-padding">

     <div class="group-container">

       <div class="module module--2-1  module--dark module--mobile-double-height">
        <div class="module__text">
          <div>
             <h2 class="underlined"><?= $work_group['work_headline'];?></h2>
             <p class="tag--work-title"><?= $work_group['work_text'];?></p>

             <a class="cube--link" href="<?= $work_group['work_link'];?>">
              <div class="cube">
               <div class="cube--front cube--front__no-bg">
                <p class="sans-serif">All <?php echo $work_group['work_headline']?> work</p>
              </div>
              <div class="cube--top cube--top__no-bg">
                <p class="sans-serif">All <?php echo $work_group['work_headline']?> work</p>
              </div>
            </div>
          </a>
        </div>
    </div>

  </div>

  <?php foreach($work_group['work_entries'] as $k => $work_item) : ?>
    <?php if(in_array($k, $entries_left)) : ?>
     <?php
     $link = get_permalink($work_item['work_item_post']->ID);
     $arrImage = wp_get_attachment_image_src($work_item['work_item_image'], '');
     ?>
     <div class="module area-dark module--2-1">
      <a href="<?= $link;?>">
       <div class="overlay area-dark">
        <div class="overlay-text">
          <p class="project_name"><?= $work_item['work_item_headline2'];?></p>
          <h2 class="entry-title"><?= $work_item['work_item_headline'];?></h2>
          <?php if($work_item['work_item_text']): ?>
            <p class="excerpt"><?= $work_item['work_item_text'];?></p>
          <?php endif;?>
        </div>
      </div>
      <div class="ratio" style="background-image: url('<?= $arrImage[0];?>')">
      </div>
    </a>
  </div>
<?php endif;?>
<?php endforeach;?>


 <?php foreach($work_group['work_entries'] as $k => $work_item) : ?>
  <?php if(in_array($k, $entries_right)) : ?>
   <?php
   $link = get_permalink($work_item['work_item_post']->ID);
   $arrImage = wp_get_attachment_image_src($work_item['work_item_image'], '');
   ?>
   <div class="module area-dark module--2-1">
    <a href="<?= $link;?>">
     <div class="overlay area-dark">
      <div class="overlay-text">
        <p class="project_name"><?= $work_item['work_item_headline2'];?></p>
        <h2 class="entry-title"><?= $work_item['work_item_headline'];?></h2>
        <?php if($work_item['work_item_text']): ?>
          <p class="excerpt"><?= $work_item['work_item_text'];?></p>
        <?php endif;?>
      </div>
    </div>
    <div class="ratio" style="background-image: url('<?= $arrImage[0];?>')">
    </div>
  </a>
</div>
<?php endif;?>
<?php endforeach;?>


</div>

</div>
<?php endif;?>

<?php endforeach;?>

<?php endif;?>

<!-- /end container -->

<div class="showreel area-dark">
 <div class="embed-container">
  <iframe src="https://player.vimeo.com/video/139889786" width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
</div>
</div>
</div>

            <div class="new_client_logos container area-dark">
                <h2> Featured Clients</h2>
                    <div class="logos">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logos/1_bp.png" alt="bp logo" />
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logos/2_bbc.png" alt="bbc logo" />
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logos/20_Deloitte_logo.png" alt="Deloitte logo" />
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logos/10_barclays.png" alt="barclays bank logo" />
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logos/5_nick.png" alt="Nickelodeon logo" />
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logos/6_ford.png" alt="ford logo" />
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logos/19_Bupa_logo.png" alt="Bupa logo" />
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logos/17_Reuters_logo.png" alt="Reuters logo" />
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logos/13_sdnp.png" alt="southdowns national park logo" />
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logos/16_Open-Unievrsity_logo.png" alt="open university logo" />
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logos/4_bnp.png" alt="bnp paribas logo" />
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logos/11_sainos.png" alt="Sainsburys logo" />
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logos/12_rb.png" alt="redbull logo" />
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logos/18_Shell_logo.png" alt="Shell logo" />
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logos/14_land_rover.png" alt="land rover logo" />
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logos/15_02.png" alt="o2 mobile network logo" />
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logos/9_alzheimers.png" alt="alzheimers research UK logo" />
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logos/7_visit_brighton.png" alt="visit brighton logo" />
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logos/8_tui.png" alt="Tui logo" />
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logos/3_a&o.png" alt="Allen and Overy logo" />
                    </div>
            </div>

</div>

<?php get_footer(); ?>
