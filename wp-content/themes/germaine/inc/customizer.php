<?php
/**
 * germaine Theme Customizer.
 *
 * @package germaine
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function germaine_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'germaine_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function germaine_customize_preview_js() {
	wp_enqueue_script( 'germaine_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20160308', true );
}
add_action( 'customize_preview_init', 'germaine_customize_preview_js' );

function germaine_customize_control_js() {
    wp_enqueue_script( 'germaine-customizer-controls', get_template_directory_uri() . '/js/customizer-controls.js', array( 'customize-controls' ), '20160214.003', true );
}
add_action( 'customize_controls_init', 'germaine_customize_control_js' );
