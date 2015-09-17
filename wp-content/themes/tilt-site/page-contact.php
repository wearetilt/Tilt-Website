<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<script type="text/javascript">
	// When the window has finished loading create our google map below
	google.maps.event.addDomListener(window, 'load', init);

	officeLocation = new google.maps.LatLng(50.832132, -0.139421);

	function init() {
		// Basic options for a simple Google Map
		// For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
		var mapOptions = {
			// How zoomed in you want the map to start at (always required)
			zoom: 14,

			// The latitude and longitude to center the map (always required)
			center: officeLocation, // New York
			disableDefaultUI: false,
			scrollwheel: false,
			// How you would like to style the map.
			// This is where you would paste any style found on Snazzy Maps.
			styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
		};

		// Get the HTML DOM element that will contain your map
		// We are using a div with id="map" seen below in the <body>
		var mapElement = document.getElementById('map');

		// Create the Google Map using our element and options defined above
		var map = new google.maps.Map(mapElement, mapOptions);

		var myMarker = 0;

		var newMarker = {
			url: 'images/marker.png',
			size: new google.maps.Size(12, 12),
			origin: new google.maps.Point(0, 0),
			anchor: new google.maps.Point(6, 6),
			scaledSize: new google.maps.Size(12, 12)
		}

		if(!myMarker){
			var image = new google.maps.MarkerImage('<?php echo get_template_directory_uri(); ?>/images/marker.png',
			new google.maps.Size(14,14), //size
			new google.maps.Point(1,1), //origin
			null,
			new google.maps.Size(14,14)
			);

			myMarker = new google.maps.Marker({
				flat: true,
				icon: image,
				map: map,
				optimized: false,
				position: officeLocation,
				title: 'Our Office',
				visible: true
			});
		}

		// var iconBase = {
		//     url: "images/marker.png",
		//     size: new google.maps.Size(34,34),
		//     origin: new google.maps.Point(0,0),
		//     anchor: new google.maps.Point(17,17)
		// };

		// Let's also add a marker while we're at it

		// var marker = new google.maps.Marker({
		//     position: new google.maps.LatLng(50.832132, -0.139421),
		//     map: map,
		//     title: 'Our Office',
		//     icon: iconBase
		// });
	}
</script>

<header class="contact-page">
</header>

<div class="container area-dark">
	<section class="text-section">
		<h2>Welcome to Tilt</h2>
		<div class="text-section__para">
			<p class="first-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi a voluptatem maiores velit voluptate, asperiores vitae, quisquam ratione non laborum temporibus rem minima dolor, adipisci repudiandae aut numquam earum dignissimos? Iste a commodi enim voluptates, fuga amet omnis laborum saepe praesentium veniam asperiores quibusdam, magnam nesciunt reprehenderit ipsum totam aspernatur! Consequatur autem excepturi perferendis incidunt dolor culpa quod. Omnis, quos!</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi qui, praesentium aliquam, possimus rem, vitae consequatur et dignissimos quibusdam quas dolores modi suscipit minus quis cumque! Distinctio totam molestiae porro! Deserunt ipsam voluptatibus esse qui quod praesentium iusto eveniet, culpa! Suscipit incidunt fugit illum, quaerat atque rerum, numquam illo quis, tenetur hic assumenda praesentium ad. Magni vero consequuntur eos nesciunt!</p>
		</div>
	</section> <!-- /end text-section -->
</div> <!-- /end container -->

<div class="container container--no-padding">
	<div id="map">
	</div>
	<div class="map-overlay">
		<h3 class="light marker">Call us</h3>
		<span>+44(0)1273675700</span>
		<h3 class="light marker">Our address</h3>
		<span>Unit 1, Pullman haul,</span>
		<span>41 New England Street,</span>
		<span>Brighton, East Sussex,</span>
		<span>BN1 4GQ, UK</span>
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

<?php get_footer(); ?>
