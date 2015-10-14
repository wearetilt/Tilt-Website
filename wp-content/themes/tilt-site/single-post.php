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
		$attachmentID = get_post_thumbnail_id($postID);
		$attachedImg = wp_get_attachment_image_src($attachmentID);
	}

?>
<header id="news" class="work-item area-dark" style="background-image: url('<?php the_field('header_image'); ?>');">
	<div class="container container--header container--header-news">
		<div class="news-wrapper news-wrapper--header">
			<div class="news-container">
				<div class="header-title">
					<p class="tag">News</p>
					<h1 class="underlined"><? the_title(); ?></h1>
				</div>
			</div>
		</div>
	</div>
</header>

<div class="news-wrapper">
	<div class="news-container">
		<div>
			<div id="social">
				<?php echo do_shortcode('[feather_share]'); ?>
			</div>			
			<h2 class="light news-date"><?php echo get_the_date('d F Y'); ?> <?php $post_author_id = get_post_field( 'post_author', $post_id );?> BY <span class="author-name"><?php echo get_the_author_meta('display_name', $post_author_id);?></span></h2>
		</div>
		<div class="intro-text">
			<?php the_field('intro_text'); ?>
		</div>
	</div>
			
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
	
	<div class="news-container">
		<p><?php the_field('main_body_of_text'); ?></p>
	</div>

	<?php $value = get_field('video');
		  if($value){ ?>
			  <div class="container container--no-padding">
				  <video class="video-js vjs-default-skin page-video" controls width="100%" height="100%" >
						  <source src="<?php the_field('video');?>" type="video/mp4">
				  </video>
			  </div>
	<?php  } ?>
</div>
<div class="group-container">

	<?php
		$next_post = get_next_post(9);
		$previous_post = get_previous_post(9);
		
		if (!empty( $previous_post )): ?>
			<a class="project-navigation" href="<?php echo get_permalink( $previous_post->ID ); ?>">Previous Job</a>	
	<?php endif; 
		
		if (empty( $previous_post )): ?>
			<a class="project-navigation" href="#"></a>
	<?php endif;
	?>

	<?php
		
		if (!empty( $next_post )): ?>
			<a class="project-navigation" href="<?php echo get_permalink( $next_post->ID ); ?>">Next Job</a>	
	<?php endif; ?>
	
	<?php
		
		if (empty( $next_post )): ?>
			<a class="project-navigation" href="#"></a>	
	<?php endif; ?>
	
	
	
</div>

</div>

<?php get_footer(); ?>
