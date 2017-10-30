<?php
$arrText = explode('</p>', $content['text']);
$arrText[0] = str_replace('<p>', '<p class="first-para tag--work-title">', $arrText[0]);
$text = implode('</p>', $arrText);

if(!$content['background']) {
    $content['background'] = 'dark';
}
?>

<!-- container--CS-motion-bg -->
<div class="container container-headline-text area-<?= $content['background'];?>">
    <section class="text-section">
        <h2><?= $content['headline'];?></h2>
        <div class="text-section__para"><?= $text;?></div>
    </section>
</div>