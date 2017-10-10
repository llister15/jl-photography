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
					<div id="pricing-content"></div>
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
							<i class="fa fa-facebook">Facebook</i>
							<i class="fa fa-instagram">Instagram</i>
							<i class="fa fa-twitter">Twitter</i>
							<i class="fa fa-snapchat">Snapchat</i>
						</ul> <!-- /social-list -->
					</div>
			</section>
			<section id="about">
					<div id="about-title" class="section-titles">My Info</div>
					<div id="about-content">
						BIO is the world's largest trade association representing biotechnology companies, academic institutions, state biotechnology centers and related organizations across the United States and in more than 30 other nations. BIO members are involved in the research and development of innovative healthcare, agricultural, industrial and environmental biotechnology products. BIO also produces the BIO International Convention, the world’s largest gathering of the biotechnology industry, along with industry-leading investor and partnering meetings held around the world. BIOtechNOW is BIO's blog chronicling “innovations transforming our world” and the BIO Newsletter is the organization’s bi-weekly email newsletter.” Subscribe to the BIO Newsletter.

						Corporate members range from entrepreneurial companies developing a first product to Fortune 500 multinationals. We also represent state and regional biotech associations, service providers to the industry, and academic centers.  Our members help foster a healthy economy by creating good-paying, biotechnology jobs. We also host the largest cost-savings program in the life sciences industry, BIO Business Solutions, which saved $315 million in aggregate for 3,000+ companies last year. 

						BIO also works towards enriching the industry with networking, partnering and education opportunities. We organize the BIO International Convention, the global event for biotechnology, along with many other industry-leading investor and partnering events held around the world. Arguably the industry’s leading partnering software, BIO One-on-One Partnering™ facilitates 50,000 face-to-face meetings each year among investors, biotechs, pharmaceutical companies, academic institutions and non-profits at live events.
					</div>
			</section>

	</div> <!-- /fullscreen-video-wrap -->
<script type="text/javascript" src="js/jscript.min.js"></script>
</body>
</html>