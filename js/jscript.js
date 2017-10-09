// This is custom javascript for Jonathan
// version 1.0.0
// since 1.0.0
// package Jonathan
	

function display_menu( item ) {
	var menulist = document.getElementsByClassName('menu-item');
	var submenu = document.getElementById('sub-menu');
	if ( item == 1) {
		submenu.style.opacity = "0";
		var i;
		for (i = 0; i < menulist.length; i++) {
			menulist[i].classList.remove('active');
		}
	}
	if ( item == 2) {
		submenu.style.opacity="1";
		menulist[1].classList.add('active');
	}
	if ( item == 3) {
		submenu.style.opacity = "0";
		menulist[1].classList.remove('active');
	}
	if ( item == 4) {
		submenu.style.opacity = "0";
		menulist[1].classList.remove('active');
	}

	function fadeIn(element) {
	  element.style.opacity = 0;
	  var tick = function() {
	    element.style.opacity = +element.style.opacity + 0.01;
	    
	    if (+element.style.opacity < 1) {
	      (window.requestAnimationFrame && requestAnimationFrame(tick)) || setTimeout(tick, 16)
	    }
	  };

	  tick();
	}

	function fadeOut(element) {
	  if (element.style.opacity == 0) {
	  	return;
	  } else {
	  	element.style.opacity = 1;
	  }
	  var tick = function() {
	    element.style.opacity = +element.style.opacity - 0.01;
	    

	    if (+element.style.opacity < 1) {
	      (window.requestAnimationFrame && requestAnimationFrame(tick)) || setTimeout(tick, 16)
	    }
	  };

	  tick();
	}

}