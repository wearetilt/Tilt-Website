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
	<script type="text/javascript">
		window.directoryURI = "<?php echo get_template_directory_uri(); ?>";
	</script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAXrz6wY5cdWYYsdOr041i9Cdb74DjOHns&sensor=false"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<nav>
        <div class="header-item header-item--logo">
			<a href="<?php echo site_url(); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/images/tilt-logo.png" alt="">
			</a>
        </div>
        <div id="menuButton" class="header-item header-item--menu">
			<img src="<?php echo get_template_directory_uri(); ?>/images/menu-burger.png" alt="">
        </div>
        <div id="pageMenu" class="menu">
            <ul class="menu__items">
				<li class="menu__item"><a href="<?php echo site_url(); ?>/work">Work</a></li>
                <li class="menu__item"><a href="<?php echo site_url(); ?>/staff">About</a></li>
                <li class="menu__item"><a href="<?php echo site_url(); ?>/news">News</a></li>
                <li class="menu__item"><a href="">Bakery</a></li>
                <li class="menu__item"><a href="">Careers</a></li>
                <li class="menu__item"><a href="<?php echo site_url(); ?>/contact">Contact</a></li>
            </ul>
        </div> <!-- /end menu -->
    </nav>
	<div class="wrapper"> <!-- Open Wrapper -->
