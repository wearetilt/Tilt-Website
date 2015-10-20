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


?>

<script type="text/javascript">
	
	var wordArray = ['Thinkers','Crafters','Grafters', 'Time Travellers', 'Navigators', 'Tailors', 'Pain Killers', 'Detectives', 'Firestarters', 'Geeks', 'All Ears', 'Tea drinkers', 'Storytellers', 'Tilt'];
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

<header id="home-page" class="work-item work-item--motion area-dark">
	<div class="module--video module--16-9 module--header">
		<div class="ratio">
			<div class="container container--header strapline-container">
				<h1>We Are <strong id="strapline-text" class="highlight">Entertainers</strong></h1>
				<a class="cube--link" href="<?php echo site_url(); ?>/work">
					<div class="cube">
						<div class="cube--front cube--front__no-bg">
							<p class="sans-serif">See our work</p>
						</div>
						<div class="cub--top cube--top__no-bg">
							<p class="sans-serif">You&rsquo;re gonna love it</p>
						</div>
					</div>
				</a>
			</div>
			<video id="header-video-player" class="video-js vjs-default-skin" autoplay loop muted width="100%" height="100%" poster="<?php echo get_template_directory_uri(); ?>/images/home/header_poster_image.jpg">
					<source id="header-video" src="https://player.vimeo.com/external/141682673.hd.mp4?s=25836ba3052d2612dc5eb10231468d7c&profile_id=113" type="video/mp4">
			</video>
		</div>
	</div>
</header>

<div id="header-overlay" class="container container--header area-dark">
    <a id="blog_button" class="button button--no-border" href="<?php echo site_url(); ?>/submotion-orchestra">
        <span class="sans-serif">About this video</span>
    </a>
	<div class="text-container">
		<p class="first-para sans-serif"><strong class="highlight">We are Tilt</strong> CRAFTED DIGITAL DESIGN AND COMMUNICATIONS FROM AN OBSESSIVE BUNCH OF STRATEGISTS, ARTISTS, FILMMAKERS, ANIMATORS, PRODUCERS, ILLUSTRATORS, WRITERS, CODERS and CREATIVES.</p>
		<p class="sans-serif">A HOME FOR DIGITAL STORYTELLERS</p>

		<a class="cube--link" href="<?php echo site_url(); ?>/staff/">
			<div class="cube">
				<div class="cube--front">
					<p class="sans-serif">Find out more</p>
				</div>
				<div class="cub--top">
					<p class="sans-serif">We wont bite</p>
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
							<h2>Nickelodeon<br /><span class="light">Code-It</span></h2>
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
							<p class="tag">Case Study</p>
							<h2>BP First Level Leaders<br /><span class="underlined light">Stories</span></h2>
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
							<h2>BP<br /><span class="underlined light">Discover BP</span></h2>
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
							<h2>GFK<br /><span class="light underlined">Brand Video</span></h2>
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
						<?php echo do_shortcode( "[rotatingtweets include_rts='1' show_meta_reply_retweet_favorite='1' official_format='2' search='from:wearetilt' tweet_count='3' show_follow='1' timeout='3000' rotation_type='fade' official_format_override='1']" ) ?>

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

    var instagramImage1 = pictureData.data[0].images.standard_resolution.url;
    var instagramLink1 = pictureData.data[0].link;
    var instagramImage2 =  pictureData.data[1].images.standard_resolution.url;
    var instagramLink2 = pictureData.data[1].link;

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
