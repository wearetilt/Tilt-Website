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
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAXrz6wY5cdWYYsdOr041i9Cdb74DjOHns&sensor=false"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<nav>
        <div id="tilt--logo" class="header-item header-item--logo">
			<a href="<?php echo site_url(); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/images/tilt-logo_sm.png" alt="">
			</a>
        </div>
       
        <a id="closeButton" class="header-item header-item--menu">Close</a>
    </nav>
	<div class="wrapper wrapper--old-browser"> <!-- Open Wrapper -->
