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
			 <video poster="<?php echo get_template_directory_uri(); ?>/images/contact_poster.jpg" autoplay="true" loop="true" muted="true">
					 <source src="https://player.vimeo.com/external/141399412.hd.mp4?s=3f1574fa69a9ae469f325e2b05972a6e&profile_id=113" type="video/mp4">
			 </video>
	 </div> <!-- /end module -->
</header>

<div class="container container--double-side-pad area-dark">
	<div class="text-container">
		<p class="first-para sans-serif"><strong class="highlight">WE ARE TILT </strong>BUILDING WORLDS AND TELLING STORIES ACROSS DESIGN, INTERACTIVE, MOTION & FILM.</p>
		<p class="sans-serif">In just a few years, we’ve helped redefine onboarding for one of the world’s biggest banks, rethink e-learning for a top-ten energy company, and inspire thousands of kids to get coding. We’ve made music videos, interactive games and cartoons, created award-winning websites, and filmed people from New York to Mumbai. </p>
		<p class="sans-serif">The project mix keeps us fresh, producing work that makes our clients very happy. Come meet the team&#8230;</p>
		
	</div>
</div> <!-- /end container -->

	
	

</div>



<?php get_footer(); ?>
