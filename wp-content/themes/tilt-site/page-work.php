<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

$work_groups = get_field('work_items');

get_header(); ?>
<div id="video-overlay" class="fullpage-overlay">
    <video id="overlay-video" width="100%" height="100%" controls class="video-js vjs-default-skin vertical-align" poster="<?php echo get_template_directory_uri(); ?>/images/work/showreel_poster.jpg" width="100%" height="auto">
        <source src="https://player.vimeo.com/external/139889786.hd.mp4?s=91a9df0c1f9574740a422a5f253fa81768da039e&profile_id=175" type="video/mp4">
    </video>
    <div id="video-overlay-close"></div>
</div>
<header id="work_page" class="work-item work-item--motion area-dark">
    <div class="module--video module--header">
        <div id="header-play" class="header-play"></div>
        <div class="container container--reel"> <p>REEL 2019</p></div>
        <div class="ratio">
            <video id="header-video-player" class="video-js vjs-default-skin" autoplay loop muted poster="<?php echo get_template_directory_uri(); ?>/images/work/showreel_poster.jpg" width="100%" height="100%" >
            	<source id="header-video" src="https://player.vimeo.com/external/141548149.hd.mp4?s=c38947ea65f3bad06d05e9881fe92ead&profile_id=113" type="video/mp4">
            </video>
        </div>
    </div>

	<?php if($work_groups) : ?>
    <div id="services--list" class="container container--header container--work-list">
		<?php foreach($work_groups as $k => $work_group) : ?>

		<?php $title = $work_group['work_title_filter'] ? $work_group['work_title_filter'] : $work_group['work_headline'];?>
		<?php $filterValue = $work_groups[$k]['filter_value'] = sanitize_title($title);?>

		<?php if($work_group['work_entries']) : ?>
        <span id="work_<?=$filterValue;?>" class="work-item-title"><?= $title;?></span>
		<?php else : ?>
		<a id="work_<?=$filterValue;?>" class="work-item-title" href="<?= $work_group['work_link'];?>"><?= $title;?></a>
		<?php endif;?>

		<?php endforeach;?>
	</div>
	<?php endif;?>
</header>

		<?php
		$entries_left = array(1,2);
		$entries_right = array(0,3,4);
		?>

		<?php if($work_groups) : ?>
			<?php foreach($work_groups as $work_group) : ?>

			<?php if($work_group['work_entries']) : ?>
			<div id="<?= $work_group['filter_value'];?>" class="work-container container container--no-padding">
			<section>

			<div class="group-container">
				<div class="group group--left">

					<div class="module module--2-1 module--text-pad module--dark module--mobile-double-height">
						<div class="module__text">
							<h2 class="underlined"><?= $work_group['work_headline'];?></h2>
							<p class="first-para tag--work-title"><?= $work_group['work_text'];?></p>

							<a class="cube--link" href="<?= $work_group['work_link'];?>">
								<div class="cube">
									<div class="cube--front cube--front__no-bg">
										<p class="sans-serif">More Info</p>
									</div>
									<div class="cube--top cube--top__no-bg">
										<p class="sans-serif">More Info</p>
									</div>
								</div>
							</a>

						</div>

					</div>

					<?php foreach($work_group['work_entries'] as $k => $work_item) : ?>

					<?php if(in_array($k, $entries_left)) : ?>
					<?php
					$link = get_permalink($work_item['work_item_post']->ID);
					$arrImage = wp_get_attachment_image_src($work_item['work_item_image'], '');
					?>
					<div class="module area-dark <?= $k == 0 ? 'module--2-1' : 'module--1-1';?>">
						<a href="<?= $link;?>">
							<div class="overlay area-dark">
								<div class="overlay-text">
									<p class="tag tag--work-body"><?= $work_item['work_item_title'];?></p>
									<h2><?= $work_item['work_item_headline'];?><br /><span class="light<?= $k==0?' underlined':'';?>"><?= $work_item['work_item_headline2'];?></span></h2>
									<?php if($work_item['work_item_text']): ?>
									<p class="sans-serif"><?= $work_item['work_item_text'];?></p>
									<?php endif;?>
								</div>
							</div>
							<div class="ratio" style="background-image: url('<?= $arrImage[0];?>')">
							</div>
						</a>
					</div>
					<?php endif;?>
					<?php endforeach;?>

				</div>

				<div class="group group--right">

				<?php foreach($work_group['work_entries'] as $k => $work_item) : ?>
					<?php if(in_array($k, $entries_right)) : ?>
					<?php
					$link = get_permalink($work_item['work_item_post']->ID);
					$arrImage = wp_get_attachment_image_src($work_item['work_item_image'], '');
					?>
					<div class="module area-dark <?= $k == 0 ? 'module--2-1' : 'module--1-1';?>">
						<a href="<?= $link;?>">
							<div class="overlay area-dark">
								<div class="overlay-text">
									<p class="tag tag--work-body"><?= $work_item['work_item_title'];?></p>
									<h2><?= $work_item['work_item_headline'];?><br /><span class="light<?= $k==0?' underlined':'';?>"><?= $work_item['work_item_headline2'];?></span></h2>
									<?php if($work_item['work_item_text']): ?>
									<p class="sans-serif"><?= $work_item['work_item_text'];?></p>
									<?php endif;?>
								</div>
							</div>
							<div class="ratio" style="background-image: url('<?= $arrImage[0];?>')">
							</div>
						</a>
					</div>
					<?php endif;?>
				<?php endforeach;?>

				</div>


			</div>
			</section>
			</div>
			<?php endif;?>

			<?php endforeach;?>

		<?php endif;?>

<!-- /end container -->


<div class="container container--half-top container--half-bot image-container">
	<img class="full-size" src="<?php echo get_template_directory_uri(); ?>/images/client_logos.jpg" alt="PBS Fear-o-Meter" />
</div>

</div>

<?php get_footer(); ?>
