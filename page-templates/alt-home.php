<?php
/*
Template Name: Alt Home
*/
get_header(); ?>


<div class="home-hero-image">
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/alt-home-logo.png" alt="Food By Rail">
	
	<?php do_action( 'foundationpress_before_content' ); ?>
	<?php while ( have_posts() ) : the_post(); ?>
	
	<div class="home-hero-content callout">
		<?php the_content(); ?>
		
		<div class="button-container">
			<a class="button" href="/contact">Contact</a>
		</div>
		
	</div>
	
	<?php endwhile;?>
	<?php do_action( 'foundationpress_after_content' ); ?>
	
</div>

<div class="home-container">
	
	<div class="home-callouts">
		
		<a href="/how-it-works">
			<h2>Fast, Fresh and Safe</h2>
			<div class="callout-image">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/img/how-it-works.jpeg">
				<figcaption></figcaption>
			</div>
			
			
			<p>Transform your supply chain, and give your customers a competitive edge with the green solutions from Food By Rail Logistics. </p>
		</a>
		<a href="/who-we-are">
			<h2>Experience</h2>
			<div class="callout-image">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/img/who-we-are.jpeg">
				<figcaption></figcaption>
			</div>
			
			
			<p>Food By Rail Logistics is managed and operated by a team of experienced food and rail shipping experts.
</p>
		</a>
		<a href="/contact">
			<h2>Ship with us</h2>
			<div class="callout-image">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/img/contact-us.jpeg">
				<figcaption></figcaption>
			</div>
			
			
			<p>Reduce your costs and capture more market share when you choose Food By Rail as your supply chain partner.</p>
		</a>
		
	</div>
	
</div>

<?php get_footer();