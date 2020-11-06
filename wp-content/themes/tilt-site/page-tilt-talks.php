<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

// $tilt_talks = get_field('tilt_talks');

get_header('talk-landing'); 

?>

<div class="talk-section-wrapper">

    <header class="area-dark talk-section-header">

        <?php if ( have_rows('talk_intro')):
            while( have_rows('talk_intro') ): the_row();
         ?>
            <div class="container container--header talk-header-container" >
                <div class="title-section sans-serif">
                    <?php echo get_sub_field('title_section'); ?>  
                </div>
                <div class="text-section">
                    <?php echo get_sub_field('text_section'); ?>
                </div>
            </div>
        <?php endwhile; ?>
        <?php endif ?>
    </header>

    <?php 

$talk_posts = array(
  'post_type' => 'tilt-talks',
);

$the_query = new WP_Query( $talk_posts );

    if ($the_query->have_posts() ) : ?>

        <?php
        // get total number of tilt talk published posts and add 1
        $post_number = wp_count_posts($type = 'tilt-talks');
        $post_hash = $post_number->publish;
        $_SESSION['start'] = $post_hash + 1;

        ?>

            <div class="group-container area-dark">
                <?php
                while ($the_query->have_posts()) :
                    $the_query->the_post();

                    // take total tilt talks posts number and minus each for each post
                    $_SESSION['start']--; 

                ?>

                    <div class="talk-section ?>">
                        <?php
                        get_template_part( 'content-tilt-talks', get_post_format() );
                        ?>
                    </div>
                
                <?php                
                endwhile;

                ?>
                <?php
            else :
                get_template_part( 'content', 'none' );
            endif;
            ?>
        </div>

</div>

</div>

<?php get_footer(); ?>
