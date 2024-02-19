<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package vgday5599
 */

get_header();
?>

	<section id="primary" class="relative p-4">
		<main id="main" class="max-w-6xl mx-auto">

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content/content', 'single' );

				if ( is_singular( 'post' ) ) {

					echo "<div class='hidden'>";
					// Previous/next post navigation.
					the_post_navigation(
						array(
							'next_text' => '<span aria-hidden="true>' . __( 'Next Post', 'vgday5599' ) . '</span> ' .
								'<span class="sr-only">' . __( 'Next post:', 'vgday5599' ) . '</span> <br/>' .
								'<span class="">%title</span>',
							'prev_text' => '<span aria-hidden="true">' . __( '', 'vgday5599' ) . '</span> ' .
								'<span class="sr-only ">' . __( 'Previous post:', 'vgday5599' ) . '</span> <br/>' .
								'<span class="bg-transparent hover:bg-vgd text-vgd font-semibold text-xl
								hover:text-white py-2 px-4 border border-vgd hover:border-transparent rounded
								flex flex-row items-center">
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
								<path stroke-linecap="round" stroke-linejoin="round" d="m11.25 9-3 3m0 0 3 3m-3-3h7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
								</svg>

								<span class="ml-1">%title</span>
								</span>',
						)
					);

					echo "</div>";
				}
				

				// End the loop.
			endwhile;
			?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
