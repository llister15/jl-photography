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

function submenu_action() {
	var logo = document.getElementsByClassName('top-logo')[0];
	logo.classList.add('logo-shift-right');
	setTimeout(function() {
	var logoshift = document.getElementsByClassName('logo-shift-right')[0];
		logoshift.style.right ="75px";
	var menushift = document.getElementsByClassName('menu-wrap')[0];
		menushift.style.right ="-224px";
}, 0);
}

function home() {
	setTimeout(function() {
	var logoshift = document.getElementsByClassName('logo-shift-right')[0];
		logoshift.style.right ="calc(85% / 2)";
	var menushift = document.getElementsByClassName('menu-wrap')[0];
		menushift.style.right ="280px";
}, 0);
}