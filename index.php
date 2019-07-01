<?php get_header(); ?>

<hr class="break">

<!-- Latest Events Section -->
<main>
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
		<div class="card-image">
			<img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Card Image">
		</div>
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

<hr class="break">

<?php get_footer(); ?>