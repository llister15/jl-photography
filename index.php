<?php
/**
 * Custom Build for Jonathan
 * 7ister
 * @author Louis Lister <[<llister@wonkasoft.com]>
 * @package  
 * @since  1.0.0 [<Init build>]
 * @version 1.0.0 [<Init build>]
 */
?>
<!DOCTYPE html>
<html>
<head>
	<title>Photo Lister | Portfolio Site</title>
	<meta charset="UTF-8">
  <meta name="description" content="Jonathan Lister's portfolio site">
  <meta name="keywords" content="Photography, camera, photos, car photos, wedding photos, profiles, Architecture, Graduation">
  <meta name="author" content="Jonathan Lister">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="fullscreen-video-wrap">
		<video src="video/lens-bg-video.mp4" autoplay="true" loop="true"></video>
			<div class="header-overlay"></div> <!--/header-overlay -->
			<header class="container">
				<div class="top-logo-wrap">
					<a href="#home" onclick="home()"><img src="img/logo.png" class="top-logo" alt="logo" /></a>
				</div> <!-- /top-logo -->
				<div class="header-content">
					<div class="menu-wrap">
						<ul class="main-nav" id="main-nav">
							<li class="menu-item"><a href="#pricing" onclick="display_menu(1)">Pricing</a></li>
							<li class="menu-item"><a href="#portfolio" onclick="display_menu(2)"><strong>Portfolio</strong></a>
								<ul class="sub-menu" id="sub-menu">
									<li class="sub-item"><a href="#" onclick="submenu_action(this)">Architecture</a></li>
									<li class="sub-item"><a href="#" onclick="submenu_action(this)">Automotive</a></li>
									<li class="sub-item"><a href="#" onclick="submenu_action(this)">Landscapes</a></li>
									<li class="sub-item"><a href="#" onclick="submenu_action(this)">Portraits</a></li>
									<li class="sub-item"><a href="#" onclick="submenu_action(this)">Graduation</a></li>
									<li class="sub-item"><a href="#" onclick="submenu_action(this)">Wedding</a></li>
								</ul> <!-- /sub-menu -->
							</li>
							<li class="menu-item"><a href="#connect" onclick="display_menu(3)">Connect</a></li>
							<li class="menu-item"><a href="#about-me" onclick="display_menu(4)">About me</a></li>
						</ul>
					</div> <!-- /menu-wrap -->
				</div> <!-- /header-content -->
					<div class="design-message">
						Created by <a href="https://wonkasoft.com" target="_blank">Wonkasoft</a>
					</div> <!-- /design-message -->
			</header> <!-- /header -->
			<main id="main-content">
				<div id="category-title"></div>
				<div id="photo-viewer"></div>
				<div id="photos-selector"></div>
			</main>
	</div> <!-- /fullscreen-video-wrap -->
<script type="text/javascript" src="js/jscript.js"></script>
</body>
</html>