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


		</div> <!-- /end group-container -->
	</section>
</div> <!-- /end container -->



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
