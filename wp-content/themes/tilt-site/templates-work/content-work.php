<?php 

$arrContent = get_field('work_items');

foreach($arrContent as $content) {

    $layout = $content['acf_fc_layout'];

    if($layout == 'intro') {
        include(locate_template('templates-work/content-work-intro.php'));
    } elseif($layout == 'gallery') {
        include(locate_template('templates-work/content-work-gallery.php'));
    } elseif($layout == 'text_image__image') {
        include(locate_template('templates-work/content-work-text-image--image.php'));
    } elseif($layout == 'text__image_image') {
        include(locate_template('templates-work/content-work-text--image-image.php'));
    } elseif($layout == 'headline__text') {
        include(locate_template('templates-work/content-work-headline--text.php'));
    } elseif($layout == 'image_video') {
        include(locate_template('templates-work/content-work-image-video.php'));
    } elseif($layout == 'iphone_gallery') {
        include(locate_template('templates-work/content-work-iphone-gallery.php'));
    } elseif($layout == 'screen_slider') {
        include(locate_template('templates-work/content-work-screen-slider.php'));
    } elseif($layout == 'quote') {
        include(locate_template('templates-work/content-work-quote.php'));
    } else { ?>

    <p>Layout <strong><?= $layout;?></strong> not defined</p>

    <?php } ?>

<?php 

}

?>

<div class="group-container">
    <a class="project-navigation paginate_prev" href="../reliance"><span>&#8249;</span> Previous Project</a>
    <a class="project-navigation paginate_next" href="../bp-fll-stories">Next Project <span>&#8250;</span></a>
</div>