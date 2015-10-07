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
	<div class="module--video module--16-9 module--header">
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
    <a id="blog_button" class="button button--no-border" href="<?php echo site_url(); ?>/submotion-orchestra">
        <span class="sans-serif">About this video</span>
    </a>
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
							<h2><span class="light underlined">Nickelodeon<br />Code-It</span></h2>
						</div> <!-- /end overlay-text -->
					</div> <!-- /end overlay -->

					<div class="ratio" style="background-image: url('<?php echo get_template_directory_uri();?>/images/home/home_02_mr.jpg')"></div>

				</div>
				<div class="module module--1-1">
                        <a id="instagram_link_1" href="#" target="_blank">
                            <div class="overlay area-dark"></div>
                            <div id="instagram_box_1" class="ratio instagram-box"></div>
                        </a>
				</div>
				<div class="module module--1-1 area-dark">
					<a href="<?php echo $post->guid; ?>">
						<div class="overlay area-dark">
							<div class="overlay-text">
								<p class="tag">News</p>
								<h2><span class="light"><?php echo $post->post_name; ?></span></h2>
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
							<p class="tag">Case Study</p>
							<h2>BP First Level Leaders<br /><span class="underlined">Stories</span></h2>
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
							<p class="tag">Case Study</p>
							<h2>BP<br /><span class="underlined">Discover BP</span></h2>
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
							<h2><span class="light underlined">GfK<br />Brand Video</span></h2>
						</div> <!-- /end overlay-text -->
					</div> <!-- /end overlay -->

					<div class="ratio" style="background-image: url('<?php echo get_template_directory_uri();?>/images/home/home_03_mr.jpg')"></div>

				</div>


				<div class="module module--1-1">
                    <a id="instagram_link_2" href="#" target="_blank">
                        <div class="overlay area-dark"></div>
				        <div id="instagram_box_2" class="ratio instagram-box"></div>
                    </a>
				</div>
				<div id="twitter__module" class="module module--1-1 area-dark">
					<div class="module__text">
						<?php echo do_shortcode( "[rotatingtweets include_rts='1' official_format='2' search='from:wearetilt' tweet_count='3' show_follow='1' timeout='3000' rotation_type='fade']" ) ?>

					</div> <!-- /end text-section -->
				</div>

			</div> <!-- /end group -->
		</div> <!-- /end group-container -->
	</section>
</div> <!-- /end container -->

</div> <!-- Close Wrapper -->

<script type="text/javascript">

var user;

function doData(data){
    console.log(data.data[0]['username']);
    for(i in data.data){
        if(data.data[i].username === 'we_are_tilt'){
            user = data.data[i].id;
            var script2 = document.createElement('script');
            script2.src = 'https://api.instagram.com/v1/users/' + user + '/media/recent?client_id=83440bc1481343219c7ddb44a46c0e7b&callback=doPicture';
            document.getElementsByTagName('head')[0].appendChild(script2);
        }
    }
}

function doPicture(pictureData){

    console.log(pictureData);

    var instagramImage1 = pictureData.data[0].images.standard_resolution.url;
    var instagramLink1 = pictureData.data[0].link;
    var instagramImage2 =  pictureData.data[1].images.standard_resolution.url;
    var instagramLink2 = pictureData.data[1].link;

    console.log(instagramImage1);
    document.getElementById('instagram_box_1').style.backgroundImage = "url('" + instagramImage1 + "')";
    document.getElementById('instagram_box_2').style.backgroundImage = "url('" + instagramImage2 + "')";
    document.getElementById('instagram_link_1').href = instagramLink1;
    document.getElementById('instagram_link_2').href = instagramLink2;


}

var script = document.createElement('script');
script.src = 'https://api.instagram.com/v1/users/search?q=we_are_tilt&client_id=83440bc1481343219c7ddb44a46c0e7b&callback=doData';

document.getElementsByTagName('head')[0].appendChild(script);

</script>

<?php get_footer(); ?>
