<?php get_header(); ?>

<!-- Latest Events Section -->
<main class="pad-adjust">
	<h2>Latest Events</h2>
	<div class="underline-container">
		<hr class="underline">
	</div>
	
	<section>
	
	<?php
	while(have_posts()){
		the_post();
	?>
	
	<div class="card">
		<img class="card-img" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Card Image">
	</div>
	
	<?php
	}
	wp_reset_query();	
	?>
	
	</section>
	
	<div class="pagination" style="width: 100%;">
		<?php echo paginate_links(); ?>
	</div>
</main>

<?php get_footer(); ?>