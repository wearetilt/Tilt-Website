<!-- <?php
/*
Template Name: About page
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

<div class="about-page-wrapper">

	<header class="about-page">
		<div class="module module--16-5 module--video module--visible">
			<div class="ratio">
				<video id="about-page--video" class="vjs-default-skin" autoplay loop muted playsinline poster="<?php echo get_template_directory_uri(); ?>/images/contact_poster.jpg">
					<source src="https://player.vimeo.com/external/141399412.hd.mp4?s=3f1574fa69a9ae469f325e2b05972a6e&profile_id=113" type="video/mp4">
					</video>
				</div>
			</div> <!-- /end module -->
	</header>


	<?php
    // check if the repeater field has rows of data
	if( have_rows('about_content') ):
      // loop through the rows of data
		while ( have_rows('about_content') ) : the_row();
        // display a sub field value
			?>

			<?php 
			if( get_row_layout() == 'header_section'):

				$header = get_sub_field('header_standfirst');
				$header_text = get_sub_field('header_text');
				?>


				<div class="about-header-container container area-dark">
					<div class="text-container first-para sans-serif">

						<?php echo $header; ?>

						<div class="header-content">
							<?php echo $header_text; ?>
						</div>

					</div>
				</div> <!-- /end container -->

				<?php 

			elseif( get_row_layout() == 'full_height_video' ) :

				$heading = get_sub_field('video_overlay_heading');
				$video_overlay = get_sub_field('video_overlay');
				?>

				<section>
					<div class="about-full-height-video container--no-padding looping-video">

						<div class="video-container">

						<video id="full--video" class="vjs-default-skin" autoplay loop muted playsinline poster="<?php echo get_template_directory_uri(); ?>/images/contact_poster.jpg">
							<source src="https://player.vimeo.com/external/415841167.hd.mp4?s=272187621b68ad261884734ea1b4f88c67d22544&profile_id=175" type="video/mp4">
							</video>
						</div>

							<div class="about-video-overlay">
								<div class="text-container">
									<div class="text" id="text">
									<p><?php echo $heading; ?></p>
									<?php echo $video_overlay; ?>
									</div>
								</div>
							</div>	
						</div>

					</section>

					<?php 
				elseif( get_row_layout() == 'full_height_text_section') :

					$heading = get_sub_field('section_header');
					$content = get_sub_field('text_content');

					?>

					<section>
						<div class="about-text-container container--no-padding area-dark">
							<div class="text-container">
								<div class="text">
									<p><?php echo $heading; ?></p>
									<?php echo $content; ?>
								</div>
							</div>
						</div>	
					</section>



					<?php 
				elseif( get_row_layout() == 'content_row'):

					$left = get_sub_field('left_content_area');
					$right = get_sub_field('right_content_area');

					$leftProject = $left->ID;
					$rightProject = $right->ID;

					$tax_right = wp_get_post_terms( $rightProject, 'work' );
                    $tax_left = wp_get_post_terms( $leftProject, 'work' );


					$alt_left = get_post_meta($left, '_wp_attachment_image_alt', true);
					$alt_right = get_post_meta($right, '_wp_attachment_image_alt', true);


					?>

					<section>
						<div class="about-related-container container--no-padding area-dark">


							<div class="left-container">
								<a href="<?php echo get_permalink($leftProject); ?>"><img src="<?php echo get_the_post_thumbnail_url($left);?>" alt="<?php echo $alt_left; ?>"></a>

								<div class="related-titles">
                            <?php if($tax_left[0]->name != ''):?>
                              <p><?php echo $tax_left[0]->name; ?></p>
                              <?php else: endif;?>

                              <h2><?php echo get_the_title($left);?></h2>
                              <p><?php echo get_the_excerpt($left); ?></p>
                          </div>

                      </div>

                      <div class="right-container">
                      	<a href="<?php echo get_permalink($rightProject); ?>"><img src="<?php echo get_the_post_thumbnail_url($right);?>" alt="<?php echo $alt_right; ?>"></a>

                      	<div class="related-titles">
                            <?php if($tax_left[0]->name != ''):?>
                              <p><?php echo $tax_left[0]->name; ?></p>
                              <?php else: endif;?>

                              <h2><?php echo get_the_title($right);?></h2>
                              <p><?php echo get_the_excerpt($right); ?></p>
                          </div>

                      </div>

                  </div>	
              </section>

		<?php 
        elseif(get_row_layout() == 'work_button'):
          $our_work = get_sub_field('our_work');
          ?>

          <div class="about-work-button area-dark">

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

          endif; 

      endwhile;
  endif;
  ?>




</div>

</div>

<?php get_footer(); ?>
<?php get_footer(); ?> -->