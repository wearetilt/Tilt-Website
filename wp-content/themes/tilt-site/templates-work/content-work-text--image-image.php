<?php

$mediaCount = 0;

foreach($content['media'] as $media) {
    if($media['image']) {
        $mediaCount++;
    }
}

if($content['media']) { ?>
    <div class="container area-dark container--no-padding">
        <section>
            <div class="group-container">
            <div class="group group--left">
            <?php $i=0;foreach($content['media'] as $media) { ?>

                <?php
                $image = wp_get_attachment_image_src($media['image'], false);

                $moduleClass = 'module module--1-1';

                if($mediaCount == 1) {
                    $moduleClass = 'module module--2-1';
                }

                ?>

                <?php if($i == 0) : ?>
                <div class="module module--2-1 module--text-pad module--dark module--visible">
                    <div class="module__text">
                        <?php if($content['headline']) : ?>
                        <h2 class="underlined"><?= $content['headline'];?></h2>
                        <?php endif;?>

                        <?= $content['text'];?>

                    </div>
                </div>
                <?php endif;?>

                <?php if($i == 0) : ?>
                </div><div class="group group--right">
                <?php endif;?>

                <div class="<?= $moduleClass;?>">
                    <?php if($media['video']) : ?>
                        <video controls poster="<?php echo get_template_directory_uri(); ?>/images/work/film_values/harish_poster_image.jpg" class="video-js vjs-default-skin page-video" controls width="100%" height="100%">
                                <source src="https://player.vimeo.com/external/88791772.sd.mp4?s=dc9ba217fd78b585bddab86b37b9888a&profile_id=112" type="video/mp4">
                        </video>
                    <?php else : ?>
                        <div class="ratio" style="background-image: url('<?= $image[0];?>"></div>
                <?php endif;?>
                </div>

                <?php if($mediaCount == 1) {
                    break;
                }?>

            <?php $i++;} ?>
            </div>
            </div>
        </section>
    </div>
<?php } ?>