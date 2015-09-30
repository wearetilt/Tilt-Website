<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header('news'); ?>

<?php echo $post_id = get_the_id(); ?>

<div class="news-wrapper">
	<div class="news-container">
		<header id="news" class="work-item area-dark">
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
		<div class="intro-text">
			<p><?php echo get_post_meta($post_id, 'intro_text', true); ?></p>
		</div>
	</div>
	<div class="container container--no-padding">
		<div class="group-container">
			<div class="group group--left">
				<div class="module module--2-2">
					<div class="ratio" style="background-image: url('<?php $image_1 = get_post_meta($post_id, 'image_1');?>');">

					</div>
				</div>
			</div>
			<div class="group group--right">
				<div class="module module--1-1">
					<div class="ratio" style="background-image: url('<?php $image_2 = get_post_meta($post_id, 'image_2');?>');">

					</div>
				</div>
				<div class="module module--1-1">
					<div class="ratio" style="background-image: url('<?php $image_3 = get_post_meta($post_id, 'image_3');?>');">

					</div>
				</div>
				<div class="module module--2-1">
					<div class="ratio" style="background-image: url('<?php $image_4 = get_post_meta($post_id, 'image_4'); var_dump($image_4);?>');">

					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="news-container">
		<?php echo get_post_meta($post_id, 'main_body_of_text', true); ?>
	</div>
</div>

<div class="img-container">
	<img src="<?php $image_5 = get_post_meta($post_id, 'image_5', true); echo $image_5; ?>" alt="">
</div>

<div class="group-container">
	<a class="project-navigation" href="">< Previous News</a>
	<a class="project-navigation" href="">Next News ></a>
</div>

</div>

<?php get_footer(); ?>
