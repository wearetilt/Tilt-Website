<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php
  $project = get_post();
  $project_id = $project->ID;
  $tag_taxonomy = wp_get_post_terms($project_id, 'work');
  $post_image = get_the_post_thumbnail();
  ?>
  <div class="link">

    <a href="<?php get_permalink();?>">
      <?php
      if($post_image != ''){
       echo $post_image;
     }
     else { ?>
      <img src="/wp-content/themes/tilt-site/images/404_poster.jpg">
    <?php }

    ?>
    
  </a>
  <div class="related-links">
    <?php 
      $category = get_post_meta($project_id, 'work_items_0_category');
      $sub_title = get_post_meta($project_id, 'work_items_0_overview_title');
      $sub_title2 = get_post_meta($project_id, 'work_items_0_title');
    ?>

    <p class="tag"><?php echo $category[0]; ?></p>
    <h2 class="entry-title"><?php echo get_the_title();?></h2>
    <?php if($sub_title == true){?>
    <p> 
      <?php echo $sub_title[0]; ?> 
    </p>
  <?php } else {} ?>
  </div>

</div>


</article>
