<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<footer id="footer" class="area-dark">
	<div class="container">
		<div class="text-container">
			<p class="first-para sans-serif"><strong class="highlight">Like what you see?</strong> Feel free to get in touch to see how we can help shape your story.</p>
			<a class="cube--link" href="<?php echo site_url(); ?>/contact">
				<div class="cube">
					<div class="cube--front">
						<p class="sans-serif button">Contact us</p>
					</div>
					<div class="cub--top">
						<p class="sans-serif button">Contact us</p>
					</div>
				</div>
			</a>
		</div>
	</div> <!-- /end container -->

	<div id="signoff" class="group-container group-container--no-bg">
		<div class="footer-icons">
			<div id="footer-icon-1" class="footer-icon"><a href="https://www.facebook.com/wearetilt" target="_blank" ></a></div>
			<div id="footer-icon-2" class="footer-icon"><a href="https://twitter.com/wearetilt" target="_blank" ></a></div>
			<div id="footer-icon-3" class="footer-icon"><a href="https://vimeo.com/wearetilt/" target="_blank" ></a></div>
			<div id="footer-icon-4" class="footer-icon"><a href="https://instagram.com/we_are_tilt" target="_blank" ></a></div>
			<div id="footer-icon-5" class="footer-icon"><a href="https://www.youtube.com/channel/UC0JTRabxxDhTzUUBd9CatiQ" target="_blank" ></a></div>
			<div id="footer-icon-6" class="footer-icon"><a href="http://bakery.wearetilt.com/" target="_blank" ></a></div>
			<div class="telephone">
				<span>Tel: + 44(0)1273 675 700</span>
			</div>
		</div> <!-- /end footer-icons -->

		<p class="footnote">Designed and built on tea using pens, paper and pixels. Set in Sero, Merriweather and Rooney Pro. All content copyright We Are Tilt Ltd 2015. All rights reserved.</p>
	</div>


</footer>
<script src="http://vjs.zencdn.net/ie8/1.1.0/videojs-ie8.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/video.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/css/video-js.min.css"></script>
<script>
$(document).ready(function(){
$('.vjs-loading-spinner').html('<div class="circle-container"><div class="circle circle--1"></div><div class="circle circle--2"></div></div>');
});
</script>
<link href='https://fonts.googleapis.com/css?family=Merriweather:400,400italic,700,700italic,300,300italic' rel='stylesheet' type='text/css'>
<?php wp_footer(); ?>

</body>
</html>
