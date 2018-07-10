<?php
/**
* The template for displaying the nyt_plugin page
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
            get_template_part( 'template-parts/content', 'nyt-plugin' );
		endwhile; // End of the loop.
		?>
    </main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
?>
