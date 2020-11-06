<?php

$entries = $content['entries'];

if($content['background_image']) {
    $background = wp_get_attachment_image_src($content['background_image'], false);
}

if($entries) : ?>
    <div class="container container-iphone-gallery" <?= $background ? 'style="background-image: url('.$background[0].')"':'';?>>
        <?php foreach($entries as $entry) : ?>
            <?php if($entry['image']) : ?>
                <div class="mobile-holder">
                    <img class="mobile-phone" src="<?php echo get_template_directory_uri();?>/images/mobile-phone.png" alt="">
                    <div class="mobile-screen">
                    <?php echo wp_get_attachment_image($entry['image'], false);?>
                    </div>
                </div>
            <?php endif;?>

        <?php endforeach;?>
    </div>

<?php endif; ?>