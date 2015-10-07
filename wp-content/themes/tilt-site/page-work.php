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

<header id="work_page" class="work-item work-item--motion area-dark">
    <div class="module--video module--header">
        <div id="header-play" class="header-play">
        
        	 <div class="container container--reel">
        
				 <p>REEL 2015</p>
      
			</div>
        
        </div>
        <div class="ratio">
            <video id="header-video-player" class="video-js vjs-default-skin" autoplay loop width="100%" height="100%" >
                    <source id="header-video" src="https://player.vimeo.com/external/141548149.hd.mp4?s=c38947ea65f3bad06d05e9881fe92ead&profile_id=113" type="video/mp4">
            </video>
        </div>
    </div>
    
    
   
    
    
    
    <div class="container container--header container--work-list">
        <span id="work_all" class="work-item-title">All</span>
        <span id="work_film"class="work-item-title">Film</span>
        <span id="work_interactive"class="work-item-title">Interactive</span>
        <span id="work_motion"class="work-item-title">Motion</span>
        <span id="work_web"class="work-item-title">Web</span>
    </div>
</header>

<div id="film" class="work-container container container--no-padding">
	<section>
		<div class="group-container">
			<div class="group group--right">

				<div class="module module--2-1">
                    <a href="<?php get_site_url(); ?>sdnpa">
    					<div class="overlay area-dark">
    						<div class="overlay-text">
    							<p class="tag">Work</p>
    							<h2><span class="light">South Downs<br />Discover Another Way</span></h2>
    						</div> <!-- /end overlay-text -->
    					</div> <!-- /end overlay -->
    					<div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/work_film_02_mr.jpg')">
    					</div>
                    </a>
				</div>
				<div class="module module--1-1">
                    <a href="<?php get_site_url(); ?>reliance">
    					<div class="overlay area-dark">
    						<div class="overlay-text">
    							<p class="tag">Work</p>
    							<h2><span class="light">Reliance<br />Onboarding</span></h2>
    						</div> <!-- /end overlay-text -->
    					</div> <!-- /end overlay -->
    					<div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/work_film_03_ss.jpg')">
    					</div>
                    </a>
				</div>
				<div class="module module--1-1 area-dark">
                    <a href="<?php get_site_url(); ?>barclays-values">
    					<div class="overlay area-dark">
    						<div class="overlay-text">
    							<p class="tag">Work</p>
    							<h2><span class="light">Barclays<br />Values</span></h2>
    						</div> <!-- /end overlay-text -->
    					</div> <!-- /end overlay -->
    					<div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/work_film_04_ss.jpg')">
    					</div>
                    </a>
				</div>
			</div>
			<div class="group group--left">
				<div class="module module--2-2">
                    <a href="<?php get_site_url(); ?>bp-fll-stories/">
    					<div class="overlay area-dark">
    						<div class="overlay-text">
    							<p class="tag">Case Study</p>
    							<h2>BP First Level Leaders<br />
    								<span class="underlined">Stories</span>
    							</h2>
    							<p class="sans-serif">Engage your audience on an emotional level.</p>
    						</div> <!-- /end overlay-text -->
    					</div> <!-- /end overlay -->
    					<div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/work_film_01_mr.jpg')">
    					</div>
                    </a>
				</div>
			</div> <!-- /end group -->
		</div> <!-- /end group-container -->
	</section>
</div> <!-- /end container -->

<div id="interactive" class="work-container container container--no-padding">
	<section>
		<div class="group-container">
			<div class="group group--left">

					<div class="module module--2-1 area-dark">
                        <a href="<?php get_site_url(); ?>code-it">
        					<div class="overlay area-dark">
        						<div class="overlay-text">
        							<p class="tag">Case Study</p>
        							<h2><span class="light">Nickelodeon<br />Code-It</span></h2>
        						</div> <!-- /end overlay-text -->
        					</div> <!-- /end overlay -->
        					<div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/work_int_01_ss.jpg')">
        					</div>
                        </a>
    				</div>

    				<div class="module module--1-1">
                        <a href="<?php get_site_url(); ?>sainsburys">
        					<div class="overlay area-dark">
        						<div class="overlay-text">
        							<p class="tag">Work</p>
        							<h2><span class="light">Sainsburys<br />History</span></h2>
        						</div> <!-- /end overlay-text -->
        					</div> <!-- /end overlay -->
        					<div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/work_int_02_ss.jpg')">
        					</div>
                        </a>
    				</div>
    				<div class="module module--1-1">
                        <a href="<?php get_site_url(); ?>pbs">
        					<div class="overlay area-dark">
        						<div class="overlay-text">
        							<p class="tag">Work</p>
        							<h2><span class="light">Passion Pictures<br />PBS</span></h2>
        						</div> <!-- /end overlay-text -->
        					</div> <!-- /end overlay -->
        					<div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/work_int_03_ss.jpg')">
        					</div>
                        </a>
    				</div>

			</div>
			<div class="group group--right">
				<div class="module module--2-2">
                    <a href="<?php get_site_url(); ?>alzheimers">
    					<div class="overlay area-dark">
    						<div class="overlay-text">
    							<p class="tag">Work</p>
    							<h2>Alzheimer's <br />
    								<span class="underlined">The Lab</span>
    							</h2>
    							<p class="sans-serif">How can you move people to really understand Alzheimer’s Disease?</p>
    						</div> <!-- /end overlay-text -->
    					</div> <!-- /end overlay -->
    					<div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/work_int_04_ls.jpg')">
    					</div>
                    </a>
				</div>
			</div> <!-- /end group -->
		</div> <!-- /end group-container -->
	</section>
</div> <!-- /end container -->

<div id="motion" class="work-container container container--no-padding">
	<section>
		<div class="group-container">
			<div class="group group--right">
                    <div class="module module--2-1 area-dark">
                        <a href="<?php get_site_url(); ?>take-the-lead">
                            <div class="overlay area-dark">
                                <div class="overlay-text">
                                    <p class="tag">Work</p>
                                    <h2><span class="light">South Downs<br />Take the Lead</span></h2>
                                </div> <!-- /end overlay-text -->
                            </div> <!-- /end overlay -->
                            <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/work_motion_02_ss.jpg')">
                            </div>
                        </a>
                    </div>
    				<div class="module module--1-1">
                        <a href="<?php get_site_url(); ?>legacy">
        					<div class="overlay area-dark">
        						<div class="overlay-text">
        							<p class="tag">Work</p>
        							<h2><span class="light">BP<br />Legacy</span></h2>
        						</div> <!-- /end overlay-text -->
        					</div> <!-- /end overlay -->
        					<div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/work_motion_03_ss.jpg')">
        					</div>
                        </a>
    				</div>
                    <div class="module module--1-1">
                        <a href="<?php get_site_url(); ?>gfk">
        					<div class="overlay area-dark">
        						<div class="overlay-text">
        							<p class="tag">Work</p>
        							<h2><span class="light">GfK<br />Brand Video</span></h2>
        						</div> <!-- /end overlay-text -->
        					</div> <!-- /end overlay -->
        					<div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/work_motion_04_ss.jpg')">
        					</div>
                        </a>
    				</div>
			</div>
			<div class="group group--left">
    				<div class="module module--2-2">
                        <a href="<?php get_site_url(); ?>barclays-integrity">
        					<div class="overlay area-dark">
        						<div class="overlay-text">
        							<p class="tag">Case Study</p>
        							<h2>Barclays <br />
        								<span class="underlined">Integrity</span>
        							</h2>
        							<p class="sans-serif">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure culpa qui deserunt, esse impedit unde ex.</p>
        						</div> <!-- /end overlay-text -->
        					</div> <!-- /end overlay -->
        					<div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/work_motion_01_ls_v2.jpg')">
        					</div>
                        </a>
    				</div>
			</div> <!-- /end group -->
		</div> <!-- /end group-container -->
	</section>
</div> <!-- /end container -->

<div id="web" class="work-container container container--no-padding">
	<section>
		<div class="group-container">
			<div class="group group--left">
                    <div class="module module--2-1 area-dark">
                        <a href="<?php get_site_url(); ?>bp-fll">
                            <div class="overlay area-dark">
                                <div class="overlay-text">
                                    <p class="tag">Work</p>
                                    <h2><span class="light">BP First Level Leaders<br />Portal</span></h2>
                                </div> <!-- /end overlay-text -->
                            </div> <!-- /end overlay -->
                            <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/work_web_01_mr.jpg')">
                            </div>
                        </a>
                    </div>
    				<div class="module module--1-1">
                        <a href="<?php get_site_url(); ?>icap">
        					<div class="overlay area-dark">
        						<div class="overlay-text">
        							<p class="tag">Work</p>
        							<h2><span class="light">ICAP<br />Graduate Recruitment</span></h2>
        						</div> <!-- /end overlay-text -->
        					</div> <!-- /end overlay -->
        					<div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/work_web_02_ss.jpg')">
        					</div>
                        </a>
    				</div>
    				<div class="module module--1-1">
                        <a href="<?php get_site_url(); ?>i360">
        					<div class="overlay area-dark">
        						<div class="overlay-text">
        							<p class="tag">Work</p>
        							<h2><span class="light">i360<br />Website</span></h2>
        						</div> <!-- /end overlay-text -->
        					</div> <!-- /end overlay -->
        					<div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/work_web_03_ss.jpg')">
        					</div>
                        </a>
    				</div>
			</div>
			<div class="group group--right">
    				<div class="module module--2-2">
                        <a href="<?php get_site_url(); ?>discover-bp">
        					<div class="overlay area-dark">
        						<div class="overlay-text">
        							<p class="tag">Web: Case Study</p>
        							<h2>BP <br />
        								<span class="underlined">Discover BP</span>
        							</h2>
        							<p class="sans-serif">Why would employees spend time learning if they don’t have to?</p>
        						</div> <!-- /end overlay-text -->
        					</div> <!-- /end overlay -->
        					<div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/work_web_04_ss.jpg')">
        					</div>
                        </a>
    				</div>
			</div> <!-- /end group -->
		</div> <!-- /end group-container -->
	</section>
</div> <!-- /end container -->

</div>

<?php get_footer(); ?>
