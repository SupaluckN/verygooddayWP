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

	<header class="mb-3">

		<?php 

		vgday5599_post_thumbnail('full', array('class' => 'rounded-lg'))
		?>
		
		
	</header><!-- .entry-header -->

	<div class="entry-footer flex flex-row mb-4">
		<?php vgday5599_entry_meta(); ?>
</div><!-- .entry-footer -->

	
	<?php the_title( sprintf( '<h2 class="text-4xl font-bold"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), 
	'</a></h2>' ); ?>

	<div <?php vgday5599_content_class( 'entry-content' ); ?>>
		
	</div><!-- .entry-content -->

	

	

</article><!-- #post-${ID} -->
