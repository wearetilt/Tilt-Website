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

  <div id="services--list" class="container container--header container--work-list">
  	<p> Filter work by: </p>
  	<a class='list-all' href="/work">All</a>
  	<a class="list-web" href="/web">Web</a>
  	<a class="list-motion" href="/motion">Motion</a>
  	<a class="list-film" href="/film">Film</a>
  </div>

  <!-- All work overview -->

  <?php
  $entries_left = array(1);
  $entries_right = array(0,2);
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
  									<div class="module area-dark module--2-1">
  										<a href="<?= $link;?>">
  											<div class="overlay area-dark">
  												<div class="overlay-text">
  													<h2><?= $work_item['work_item_headline'];?><br /><span class="light underlined"><?= $work_item['work_item_headline2'];?></span></h2>
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
  									<div class="module area-dark module--2-1">
  										<a href="<?= $link;?>">
  											<div class="overlay area-dark">
  												<div class="overlay-text">
  													<h2><?= $work_item['work_item_headline'];?><br /><span class="light underlined"><?= $work_item['work_item_headline2'];?></span></h2>
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

  <div class="showreel area-dark">
  	<div class="embed-container">
  		<iframe src="https://player.vimeo.com/video/139889786" width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
  	</div>
  </div>


  <div class="container container--half-top container--half-bot image-container client-logos">
  	<h2> Featured Clients</h2>
    <?php $clients = get_field('featured_clients');?>
    <div class="clients"><?php echo $clients; ?></div>
  </div>

</div>

<?php get_footer(); ?>
