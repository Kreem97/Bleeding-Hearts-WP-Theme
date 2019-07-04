<?php get_header(); ?>

<!-- Display Banner -->
<div id="banner"></div>
<div class="display-text">
	<h1>WHAT THE MIND CAN CONCEIVE AND BELIEVE, AND THE HEART DESIRES, YOU CAN ACHIEVE</h1>
</div>

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

<?php get_footer(); ?>