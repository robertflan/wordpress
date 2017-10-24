<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package germaine
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			&copy; <?php echo date( 'Y' ); ?> <?php esc_html( bloginfo( 'name' ) ); ?> &middot;
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'germaine' ) ); ?>"><?php printf( esc_html__( 'Powered by %s', 'germaine' ), 'WordPress' ); ?></a> &middot; 
			<?php printf( esc_html__( 'Theme: %1$s by %2$s', 'germaine' ), 'Germaine', '<a href="http://glam.ink" rel="designer">Glam.Ink</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
