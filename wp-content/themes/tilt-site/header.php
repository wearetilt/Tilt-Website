<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta name="format-detection" content="telephone=no">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width initial-scale=1">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slick.css"/>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<!--[if lt IE 9]>
	<script>
		location.replace('http://wearetilt.com/home-browser-upgrade');
	</script>
	<![endif]-->
	<script type="text/javascript">
		window.directoryURI = "<?php echo get_template_directory_uri(); ?>";
	</script>
	<!-- <script src="//code.jquery.com/jquery-1.11.3.min.js"></script> -->
	<!-- Hotjar Tracking Code for www.wearetilt.com -->
<script>
  (function(h,o,t,j,a,r){
      h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
      h._hjSettings={hjid:456410,hjsv:5};
      a=o.getElementsByTagName('head')[0];
      r=o.createElement('script');r.async=1;
      r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
      a.appendChild(r);
  })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
</script>
<?php 

$htmltitle = wp_title('&raquo;',false);

	if($htmltitle == 'web Archives - We Are Tilt') { 
		remove_action( 'wp_head', '_wp_render_title_tag', 1 );
?>

		<title>Web & Interactive - We Are Tilt - Brighton</title>
		<meta name="description" content="Brilliant digital experiences that are bold, beautiful and put users first and always. We think beyond one way traffic and create online experiences that change behaviours.">

<?php

	} 
	elseif($htmltitle == 'film Archives - We Are Tilt' ) { 
		remove_action( 'wp_head', '_wp_render_title_tag', 1 );
?>

		<title>Film - We Are Tilt - Brighton</title>
		<meta name="description" content="Beautiful short films that tell stories about people, places and ideas.">

<?php

	}
	elseif($htmltitle == 'motion Archives - We Are Tilt' ) { 
		remove_action( 'wp_head', '_wp_render_title_tag', 1 );
?>

		<title>Motion Graphics - We Are Tilt - Brighton</title>
		<meta name="description" content="Motion Graphics has no borders, if you can imagine it, we can build it. Vivid 2D and 3D pieces that explain ideas and spark interest in eye catching ways.">

<?php } ?>

	<?php wp_head(); ?>

	<meta name="theme-color" content="#ff0066">

	<!-- Minified Cookie Consent served from our CDN -->
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />

</head>



<body <?php body_class(); ?>>
<svg style="display: none; left: 0px;">
	<symbol id="burger" viewbox="0 0 27 19">
		<path class="nav-burger" d="M0 0h27v3H0zM0 8h27v3H0zM0 16h27v3H0z"/>
	</symbol>
	<symbol id="close" viewbox="0 0 18 18">
		<path class="nav-close-line-1" d="M1.575.16L17.84 16.425l-1.415 1.415L.16 1.574z"/>
		<path class="nav-close-line-1" d="M.16 16.425L16.425.16l1.415 1.415L1.574 17.84z"/>
	</symbol>
	<symbol id="facebook" viewbox="0 0 34 70">
		<path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" d="M13.92 1.62c.37-.23.77-.43 1.2-.6.4-.17.85-.32 1.35-.45l2.75-.55h1.8l12.7 1h.05l-1.3 11.8h-.05l-7-.75h-.2l-.7.1-.25.1-.8.4c-.17.03-.3.12-.4.25l-.6.65c-.13.17-.25.37-.35.6-.1.2-.18.42-.25.65-.07.23-.12.48-.15.75-.03.23-.05.48-.05.75l.1 7.4 10.3.1-1.5 11.7-8.9.35v34.05l-.05.05H7.73v-34.4H.23V23.83h7.2v-.1l.05-.15.25-12.55.1-.7v-.35l.1-.35c.03-.27.1-.52.2-.75.07-.23.17-.45.3-.65.13-.5.32-.95.55-1.35.2-.43.45-.85.75-1.25.23-.37.52-.72.85-1.05.3-.37.62-.7.95-1v-.06l2.39-1.9z"/>
	</symbol>
	<symbol id="twitter" viewbox="0 0 18 14">
		<path fill="#FFF" d="M17.52 1.72c-.63.28-1.3.47-2.01.55.72-.43 1.28-1.12 1.54-1.93-.68.4-1.42.69-2.22.85-.64-.68-1.55-1.1-2.55-1.1-1.93 0-3.49 1.57-3.49 3.5 0 .27.03.54.09.8-2.9-.15-5.48-1.54-7.2-3.65-.3.52-.47 1.12-.47 1.76 0 1.21.62 2.28 1.56 2.91-.59-.04-1.13-.2-1.6-.46v.04c0 1.69 1.2 3.11 2.8 3.43-.29.08-.6.12-.92.12-.23 0-.44-.02-.66-.06.44 1.39 1.73 2.4 3.26 2.43-1.2.94-2.7 1.5-4.34 1.5-.28 0-.56-.02-.83-.05 1.55.99 3.38 1.57 5.36 1.57 6.43 0 9.94-5.33 9.94-9.95 0-.15 0-.3-.01-.45.69-.5 1.28-1.11 1.75-1.81"/>
	</symbol>
	<symbol id="vimeo" viewbox="0 0 72 63">
		<path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" d="M3.36 21.36l-3.35-4.4 10.45-9.4c4.77-4.13 8.32-6.28 10.65-6.45 5.6-.5 9.03 3.33 10.3 11.5 1.47 9.03 2.45 14.55 2.95 16.55 1.6 7.33 3.37 11 5.3 11 1.53 0 3.78-2.38 6.75-7.15 3.07-4.73 4.68-8.35 4.85-10.85.43-4.1-1.18-6.15-4.85-6.15-1.73 0-3.5.38-5.3 1.15C44.64 5.59 51.41-.02 61.41.31c7.43.2 10.95 5 10.55 14.4-.37 7.03-5.27 16.65-14.7 28.85-9.8 12.77-18.08 19.15-24.85 19.15-4.17 0-7.72-3.9-10.65-11.7l-5.8-21.4c-2.17-7.77-4.48-11.65-6.95-11.65-.5 0-2.38 1.13-5.65 3.4z"/>
	</symbol>
	<symbol id="instagram" viewbox="0 0 17 17">
		<path fill="#FFFFFF" d="M13.72,0H3.28C1.47,0,0,1.47,0,3.28v3.47v6.96C0,15.53,1.47,17,3.28,17h10.43c1.81,0,3.29-1.47,3.29-3.29 V6.75V3.28C17,1.47,15.53,0,13.72,0z M14.66,1.96l0.38,0v0.37v2.51l-2.87,0.01l-0.01-2.88L14.66,1.96z M6.07,6.75 C6.62,6,7.5,5.51,8.5,5.51S10.38,6,10.93,6.75c0.36,0.49,0.57,1.09,0.57,1.75c0,1.65-1.34,2.99-2.99,2.99S5.51,10.15,5.51,8.5 C5.51,7.85,5.72,7.25,6.07,6.75z M15.35,13.72c0,0.9-0.73,1.63-1.63,1.63H3.28c-0.9,0-1.63-0.73-1.63-1.63V6.75h2.54 C3.97,7.29,3.85,7.88,3.85,8.5c0,2.56,2.09,4.65,4.65,4.65c2.56,0,4.65-2.09,4.65-4.65c0-0.62-0.12-1.21-0.34-1.75h2.54V13.72z"/>
	</symbol>
	<symbol id="youtube" viewbox="0 0 32 22">
		<path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M30.64,2.12c-0.88-1.54-1.83-1.83-3.74-1.95 C24.99,0.06,20.18,0,16,0l0,0C11.82,0,7.01,0.06,5.1,0.17C3.18,0.29,2.24,0.58,1.36,2.12C0.47,3.66,0,6.33,0,11l0,0c0,0,0,0,0,0 c0,0,0,0,0,0l0,0c0,4.67,0.47,7.34,1.36,8.88c0.88,1.54,1.83,1.83,3.74,1.95C7.01,21.94,11.82,22,16,22l0,0 c4.18,0,8.99-0.06,10.9-0.17c1.91-0.12,2.86-0.41,3.74-1.95C31.53,18.34,32,15.67,32,11c0,0,0,0,0,0c0,0,0,0,0,0 C32,6.33,31.53,3.66,30.64,2.12z M12.81,16.78V5.22L21.9,11L12.81,16.78z"/>
	</symbol>
	<symbol id="bakery" viewbox="0 0 32 32">
		<path fill="#FFFFFF" d="M27.3,10.67c-3.27,0-5.91-2.65-5.91-5.91c0-1.25,0.39-2.4,1.05-3.36C20.46,0.53,18.29,0.05,16,0.05 c-8.84,0-16,7.16-16,16s7.16,16,16,16s16-7.16,16-16c0-2.29-0.48-4.46-1.35-6.43C29.7,10.28,28.54,10.67,27.3,10.67z M16,21.96 c-3.27,0-5.91-2.65-5.91-5.91s2.65-5.91,5.91-5.91c3.27,0,5.91,2.65,5.91,5.91S19.27,21.96,16,21.96z"/>
	</symbol>
	<symbol id="tilt" viewbox="-4 0 44 40">
		<circle fill="#FF416F" cx="15.46" cy="6.11" r="3.15"/>
		<path  d="M37.6 11.73l.24-.99h-3.22c.85-3.8 1.62-7.11 1.9-8.49h-.32c-.13.43-.23.75-.32.94-1.14 2.51-3.47 2.92-5.43 2.11-.02 0-.03-.01-.05-.01l-1.21 5.45h-3.27C26.54 7.68 27 5.17 27 4.42c0-2.83-2.06-4.1-4.25-4.17-2.7-.09-4.23 1.01-5.35 2.55.12.08.22.14.34.22.88-1.19 1.98-1.93 2.9-1.93.57 0 1.42.28 1.42 1.38 0 .99-.72 4.73-1.64 9.11-.02.08-3.01 13.58-3.01 15.01 0 .69.13 1.3.34 1.81-.86 1.06-1.89 1.51-2.55 1.51-.57 0-1.42-.28-1.42-1.38 0-1.61 1.87-10.13 3.44-17.18l.15-.61H8.7c.85-3.8 1.62-7.11 1.9-8.49h-.32c-.13.43-.23.75-.32.94C8.82 5.71 6.5 6.12 4.54 5.31c-.02-.01-.04-.01-.05-.02l-1.21 5.45H.56l-.19.99h2.7C1.79 17.62.2 25.18.2 26.59c0 2.83 2.07 4.17 4.25 4.17 2.11 0 3.78-.65 4.91-2.02.74 1.37 2.21 2.02 3.74 2.02 2.07 0 3.72-.63 4.85-1.95.76 1.32 2.2 1.95 3.71 1.95 2.13 0 3.81-.66 4.94-2.06.74 1.39 2.22 2.06 3.76 2.06 2.11 0 3.78-.65 4.91-2.02-.1-.13-.14-.2-.25-.34-.92 1.11-1.88 1.52-2.55 1.52-.57 0-1.42-.28-1.42-1.38 0-1.58 1.8-9.83 3.35-16.8h3.2zM8.85 26.59c0 .66.12 1.24.32 1.74-.87 1.12-1.94 1.58-2.61 1.58-.57 0-1.42-.28-1.42-1.38 0-1.58 1.8-9.83 3.35-16.8h3.23c-1.28 5.89-2.87 13.45-2.87 14.86zm17.26 0c0 .64.11 1.2.3 1.69-.88 1.15-1.96 1.63-2.65 1.63-.57 0-1.42-.28-1.42-1.38 0-.58.24-2.06.63-4.04l.94-4.25.09-.4c.55-2.55 1.18-5.48 1.72-8.11h3.26c-1.27 5.89-2.87 13.45-2.87 14.86z"/>
	</symbol>
	<symbol id="news" viewbox="0 0 59 63">
        <path d="M56.11 13.63L29.19 24.86 2.75 13.64c-1.6-.66-2.75.19-2.75 1.9v32.63c0 1.71 1.15 3.65 2.75 4.32L26.37 62.5c1.59.66 4.13.66 5.72.01l24.04-10.04c1.59-.65 2.87-2.6 2.87-4.3V15.54c0-1.71-1.3-2.56-2.89-1.91z"/><path d="M29.2 20.2l12.49-5.36c.11-.67.16-1.35.16-2.05C41.85 5.73 36.27 0 29.38 0 22.48 0 16.9 5.73 16.9 12.79c0 .73.06 1.44.16 2.12L29.2 20.2z"/>
	</symbol>
	<symbol id="back" viewbox="0 0 21 19">
		<path fill="#FFF" d="M0 0h9v8H0zM12 0h9v8h-9zM0 11h9v8H0zM12 11h9v8h-9z"/>
	</symbol>
	<symbol id="menu" viewbox="-284 411.9 27 19">
	    <rect fill="#FFFFFF" width="27" height="3"/>
	    <rect y="8" fill="#FFFFFF" width="27" height="3"/>
	    <rect y="16" fill="#FFFFFF" width="27" height="3"/>
	</symbol>
	<symbol id="star" viewbox="0 0 43 41">
		<path fill="#fff" d="M21.5 0l6.64 13.5L43 15.66 32.25 26.17 34.79 41 21.5 34 8.21 41l2.54-14.83L0 15.66l14.86-2.16"/>
	</symbol>
	<symbol id="retweet" viewbox="0 0 43 41">
		<path fill="#FFF" d="M10.73 15.91c-3.58-.01-7.15.01-10.73-.01L14.59 0l14.58 15.9c-3.57.04-7.15-.01-10.72.02-.01 5.04-.01 10.08 0 15.12 3.86.03 12.42 0 16.28.02 2.49 2.66 5.05 5.24 7.51 7.92-8.14 0-19.37.02-31.52.02l.01-23.09zM54.27 23.09c3.58.01 7.15-.01 10.73.01L50.41 39 35.83 23.1c3.57-.04 7.15.01 10.72-.02.01-5.04.01-10.08 0-15.12-3.86-.03-12.42 0-16.28-.02-2.49-2.66-5.05-5.24-7.51-7.92C30.89.02 42.12 0 54.27 0v23.09z"/>
	</symbol>
	<symbol id="image" viewBox="0 0 238.3 231.8">
		<path fill="#424242" d="M217.3 210.9H21V21.2h196.3v189.7zM0 0v231.8h238.3V0H0z"/>
		<path fill="#424242" d="M160.8 135.1l-32.6 15-53.4-30-46.7 79.1h182.8zM185.4 81.2c0 11.4-9.3 20.7-20.7 20.7-11.4 0-20.7-9.3-20.7-20.7 0-11.5 9.3-20.7 20.7-20.7 11.4 0 20.7 9.3 20.7 20.7"/>
	</symbol>
</svg>
	<nav>
		<div id="tilt--logo" class="header-item header-item--logo">
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
		
		<?php get_template_part('content-header-menu');?>
		
    </nav>

<?php
    if ( ! post_password_required( $post ) ) {
          // Your custom code should here
      ?>

	<div class="wrapper"> <!-- Open Wrapper -->
	<?php } else {
		?>

		<div class="password-wrapper">

	<?php }?>

