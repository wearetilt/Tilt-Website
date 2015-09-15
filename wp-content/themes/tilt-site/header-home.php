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
	<meta name="viewport" content="width=device-width initial-scale=1">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<nav>
        <div class="header-item header-item--logo">
        </div>
        <div id="menuButton" class="header-item header-item--menu">
        </div>
        <div id="pageMenu" class="menu">
            <ul class="menu__items">
                <li class="menu__item"><a href="">Work</a></li>
                <li class="menu__item"><a href="">About</a></li>
                <li class="menu__item"><a href="">News</a></li>
                <li class="menu__item"><a href="">Bakery</a></li>
                <li class="menu__item"><a href="">Careers</a></li>
                <li class="menu__item"><a href="">Contact</a></li>
            </ul>
        </div> <!-- /end menu -->
    </nav>
	<div class="wrapper"> <!-- Open Wrapper -->
		<header id="home-page" class="work-item work-item--motion area-dark">
	        <div class="module--video module--header">
				<div id="header-play" class="header-play">

				</div>
	            <div class="ratio">
	                <div class="container container--header strapline-container">
	                    <h1>We Are <strong id="strapline-text" class="highlight">Time Travellers</strong></h1>
	                    <div class="cube">
	                        <div class="cube--front cube--front__no-bg">
	                            <p class="sans-serif">Contact Us</p>
	                        </div>
	                        <div class="cub--top cube--top__no-bg">
	                            <p class="sans-serif">Please</p>
	                        </div>
	                    </div>
	                </div>
	                <video id="header-video-player" class="video-js vjs-default-skin" autoplay loop muted width="100%" height="100%" >
	                        <source id="header-video" src="<?php echo get_template_directory_uri(); ?>/video/test-video.mp4" type="video/mp4">
	                </video>
	            </div>
	        </div>
	    </header>

	    <div id="header-overlay" class="container container--header area-dark">
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
