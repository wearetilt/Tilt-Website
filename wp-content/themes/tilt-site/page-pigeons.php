<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header('404'); ?>

<header id="page_404" class="work-item work-item--motion area-dark">
    <div class="module--video module--header">
        <div class="ratio">
            <video id="header-video-player" class="video-js vjs-default-skin" autoplay loop width="100%" height="100%">
                    <source id="header-video" src="https://player.vimeo.com/external/267416219.sd.mp4?s=1745b64add433224e8b60b41407e8ee091e097b5&profile_id=165" type="video/mp4">
            </video>
        </div>
    </div>
</header>
<div id="fourohfour-overlay">
	<div id="header-play" class="header-play vertical-align">

	</div>
</div>
<div id="fourohfour-text" class="container container--no-top container--half-bot">
	<h1>Pigeons Vs Emails</h1>
	<h1 class="light">Last chance to stay in touch by email</h1>
	
	<a class="pigeon" href="http://wearetilt.com/unsubscribe"><img src="<?php echo get_template_directory_uri(); ?>/images/button1.png"></a>
	<a class="email" target="_blank" href="http://newsletter.wearetilt.com/h/r/DCECA7E8F013B81E"><img src="<?php echo get_template_directory_uri(); ?>/images/button2.png"></a>

</div>
</div>

<script src="http://vjs.zencdn.net/ie8/1.1.0/videojs-ie8.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/video.js"></script>
<link href='https://fonts.googleapis.com/css?family=Merriweather:400,400italic,700,700italic,300,300italic' rel='stylesheet' type='text/css'>
<?php wp_footer(); ?>
</body>
</html>
