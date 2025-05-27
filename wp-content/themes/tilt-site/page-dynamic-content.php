<?php
/**
 * Template Name: Dynamic content
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

get_header(); 

$title = get_the_title();

?>


<div class="dynamic-section-wrapper">

    <?php
        $menu_items = wp_get_nav_menu_items('Work Menu Bar');

        if ($menu_items) {
            $current_url = home_url( add_query_arg( null, null ) );

            echo '<div id="services--list" class="container container--header container--work-list">
    <p>View work by: </p>';

            foreach ($menu_items as $item) {
                $item_url = $item->url;
                $item_title = $item->title;

                // Compare current URL to item URL
                $active_class = (trailingslashit($current_url) === trailingslashit($item_url)) ? 'active' : '';

                echo '<a href="' . esc_url($item_url) . '" class="services-list__item ' . esc_attr($active_class) . '">' . esc_html($item_title) . '</a>';
            }

            echo '</div>';
        }
    ?>


    <header class="area-dark dynamic-section-header">

        <?php if ( have_rows('dynamic_header')):
            while( have_rows('dynamic_header') ): the_row();
         ?>
            <div class="container container--header dynamic-header-container" >
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

$dynamic_tags = array(
  'post_type' => 'work_item',
    'tax_query' => array(
        array(
            'taxonomy' => 'content_group',
            'terms' => $title,
            'field' => 'slug',
        )
    ),
);

$the_query = new WP_Query( $dynamic_tags );

    if ($the_query->have_posts() ) : ?>
        <?php $_SESSION['counter'] = 0; ?>

            <div class="group-container area-dark dynamic-section">
                <?php
                while ($the_query->have_posts()) :
                    $the_query->the_post();

                    $_SESSION['counter']++;
                ?>

                    
                        <?php
                        get_template_part( 'content-dynamic', get_post_format() );
                        ?>
                
                
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
