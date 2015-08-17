var staff = document.getElementsByClassName('module');
for (var iterator3 = 0; iterator3 < staff.length; iterator3++){
    staffMember = staff[iterator3];

    staffMember.onclick = function (){
        var staffBox = document.createElement('div');
        staffBox.setAttribute('ID', 'staffBox');
        staffBox.style.height = window.getComputedStyle(this).height;
        staffBox.style.width = window.getComputedStyle(this).width;
        document.body.appendChild(staffBox);
        console.log(staffBox);
        var rect = this.getBoundingClientRect();
        var self = staffBox;
        console.log(rect);
        console.log('I have been clicked');
        console.log(rect['x'], rect['y']);
        staffBox.style.position = "fixed";
        staffBox.style.left = (rect['x'] + 'px');
        staffBox.style.top = (rect['y'] + 'px');
        staffBox.style.backgroundColor = 'magenta';
        staffBox.style.zIndex = '5';
        var staffMemberInfo = this.getAttribute('ID');
        setTimeout(function(){
            console.log('fired');
            self.style.height = '100vh';
            self.style.width = '100%';
            self.style.left = '0px';
            self.style.top = '0px';
        }, 1000);
        // this.classList.add('module--selected');

    }
}
