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
console.log(allModules);

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
