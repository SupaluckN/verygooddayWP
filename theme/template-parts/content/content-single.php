<?php
/**
 * Template part for displaying single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vgday5599
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("mt-3 rounded-b lg:rounded-b-none lg:rounded-r flex flex-col justify-between leading-normal"); ?>>

	<header class="mx-auto">
		<?php the_title( '<h1 class="text-gray-900 text-center font-bold text-4xl">', '</h1>' ); ?>

		
		
		<?php if ( ! is_page() ) : ?>
			<div class="mx-auto py-5 text-sm font-regular text-gray-900 flex">
				
				<?php vgday5599_entry_meta(); ?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->
	

	<?php the_post_thumbnail('large', array('class' => 'mx-auto py-4')); ?>
	


	<div <?php vgday5599_content_class('mt-5 py-5 px-3'); ?>>
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers. */
					__( 'Continue reading<span class="sr-only"> "%s"</span>', 'vgday5599' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			)
		);

		wp_link_pages(
			array(
				'before' => '<div>' . __( 'Pages:', 'vgday5599' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<hr class="mt-4 px-4">

	<div class="mt-3 text-sm font-regular text-gray-900 flex">
				<?php vgday5599_entry_meta(); ?>
	</div><!-- .entry-meta -->
</article><!-- #post-${ID} -->
