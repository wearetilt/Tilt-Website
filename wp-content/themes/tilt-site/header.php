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
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="wrapper">
		<header id="home-page" class="work-item work-item--motion area-dark">
	        <div class="module--video module--header">
	            <div id="header-play" class="header-play">
	            </div>
	            <div class="ratio">
	                <video id="header-video-player" class="video-js vjs-default-skin" autoplay loop muted width="100%" height="100%" >
	                        <source id="header-video" src="video/test-video.mp4" type="video/mp4">
	                </video>
	            </div>
	        </div>
	        <div class="container container--header">
	            <div class="text-container">
	                <p class="first-para sans-serif"><strong class="highlight">We are Tilt</strong> Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
	                <div class="cube">
	                	<div class="cube--front">
	                		<p class="sans-serif">Contact Us</p>
	                	</div>
	                	<div class="cub--top">
	                		<p class="sans-serif">Please</p>
	                	</div>
	                </div>
	            </div>
	        </div>
	    </header>
