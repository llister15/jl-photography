// This is custom javascript for Jonathan
// version 1.0.0
// since 1.0.0
// package Jonathan


function display_menu( item ) {
var menulist = document.getElementsByClassName('menu-item');
var submenu = document.getElementById('sub-menu');
var active = document.getElementsByClassName('active');

switch(item) {
   case 1:
       submenu.style.opacity = "0";
var i;
for (i = 0; i < menulist.length; i++) {
menulist[i].classList.remove('active');
}
       break;
   case 2:
       submenu.style.opacity="1";
menulist[1].classList.add('active');
       break;
   case 3:
   	submenu.style.opacity = "0";
    menulist[1].classList.remove('active');
       break;
   case 4:
   	submenu.style.opacity = "0";
    menulist[1].classList.remove('active');
       break;
   default:
       for (i = 0; i < menulist.length; i++) {
menulist[i].classList.remove('active');
}
}


}