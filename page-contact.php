<?php get_header(); ?>

<main id="contact">
	<div id="contact-head"><div></div><div>CONNECT WITH US</div></div>
	
	<section>
		<form>
			<input type="text" placeholder="Name" required="required"/><br/>
			<input type="text" placeholder="Email" required="required"/><br/>
			<input type="text" placeholder="Phone" required="required"/><br/>
			<textarea rows="6" placeholder="Message" required="required"></textarea><br/>
			<div class="btn-container">
				<button type="submit">Send</button>
			</div>
		</form>
		<div>
			<div class="my-info">
				<a href="mailto:bleedingheartsinc4k@gmail.com">
					<i class="fas fa-envelope"></i>
					<p>bleedingheartsinc4k@gmail.com</p>
				</a>
			</div><br/>
			<div>
				<a href="tel:3475815404">
					<i class="fas fa-phone"></i>
					<p>(347) 581-5404</p>
				</a>
			</div><br/>
			<div>
				<i class="fas fa-map-marker-alt"></i>
				<p>
					Bleeding Hearts, Inc.<br/>
					P.O. Box 1246<br/>
					Valley Steam, NY 11582
				</p>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>