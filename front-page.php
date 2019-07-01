<?php get_header(); ?>

<!-- Display Banner -->
<div id="banner"></div>
<hr class="break">
<div class="display-text">
	<h1>What the mind can conceive and believe, and the heart desires, you can achieve.</h1>
</div>
<hr class="break">

<!-- Latest Events Section -->
<main>
	<h2>Latest Events</h2>
	<div class="underline-container">
		<hr class="underline">
	</div>
	
	<section>
	
	<?php
	$args = array(
	'post_type' => 'post',
	'posts_per_page' => '2'
	);
	
	$eventposts = new WP_Query($args);
	
	while($eventposts->have_posts()){
		$eventposts->the_post();
	?>
	
	<div class="card">
		<div class="card-image">
			<img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Card Image">
		</div>
	</div>
	
	<?php
	}
	wp_reset_query();	
	?>
	
	</section>
	
	<div class="btn-container">
		<a class="btn" href="<?php echo site_url('/events'); ?>">View All Events</a>
	</div>
</main>

<hr class="break">

<?php get_footer(); ?>