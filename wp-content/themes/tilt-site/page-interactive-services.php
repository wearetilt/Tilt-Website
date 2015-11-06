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

get_header(); ?>



<div class="container container--double-side-pad area-dark">
	<div class="text-container">
		<p class="first-para sans-serif"><strong class="highlight">INTERACTIVE:</strong> THINKING BEYOND ONE-WAY TRAFFIC. We see digital as a tool; it’s there to be used, prodded, poked and played with. Two-way traffic between a user and a brand.</p>
		<p class="sans-serif">Our award-winning interactive work has helped brands from O2 to Nickelodeon engage their audiences. Whether creating virtual science labs, taking users on a journey into the worlds of wolves and sharks, or inspiring thousands of kids to get coding – we believe in the power of interactive design to bring ideas to life.</p>
	</div>
</div> <!-- /end container -->

<?php

	 $args = array(
		 'posts_per_page' => 3,
		 'order_by' => 'date',
		 'post_type' => 'post',
		 'post_status' => 'publish',
		 'category'         => '15',
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
		
			<div class="group group--left">
			
				<div class="module module--2-2">
                    <a href="<?php get_site_url(); ?>alzheimers">
    					<div class="overlay area-dark">
    						<div class="overlay-text">
    							<p class="tag tag--work-body">Work</p>
    							<h2>Alzheimer's <br />
    								<span class="underlined light">The Lab</span>
    							</h2>
    							<p class="sans-serif">How can you move people to really understand Alzheimer’s Disease?</p>
    						</div> <!-- /end overlay-text -->
    					</div> <!-- /end overlay -->
    					<div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/work_int_04_ls.jpg')">
    					</div>
                    </a>
				</div>
				
				
				<div id="twitter__module" class="module module--1-1 area-dark module--dark">
					<div class="module__text home--tweet">
						<?php echo do_shortcode( "[rotatingtweets include_rts='1' show_meta_reply_retweet_favorite='1' official_format='2' offset='2' search='from:wearetilt' tweet_count='3' show_follow='1' timeout='3000' rotation_type='fade' official_format_override='1']" ) ?>
	
					</div> <!-- /end text-section -->
				</div>
				
				
				<?php 
				foreach ( $filmposts as $post ) : setup_postdata( $post ); 
					
					if (has_post_thumbnail( $post->ID ) ):
						$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
					endif; 
					
					
					if($i == 0) { ?>
					
						<a href="<?php echo the_permalink(); ?>">
							<div class="module module--1-1 area-dark news--icon">
								<div id="post=<?php the_ID();?>" class="overlay area-dark">
									<div class="overlay-text">
										<p class="tag tag--home-title"><?php echo get_the_date('d M Y'); ?></p>
										<h2><span class="underlined"><?php the_title( ); ?></span></h2>
									</div> <!-- /end overlay-text -->
								</div> <!-- /end overlay -->
								<div class="ratio" style="background-image: url('<?php echo $image[0]; ?>')"></div>
							</div>
						</a><?php
						
						
					
					};
					
					$i++;
					
					endforeach; 
					wp_reset_postdata();?>
				
				
			</div>
		
	
	
			<div class="group group--right">
				
				<div id="twitter__module" class="module module--1-1 module--dark">
					<div class="module__text home--tweet">
						<?php echo do_shortcode( "[rotatingtweets include_rts='1' show_meta_reply_retweet_favorite='1' official_format='2' search='from:wearetilt' tweet_count='3' show_follow='1' timeout='3000' rotation_type='fade' official_format_override='1']" ) ?>
		
					</div> <!-- /end text-section -->
				</div>
				
				
				<?php 
			foreach ( $filmposts as $post ) : setup_postdata( $post ); 
				
				if (has_post_thumbnail( $post->ID ) ):
					$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
				endif; 
				
				
				if($j == 1) { ?>
				
					<a href="<?php echo the_permalink(); ?>">
						<div class="module module--1-1 area-dark news--icon">
							<div id="post=<?php the_ID();?>" class="overlay area-dark">
								<div class="overlay-text">
									<p class="tag tag--home-title"><?php echo get_the_date('d M Y'); ?></p>
									<h2><span class="underlined"><?php the_title( ); ?></span></h2>
								</div> <!-- /end overlay-text -->
							</div> <!-- /end overlay -->
							<div class="ratio" style="background-image: url('<?php echo $image[0]; ?>')"></div>
						</div>
					</a><?php
					
					
				
				};
				
				$j++;
				
				endforeach; 
				wp_reset_postdata();?>
				
				
				<?php 
			foreach ( $filmposts as $post ) : setup_postdata( $post ); 
				
				if (has_post_thumbnail( $post->ID ) ):
					$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
				endif; 
				
				
				if($k == 2) { ?>
				
					<a href="<?php echo the_permalink(); ?>">
						<div class="module module--2-2 area-dark news--icon">
							<div id="post=<?php the_ID();?>" class="overlay area-dark">
								<div class="overlay-text">
									<p class="tag tag--home-title"><?php echo get_the_date('d M Y'); ?></p>
									<h2><span class="underlined"><?php the_title( ); ?></span></h2>
								</div> <!-- /end overlay-text -->
							</div> <!-- /end overlay -->
							<div class="ratio" style="background-image: url('<?php echo $image[0]; ?>')"></div>
						</div>
					</a><?php
					
					
				
				};
				
				$k++;
				
				endforeach; 
				wp_reset_postdata();?>
				
			
			</div>
		
		
		</div>
	
	</div>
	
	<div class="container container--double-side-pad area-dark">
		<div class="text-container center">
			<a class="cube--link" href="<?php echo site_url(); ?>/work#interactive">
				<div class="cube about--cube">
					<div class="cube--front">
						<p class="sans-serif button">SEE OUR INTERACTIVE WORK</p>
					</div>
					<div class="cub--top">
						<p class="sans-serif button">SEE OUR INTERACTIVE WORK</p>
					</div>
				</div>
			</a>
		</div>
	</div> <!-- /end container -->

</div>

	
	
	
<?php get_footer(); ?>
