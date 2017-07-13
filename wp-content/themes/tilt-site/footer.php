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
					<div class="cube--top">
						<p class="sans-serif button">Contact us</p>
					</div>
				</div>
			</a>
		</div>
	</div> <!-- /end container -->

	<div id="signoff" class="group-container group-container--no-bg">
		<div class="footer-icons">
			<div class="footer-icon"><a href="https://www.facebook.com/wearetilt" aria-label="Check out our facebook page" target="_blank" ><svg class="f-ico_facebook"> <use xlink:href="#facebook"></use></svg></a></div>
			<div class="footer-icon"><a href="https://twitter.com/wearetilt" aria-label="Check out our twitter page" target="_blank" ><svg class="f-ico_twitter"> <use xlink:href="#twitter"></use></svg></a></div>
			<div class="footer-icon"><a href="https://vimeo.com/wearetilt/" aria-label="Check out our vimeo page" target="_blank" ><svg class="f-ico_vimeo"> <use xlink:href="#vimeo"></use></svg></a></div>
			<div class="footer-icon"><a href="https://instagram.com/we_are_tilt" aria-label="Check out our instagram page" target="_blank" ><svg class="f-ico_instagram"> <use xlink:href="#instagram"></use></svg></a></div>
			<div class="footer-icon"><a href="https://www.youtube.com/channel/UC0JTRabxxDhTzUUBd9CatiQ" aria-label="Check out our youtube page" target="_blank" ><svg class="f-ico_youtube"> <use xlink:href="#youtube"></use></svg></a></div>
			<div class="footer-icon"><a href="http://bakery.wearetilt.com/" aria-label="Check out our tumblr page" target="_blank" ><svg class="f-ico_tumblr"> <use xlink:href="#tumblr"></use></svg></a></div>
			<div class="telephone">
				<span>Tel: + 44(0)1273 675 700</span>
			</div>
		</div> <!-- /end footer-icons -->

		<p class="footnote">Designed and built on tea using pens, paper and pixels. Set in Sero and Merriweather. All content copyright We Are Tilt Ltd 2015. All rights reserved.</p>
	</div>

</footer>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//vjs.zencdn.net/ie8/1.1.0/videojs-ie8.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/video.js"></script>
<link href='//fonts.googleapis.com/css?family=Merriweather:400,400italic,700,700italic,300,300italic' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="https://secure.leadforensics.com/js/91727.js" ></script>
<noscript><img alt="" src="https://secure.leadforensics.com/91727.png" style="display:none;" /></noscript>
<?php wp_footer(); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-16661700-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
