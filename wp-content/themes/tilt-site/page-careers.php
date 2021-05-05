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

$career_items = get_field('career_items');

get_header(); ?>

<div class="careers-page__wrapper">
    <header class="careers-page">
        <div class="module module--16-5 module--video module--visible">
            <div class="ratio">
                <video id="careers--video" class="vjs-default-skin" autoplay loop muted playsinline poster="<?php echo get_template_directory_uri(); ?>/images/contact_poster.jpg">
                    <source src="https://player.vimeo.com/external/141399412.hd.mp4?s=3f1574fa69a9ae469f325e2b05972a6e&profile_id=113" type="video/mp4">
                </video>
            </div>
        </div> <!-- /end module -->
    </header>

    <div class="header-container container area-dark">
        <div class="text-container first-para sans-serif">

            <p><strong class="highlight">A strong creative fusion </strong> binds the eclectic skills and charisma of our team.</p>

            <div class="header-content">
                <p>We bring together a collaboration of creative individuals whose passion for what they do has a dynamic spark and friction which ignites minds, generating the best ideas and unique creative, time after time</p>
            </div>

        </div>
    </div>

    <div class="header-container sub-header container area-dark">
        <div class="text-container first-para sans-serif">
            <p><strong>Current Vacancies</strong></p>
        </div>
    </div>

    <div class="flex-grid <?php echo ((count($career_items) % 2 == 0) ? 'flex-even' : 'flex-odd') ?>">

        <?php if($career_items) : ?>
            <?php foreach($career_items as $career_item) : ?>
                <div class="career-container container container--no-padding flex-item">
                    <div class="group-container">
                        <div class="module module--dark module--mobile-double-height">
                            <div>
                                <div>
                                    <h2 class="underlined"><?= $career_item['career_headline'];?></h2>
                                    <p class="tag--career-title"><?= $career_item['career_text'];?></p>

                                    <a class="cube--link" href="<?= $career_item['career_link'];?>">
                                        <div class="cube">
                                            <div class="cube--front cube--front__no-bg">
                                                <p class="sans-serif">Find out more</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            <?php endforeach;?>
        <?php endif;?>
    </div>

    <div class="header-container container area-dark">
        <div class="text-container first-para sans-serif">

            <p><strong>WHat you need to know about us</strong></p>

            <div class="header-content">
                <p>We don't work on fluff. We take on big, challenging projects that make a positive impact, whether we're using digital design, film and psychology to help reduce global drink driving rates alongside the UN, transforming learning culture for one of the world's largest organisations, or explaining complex ideas in fun, bite-sized chunks for the BBC.</p>
                <p>So, if you're happy applying your beautiful brain to selling more sugar water as McGinty, Buttock & Smith, this probably isn't the agency for you.</p>
                <p>On the other hand, if you want to be a part of a team that applies the full scope of their creative powers towards the pursuit of something glorious, then get in touch!</p>
            </div>

            <a class="cube--link" href="<?= $career_item['career_link'];?>">
                <div class="cube">
                    <div class="cube--front cube--front__no-bg">
                        <p class="sans-serif">Send us your details</p>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="flex-grid image-grid">
        <?php
        if (get_row_layout() == 'gallery') :
            $galleryLayout = get_sub_field('layout');
            $arrLayouts = array(
                1 => array('2-2', '//2-1', '2-1'),
                2 => array('2-1', '2-1', '//2-2'),
                3 => array('1-1', '1-1'),
            );
            $background = get_sub_field('background');

            if(!$background) :
                $background = 'dark';
            endif;

        if(get_sub_field('images')) :
        ?>
            <div data-gallery="<?php $galleryLayout;?>" class="news-container gallery-container area-<?php echo $background;?> <?php echo get_sub_field('padding') ? 'container--padding':'container--no-padding';?> <?php echo get_sub_field('no_padding_bottom') ? 'container--no-padding-bottom' : '';?>">
                <div class="group-container">
                    <div class="group group--left">
                        <?php
                        $i = 0;
                        foreach(get_sub_field('images') as $image) :
                            $break = false;
                            $moduleLayout = $arrLayouts[$galleryLayout][$i];

                            if(strpos($moduleLayout, '//') !== false) :
                                $break = true;
                                $moduleLayout = str_replace('//', '', $moduleLayout);
                            endif;

                            if($break) :
                            ?>
                                </div>

                                <div class="group group--right">
                            <?php
                            endif;
                            $moduleClass = 'module module--'.$moduleLayout;
                            ?>
                            <div class="<?php echo $moduleClass;?>">
                                <div class="ratio" style="background-image: url('<?php echo $image['url'];?>"></div>
                            </div>
                        <?php
                        $i++;
                        endforeach;
                        ?>

                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
