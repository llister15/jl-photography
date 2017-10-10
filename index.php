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
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
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
							<li class="menu-item"><a href="#pricing" onclick="display_menu(1, this)">Pricing</a></li>
							<li class="menu-item"><a href="#portfolio" onclick="display_menu(2, this)"><strong>Portfolio</strong></a>
								<ul class="sub-menu" id="sub-menu">
									<li class="sub-item"><a href="#" onclick="submenu_action(this)">Architecture</a></li>
									<li class="sub-item"><a href="#" onclick="submenu_action(this)">Automotive</a></li>
									<li class="sub-item"><a href="#" onclick="submenu_action(this)">Landscapes</a></li>
									<li class="sub-item"><a href="#" onclick="submenu_action(this)">Portraits</a></li>
									<li class="sub-item"><a href="#" onclick="submenu_action(this)">Graduation</a></li>
									<li class="sub-item"><a href="#" onclick="submenu_action(this)">Wedding</a></li>
								</ul> <!-- /sub-menu -->
							</li>
							<li class="menu-item"><a href="#connect" onclick="display_menu(3, this)">Connect</a></li>
							<li class="menu-item"><a href="#about-me" onclick="display_menu(4, this)">About me</a></li>
						</ul>
					</div> <!-- /menu-wrap -->
				</div> <!-- /header-content -->
					<div class="design-message">
						Created by <a href="https://wonkasoft.com" target="_blank">Wonkasoft</a>
					</div> <!-- /design-message -->
			</header> <!-- /header -->
			<section id="pricing">
					<div id="pricing-title" class="section-titles">Pricing</div>
					<div id="pricing-content">
						<div id="ptable-1" class="pricing-tables">
							<div class="ptable-header">
								Starter
							</div>
							<div class="ptable-price">
								$100.00
							</div>
							<div class="ptable-content">
								Basic Package solution
								<ul class="package-list">
									<li class="package-item">Unlimited calls</li>
									<li class="package-item">Free hosting</li>
									<li class="package-item">Unlimited emails</li>
									<li class="package-item">40GB of storage space</li>
								</ul>
							</div>
							<div class="cta-btn">
								<a href="#" class="btn">Choose Package</a>
							</div>
						</div>
						<div id="ptable-2" class="pricing-tables">
							<div class="ptable-header">
								Standard
							</div>
							<div class="ptable-price">
								$150.00
							</div>
							<div class="ptable-content">
								Standard Package solution
								<ul class="package-list">
									<li class="package-item">Unlimited calls</li>
									<li class="package-item">Free hosting</li>
									<li class="package-item">Unlimited emails</li>
									<li class="package-item">40GB of storage space</li>
									<li class="package-item">40GB of storage space</li>
									<li class="package-item">40GB of storage space</li>
								</ul>
							</div>
							<div class="cta-btn">
								<a href="#" class="btn">Choose Package</a>
							</div>
						</div>
						<div id="ptable-3" class="pricing-tables">
							<div class="ptable-header">
								Premium
							</div>
							<div class="ptable-price">
								$200.00
							</div>
							<div class="ptable-content">
								Professional Package solution
								<ul class="package-list">
									<li class="package-item">Unlimited calls</li>
									<li class="package-item">Free hosting</li>
									<li class="package-item">Unlimited emails</li>
									<li class="package-item">40GB of storage space</li>
									<li class="package-item">40GB of storage space</li>
									<li class="package-item">40GB of storage space</li>
									<li class="package-item">40GB of storage space</li>
									<li class="package-item">40GB of storage space</li>
								</ul>
							</div>
							<div class="cta-btn">
								<a href="#" class="btn">Choose Package</a>
							</div>
						</div>
					</div>
			</section>
			<section id="portfolio">
				<div id="category-title" class="section-titles"></div>
				<div id="photo-viewer"></div>
				<div id="photos-selector"></div>
			</section>
			<section id="connect">
					<div id="connect-title" class="section-titles">Follow Me</div>
					<div id="connect-content">
						<ul id="social-list">
							<li class=""><a href="#" target="_blank"><i class="fa fa-facebook"></i> Facebook</a></li>
							<li class=""><a href="https://www.instagram.com/jonathan_7ister/" target="_blank"><i class="fa fa-instagram"></i> Instagram</a>
							<li class=""><a href="#" target="_blank"><i class="fa fa-twitter"></i> Twitter</a>
							<li class=""><a href="https://www.snapchat.com/" target="_blank"><i class="fa fa-snapchat"></i> Snapchat</a>
							<li class=""><a href="mailto:jonathanl2013@hotmail.com" target="_blank"><i class="fa fa-envelope-open-o"> </i> Email</a>
						</ul> <!-- /social-list -->
					</div>
			</section>
			<section id="about">
					<div id="about-image">
						<img class="profile-image" src="img/profile-image.jpg" alt="profile" />
					</div>
					<div id="about-title" class="section-titles">My Bio</div>
					<div id="about-content">
						HEY THERE, this is my Website! I am a photographer from California on the lower side of this tall state. My passion for photography started to grow in 2014 when I got my first point and shoot and oohh man they were amazing professional shots “to my eyes they were, just kidding”. My early days of photography I found myself very frustrated and confused on how can I improve my photos drastically . As days, months, and years have past I have trained my eye to see well thought out compositions and avoid major flaws. I am self taught and I enjoy learning new things. I am kinda shy but open to conversations, I am very quiet but listen carefully, I am a funny, creative, great, friendly guy. There you go, a little bit about me. Explore my website as much as you like and connect with me! Click the connect menu on the right.
					</div>
			</section>

	</div> <!-- /fullscreen-video-wrap -->
<script type="text/javascript" src="js/jscript.min.js"></script>
</body>
</html>