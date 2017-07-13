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
<div id="careers">
	<div class="container container--double-side-pad area-dark container--mobile-header-spacing">
		<div class="text-container">
			<p class="first-para sans-serif"><strong class="highlight">A strong creative fusion</strong> binds the eclectic skills and charisma of our team.
			We bring together a collaboration of creative individuals whose passion for what they do has a dynamic spark and friction which ignites minds, generating the best ideas and unique creative, time after time.</p>
		</div>
	</div> <!-- /end container -->
</div>

<div class="container container--mobile-careers">
	<div class="container container--half-both area-dark">
		<h1>Job board</h1>

		<?php
			$posts = get_posts('post_status=publish&category_name=jobs-board&posts_per_page=4');
			if (!$posts) :
		?>
			<div class="container container--half-both area-dark">
				<h2>No job openings at this time.</h2>
			</div>
		<?php
			endif;
		?>
	</div>
	<?php
		if ($posts):
	?>
		<div class="group-container">
			<div class="group group--left group--jobs">
				<?php $i = 0; ?>
				<?php foreach($posts as $post): ?>
					<?php $i++; ?>
				<a href="<?php echo get_permalink($post); ?>">
					<div class="module module--1-1 module--job module--visible area-dark">
						<div class="module__text">
							<div class="icon-holder">
								<?php switch ($i) {
									case 1:
									case 3: ?>
										<svg id="motion" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 110 98">
										    <g id="three_circles">
										    	<circle class="st0" cx="15" cy="32.5" r="3.8"/>
										    	<circle class="st0" cx="95.4" cy="66.1" r="3.8"/>
										    	<circle class="st0" cx="55" cy="50.5" r="3.8"/>
										    </g>
										    <path id="wobbly" class="st1" d="M55,28.1c-6.7,0-6.7-4.7-13.5-4.7c-6.7,0-6.7,4.7-13.5,4.7s-6.7-4.7-13.4-4.7S8,28.1,1.2,28.1
										    	 M55,28.1c6.7,0,6.7-4.7,13.4-4.7s6.7,4.7,13.4,4.7s6.7-4.7,13.5-4.7c6.7,0,6.7,4.7,13.5,4.7 M1.2,79.6c6.7,0,6.7-4.7,13.4-4.7
										    	s6.7,4.7,13.4,4.7s6.7-4.7,13.5-4.7c6.7,0,6.7,4.7,13.5,4.7 M55,79.6c6.7,0,6.7-4.7,13.4-4.7s6.7,4.7,13.4,4.7s6.7-4.7,13.5-4.7
										    	c6.7,0,6.7,4.7,13.5,4.7 M14.7,67.3c6.7,0,6.7,4.7,13.4,4.7s6.7-4.7,13.5-4.7 M68.5,31.1c6.7,0,6.7,4.7,13.4,4.7s6.7-4.7,13.5-4.7"
										    	/>
										    <g id="stroke">
										    	<path class="st2" d="M83.1,86.2c-0.5,0.4-1.1,0.8-1.6,1.2"/>
										    	<path class="st2" d="M71.1,93c-5,1.9-10.4,2.9-16,2.9c-8.4,0-16.2-2.3-23-6.2"/>
										    	<path class="st2" d="M27.2,86.3c-0.5-0.4-1-0.8-1.5-1.3"/>
										    	<g>
										    		<path class="st2" d="M20.4,18.1c0.4-0.5,0.9-1,1.3-1.5"/>
										    		<path class="st3" d="M30.7,9.1C37.8,4.6,46.1,2,55,2c10.4,0,20,3.5,27.7,9.4"/>
										    		<path class="st2" d="M87.1,15.3c0.5,0.5,0.9,1,1.4,1.4"/>
										    	</g>
										    </g>
										  </svg>
										<?php break;
									case 2:
									case 4:
									?>
									<svg version="1.1" id="designer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 108 87">
									    <g id="designer_shapes">
									    	<path class="st1" d="M64.2,5.9c6.2,0,6.2,4.4,12.5,4.4c6.2,0,6.2-4.4,12.5-4.4 M90.8,41.9c0,8-6.5,14.4-14.4,14.4
									    		c-8,0-14.4-6.5-14.4-14.4c0-8,6.5-14.4,14.4-14.4S90.8,33.9,90.8,41.9z"/>
									    	<path class="st1" d="M76.7,33.2c4.8,0,8.7,3.9,8.7,8.7s-3.9,8.7-8.7,8.7c-2.4,0-4.6-1-6.2-2.6"/>
									    	<path class="st1" d="M49,81.7c-6.2,0-6.2-4.4-12.5-4.4s-6.2,4.4-12.5,4.4"/>
									    	<path class="st1" d="M21.1,34.4l7.5,7.5l-7.5,7.5l7,7l7.5-7.5l7.4,7.5l7-7l-7.4-7.5l7.4-7.5l-7-6.9l-7.4,7.4l-7.5-7.4L21.1,34.4z"
									    		/>
									    	<path class="st1" d="M28.1,49.5l7.5-7.5l7.4,7.5"/>
									    </g>
									    <g id="designer_circles">
									        <circle class="st0" cx="92.7" cy="5.9" r="3.6"/>
									        <circle class="st0" cx="20.5" cy="81.7" r="3.6"/>
									    </g>
									    <path class="st2" d="M1.7,41.6c0-19.7,16-35.7,35.7-35.7 M106.7,46c0,19.7-16,35.7-35.7,35.7"/>
								    </svg>
									<?php
								 } ?>
							</div>
							<h3><?php echo $post->post_title; ?></h3>
							<p><?php echo $post->post_excerpt; ?></p>
						</div>
					</div>
				</a>
					<?php if($i == 2) : ?>
						</div>

						<div class="group group--right group--jobs">

					<?php endif; ?>
				<?php endforeach; ?>
			</div>
		</div>
	<?php endif; ?>


<!--
			<a href="../drupal-developer">
				<div class="module module--1-1 module--job module--visible area-dark">
					<div class="module__text">
						<div class="icon-holder">
							<svg version="1.1" id="designer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 108 87">
						    <g id="designer_shapes">
						    	<path class="st1" d="M64.2,5.9c6.2,0,6.2,4.4,12.5,4.4c6.2,0,6.2-4.4,12.5-4.4 M90.8,41.9c0,8-6.5,14.4-14.4,14.4
						    		c-8,0-14.4-6.5-14.4-14.4c0-8,6.5-14.4,14.4-14.4S90.8,33.9,90.8,41.9z"/>
						    	<path class="st1" d="M76.7,33.2c4.8,0,8.7,3.9,8.7,8.7s-3.9,8.7-8.7,8.7c-2.4,0-4.6-1-6.2-2.6"/>
						    	<path class="st1" d="M49,81.7c-6.2,0-6.2-4.4-12.5-4.4s-6.2,4.4-12.5,4.4"/>
						    	<path class="st1" d="M21.1,34.4l7.5,7.5l-7.5,7.5l7,7l7.5-7.5l7.4,7.5l7-7l-7.4-7.5l7.4-7.5l-7-6.9l-7.4,7.4l-7.5-7.4L21.1,34.4z"
						    		/>
						    	<path class="st1" d="M28.1,49.5l7.5-7.5l7.4,7.5"/>
						    </g>
						    <g id="designer_circles">
						        <circle class="st0" cx="92.7" cy="5.9" r="3.6"/>
						        <circle class="st0" cx="20.5" cy="81.7" r="3.6"/>
						    </g>
						    <path class="st2" d="M1.7,41.6c0-19.7,16-35.7,35.7-35.7 M106.7,46c0,19.7-16,35.7-35.7,35.7"/>
						    </svg>
						</div>
						<h3>Drupal Developer</h3>
						<p>Are you a freelance developer with a solid understanding of Drupal & Domino.</p>
					</div>
				</div>
			</a>
		</div>
		<div class="group group--right group--jobs">
			<a href="../web-developer">
				<div class="module module--1-1 module--job module--visible area-dark">
					<div class="module__text">
						<div class="icon-holder">
							<svg id="motion" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 110 98">
						    <g id="three_circles">
						    	<circle class="st0" cx="15" cy="32.5" r="3.8"/>
						    	<circle class="st0" cx="95.4" cy="66.1" r="3.8"/>
						    	<circle class="st0" cx="55" cy="50.5" r="3.8"/>
						    </g>
						    <path id="wobbly" class="st1" d="M55,28.1c-6.7,0-6.7-4.7-13.5-4.7c-6.7,0-6.7,4.7-13.5,4.7s-6.7-4.7-13.4-4.7S8,28.1,1.2,28.1
						    	 M55,28.1c6.7,0,6.7-4.7,13.4-4.7s6.7,4.7,13.4,4.7s6.7-4.7,13.5-4.7c6.7,0,6.7,4.7,13.5,4.7 M1.2,79.6c6.7,0,6.7-4.7,13.4-4.7
						    	s6.7,4.7,13.4,4.7s6.7-4.7,13.5-4.7c6.7,0,6.7,4.7,13.5,4.7 M55,79.6c6.7,0,6.7-4.7,13.4-4.7s6.7,4.7,13.4,4.7s6.7-4.7,13.5-4.7
						    	c6.7,0,6.7,4.7,13.5,4.7 M14.7,67.3c6.7,0,6.7,4.7,13.4,4.7s6.7-4.7,13.5-4.7 M68.5,31.1c6.7,0,6.7,4.7,13.4,4.7s6.7-4.7,13.5-4.7"
						    	/>
						    <g id="stroke">
						    	<path class="st2" d="M83.1,86.2c-0.5,0.4-1.1,0.8-1.6,1.2"/>
						    	<path class="st2" d="M71.1,93c-5,1.9-10.4,2.9-16,2.9c-8.4,0-16.2-2.3-23-6.2"/>
						    	<path class="st2" d="M27.2,86.3c-0.5-0.4-1-0.8-1.5-1.3"/>
						    	<g>
						    		<path class="st2" d="M20.4,18.1c0.4-0.5,0.9-1,1.3-1.5"/>
						    		<path class="st3" d="M30.7,9.1C37.8,4.6,46.1,2,55,2c10.4,0,20,3.5,27.7,9.4"/>
						    		<path class="st2" d="M87.1,15.3c0.5,0.5,0.9,1,1.4,1.4"/>
						    	</g>
						    </g>
						    </svg>
						</div>
						<h3>Web Developer</h3>
						<p>We're after a web developer to join our team at Tilt on a full-time basis</p>
					</div>
				</div>
			</a>
			<a href="../production-manager">
				<div class="module module--1-1 module--job module--visible area-dark">
					<div class="module__text">
						<div class="icon-holder">
							<svg version="1.1" id="designer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 108 87">
						    <g id="designer_shapes">
						    	<path class="st1" d="M64.2,5.9c6.2,0,6.2,4.4,12.5,4.4c6.2,0,6.2-4.4,12.5-4.4 M90.8,41.9c0,8-6.5,14.4-14.4,14.4
						    		c-8,0-14.4-6.5-14.4-14.4c0-8,6.5-14.4,14.4-14.4S90.8,33.9,90.8,41.9z"/>
						    	<path class="st1" d="M76.7,33.2c4.8,0,8.7,3.9,8.7,8.7s-3.9,8.7-8.7,8.7c-2.4,0-4.6-1-6.2-2.6"/>
						    	<path class="st1" d="M49,81.7c-6.2,0-6.2-4.4-12.5-4.4s-6.2,4.4-12.5,4.4"/>
						    	<path class="st1" d="M21.1,34.4l7.5,7.5l-7.5,7.5l7,7l7.5-7.5l7.4,7.5l7-7l-7.4-7.5l7.4-7.5l-7-6.9l-7.4,7.4l-7.5-7.4L21.1,34.4z"
						    		/>
						    	<path class="st1" d="M28.1,49.5l7.5-7.5l7.4,7.5"/>
						    </g>
						    <g id="designer_circles">
						        <circle class="st0" cx="92.7" cy="5.9" r="3.6"/>
						        <circle class="st0" cx="20.5" cy="81.7" r="3.6"/>
						    </g>
						    <path class="st2" d="M1.7,41.6c0-19.7,16-35.7,35.7-35.7 M106.7,46c0,19.7-16,35.7-35.7,35.7"/>
						    </svg>
						</div>

						<h3>Production Manager</h3>
						<p>We're looking for a great PM to join our dynamic team.</p>
					</div>
				</div>
			</a>
		</div>
	</div>
</div> -->

<div class="container container--half-top">
	<div class="group-container careers">

		<div class="group group--left">
			<h1>From intern<br />to fulltime</h1>
			<div class="module module--2-2 module--no-bg careers--image">
				<div class="module__text text-align module__description">
					<img class="careers--img" src="<?php echo get_template_directory_uri(); ?>/images/miles-image-v3.png" alt="Miles Tincknell">
					<h2>Miles Tincknell</h2>
					<h3 class="light">Developer</h3>
				</div>
				<p class="text-center">“Miles prides himself in being a full stack developer where no problem is too big, or issue too small to demand his attention. In other words, the ideal Tilter.”</p>
				<p class="first-para">Why did you want a career in web development?</p>
				<p>I started out with a passion for digital design. It wasn't until I started to recognise the power of the web as a global, ubiquitous medium that I began to get interested in actually acquiring the skills needed to master the digital domain, a goal I am still a long way from hitting.</p>

				<p class="first-para">What made you want to intern at Tilt?</p>
				<p>The show-reel featured an eclectic range of projects ranging from the big and broad to the small and focused. They also looked for potential just as much as experience.</p>

				<p class="first-para">What were your highs during your time as an intern?</p>
				<p>Working on the PBS games, I mean, who doesn't want to get the opportunity to work on games?! Creating and playing with game mechanics while using the modern environment of HTML5 and JS. This got me enjoying my internship.</p>

				<p class="first-para">Any lows? Be honest…</p>
				<p>When Banjo (one of two Tilt dogs) left for a while.</p>

				<p class="first-para">How did it feel to be offered a job at the end of your internship?</p>
				<p>It felt amazing to have had my hard work and effort recognised. I was so happy that I even gave an impassioned speech. Rumours are that there were tears.</p>

				<p class="first-para">What kind of projects excite you, particularly at Tilt?</p>
				<p>Ones where the whole team and office are collaborating in a manor that benefits all. Ones where you feel like you are all working towards a common and shared goal and are helping each other out, with discussion, listening, learning and progressing. Also the ones where you get to make cool shit. </p>

				<p class="first-para">Is there anyone in particular you look up to in the workplace?</p>
				<p>It's hard not to admire the range and skill of everyone involved in the office, it feels more like a team than something focused on any individual. </p>

				<p class="first-para">What advice would you give to a future intern at Tilt?</p>
				<p>Make it a point to mention what you want to work on, approach people and hold an informed opinion on things we are doing in order to stay involved and ultimately, enjoy it. The more you can get involved in, the more you can get out of it.  </p>

			</div>
		</div>

		<div class="group group--right">
			<h1>From freelance<br />to fulltime</h1>
			<div class="module module--2-2 module--no-bg careers--image">
				<div class="module__text text-align module__description">
					<img class="careers--img" src="<?php echo get_template_directory_uri(); ?>/images/dave-image-v3.png" alt="Dave Weiss">
					<h2>Dave Weiss</h2>
					<h3 class="light">Designer</h3>
				</div>

				<p class="text-center">“Dave's design flair, approach to the creative process and all-round niceness made offering him a permanent position a no-brainer.”</p>

				<p class="first-para">Why did you want a career in design?</p>
				<p>So that I could be confronted every day with art and creativity.</p>

				<p class="first-para">What made you want to work at Tilt?</p>
				<p>The high quality of their work client work, the place (Brighton), the fact that they push everything to the next level, and the quality of clients Tilt works with.</p>

<!-- 				<p class="first-para">High point as an freelancer?</p>
				<p>TODO, this needs to be redone now the content has changed: Confirmation of my internship just between 1 day after I sent over my portfolio, and then to work straight away on major project like Barclays, BP and nickelodeon. </p>

				<p class="first-para">Any lows, be honest…</p>
				<p>Not any crucial lows yet to be honest, I’m just missing Schnitzels and Leberkas during lunch breaks. (Dave is from Austria.)</p>
 -->
				<p class="first-para">How did it feel to be offered a job?</p>
				<p>Overwhelming, as the team put so much trust and belief in me and it’s just real big fun for me to work in this snazzy environment every day.</p>

				<p class="first-para">What projects excite you?</p>
				<p>I love long term projects, which are really complex, detailed and challenging.</p>

				<p class="first-para">Is there anyone in particular you look up to in the workplace?</p>
				<p>Merass, the Director of Film Production; he lounges so hard in his chair even though he is a new father and has loads to do.</p>

				<p class="first-para">What advice would you give to a future freelancer at Tilt?</p>
				<p>Don’t hesitate and just apply. Expect a friendly environment, a high level of work standards and when you start working here bear one thing in mind: don’t use someone else's mug…</p>


			</div>

		</div>
	</div>
</div>

</div>
<?php get_footer(); ?>
