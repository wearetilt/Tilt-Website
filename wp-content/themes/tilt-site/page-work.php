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

<header class="work-item work-item--motion area-dark">
    <div class="module--video module--header">
        <div id="header-play" class="header-play">
        </div>
        <div class="ratio">
            <video id="header-video-player" class="video-js vjs-default-skin" autoplay loop muted width="100%" height="100%" >
                    <source id="header-video" src="<?php echo get_template_directory_uri(); ?>/video/test-video.mp4" type="video/mp4">
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
				<div class="module module--1-1">
                    <a href="<?php get_site_url(); ?>reliance">
    					<div class="overlay area-dark">
    						<div class="overlay-text">
    							<p class="tag">Motion: Case Study</p>
    							<h2>Barclays <br />
    								<span class="light">Integrity</span>
    							</h2>
    						</div> <!-- /end overlay-text -->
    					</div> <!-- /end overlay -->
    					<div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/test/smallsq.jpg')">
    					</div>
                    </a>
				</div>
				<div class="module module--1-1">
                    <a href="<?php get_site_url(); ?>sdnpa">
    					<div class="overlay area-dark">
    						<div class="overlay-text">
    							<p class="tag">Motion: Case Study</p>
    							<h2>Barclays <br />
    								<span class="light">Integrity</span>
    							</h2>
    						</div> <!-- /end overlay-text -->
    					</div> <!-- /end overlay -->
    					<div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/test/smallsq.jpg')">
    					</div>
                    </a>
				</div>
				<div class="module module--2-1 area-dark">
                    <a href="<?php get_site_url(); ?>elwoods">
    					<div class="overlay area-dark">
    						<div class="overlay-text">
    							<p class="tag">Motion: Case Study</p>
    							<h2>Barclays <br />
    								<span class="light">Integrity</span>
    							</h2>
    						</div> <!-- /end overlay-text -->
    					</div> <!-- /end overlay -->
    					<div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/test/rectangle.jpg')">
    					</div>
                    </a>
				</div>
			</div>
			<div class="group group--left">
				<div class="module module--2-2">
                    <a href="<?php get_site_url(); ?>barclays-values">
    					<div class="overlay area-dark">
    						<div class="overlay-text">
    							<p class="tag">Motion: Case Study</p>
    							<h2>Barclays <br />
    								<span class="light underlined">Integrity</span>
    							</h2>
    							<p class="sans-serif">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure culpa qui deserunt, esse impedit unde ex.</p>
    						</div> <!-- /end overlay-text -->
    					</div> <!-- /end overlay -->
    					<div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/test/bigsq.jpg')">
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

    				<div class="module module--1-1">
                        <a href="<?php get_site_url(); ?>pbs">
        					<div class="overlay area-dark">
        						<div class="overlay-text">
        							<p class="tag">Motion: Case Study</p>
        							<h2>Barclays <br />
        								<span class="light">Integrity</span>
        							</h2>
        						</div> <!-- /end overlay-text -->
        					</div> <!-- /end overlay -->
        					<div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/test/smallsq.jpg')">
        					</div>
                        </a>
    				</div>
    				<div class="module module--1-1">
                        <a href="<?php get_site_url(); ?>sainsburys">
        					<div class="overlay area-dark">
        						<div class="overlay-text">
        							<p class="tag">Motion: Case Study</p>
        							<h2>Barclays <br />
        								<span class="light">Integrity</span>
        							</h2>
        						</div> <!-- /end overlay-text -->
        					</div> <!-- /end overlay -->
        					<div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/test/smallsq.jpg')">
        					</div>
                        </a>
    				</div>
    				<div class="module module--2-1 area-dark">
                        <a href="<?php get_site_url(); ?>code-it">
        					<div class="overlay area-dark">
        						<div class="overlay-text">
        							<p class="tag">Motion: Case Study</p>
        							<h2>Barclays <br />
        								<span class="light">Integrity</span>
        							</h2>
        						</div> <!-- /end overlay-text -->
        					</div> <!-- /end overlay -->
        					<div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/test/rectangle.jpg')">
        					</div>
                        </a>
    				</div>
			</div>
			<div class="group group--right">
				<div class="module module--2-2">
                    <a href="<?php get_site_url(); ?>alzheimers">
    					<div class="overlay area-dark">
    						<div class="overlay-text">
    							<p class="tag">Motion: Case Study</p>
    							<h2>Barclays <br />
    								<span class="light underlined">Integrity</span>
    							</h2>
    							<p class="sans-serif">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure culpa qui deserunt, esse impedit unde ex.</p>
    						</div> <!-- /end overlay-text -->
    					</div> <!-- /end overlay -->
    					<div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/test/bigsq.jpg')">
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
                                    <p class="tag">Motion: Case Study</p>
                                    <h2>Barclays <br />
                                        <span class="light">Integrity</span>
                                    </h2>
                                </div> <!-- /end overlay-text -->
                            </div> <!-- /end overlay -->
                            <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/test/rectangle.jpg')">
                            </div>
                        </a>
                    </div>
    				<div class="module module--1-1">
                        <a href="<?php get_site_url(); ?>gfk">
        					<div class="overlay area-dark">
        						<div class="overlay-text">
        							<p class="tag">Motion: Case Study</p>
        							<h2>Barclays <br />
        								<span class="light">Integrity</span>
        							</h2>
        						</div> <!-- /end overlay-text -->
        					</div> <!-- /end overlay -->
        					<div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/test/smallsq.jpg')">
        					</div>
                        </a>
    				</div>
                    <div class="module module--1-1">
                        <a href="<?php get_site_url(); ?>barclays-legacy">
        					<div class="overlay area-dark">
        						<div class="overlay-text">
        							<p class="tag">Motion: Case Study</p>
        							<h2>Barclays <br />
        								<span class="light">Integrity</span>
        							</h2>
        						</div> <!-- /end overlay-text -->
        					</div> <!-- /end overlay -->
        					<div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/test/smallsq.jpg')">
        					</div>
                        </a>
    				</div>
			</div>
			<div class="group group--left">
    				<div class="module module--2-2">
                        <a href="<?php get_site_url(); ?>integrity">
        					<div class="overlay area-dark">
        						<div class="overlay-text">
        							<p class="tag">Motion: Case Study</p>
        							<h2>Barclays <br />
        								<span class="light underlined">Integrity</span>
        							</h2>
        							<p class="sans-serif">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure culpa qui deserunt, esse impedit unde ex.</p>
        						</div> <!-- /end overlay-text -->
        					</div> <!-- /end overlay -->
        					<div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/test/bigsq.jpg')">
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
                                    <p class="tag">Motion: Case Study</p>
                                    <h2>Barclays <br />
                                        <span class="light">Integrity</span>
                                    </h2>
                                </div> <!-- /end overlay-text -->
                            </div> <!-- /end overlay -->
                            <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/test/rectangle.jpg')">
                            </div>
                        </a>
                    </div>
    				<div class="module module--1-1">
                        <a href="<?php get_site_url(); ?>icap">
        					<div class="overlay area-dark">
        						<div class="overlay-text">
        							<p class="tag">Motion: Case Study</p>
        							<h2>Barclays <br />
        								<span class="light">Integrity</span>
        							</h2>
        						</div> <!-- /end overlay-text -->
        					</div> <!-- /end overlay -->
        					<div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/test/smallsq.jpg')">
        					</div>
                        </a>
    				</div>
    				<div class="module module--1-1">
                        <a href="<?php get_site_url(); ?>discover-bp">
        					<div class="overlay area-dark">
        						<div class="overlay-text">
        							<p class="tag">Motion: Case Study</p>
        							<h2>Barclays <br />
        								<span class="light">Integrity</span>
        							</h2>
        						</div> <!-- /end overlay-text -->
        					</div> <!-- /end overlay -->
        					<div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/test/smallsq.jpg')">
        					</div>
                        </a>
    				</div>
			</div>
			<div class="group group--right">
    				<div class="module module--2-2">
                        <a href="<?php get_site_url(); ?>i360">
        					<div class="overlay area-dark">
        						<div class="overlay-text">
        							<p class="tag">Motion: Case Study</p>
        							<h2>Barclays <br />
        								<span class="light underlined">Integrity</span>
        							</h2>
        							<p class="sans-serif">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure culpa qui deserunt, esse impedit unde ex.</p>
        						</div> <!-- /end overlay-text -->
        					</div> <!-- /end overlay -->
        					<div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/test/bigsq.jpg')">
        					</div>
                        </a>
    				</div>
			</div> <!-- /end group -->
		</div> <!-- /end group-container -->
	</section>
</div> <!-- /end container -->

</div>

<?php get_footer(); ?>
