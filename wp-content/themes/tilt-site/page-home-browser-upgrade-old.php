<?php
/**
 * Template Name: front page
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
get_header('old-browser'); ?>

<div id="video-overlay" class="fullpage-overlay">
    <video id="overlay-video" controls class="video-js vjs-default-skin vertical-align" poster="<?php echo get_template_directory_uri(); ?>/images/work/showreel_poster.jpg" width="100%" height="auto">
        <source src="https://player.vimeo.com/external/141548149.hd.mp4?s=c38947ea65f3bad06d05e9881fe92ead&profile_id=113" type="video/mp4">
    </video>
    <div id="video-overlay-close"></div>
</div>

<header id="work_page" class="work-item work-item--motion area-dark">
    <div class="module--video module--header">
        <div id="header-play" class="header-play"></div>
        <div class="container container--reel"> <p>REEL 2015 / 2016</p></div>
        <div class="ratio">
            <video id="header-video-player" class="video-js vjs-default-skin" autoplay loop muted poster="<?php echo get_template_directory_uri(); ?>/images/work/showreel_poster.jpg" width="100%" height="100%" >
                    <source id="header-video" src="https://player.vimeo.com/external/141548149.hd.mp4?s=c38947ea65f3bad06d05e9881fe92ead&profile_id=113" type="video/mp4">
            </video>
        </div>
    </div>
</header>

 <div class="container container--double-side-pad area-dark">
	<div class="text-container">
		<p class="first-para sans-serif"><strong class="highlight">Crafted digital experiences</strong> from an obsessive bunch of strategists, artists, filmmakers, animators, producers, illustrators, writers, coders and creatives.</p>
		<p class="sans-serif">IN ORDER TO EXPERIENCE OUR SITE IN ALL ITS GLORY YOU NEED TO UPGRADE YOUR BROWSER. IN THE INTERIM, PLEASE CHECK OUT OUR SHOWREEL ABOVE, OR GET IN TOUCH FOR A CHAT.</p>

	</div>
</div> <!-- /end container -->

<div class="container container--double-side-pad area-dark contact--page browser-fallback">
	<section class="text-section text-section--centre">
		<h2 class="contact-title"><span class="light">Jobs &amp; Internships</span></h2>
		<a class="contact-email" href="mailto:recruitment@wearetilt.com">recruitment@wearetilt.com</a>
		<h2 class="contact-title"><span class="light">New projects</span></h2>
		<a class="contact-email" href="mailto:jonathan.helm@wearetilt.com">jonathan.helm@wearetilt.com</a>
		<h2 class="contact-title"><span class="light">General Enquiries</span></h2>
		<a class="contact-email" href="mailto:studio@wearetilt.com">studio@wearetilt.com</a>
	</section> <!-- /end text-section -->
</div> <!-- /end container -->


</div> <!-- Close Wrapper -->


<script src="http://vjs.zencdn.net/ie8/1.1.0/videojs-ie8.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/video.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/css/video-js.css"></script>
<link href='https://fonts.googleapis.com/css?family=Merriweather:400,400italic,700,700italic,300,300italic' rel='stylesheet' type='text/css'>
<?php wp_footer(); ?>

</body>
</html>
