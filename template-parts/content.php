<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry'); ?>>
	<header>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php foundationpress_entry_meta(); ?>
		
		
	</header>
	
	<section class="news-content align-top">
		
		<?php if ( has_post_thumbnail() ) : ?>
		
			<div class="featured-image" style="background-image: url(<?php the_post_thumbnail_url(); ?>)"></div>
		
		<?php endif; ?>
		
		<div class="entry-content">
			
			
			<?php the_content( __( 'Continue reading...', 'foundationpress' ) ); ?>
		</div>
		
		
		
		
	</section>
	
	
	<footer>
		<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
	</footer>
	<hr />
</div>
