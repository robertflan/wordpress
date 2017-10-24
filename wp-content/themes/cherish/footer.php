<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cherish
 */

?>

<div id="footer" role="contentinfo">
	<div class="widget_wrap">
	<?php
	if ( is_active_sidebar( 1 ) ) {
		echo '<ul class="footer_widget_1">';
			dynamic_sidebar( 1 );
		echo '</ul>';
	}
	if ( is_active_sidebar( 2 ) ) {
			echo '<ul class="footer_widget_2">';
			dynamic_sidebar( 2 );
		echo '</ul>';
	}
	if ( is_active_sidebar( 3 ) ) {
			echo '<ul class="footer_widget_3">';
			dynamic_sidebar( 3 );
		echo '</ul>';
	}
	?>
	</div>
	<?php
	if ( ! get_theme_mod( 'cherish_details' ) ) {
		echo '<div class="divider"></div>';
	}
	?>
	<div class="footer-credit">
		<span class="fa-angle-up fa" title="<?php esc_attr_e( 'Back to the top', 'cherish' ); ?>"></span>
		
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a><span class="sep"> | </span>
		<a href="http://wordpress.org/"><?php printf( esc_html__( 'Proudly powered by %s', 'cherish' ), 'WordPress' ); ?></a>
		<span class="sep"> | </span>
		<a href="<?php echo esc_url( 'https://wptema.se/cherish' ); ?>" rel="nofollow"><?php printf( esc_html__( 'Theme: %1$s by Carolina', 'cherish' ), 'Cherish' ); ?></a>
	</div> <!--End Footer Credit -->
	
</div> <!--End Footer -->
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>
