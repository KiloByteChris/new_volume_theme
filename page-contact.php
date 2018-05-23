<?php
/**
* The template for displaying the portfolio page
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package new_volume
*/
get_header();
?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php
		while ( have_posts() ) :
			the_post();
            get_template_part( 'template-parts/content', 'contact' );
		endwhile; // End of the loop.
		?>
        <?php dynamic_sidebar( 'contact-form' ); ?>
    </main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
?>
