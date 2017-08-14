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

get_header('contact'); ?>

<script type="text/javascript">
	// When the window has finished loading create our google map below
	google.maps.event.addDomListener(window, 'load', init);

	officeLocation = new google.maps.LatLng(50.8319498, -0.1392226);

	brightonStation = new google.maps.LatLng(50.829262, -0.141058);
	hoveStation = new google.maps.LatLng(50.835210, -0.17066);
	londonRoadStation = new google.maps.LatLng(50.836650, -0.13647);
	prestonParkStation = new google.maps.LatLng(50.845875, -0.155103);

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
			styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"transit.line","elementType":"geometry.fill","stylers":[{"color":"#292929"}]},{"featureType":"transit.line","elementType":"geometry.stroke","stylers":[{"color":"#292929"}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
			};

		// Get the HTML DOM element that will contain your map
		// We are using a div with id="map" seen below in the <body>
		var mapElement = document.getElementById('map');

		// Create the Google Map using our element and options defined above
		var map = new google.maps.Map(mapElement, mapOptions);

		var myMarker = 0;

		var newMarker = {
			url: 'images/marker.png',
			size: new google.maps.Size(39, 39),
			origin: new google.maps.Point(0, 0),
			anchor: new google.maps.Point(19, 19),
			scaledSize: new google.maps.Size(39, 39)
		}

		if(!myMarker){
			var image = new google.maps.MarkerImage('<?php echo get_template_directory_uri(); ?>/images/marker.png',
			new google.maps.Size(25,25), //size
			new google.maps.Point(1,1), //origin
			null,
			new google.maps.Size(25,25)
			);

			var stationIcon = new google.maps.MarkerImage('<?php echo get_template_directory_uri(); ?>/images/tilt-station.png',
			new google.maps.Size(13,17), //size
			new google.maps.Point(1,1), //origin
			null,
			new google.maps.Size(13,17)
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

			stationOne = new google.maps.Marker({
				flat: true,
				icon: stationIcon,
				map: map,
				optimized: false,
				position: brightonStation,
				title: 'Brighton Station',
				visible: true
			});

			stationTwo = new google.maps.Marker({
				flat: true,
				icon: stationIcon,
				map: map,
				optimized: false,
				position: londonRoadStation,
				title: 'London Road Station',
				visible: true
			});

			stationThree = new google.maps.Marker({
				flat: true,
				icon: stationIcon,
				map: map,
				optimized: false,
				position: prestonParkStation,
				title: 'Preston Park Station',
				visible: true
			});

			stationFour = new google.maps.Marker({
				flat: true,
				icon: stationIcon,
				map: map,
				optimized: false,
				position: hoveStation,
				title: 'Hove Station',
				visible: true
			});

		}

	}
</script>


<div class="container container--double-side-pad area-dark contact--page">
	<section class="text-section text-section--centre">
		<h2 class="contact-title"><span class="light">Call us</span></h2>
		<h2 class="contact-phone"><span class="light"><a title="Call tilt" href="tel:+441273675700">+44(0)1273 675 700</a></span></h2>
	
		<h2 class="contact-title"><span class="light">Jobs &amp; Internships</span></h2>
		<a class="contact-email" href="mailto:recruitment@wearetilt.com">recruitment@wearetilt.com</a>
		<h2 class="contact-title"><span class="light">New projects</span></h2>
		<a class="contact-email" href="mailto:jonathan.helm@wearetilt.com">jonathan.helm@wearetilt.com</a>
		<h2 class="contact-title"><span class="light">General Enquiries</span></h2>
		<a class="contact-email" href="mailto:studio@wearetilt.com">studio@wearetilt.com</a>


		<!--
<div class="worksheet-button-container">
			<p>Try our handy worksheet to help you define your project.</p>
			<a id="form_open" class="button" href="#">Open worksheet</a>
			<a id="form_close" class="button" href="#">Close worksheet</a>
		</div>
-->
	</section> <!-- /end text-section -->
</div> <!-- /end container -->


<div class="container container--no-padding">
	<div id="map">
	</div>
	<div class="map-overlay">
		<h3 class="light marker">Call us</h3>
		<span>+44(0)1273 675 700</span>
		<h3 class="light marker">Our address</h3>
		<span>Unit 1, Pullman haul,</span>
		<span>41 New England Street,</span>
		<span>Brighton, East Sussex,</span>
		<span>BN1 4GQ, UK</span>
		<a href="https://www.google.co.uk/maps/dir//50.8319498,-0.1392226/@50.8321729,-0.1393055,19.51z/data=!4m2!4m1!3e0?hl=en">
			<div class="cube">
					<div class="cube--front">
						<p class="sans-serif">Get Directions</p>
					</div>
					<div class="cube--top">
						<p class="sans-serif">Get Directions</p>
					</div>
			</div>
		</a>
	</div>

</div>

</div>

<?php get_footer(); ?>
