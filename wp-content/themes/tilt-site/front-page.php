<?php
/**
 * Template Name: front page
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<?php
 $args = array(
	 'posts_per_page' => 1,
	 'order_by' => 'date',
	 'post_type' => 'post',
	 'post_status' => 'publish'
 );

 $posts_array = get_posts( $args );

 $post = $posts_array[0];
 $postID = $post->ID;

 if (has_post_thumbnail( $postID ) ){
	 $image = wp_get_attachment_image_src( get_post_thumbnail_id( $postID ), 'single-post-thumbnail' );
 }


?>

<header id="home-page" class="work-item work-item--motion area-dark">
	<div class="module--video module--header">
		<div class="ratio">
			<div class="container container--header strapline-container">
				<h1>We Are <strong id="strapline-text" class="highlight">Time Travellers</strong></h1>
				<a href="<?php echo site_url(); ?>/work">
					<div class="cube">
						<div class="cube--front cube--front__no-bg">
							<p class="sans-serif">View our Showreel</p>
						</div>
						<div class="cub--top cube--top__no-bg">
							<p class="sans-serif">You&rsquo;re gonna love it</p>
						</div>
					</div>
				</a>
			</div>
			<video id="header-video-player" class="video-js vjs-default-skin" autoplay loop muted width="100%" height="100%" >
					<source id="header-video" src="<?php echo get_template_directory_uri(); ?>/video/graded_masthead4.mp4" type="video/mp4">
			</video>
		</div>
	</div>
</header>

<div id="header-overlay" class="container container--header area-dark">
	<div class="text-container">
		<p class="first-para sans-serif"><strong class="highlight">We are Tilt</strong> Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
		<a href="<?php echo site_url(); ?>/contact">
			<div class="cube">
				<div class="cube--front">
					<p class="sans-serif">Contact Us</p>
				</div>
				<div class="cub--top">
					<p class="sans-serif">Please</p>
				</div>
			</div>
		</a>
	</div>
</div>

<div class="container container--no-padding">
	<section>
		<div class="group-container">
			<div class="group group--right">
				<div class="module module--2-1">

					<div class="overlay area-dark">
						<div class="overlay-text">
							<p class="tag">Work</p>
							<h2>Nickelodeon <br />
								<span class="light underlined">Code-It</span>
							</h2>
						</div> <!-- /end overlay-text -->
					</div> <!-- /end overlay -->

					<div class="ratio" style="background-image: url('<?php echo get_template_directory_uri();?>/images/home/home_02_mr.jpg')"></div>

				</div>
				<div class="module module--1-1">
                    <a id="instagram_link_1" href="#" target="_blank">
                        <div id="instagram_box_1" class="ratio instagram-box"></div>
                    </a>
				</div>
				<div class="module module--1-1 area-dark">
					<a href="<?php echo $post->guid; ?>">
						<div class="overlay area-dark">
							<div class="overlay-text">
								<p class="tag">News</p>
								<h2><?php echo $post->post_name; ?></h2>
							</div> <!-- /end overlay-text -->
						</div> <!-- /end overlay -->
						<div class="ratio" style="background-image: url('<?php echo $image[0]; ?>')"></div>
					</a>
				</div>
			</div>
			<div class="group group--left">
				<div id="module-5" class="module module--2-2">
					<div class="overlay area-dark">
						<div class="overlay-text">
							<p class="tag">Film: Case Study</p>
							<h2>BP <br />
								<span class="light underlined">First Level Leaders</span>
							</h2>
							<p class="sans-serif">Engage your audience on an emotional level</p>
						</div> <!-- /end overlay-text -->
					</div> <!-- /end overlay -->
					<div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/home/home_01_ls.jpg')"></div>
				</div>
			</div> <!-- /end group -->
		</div> <!-- /end group-container -->
	</section>
</div> <!-- /end container -->

<div class="container container--no-padding">
	<section>
		<div class="group-container">
			<div class="group group--right">

				<div id="module-5" class="module module--2-2">

					<div class="overlay area-dark">
						<div class="overlay-text">
							<p class="tag">Web: Case Study</p>
							<h2>BP <br />
								<span class="light underlined">Discover BP</span>
							</h2>
							<p class="sans-serif">Why would employees spend time learning if they don’t have to?</p>
						</div> <!-- /end overlay-text -->
					</div> <!-- /end overlay -->
					<div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/home/home_04_ls.jpg')"></div>

				</div>


			</div>
			<div class="group group--left">

				<div class="module module--2-1 area-dark">

					<div class="overlay area-dark">
						<div class="overlay-text">
							<p class="tag">Work</p>
							<h2>GfK <br />
								<span class="light underlined">Brand Video</span>
							</h2>
						</div> <!-- /end overlay-text -->
					</div> <!-- /end overlay -->

					<div class="ratio" style="background-image: url('<?php echo get_template_directory_uri();?>/images/home/home_03_mr.jpg')"></div>

				</div>


				<div class="module module--1-1">
                    <a id="instagram_link_2" href="#" target="_blank">
				        <div id="instagram_box_2" class="ratio instagram-box"></div>
                    </a>

				</div>
				<div id="twitter__module" class="module module--1-1 area-dark">
					<div class="module__text">
						<?php echo do_shortcode( "[rotatingtweets include_rts='1' official_format='2' search='from:wearetilt' tweet_count='3' show_follow='1' timeout='3000' rotation_type='fade']" ) ?>
						<a href="https://twitter.com/intent/follow?region=follow_link&screen_name=wearetilt&tw_p=followbutton" target="_blank" class="twitter-folow">&#xf243;&#xf2c7;</a>
					</div> <!-- /end text-section -->
				</div>

			</div> <!-- /end group -->
		</div> <!-- /end group-container -->
	</section>
</div> <!-- /end container -->

</div> <!-- Close Wrapper -->

<script type="text/javascript">

var user;

function doData(data){
    console.log(data.data[0]['username']);
    for(i in data.data){
        if(data.data[i].username === 'we_are_tilt'){
            user = data.data[i].id;
            var script2 = document.createElement('script');
            script2.src = 'https://api.instagram.com/v1/users/' + user + '/media/recent?client_id=83440bc1481343219c7ddb44a46c0e7b&callback=doPicture';
            document.getElementsByTagName('head')[0].appendChild(script2);
        }
    }
}

function doPicture(pictureData){

    console.log(pictureData);

    var instagramImage1 = pictureData.data[0].images.standard_resolution.url;
    var instagramLink1 = pictureData.data[0].link;
    var instagramImage2 =  pictureData.data[1].images.standard_resolution.url;
    var instagramLink2 = pictureData.data[1].link;

    console.log(instagramImage1);
    document.getElementById('instagram_box_1').style.backgroundImage = "url('" + instagramImage1 + "')";
    document.getElementById('instagram_box_2').style.backgroundImage = "url('" + instagramImage2 + "')";
    document.getElementById('instagram_link_1').href = instagramLink1;
    document.getElementById('instagram_link_2').href = instagramLink2;


}

var script = document.createElement('script');
script.src = 'https://api.instagram.com/v1/users/search?q=we_are_tilt&client_id=83440bc1481343219c7ddb44a46c0e7b&callback=doData';

document.getElementsByTagName('head')[0].appendChild(script);


// function getInstagramMedia() {
//
//     console.log("In here");
//
//     function createCORSRequest(method, url){
//         console.log("Now in here");
//     var xhr = new XMLHttpRequest();
//     if ("withCredentials" in xhr){
//         xhr.open(method, url, true);
//     } else if (typeof XDomainRequest != "undefined"){
//         xhr = new XDomainRequest();
//         xhr.open(method, url);
//     } else {
//         xhr = null;
//     }
//     return xhr;
//     }
//
//     var request = createCORSRequest("get", 'https://api.instagram.com/v1/users/' + user + '/media/recent?client_id=83440bc1481343219c7ddb44a46c0e7b&callback=doPicture');
//
//     if (request){
//         console.log("Now in here here");
//         request.onload = function() {
//             console.log("on load");
//             var instagramInfo = request.responseText;
//             console.log(instagramInfo);
//         };
//         request.onreadystatechange = function() {
//             console.log(request.readyState);
//             if(request.readyState == 4){
//                 console.log("on ready stage");
//                 instagramInfo= request.responseText;
//                 console.log(instagramInfo);
//             } else {
//                 console.log('wtf');
//             }
//         }
//         request.send();
//     }
// }

// getInstagramMedia();

// <![CDATA[
// var colour="#ff0066";
// var sparkles=120;
//
// /****************************
// *  Tinkerbell Magic Sparkle *
// * (c) 2005 mf2fm web-design *
// *  http://www.mf2fm.com/rv  *
// * DON'T EDIT BELOW THIS BOX *
// ****************************/
// var x=ox=400;
// var y=oy=300;
// var swide=800;
// var shigh=600;
// var sleft=sdown=0;
// var tiny=new Array();
// var star=new Array();
// var starv=new Array();
// var starx=new Array();
// var stary=new Array();
// var tinyx=new Array();
// var tinyy=new Array();
// var tinyv=new Array();
//
// window.onload=function() { if (document.getElementById) {
//   var i, rats, rlef, rdow;
//   for (var i=0; i<sparkles; i++) {
//     var rats=createDiv(3, 3);
//     rats.style.visibility="hidden";
//     document.body.appendChild(tiny[i]=rats);
//     starv[i]=0;
//     tinyv[i]=0;
//     var rats=createDiv(5, 5);
//     rats.style.backgroundColor="transparent";
//     rats.style.visibility="hidden";
//     var rlef=createDiv(1, 5);
//     var rdow=createDiv(5, 1);
//     rats.appendChild(rlef);
//     rats.appendChild(rdow);
//     rlef.style.top="2px";
//     rlef.style.left="0px";
//     rdow.style.top="0px";
//     rdow.style.left="2px";
//     document.body.appendChild(star[i]=rats);
//   }
//   set_width();
//   sparkle();
// }}
//
// function sparkle() {
//   var c;
//   if (x!=ox || y!=oy) {
//     ox=x;
//     oy=y;
//     for (c=0; c<sparkles; c++) if (!starv[c]) {
//       star[c].style.left=(starx[c]=x)+"px";
//       star[c].style.top=(stary[c]=y)+"px";
//       star[c].style.clip="rect(0px, 5px, 5px, 0px)";
//       star[c].style.visibility="visible";
//       starv[c]=50;
//       break;
//     }
//   }
//   for (c=0; c<sparkles; c++) {
//     if (starv[c]) update_star(c);
//     if (tinyv[c]) update_tiny(c);
//   }
//   setTimeout("sparkle()", 40);
// }
//
// function update_star(i) {
//   if (--starv[i]==25) star[i].style.clip="rect(1px, 4px, 4px, 1px)";
//   if (starv[i]) {
//     stary[i]+=1+Math.random()*3;
//     if (stary[i]<shigh+sdown) {
//       star[i].style.top=stary[i]+"px";
//       starx[i]+=(i%5-2)/5;
//       star[i].style.left=starx[i]+"px";
//     }
//     else {
//       star[i].style.visibility="hidden";
//       starv[i]=0;
//       return;
//     }
//   }
//   else {
//     tinyv[i]=50;
//     tiny[i].style.top=(tinyy[i]=stary[i])+"px";
//     tiny[i].style.left=(tinyx[i]=starx[i])+"px";
//     tiny[i].style.width="2px";
//     tiny[i].style.height="2px";
//     star[i].style.visibility="hidden";
//     tiny[i].style.visibility="visible"
//   }
// }
//
// function update_tiny(i) {
//   if (--tinyv[i]==25) {
//     tiny[i].style.width="1px";
//     tiny[i].style.height="1px";
//   }
//   if (tinyv[i]) {
//     tinyy[i]+=1+Math.random()*3;
//     if (tinyy[i]<shigh+sdown) {
//       tiny[i].style.top=tinyy[i]+"px";
//       tinyx[i]+=(i%5-2)/5;
//       tiny[i].style.left=tinyx[i]+"px";
//     }
//     else {
//       tiny[i].style.visibility="hidden";
//       tinyv[i]=0;
//       return;
//     }
//   }
//   else tiny[i].style.visibility="hidden";
// }
//
// document.onmousemove=mouse;
// function mouse(e) {
//   set_scroll();
//   y=(e)?e.pageY:event.y+sdown;
//   x=(e)?e.pageX:event.x+sleft;
// }
//
// function set_scroll() {
//   if (typeof(self.pageYOffset)=="number") {
//     sdown=self.pageYOffset;
//     sleft=self.pageXOffset;
//   }
//   else if (document.body.scrollTop || document.body.scrollLeft) {
//     sdown=document.body.scrollTop;
//     sleft=document.body.scrollLeft;
//   }
//   else if (document.documentElement && (document.documentElement.scrollTop || document.documentElement.scrollLeft)) {
//     sleft=document.documentElement.scrollLeft;
//     sdown=document.documentElement.scrollTop;
//   }
//   else {
//     sdown=0;
//     sleft=0;
//   }
// }
//
// window.onresize=set_width;
// function set_width() {
//   if (typeof(self.innerWidth)=="number") {
//     swide=self.innerWidth;
//     shigh=self.innerHeight;
//   }
//   else if (document.documentElement && document.documentElement.clientWidth) {
//     swide=document.documentElement.clientWidth;
//     shigh=document.documentElement.clientHeight;
//   }
//   else if (document.body.clientWidth) {
//     swide=document.body.clientWidth;
//     shigh=document.body.clientHeight;
//   }
// }
//
// function createDiv(height, width) {
//   var div=document.createElement("div");
//   div.style.position="absolute";
//   div.style.height=height+"px";
//   div.style.width=width+"px";
//   div.style.overflow="hidden";
//   div.style.zIndex = 99999;
//   div.style.backgroundColor=colour;
//   return (div);
// }
// ]]>

</script>

<?php get_footer(); ?>
