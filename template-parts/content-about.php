<?php
/**
 * Template part for displaying the about page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package new_volume
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content about-page-content">
		<?php
		the_title( '<h2 class="entry-title">', '</h2>' );
		//the_content();
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'new_volume' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		// wp_link_pages( array(
		// 	'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'new_volume' ),
		// 	'after'  => '</div>',
		// ) );
		dynamic_sidebar( 'contact-info-about' );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
