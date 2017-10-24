<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Patus
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer clearfix" role="contentinfo">
		<div class="container">
			<div class="site-info">
				<?php esc_html_e( '&copy;', 'patus' ); ?> <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>
				<?php printf( esc_html__( ' - Theme: %1$s by %2$s.', 'patus' ), 'Patus', '<a href="'. esc_url( esc_html__( 'http://www.famethemes.com/', 'patus' ) ) .'" rel="designer">FameThemes</a>' ); ?>
			</div><!-- .site-info -->
			<div class="footer-social">
				<?php echo wp_kses_post(get_theme_mod('ft_general_right_footer')); ?>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
