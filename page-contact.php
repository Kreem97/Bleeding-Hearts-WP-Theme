<?php get_header(); ?>

<main id="contact">
	<div id="contact-head">CONNECT WITH US</div>
	
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
				<i class="fas fa-envelope"></i>
				<!--label >EMAIL</label><br/-->
				<p>bleedingheartsinc4k@gmail.com</p>
			</div><br/>
			<div>
				<i class="fas fa-phone"></i>
				<!--label>PHONE</label><br/-->
				<p>(347) 581-5404</p>
			</div><br/>
			<div>
				<i class="fas fa-map-marker-alt"></i>
				<!--label>ADDRESS</label><br/-->
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