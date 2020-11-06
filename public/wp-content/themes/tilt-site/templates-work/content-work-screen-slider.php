<?php

$images = $content['images'];

if($content['background_image']) {
    $background = wp_get_attachment_image_src($content['background_image'], false);
}


if($images) : ?>
    <div class="container container--carousel container-screen-slider" <?= $background ? 'style="background-image: url('.$background[0].')"':'';?>>
        <section class="carousel">

        <img class="carousel-monitor centre-image" src="<?php echo get_template_directory_uri(); ?>/images/monitor.png" alt="">
        <div class="carousel-images">
            <?php $i=1;foreach($images as $image) : ?>
                <div class="carousel-image<?= $i==1 ? ' selected':'';?>" style="background-image: url('<?= $image['url'];?>')"></div>
            <?php $i++;endforeach;?>

        </div> <!-- /end carousel-images -->

        <div class="carousel-controls carousel-controls--imac">
            <?php $i=1;foreach($images as $image) : ?>
                <div class="carousel-control carousel-control<?= $i==1 ? ' selected':'';?>"></div>
            <?php $i++;endforeach;?>
        </div> <!-- /end carousel-controls -->
            
        </section>
    </div>

<?php endif; ?>