// This is custom javascript for Jonathan
// version 1.0.0
// since 1.0.0
// package Jonathan

var logo = document.getElementsByClassName('top-logo')[0];
var pricing = document.getElementById('pricing');
var portfolio = document.getElementById('portfolio');
var connect = document.getElementById('connect');
var about = document.getElementById('about');
var menulist = document.getElementsByClassName('menu-item');
var submenu = document.getElementById('sub-menu');
var active = document.getElementsByClassName('active');
var photo_selected = document.getElementById('photos-selector').getElementsByClassName('thumbnail');

function display_menu( item, el ) {

	switch(item) {
		case 1:
		submenu.style.opacity = "0";
		var i;
		for (i = 0; i < menulist.length; i++) {
			menulist[i].classList.remove('active');
		}
		pricing.style.width = "75%";
		portfolio.style.width = "0";
		connect.style.width = "0";
		about.style.width = "0";
		menu_action(el);
		break;
		case 2:
		pricing.style.width = "0";
		connect.style.width = "0";
		about.style.width = "0";
		submenu.style.opacity="1";
		menulist[1].classList.add('active');
		break;
		case 3:
		pricing.style.width = "0";
		portfolio.style.width = "0";
		connect.style.width = "75%";
		about.style.width = "0";
		submenu.style.opacity = "0";
		menulist[1].classList.remove('active');
		menu_action(el);
		break;
		case 4:
		pricing.style.width = "0";
		portfolio.style.width = "0";
		connect.style.width = "0";
		about.style.width = "75%";
		submenu.style.opacity = "0";
		menulist[1].classList.remove('active');
		menu_action(el);
		break;
		default:
		for (i = 0; i < menulist.length; i++) {
			menulist[i].classList.remove('active');
		}
	}
}

function menu_action(el) {
	logo.classList.add('logo-shift-right');
	setTimeout(function() {
	var logoshift = document.getElementsByClassName('logo-shift-right')[0];
		logoshift.style.right ="75px";
	var menushift = document.getElementsByClassName('menu-wrap')[0];
		menushift.style.right ="40px";
	}, 0);
}

function submenu_action(el) {
	logo.classList.add('logo-shift-right');
	setTimeout(function() {
	var logoshift = document.getElementsByClassName('logo-shift-right')[0];
		logoshift.style.right ="75px";
	var menushift = document.getElementsByClassName('menu-wrap')[0];
		menushift.style.right ="-224px";
		portfolio.style.width = "75%";

		// Ajax setup to get images
		// @Since 1.0.0
		var xhttp = new XMLHttpRequest();
		var args = "post"+el.textContent;
  	xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    	var data = JSON.parse(this.responseText);
    	var i = 0;
    	var output = "";
    	while( i < data.length) {
    		if (i == 0) {
    			setTimeout(function() {
				document.getElementById("photo-viewer").style.opacity = 0;
				document.getElementById("category-title").style.opacity = 0;
			}, 0);
    			var current_img = data[i];
			setTimeout(function() {
				document.getElementById("photo-viewer").innerHTML = '<img src="./img/'+ el.textContent + '/' + current_img +'" class="in-viewer" />';
				document.getElementById("photo-viewer").style.opacity = 1;
				document.getElementById('category-title').innerHTML = ':::  ' + el.textContent + '  :::';
				document.getElementById("category-title").style.opacity = 1;
			}, 500);
    			output += '<div class="thumbnail active"><a href="#" onclick="load_img(this)"><img src="./img/'+ el.textContent + '/' + data[i] + '" /></a></div>';
    		} else {
    			output += '<div class="thumbnail"><a href="#" onclick="load_img(this)"><img src="./img/'+ el.textContent + '/' + data[i] + '" /></a></div>';
    		}
      		i++;
    	}
    	document.getElementById("photos-selector").innerHTML = output;
    	
    }
  };

  // Ajax to load picture data to view
  // @since 1.0.0 
  xhttp.open("POST", "./php/ajax.php", true);
  //Send the proper header information along with the request
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("data="+el.textContent);

}, 0);
}

function home() {
	setTimeout(function() {
	var logoshift = document.getElementsByClassName('logo-shift-right')[0];
		logoshift.style.right ="42.5%";
	var menushift = document.getElementsByClassName('menu-wrap')[0];
		menushift.style.right ="280px";
		submenu.style.opacity="0";
		menulist[1].classList.remove('active');
	if (pricing.style.width == '75%') {
		pricing.style.width = "0";
	}
	if (portfolio.style.width == '75%') {
		portfolio.style.width = "0";
	}
	if (connect.style.width == '75%') {
		connect.style.width = "0";
	}
	if (about.style.width == '75%') {
		about.style.width = "0";
	}
}, 0);
}

function load_img(el) {
	setTimeout(function() {
		document.getElementById("photo-viewer").style.opacity = 0;
	}, 0);
	setTimeout(function() {
		var i;
		for (i = 0; i < photo_selected.length; i++) {
			photo_selected[i].classList.remove('active');
		}
		var img = el.getElementsByTagName('img')[0];
		document.getElementById("photo-viewer").innerHTML = '<img src="' + img.src + '" class="in-viewer" />';
		document.getElementById("photo-viewer").style.opacity = 1;
		el.parentElement.classList.add('active');
	}, 500);
}

document.getElementById("menu-icon").addEventListener("click", function() {
	var mobile_ul_li = document.getElementById("mobile-ul").children;
		if ( mobile_ul_li[0].style.height == "50px" ) {
			for (var i = 0; i < mobile_ul_li.length; i++) {
				mobile_ul_li[i].style.height = "0px";
				mobile_ul_li[i].style.padding = "0px";
				mobile_ul_li[i].style.borderWidth = "0px";
			}
		} else {
			for (var i = 0; i < mobile_ul_li.length; i++) {
				mobile_ul_li[i].style.height = "50px";
				mobile_ul_li[i].style.padding = "15px";
				mobile_ul_li[i].style.borderWidth = "1px";
			}
		}
});