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

get_header(); ?>

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

    <div class="talk-section container container--no-padding area-dark">

        <?php if( have_rows('talk_content')): 

            $i = 0;

            while( have_rows('talk_content') ): the_row();

                $image = get_sub_field('talk_image');
                $talk_number = get_sub_field('talk_number');
                $speaker = get_sub_field('speaker_name');
                $talk_title =  get_sub_field('talk_title');
                $link = str_replace(" ", "-", $speaker);

                $i++;
        ?>

                <?php if( $i % 2 == 1 ) { ?>
                    <div class="left-side">
                        <a href="<?php echo $link ?>">
                            <img src="<?php echo $image; ?>" />
                        </a>
                    </div>

                    <a href="<?php echo $link ?>">
                        <div class="right-side">
                            <div class="title-container">
                                <p><?php echo $talk_number; ?></p>
                                <h2><?php echo $speaker; ?></h2>
                                <h2><?php echo $talk_title; ?></h2>
                            </div>
                        </div>
                    </a>
                <?php } else { ?>
                    <a href="<?php echo $link ?>">
                        <div class="right-side">
                            <div class="title-container">
                                <p><?php echo $talk_number; ?></p>
                                <h2><?php echo $speaker; ?></h2>
                                <h2><?php echo $talk_title; ?></h2>
                            </div>
                        </div>
                    </a>

                    <div class="left-side">
                        <a href="<?php echo $link ?>">
                            <img src="<?php echo $image; ?>" />
                        </a>
                    </div>
                <?php } ?>

        <?php endwhile;?>
        <?php endif ?>
    </div>
</div>

<!-- /end container -->


</div>

</div>

<?php get_footer(); ?>
