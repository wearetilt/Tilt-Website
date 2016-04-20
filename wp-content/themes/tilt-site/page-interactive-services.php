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
		<p class="first-para sans-serif"><strong class="highlight">INTERACTIVE:</strong> THINKING BEYOND ONE-WAY TRAFFIC.</p>
		<p class="sans-serif">We see digital as a tool; it’s there to be used, prodded, poked and played with. Two-way traffic between a user and a brand. Our award-winning interactive work has helped businesses from O2 to Nickelodeon engage their audiences. Whether creating virtual science labs, or inspiring thousands of kids to get coding – we believe in the power of interactive design to bring ideas to life.</p>
	</div>
</div> <!-- /end container -->

<?php

	 $args = array(
		 'posts_per_page' => 4,
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
		
			<div class="group group--right">

				<div class="module module--2-1">
    				<div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/work_int_05_ls.jpg')"></div>
				</div>
                              
			</div>
			
			<div class="group group--left">
				
				<div class="module module--2-1 module--text-pad module--dark module--mobile-double-height">
                    <div class="module__text">
                        <h2 class="underlined">In a Nutshell</h2>
                        <p class="first-para tag--work-title">Our award winning interactive campaigns use the latest and greatest technology to deliver truly omni-channel experiences. Putting users in control and immersing them in an experience are great ways to change behaviours and encourage action.</p>
						
                    </div>

                </div>
				
			</div> <!-- /end group -->
			
		</div> <!-- /end group-container -->
		
		
		
		<div class="group-container">
		
			<div class="group group--right">
				
				<div class="module module--2-1 module--text-pad module--dark module--mobile-double-height">
                    <div class="module__text">
                        <h2 class="underlined">Why Us?</h2>
                        <p class="first-para tag--work-title">Our team are brimming with ideas and technical know-how to connect your brand, product or knowledge to the target audience. We love to innovate and push the envelope of what's possible within todays digital space. Our mantra ... to suprise and delight.</p>
						
                    </div>

                </div>
				                               
			</div>
			
			<div class="group group--left">
				                    
            	<div class="module module--2-1">
					<div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/work_int_05_ls.jpg')"></div>
				</div>	
                    	
			</div> <!-- /end group -->
			
		</div> <!-- /end group-container -->
		
		
		<div class="group-container">
		
			<div class="container area-dark container--half-top container--half-bot">
			    <section class="text-section">
			        <h2>INTERACTIVE NEWS</h2>
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
			<a class="cube--link" href="<?php echo site_url(); ?>/work#interactive">
				<div class="cube about--cube">
					<div class="cube--front">
						<p class="sans-serif button"><span>SEE</span> OUR INTERACTIVE WORK</p>
					</div>
					<div class="cube--top">
						<p class="sans-serif button"><span>SEE</span> OUR INTERACTIVE WORK</p>
					</div>
				</div>
			</a>
		</div>
	</div> <!-- /end container -->

</div>

	
	
	
<?php get_footer(); ?>
