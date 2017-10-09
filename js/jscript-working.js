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
		var pricing = document.getElementById('pricing');
		pricing.style.width = "75%";
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

function submenu_action(el) {
	var logo = document.getElementsByClassName('top-logo')[0];
	logo.classList.add('logo-shift-right');
	setTimeout(function() {
	var logoshift = document.getElementsByClassName('logo-shift-right')[0];
		logoshift.style.right ="75px";
	var menushift = document.getElementsByClassName('menu-wrap')[0];
		menushift.style.right ="-224px";
	var maincontent = document.getElementById('portfolio');
		maincontent.style.width = "75%";
		document.getElementById('category-title').innerHTML = ':::  ' + el.textContent + '  :::';

		var xhttp = new XMLHttpRequest();
		var args = "post"+el.textContent;
  	xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    	var data = JSON.parse(this.responseText);
    	var i = 0;
    	var output = "";
    	while( i < data.length) {
    		if (i == 0) {
    			document.getElementById("photo-viewer").innerHTML = '<img src="./img/'+ el.textContent + '/' + data[i] +'" class="in-viewer" />';
    		}
    		output += '<div class="thumbnail"><a href="#" onclick="load_img(this)"><img src="./img/'+ el.textContent + '/' + data[i] + '" /></a></div>';
      	i++;
    	}
    	document.getElementById("photos-selector").innerHTML = output;
    }
  };
  xhttp.open("POST", "./php/ajax.php", true);
  //Send the proper header information along with the request
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("data="+el.textContent);

}, 0);

}

function home() {
	setTimeout(function() {
	var logoshift = document.getElementsByClassName('logo-shift-right')[0];
		logoshift.style.right ="calc(85% / 2)";
	var menushift = document.getElementsByClassName('menu-wrap')[0];
		menushift.style.right ="280px";
		var maincontent = document.getElementById('portfolio');
		maincontent.style.width = "0%";
}, 0);
}

function load_img(el) {
	document.getElementById("photo-viewer").innerHTML = '<img src="' + el.getElementsByTagName('img')[0].src + '" class="in-viewer" />';
}