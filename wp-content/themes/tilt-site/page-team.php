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

get_header(); ?>

<div class="container container--double-side-pad area-dark container--mobile-header-spacing">
	<div class="text-container">
		<p class="first-para sans-serif"><strong class="highlight">GREAT IDEAS</strong> COME FROM COLLECTIONS OF CURIOUS UNINHIBITED MINDS. MEET THE TILT TEAM:</p>
	</div>
</div> <!-- /end container -->

<?php

$args = array(
  'numberposts' => -1,
  'post_type'   => 'team_item'
);
 
$team_items = get_posts( $args );

?>

	<div class="container container--no-padding area-dark">
		<div class="group-container">

			<?php if($team_items) : ?>
			<?php $i=1;foreach($team_items as $team) : ?>

			<?php
			$name = $team->post_title;
			$position = get_field('position', $team);
			$department = get_field('department', $team);
			$video = get_field('video', $team);
			$videoSmall = get_field('video_small', $team);
			$isDirector = get_field('director', $team);
			$teamImage = get_the_post_thumbnail_url($team, 'team');
			$description = apply_filters('the_content', $team->post_content);
			$description2 = strip_tags(get_field('did_you_know', $team));

			$cssClass = "module module--staff module--video";

			if($isDirector) {
				$cssClass .= " module--staff__director";
			}

			?>

			<div id="staff-<?= $i;?>" class="<?= $cssClass;?>" data-image="<?= $teamImage;?>" data-fullvideo='<?= $video;?>' style="background-image: url('<?= $teamImage;?>'); background-size: cover; background-position: 50% 50%;">
				<div class="overlay overlay--staff area-dark">
					<div class="overlay-text">
						<h2 class="underlined"><?= $name;?></h2>
						<p class="sans-serif">
							<?= $position;?>
							<?php if($department) {echo ':<br>'.$department;}?>
						</p>
					</div>
				</div>
				<div class="ratio">
					<video poster="<?= $teamImage;?>" muted="true">
						<source src="<?= $videoSmall;?>" type="video/mp4">
					</video>
				</div>
				<div class="info-container">
					<div class="name"><?= $name;?></div>
					<div class="position"><?= $position;?></div>
					<div class="department"><?= $department;?></div>
					<div class="description"><?= $description;?></div>
					<div class="description2"><?= $description2;?></div>
				</div>
			</div>


			<?php $i++;endforeach;?>
			<?php endif;?>

		</div>
	</div>

	<div class="container container--no-padding area-dark">
		<div class="group-container">
			<div class="group group--left">
				<div id="twitter__module" class="module module--1-1 area-dark">
					<div class="module__text">
						<?php echo do_shortcode( "[rotatingtweets include_rts='1' show_meta_reply_retweet_favorite='1' official_format='2' search='from:wearetilt' tweet_count='3' show_follow='1' timeout='3000' rotation_type='fade' official_format_override='1']" ) ?>

					</div> <!-- /end text-section -->
				</div>
				<div class="module module--1-1">
					<a id="instagram_link_1" href="#" target="_blank">
                        <div class="overlay area-dark"></div>
				        <div id="instagram_box_1" class="ratio instagram-box"></div>
                    </a>
				</div>
				<div class="module module--2-2">
					<a id="instagram_link_2" href="#" target="_blank">
                        <div class="overlay area-dark"></div>
				        <div id="instagram_box_2" class="ratio instagram-box"></div>
                    </a>
				</div>
			</div>
			<div class="group group--right">
				<div class="module module--2-2">
					<a id="instagram_link_3" href="#" target="_blank">
                        <div class="overlay area-dark"></div>
				        <div id="instagram_box_3" class="ratio instagram-box"></div>
                    </a>
				</div>
				<div class="module module--1-1">
					<a id="instagram_link_4" href="#" target="_blank">
                        <div class="overlay area-dark"></div>
				        <div id="instagram_box_4" class="ratio instagram-box"></div>
                    </a>
				</div>
				<div id="twitter__module" class="module module--1-1 area-dark">
					<div class="module__text">
						<?php echo do_shortcode( "[rotatingtweets include_rts='1' show_meta_reply_retweet_favorite='1' offset='1' official_format='2' search='from:wearetilt' tweet_count='3' show_follow='1' timeout='3000' rotation_type='fade' official_format_override='1']" ) ?>
					</div> <!-- /end text-section -->
				</div>
			</div>
		</div> 
	</div>


<?php /*
	<?php $staffData = file_get_contents(get_template_directory_uri().'/data/staff.json');?>
	<script>
		var staffData = <?= $staffData;?>;
	</script>
	*/?>

	<script type="text/javascript">

	var user;

	<?php
		$insta = file_get_contents("https://api.instagram.com/v1/users/self/media/recent/?access_token=2148730231.3aa6f14.5da21e1ab7024c78b77a9c88a3fb0a3d");
	 ?>

	 var pictureData = JSON.parse(<?php echo json_encode($insta) ?>);

	var doPicture = function(pictureData){

	    var instagramImage1 = pictureData.data[0].images.standard_resolution.url;
	    var instagramLink1 = pictureData.data[0].link;
	    var instagramImage2 =  pictureData.data[1].images.standard_resolution.url;
	    var instagramLink2 = pictureData.data[1].link;
		var instagramImage3 = pictureData.data[2].images.standard_resolution.url;
		var instagramLink3 = pictureData.data[2].link;
		var instagramImage4 =  pictureData.data[3].images.standard_resolution.url;
		var instagramLink4 = pictureData.data[3].link;

	    document.getElementById('instagram_box_1').style.backgroundImage = "url('" + instagramImage1 + "')";
	    document.getElementById('instagram_box_2').style.backgroundImage = "url('" + instagramImage2 + "')";
	    document.getElementById('instagram_link_1').href = instagramLink1;
	    document.getElementById('instagram_link_2').href = instagramLink2;
		document.getElementById('instagram_box_3').style.backgroundImage = "url('" + instagramImage3 + "')";
		document.getElementById('instagram_box_4').style.backgroundImage = "url('" + instagramImage4 + "')";
		document.getElementById('instagram_link_3').href = instagramLink3;
		document.getElementById('instagram_link_4').href = instagramLink4;


	}

	doPicture(pictureData);
	</script>

</div>

<div id="staff-member">
	<div id="staff-member__wrapper">
		<div id="blahblahblah"></div>
		<div id="staff-member__info" class="area-dark no-background" style="position: relative; z-index: 7;">
			<div id="staff-member__close"></div>
			<h1 id="staff-member__name"></h1>
			<h2 id="staff-member__position"></h2>
			<h2 id="staff-member__department" class="underlined"></h2>
			<div id="staff-member__about"></div>
			<p id="staff-member__did-you-know" class="sans-serif"></p>
		</div>
	</div>
</div>

<?php get_footer(); ?>
