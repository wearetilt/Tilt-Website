var keys = {37: 1, 38: 1, 39: 1, 40: 1};

function preventDefault(e) {
  e = e || window.event;
  if (e.preventDefault)
      e.preventDefault();
  e.returnValue = false;
}

function preventDefaultForScrollKeys(e) {
    if (keys[e.keyCode]) {
        preventDefault(e);
        return false;
    }
}

function disableScroll() {
  if (window.addEventListener) // older FF
      window.addEventListener('DOMMouseScroll', preventDefault, false);
  window.onwheel = preventDefault; // modern standard
  window.onmousewheel = document.onmousewheel = preventDefault; // older browsers, IE
  window.ontouchmove  = preventDefault; // mobile
  document.onkeydown  = preventDefaultForScrollKeys;
}

function enableScroll() {
    if (window.removeEventListener)
        window.removeEventListener('DOMMouseScroll', preventDefault, false);
    window.onmousewheel = document.onmousewheel = null;
    window.onwheel = null;
    window.ontouchmove = null;
    document.onkeydown = null;
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
        disableScroll();
        staffBoxClose.onclick = function(){
            staffBox.style.height = startingHeight;
            staffBox.style.width = startingWidth;
            staffBox.style.left = leftPosition;
            staffBox.style.top = topPosition;
            setTimeout(function(){
                document.body.removeChild(staffBox);
                enableScroll();
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
