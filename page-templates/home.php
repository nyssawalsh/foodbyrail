<?php
/*
Template Name: Home
*/
get_header(); ?>


<div class="home-container">
	<div class="home-hero">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/home-logo.jpg" alt="Food By Rail">
		<?php do_action( 'foundationpress_before_content' ); ?>
		<?php while ( have_posts() ) : the_post(); ?>
		
		<div class="home-hero-content callout">
			<?php the_content(); ?>
			
			<div class="button-container">
				<button class="button" href="contact.php">Contact</button>
			</div>
			
		</div>
		
		<?php endwhile;?>
		<?php do_action( 'foundationpress_after_content' ); ?>
	</div>
	
	<div class="home-callouts">
		
		<a href="front.php">
			<h2>How it works</h2>
			<div class="callout-image">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/how-it-works.jpeg">
				<figcaption></figcaption>
			</div>
			
			
			<p>Transform your supply chain, and give your customers a competitive edge with the green solutions from Food By Rail Logistics. </p>
		</a>
		<a href="front.php">
			<h2>Who we are</h2>
			<div class="callout-image">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/who-we-are.jpeg">
				<figcaption></figcaption>
			</div>
			
			
			<p>Lorem ipsum solor sit amet, amencit redraq tur.</p>
		</a>
		<a href="front.php">
			<h2>Contact us</h2>
			<div class="callout-image">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/contact-us.jpeg">
				<figcaption></figcaption>
			</div>
			
			
			<p>Lorem ipsum solor sit amet, amencit redraq tur.</p>
		</a>
		
	</div>
	
</div>










<?php get_footer();
