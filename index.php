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
	<title>J L Photography | Home</title>
	<meta charset="UTF-8">
  <meta name="description" content="Jonathan Lister's portfolio site">
  <meta name="keywords" content="Photography, camera, photos, car photos, wedding photos, profiles">
  <meta name="author" content="Jonathan Lister">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<header class="v-header container">
		<div class="fullscreen-video-wrap">
			<video src="video/lens-bg-video.mp4" autoplay="true" loop="true"></video>
		</div> <!-- /fullscreen-video-wrap -->
		<div class="header-overlay"></div> <!--/header-overlay -->
		<div class="top-logo-wrap">
			<img src="img/logo.png" class="top-logo" alt="logo" />
		</div> <!-- /top-logo -->
		<div class="header-content">
			<div class="menu-wrap">
				<ul class="main-nav">
					<li class="menu-item"><a href="#home" onclick="display_menu(1)">Home</a></li>
					<li class="menu-item"><a href="#portfolio" onclick="display_menu(2)"><strong>Portfolio</strong></a>
						<ul class="sub-menu">
							<li class="sub-item"><a href="#">Automotive</a></li>
							<li class="sub-item"><a href="#">Portraits</a></li>
							<li class="sub-item"><a href="#">Graduation</a></li>
							<li class="sub-item"><a href="#">Wedding</a></li>
							<li class="sub-item"><a href="#">Landscapes</a></li>
						</ul> <!-- /sub-menu -->
					</li>
					<li class="menu-item"><a href="#connect" onclick="display_menu(3)">Connect</a></li>
					<li class="menu-item"><a href="#about-me" onclick="display_menu(4)">About me</a></li>
				</ul>
			</div> <!-- /menu-wrap -->
		</div> <!-- /header-content -->
	</header> <!-- /header -->
<script type="text/javascript" src="js/jscript.js"></script>
</body>
</html>