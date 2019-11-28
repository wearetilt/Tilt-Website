<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
get_header('news'); ?>
<?php $post_id = get_the_id();

	$attachedImg = '';
	if(has_post_thumbnail()){
		$attachmentID = get_post_thumbnail_id();
		$attachedImg = wp_get_attachment_image_src($attachmentID);
	}

?>
<header id="news" class="work-item area-dark" style="background-image: url('<?php the_field('header_image'); ?>');">
	<div class="container container--header container--header-news">
		<div class="news-wrapper news-wrapper--header">
			<div class="news-container">
				<div class="header-title">
					<p class="tag--home-title">News</p>
					<h1 class="underlined"><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
	</div>
</header>

<div class="news-wrapper">
	<div class="news-container">
		<div>
			<div id="social">
				<h2 class="light news-share">SHARE:</h2>
				<?php echo do_shortcode('[feather_share]'); ?>
			</div>
			<h2 class="light news-date"><?php echo get_the_date('d F Y'); ?> <?php $post_author_id = get_post_field( 'post_author', $post_id );?> BY <span class="author-name"><?php echo get_the_author_meta('display_name', $post_author_id);?></span></h2>
		</div>
		<div class="intro-text">
			<?php the_field('standfirst_text'); ?>
		</div>
	</div>



	<!-- IMAGE GROUP - if the image group is populated then show it here -->

	<?php if(get_field('image_1')) { ?>
		<div id="visual_content">
			<div class="container container--no-padding area-dark">
				<div class="group-container">
					<div class="group group--left">
						<div class="module module--2-2">
							<div class="ratio" style="background-image: url('<?php the_field('image_1'); ?>');"></div>
						</div>
					</div>
					<div class="group group--right">
						<div class="module module--1-1">
							<div class="ratio" style="background-image: url('<?php the_field('image_2'); ?>');"></div>
						</div>
						<div class="module module--1-1">
							<div class="ratio" style="background-image: url('<?php the_field('image_3'); ?>');"></div>
						</div>
						<div class="module module--2-1">
							<div class="ratio" style="background-image: url('<?php the_field('image_4'); ?>');"></div>
						</div>
					</div>
				</div>
			</div>
		</div>

	<?php } ?>



	<!-- SINGLE IMAGE - if the single image field is populated then show it here -->

	<?php if(get_field('single_image')) { ?>
		<div id="visual_content">
			<div class="container container--no-padding area-dark">
				<img src="<?php the_field('single_image'); ?>" alt="<?php the_title(); ?>" width="100%" />
			</div>
		</div>
	<?php } ?>

	<!-- END SINGLE IMAGE HERE -->




	<!-- VIDEO - if the video field is populated then show it here -->

	<?php if(get_field('vimeo_id') || get_field('vimeo_id_two') || get_field('youtube_id')) { ?>
		<div id="visual_content">
	<?php } ?>

		<?php if(get_field('vimeo_id')) { ?>
			<div class="container--newsvideo">
				<div class="group-container">
					<div class="module--16-9 module--video module--nozoom">
						<div class="ratio">
							<iframe src="https://player.vimeo.com/video/<?php the_field('vimeo_id'); ?>?color=FF406A&title=0&byline=0&portrait=0 " width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
							
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
		
	<?php if(get_field('vimeo_id_two')) { ?>
	
		<div class="container--newsvideo">
			<div class="group-container">
				<div class="module--16-9 module--video module--nozoom">
					<div class="ratio">
						<iframe src="https://player.vimeo.com/video/<?php the_field('vimeo_id_two'); ?>?color=FF406A&title=0&byline=0&portrait=0" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>

	<?php } ?>

	<?php if(get_field('youtube_id')) { ?>

		<div class="container--newsvideo">
			<div class="group-container">
				<div class="module--16-9 module--video module--nozoom">
					<div class="ratio">
						<iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php the_field('youtube_id'); ?>" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>

	<?php } ?>

	<?php if(get_field('vimeo_id') || get_field('vimeo_id_two') || get_field('youtube_id')) { ?>
		</div>
	<?php } ?>

	<!-- END VIDEO -->


	<!-- BODY COPY - if the video field is populated then show it here -->

	<?php if(get_field('main_content_area')) { ?>
		<div id="visual_content">
			<div class="news-container news--footer">
				<p><?php the_field('main_content_area'); ?></p>
			</div>
		</div>
	<?php } ?>

</div>


	<div class="group-container">

		<?php
			$next_post = get_next_post(true);
			$previous_post = get_previous_post(true);

			if (!empty( $previous_post )): ?>
				<a class="project-navigation  paginate_prev" href="<?php echo get_permalink( $previous_post->ID ); ?>"><span>&#8249;</span> Previous</a>
		<?php endif;

			if (empty( $previous_post )): ?>
				<a class="project-navigation button--disabled" href="">&nbsp;</a>
		<?php endif;
		?>

		<?php

			if (!empty( $next_post )): ?>
				<a class="project-navigation paginate_next" href="<?php echo get_permalink( $next_post->ID ); ?>">Next <span>&#8250;</span></a>
		<?php endif; ?>

		<?php

			if (empty( $next_post )): ?>
				<a class="project-navigation button--disabled" href="">&nbsp;</a>
		<?php endif; ?>


	</div>

</div>

<?php get_footer(); ?>
