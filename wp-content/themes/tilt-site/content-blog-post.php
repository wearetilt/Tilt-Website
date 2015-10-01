<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<?php
	// Post thumbnail.
	$attachedImg = '';
	if(has_post_thumbnail()){
		$attachmentID = get_post_thumbnail_id(get_the_id());
		$attachedImg = wp_get_attachment_image_src($attachmentID, 'large');
	}
?>
<a href="<?php echo get_permalink(get_the_id()); ?>">
	<div id="post=<?php the_ID();?>" class="overlay area-dark">
		<div class="overlay-text">
			<p class="tag"><?php echo get_the_date('F Y'); ?></p>
			<h2><?php the_title( ); ?></h2>
			<p class="blog-post-test" class="sans-serif"><?php echo get_the_excerpt(); ?></p>
		</div> <!-- /end overlay-text -->
	</div> <!-- /end overlay -->
	<div class="ratio" style="background-image: url('<?php echo $attachedImg[0]; ?>')">
	</div>
</a>
