var menuButton = document.getElementById('menuButton');
var pageMenu = document.getElementById('pageMenu');
menuButton.onclick = function(){
    [].map.call(document.querySelectorAll('.wrapper'), function(el){
        el.classList.toggle('wrapper--navved');
    });
    if(pageMenu.style.visibility === 'inherit'){
        pageMenu.style.opacity = '0'
        setTimeout(function(){
            pageMenu.style.visibility = 'hidden';
        },500);
        pageMenu.style.transform = "scale(1.5, 1.5)";
    } else{
        pageMenu.style.visibility = 'inherit';
        pageMenu.style.opacity = 0.98;
        pageMenu.style.transform = "scale(1, 1)";
    }
}

var allModules = document.getElementsByClassName('module');

for (var i = 0; i < allModules.length; i++){
    var module = allModules[i];
    new Waypoint({
        element: module,
        handler: function(){
            this.element.classList.add('module--visible');
        },
        offset: 200
    });
}

// Get all the carousel controls on the page and all the images on the page
//TODO: Add a way where the controls are created based on the number of images
//This might break centring
var carouselImages = document.getElementsByClassName('carousel-image');
var carouselControls = document.getElementsByClassName('carousel-control');

// Loop through all the controls and add a click handler to all of them.
for (var iterator = 0; iterator < carouselControls.length; iterator++){
    var carouselControl = carouselControls[iterator];
    carouselControl.onclick = function (){
        //grab the ID from the carousel control
        var imageToShow = this.getAttribute('ID').slice(-1);

        //Target the image with the matching ID and expand it while hiding all the others
        for(var iterator2 = 0; iterator2 < carouselImages.length; iterator2++){
            carouselImage = carouselImages[iterator2];
            carouselImage.style.height = 0;
            carouselControls[iterator2].classList.remove("selected");
        }
        document.getElementById('carousel-image-' + imageToShow).style.height = '100%';
        this.classList.add('selected');
    }
}
