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
  <p> View work by: </p>
  <a class='list-all' href="/work">All</a>
  <a class="list-web" href="/web">Web</a>
  <a class="list-motion" href="/motion">Motion</a>
  <a class="list-film" href="/film">Film</a>
</div>

<!-- All work overview -->

<?php
$entries_left = array(1);
$entries_right = array(0, 2);
?>
<div class="work-wrapper">
  <?php if ($work_groups) : ?>
    <?php foreach ($work_groups as $work_group) : ?>

      <?php if ($work_group['work_entries']) : ?>
        <div class="work-container container container--no-padding">

          <div class="group-container">

            <div class="module module--2-1  module--dark module--mobile-double-height">
              <div class="module__text">
                <div>
                  <h2 class="underlined"><?= $work_group['work_headline']; ?></h2>
                  <p class="tag--work-title"><?= $work_group['work_text']; ?></p>

                  <a class="cube--link" href="<?= $work_group['work_link']; ?>">
                    <div class="cube">
                      <div class="cube--front cube--front__no-bg">
                        <p class="sans-serif">All <?php echo $work_group['work_headline'] ?> work</p>
                      </div>
                      <div class="cube--top cube--top__no-bg">
                        <p class="sans-serif">All <?php echo $work_group['work_headline'] ?> work</p>
                      </div>
                    </div>
                  </a>
                </div>
              </div>

            </div>

            <?php foreach ($work_group['work_entries'] as $k => $work_item) : ?>
              <?php if (in_array($k, $entries_left)) : ?>
                <?php
                $link = get_permalink($work_item['work_item_post']->ID);
                $arrImage = wp_get_attachment_image_src($work_item['work_item_image'], '');
                ?>
                <div class="module area-dark module--2-1">
                  <a href="<?= $link; ?>">
                    <div class="overlay area-dark">
                      <div class="overlay-text">
                        <p class="project_name"><?= $work_item['work_item_headline2']; ?></p>
                        <h2 class="entry-title"><?= $work_item['work_item_headline']; ?></h2>
                        <?php if ($work_item['work_item_text']) : ?>
                          <p class="excerpt"><?= $work_item['work_item_text']; ?></p>
                        <?php endif; ?>
                      </div>
                    </div>
                    <div class="ratio" style="background-image: url('<?= $arrImage[0]; ?>')">
                    </div>
                  </a>
                </div>
              <?php endif; ?>
            <?php endforeach; ?>


            <?php foreach ($work_group['work_entries'] as $k => $work_item) : ?>
              <?php if (in_array($k, $entries_right)) : ?>
                <?php
                $link = get_permalink($work_item['work_item_post']->ID);
                $arrImage = wp_get_attachment_image_src($work_item['work_item_image'], '');
                ?>
                <div class="module area-dark module--2-1">
                  <a href="<?= $link; ?>">
                    <div class="overlay area-dark">
                      <div class="overlay-text">
                        <p class="project_name"><?= $work_item['work_item_headline2']; ?></p>
                        <h2 class="entry-title"><?= $work_item['work_item_headline']; ?></h2>
                        <?php if ($work_item['work_item_text']) : ?>
                          <p class="excerpt"><?= $work_item['work_item_text']; ?></p>
                        <?php endif; ?>
                      </div>
                    </div>
                    <div class="ratio" style="background-image: url('<?= $arrImage[0]; ?>')">
                    </div>
                  </a>
                </div>
              <?php endif; ?>
            <?php endforeach; ?>


          </div>

        </div>
      <?php endif; ?>

    <?php endforeach; ?>

  <?php endif; ?>

  <!-- /end container -->
</div>


<div class="new_client_logos container area-dark">
  <h2> Featured Clients</h2>
  <div class="logos">
    <img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo_1_vodafone.png" alt="Vodafone logo" />
    <img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo_2_bbc.png" alt="bbc logo" />
    <img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo_3_barclays.png" alt="Barclays bank logo" />
    <img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo_4_deloitte.png" alt="Deloitte logo" />
    <img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo_5_nickelodeon.png" alt="Nickelodeon logo" />
    <img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo_6_bupa.png" alt="BUPA logo" />
    <img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo_7_reuters.png" alt="Reuters logo" />
    <img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo_8_diageo.png" alt="Diageo logo" />
    <img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo_9_open_uni.png" alt="Open University logo" />
    <img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo_10_kpmg.png" alt="KPMG logo" />
    <img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo_11_sdnp.png" alt="SDNP logo" />
    <img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo_12_ab_world_foods.png" alt="AB World Foods logo" />
    <img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo_13_frontline_aids.png" alt="Frontline Aids logo" />
    <img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo_14_ivf_network.png" alt="IVF Network logo" />
    <img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo_15_novartis.png" alt="Novartis logo" />
    <img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo_16_raindance.png" alt="Raindance logo" />
    <img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo_17_roja.png" alt="Roja logo" />
    <img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo_18_smiths.png" alt="Smiths logo" />
    <img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo_19_bp.png" alt="BP logo" />
    <img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo_20_npower.png" alt="NPower logo" />
  </div>
  <div class="logos-mobile">
      <div><img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo_1_vodafone.png" alt="Vodafone logo"/>
      </div>
      <div><img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo_2_bbc.png" alt="bbc logo"/></div>
      <div><img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo_3_barclays.png"
                alt="Barclays bank logo"/></div>
      <div><img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo_4_deloitte.png" alt="Deloitte logo"/>
      </div>
      <div><img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo_5_nickelodeon.png"
                alt="Nickelodeon logo"/></div>
      <div><img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo_6_bupa.png" alt="BUPA logo"/></div>
      <div><img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo_7_reuters.png" alt="Reuters logo"/>
      </div>
      <div><img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo_8_diageo.png" alt="Diageo logo"/>
      </div>
      <div><img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo_9_open_uni.png"
                alt="Open University logo"/></div>
      <div><img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo_10_kpmg.png" alt="KPMG logo"/></div>
      <div><img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo_11_sdnp.png" alt="SDNP logo"/></div>
      <div><img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo_12_ab_world_foods.png"
                alt="AB World Foods logo"/></div>
      <div><img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo_13_frontline_aids.png"
                alt="Frontline Aids logo"/></div>
      <div><img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo_14_ivf_network.png"
                alt="IVF Network logo"/></div>
      <div><img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo_15_novartis.png"
                alt="Novartis logo"/></div>
      <div><img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo_16_raindance.png"
                alt="Raindance logo"/></div>
      <div><img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo_17_roja.png" alt="Roja logo"/></div>
      <div><img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo_18_smiths.png" alt="Smiths logo"/>
      </div>
      <div><img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo_19_bp.png" alt="BP logo"/></div>
      <div><img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo_20_npower.png" alt="NPower logo"/>
      </div>
  </div>
</div>

</div>

<?php get_footer(); ?>