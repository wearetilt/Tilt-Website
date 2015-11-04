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
		<p class="first-para sans-serif"><strong class="highlight">FILM SERVICES.</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
		
	</div>
</div> <!-- /end container -->

<?php 
			
	query_posts('cat=15');
	
	if ( have_posts() ) : 

		$numberOfPosts = $wp_query->post_count;
		$postsLeftOver = $numberOfPosts % 8;
		$i = 0;
		?>
		
		<div class="container container--no-padding"><?php
		
		while ( have_posts() ) : the_post();
		
			$i++;
	
			if($i === 1){
				?>
					<div class="group-container">
						<div class="group group--left">
							<div class="module module--2-2">
								 <a href="<?php get_site_url(); ?>pbs">
		        					<div class="overlay area-dark">
		        						<div class="overlay-text">
		        							<p class="tag tag--work-body">Work</p>
		        							<h2>Passion Pictures<br /><span class="light">PBS</span></h2>
		        						</div> <!-- /end overlay-text -->
		        					</div> <!-- /end overlay -->
		        					<div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/work_int_03_ss.jpg')">
		        					</div>
		                        </a>
							</div>
				<?php
			} else if($i === 2){
				$tweet = $tweetCounter + 1;
				?>
					<div class="module module--1-1">
						<div class="module__text">
							<?php echo do_shortcode( "[rotatingtweets include_rts='1' official_format='2'  offset='" . $tweet . "' search='from:wearetilt' tweet_count='1' show_follow='1' timeout='3000' rotation_type='fade']" ) ?>
							
						</div> <!-- /end text-section -->
					</div>
					<div class="module module--1-1">
						<?php get_template_part( 'content', 'blog-post' ); ?>
					</div>
				<?php
				$tweetCounter++;
			} else if($i === 3){
				$tweet = $tweetCounter - 1;
				?>
					</div>
					<div class="group group--right">
						<div class="module module--1-1">
							<div class="module__text">
								<?php echo do_shortcode( "[rotatingtweets include_rts='1' official_format='2' offset='" . $tweet . "' search='from:wearetilt' tweet_count='1' show_follow='1' timeout='3000' rotation_type='fade']" ) ?>
								
							</div> <!-- /end text-section -->
						</div>
						<div class="module module--1-1">
							<?php	get_template_part( 'content', 'blog-post' ); ?>
						</div>
				<?php
				$tweetCounter++;
			} else if($i === 4){
				?>
						<div class="module module--2-2">
							<?php get_template_part( 'content', 'blog-post-large' ); ?>
						</div>
					</div>
				<?php
			}
		
		
		
		
		endwhile;
	
	endif;

?>

					</div></div>
	

</div>



<?php get_footer(); ?>
