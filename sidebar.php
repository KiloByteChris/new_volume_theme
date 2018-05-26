<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package new_volume
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->

<?php /*if ( is_active_sidebar( 'contact-form' ) ) : ?>
	<div id="contact-form-sidebar" class="contact-form-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'contact-form' ); ?>
	</div><!-- #primary-sidebar -->

<?php endif; ?>
<?php if ( is_active_sidebar( 'contact-info-about' ) ) : ?>
		<div id="contact-info-about" class="contact-info-about-sidebar widget-area" role="complementary">
			<?php dynamic_sidebar( 'contact-info-about' ); ?>
		</div><!-- #primary-sidebar -->
		<?php endif; */?>
