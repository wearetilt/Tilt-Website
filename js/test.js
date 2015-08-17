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
        },300);
        pageMenu.style.transform = "scale(1.5, 1.5)";
        document.getElementById('footer').style.display = 'block';
    } else{
        pageMenu.style.visibility = 'inherit';
        pageMenu.style.opacity = 0.98;
        pageMenu.style.transform = "scale(1, 1)";
        document.getElementById('footer').style.display = 'none';
    }
}


var staff = document.getElementsByClassName('module');
for (var iterator3 = 0; iterator3 < staff.length; iterator3++){
    staffMember = staff[iterator3];

    staffMember.onclick = function (){
        var staffBox = document.createElement('div');
        var staffBoxClose = document.createElement('div');
        var rect = this.getBoundingClientRect();
        var startingHeight = window.getComputedStyle(this).height;
        var startingWidth = window.getComputedStyle(this).width;
        var rect = this.getBoundingClientRect();
        var leftPosition = (rect['x'] + 'px');
        var topPosition = (rect['y'] + 'px');
        document.body.classList.add('stop-scrolling');
        staffBoxClose.onclick = function(){
            staffBox.style.height = startingHeight;
            staffBox.style.width = startingWidth;
            staffBox.style.left = leftPosition;
            staffBox.style.top = topPosition;
            setTimeout(function(){
                document.body.removeChild(staffBox);
                document.body.classList.remove('stop-scrolling');
            }, 500);
        }
        staffBox.setAttribute('ID', 'staffBox');
        staffBoxClose.setAttribute('ID', 'staffBoxClose');
        staffBox.style.height = startingHeight;
        staffBox.style.width = startingWidth;
        document.body.appendChild(staffBox);
        staffBox.appendChild(staffBoxClose);
        console.log(staffBox);
        var self = staffBox;
        console.log(rect);
        console.log('I have been clicked');
        console.log(rect['x'], rect['y']);
        staffBox.style.position = "fixed";
        staffBox.style.left = leftPosition;
        staffBox.style.top = topPosition;
        staffBox.style.backgroundColor = '#B2B2B2';
        staffBox.style.zIndex = '5';
        var staffMemberInfo = this.getAttribute('ID');
        setTimeout(function(){
            console.log('firing');
            self.style.height = '100vh';
            self.style.width = '100%';
            self.style.left = '0px';
            self.style.top = '0px';

        }, 500);

    }
}
