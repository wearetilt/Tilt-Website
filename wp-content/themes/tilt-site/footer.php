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

$blog_id = get_current_blog_id();

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

  <div class="footer-upper">
     <div id="tilt--logo" class="footer-item footer-item--logo">
      <a aria-label="Homepage link" href="<?php echo site_url(); ?>">
        <svg class="svg-icon logout">
          <defs>
            <filter id="boxShadow" x="0" y="0" width="200%" height="200%">
              <feOffset result="offOut" in="SourceAlpha" dx="1" dy="1" />
              <feGaussianBlur result="blurOut" in="offOut" stdDeviation="1" />
              <feBlend in="SourceGraphic" in2="blurOut" mode="normal" />
            </filter>
          </defs>
          <use xlink:href="#tilt"></use>
        </svg>
      </a>
    </div>

    <div class="phone-container">
      <div class="telephone">
        <?php if($blog_id == 1) : ?>
          <span>+44(0)1273 675 700</span>
        <?php endif;?>
        <?php if($blog_id == 3) : ?>
          <span>+1 (778) 835-6414</span>
        <?php endif;?>
      </div>
    </div>

    <div class="footer-links">
      <a href="/work">work</a>
      <a href="/about">about</a>
      <a href="/news">news</a>
      <a href="/team">team</a>
      <a href="/careers">careers</a>
      <a href="/contact">contact</a>
    </div>
  </div>

  <div class="footer-lower">

  <p id="footnote-1" class="footnote">Designed and built on tea using pens, paper and pixels. Set in Sero and Merriweather. All content © 2010-2019 We Are Tilt Ltd. All rights reserved. <br/>Registered in England & Wales under Reg. No 07280900. Registered Office: 1 Harbour House, Harbour Way, Shoreham-by-Sea, West Sussex, BN43 5HZ. <br/>Offices located at: 41 New England Street, Brighton, East Sussex, BN1 4GQ.</p>

  <div id="footer-contacts">

    <button id="popup" class="join-pop">Join our mailing list</button>
    <!-- subscribe -->

    <div id="footer-icons">
      <div class="footer-icon"><a href="https://www.facebook.com/wearetilt" aria-label="Check out our facebook page" target="_blank" ><svg class="f-ico_facebook"> <use xlink:href="#facebook"></use></svg></a></div>
      <div class="footer-icon"><a href="https://twitter.com/wearetilt" aria-label="Check out our twitter page" target="_blank" ><svg class="f-ico_twitter"> <use xlink:href="#twitter"></use></svg></a></div>
      <div class="footer-icon"><a href="https://vimeo.com/wearetilt/" aria-label="Check out our vimeo page" target="_blank" ><svg class="f-ico_vimeo"> <use xlink:href="#vimeo"></use></svg></a></div>
      <div class="footer-icon"><a href="https://instagram.com/we_are_tilt" aria-label="Check out our instagram page" target="_blank" ><svg class="f-ico_instagram"> <use xlink:href="#instagram"></use></svg></a></div>
      <!--        <div class="footer-icon"><a href="https://www.youtube.com/channel/UC0JTRabxxDhTzUUBd9CatiQ" aria-label="Check out our youtube page" target="_blank" ><svg class="f-ico_youtube"> <use xlink:href="#youtube"></use></svg></a></div> -->
      <!-- <div class="footer-icon"><a href="http://bakery.wearetilt.com/" aria-label="Check out our tumblr page" target="_blank" ><svg class="f-ico_tumblr"> <use xlink:href="#tumblr"></use></svg></a></div> -->
    </div> <!-- /end footer-icons -->

  </div><!-- /end footer-contacts -->


  </div>
  <a class="privacy_policy" href="/privacy-policy" target="_blank">Privacy Policy</a>

</div><!-- /end signoff -->

</footer>

<div class="modal-container modal">
  <div id="subscribe">
    <div class="subscribe-wrapper">
      <button class="close-btn"></button>
      <p class="join-list">Join our mailing list</p>
      <form id="subForm" class="js-cm-form" action="https://www.createsend.com/t/subscribeerror?description=" method="post" data-id="5B5E7037DA78A748374AD499497E309E724ECA1B6796EADF65AC759B144112BD8BD6F3C5686E6DB5068B5C5B63F05A873EA988D4992C4B6E542E62E633F34061">
        <p>Hi, my name is</p>
        <input autocomplete="off" id="fieldName" name="cm-name" type="text">
        <p>My email is</p>
        <input autocomplete="off" id="fieldEmail" class="js-cm-email-input" name="cm-ukjhuyk-ukjhuyk" type="text">
        <div id="errors">
          <span id="error-email" class="error-msg">This doesn't look like a valid email</span>
        </div>
        <div class="tick-section">
          <input id="tick-box" class="tick" type="checkbox"><span class="check-box"></span><p class="tick-text">Tick this box</p>
          <p class="tick-content">By ticking this box you are giving us your consent to use your details for Tilt’s email marketing. We use a third party, Campaign Monitor to deliver our quarterly e-newsletter. We gather statistics around email opening and clicks using industry standard technologies to help us monitor and improve our e-newsletter. For more information, please see our <a href="/privacy-policy" target="_blank">privacy policy</a></p>
        </div>
        <button class="cube--link cube-newsletter js-cm-submit-button" type="submit">
          <div class="cube">
            <div class="cube--front">
              <p class="sans-serif button newsletter">SUBSCRIBE ME</p>
            </div>
            <div class="cube--top">
              <p class="sans-serif button newsletter-next">SUBSCRIBE ME</p>
            </div>
          </div>
        </button>
        <!-- <button disabled class="js-cm-submit-button cube--front" type="submit"><span class="sans-serif button">SUBSCRIBE ME</span></button> -->
      </form>
      <script type="text/javascript" src="https://js.createsend1.com/javascript/copypastesubscribeformlogic.js"></script>
    </div>
  </div>
</div>

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="//vjs.zencdn.net/ie8/1.1.0/videojs-ie8.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/video.js"></script>
<!-- <script src="http://vjs.zencdn.net/6.2.0/video.js"></script>  -->
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
