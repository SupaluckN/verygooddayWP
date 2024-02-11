<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no `home.php` file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vgday5599
 */

get_header();
?>

<?php 

$page_id = get_option( 'page_for_posts' );
?>

<div class="container mx-auto py-16 px-8">
<div class="grid grid-cols-6 gap-4">
    <?php 
    
        $lastBlog = new WP_Query('type=post&posts_per_page=1');

        if($lastBlog->have_posts()):

        while($lastBlog->have_posts()): $lastBlog->the_post(); ?>

        <?php get_template_part( 'template-parts/content/content-home' ); ?>
    
        <?php endwhile;
        
        endif;
        ?>

</div><!-- /.col -->
</div><!-- /.row -->

<?php
get_footer();
