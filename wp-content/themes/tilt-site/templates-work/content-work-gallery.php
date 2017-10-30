<?php

$galleryLayout = $content['layout'];

$arrLayouts = array(
    1 => array('2-2', '//2-2'),
    2 => array('2-2', '//2-1', '1-1', '1-1'),
    3 => array('2-2', '//1-1', '1-1', '2-1'),
    4 => array('2-2', '//2-1', '2-1'),
    5 => array('2-1', '1-1', '1-1', '//2-2'),
    6 => array('2-1', '2-1', '//2-2'),
    7 => array('1-1', '1-1', '1-1', '1-1'),
    8 => array('1-1', '1-1', '2-1', '1-1', '1-1', '//2-1', '2-2'),
    9 => array('2-1', '//2-1'),
    10 => array('2-2', '2-1', '1-1', '1-1', '//1-1', '1-1', '2-1', '2-2')
    
);

$arrVideos = array();

if($content['videos']) {
    foreach($content['videos'] as $v) {
        if($v['video']) {
            $arrVideos[($v['key']-1)] = $v['video'];
        }
    }
}

if(!$content['background']) {
    $content['background'] = 'dark';
}

if($content['images']) { ?>
    <div data-gallery="<?= $galleryLayout;?>" class="container area-<?= $content['background'];?> <?= $content['padding'] ? 'container--padding':'container--no-padding';?> <?= $content['no_padding_bottom'] ? 'container--no-padding-bottom' : '';?>">
    <div class="group-container">
    <div class="group group--left">
    <?php $i=0;foreach($content['images'] as $image) { ?>

        <?php 
        
        $break = false;
        $moduleLayout = $arrLayouts[$galleryLayout][$i];

        if(strpos($moduleLayout, '//') !== false) {
            $break = true;
            $moduleLayout = str_replace('//', '', $moduleLayout);
        }
        ?>

        <?php if($break) : ?>
        </div><div class="group group--right">
        <?php endif;?>

        <?php $moduleClass = 'module module--'.$moduleLayout;?>

            <?php if(isset($arrVideos[$i])) : ?>
                <div class="<?= $moduleClass;?> module--16-9 module--video">
                    <div class="ratio">
                        <video controls poster="<?= $image['url'];?>" class="video-js vjs-default-skin page-video" controls width="100%" height="100%">
                            <source src="<?= $arrVideos[$i];?>" type="video/mp4">
                        </video>
                    </div>
                </div>
            <?php else : ?>
                <div class="<?= $moduleClass;?>">
                    <div class="ratio" style="background-image: url('<?= $image['url'];?>"></div>
                </div>
            <?php endif;?>

    <?php $i++;} ?>
    </div>
    </div>
    </div>
<?php } ?>