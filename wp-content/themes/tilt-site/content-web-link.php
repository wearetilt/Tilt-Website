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
    <p class="tag"><?php echo $tag_taxonomy[0]->name; ?></p>
    <h2 class="entry-title"><?php echo get_the_title();?></h2>
    <p> 
      <?php 
      $string = $project->post_name; 
      $workName = str_replace('-', ' ', $string);
      echo $workName;
      ?> 
    </p>
  </div>

</div>


</article>
