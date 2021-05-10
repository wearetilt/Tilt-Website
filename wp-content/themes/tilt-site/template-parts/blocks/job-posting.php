<?php $career_items = get_field('career_items');


// Create class attribute allowing for custom "className" and "align" values.
$className = 'career-container';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

?>

<div class="header-container sub-header container area-dark">
    <div class="text-container first-para sans-serif">
        <h2 class=""><?php echo get_field('career_title'); ?></h2>
    </div>
</div>

<div class="flex-grid <?php echo ((count($career_items) % 2 == 0) ? 'flex-even' : 'flex-odd') ?>">

    <?php if($career_items) : ?>
        <?php foreach($career_items as $career_item) : ?>
            <div class="<?php echo $className; ?> container container--no-padding flex-item">
                <div class="group-container">
                    <div class="module module--dark module--mobile-double-height">
                        <div>
                            <div>
                                <h2 class=""><?= $career_item['career_headline'];?></h2>
                                <p class="tag--career-title"><?= $career_item['career_text'];?></p>

                                <a class="cube--link" href="<?= get_permalink($career_item['career_link']);?>">
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
