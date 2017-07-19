<?php
/**
 * Template Name: front page
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header('home'); ?>

<?php
 /*
$args = array(
	 'posts_per_page' => 1,
	 'order_by' => 'date',
	 'post_type' => 'post',
	 'post_status' => 'publish',
	 'category'         => '-9',
 );

 $posts_array = get_posts( $args );

 $post = $posts_array[0];
 $postID = $post->ID;

 if (has_post_thumbnail( $postID ) ){
	 $image = wp_get_attachment_image_src( get_post_thumbnail_id( $postID ), 'single-post-thumbnail' );
 }
*/


	$args = array(
		 'posts_per_page' => 3,
		 'order_by' => 'date',
		 'post_type' => 'post',
		 'post_status' => 'publish',
		 'category' => '-9',

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

<header id="home-page" class="work-item work-item--motion area-dark">
	<div class="module--video module--header">
		<div class="ratio">
			<div class="container container--header strapline-container">
				<h1>We Are <strong id="strapline-text">Tilt</strong></h1>
				<a class="cube--link" href="<?php echo site_url(); ?>/work">
					<div class="cube">
						<div class="cube--front cube--front__no-bg">
							<p class="sans-serif">See our work</p>
						</div>
						<div class="cube--top cube--top__no-bg">
							<p class="sans-serif">See our work</p>
						</div>
					</div>
				</a>
			</div>
			<video id="header-video-player" class="video-js vjs-default-skin" autoplay loop muted poster="<?php echo get_template_directory_uri(); ?>/images/home/header_poster_image.jpg">
					<source id="header-video" src="https://player.vimeo.com/external/144378575.hd.mp4?s=9126a5c2a202cb2d55ecf33fefe42a3a&profile_id=113" type="video/mp4">
			</video>
		</div>
		<a class="scroll-down" href="#"><span><p>Scroll down</p></span></a>
	</div>
</header>

<div id="header-overlay" class="container container--header area-dark">
    <a id="blog_button" class="button button--no-border" href="<?php echo site_url(); ?>/submotion-orchestra">About this video</a>
	<div class="text-container">
		<p class="first-para sans-serif"><strong class="highlight">CRAFTED DIGITAL EXPERIENCES</strong> FROM AN OBSESSIVE BUNCH OF STRATEGISTS, ARTISTS, FILMMAKERS, ANIMATORS, PRODUCERS, ILLUSTRATORS, WRITERS, CODERS AND CREATIVES.</p>


		<a class="cube--link" href="<?php echo site_url(); ?>/about/">
			<div class="cube">
				<div class="cube--front">
					<p class="sans-serif">More about us</p>
				</div>
				<div class="cube--top">
					<p class="sans-serif">More about us</p>
				</div>
			</div>
		</a>
	</div>
</div>

<div class="container container--no-padding">
	<section>
		<div class="group-container">

			<div class="group group--right">

				<div class="module module--2-1">

					<a href="<?php get_site_url(); ?>/work/code-it">

						<div class="overlay area-dark">
							<div class="overlay-text">
								<p class="tag tag--home-title">Work: Interactive</p>
								<h2>Nickelodeon<br /><span class="light">Code-It</span></h2>
							</div> <!-- /end overlay-text -->
						</div> <!-- /end overlay -->

						<div class="ratio" style="background-image: url('<?php echo get_template_directory_uri();?>/images/home/home_02_mr.jpg')"></div>
					</a>

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
										<p class="tag--no-square">News</p>
										<h2><span><?php the_title( ); ?></span></h2>
									</div> <!-- /end overlay-text -->
								</div> <!-- /end overlay -->
								<div class="ratio" style="background-image: url('<?php echo $image[0]; ?>')"></div>
							</div>
						</a><?php



					};

					$i++;

				endforeach;
				wp_reset_postdata();?>


				<?php
				foreach ( $filmposts as $post ) : setup_postdata( $post );

					if (has_post_thumbnail( $post->ID ) ):
						$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
					endif;


					if($j == 1) { ?>

						<a href="<?php echo the_permalink(); ?>">
							<div class="module module--1-1 area-dark news--icon">

								<div class="module__text">
									<p class="tag--no-square">News</p>
									<h2><span><?php echo the_title(); ?></span></h2>
								</div>

							</div>
						</a><?php



					};

					$j++;

				endforeach;
				wp_reset_postdata();?>


			</div>

			<div class="group group--left">
				<div class="module module--2-2">
					<a href="<?php get_site_url(); ?>/work/bp-fll-stories/">
						<div class="overlay area-dark">
							<div class="overlay-text">
								<p class="tag tag--home-title">Case Study: Film</p>
								<h2>BP First Level Leaders<br /><span class="underlined light">Stories</span></h2>
								<p class="sans-serif">Engage your audience on an emotional level</p>
							</div> <!-- /end overlay-text -->
						</div> <!-- /end overlay -->
						<div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/home/home_01_ls.jpg')"></div>
					</a>
				</div>
			</div> <!-- /end group -->
		</div> <!-- /end group-container -->
	</section>
</div> <!-- /end container -->

<div class="container container--no-padding">
	<section>
		<div class="group-container">
			<div class="group group--right">

				<div class="module module--2-2">

					 <a href="<?php get_site_url(); ?>/work/discover-bp">
						<div class="overlay area-dark">
							<div class="overlay-text">
								<p class="tag tag--home-title">Case Study: Web</p>
								<h2>BP<br /><span class="underlined light">Discover BP</span></h2>
								<p class="sans-serif">Why would employees spend time learning if they don’t have to?</p>
							</div> <!-- /end overlay-text -->
						</div> <!-- /end overlay -->
						<div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/home/home_04_ls.jpg')"></div>
					 </a>

				</div>


			</div>
			<div class="group group--left">

				<div class="module module--2-1 area-dark">

					<a href="<?php get_site_url(); ?>/work/gfk">
						<div class="overlay area-dark">
							<div class="overlay-text">
								<p class="tag tag--home-title">Work: Motion</p>
								<h2>GFK<br /><span class="light">Brand Video</span></h2>
							</div> <!-- /end overlay-text -->
						</div> <!-- /end overlay -->

						<div class="ratio" style="background-image: url('<?php echo get_template_directory_uri();?>/images/home/home_03_mr.jpg')"></div>
					</a>

				</div>


				<?php
				foreach ( $filmposts as $post ) : setup_postdata( $post );

					if (has_post_thumbnail( $post->ID ) ):
						$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
					endif;


					if($k == 2) { ?>

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

					$k++;

				endforeach;
				wp_reset_postdata();?>







				<div id="twitter__module" class="module module--1-1 area-dark">
					<div class="module__text home--tweet">
						<?php echo do_shortcode( "[rotatingtweets screen_name='wearetilt' include_rts='1' show_meta_reply_retweet_favorite='1' official_format='2' tweet_count='3' show_follow='0' timeout='3000' rotation_type='fade' official_format_override='1']" ) ?>

					</div> <!-- /end text-section -->
				</div>

			</div> <!-- /end group -->
		</div> <!-- /end group-container -->
	</section>
</div> <!-- /end container -->

</div> <!-- Close Wrapper -->

<?php get_footer(); ?>

<script type="text/javascript">

	var wordArray = ['Thinkers', 'Crafters', 'Grafters', 'Tilt', 'Time-Travellers', 'Navigators', 'Gymnasts', 'Firestarters', 'Geeks', 'Tilt', 'All Ears', 'Entertainers', 'Tea Drinkers'];
	var maxLoops = wordArray.length;
	var counter = 0;


	jQuery(document).ready(function(){

	(function next() {

	    if (counter < maxLoops) {

		    setTimeout(function() {

	        	jQuery('#strapline-text').fadeOut(500, function(){

		        	document.getElementById('strapline-text').innerHTML = wordArray[counter];
					jQuery('#strapline-text').fadeIn(500);
					next();
					counter++;
					if(counter == maxLoops) { counter = 0; }

	        	});

			}, 2000);

	    } else {
		    counter = 0;
		    next();
	    }

	})();

	});

</script>
