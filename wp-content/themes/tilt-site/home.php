<?php
/**
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
<?php

query_posts('cat=-9&paged=' . $paged);
if (have_posts()) : ?>

    <?php
            // Start the Loop.

    $numberOfPosts = $wp_query->post_count;
    $postsLeftOver = $numberOfPosts % 8;

    $i = 0;
    ?>

    <div class="container container--no-padding">

        <?php

        while (have_posts()) :
            the_post();

            $i++;
            if ($i === 1) {
                ?>
                <div class="group-container">
                    <div class="group group--left">
                        <div class="module module--2-2  news--icon">
                            <?php get_template_part( 'content', 'blog-post-large' ); ?>
                        </div>
                    </div>
                    <?php
                } elseif ($i === 2) {
                    ?>
                    <div class="group group--right">
                        <div class="module module--1-1 news--icon">
                            <?php get_template_part( 'content', 'blog-post' ); ?>
                        </div>
                        <?php
                    } elseif ($i === 3) {
                        ?>
                        <div class="module module--1-1 news--icon news-noimg">
                            <?php   get_template_part( 'content', 'blog-post-noimg' ); ?>
                        </div>
                        <?php
                    } elseif ($i === 4) {
                        ?>
                        <div class="module module--1-1  news--icon news-noimg">
                           <?php   get_template_part( 'content', 'blog-post-noimg' ); ?>
                       </div>
                       <?php
                   } elseif ($i === 5) {
                    ?>
                    <div class="module module--1-1  news--icon">
                        <?php   get_template_part( 'content', 'blog-post' ); ?>
                    </div>
                </div>
                <?php
            } elseif ($i === 6) {
                ?>
                <div class="group group--right">
                    <div class="module module--2-2  news--icon">
                        <?php   get_template_part( 'content', 'blog-post' ); ?>
                    </div>
                </div>
                <?php
            } elseif ($i === 7) {
                ?>
                <div class="group group--left">
                    <div class="module module--1-1 news--icon">
                        <?php get_template_part( 'content', 'blog-post' ); ?>
                    </div>
                    <?php
                } elseif ($i === 8) {
                    ?>
                    <div class="module module--1-1 news--icon news-noimg">
                       <?php   get_template_part( 'content', 'blog-post-noimg' ); ?>
                   </div>
                   <?php
               } elseif ($i === 9) {
                ?>
                <div class="module module--1-1  news--icon news-noimg">
                   <?php   get_template_part( 'content', 'blog-post-noimg' ); ?>
               </div>
               <?php
           } elseif ($i === 10) {
            ?>
            <div class="module module--1-1  news--icon">
                <?php   get_template_part( 'content', 'blog-post' ); ?>
            </div>
        </div>

        <?php
    }
    ?>

    <?php
                /*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */

            // End the loop.

                if ($i === 10) {
                    $i = 0;
                    ?>
                </div>
                <?php
            }
        endwhile;
        ?>
    </div>

    <div class="group-container">
        <div class="pagination">

    <?php 
        $prev_link = get_previous_posts_link(__('Prev'));
        $next_link = get_next_posts_link(__('Next'));

            if($prev_link) {
                echo str_replace('<a ', '<a class="project-navigation paginate_prev" ', $prev_link);
            } else {
                echo '<a class="project-navigation paginate_prev button--disabled" href="">prev</a>';
            }
    ?>

    <?php
            if($next_link) {
                echo str_replace('<a ', '<a class="project-navigation paginate_next" ', $next_link);
            } else {
                echo '<a class="project-navigation paginate_next button--disabled" href="">next</a>';
            }
    ?>
</div>
</div>

<?php

        // If no content, include the "No posts found" template.
else :
    get_template_part( 'content', 'none' );
endif;
?>
</div>

<?php get_footer(); ?>
