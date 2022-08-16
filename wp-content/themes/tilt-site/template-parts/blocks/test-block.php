<?php
$newsCarousel = get_field('news_carousel');
?>

<?php if ($newsCarousel) { ?>
    <div class="news-carousel__container">
        <div class="news-line area-dark">
            <?php foreach ($newsCarousel['news_card'] as $newsCard) { ?>
                <a href="<?php echo $newsCard['link']; ?>" class="news-item">
                    <div class="news_text">
                        <div>
                            <p>News</p>
                            <span><?php echo $newsCard['title']; ?></span>
                        </div>
                    </div>
                </a>
            <?php } ?>
        </div>
    </div>
<?php } ?>

