// This is custom javascript for Jonathan
// version 1.0.0
// since 1.0.0
// package Jonathan

function display_menu( item ) {
	var menulist = document.getElementsByClassName('menu-item');
	var submenu = document.getElementsByClassName('sub-menu');
	if ( item == 1) {
		submenu[0].style.display ="none";
		var i;
		for (i = 0; i < menulist.length; i++) {
			menulist[i].classList.remove('active');
		}
	}
	if ( item == 2) {
		submenu[0].style.display ="block";
		menulist[1].classList.add('active');
	}
	if ( item == 3) {
		submenu[0].style.display ="none";
		menulist[1].classList.remove('active');
	}
	if ( item == 4) {
		submenu[0].style.display ="none";
		menulist[1].classList.remove('active');
	}
}