<?php if ( 'page' == get_option( 'show_on_front' ) ) { ?>

	<?php get_header(); ?>

	<!-- LANDING PAGE SECTION SECTION -->
	<?php get_template_part( 'includes/front', 'first-landing-section' ); ?>

	<!-- LANDING PAGE SECTION SECTION -->
	<?php get_template_part( 'includes/front', 'second-landing-section' ); ?>

	<!-- LANDING PAGE SECTION SECTION -->
	<?php get_template_part( 'includes/front', 'third-landing-section' ); ?>

	<!-- EDITOR CONTENT -->
	<?php get_template_part( 'includes/front', 'editor-content' ); ?>

	<?php get_footer(); ?>

<?php } else {

	include( get_home_template() );

} ?>