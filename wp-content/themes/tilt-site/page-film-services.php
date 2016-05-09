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

get_header('about-item'); ?>



<div id="about_page" class="container container--double-side-pad area-dark container--mobile-header-spacing">
	<div class="text-container">
		<p class="first-para sans-serif"><strong class="highlight">FILM:</strong> TELLING STORIES ABOUT PEOPLE, PLACES & IDEAS.</p>
		<p class="sans-serif">Film comes alive in the spaces between the words. And, over the years, we have developed an in-house style that combines clarity of message with a distinctive visual touch. It’s an approach embraced by clients such as Barclays, ICAP and BP. Add to that our music videos, ads, short films and documentaries and you have a small but perfectly formed film department that continually produces stunning new work.</p>
	</div>
</div> <!-- /end container -->

<?php

	 $args = array(
		 'posts_per_page' => 4,
		 'order_by' => 'date',
		 'post_type' => 'post',
		 'post_status' => 'publish',
		 'category'         => '10',
	 );

	 $posts_array = get_posts( $args );
	 $post = $posts_array[0];
	 $postID = $post->ID;

	 if (has_post_thumbnail( $postID ) ){
		 $image = wp_get_attachment_image_src( get_post_thumbnail_id( $postID ), 'single-post-thumbnail' );
	 }

	 $filmposts = get_posts( $args );
	 $i = 0;
	 $j = 0;
	 $k = 0;
	 ?>


	<div class="container container--no-padding">

		<div class="group-container">

			<div class="group group--right">

				<div class="module module--2-1">
    				<div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/work_film_01_mr.jpg')"></div>
				</div>

			</div>

			<div class="group group--left">

				<div class="module module--2-1 module--text-pad module--dark module--mobile-double-height">
                    <div class="module__text">
                        <h2 class="underlined">NUGGET O' INFO</h2>
                        <p class="first-para tag--work-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>

                    </div>

                </div>

			</div> <!-- /end group -->

		</div> <!-- /end group-container -->



		<div class="group-container">

			<div class="group group--right">

				<div class="module module--2-1 module--text-pad module--dark module--mobile-double-height">
                    <div class="module__text">
                        <h2 class="underlined">NUGGET O' INFO</h2>
                        <p class="first-para tag--work-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>

                    </div>

                </div>

			</div>

			<div class="group group--left">

            	<div class="module module--2-1">
					<div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/work_film_01_mr.jpg')"></div>
				</div>

			</div> <!-- /end group -->

		</div> <!-- /end group-container -->



		<div class="group-container">

			<div class="container area-dark no-padding container--half-top container--half-bot">
			    <section class="text-section">
			        <h2>FILM NEWS</h2>
			    </section>
			</div>


		</div>



		<div class="group-container">

			<div class="group group--left">

				<?php

					foreach ( $filmposts as $post ) : setup_postdata( $post );

						if (has_post_thumbnail( $post->ID ) ):
							$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
						endif;


						if($i < 2) { ?>

							<a href="<?php echo the_permalink(); ?>">
								<div class="module module--1-1 area-dark news--icon">
									<div id="post=<?php the_ID();?>" class="overlay area-dark">
										<div class="overlay-text">
											<p class="tag--no-square">News</p>
											<h2><span><?php the_title( ); ?></span></h2>
										</div> <!-- /end overlay-text -->
									</div> <!-- /end overlay -->
									<div class="ratio" style="background-image: url('<?php echo $image[0]; ?>')"></div>
								</div>
							</a><?php



						}

						$i++;

						endforeach;
						wp_reset_postdata();

					?>

			</div>



			<div class="group group--right">




				<?php
					foreach ( $filmposts as $post ) : setup_postdata( $post );

						if (has_post_thumbnail( $post->ID ) ):
							$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
						endif;


						if($j > 1 && $j < 5) { ?>

							<a href="<?php echo the_permalink(); ?>">
								<div class="module module--1-1 area-dark news--icon">
									<div id="post=<?php the_ID();?>" class="overlay area-dark">
										<div class="overlay-text">
											<p class="tag--no-square">News</p>
											<h2><span><?php the_title( ); ?></span></h2>
										</div> <!-- /end overlay-text -->
									</div> <!-- /end overlay -->
									<div class="ratio" style="background-image: url('<?php echo $image[0]; ?>')"></div>
								</div>
							</a><?php



						};

						$j++;

						endforeach;
						wp_reset_postdata();?>




			</div>


		</div>

	</div>

	<div class="container container--double-side-pad area-dark">
		<div class="text-container center">
			<a class="cube--link" href="<?php echo site_url(); ?>/work#film">
				<div class="cube about--cube">
					<div class="cube--front">
						<p class="sans-serif button"><span>SEE</span> OUR FILM WORK</p>
					</div>
					<div class="cube--top">
						<p class="sans-serif button"><span>SEE</span> OUR FILM WORK</p>
					</div>
				</div>
			</a>
		</div>
	</div> <!-- /end container -->


</div>




<?php get_footer(); ?>
