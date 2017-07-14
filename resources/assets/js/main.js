
var mobile = false;

// MENU VARS
var menuButton = document.getElementById('menuButton');
var pageMenu = document.getElementById('pageMenu');
var closeButton = document.getElementById('closeButton');

// STAFF PAGE VARS
var staffMember;
var staffBox;
var staffObject;
var staffBoxClose;
var startingHeight;
var startingWidth;
var leftPosition;
var topPosition;
var rect;
var scrollPosition;
var videoFunction = '';

// FORM VARS
var inputsParent;
var inputsParentPosition;
var inputPosition;
var newFunkyBorderHeight;
var funkyBorder;
var funkyBorderToChange;
var formHolders;
var formBorders;
var doc = document.documentElement;

/**
* UTIL FUNCTIONS
*
*/
Modernizr.on('touchevents', function(result){
	if(result === true){
		jQuery('.module a').on("click", function (e) {
			'use strict'; //satisfy code inspectors
			var link = jQuery(this); //preselect the link
			if (link.hasClass('hover')) {
				return true;
			} else {
				link.addClass('hover');
				jQuery('.module a').not(this).removeClass('hover');
				e.preventDefault();
				return false; //extra, and to make sure the function has consistent return points
			}
		});
	}
});

$('.button--disabled').on("click", function(e){
	e.preventDefault();
});

jQuery(function($){
	if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
    mobile = true;
  }
})

/**
* 404 VIDEO FUNCTION
* Needs re-working and adding in when refined
*/
// if(document.getElementById('page_404')){
// 	var videoToGet = Math.floor((Math.random() * 7 + 1));
// 	var gorillaSrc = '';
// 	var posterGorilla = window.directoryURI + '/images/404/gorilla_poster_' + videoToGet + '.jpg';
// 	switch(videoToGet) {
// 		case 1:
// 			var gorillaSrc = "https://player.vimeo.com/external/145886208.hd.mp4?s=3788db7c62a0ffaf53f237112f17fee38c7b617e&profile_id=113";
// 	   	break;
// 		case 2:
// 			var gorillaSrc = "https://player.vimeo.com/external/145886198.hd.mp4?s=f2a4b7651ce4c251713018af44d9f9be8f728277&profile_id=113";
// 		break;
// 		case 3:
// 			var gorillaSrc = "https://player.vimeo.com/external/145886197.hd.mp4?s=d86fe3331ce8d5da4086d84222ea89babd0f743c&profile_id=113";
// 		break;
// 		case 4:
// 			var gorillaSrc = "https://player.vimeo.com/external/145886196.hd.mp4?s=fd1b935cf759f6dcfb60ca383674b3f269199589&profile_id=113";
// 		break;
// 		case 5:
// 			var gorillaSrc = "https://player.vimeo.com/external/145886195.hd.mp4?s=53c1bfc33fd1ec4f525d215743663b612156a8d7&profile_id=113";
// 		break;
// 		case 6:
// 			var gorillaSrc = "https://player.vimeo.com/external/145886193.hd.mp4?s=a1998f8f792c3158bb2d990b90b8509a06473420&profile_id=113";
// 		break;
// 		case 7:
// 			var gorillaSrc = "https://player.vimeo.com/external/145886194.hd.mp4?s=ec06bb801839ce68f9734583eb72f7f53b70d53d&profile_id=113";
// 		break;
// 		default:
// 			//do nothing
// 		break;
// 	}
// 	videojs("header-video-player").src(gorillaSrc);
// 	videojs("header-video-player").poster(posterGorilla);
// }


/**
* HEADER VIDEO FUNCTION 1
*
*/
document.addEventListener("DOMContentLoaded", function(event) {

	document.body.className += ' loaded';

	if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1) {

		if(document.getElementById('video-overlay')) {

			Modernizr.on('videoautoplay', function(result){
				// console.log('Video Autoplay result: ' + result)

				if(!result) {

					videojs("header-video-player").ready(function(){
						var myPlayer = this;
						myPlayer.pause();

						if(document.getElementsByTagName('header')){
							var theHeader = document.getElementsByTagName('header');
							var headerID = theHeader[0].getAttribute('ID');
							// jQuery('#header-play').hide();
							jQuery('.header-text').hide();
						}


						if(document.getElementById('header-play')){
							var playButton = document.getElementById('header-play');

							playButton.addEventListener('click', function(){
								jQuery('.container--header').hide();
								// myPlayer.requestFullscreen();
								myPlayer.play();
							});
						}

						switch (headerID) {
							//work-page
							case "page_barclays_integrity":
								myPlayer.src("https://player.vimeo.com/external/141174440.hd.mp4?s=4f32dd0a8cda06b1dfa13e74d2fc5abf&profile_id=113");
								//myPlayer.src("https://player.vimeo.com/external/140771096.hd.mp4?s=18276ebc9ead0e5b936f685afac90314&profile_id=113");
							break;

							case "page_barclays_values":
								myPlayer.src("https://player.vimeo.com/external/139330733.hd.mp4?s=cd31cd725d1122faa95cf8242d677c3e&profile_id=113");
								// myPlayer.src("https://player.vimeo.com/external/88791766.hd.mp4?s=01c82c0c307c791f78f402a0b264fbf0&profile_id=113");
							break;

							case "bp-fll":
								myPlayer.src("https://player.vimeo.com/external/140771096.hd.mp4?s=18276ebc9ead0e5b936f685afac90314&profile_id=113");
							break;

							case "page_bp_fll_stories":
								myPlayer.src("https://player.vimeo.com/external/139330951.hd.mp4?s=3d1c83178ba678c46e7f01baebb21bff&profile_id=113");
								//myPlayer.src("https://player.vimeo.com/external/141101947.hd.mp4?s=cd503eb677f03e6164bee57bccb92c1c&profile_id=113");
							break;

							case "page_discover_bp":
								myPlayer.src("https://player.vimeo.com/external/141529090.hd.mp4?s=9319fb63f3d31c680a7ccc8dea210503&profile_id=113");
								// myPlayer.src("https://player.vimeo.com/external/140771096.hd.mp4?s=18276ebc9ead0e5b936f685afac90314&profile_id=113");
							break;

							case "page_gfk":
								myPlayer.src("https://player.vimeo.com/external/140667746.hd.mp4?s=65dbf2593c9f3bed0c770c497eda1964&profile_id=113");
								//myPlayer.src("https://player.vimeo.com/external/109216250.hd.mp4?s=4554075b1bbddc5346e47acad348d420&profile_id=113");
							break;

							case "page_leadership":
								myPlayer.src("https://player.vimeo.com/external/164256445.hd.mp4?s=f141fb096147d76282bf00a36a29a1f83cd9a84c&profile_id=119");

							break;

							case "page_legacy":
								myPlayer.src("https://player.vimeo.com/external/66887877.hd.mp4?s=fdc4231994bcacbc95927f1ab19b489890fe327e&profile_id=113");
							break;

							case "page_reliace":
								myPlayer.src("https://player.vimeo.com/external/131908894.hd.mp4?s=644b8069e39833f3c9d1c401fe31b190&profile_id=113");
							break;

							case "page_sdnpa":
								myPlayer.src("https://player.vimeo.com/external/141048772.hd.mp4?s=9410c4302324a7d77893874178f3ec83&profile_id=113");
								// myPlayer.src("https://player.vimeo.com/external/89417008.hd.mp4?s=b970f0c992ca4f0299fe30801dd6fe08&profile_id=113");
							break;

							case "page_take_the_lead":
								myPlayer.src("https://player.vimeo.com/external/139331070.hd.mp4?s=b2d4b3506fa6f57cee7b8cf917f32298&profile_id=113");
								// myPlayer.src("https://player.vimeo.com/external/94658351.hd.mp4?s=4dd1fa0e776ac4e2ada6b0fbbb81363e&profile_id=113");
							break;

							case "work_page":
								myPlayer.src("https://player.vimeo.com/external/139889786.hd.mp4?s=91a9df0c1f9574740a422a5f253fa81768da039e&profile_id=119");
								// myPlayer.src("https://player.vimeo.com/external/139889786.hd.mp4?s=d9fe82039d4d8929cc0eeb62741a8bed&profile_id=113");
							break;

							// case "page_404":
							// 	myPlayer.src("https://player.vimeo.com/external/145886748.hd.mp4?s=292e3a5fb013706f99d5b94470ac19c92af3c199&profile_id=113");
							// break;

							default:
						}


					});

				}

			});

		}

	} else {

		if(document.getElementById('video-overlay')) {

			Modernizr.on('videoautoplay', function(result){

				if(!result) {

					autoPlay = true;

					videojs("header-video-player").ready(function(){
						var myPlayer = this;
						myPlayer.pause();

						var theHeader = document.getElementsByTagName('header');
						var headerID = theHeader[0].getAttribute('ID');
						// jQuery('#header-play').hide();
						jQuery('.header-text').hide();

					switch (headerID) {
						//work-page
						case "page_barclays_integrity":
							myPlayer.src("https://player.vimeo.com/external/141174440.hd.mp4?s=4f32dd0a8cda06b1dfa13e74d2fc5abf&profile_id=113");
							//myPlayer.src("https://player.vimeo.com/external/140771096.hd.mp4?s=18276ebc9ead0e5b936f685afac90314&profile_id=113");
						break;

						case "page_barclays_values":
							myPlayer.src("https://player.vimeo.com/external/139330733.hd.mp4?s=cd31cd725d1122faa95cf8242d677c3e&profile_id=113");
							// myPlayer.src("https://player.vimeo.com/external/88791766.hd.mp4?s=01c82c0c307c791f78f402a0b264fbf0&profile_id=113");
						break;

						case "bp-fll":
							myPlayer.src("https://player.vimeo.com/external/140771096.hd.mp4?s=18276ebc9ead0e5b936f685afac90314&profile_id=113");
						break;

						case "page_bp_fll_stories":
							myPlayer.src("https://player.vimeo.com/external/139330951.hd.mp4?s=3d1c83178ba678c46e7f01baebb21bff&profile_id=113");
							//myPlayer.src("https://player.vimeo.com/external/141101947.hd.mp4?s=cd503eb677f03e6164bee57bccb92c1c&profile_id=113");
						break;

						case "page_discover_bp":
							myPlayer.src("https://player.vimeo.com/external/141529090.hd.mp4?s=9319fb63f3d31c680a7ccc8dea210503&profile_id=113");
							// myPlayer.src("https://player.vimeo.com/external/140771096.hd.mp4?s=18276ebc9ead0e5b936f685afac90314&profile_id=113");
						break;

						case "page_gfk":
							myPlayer.src("https://player.vimeo.com/external/140667746.hd.mp4?s=65dbf2593c9f3bed0c770c497eda1964&profile_id=113");
							//myPlayer.src("https://player.vimeo.com/external/109216250.hd.mp4?s=4554075b1bbddc5346e47acad348d420&profile_id=113");
						break;

						case "page_leadership":
							myPlayer.src("https://player.vimeo.com/external/164256445.hd.mp4?s=f141fb096147d76282bf00a36a29a1f83cd9a84c&profile_id=119");

						break;

						case "page_legacy":
							myPlayer.src("https://player.vimeo.com/external/66887877.hd.mp4?s=fdc4231994bcacbc95927f1ab19b489890fe327e&profile_id=113");
						break;

						case "page_reliace":
							myPlayer.src("https://player.vimeo.com/external/131908894.hd.mp4?s=644b8069e39833f3c9d1c401fe31b190&profile_id=113");
						break;

						case "page_sdnpa":
							myPlayer.src("https://player.vimeo.com/external/141048772.hd.mp4?s=9410c4302324a7d77893874178f3ec83&profile_id=113");
							// myPlayer.src("https://player.vimeo.com/external/89417008.hd.mp4?s=b970f0c992ca4f0299fe30801dd6fe08&profile_id=113");
						break;

						case "page_take_the_lead":
							myPlayer.src("https://player.vimeo.com/external/139331070.hd.mp4?s=b2d4b3506fa6f57cee7b8cf917f32298&profile_id=113");
							// myPlayer.src("https://player.vimeo.com/external/94658351.hd.mp4?s=4dd1fa0e776ac4e2ada6b0fbbb81363e&profile_id=113");
						break;

						case "work_page":
							myPlayer.src("https://player.vimeo.com/external/139889786.hd.mp4?s=91a9df0c1f9574740a422a5f253fa81768da039e&profile_id=119");
							// myPlayer.src("https://player.vimeo.com/external/139889786.hd.mp4?s=d9fe82039d4d8929cc0eeb62741a8bed&profile_id=113");
						break;

						// case "page_404":
						// 	myPlayer.src("https://player.vimeo.com/external/145886748.hd.mp4?s=292e3a5fb013706f99d5b94470ac19c92af3c199&profile_id=113");
						// break;

						default:
							// do nothing
					}

					});

				}
			});
		}

	}
});



/**
* IMAGE POP IN ON SCROLL FUNCTION
*
*/
var allModules = document.getElementsByClassName('module');

for (var i = 0; i < allModules.length; i++){
    var module = allModules[i];
    new Waypoint({
        element: module,
        handler: function(){
            this.element.classList.add('module--visible');
        },
        offset: '100%'
    });
}


/**
* CAROUSEL FUNCTION
*
*/
// Get all the carousel controls on the page and all the images on the page
//TODO: Add a way where the controls are created based on the number of images
//This might break centering
var carouselControls = document.getElementsByClassName('carousel-control');
// Loop through all the controls and add a click handler to all of them.
for (var iterator = 0; iterator < carouselControls.length; iterator++){
    var carouselControl = carouselControls[iterator];
    carouselControl.onclick = function (){
        //grab the ID from the carousel control
		var controlsHolder = this.parentNode;
		var imagesHolder = controlsHolder.previousElementSibling;
		var carouselImages = imagesHolder.children;
		var theseControls = controlsHolder.children;
        var imageToShow = this.getAttribute('ID').slice(-1);

        //Target the image with the matching ID and expand it while hiding all the others
        for(var iterator2 = 0; iterator2 < carouselImages.length; iterator2++){
            carouselImage = carouselImages[iterator2];
            carouselImage.style.height = 0;
			theseControls[iterator2].classList.remove("selected");
        }
        document.getElementById('carousel-image-' + imageToShow).style.height = '100%';
        this.classList.add('selected');
    }
}


/**
* HEADER VIDEO FUNCTION 2
*
*/
if(document.getElementById('header-video-player')){ // if has header video

	if (document.getElementById('header-play')){
		var headerPlayBtn = document.getElementById('header-play');
	}

    var myPlayer =  videojs('header-video-player'); // create video player

		if(headerPlayBtn){ // if video player
			// console.log(myPlayer.bufferedPercent());
			if((myPlayer.bufferedPercent()> 0.1)){
				myPlayer.removeClass('vjs-waiting');
				headerPlayBtn.classList.add('video-ready');
				myPlayer.play();
			} else {
				myPlayer.addClass('vjs-waiting');
			}
			myPlayer.on("progress", function() {
				// console.log(myPlayer.bufferedPercent());
				if((myPlayer.bufferedPercent()> 0.1)){
					myPlayer.removeClass('vjs-waiting');
					headerPlayBtn.classList.add('video-ready');
					myPlayer.play();
				} else {
					myPlayer.addClass('vjs-waiting');
				}
			}, false);

			// myPlayer.ready(function(){
			// 	document.getElementById('header-play').classList.add('video-ready');
			// }, true);
		}

		myPlayer.play();

		var theHeader = document.getElementsByTagName('header');
		//This assumes there is only one header element per page.
		var headerID = theHeader[0].getAttribute('ID');

		switch (headerID) {
			//work-page
			case "page_barclays_integrity":
				var clipVideoSrc = "https://player.vimeo.com/external/140671448.sd.mp4?s=4c8fa29917b77e5bf2cabc4ef37ff99c&profile_id=112";
				var fullVideoSrc = "https://player.vimeo.com/external/140771096.hd.mp4?s=18276ebc9ead0e5b936f685afac90314&profile_id=113";
			break;

			case "page_barclays_values":
				var clipVideoSrc = "https://player.vimeo.com/external/139330733.hd.mp4?s=cd31cd725d1122faa95cf8242d677c3e&profile_id=113";
				var fullVideoSrc = "https://player.vimeo.com/external/88791766.hd.mp4?s=01c82c0c307c791f78f402a0b264fbf0&profile_id=113";
			break;

			case "bp-fll":
				var clipVideoSrc = "https://player.vimeo.com/external/140671448.sd.mp4?s=4c8fa29917b77e5bf2cabc4ef37ff99c&profile_id=112";
				var fullVideoSrc = "https://player.vimeo.com/external/140771096.hd.mp4?s=18276ebc9ead0e5b936f685afac90314&profile_id=113";
			break;

			case "page_bp_fll_stories":
				var clipVideoSrc = "https://player.vimeo.com/external/139330951.hd.mp4?s=3d1c83178ba678c46e7f01baebb21bff&profile_id=113";
				var fullVideoSrc = "https://player.vimeo.com/external/141101947.hd.mp4?s=cd503eb677f03e6164bee57bccb92c1c&profile_id=113";
			break;

			case "page_discover_bp":
				var clipVideoSrc = "https://player.vimeo.com/external/140671448.sd.mp4?s=4c8fa29917b77e5bf2cabc4ef37ff99c&profile_id=112";
				var fullVideoSrc = "https://player.vimeo.com/external/140771096.hd.mp4?s=18276ebc9ead0e5b936f685afac90314&profile_id=113";
			break;

			case "page_gfk":
				var clipVideoSrc = "https://player.vimeo.com/external/140667746.hd.mp4?s=65dbf2593c9f3bed0c770c497eda1964&profile_id=113";
				var fullVideoSrc = "https://player.vimeo.com/external/109216250.hd.mp4?s=4554075b1bbddc5346e47acad348d420&profile_id=113";
			break;

			case "page_leadership":
				var clipVideoSrc = "https://player.vimeo.com/external/164256445.hd.mp4?s=f141fb096147d76282bf00a36a29a1f83cd9a84c&profile_id=119";
				var fullVideoSrc = "https://player.vimeo.com/external/129132162.hd.mp4?s=b321063322e2949a1a5fd2ff900f21663cd265f4&profile_id=113";
			break;

			case "page_legacy":
				var clipVideoSrc = "https://player.vimeo.com/external/140664772.hd.mp4?s=916c756982174f097892598f2bf7d363&profile_id=113";
				var fullVideoSrc = "https://player.vimeo.com/external/66887877.hd.mp4?s=fdc4231994bcacbc95927f1ab19b489890fe327e&profile_id=113";
			break;

			case "page_reliace":
				var clipVideoSrc = "https://player.vimeo.com/external/139331071.hd.mp4?s=9d1090404ff15a8fba76c4e4c46c2a5f&profile_id=113";
				var fullVideoSrc = "https://player.vimeo.com/external/131908894.hd.mp4?s=644b8069e39833f3c9d1c401fe31b190&profile_id=113";
			break;

			case "page_sdnpa":
				var clipVideoSrc = "https://player.vimeo.com/external/141048772.hd.mp4?s=9410c4302324a7d77893874178f3ec83&profile_id=113";
				var fullVideoSrc = "https://player.vimeo.com/external/89417008.hd.mp4?s=b970f0c992ca4f0299fe30801dd6fe08&profile_id=113";
			break;

			case "page_take_the_lead":
				var clipVideoSrc = "https://player.vimeo.com/external/139331070.hd.mp4?s=b2d4b3506fa6f57cee7b8cf917f32298&profile_id=113";
				var fullVideoSrc = "https://player.vimeo.com/external/94658351.hd.mp4?s=4dd1fa0e776ac4e2ada6b0fbbb81363e&profile_id=113";
			break;

			case "work_page":
				var clipVideoSrc = "https://player.vimeo.com/external/139889786.hd.mp4?s=91a9df0c1f9574740a422a5f253fa81768da039e&profile_id=119";
				var fullVideoSrc = "https://player.vimeo.com/external/139889786.hd.mp4?s=d9fe82039d4d8929cc0eeb62741a8bed&profile_id=113";
			break;

			default:
				// do nothing
		}

		Modernizr.on('touchevents', function(result){
			if(result === false){
				var videoWaypoint = new Waypoint({
				  element: document.getElementById('header-video-player'),
				  handler: function(direction) {
					if(direction === 'down'){
						myPlayer.pause();
					} else if(direction === 'up'){
						myPlayer.play();
					}

				  },
				  offset: function() {
					return -this.element.clientHeight
				  }
				});
			}
		});


	if(document.getElementById('overlay-video')){
	    var videoOverlay = videojs('overlay-video');

		Modernizr.on('videoautoplay', function(result){
			if(!result) {
				if(document.getElementById('header-play')){
					var videoPlayButton = document.getElementById('header-play');
					videoPlayButton.addEventListener('click', function(){
						// //console.log("I am doing this, i shouldn't be");
						videoOverlay.play();
						videoOverlay.requestFullscreen();
					});
				}

			} else {
				videoOverlay.requestFullscreen(function(){
					return false;
				});
			}
		});



	    document.getElementById('video-overlay-close').addEventListener('click', function(){
	        document.getElementById('video-overlay').style.display = "none";
	        videoOverlay.pause();

			if(jQuery('.container--header')){
				jQuery('.container--header').show();
			}

			Modernizr.on('videoautoplay', function(result){
				if(result === true){
					// //console.log("I am doing this, i shouldn't be");
					myPlayer.play();
				}
			});


			document.getElementById('tilt--logo').style.display = 'block';
	        document.getElementById('menuButton').style.display = 'block';

			if(document.getElementById('wordButton')){
				if(document.getElementById('workButton').style.display != null) {
				   document.getElementById('workButton').style.display = 'block';
				}
			}



	    });
	}

	if(document.getElementById('header-play')){
	    document.getElementById('header-play').addEventListener('click', function(){
	            myPlayer.ready(function(){
	                if(videoOverlay.currentSrc() === "https://player.vimeo.com/external/139889786.hd.mp4?s=91a9df0c1f9574740a422a5f253fa81768da039e&profile_id=119"){
	                    videoOverlay.src(fullVideoSrc);
	                }
					// //console.log("I am doing this, i shouldn't be");
	                videoOverlay.play();
	                myPlayer.pause();
	                document.getElementById('video-overlay').style.display = 'block';

					document.getElementById('tilt--logo').style.display = 'none';
					document.getElementById('menuButton').style.display = 'none';


					if(document.getElementById('wordButton')){
						if(document.getElementById('workButton').style.display != null) {
						   document.getElementById('workButton').style.display = 'block';
						}
					}
	            });
	    });
	}
}

if(document.getElementsByClassName('page-video')){
	var pageVideos = document.getElementsByClassName('page-video');

	for(var iterator8 = 0; iterator8 < pageVideos.length; iterator8 ++){
		videojs(pageVideos[iterator8]);
	}
}



/**
* MENU FUNCTIONS
*
*/

menuButton.onclick = function(){
	jQuery('#menuButton').fadeOut(500,function(){
		jQuery('#closeButton').fadeIn(500);
	});


    pageMenu.style.visibility = 'inherit';
    pageMenu.style.opacity = 0.98;
    pageMenu.style.transform = "scale(1, 1)";
	if(document.getElementById('footer')){
	    document.getElementById('footer').style.display = 'none';
	}

    if(document.getElementById('header-video-player')){
        myPlayer.pause();
    }

    if(document.getElementById('workButton')){
	    jQuery('#workButton').fadeOut();
    }

}

closeButton.onclick = function(){
	jQuery('#closeButton').fadeOut(500,function(){
		jQuery('#menuButton').fadeIn(500);

		 if(document.getElementById('workButton')){
	    	jQuery('#workButton').fadeIn(500);
		 }

	});

	 pageMenu.style.opacity = '0'
        setTimeout(function(){
            pageMenu.style.visibility = 'hidden';
        },300);
        pageMenu.style.transform = "scale(1.5, 1.5)";
        document.getElementById('footer').style.display = 'block';

        if(document.getElementById('header-video-player')){
            myPlayer.play();
        }
}


/**
* STAFF PAGE FUNCTIONS
*
*/

if(document.getElementById('staff-member')){

	var lookUpStaffMember = function(staffMember){
	    return staffData[staffMember];
	}

	var fadeInStaffInfo = function(staffObject){
	    document.getElementById('staff-member__info').style.opacity = '1';
	    document.getElementById('staff-member__wrapper').style.opacity = '1';
	    document.getElementById('staff-member__wrapper').style.backgroundImage = 'url(' + window.directoryURI + '/' + staffObject.image + ')';
	    document.getElementById('staff-member__close').style.opacity = '1';


	}

	var populateAndSizeStaffInfo = function(staffBox, staffObject){
	    staffBox.style.height = '100vh';
	    staffBox.style.width = '100%';
	    staffBox.style.left = '0px';
	    staffBox.style.top = '0px';
	    // staffBox.style.transform = 'translate(' + left + ', ' + top + ')';
	    document.getElementById('staff-member__name').innerHTML = staffObject.name;
	    document.getElementById('staff-member__position').innerHTML = staffObject.position;
	    document.getElementById('staff-member__department').innerHTML = staffObject.department;
	    document.getElementById('staff-member__about').innerHTML = staffObject.about;
	    document.getElementById('staff-member__did-you-know').innerHTML = '<strong class="highlight">Did you know?</strong> ' + staffObject["did-you-know"];
	}

	var hideStaffBoxAndAllowScrolling = function(staffBox){
	    staffBox.style.display = 'none';
	    // document.body.classList.remove('stop-scrolling');
	}

	var resetStaffBox = function(staffBox, startingHeight, startingWidth, leftPosition, topPosition){
	    staffBox.style.height = startingHeight;
	    staffBox.style.width = startingWidth;
	    staffBox.style.left = leftPosition;
	    staffBox.style.top = topPosition;
	}

	var getScrollPosition = function(){
	    var top = (window.pageYOffset || doc.scrollTop)  - (doc.clientTop || 0);
	    return top;
	}

	var staff = document.getElementsByClassName('module--staff');

    for (var iterator3 = 0; iterator3 < staff.length; iterator3++){
        staffMember = staff[iterator3];

		staffMember.onclick = function (){
			var rect = this.getBoundingClientRect();
			var staffMemberInfo = this.getAttribute('ID');
			this.classList.add('module--selected');
		}

		var staffMemberID = 'Staff-' + (iterator3 + 1);
		var staffVideoSrc;
		var staffFullScreenVid;
		var videoIWant;

        //Some closure magic to get this working. - MT
		//I came back to this comment...It was not helpful... - MT

		// check screen size
		var width = $( window ).width();

		if (width > 1024) {

	        (function(){
	            staffMember.addEventListener('mouseenter', function(event){
					var that = this;
					var thisStaffID = that.id;
					switch (thisStaffID) {
						//work-page
						case "staff-1":
							staffVideoSrc = "https://player.vimeo.com/external/140403279.sd.mp4?s=5c6b2cbfb2ef0f48e4d4c2d7a2c3656a&profile_id=112";
						break;

						case "staff-2":
							staffVideoSrc = "https://player.vimeo.com/external/140403284.sd.mp4?s=09bc9929175c10c46ec8fb7dc62a119b&profile_id=112";
						break;

						case "staff-3":
							staffVideoSrc = "https://player.vimeo.com/external/140403285.sd.mp4?s=1c80332d3883f4581f7a584c83826da7&profile_id=112";
						break;

						case "staff-4":
							staffVideoSrc = "https://player.vimeo.com/external/140403277.sd.mp4?s=29c1365532165fa7c8d7138eec8e163c&profile_id=112";
						break;

						case "staff-5":
							staffVideoSrc = "https://player.vimeo.com/external/140403273.sd.mp4?s=91b80135b2f7602578df0f11bd9b8e18&profile_id=112";
						break;

						case "staff-6":
							staffVideoSrc = "https://player.vimeo.com/external/140403276.sd.mp4?s=ea179e3f47a824b0c5f4868ff97393aa&profile_id=112";
						break;

						case "staff-7":
							staffVideoSrc = "https://player.vimeo.com/external/140403270.sd.mp4?s=0206047835fecf68feef275f56b33cef&profile_id=112";
						break;

						case "staff-8":
							staffVideoSrc = "https://player.vimeo.com/external/140403275.sd.mp4?s=1eb2bc24302d7fc2a8ab2993feab5586&profile_id=112";
						break;

						case "staff-9":
							staffVideoSrc = "https://player.vimeo.com/external/140403281.sd.mp4?s=35498172b93da64e3aa8d15a894cafa6&profile_id=112";
						break;

						case "staff-10":
							staffVideoSrc = "https://player.vimeo.com/external/140403288.sd.mp4?s=eb9ce38ce409022ac660aac48376a250&profile_id=112";
						break;

						case "staff-11":
							staffVideoSrc = "https://player.vimeo.com/external/140403296.sd.mp4?s=f1f19de8ff8f3870ac0fde5132f4fad9&profile_id=112";
						break;

						case "staff-12":
							staffVideoSrc = "https://player.vimeo.com/external/140403294.sd.mp4?s=b27782cf9097d798e9956d3e4285a205&profile_id=112";
						break;

						case "staff-13":
							staffVideoSrc = "https://player.vimeo.com/external/140403278.sd.mp4?s=87cf89bfeb39d10c65e49d88de1b1cbd&profile_id=112";
						break;

						case "staff-14":
							staffVideoSrc = "https://player.vimeo.com/external/140403289.sd.mp4?s=f04cff5c4ee7456ece6f61632d6fdef1&profile_id=112";
						break;

						case "staff-15":
							staffVideoSrc = "https://player.vimeo.com/external/142259886.hd.mp4?s=fa9b8c7acd96993ed4a8eec0475f786e&profile_id=113";
						break;

						case "staff-16":
							staffVideoSrc = "https://player.vimeo.com/external/140403290.sd.mp4?s=0e1e564e06cc5b284c190a8b0d20791e&profile_id=112";
						break;

						case "staff-17":
							staffVideoSrc = "https://player.vimeo.com/external/140403272.sd.mp4?s=3bcc352281b93bbd8fc66df067156493&profile_id=112";
						break;

						case "staff-18":
							staffVideoSrc = "https://player.vimeo.com/external/140403274.sd.mp4?s=f7ea813281b01caf596bfb5c00adca74&profile_id=112";
						break;

						case "staff-19":
							staffVideoSrc = "https://player.vimeo.com/external/140403271.sd.mp4?s=541308d08653d1fb132ab55203ce4e82&profile_id=112";
						break;

						case "staff-20":
							staffVideoSrc = "https://player.vimeo.com/external/140403295.sd.mp4?s=b1daa0f944cda8009b47296f821189cd&profile_id=112";
						break;

						case "staff-21":
							staffVideoSrc = "https://player.vimeo.com/external/140403286.sd.mp4?s=6af207b741e9c1b261384d91132861c1&profile_id=112";
						break;

						default:
							// do nothing
					}
						// console.log('Mouse has entered');
						videoFunction = setTimeout(function(){
							if(!that.children[1]){
								if(isChrome){
									document.getElementById(thisStaffID).innerHTML += '<div class="ratio"><video poster="' + window.directoryURI + '/images/staff/about_' + thisStaffID + '.jpg" muted="true"><source src="' + staffVideoSrc + '" type="video/mp4"></video></div>';
								} else{
									document.getElementById(thisStaffID).innerHTML += '<div class="ratio"><video muted="true"><source src="' + staffVideoSrc + '" type="video/mp4"></video></div>';
								}
							}
								var ratio2 = that.children[1];
								var video2 = ratio2.children[0];
								videoIWant = video2;
		                    	videoIWant.play();
								videoIWant.addEventListener('ended', function(){
									this.currentTime = 0;
								});
							}, 100);

	            });

	            staffMember.addEventListener('mouseleave', function(event, video){
						// console.log("Mouse has exited");
						clearTimeout(videoFunction);
						// console.log(videoIWant);
						//videoIWant.pause();
	            });
	        })();
		}

        staffBoxClose = document.getElementById('staff-member__close');

        staffMember.onclick = function (){

			// staff members
            staffMember = this.id;

			// check screen size
			var width = $( window ).width();

			if (width > 1024) {
				staffFullScreenVid = this.dataset.fullvideo;
	            staffObject = lookUpStaffMember(staffMember);
	            staffBox = document.getElementById('staff-member');
	            staffBox.style.display = 'block';
	            rect = this.getBoundingClientRect();
	            startingHeight = window.getComputedStyle(this).height;
	            startingWidth = window.getComputedStyle(this).width;
	            leftPosition = (rect['left'] + 'px');
	            topPosition = (rect['top'] + 'px');
	            // document.body.classList.add('stop-scrolling');
	            scrollPosition = getScrollPosition();


	            staffBox.style.position = "fixed";
	            staffBox.style.transition = "all 0s ease";
	            staffBox.style.left = leftPosition;
	            staffBox.style.top = topPosition;
	            staffBox.style.height = startingHeight;
	            staffBox.style.width = startingWidth;
	            document.body.appendChild(staffBox);
	            staffBox.appendChild(staffBoxClose);
	            staffBox.style.backgroundColor = '#ff4c74';
	            staffBox.style.zIndex = '6';
				document.getElementById('blahblahblah').innerHTML = '<div class="module module--video module--visible module--no-zoom" style="position: absolute; z-index: 6; width: 100%; height: 100%;"><div class="ratio"><video autoplay muted="true"><source src="' + staffFullScreenVid + '" type="video/mp4"></video></div></div>';

	            setTimeout(function(){
					// console.log('Hello');
	                staffBox.style.transition = "all 0.5s ease";



	                populateAndSizeStaffInfo(staffBox, staffObject);
	            }, 500);

	            setTimeout(function(){
	                fadeInStaffInfo(staffObject);
	            }, 1050);

			} else { // if screen is mobile

			}

	    }

		staffBoxClose.onclick = function(){
			document.getElementById('staff-member__wrapper').style.opacity = '0';
			document.getElementById('staff-member__info').style.opacity = '0';
			document.getElementById('staff-member__close').style.opacity = '0';
			window.scrollTo(0, scrollPosition);

			setTimeout(function(){
				resetStaffBox(staffBox, startingHeight, startingWidth, leftPosition, topPosition);
			}, 500);

			setTimeout(function(){
				hideStaffBoxAndAllowScrolling(staffBox)
				document.getElementById('blahblahblah').innerHTML = '';
			}, 1050);
		}
    }

}


/**
* WORK PAGE FUNCTIONS
*
*/
jQuery(document).ready(function(){

	if(document.getElementById('work_all')){

		if(window.location.hash) {

			scrollPoint = window.location.hash;

			$('html, body').animate({scrollTop: ($(scrollPoint).offset().top - 66) }, 'slow');

		}

	}

});


if(document.getElementById('services--list')){


    [].map.call(document.querySelectorAll('.work-item-title'), function(el){
        el.onclick = function(){
                itemsToShow = el.id;
                itemsToScrollTo = itemsToShow.slice(5);
				itemsToScrollTo = "#" + itemsToScrollTo;
				$('html, body').animate({scrollTop: ($(itemsToScrollTo).offset().top - 67) }, 'slow');
                // [].map.call(document.querySelectorAll('.work-container'), function(el3){
                //     el3.style.opacity = 0;
                //     el3.style.display = 'none';
                // });

                // if(itemsToShow === 'all'){
				//
                //     [].map.call(document.querySelectorAll('.work-container'), function(el3){
                //         el3.style.opacity = 1;
                //         el3.style.display = 'block';
                //     });
				//
                //     $('html, body').animate({scrollTop: $('#scroll_point').offset().top }, 'slow');
				//
				//
                // } //else {

                // 	$('html, body').animate({scrollTop: $('#scroll_point').offset().top }, 'slow');
				//
                //     document.getElementById(itemsToShow).style.opacity = 1;
                //     document.getElementById(itemsToShow).style.display = 'block';
				//
                //     [].map.call(document.querySelectorAll('.module'), function(el2){
                //         el2.classList.remove('module--visible');
                //         // console.log(el2);
                //     });
                //     [].map.call(document.querySelectorAll('.module'), function(el4){
                //         setTimeout(function(){
                //             el4.classList.add('module--visible');
                //         }, 500);
                //     });
                // }
        }
    });
}

function resetClass() {
	document.getElementById('work_all').className = 'work-item-title';
	document.getElementById('work_film').className = 'work-item-title';
	document.getElementById('work_interactive').className = 'work-item-title';
	document.getElementById('work_motion').className = 'work-item-title';
	document.getElementById('work_web').className = 'work-item-title';

}



/**
* CONTACT FORM FUNCTIONS
*
*/

var controlContactBorder = function(inputClicked, borderToChange){
	inputsParentPosition = inputsParent.getBoundingClientRect();
	inputPosition = inputClicked.getBoundingClientRect();
	newFunkyBorderHeight = inputPosition.top - inputsParentPosition.top + inputPosition.height;
	funkyBorder = 'funky-border-' + borderToChange;
	funkyBorderToChange = document.getElementById(funkyBorder);
	funkyBorderToChange.style.height = newFunkyBorderHeight + "px";
}

var handleBorderTiming = function(inputsParent){
	var borderID = inputsParent.id.slice(-1);
	var borderToSelect = "funky-border-" + borderID;
	var borderToAffect = document.getElementById(borderToSelect);

	if(inputsParent.classList.contains('inUse')){
		borderToAffect.style.transitionDelay = '0s';
	} else {
		for(var iterator7 = 0; iterator7 < formHolders.length; iterator7++){
			formHolders[iterator7].classList.remove('inUse');
			formBorders[iterator7].style.transitionDelay = '0s';
		}
		inputsParent.classList.add('inUse');
		borderToAffect.style.transitionDelay = '0.2s';
	}
}

var completeBorder = function(inputsParent){
	if(inputsParent.id === "form-holder-1"){
			handleBorderTiming(inputsParent);
		for(var iterator6 = 0; iterator6 < formHolders.length; iterator6++){
			formHolders[0].parentNode.style.borderTop = '1px solid #5e5e5e';
			setTimeout(function(){
				formHolders[1].parentNode.style.borderTop = 'none';
				formHolders[2].parentNode.style.borderTop = 'none';
				formHolders[0].parentNode.classList.remove('contact-form__fieldset--completed');
				formHolders[1].parentNode.classList.remove('contact-form__fieldset--completed');
				formHolders[2].parentNode.classList.remove('contact-form__fieldset--completed');
			}, 200);
			formBorders[iterator6].style.height = '0px';
		}
	} else if(inputsParent.id === "form-holder-2"){
		handleBorderTiming(inputsParent);
		document.getElementById('funky-border-1').style.height = '100%';
		document.getElementById('funky-border-3').style.height = '0%';
		setTimeout(function(){
			formHolders[0].parentNode.style.borderTop = '1px solid #5e5e5e';
			formHolders[1].parentNode.style.borderTop = '1px solid #5e5e5e';
			formHolders[2].parentNode.style.borderTop = 'none';
			formHolders[0].parentNode.classList.add('contact-form__fieldset--completed');
			formHolders[1].parentNode.classList.remove('contact-form__fieldset--completed');
			formHolders[2].parentNode.classList.remove('contact-form__fieldset--completed');
		}, 200);

	} else if(inputsParent.id === "form-holder-3"){
		handleBorderTiming(inputsParent);
		document.getElementById('funky-border-1').style.height = '100%';
		document.getElementById('funky-border-2').style.height = '100%';
		setTimeout(function(){
			formHolders[0].parentNode.style.borderTop = '1px solid #5e5e5e';
			formHolders[1].parentNode.style.borderTop = '1px solid #5e5e5e';
			formHolders[2].parentNode.style.borderTop = '1px solid #5e5e5e';
			formHolders[0].parentNode.classList.add('contact-form__fieldset--completed');
			formHolders[1].parentNode.classList.add('contact-form__fieldset--completed');
		}, 200);

	}
}

if(document.getElementById('contact-form')){

	var worksheetButtonOpen = document.getElementById('form_open');
	var worksheetButtonClose = document.getElementById('form_close');
	var inputs = document.getElementsByClassName('contact-form__input');
		formHolders = document.getElementsByClassName('form-info-holder');
		formBorders = document.getElementsByClassName('funky-border-shizz');

	for (var iterator5 = 0; iterator5 < inputs.length; iterator5++){
		var inputIWant = inputs[iterator5];
		(function(){
			inputIWant.addEventListener('blur', function(){
				if(this.value !== ""){
					var inputID = this.id;
					var inputLabel = document.getElementById(inputID).previousSibling;
					inputLabel.classList.add('contact-form__label--completed');
				} else if ((this.value === "")){
					var inputID = this.id;
					var inputLabel = document.getElementById(inputID).previousSibling;
					inputLabel.classList.remove('contact-form__label--completed');
				}
			});

			inputIWant.addEventListener('focus', function(event){
				inputsParent = this.parentNode;
				switch (inputsParent.id) {
					case "form-holder-1":
						borderToChange = 1;
					break;

					case "form-holder-2":
						borderToChange = 2;
					break;

					case "form-holder-3":
						borderToChange = 3;
					break;

					default:

				}
				completeBorder(inputsParent);
				controlContactBorder(this, borderToChange);
			});
		})();
	}

	worksheetButtonOpen.addEventListener('click', function(){
		worksheetButtonClose.style.display = 'inline-block';
		this.style.display = 'none';
	});

	worksheetButtonClose.addEventListener('click', function(){
		worksheetButtonOpen.style.display = 'inline-block';
		this.style.display = 'none';
	});

}


/**
* VIDEO FUNCTIONS 3
*
*/
jQuery(document).ready(function(){

	jQuery('.vjs-loading-spinner').html('<div class="circle-container"><div class="circle circle--1"></div><div class="circle circle--2"></div></div>');


	if(document.getElementById('services--list')){

		var stickySidebar = jQuery('#services--list').offset().top;

		jQuery(window).scroll(function() {
		    if ($(window).scrollTop() > stickySidebar) {
		        jQuery('#services--list').addClass('sticky');
		    }
		    else {
		        jQuery('#services--list').removeClass('sticky');
		    }
		});
	}

	if($('.module').length && mobile) {
		$(window).scroll(function(){
			$.each($('.module'), function(index, el){
				if(isElementInViewport(el)) {
					setTimeout(function(){
						$(el).addClass('hover');
					}, 500)
				} else {
					$(el).removeClass('hover');
				}
			})
		})
	}

});



/**
* FOOTER FUNCTIONS
*
*/

if(document.getElementById('footer')){
	var footerImageToDisplay = Math.floor((Math.random() * 8 + 1));
	var footer = document.getElementById('footer')
	var width = $(window).width(), height = $(window).height();

	if(width <= 400) {
		footer.style.backgroundImage = "url('" + window.directoryURI + "/images/footer/small_square/footer_" + footerImageToDisplay +".jpg')";
	} else if(width <= 800) {
		footer.style.backgroundImage = "url('" + window.directoryURI + "/images/footer/small_1024/footer_" + footerImageToDisplay +".jpg')";

	} else {
		footer.style.backgroundImage = "url('" + window.directoryURI + "/images/footer/footer_" + footerImageToDisplay +".jpg')";
	}
}

var footerImageToDisplay = Math.floor((Math.random() * 8 + 1));
var footer = document.getElementById('footer');
var width = $(window).width(), height = $(window).height();



function isElementInViewport (el) {

    //special bonus for those using jQuery
    if (typeof jQuery === "function" && el instanceof jQuery) {
        el = el[0];
    }

    var rect = el.getBoundingClientRect();

    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && /*or $(window).height() */
        rect.right <= (window.innerWidth || document.documentElement.clientWidth) /*or $(window).width() */
    );
}