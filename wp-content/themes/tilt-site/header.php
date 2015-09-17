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
