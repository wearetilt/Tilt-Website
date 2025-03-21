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

    <a href="<?php echo get_permalink();?>">
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
      $title_bold = get_post_meta($project_id, 'work_items_0_title_bold');
      $sub_title = get_post_meta($project_id, 'work_items_0_title');
      $excerpt = get_the_excerpt();
    ?>
    <p class="project_name"><?= $sub_title[0];?></p>
    <h2 class="entry-title"><?php echo $title_bold[0];?></h2>
    <p class="excerpt"><?php echo $excerpt; ?></p>
  </div>

</div>


</article>
