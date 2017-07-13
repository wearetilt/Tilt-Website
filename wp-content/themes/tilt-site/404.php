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
    <video id="overlay-video" controls class="video-js vjs-default-skin vertical-align" width="100%">
        <source src="https://player.vimeo.com/external/145886748.hd.mp4?s=292e3a5fb013706f99d5b94470ac19c92af3c199&profile_id=113" type="video/mp4">
    </video>
    <div id="video-overlay-close"></div>
</div>
<header id="page_404" class="work-item work-item--motion area-dark">
    <div class="module--video module--header">
        <div class="ratio">
            <video id="header-video-player" class="video-js vjs-default-skin" autoplay loop width="100%" height="100%">
                    <source id="header-video" src="https://player.vimeo.com/external/145886197.hd.mp4?s=d86fe3331ce8d5da4086d84222ea89babd0f743c&profile_id=113" type="video/mp4">
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
	<h1 class="light">The tilt gorilla isn't amused about that fact</h1>
	<a class="cube--link cube--float-left" href="<?php echo site_url(); ?>/">
		<div class="cube">
			<div class="cube--front">
				<p class="sans-serif button">Return to home</p>
			</div>
			<div class="cube--top">
				<p class="sans-serif button">Return to home</p>
			</div>
		</div>
	</a>
</div>
</div>

<script src="http://vjs.zencdn.net/ie8/1.1.0/videojs-ie8.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/video.js"></script>
<link href='https://fonts.googleapis.com/css?family=Merriweather:400,400italic,700,700italic,300,300italic' rel='stylesheet' type='text/css'>
<?php wp_footer(); ?>
</body>
</html>
