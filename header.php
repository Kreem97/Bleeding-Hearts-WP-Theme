<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!--link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300|Roboto:500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="style.css"-->
	<title>BLEEDING HEARTS</title>
	
	<?php wp_head(); ?>
</head>
<body>
	<div id="slideout-menu">
		<div id="faux"></div>
		<div id="logo-img">
			<a href="<?php echo site_url(''); ?>">
				<img src="wp-content/uploads/2018/06/BLEEDING-HEARTS-Small.png" alt="Bleeding Hearts Logo"><p>BLEEDING HEARTS</p>
			</a>
		</div>
		<div id="menu-icon">
			<i class="fas fa-bars"></i>
		</div>
		<ul>
			<li>
				<a href="#">DONATE</a>
			</li>
			<li>
				<a href="<?php echo site_url('/events'); ?>">EVENTS</a>
			</li>
			<li>
				<a href="<?php echo site_url('/about'); ?>">ABOUT</a>
			</li>
			<li>
				<a href="<?php echo site_url('/contact'); ?>">CONTACT</a>
			</li>
		</ul>
	</div>
	
	<!-- Navigation Bar -->
	<div class="nav-container">
		<nav>
			<div id="logo-img">
				<a href="<?php echo site_url(''); ?>">
					<img src="wp-content/uploads/2018/06/BLEEDING-HEARTS-Small.png" alt="Bleeding Hearts Logo"><p>BLEEDING HEARTS</p>
				</a>
			</div>
			<ul>
				<li>
					<a href="#">DONATE</a>
				</li>
				<li>
					<a href="<?php echo site_url('/events'); ?>">EVENTS</a>
				</li>
				<li>
					<a href="<?php echo site_url('/about'); ?>">ABOUT</a>
				</li>
				<li>
					<a href="<?php echo site_url('/contact'); ?>">CONTACT</a>
				</li>
			</ul>
		</nav>
	</div>
	
	<div id="nav-disp"></div>