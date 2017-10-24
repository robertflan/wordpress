<?php
/**
 * The template part for displaying header image
 *
 * @package WordPress
 * @subpackage SketchThemes
 * @since Lovebond Lite 1.0.0
 */
?>
<?php if( get_header_image() ) { ?>
<section id="slider-wrapper" class="home_intro">
	<!-- header image -->
	<div class="home-slider-wrapper">
		<img alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" class="ad-slider-image"  src="<?php header_image(); ?>" />
	</div>
</section>
<div class="sktwed-breadcrumbs"></div>
<?php } ?>