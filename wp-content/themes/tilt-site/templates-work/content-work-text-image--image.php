<?php

if($content['media']) { ?>
    <div class="container area-dark container--no-padding">
        <section>
            <div class="group-container">
            <div class="group group--left">
            <?php $i=0;foreach($content['media'] as $media) { ?>

                <?php
                $image = wp_get_attachment_image_src($media['image'], false);
                $video = $media['video'];
                $moduleClass = 'module module--2-1';

                if($i == 1) {
                    $moduleClass = 'module module--2-2';
                }

                ?>

                <?php if($i == 0) : ?>
                <div class="module module--2-1 module--text-pad module--dark module--visible">
                    <div class="module__text">
                        <?php if($content['headline']) : ?>
                        <h2 class="underlined"><?= $content['headline'];?></h2>
                        <?php endif;?>

                        <?php 
                        $arrP = explode('</p>', $content['text']);
                        $arrP[0] = str_replace('<p>', '<p class="first-para tag--work-title">', $arrP[0]);
                        echo implode('</p>', $arrP);
                        ?>

                    </div>
                </div>
                <?php endif;?>

                <?php if($i == 1) : ?>
                </div><div class="group group--right">
                <?php endif;?>

                <?php if($video) : ?>
                    <div class="<?= $moduleClass;?> module--video">
                    <div class="ratio">
                        <video poster="<?= $image[0];?>" autoplay loop muted>
                                <source src="<?= $video;?>" type="video/mp4">
                        </video>
                    </div>
                </div> <!-- /end module -->
                <?php else : ?>
                    <div class="<?= $moduleClass;?>">
                        <div class="ratio" style="background-image: url('<?= $image[0];?>"></div>
                    </div>
                <?php endif;?>
            <?php $i++;} ?>
            </div>
            </div>
        </section>
    </div>
<?php } ?>