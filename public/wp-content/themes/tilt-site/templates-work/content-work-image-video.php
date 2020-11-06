<?php

$image = wp_get_attachment_image_src($content['image'], false);
$video = $content['video'];

if($image) { ?>

    <div class="container container--no-padding <?= $content['padding_bottom'] ? 'container--half-bot':'';?>">

    <?php if($video) : ?>
        <div class="group-container">
            <div class="module module--16-9 module--video module--nozoom module--visible">
                <div class="ratio">
                <video controls poster="<?= $image[0];?>" class="video-js vjs-default-skin page-video" controls width="100%" height="100%">
                        <source src="<?= $video;?>" type="video/mp4">
                </video>
                </div>
            </div>
        </div>

    <?php else : ?>

        <?php if($content['image_full_size']) : ?>
        <img class="full-size" src="<?= $image[0];?>" alt="">
        <?php else : ?>
        <div class="module module--2-1 module--visible">
                <div class="ratio" style="background-image: url(<?= $image[0];?>)"></div>
        </div>
    <?php endif;?>

    <?php endif;?>

    </div>
    

<?php } ?>