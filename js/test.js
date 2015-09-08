var menuButton = document.getElementById('menuButton');
var pageMenu = document.getElementById('pageMenu');
var staffMember;
var staffBox;
var staffObject;
var staffBoxClose;
var startingHeight;
var startingWidth;
var leftPosition;
var topPosition;
var rect;

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

var lookUpStaffMember = function(staffMember){
    return staffData[staffMember];
}

var fadeInStaffInfo = function(staffObject){
    document.getElementById('staff-member__info').style.opacity = '1';
    document.getElementById('staff-member__wrapper').style.opacity = '1';
    document.getElementById('staff-member__wrapper').style.backgroundImage = 'url(' + staffObject.image + ')';
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
    document.body.classList.remove('stop-scrolling');
}

var resetStaffBox = function(staffBox, startingHeight, startingWidth, leftPosition, topPosition){
    staffBox.style.height = startingHeight;
    staffBox.style.width = startingWidth;
    staffBox.style.left = leftPosition;
    staffBox.style.top = topPosition;
}


var staff = document.getElementsByClassName('module');
for (var iterator3 = 0; iterator3 < staff.length; iterator3++){
    staffMember = staff[iterator3];

    staffMember.onclick = function (){
        staffMember = this.id;
        staffObject = lookUpStaffMember(staffMember);
        staffBox = document.getElementById('staff-member');
        staffBox.style.display = 'block';
        staffBoxClose = document.getElementById('staff-member__close');
        rect = this.getBoundingClientRect();
        startingHeight = window.getComputedStyle(this).height;
        startingWidth = window.getComputedStyle(this).width;
        leftPosition = (rect['left'] + 'px');
        topPosition = (rect['top'] + 'px');
        document.body.classList.add('stop-scrolling');

        staffBoxClose.onclick = function(){
            document.getElementById('staff-member__wrapper').style.opacity = '0';
            document.getElementById('staff-member__info').style.opacity = '0';

            setTimeout(function(){
                resetStaffBox(staffBox, startingHeight, startingWidth, leftPosition, topPosition);
            }, 500);

            setTimeout(function(){
                hideStaffBoxAndAllowScrolling(staffBox)
            }, 1050);
        }
        staffBox.style.position = "fixed";
        staffBox.style.transition = "all 0s ease";
        staffBox.style.left = leftPosition;
        staffBox.style.top = topPosition;
        staffBox.style.height = startingHeight;
        staffBox.style.width = startingWidth;
        document.body.appendChild(staffBox);
        staffBox.appendChild(staffBoxClose);
        staffBox.style.backgroundColor = '#FF0066';
        staffBox.style.zIndex = '6';

        setTimeout(function(){
            staffBox.style.transition = "all 0.5s ease";
            populateAndSizeStaffInfo(staffBox, staffObject);
        }, 500);
        
        setTimeout(function(){
            fadeInStaffInfo(staffObject);
        }, 1050);

    }
}
