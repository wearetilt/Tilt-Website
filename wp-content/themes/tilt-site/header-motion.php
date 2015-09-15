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
		<header class="work-item work-item--motion area-dark">
	        <div class="module--video module--header">
	            <div id="header-play" class="header-play">

	            </div>
	            <div class="ratio">
	                <video id="header-video-player" class="video-js vjs-default-skin" autoplay loop muted width="100%" height="100%" >
	                        <source id="header-video" src="<?php echo get_template_directory_uri(); ?>/video/test-video.mp4" type="video/mp4">
	                </video>
	            </div>
	        </div>
	        <div class="container container--header">
	            <div class="header-title">
	                <p class="tag tag--no-italic">Motion</p>
	                <h1>Barclays<br />
	                    <span class="light underlined">Being Barclays</span>
	                </h1>
	                <h2 class="light">Content strategy | Film</h2>
	            </div>
	            <div class="header-text">
	                <div class="header-text__module header-text__module--padding">
	                    <h2>The brief</h2>
	                    <p class="first-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis nostrum, recusandae nobis nulla sapiente repellendus quia odio! Quibusdam veritatis placeat qui omnis doloremque rem veniam itaque tenetur inventore, amet, voluptates.</p>
	                </div>
	                <div class="header-text__module header-text__module--padding">
	                    <h2>The solution</h2>
	                    <p class="first-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi hic reiciendis perspiciatis voluptate numquam, laboriosam, incidunt accusantium quae, officia, doloremque eius? Vero deleniti soluta, totam nam ea quo recusandae cupiditate.</p>
	                </div>
	            </div>
	        </div>
	    </header>
