<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package new_volume
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<p>
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'new_volume' ) ); ?>">
				<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Proudly powered by %s', 'new_volume' ), 'WordPress' );
				?>
				</a>
			</p>
			<!-- <span class="sep"> | </span> -->
			<p>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'new_volume' ), 'new_volume', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
			</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
