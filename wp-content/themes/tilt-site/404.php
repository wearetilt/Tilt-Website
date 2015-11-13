<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header('404'); ?>

<div id="video-overlay" class="fullpage-overlay">
    <video id="overlay-video" controls class="video-js vjs-default-skin vertical-align" poster="<?php echo get_template_directory_uri(); ?>/images/work/mo_gfk/gfk_poster_2.jpg" width="100%" height="auto">
        <source src="https://player.vimeo.com/external/141548149.hd.mp4?s=c38947ea65f3bad06d05e9881fe92ead&profile_id=113" type="video/mp4">
    </video>
    <div id="video-overlay-close"></div>
</div>
<header id="page_404" class="work-item work-item--motion area-dark">
    <div class="module--video module--header">
        <div class="ratio">
            <video id="header-video-player" class="video-js vjs-default-skin" autoplay loop width="100%" height="100%" poster="<?php echo get_template_directory_uri(); ?>/images/work/mo_gfk/gfk_poster_1.jpg">
                    <source id="header-video" src="https://player.vimeo.com/external/140667746.hd.mp4?s=65dbf2593c9f3bed0c770c497eda1964&profile_id=113" type="video/mp4">
            </video>
        </div>
    </div>
</header>
<div id="fourohfour-overlay">
	<div id="header-play" class="header-play vertical-align">

	</div>
</div>
<div id="fourohfour-text" class="container container--no-top container--half-bot">
	<h1>404 - Page doesn't exist</h1>
	<h1 class="light">The tilt monkey isn't amused about that fact</h1>
	<a class="cube--link cube--float-left" href="<?php echo site_url(); ?>/contact">
		<div class="cube">
			<div class="cube--front">
				<p class="sans-serif button">Return to previous page</p>
			</div>
			<div class="cub--top">
				<p class="sans-serif button">Return to previous page</p>
			</div>
		</div>
	</a>
	<a class="cube--link cube--float-left" href="<?php echo site_url(); ?>/contact">
		<div class="cube">
			<div class="cube--front">
				<p class="sans-serif button">Watch Video</p>
			</div>
			<div class="cub--top">
				<p class="sans-serif button">Watch Video</p>
			</div>
		</div>
	</a>
</div>
</div>

<script src="http://vjs.zencdn.net/ie8/1.1.0/videojs-ie8.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/video.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/css/video-js.min.css"></script>
<link href='https://fonts.googleapis.com/css?family=Merriweather:400,400italic,700,700italic,300,300italic' rel='stylesheet' type='text/css'>

<?php wp_footer(); ?>

</body>
</html>
