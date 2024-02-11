<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vgday5599
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("col-start-2 col-span-4 mb-16"); ?>>

	<header class="mb-8">

		<?php 
		if ( has_post_thumbnail() ) { 
			the_post_thumbnail('full', array('class' => 'rounded-lg '));
		}
		
		?>
		
	</header><!-- .entry-header -->

	
	<?php the_title( sprintf( '<h2 class="text-2xl font-bold"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), 
	'</a></h2>' ); ?>

	<div <?php vgday5599_content_class( 'entry-content' ); ?>>
		
	</div><!-- .entry-content -->

	

	<footer class="entry-footer">
		<?php vgday5599_entry_footer(); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-${ID} -->
