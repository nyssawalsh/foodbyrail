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
			
			<div class="team-display">

			
			<?php
				
				$args = array (
					'child_of' => 17,
				    'sort_column' => 'menu_order'		
				);
				
				$posts = get_pages($args);
				foreach( $posts as $post ) : setup_postdata( $post );
				
			?>
			
			<article>
				<?php if( get_field('image') ): ?>
					<div class="team-member-photo" style="background-image: url(<?php the_field('image'); ?>)"></div>
				<?php endif; ?>
				
				<h3 class="text-center primary"><?php the_field('name'); ?></h3>
				<h5 class="text-center"><?php the_field('title'); ?></h5>
				
				<p class="team-member-description"><?php the_field('description'); ?></p>
			</article>
			
			<?php endforeach;
			wp_reset_postdata();?>
			
			</div>
			

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
