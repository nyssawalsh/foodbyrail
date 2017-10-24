<?php
/*
Template Name: Team
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div class="main-wrap full-width" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
		<header>
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header>
		<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
		<div class="entry-content">
			
			<section class="team-display">
				
				<article>
					<h3>MARCUS S. KOSTOLICH</h3>
					<h5>President & Chief Executive Officer</h5>
					<p>Marc is the founder of Food by Rail, and has been a leader in transportation and logistics for more than 40 years. He developed and introduced new railroad car technologies for GATX and his experience includes creating and managing a new transportation technology business with the use of international intermodal tank containers in a UP service called BulkTainer Service, and the design and introduction of a new flatbed container service called FlatTainer Service.</p>
				</article>
				
				<article>
					<h3>KEVIN McKINNEY</h3>
					<h5>EXECUTIVE VICE PRESIDENT</h5>
					<h5>CHIEF OPERATING OFFICER</h5>
					<p>Kevin has over four decades of experience in transportation and logistics. In addition to creating several companies, including a short line railroad, he has provided transportation consulting services to a number of clients in the public and private sectors. He developed refrigerated boxcar services for ExpressTrak LLC, a company designed to ship produce on Amtrak passenger trains, and later founded and served as CEO of Green Zephyr, Inc. Most recently he was director of refrigerated and regional marketing for a national transportation company.</p>
				</article>
				
				<article>
					<h3>ALEXANDER H. JORDAN</h3>
					<h5>EXECUTIVE VICE PRESIDENT–OPERATIONS</h5>

					<p>Alex has had experience in marine and railroad transportation and operation for over 40 years. He began his career with Kimberly-Clark Corporation; received a political appointment to work for the Interstate Commerce Commission; and then held management positions with the Denver & Rio Grande Western Railroad, Southern Pacific Lines, and Norfolk Southern Railroad. He has worked extensively in strategic planning and operations, and has been a transportation consultant for railroad and marine container issues. He also served as president and chief operating officer of NYPort Marine Terminal Development Corporation, a subsidiary of a major international marine container terminal company. Most recently he has been heavily involved in railroad and truck transportation of perishable food products, where he worked for several national transportation companies.</p>
				</article>
				
				
			
			</section>
			
			<section class="team-display secondary">
					
					<article >
						<h3>MICHAEL BEGNAUD</h3>
						<h5>VICE PRESIDENT OF SALES</h5>

						<p>Mike has been in the transportation industry for 40 years, with experience in sales, rail logistics, and as an operator of refrigerated boxcars.</p>
					</article>
					
					<article>
						<h3>DAN CODDINGTON</h3>
						<h5>VICE PRESIDENT OF SALES, PROTEIN AND MIDWEST REGION</h5>
						<p>Dan served the railroad and air express transportation industries, most recently with refrigerated boxcar services.</p>
					</article>
					
					<article>
						<h3>HARRY L. BALLANCE</h3>
						<h5>VICE PRESIDENT OF WESTERN REGIONAL OPERATIONS</h5>
						<p>Harry’s rail industry career has been focused on operations and intermodal facilities for both the Union Pacific Railroad and Southern Pacific.</p>
					</article>
				</section>
			

		</div>
		<footer>
			<?php
				wp_link_pages(
					array(
						'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ),
						'after'  => '</p></nav>',
					)
				);
			?>
			<p><?php the_tags(); ?></p>
		</footer>
		<?php do_action( 'foundationpress_page_before_comments' ); ?>
		<?php comments_template(); ?>
		<?php do_action( 'foundationpress_page_after_comments' ); ?>
	</article>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>

</div>

<?php get_footer();
