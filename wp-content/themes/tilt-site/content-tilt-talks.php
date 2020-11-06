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
  $tag_taxonomy = wp_get_post_terms($project_id, 'talk');

  ?>
  <div class="section">
    
    <div class="left-side">
      <a href="<?php echo get_permalink();?>">
        <?php
        if(has_post_thumbnail()){
         echo the_post_thumbnail( 'talk-thumb' ); 
       }
       else { ?>
        <img src="/wp-content/themes/tilt-site/images/404_poster.jpg">
      <?php }

      ?>
      
    </a>
    </div>

<a class="right-side" href="<?php echo get_permalink();?>">
      <?php   
        $speaker = get_post_meta($project_id, 'talk_items_1_text_section_speaker');
        $title = get_post_meta($project_id, 'talk_items_1_text_section_title');
      ?>
      <div class="title-container">
        <p class="sans-serif excerpt">#0<?php echo $_SESSION['start']?></p><p><?php echo $speaker[0];?></p>
<!--         <h2 ><?php echo $speaker[0];?></h2> -->
        <h2><?php echo $title[0];?></h2>
      </div>
  </a>

  </div>
</article>
