<?php
/**
 * Template Name: front page
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<?php
 $args = array(
	 'posts_per_page' => 1,
	 'order_by' => 'date',
	 'post_type' => 'post',
	 'post_status' => 'publish'
 );

 $posts_array = get_posts( $args );

 $post = $posts_array[0];
 $postID = $post->ID;

 if (has_post_thumbnail( $postID ) ){
	 $image = wp_get_attachment_image_src( get_post_thumbnail_id( $postID ), 'single-post-thumbnail' );
 }


?>

<header id="home-page" class="work-item work-item--motion area-dark">
	<div class="module--video module--header">
		<div class="ratio">
			<div class="container container--header strapline-container">
				<h1>We Are <strong id="strapline-text" class="highlight">Time Travellers</strong></h1>
				<a href="<?php echo site_url(); ?>/work">
					<div class="cube">
						<div class="cube--front cube--front__no-bg">
							<p class="sans-serif">View our Showreel</p>
						</div>
						<div class="cub--top cube--top__no-bg">
							<p class="sans-serif">You&rsquo;re gonna love it</p>
						</div>
					</div>
				</a>
			</div>
			<video id="header-video-player" class="video-js vjs-default-skin" autoplay loop muted width="100%" height="100%" >
					<source id="header-video" src="<?php echo get_template_directory_uri(); ?>/video/graded_masthead4.mp4" type="video/mp4">
			</video>
		</div>
	</div>
</header>

<div id="header-overlay" class="container container--header area-dark">
	<div class="text-container">
		<p class="first-para sans-serif"><strong class="highlight">We are Tilt</strong> Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
		<a href="<?php echo site_url(); ?>/contact">
			<div class="cube">
				<div class="cube--front">
					<p class="sans-serif">Contact Us</p>
				</div>
				<div class="cub--top">
					<p class="sans-serif">Please</p>
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

					<div class="overlay area-dark">
						<div class="overlay-text">
							<p class="tag">Work</p>
							<h2>Nickelodeon <br />
								<span class="light underlined">Code-It</span>
							</h2>
						</div> <!-- /end overlay-text -->
					</div> <!-- /end overlay -->

					<div class="ratio" style="background-image: url('<?php echo get_template_directory_uri();?>/images/home/home_02_mr.jpg')"></div>

				</div>
				<div class="module module--1-1"></div>
				<div class="module module--1-1 area-dark">
					<a href="<?php echo $post->guid; ?>">
						<div class="overlay area-dark">
							<div class="overlay-text">
								<p class="tag">News</p>
								<h2><?php echo $post->post_name; ?></h2>
							</div> <!-- /end overlay-text -->
						</div> <!-- /end overlay -->
						<div class="ratio" style="background-image: url('<?php echo $image[0]; ?>')"></div>
					</a>
				</div>
			</div>
			<div class="group group--left">
				<div id="module-5" class="module module--2-2">
					<div class="overlay area-dark">
						<div class="overlay-text">
							<p class="tag">Film: Case Study</p>
							<h2>BP <br />
								<span class="light underlined">First Level Leaders</span>
							</h2>
							<p class="sans-serif">Engage your audience on an emotional level</p>
						</div> <!-- /end overlay-text -->
					</div> <!-- /end overlay -->
					<div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/home/home_01_ls.jpg')"></div>
				</div>
			</div> <!-- /end group -->
		</div> <!-- /end group-container -->
	</section>
</div> <!-- /end container -->

<div class="container container--no-padding">
	<section>
		<div class="group-container">
			<div class="group group--right">

				<div id="module-5" class="module module--2-2">

					<div class="overlay area-dark">
						<div class="overlay-text">
							<p class="tag">Web: Case Study</p>
							<h2>BP <br />
								<span class="light underlined">Discover BP</span>
							</h2>
							<p class="sans-serif">Why would employees spend time learning if they don’t have to?</p>
						</div> <!-- /end overlay-text -->
					</div> <!-- /end overlay -->
					<div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/home/home_04_ls.jpg')"></div>

				</div>


			</div>
			<div class="group group--left">

				<div class="module module--2-1 area-dark">

					<div class="overlay area-dark">
						<div class="overlay-text">
							<p class="tag">Work</p>
							<h2>GfK <br />
								<span class="light underlined">Brand Video</span>
							</h2>
						</div> <!-- /end overlay-text -->
					</div> <!-- /end overlay -->

					<div class="ratio" style="background-image: url('<?php echo get_template_directory_uri();?>/images/home/home_03_mr.jpg')"></div>

				</div>


				<div class="module module--1-1"></div>
				<div id="twitter__module" class="module module--1-1 area-dark">
					<div class="module__text">
						<?php echo do_shortcode( "[rotatingtweets include_rts='1' official_format='2' search='from:wearetilt' tweet_count='3' show_follow='1' timeout='3000' rotation_type='fade']" ) ?>
						<a href="https://twitter.com/intent/follow?region=follow_link&screen_name=wearetilt&tw_p=followbutton" target="_blank" class="twitter-folow">&#xf243;&#xf2c7;</a>
					</div> <!-- /end text-section -->
				</div>

			</div> <!-- /end group -->
		</div> <!-- /end group-container -->
	</section>
</div> <!-- /end container -->

</div> <!-- Close Wrapper -->

<?php get_footer(); ?>
