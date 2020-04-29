<?php
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

<header class="about-page">
	<div class="module module--16-5 module--video module--visible">
		<div class="ratio">
			<video id="about-page--video" poster="<?php echo get_template_directory_uri(); ?>/images/contact_poster.jpg" autoplay loop muted>
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


	<div class="container container--double-side-pad area-dark">
		<div class="text-container first-para sans-serif">

			<?php echo $header; ?>
			<?php echo $header_text; ?>

		</div>
	</div> <!-- /end container -->

<?php 
endif; 

endwhile;
endif;
?>

	<section>
		<div class="about-full-height-video container--no-padding looping-video">

			<video id="about-page--video" poster="<?php echo get_template_directory_uri(); ?>/images/contact_poster.jpg" autoplay loop muted>
				<source src="https://player.vimeo.com/external/141399412.hd.mp4?s=3f1574fa69a9ae469f325e2b05972a6e&profile_id=113" type="video/mp4">
			</video>

				<div class="about-video-overlay">
					<div class="text-container">
					<?php echo get_field ('video_overlay'); ?>
					</div>
				</div>	
			</div>

		</section>

	<section>
		<div class="about-text-container container--no-padding area-dark">
			<div class="text-container">
				<?php echo get_field ('text_section'); ?>
			</div>
		</div>	
	</section>


		<section>
			<div class="group-container">
				<div class="group group--left">
					<div class="module module--2-1">

						<?php
					// check if the repeater field has rows of data
						if( have_rows('about_image_bar') ):
					 	// loop through the rows of data
							while ( have_rows('about_image_bar') ) : the_row();
					        // display a sub field value
								?>
								<img class="ratio" src="<?php echo the_sub_field('about_image_left'); ?>">
								<?php
							endwhile;
						else :
					    // no rows found
						endif;
						?>

					</div>
				</div>

				<div class="group group--right">
					<div class="module module--2-1">

						<?php
					// check if the repeater field has rows of data
						if( have_rows('about_image_bar') ):
					 	// loop through the rows of data
							while ( have_rows('about_image_bar') ) : the_row();
					        // display a sub field value
								?>
								<img class="ratio" src="<?php echo the_sub_field('about_image_right'); ?>">
								<?php
							endwhile;
						else :
					    // no rows found
						endif;
						?>

					</div>
				</div>

			</div>
		</section>

		<div class="container container--double-side-pad area-dark">
			<div class="text-container center">

				<?php
					// check if the repeater field has rows of data
				if( have_rows('meet_the_team') ):
					 	// loop through the rows of data
					while ( have_rows('meet_the_team') ) : the_row();
					        // display a sub field value
						?>
						<?php echo the_sub_field('meet_heading'); ?>
						<?php
						echo the_sub_field('meet_content');
						?>
						<a class="cube--link" href="<?php echo site_url(); ?>/team">
							<div class="cube about--cube">
								<div class="cube--front sans-serif button">
									<?php echo the_sub_field('meet_button'); ?>
								</div>
								<div class="cube--top sans-serif button">
									<?php echo the_sub_field('meet_button'); ?>
								</div>
							</div>
						</a>
						<?php
					endwhile;
				else :
					    // no rows found
				endif;
				?>
			</div>
		</div> <!-- /end container -->


		<section>
			<div class="group-container">
				<div class="group group--left">
					<div class="module module--2-1">

						<?php
					// check if the repeater field has rows of data
						if( have_rows('about_image_bar_bottom') ):
					 	// loop through the rows of data
							while ( have_rows('about_image_bar_bottom') ) : the_row();
					        // display a sub field value
								?>
								<img class="ratio" src="<?php echo the_sub_field('about_image_left_bottom'); ?>">
								<?php
							endwhile;
						else :
					    // no rows found
						endif;
						?>

					</div>
				</div>

				<div class="group group--right">
					<div class="module module--2-1">

						<?php
					// check if the repeater field has rows of data
						if( have_rows('about_image_bar_bottom') ):
					 	// loop through the rows of data
							while ( have_rows('about_image_bar_bottom') ) : the_row();
					        // display a sub field value
								?>
								<img class="ratio" src="<?php echo the_sub_field('about_image_right_bottom'); ?>">
								<?php
							endwhile;
						else :
					    // no rows found
						endif;
						?>

					</div>
				</div>

			</div>
		</section>




	</div>



	<?php get_footer(); ?>
