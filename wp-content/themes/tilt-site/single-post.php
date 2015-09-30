<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header('news'); ?>

<?php echo $post_id = get_the_id();

	$attachedImg = '';
	if(has_post_thumbnail()){
		$attachmentID = get_post_thumbnail_id($postID);
		$attachedImg = wp_get_attachment_image_src($attachmentID);
	}

?>
<header id="news" class="work-item area-dark" style="background-image: url('<?php the_field('header_image'); ?>');">
	<div class="container container--header">
		<div class="header-title">
			<p class="tag">News</p>
			<h1 class="underlined"><? the_title(); ?></h1>
			<div>
				<h2 class="light"><?php echo get_the_date(); ?> <?php $post_author_id = get_post_field( 'post_author', $post_id ); echo get_the_author_meta('display_name', $post_author_id);?></h2>
				<h2>Share: Email Facebook Twitter</h2>
			</div>

		</div>
	</div>
</header>

<div class="news-wrapper">
	<div class="news-container">
		<div class="intro-text">
			<p><?php the_field('intro_text'); ?></p>
		</div>
	</div>
	<div class="container container--no-padding">
		<div class="group-container">
			<div class="group group--left">
				<div class="module module--2-2">
					<div class="ratio" style="background-image: url('<?php the_field('image_1'); ?>');">

					</div>
				</div>
			</div>
			<div class="group group--right">
				<div class="module module--1-1">
					<div class="ratio" style="background-image: url('<?php the_field('image_2'); ?>');">

					</div>
				</div>
				<div class="module module--1-1">
					<div class="ratio" style="background-image: url('<?php the_field('image_3'); ?>');">

					</div>
				</div>
				<div class="module module--2-1">
					<div class="ratio" style="background-image: url('<?php the_field('image_4'); ?>');">

					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="news-container">
		<p><?php the_field('main_body_of_text'); ?></p>
	</div>
</div>

<div class="img-container">
	<img src="<?php the_field('image_5'); ?>" alt="">
</div>

<div class="group-container">
	<a class="project-navigation" href="">< Previous News</a>
	<a class="project-navigation" href="">Next News ></a>
</div>

</div>

<?php get_footer(); ?>
