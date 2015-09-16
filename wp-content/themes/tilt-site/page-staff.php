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

	<div class="container container--no-padding">
		<div class="group-container">
			<div id="Staff-1" class="module module--staff"></div>
			<div id="Staff-2" class="module module--staff"></div>
			<div id="Staff-3" class="module module--staff"></div>
			<div id="Staff-4" class="module module--staff"></div>
			<div id="Staff-5" class="module module--staff"></div>
			<div id="Staff-6" class="module module--staff"></div>
			<div id="Staff-7" class="module module--staff"></div>
			<div id="Staff-8" class="module module--staff"></div>
			<div id="Staff-9" class="module module--staff"></div>
			<div id="Staff-10" class="module module--staff"></div>
			<div id="Staff-11" class="module module--staff"></div>
			<div id="Staff-12" class="module module--staff"></div>
			<div id="Staff-13" class="module module--staff"></div>
			<div id="Staff-14" class="module module--staff"></div>
			<div id="Staff-15" class="module module--staff"></div>
			<div id="Staff-16" class="module module--staff"></div>
			<div id="staff-member">
				<div id="staff-member__wrapper">
					<div id="staff-member__info" class="area-dark no-background">
						<div id="staff-member__close"></div>
						<h1 id="staff-member__name"></h1>
						<h2 id="staff-member__position"></h2>
						<h2 id="staff-member__department"></h2>
						<p id="staff-member__about" class="first-para"></p>
						<p id="staff-member__did-you-know" class="sans-serif"></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
	var httpRequest;
	var staffData;
	if (window.XMLHttpRequest) { // Mozilla, Safari, IE7+ ...
	    httpRequest = new XMLHttpRequest();
	} else if (window.ActiveXObject) { // IE 6 and older
	    httpRequest = new ActiveXObject("Microsoft.XMLHTTP");
	}

	httpRequest.onreadystatechange = function() {
	    if(httpRequest.readyState == 4){
	        staffData = httpRequest.responseText;
	        staffData = JSON.parse(staffData);
	        console.log(staffData);
	    } else {

	    }
	};

	httpRequest.open('GET', 'http://10.5.10.103/tilt-website/tilt-site_tidy/staff.json', true);
	httpRequest.setRequestHeader('Content-Type', 'application/json');
	httpRequest.send(null);
	</script>

<?php get_footer(); ?>
