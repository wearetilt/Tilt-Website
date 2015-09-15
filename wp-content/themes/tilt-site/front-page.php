<?php
/**
 * Template Name: front page
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header('home'); ?>

<div class="container container--no-padding">
	<section>
		<div class="group-container">
			<div class="group group--left">
				<div class="module module--1-1"></div>
				<div class="module module--1-1"></div>
				<div class="module module--2-1 area-dark">
				</div>
			</div>
			<div class="group group--right">
				<div id="module-5" class="module module--2-2">
					<div class="overlay area-dark">
						<div class="overlay-text">
							<p class="tag">Motion: Case Study</p>
							<h2>Barclays <br />
								<span class="light underlined">Integrity</span>
							</h2>
							<p class="sans-serif">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure culpa qui deserunt, esse impedit unde ex.</p>
						</div> <!-- /end overlay-text -->
					</div> <!-- /end overlay -->
					<div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/video-placeholder.jpg')">
					</div>
				</div>
			</div> <!-- /end group -->
		</div> <!-- /end group-container -->
	</section>
</div> <!-- /end container -->

<div class="container container--no-padding">
	<section>
		<div class="group-container">
			<div class="group group--left">
				<div id="module-5" class="module module--2-2">
					<div class="overlay area-dark">
						<div class="overlay-text">
							<p class="tag">Motion: Case Study</p>
							<h2>Barclays <br />
								<span class="light underlined">Integrity</span>
							</h2>
							<p class="sans-serif">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure culpa qui deserunt, esse impedit unde ex.</p>
						</div> <!-- /end overlay-text -->
					</div> <!-- /end overlay -->
					<div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/video-placeholder.jpg')">
					</div>
				</div>
			</div>
			<div class="group group--right">
				<div class="module module--1-1"></div>
				<div class="module module--1-1"></div>
				<div class="module module--2-1 area-dark">
				</div>
			</div> <!-- /end group -->
		</div> <!-- /end group-container -->
	</section>
</div> <!-- /end container -->

</div> <!-- Close Wrapper -->

<?php get_footer(); ?>
