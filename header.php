<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>BLEEDING HEARTS</title>
	
	<?php wp_head(); ?>
</head>
<body>
	
	
	<!-- Navigation Bar -->
	<div class="nav-container">
		<div id="slideout-menu">
			<div id="faux"></div>
			<div id="logo-img">
				<a href="<?php echo site_url(''); ?>">
					<img src="<?php echo site_url('/wp-content/uploads/2018/06/BLEEDING-HEARTS-Small.png'); ?>" alt="Bleeding Hearts Logo"><p>BLEEDING HEARTS</p>
				</a>
			</div>
			<div id="menu-icon">
				<div class="line1"></div>
				<div class="line2"></div>
				<div class="line3"></div>
			</div>
		</div>
		
		<nav>
			<div id="logo-img">
				<a href="<?php echo site_url(''); ?>">
					<img src="<?php echo site_url('/wp-content/uploads/2018/06/BLEEDING-HEARTS-Small.png'); ?>" alt="Bleeding Hearts Logo"><p>BLEEDING HEARTS</p>
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
	
	<div id="menu-container" class="slide-unactive">
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