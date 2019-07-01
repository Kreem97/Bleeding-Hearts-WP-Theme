<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!--link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300|Roboto:500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="style.css"-->
	<title>Bleeding Hearts</title>
	
	<?php wp_head(); ?>
</head>
<body>
	<div id="slideout-menu">
		<div id="menu-icon">
			<i class="fas fa-bars"></i>
		</div>
		<ul>
			<li>
				<a href="<?php echo site_url(''); ?>">Home</a>
			</li>
			<li>
				<a href="<?php echo site_url('/events'); ?>">Events</a>
			</li>
			<li>
				<a href="<?php echo site_url('/about'); ?>">About</a>
			</li>
			<li>
				<a href="<?php echo site_url('/contact'); ?>">Contact</a>
			</li>
		</ul>
	</div>
	
	<!-- Navigation Bar -->
	<div class="nav-container">
		<nav>
			<div id="logo-img">
				<a href="index.php">
					<img src="wp-content/uploads/2018/06/BLEEDING-HEARTS-Small.png" alt="Bleeding Hearts Logo"><p>Bleeding Hearts</p>
				</a>
			</div>
			<ul>
				<li>
					<a href="<?php echo site_url(''); ?>">Home</a>
				</li>
				<li>
					<a href="<?php echo site_url('/events'); ?>">Events</a>
				</li>
				<li>
					<a href="<?php echo site_url('/about'); ?>">About</a>
				</li>
				<li>
					<a href="<?php echo site_url('/contact'); ?>">Contact</a>
				</li>
			</ul>
		</nav>
		
		<hr class="break">
	</div>