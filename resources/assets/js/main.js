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
// Modernizr.on('touchevents', function(result) {
//     if (result === true) {
//         jQuery('.module a').on("click", function(e) {
//             'use strict'; //satisfy code inspectors
//             var link = jQuery(this); //preselect the link
//             if (link.hasClass('hover')) {
//                 return true;
//             } else {
//                 link.addClass('hover');
//                 jQuery('.module a').not(this).removeClass('hover');
//                 e.preventDefault();
//                 return false; //extra, and to make sure the function has consistent return points
//             }
//         });
//     }
// });

 $('.button--disabled').on("click", function(e) {
    e.preventDefault();
});

 jQuery(function($) {
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

        if (document.getElementById('video-overlay')) {

            Modernizr.on('videoautoplay', function(result) {
                // console.log('Video Autoplay result: ' + result)

                if (!result) {

                    videojs("header-video-player").ready(function() {
                        var myPlayer = this;
                        myPlayer.pause();

                        if (document.getElementsByTagName('header')) {
                            var theHeader = document.getElementsByTagName('header');
                            var headerID = theHeader[0].getAttribute('ID');
                            // jQuery('#header-play').hide();
                            jQuery('.header-text').hide();
                        }


                        if (document.getElementById('header-play')) {
                            var playButton = document.getElementById('header-play');

                            playButton.addEventListener('click', function() {
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
                                myPlayer.src("https://player.vimeo.com/external/141548149.hd.mp4?s=c38947ea65f3bad06d05e9881fe92ead&profile_id=113");
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

    if (document.getElementById('video-overlay')) {

        Modernizr.on('videoautoplay', function(result) {

            if (!result) {

                autoPlay = true;

                videojs("header-video-player").ready(function() {
                    var myPlayer = this;
                    myPlayer.pause();

                    var theHeader = document.getElementsByTagName('header');
                    var headerID = theHeader[0].getAttribute('ID');

                        // jQuery('#header-play').hide();
                        // jQuery('.header-text').hide();

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
                                myPlayer.src("https://player.vimeo.com/external/141548149.hd.mp4?s=c38947ea65f3bad06d05e9881fe92ead&profile_id=113");
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

 for (var i = 0; i < allModules.length; i++) {
    var module = allModules[i];
    new Waypoint({
        element: module,
        handler: function() {
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

$('.carousel-control').click(function(){

    var eq = $(this).index();
    var $images = $(this).closest('.carousel').find('.carousel-image');
    var $next = $(this).closest('.carousel').find('.carousel-image').eq(eq);

    $images.css({
        height: 0
    })

    $next.css({
        height: '100%'
    })

    $(this).addClass('selected').siblings().removeClass('selected');

})

// var carouselControls = document.getElementsByClassName('carousel-control');
// // Loop through all the controls and add a click handler to all of them.
// for (var iterator = 0; iterator < carouselControls.length; iterator++) {
//     var carouselControl = carouselControls[iterator];
//     carouselControl.onclick = function() {
//         //grab the ID from the carousel control
//         var controlsHolder = this.parentNode;
//         var imagesHolder = controlsHolder.previousElementSibling;
//         var carouselImages = imagesHolder.children;
//         var theseControls = controlsHolder.children;
//         var imageToShow = this.getAttribute('ID').slice(-1);

//         //Target the image with the matching ID and expand it while hiding all the others
//         for (var iterator2 = 0; iterator2 < carouselImages.length; iterator2++) {
//             carouselImage = carouselImages[iterator2];
//             carouselImage.style.height = 0;
//             theseControls[iterator2].classList.remove("selected");
//         }
//         document.getElementById('carousel-image-' + imageToShow).style.height = '100%';
//         this.classList.add('selected');
//     }
// }


/**
 * HEADER VIDEO FUNCTION 2
 *
 */
if (document.getElementById('header-video-player')) { // if has header video

    if (document.getElementById('header-play')) {
        var headerPlayBtn = document.getElementById('header-play');
    }

    var myPlayer = videojs('header-video-player'); // create video player

    if (headerPlayBtn) { // if video player
        // console.log(myPlayer.bufferedPercent());
        if ((myPlayer.bufferedPercent() > 0.1)) {
            myPlayer.removeClass('vjs-waiting');
            headerPlayBtn.classList.add('video-ready');
            myPlayer.play();
        } else {
            myPlayer.addClass('vjs-waiting');
        }
        myPlayer.on("progress", function() {
            // console.log(myPlayer.bufferedPercent());
            if ((myPlayer.bufferedPercent() > 0.1)) {
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

    var $player = $('#header-video-player');

    var clipVideoSrc = $player.find('video source').attr('src');
    var fullVideoSrc = $player.find('video').data('video');

    if(!fullVideoSrc) {

        switch (headerID) {
            //work-page
            case "page_barclays_integrity":
            clipVideoSrc = "https://player.vimeo.com/external/140671448.sd.mp4?s=4c8fa29917b77e5bf2cabc4ef37ff99c&profile_id=112";
            fullVideoSrc = "https://player.vimeo.com/external/140771096.hd.mp4?s=18276ebc9ead0e5b936f685afac90314&profile_id=113";
            break;

            case "page_barclays_values":
            clipVideoSrc = "https://player.vimeo.com/external/139330733.hd.mp4?s=cd31cd725d1122faa95cf8242d677c3e&profile_id=113";
            fullVideoSrc = "https://player.vimeo.com/external/88791766.hd.mp4?s=01c82c0c307c791f78f402a0b264fbf0&profile_id=113";
            break;

            case "bp-fll":
            clipVideoSrc = "https://player.vimeo.com/external/140671448.sd.mp4?s=4c8fa29917b77e5bf2cabc4ef37ff99c&profile_id=112";
            fullVideoSrc = "https://player.vimeo.com/external/140771096.hd.mp4?s=18276ebc9ead0e5b936f685afac90314&profile_id=113";
            break;

            case "page_bp_fll_stories":
            clipVideoSrc = "https://player.vimeo.com/external/139330951.hd.mp4?s=3d1c83178ba678c46e7f01baebb21bff&profile_id=113";
            fullVideoSrc = "https://player.vimeo.com/external/141101947.hd.mp4?s=cd503eb677f03e6164bee57bccb92c1c&profile_id=113";
            break;

            case "page_discover_bp":
            clipVideoSrc = "https://player.vimeo.com/external/140671448.sd.mp4?s=4c8fa29917b77e5bf2cabc4ef37ff99c&profile_id=112";
            fullVideoSrc = "https://player.vimeo.com/external/140771096.hd.mp4?s=18276ebc9ead0e5b936f685afac90314&profile_id=113";
            break;

            case "page_gfk":
            clipVideoSrc = "https://player.vimeo.com/external/140667746.hd.mp4?s=65dbf2593c9f3bed0c770c497eda1964&profile_id=113";
            fullVideoSrc = "https://player.vimeo.com/external/109216250.hd.mp4?s=4554075b1bbddc5346e47acad348d420&profile_id=113";
            break;

            case "page_leadership":
            clipVideoSrc = "https://player.vimeo.com/external/164256445.hd.mp4?s=f141fb096147d76282bf00a36a29a1f83cd9a84c&profile_id=119";
            fullVideoSrc = "https://player.vimeo.com/external/129132162.hd.mp4?s=b321063322e2949a1a5fd2ff900f21663cd265f4&profile_id=113";
            break;

            case "page_legacy":
            clipVideoSrc = "https://player.vimeo.com/external/140664772.hd.mp4?s=916c756982174f097892598f2bf7d363&profile_id=113";
            fullVideoSrc = "https://player.vimeo.com/external/66887877.hd.mp4?s=fdc4231994bcacbc95927f1ab19b489890fe327e&profile_id=113";
            break;

            case "page_reliace":
            clipVideoSrc = "https://player.vimeo.com/external/139331071.hd.mp4?s=9d1090404ff15a8fba76c4e4c46c2a5f&profile_id=113";
            fullVideoSrc = "https://player.vimeo.com/external/131908894.hd.mp4?s=644b8069e39833f3c9d1c401fe31b190&profile_id=113";
            break;

            case "page_sdnpa":
            clipVideoSrc = "https://player.vimeo.com/external/141048772.hd.mp4?s=9410c4302324a7d77893874178f3ec83&profile_id=113";
            fullVideoSrc = "https://player.vimeo.com/external/89417008.hd.mp4?s=b970f0c992ca4f0299fe30801dd6fe08&profile_id=113";
            break;

            case "page_take_the_lead":
            clipVideoSrc = "https://player.vimeo.com/external/139331070.hd.mp4?s=b2d4b3506fa6f57cee7b8cf917f32298&profile_id=113";
            fullVideoSrc = "https://player.vimeo.com/external/94658351.hd.mp4?s=4dd1fa0e776ac4e2ada6b0fbbb81363e&profile_id=113";
            break;

            case "work_page":
            clipVideoSrc = "https://player.vimeo.com/external/141548149.hd.mp4?s=c38947ea65f3bad06d05e9881fe92ead&profile_id=113";
            fullVideoSrc = "https://player.vimeo.com/external/139889786.hd.mp4?s=91a9df0c1f9574740a422a5f253fa81768da039e&profile_id=175";
            break;

            case "page_caroline_lucas":
            clipVideoSrc = "https://player.vimeo.com/external/168753982.hd.mp4?s=3e9857a4d3db82f3084c9f10f2d3e0835d00f35e&profile_id=119";
            fullVideoSrc = "https://player.vimeo.com/external/157439321.hd.mp4?s=9e78630cd7076f4ed00fb4eb31f912f5ad72bdb9&profile_id=119";
            break;

            default:
                // do nothing
            }

        }

        Modernizr.on('touchevents', function(result) {
            if (result === false) {
                var videoWaypoint = new Waypoint({
                    element: document.getElementById('header-video-player'),
                    handler: function(direction) {
                        if (direction === 'down') {
                            myPlayer.pause();
                        } else if (direction === 'up') {
                            myPlayer.play();
                        }

                    },
                    offset: function() {
                        return -this.element.clientHeight
                    }
                });
            }
        });


        if (document.getElementById('overlay-video')) {
            var videoOverlay = videojs('overlay-video');

            Modernizr.on('videoautoplay', function(result) {
                if (!result) {
                    if (document.getElementById('header-play')) {
                        var videoPlayButton = document.getElementById('header-play');
                        videoPlayButton.addEventListener('click', function() {
                        // //console.log("I am doing this, i shouldn't be");
                        videoOverlay.play();
                        //videoOverlay.requestFullscreen();
                    });
                    }

<<<<<<< HEAD
                } else {
                    videoOverlay.requestFullscreen(function() {
                        return false;
                    });
                }
            });
=======
            } else {
                // videoOverlay.requestFullscreen(function() {
                //     return false;
                // });
            }
        });
>>>>>>> Staff-Page



            document.getElementById('video-overlay-close').addEventListener('click', function() {
                document.getElementById('video-overlay').style.display = "none";
                videoOverlay.pause();

                if (jQuery('.container--header')) {
                    jQuery('.container--header').show();
                }

                Modernizr.on('videoautoplay', function(result) {
                    if (result === true) {
                    // //console.log("I am doing this, i shouldn't be");
                    myPlayer.play();
                }
            });


                document.getElementById('tilt--logo').style.display = 'block';
                document.getElementById('menuButton').style.display = 'block';

                if (document.getElementById('wordButton')) {
                    if (document.getElementById('workButton').style.display != null) {
                        document.getElementById('workButton').style.display = 'block';
                    }
                }



            });
        }

        if (document.getElementById('header-play')) {

            document.getElementById('header-play').addEventListener('click', function() {
                myPlayer.ready(function() {
                // if (videoOverlay.currentSrc() === "https://player.vimeo.com/external/139889786.hd.mp4?s=91a9df0c1f9574740a422a5f253fa81768da039e&profile_id=175") {
                    videoOverlay.src(fullVideoSrc);
                // }
                // //console.log("I am doing this, i shouldn't be");
                videoOverlay.play();
                myPlayer.pause();
                document.getElementById('video-overlay').style.display = 'block';

                document.getElementById('tilt--logo').style.display = 'none';
                document.getElementById('menuButton').style.display = 'none';


                if (document.getElementById('wordButton')) {
                    if (document.getElementById('workButton').style.display != null) {
                        document.getElementById('workButton').style.display = 'block';
                    }
                }
            });
            });
        }
    }

    if (document.getElementsByClassName('page-video')) {
        var pageVideos = document.getElementsByClassName('page-video');

        for (var iterator8 = 0; iterator8 < pageVideos.length; iterator8++) {
            videojs(pageVideos[iterator8]);
        }
    }



/**
 * MENU FUNCTIONS
 *
 */

 menuButton.onclick = function() {
    jQuery('#menuButton').fadeOut(500, function() {
        jQuery('#closeButton').fadeIn(500);
    });


    pageMenu.style.visibility = 'inherit';
    pageMenu.style.opacity = 0.98;
    pageMenu.style.transform = "scale(1, 1)";
    if (document.getElementById('footer')) {
        document.getElementById('footer').style.display = 'none';
    }

    if (document.getElementById('header-video-player')) {
        myPlayer.pause();
    }

    if (document.getElementById('workButton')) {
        jQuery('#workButton').fadeOut();
    }

}

closeButton.onclick = function() {
    jQuery('#closeButton').fadeOut(500, function() {
        jQuery('#menuButton').fadeIn(500);

        if (document.getElementById('workButton')) {
            jQuery('#workButton').fadeIn(500);
        }

    });

    pageMenu.style.opacity = '0'
    setTimeout(function() {
        pageMenu.style.visibility = 'hidden';
    }, 300);
    pageMenu.style.transform = "scale(1.5, 1.5)";
    document.getElementById('footer').style.display = 'block';

    if (document.getElementById('header-video-player')) {
        myPlayer.play();
    }
}


/**
 * STAFF PAGE FUNCTIONS
 *
 */

 if (document.getElementById('staff-member')) {

    console.log(staffMember);

    // var lookUpStaffMember = function(staffMember){
    //     return staffData[staffMember];
    // }

    var fadeInStaffInfo = function(staffObject) {

        document.getElementById('staff-member__info').style.opacity = '1';
        document.getElementById('staff-member__wrapper').style.opacity = '1';
        document.getElementById('staff-member__wrapper').style.backgroundImage = 'url(' + $staffMember.data('image') + ')';
        document.getElementById('staff-member__close').style.opacity = '1';
    }

    var populateAndSizeStaffInfo = function(staffBox, staffObject) {
        staffBox.style.height = '100vh';
        staffBox.style.width = '100%';
        staffBox.style.left = '0px';
        staffBox.style.top = '0px';

        // staffBox.style.transform = 'translate(' + left + ', ' + top + ')';
        document.getElementById('staff-member__name').innerHTML = $staffMember.find('.name').html();
        document.getElementById('staff-member__position').innerHTML = $staffMember.find('.position').html();
        document.getElementById('staff-member__department').innerHTML = $staffMember.find('.department').html();
        document.getElementById('staff-member__about').innerHTML = $staffMember.find('.description').html();
        document.getElementById('staff-member__did-you-know').innerHTML = '<strong class="highlight">Did you know?</strong> ' + $staffMember.find('.description2').html();
    }

    var hideStaffBoxAndAllowScrolling = function(staffBox) {
        staffBox.style.display = 'none';
        // document.body.classList.remove('stop-scrolling');
    }

    var resetStaffBox = function(staffBox, startingHeight, startingWidth, leftPosition, topPosition) {
        staffBox.style.height = startingHeight;
        staffBox.style.width = startingWidth;
        staffBox.style.left = leftPosition;
        staffBox.style.top = topPosition;
    }

    var getScrollPosition = function() {
        var top = (window.pageYOffset || doc.scrollTop) - (doc.clientTop || 0);
        return top;
    }

    var staff = document.getElementsByClassName('module--staff');

    for (var iterator3 = 0; iterator3 < staff.length; iterator3++) {
        staffMember = staff[iterator3];

        staffMember.onclick = function() {
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
        var width = $(window).width();


        staffBoxClose = document.getElementById('staff-member__close');

        staffMember.onclick = function() {

            // staff members
            staffMember = this.id;
            $staffMember = $('#' + staffMember);

            // check screen size
            var width = $(window).width();

            if (width > 1024) {


            } else { // if screen is mobile

            }

        }

        staffBoxClose.onclick = function() {
            document.getElementById('staff-member__wrapper').style.opacity = '0';
            document.getElementById('staff-member__info').style.opacity = '0';
            document.getElementById('staff-member__close').style.opacity = '0';
            window.scrollTo(0, scrollPosition);

            setTimeout(function() {
                resetStaffBox(staffBox, startingHeight, startingWidth, leftPosition, topPosition);
            }, 500);

            setTimeout(function() {
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
 jQuery(document).ready(function() {

    if (document.getElementById('work_all')) {

        if (window.location.hash) {

            scrollPoint = window.location.hash;

            $('html, body').animate({ scrollTop: ($(scrollPoint).offset().top - 66) }, 'slow');

        }

    }

});


 if (document.getElementById('services--list')) {


    [].map.call(document.querySelectorAll('.work-item-title'), function(el) {
        el.onclick = function() {
            itemsToShow = el.id;
            itemsToScrollTo = itemsToShow.slice(5);
            itemsToScrollTo = "#" + itemsToScrollTo;
            $('html, body').animate({ scrollTop: ($(itemsToScrollTo).offset().top - 67) }, 'slow');
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

 var controlContactBorder = function(inputClicked, borderToChange) {
    inputsParentPosition = inputsParent.getBoundingClientRect();
    inputPosition = inputClicked.getBoundingClientRect();
    newFunkyBorderHeight = inputPosition.top - inputsParentPosition.top + inputPosition.height;
    funkyBorder = 'funky-border-' + borderToChange;
    funkyBorderToChange = document.getElementById(funkyBorder);
    funkyBorderToChange.style.height = newFunkyBorderHeight + "px";
}

var handleBorderTiming = function(inputsParent) {
    var borderID = inputsParent.id.slice(-1);
    var borderToSelect = "funky-border-" + borderID;
    var borderToAffect = document.getElementById(borderToSelect);

    if (inputsParent.classList.contains('inUse')) {
        borderToAffect.style.transitionDelay = '0s';
    } else {
        for (var iterator7 = 0; iterator7 < formHolders.length; iterator7++) {
            formHolders[iterator7].classList.remove('inUse');
            formBorders[iterator7].style.transitionDelay = '0s';
        }
        inputsParent.classList.add('inUse');
        borderToAffect.style.transitionDelay = '0.2s';
    }
}

var completeBorder = function(inputsParent) {
    if (inputsParent.id === "form-holder-1") {
        handleBorderTiming(inputsParent);
        for (var iterator6 = 0; iterator6 < formHolders.length; iterator6++) {
            formHolders[0].parentNode.style.borderTop = '1px solid #5e5e5e';
            setTimeout(function() {
                formHolders[1].parentNode.style.borderTop = 'none';
                formHolders[2].parentNode.style.borderTop = 'none';
                formHolders[0].parentNode.classList.remove('contact-form__fieldset--completed');
                formHolders[1].parentNode.classList.remove('contact-form__fieldset--completed');
                formHolders[2].parentNode.classList.remove('contact-form__fieldset--completed');
            }, 200);
            formBorders[iterator6].style.height = '0px';
        }
    } else if (inputsParent.id === "form-holder-2") {
        handleBorderTiming(inputsParent);
        document.getElementById('funky-border-1').style.height = '100%';
        document.getElementById('funky-border-3').style.height = '0%';
        setTimeout(function() {
            formHolders[0].parentNode.style.borderTop = '1px solid #5e5e5e';
            formHolders[1].parentNode.style.borderTop = '1px solid #5e5e5e';
            formHolders[2].parentNode.style.borderTop = 'none';
            formHolders[0].parentNode.classList.add('contact-form__fieldset--completed');
            formHolders[1].parentNode.classList.remove('contact-form__fieldset--completed');
            formHolders[2].parentNode.classList.remove('contact-form__fieldset--completed');
        }, 200);

    } else if (inputsParent.id === "form-holder-3") {
        handleBorderTiming(inputsParent);
        document.getElementById('funky-border-1').style.height = '100%';
        document.getElementById('funky-border-2').style.height = '100%';
        setTimeout(function() {
            formHolders[0].parentNode.style.borderTop = '1px solid #5e5e5e';
            formHolders[1].parentNode.style.borderTop = '1px solid #5e5e5e';
            formHolders[2].parentNode.style.borderTop = '1px solid #5e5e5e';
            formHolders[0].parentNode.classList.add('contact-form__fieldset--completed');
            formHolders[1].parentNode.classList.add('contact-form__fieldset--completed');
        }, 200);

    }
}

if (document.getElementById('contact-form')) {

    var worksheetButtonOpen = document.getElementById('form_open');
    var worksheetButtonClose = document.getElementById('form_close');
    var inputs = document.getElementsByClassName('contact-form__input');
    formHolders = document.getElementsByClassName('form-info-holder');
    formBorders = document.getElementsByClassName('funky-border-shizz');

    for (var iterator5 = 0; iterator5 < inputs.length; iterator5++) {
        var inputIWant = inputs[iterator5];
        (function() {
            inputIWant.addEventListener('blur', function() {
                if (this.value !== "") {
                    var inputID = this.id;
                    var inputLabel = document.getElementById(inputID).previousSibling;
                    inputLabel.classList.add('contact-form__label--completed');
                } else if ((this.value === "")) {
                    var inputID = this.id;
                    var inputLabel = document.getElementById(inputID).previousSibling;
                    inputLabel.classList.remove('contact-form__label--completed');
                }
            });

            inputIWant.addEventListener('focus', function(event) {
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

    worksheetButtonOpen.addEventListener('click', function() {
        worksheetButtonClose.style.display = 'inline-block';
        this.style.display = 'none';
    });

    worksheetButtonClose.addEventListener('click', function() {
        worksheetButtonOpen.style.display = 'inline-block';
        this.style.display = 'none';
    });

}


/**
 * VIDEO FUNCTIONS 3
 *
 */
 jQuery(document).ready(function() {

    jQuery('.vjs-loading-spinner').html('<div class="circle-container"><div class="circle circle--1"></div><div class="circle circle--2"></div></div>');


    if (document.getElementById('services--list')) {

        var stickySidebar = jQuery('#services--list').offset().top;

        jQuery(window).scroll(function() {
            if ($(window).scrollTop() > stickySidebar) {
                jQuery('#services--list').addClass('sticky');
            } else {
                jQuery('#services--list').removeClass('sticky');
            }
        });
    }

    // if ($('.module').length && mobile) {
    //     $(window).scroll(function() {
    //         $.each($('.module'), function(index, el) {
    //             if (isElementInViewport(el)) {
    //                 setTimeout(function() {
    //                     $(el).addClass('hover');
    //                 }, 500)
    //             } else {
    //                 $(el).removeClass('hover');
    //             }
    //         })
    //     })
    // }

});


 jQuery(function($) {

    $('.scroll-down').click(function() {
        $('body, html').animate({
            scrollTop: $('#home-page').height()
        }, 500);
        return false;
    })

    $(window).resize(function() {
        setVideoHeight();
    }).resize();

    function setVideoHeight() {
        // video height work page
        if ($('body.page-id-1986').length) {
            var h = $(window).height() - $('#services--list').height() + 68;
            $('#work_page').height(h);
        }
    }

})



/**
 * FOOTER FUNCTIONS
 *
 */

 if (document.getElementById('footer')) {
    var footerImageToDisplay = Math.floor((Math.random() * 8 + 1));
    var footer = document.getElementById('footer')
    var width = $(window).width(),
    height = $(window).height();

    if (width <= 400) {
        footer.style.backgroundImage = "url('" + window.directoryURI + "/images/footer/small_square/footer_" + footerImageToDisplay + ".jpg')";
    } else if (width <= 800) {
        footer.style.backgroundImage = "url('" + window.directoryURI + "/images/footer/small_1024/footer_" + footerImageToDisplay + ".jpg')";

    } else {
        footer.style.backgroundImage = "url('" + window.directoryURI + "/images/footer/footer_" + footerImageToDisplay + ".jpg')";
    }
}

var footerImageToDisplay = Math.floor((Math.random() * 8 + 1));
var footer = document.getElementById('footer');
var width = $(window).width(),
height = $(window).height();



function isElementInViewport(el) {

    //special bonus for those using jQuery
    if (typeof jQuery === "function" && el instanceof jQuery) {
        el = el[0];
    }

    var rect = el.getBoundingClientRect();


    return (
        rect.top <= ($(window).height() / 2 - 100) &&
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && /*or $(window).height() */
        rect.right <= (window.innerWidth || document.documentElement.clientWidth) /*or $(window).width() */
        );
}

// Validating Empty Field

$('#fieldEmail').blur(check_empty);

function check_empty() {
    var email = false;
    var name =false;
    var regex = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);

    if(!regex.test($('#fieldEmail').val())){
        $('#fieldEmail').addClass('error');
        $('.error-msg').css('display','block');
        $('#fieldEmail').css('border-bottom', '1px solid #e84c64');
        $('#fieldEmail').css('margin-bottom', '40px');
        $('#errors').css('margin-top', '-40px');
    }
    else{
        email = true;
        $('#fieldEmail').removeClass('error');
        $('.error-msg').css('display','none');
        $('#fieldEmail').css('border-bottom', '1px solid #999999');
    }
    if($('#fieldName').val() == ''){
    }
    else{
        name = true;
    }

    if(name && email && $('.tick').prop('checked') == true) {
        $('.cube--link').addClass('active').delay(0);
    }
    else{
        $('.cube--link').removeClass('active');
    }
}

// function check_valid() {

//     if(email && $('.tick').prop('checked') == true) {
//         $('.cube--link').addClass('active');
//     }
//     else{
//         $('.cube--link').removeClass('active');
//     }

// }

//Function To Display Popup
function hide() {
    $('#subscribe').addClass("active");
    $('#popup').hide();
}

//tick box function
jQuery(document).ready(function() {
    $('.check-box').on('click', function(){
        $(this).toggleClass('ticked');

        if($(this).hasClass('ticked')){
            $('.tick').prop('checked', true);
        }else{
            $('.tick').prop('checked', false);
        }
    });
});

//open modal on join mailbox click
$('.join-pop').on('click', function(){
    $('.modal-container').addClass('visible');
});

$('.close-btn').on('click', function(){
    $('.modal-container').removeClass('visible');
});


// new work page template functions 

$(document).ready(function(){
  $('.image_carousel').slick({
    centerMode: true,
    initialSlide: 1,
    infinite: true,
    slidesToShow: 3,
    nextArrow: '<i class="fas fa-angle-right"></i>',
    prevArrow: '<i class="fas fa-angle-left"></i>',
    slidesToScroll: 1

});
});

$(document).ready(function(){

    var playVideo = function (video) {
        var video = $(video);
        
            if(video[0].paused == true){
                video[0].play();

            }else {
                video[0].pause();
            }

    };

    $('video').on('click', function(e){

        var parent = $(e.target).parent().attr('class');
        var parent = parent.replace(/\s+/g, '.');
        var playButton = $('.' + parent + ' .header-play');

            playVideo(e.target);
            playButton.toggleClass('play-button-display');


    });

//header scroll down and up animation

    var position = $(window).scrollTop();

    $(window).scroll(function(){

        var scroll = $(window).scrollTop();

        if(scroll > position){
        $('.header-title').css({'opacity': '0', 'transition': 'all ease 4s'});
        }else{
            $('.header-title').css({'opacity': '1', 'transition': 'all ease 4s'});
        }
    })


});

