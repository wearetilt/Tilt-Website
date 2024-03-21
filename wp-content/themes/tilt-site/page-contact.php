<?php
/*
Template Name: Contact EN
*/
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
	officeLocationCA = new google.maps.LatLng(49.323680, -123.103750);

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


		var mapOptions = {
			// How zoomed in you want the map to start at (always required)
			zoom: 14,

			// The latitude and longitude to center the map (always required)
			center: officeLocationCA, // New York
			disableDefaultUI: false,
			scrollwheel: false,
			// How you would like to style the map.
			// This is where you would paste any style found on Snazzy Maps.
			styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"transit.line","elementType":"geometry.fill","stylers":[{"color":"#292929"}]},{"featureType":"transit.line","elementType":"geometry.stroke","stylers":[{"color":"#292929"}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
		};

		var mapElement = document.getElementById('map2');

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

		var image = new google.maps.MarkerImage('<?php echo get_template_directory_uri(); ?>/images/marker.png',
			new google.maps.Size(25,25), //size
			new google.maps.Point(1,1), //origin
			null,
			new google.maps.Size(25,25)
		);

		myMarker = new google.maps.Marker({
				flat: true,
				icon: image,
				map: map,
				optimized: false,
				position: officeLocationCA,
				title: 'Our Office',
				visible: true
		});


	}
</script>


<div class="container area-dark contact--page">
	<section class="contact-section">

		<div class="contact-form-page">
			<div class="form-box">
			<div class="form-title">
				<h2>SEE HOW WE CAN HELP SHAPE YOUR STORY</h2>
			</div>
			<script charset="utf-8" type="text/javascript" src="//js-eu1.hsforms.net/forms/embed/v2.js"></script>
			<script>
				hbspt.forms.create({
					region: "eu1",
					portalId: "26948535",
					formId: "a9990d45-2108-4386-9a59-6c6e2ca49ddc"
 					 });
			</script>
			</div>
		</div>

		<div class="contact-section-info">
            <div class="section-info-container">
                <div class="left-col">
                    <div class="contact-item">
                        <h4>New Business Inquiries</h4>
                        <a class="contact-email" href="mailto:emma.depolnay@wearetilt.com">emma.depolnay@wearetilt.com</a>
                    </div>
                    <div class="contact-item">
                        <h4>Jobs &amp; Internships</h4>
                        <a class="contact-email" href="mailto:recruitment@wearetilt.com">recruitment@wearetilt.com</a>
                    </div>
                    <div class="contact-item">
                        <h4>General Enquiries</h4>
                        <a class="contact-email" href="mailto:studio@wearetilt.com">studio@wearetilt.com</a>
                    </div>
                </div>
                <div class="right-col">
                    <div class="address">
                        WEARETILT LTD<br />
                        41 NEW ENGLAND STREET,<br />
                        BRIGHTON, EAST SUSSEX,<br />
                        BN1 4GQ, UK
                    </div>
                    <div class="google-link"><a class="contact-email" href="https://www.google.co.uk/maps/dir//50.8319498,-0.1392226/@50.8321729,-0.1393055,19z/data=!4m2!4m1!3e0?hl=en&entry=ttu" target="_blank">Google maps</a></div>
                    <div class="tel"><a class="tel-link" href="tel:+441273675700">+44(0)1273 675 700</a></div>
                </div>
            </div>

		</div>


</div>

	</section> <!-- /end text-section -->

	<!-- <section class="contact-section">

		<div class="contact-section-info">

			<h2>Vancouver</h2>

			<div class="contact-title"><span class="light">Call us</span></div>
			<div class="contact-phone"><span class="light"><a title="Call tilt" href="tel:+17788356414">+1 (778) 835-6414</a></span></div>

			<div class="contact-title"><span class="light">Email</span></div>
			<a class="contact-email" href="mailto:bill.mackenzie@wearetilt.ca">bill.mackenzie@wearetilt.ca</a>

			<div class="contact-address">
			1061 Marine Drive,  Suite 216 <br>
			North Vancouver, BC  CANADA V7P 1S6
			</div>

			<div class="contact-directions">
				<a class="cube--link" target="_blank" href="https://www.google.co.uk/maps/dir//1061+Marine+Dr+%23216,+North+Vancouver,+BC+V7P+3M6,+Canada/@49.3237127,-123.1388464,13z/data=!3m1!4b1!4m9!4m8!1m0!1m5!1m1!1s0x548671d288618c47:0xa410c94e2a818608!2m2!1d-123.1037413!2d49.3236621!3e0?hl=en">
					<div class="cube">
						<div class="cube--front">
							<p class="sans-serif">Get directions</p>
						</div>
						<div class="cube--top">
							<p class="sans-serif">Get directions</p>
						</div>
					</div>
				</a>
			</div>
		</div>

		<div class="map" id="map2"></div> -->


	</section> <!-- /end text-section -->
</div> <!-- /end container -->

</div>

<?php get_footer(); ?>
