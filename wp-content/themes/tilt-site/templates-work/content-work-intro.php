<?php

$pageId = get_the_ID();
$terms = get_the_terms( $pageId, 'work_tags');

$arrTerms = array();

if($terms) {
    foreach($terms as $term) {
        $arrTerms[] = $term->name;
    }
}

if($content['image']) {
    $image = $content['image']['url'];
}

?>

<?php if($content['type'] == 'video' && $content['video']) : ?>
<div id="video-overlay" class="fullpage-overlay">
    <video id="overlay-video" controls class="video-js vjs-default-skin vertical-align" poster="<?php echo get_template_directory_uri(); ?>/images/work/film_values/barclays_poster.jpg" width="100%" height="auto">
        <source src="https://player.vimeo.com/external/141548149.hd.mp4?s=c38947ea65f3bad06d05e9881fe92ead&profile_id=113" type="video/mp4">
    </video>
    <div id="video-overlay-close"></div>
</div>
<?php endif;?>

<header data-color="<?= $content['project_color'];?>" class="work-item area-dark <?= $content['type'] == 'video' && $content['video_loop'] ? 'work-header-video' : 'work-header';?><?= $content['intro_background'] ? ' work-item--background' : '';?><?= $content['type'] == 'background' ? ' work-item--background-image' : '';?><?= $content['type'] == 'monitor' ? ' work-item--monitor' : '';?>" <?= $content['type'] == 'background' ? 'style="background-image: url('.$image.')"' : '';?>>
    <?php if($content['type'] == 'video' && $content['video_loop']) : ?>
    <div class="module--video module--header">
        <?php if($content['video']) : ?>
        <div id="header-play" class="header-play video-ready"></div>
        <?php endif;?>
        <div class="ratio">
            <video data-video="<?= $content['video'];?>" id="header-video-player" class="video-js vjs-default-skin" autoplay loop poster="<?php echo get_template_directory_uri(); ?>/images/work/film_values/barclays_poster.jpg" width="100%" height="100%" >
                    <source id="header-video" src="<?= $content['video_loop'];?>" type="video/mp4">
            </video>
        </div>
    </div>
    <?php endif;?>
    <?php if($content['type'] == 'monitor' && $image) : ?>
    <div class="monitor-wrapper">
	    <div class="monitor-holder">
            <?php if($content['link']) : ?>
                <a href="<?= $content['link'];?>" target="_blank">
	            <div class="overlay area-dark">
                <img class="vertical-align centre-image" src="<?php echo get_template_directory_uri(); ?>/images/link_button.png" alt="">
            <?php endif;?>
            <?php if($content['link']) : ?>
                </div>
                </a> 
            <?php endif;?>
	        <img class="monitor centre-image" src="<?php echo get_template_directory_uri(); ?>/images/monitor.png" alt="an image of an empty apple monitor">
	        <div class="monitor-screen">
	            <img src="<?= $image;?>" alt="" style="width: 100%; height: 100%;">
	        </div>
	    </div>
    </div>
    <?php endif;?>
    <div class="container container--header">
        <div class="header-title">
            <p class="tag tag--work-body"><?= $content['category'];?></p>
            <h1>
                <?= $content['title_bold'];?>
                <?php if($content['title']) : ?> 
                <br><span class="light underlined"><?= $content['title'];?></span>
                <?php endif;?>
            </h1>
            <?php if($arrTerms) : ?>
                <h2 class="light services"><?= implode(' | ', $arrTerms);?></h2>
            <?php endif;?>
        </div>
        <?php if($content['text_brief'] || $content['text_idea']) : ?>
            <div class="header-text">
            <?php if($content['text_brief']) : ?>
                <div class="header-text__module header-text__module--padding">
                    <h2>The Brief</h2>
                    <p class="first-para tag--work-title"><?= $content['text_brief'];?></p>
                </div>
            <?php endif;?>
            <?php if($content['text_idea']) : ?>
                <div class="header-text__module header-text__module--padding">
                    <h2>The Big Idea</h2>
                    <p class="first-para tag--work-title"><?= $content['text_idea'];?></p>
                </div>
            <?php endif;?>
            </div>
        <?php endif;?>
    </div>
</header>