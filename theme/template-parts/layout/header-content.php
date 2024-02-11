<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vgday5599
 */

?>

<header id="masthead" class="fixed top-0 z-10 w-full flex justify-between items-center backdrop-filter backdrop-blur-lg bg-opacity-50 shadow-sm px-4 px-12 h-20">

	
	<div class="site-branding text-lg font-bold">

			<h1 class=""><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

			<?php
			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

	<nav id="site-navigation" aria-label="<?php esc_attr_e( 'Main Navigation', '_tw' ); ?>">
		<button aria-controls="primary-menu" aria-expanded="true" class="hidden"><?php  esc_html_e( 'Toggle', '_tw' );  ?>
			
		</button>

		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				'items_wrap'     => '<ul id="%1$s" 
				class="%2$s" aria-label="submenu">%3$s</ul>',
			)
		);
		?>
	</nav><!-- #site-navigation -->


</header><!-- #masthead -->





