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

<?php
if (!post_password_required($post)) {
  // Your custom code should here
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


      <div class="sign-off-desktop">

        <div class="left_section">

          <div class="left_top">
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
                <?php if ($blog_id == 1) : ?>
                  <a href="tel:+441273-675-700">+44(0)1273 675 700</a>
                <?php endif; ?>
                <?php if ($blog_id == 3) : ?>
                  <a href="tel:+1778-835-6414">+1 (778) 835-6414</a>
                <?php endif; ?>
              </div>
            </div>
          </div>

          <div class="left_bottom">
            <p class="footnote">Designed and built on tea using pens, paper and pixels. Set in Sero and Merriweather. All content © 2010-2019 We Are Tilt Ltd. All rights reserved. <br />Registered in England & Wales under Reg. No 07280900. Registered Office: Unit 6, Riverside Business Centre, Brighton Road, Shoreham-By-Sea, West Sussex, BN43 6RE. <br />Offices located at: 41 New England Street, Brighton, East Sussex, BN1 4GQ.</p>
            <a class="privacy_policy" href="/privacy-policy">Privacy Policy</a>
            <a class="health_and_safety" href="/health-and-safety">Health & Safety policy</a>
          </div>


        </div>

        <div class="right_section">
          <div class="right_top">
            <div class="footer_links">
              <a href="/work">work</a>
              <a href="/about">about</a>
              <a href="/news">news</a>
              <a href="/team">team</a>
              <!--       <a href="/careers">careers</a> -->
              <a href="/contact">contact</a>
            </div>
          </div>
          <div class="right_bottom">
            <div id="footer-connections">
              <div id="footer-contacts">

                <button id="popup" class="join-pop">Join our mailing list</button>
                <!-- subscribe -->

                <div id="footer-icons">
                  <div class="footer-icon"><a href="https://www.linkedin.com/company/wearetilt/" aria-label="Check out our linkedin page" target="_blank"><svg class="f-ico_linkedin">
                        <use xlink:href="#linkedin"></use>
                      </svg></a></div>
                  <div class="footer-icon"><a href="https://twitter.com/wearetilt" aria-label="Check out our twitter page" target="_blank"><svg class="f-ico_twitter">
                        <use xlink:href="#twitter"></use>
                      </svg></a></div>
                  <div class="footer-icon"><a href="https://vimeo.com/wearetilt/" aria-label="Check out our vimeo page" target="_blank"><svg class="f-ico_vimeo">
                        <use xlink:href="#vimeo"></use>
                      </svg></a></div>
                  <div class="footer-icon"><a href="https://instagram.com/we_are_tilt" aria-label="Check out our instagram page" target="_blank"><svg class="f-ico_instagram">
                        <use xlink:href="#instagram"></use>
                      </svg></a></div>
                  <!--        <div class="footer-icon"><a href="https://www.youtube.com/channel/UC0JTRabxxDhTzUUBd9CatiQ" aria-label="Check out our youtube page" target="_blank" ><svg class="f-ico_youtube"> <use xlink:href="#youtube"></use></svg></a></div> -->
                  <!-- <div class="footer-icon"><a href="http://bakery.wearetilt.com/" aria-label="Check out our tumblr page" target="_blank" ><svg class="f-ico_tumblr"> <use xlink:href="#tumblr"></use></svg></a></div> -->
                </div> <!-- /end footer-icons -->

              </div><!-- /end footer-contacts -->

              <div class="footer-b-cert">
                <a href="https://www.bcorporation.net/en-us/find-a-b-corp/company/we-are-tilt" aria-label="Check out B certified's website" target="_blank">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/b-cert.svg" />
                </a>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="sign-off-mobile">

        <div class="top_section">
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
              <?php if ($blog_id == 1) : ?>
                <a href="tel:+441273-675-700">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/phone.svg" />
                </a>
              <?php endif; ?>
              <?php if ($blog_id == 3) : ?>
                <a href="tel:+1778-835-6414">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/phone.svg" />
                </a>
              <?php endif; ?>
            </div>
          </div>
        </div>

        <div class="mid_section">
          <div id="footer-connections">
            <div id="footer-contacts">

              <button id="popup" class="join-pop">Join our mailing list</button>
              <!-- subscribe -->

              <div id="footer-icons">
                <div class="footer-icon"><a href="https://www.linkedin.com/company/wearetilt/" aria-label="Check out our linkedin page" target="_blank"><svg class="f-ico_linkedin">
                        <use xlink:href="#linkedin"></use>
                      </svg></a></div>
                <div class="footer-icon"><a href="https://twitter.com/wearetilt" aria-label="Check out our twitter page" target="_blank"><svg class="f-ico_twitter">
                      <use xlink:href="#twitter"></use>
                    </svg></a></div>
                <div class="footer-icon"><a href="https://vimeo.com/wearetilt/" aria-label="Check out our vimeo page" target="_blank"><svg class="f-ico_vimeo">
                      <use xlink:href="#vimeo"></use>
                    </svg></a></div>
                <div class="footer-icon"><a href="https://instagram.com/we_are_tilt" aria-label="Check out our instagram page" target="_blank"><svg class="f-ico_instagram">
                      <use xlink:href="#instagram"></use>
                    </svg></a></div>
                <!--        <div class="footer-icon"><a href="https://www.youtube.com/channel/UC0JTRabxxDhTzUUBd9CatiQ" aria-label="Check out our youtube page" target="_blank" ><svg class="f-ico_youtube"> <use xlink:href="#youtube"></use></svg></a></div> -->
                <!-- <div class="footer-icon"><a href="http://bakery.wearetilt.com/" aria-label="Check out our tumblr page" target="_blank" ><svg class="f-ico_tumblr"> <use xlink:href="#tumblr"></use></svg></a></div> -->
              </div> <!-- /end footer-icons -->

            </div><!-- /end footer-contacts -->

            <div class="footer-b-cert">
              <a href="https://www.bcorporation.net/en-us/find-a-b-corp/company/we-are-tilt" aria-label="Check out B certified's website" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/images/b-cert.svg" />
              </a>
            </div>
          </div>
        </div>

        <div class="bottom_section">
          <p class="footnote">Designed and built on tea using pens, paper and pixels. Set in Sero and Merriweather. All content © 2010-2019 We Are Tilt Ltd. All rights reserved. <br />Registered in England & Wales under Reg. No 07280900. Registered Office: Unit 6, Riverside Business Centre, Brighton Road, Shoreham-By-Sea, West Sussex, BN43 6RE. <br />Offices located at: 41 New England Street, Brighton, East Sussex, BN1 4GQ.</p>
          <a class="privacy_policy" href="/privacy-policy">Privacy Policy</a>
          <a class="health_and_safety" href="/health-and-safety">Health & Safety policy</a>
        </div>

      </div>

    </div><!-- /end signoff -->

  </footer>

<?php

} else {
}

?>

<div class="modal-container modal">
  <div id="subscribe">
    <div class="subscribe-wrapper">
      <button class="close-btn"></button>
      <script charset="utf-8" type="text/javascript" src="//js-eu1.hsforms.net/forms/embed/v2.js"></script>
      <script>
        hbspt.forms.create({
          region: "eu1",
          portalId: "26948535",
          formId: "14524af0-6ce2-4524-8f48-dee75903eda1"
        });
      </script>
    </div>
  </div>
</div>

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="//vjs.zencdn.net/ie8/1.1.0/videojs-ie8.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/video.js"></script>
<!-- <script src="http://vjs.zencdn.net/6.2.0/video.js"></script>  -->
<link href='//fonts.googleapis.com/css?family=Merriweather:400,400italic,700,700italic,300,300italic' rel='stylesheet' type='text/css'>
<?php wp_footer(); ?>

<script>
  (function(i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function() {
      (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date();
    a = s.createElement(o),
      m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
  })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

  ga('create', 'UA-16661700-1', 'auto');
  ga('send', 'pageview');
</script>

<!-- cookie popup -->
<script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
<script>
  window.cookieconsent.initialise({
    "palette": {
      "popup": {
        "background": "rgba(0,0,0,0.75)",
        "text": "#ffffff"
      },
      "button": {
        "background": "transparent",
        "text": "#ffffff",
        "border": "#ffffff"
      }
    },
    "content": {
      "link": "See our cookie policy",
      "href": "https://wearetilt.com/privacy-policy/#cookies"
    }
  });
</script>

</body>

</html>