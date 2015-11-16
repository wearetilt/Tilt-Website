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

<header class="about-page">
	<div class="module module--16-5 module--video module--visible">
		 <div class="ratio">
			 <video id="about-page--video" poster="<?php echo get_template_directory_uri(); ?>/images/contact_poster.jpg" autoplay="true" loop="true" muted="true">
					 <source src="https://player.vimeo.com/external/141399412.hd.mp4?s=3f1574fa69a9ae469f325e2b05972a6e&profile_id=113" type="video/mp4">
			 </video>
		 </div>
	 </div> <!-- /end module -->
</header>

<div class="container container--double-side-pad area-dark">
	<div class="text-container">
		<p class="first-para sans-serif"><strong class="highlight">WE ARE TILT.</strong> WE BUILD WORLDS AND TELL STORIES ACROSS DESIGN, INTERACTIVE, MOTION & FILM. OUR WORK FITS INTO THREE MAIN AREAS:</p>	
	</div>
</div> <!-- /end container -->


<section>
	<div class="group-container">
		
		<div class="group group--right">
			<div class="module module--2-2">
		       <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/about/internal_communications.jpg')"></div>
			</div>
		</div>
		<div class="group group--left">
			<div class="module module--2-2 module--dark">
		       					
				<div class="module__text">
					<h2 class="underlined">REDEFINING INTERNAL COMMUNICATIONS</h2>
					<p class="first-para tag--work-title">We have a simple philosophy: treat internal communications with the same respect, craft and creativity as any other channel. It’s an approach that has helped us change the way many large organisations communicate with and educate their employees – from BP and Barclays to Reliance; India’s largest private company.</p>
				</div>

			</div>
		</div> <!-- /end group -->

	</div>
	
</section>

<section>
	<div class="group-container">
		
		<div class="group group--right">
			
			<div class="module module--2-2 module--dark module--dark-mobile">
		       					
				<div class="module__text">
					<h2 class="underlined">CREATIVE CONTENT FOR BRANDS & BUSINESS</h2>
					<p class="first-para tag--work-title">Here’s something we love: taking a brief and coming up with ideas way beyond a client’s expectations. From ads, idents and short films, to interactive games, animations and websites, we design content and platforms that make people sit up and take notice.</p>
				</div>

			</div>
			
		</div>
		<div class="group group--left">
					       					
			<div class="module module--2-2">
				<div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/about/creative_content.jpg')"></div>
			</div>
		
		</div> <!-- /end group -->

	</div>
	
</section>

<section>
	<div class="group-container">
		
		<div class="group group--right">
			<div class="module module--2-2">
		       <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/about/internal_communications.jpg')"></div>
			</div>
		</div>
		<div class="group group--left">
			<div class="module module--2-2 module--dark">
		       					
				<div class="module__text">
					<h2 class="underlined">GRADUATE ATTRACTION & RETENTION</h2>
					<p class="first-para tag--work-title">Talent attracts talent. We help clients to recruit the brightest graduates by showcasing what makes their organisations great places to build a career. From intuitive graduate portals, to engaging recruitment films, we’ve helped the likes of BP, ICAP and some of the world’s biggest law firms to land the smartest grads on the block.</p>
				</div>

			</div>
		</div> <!-- /end group -->

	</div>
	
</section>


<section>
	<div class="group-container">
		<div class="group group--left">
			<div class="module module--2-1">
				<div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/about/backshot_pbs.jpg')"></div>
			</div>
		</div>
		
		<div class="group group--right">
			<div class="module module--2-1">
				<div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/about/inkshot.jpg')"></div>
			</div>
		</div>
	
	</div>
</section>


<div class="container container--double-side-pad container--our-services">
	
	<div class="text-container center">
		<h2 class="about">OUR DEPARTMENTS</h2>
		<p>Tilt is made up of specialists across web & mobile, interactive, motion and film. Our open studio is built for collaboration, making it easy to let ideas collide across departments; like shaking a snow globe.</p>
	</div>
	
	<div class="group-container container--about-pad">
		
		<div class="group group--left">
			
			<a href="web-services">		       					
				<div class="module module--2-2 about-service">
			       	<div class="module__text">			
						<p id="web-sprite">Web & Mobile</p>
						<h3>WEB & MOBILE</h3>
						<p>Strategically designed digital products built to meet business and user needs across web & mobile.</p>
			       	</div>
				</div>
			</a>
		
		</div> <!-- /end group -->
		
		<div class="group group--right">
			
			<a href="interactive-services">		       					
				<div id="module--interactive-services" class="module module--2-2 about-service">
			       	<div class="module__text">
			       		<p id="interactive-sprite">INTERACTIVE</p>				
						<h3>INTERACTIVE</h3>
						<p>Immersive digital experiences, games and learning content designed to surprise and delight.</p>
			       	</div>
	
				</div>
			</a>
			
		</div>
		
	</div>
	
	<div class="group-container">
		
		<div class="group group--left">
					       					
			<a href="motion-services">		       					
				<div id="module--motion-services" class="module module--2-2 about-service">
			       	<div class="module__text">
			       		<p id="motion-sprite">MOTION</p>				
						<h3>MOTION</h3>
						<p>Vivid 2D and 3D rendered pieces that explain ideas in eye-catching ways.</p>
			       	</div>
				</div>
			</a>
		
		</div> <!-- /end group -->
		
		<div class="group group--right">
			
			<a href="film-services">		       					
				<div id="module--film-services" class="module module--2-2 about-service">
			       	<div class="module__text">
			       		<p id="film-sprite">Film</p>				
						<h3>FILM</h3>
						<p>Beautiful short films that tell stories about people, places and ideas.</p>
			       	</div>
				</div>
			</a>
			
		</div>
		
	</div>
	
	
</div>

<section>
	<div class="group-container">
		<div class="group group--left">
			<div class="module module--2-1">
				<div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/about/katie_smoke.jpg')"></div>
			</div>
		</div>
		
		<div class="group group--right">
			<div class="module module--2-1">
				<div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/about/south_downs_camera.jpg')"></div>
			</div>
		</div>
	
	</div>
</section>

<div class="container container--double-side-pad area-dark">
	<div class="text-container center">
		<h2 class="about">MEET OUR TEAM</h2>
		<p>We’re a properly collaborative team, and we love it that way. Meet the creative sparks that fire up the Tilt Studio.</p>
		<a class="cube--link" href="<?php echo site_url(); ?>/team">
			<div class="cube about--cube">
				<div class="cube--front">
					<p class="sans-serif button">MEET THE TEAM</p>
				</div>
				<div class="cube--top">
					<p class="sans-serif button">MEET THE TEAM</p>
				</div>
			</div>
		</a>
	</div>
</div> <!-- /end container -->
	

</div>



<?php get_footer(); ?>
