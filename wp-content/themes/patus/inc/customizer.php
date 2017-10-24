<?php
/**
 * Patus Theme Customizer
 *
 * @package Patus
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function patus_customize_register( $wp_customize ) {

	$wp_customize->get_setting( 'blogname' )         ->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )  ->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' ) ->transport = 'postMessage';

	/* General Settings
	--------------------------------------------------------------------------*/
	$wp_customize->add_section( 'ft_general', array( 'title' => esc_html__( 'General Settings', 'patus' ), 'priority' => 1) );

	/* Sidebar Position */
	$wp_customize->add_setting( 'ft_general_sidebar', array(
        'default'           => 'right',
        'transport'         => 'refresh',
        'sanitize_callback' => 'ft_sanitize_select'
    ) );
    $wp_customize->add_control( 'ft_general_sidebar', array(
        'settings' => 'ft_general_sidebar',
        'section'  => 'ft_general',
        'label'    => esc_html__( 'Sidebar Position:', 'patus' ),
        'type'     => 'select',
        'choices'  => array(
                'left' => 'Left Sidebar',
                'right' => 'Right Sidebar'
            ),
        'priority' => '1'
    ) );

    /* Right Footer Text */
	$wp_customize->add_setting( 'ft_general_right_footer', array(
        'default'   => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'ft_sanitize_text'
    ) );
    $wp_customize->add_control( 'ft_general_right_footer', array(
        'settings' => 'ft_general_right_footer',
        'section'  => 'ft_general',
        'label'    => esc_html__( 'Right Footer Text:', 'patus' ),
        'type'     => 'textarea',
        'priority' => '2'
    ) );

	/* Social Settings
	--------------------------------------------------------------------------*/
	$wp_customize->add_section( 'ft_social', array( 'title' => esc_html__( 'Social Settings', 'patus' ), 'priority' => 2) );

	/* RSS */
    $wp_customize->add_setting( 'ft_social_rss', array(
        'default'   => get_bloginfo('rss_url'),
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_url_raw'
    ) );
    $wp_customize->add_control( 'ft_social_rss', array(
        'settings' => 'ft_social_rss',
        'section'  => 'ft_social',
        'label'    => esc_html__( 'RSS Feed:', 'patus' ),
        'priority' => '1'
    ) );

    /* Email */
    $wp_customize->add_setting( 'ft_social_email', array(
        'default'   => 'example@email.com',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_url_raw'
    ) );
    $wp_customize->add_control( 'ft_social_email', array(
        'settings' => 'ft_social_email',
        'section'  => 'ft_social',
        'label'    => esc_html__( 'Email Address:', 'patus' ),
        'priority' => '2'
    ) );

    /* Twitter */
    $wp_customize->add_setting( 'ft_social_twitter', array(
        'default'   => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_url_raw'
    ) );
    $wp_customize->add_control( 'ft_social_twitter', array(
        'settings' => 'ft_social_twitter',
        'section'  => 'ft_social',
        'label'    => esc_html__( 'Twitter Link:', 'patus' ),
        'priority' => '3'
    ) );

    /* FaceBook */
    $wp_customize->add_setting( 'ft_social_facebook', array(
        'default'   => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_url_raw'
    ) );
    $wp_customize->add_control( 'ft_social_facebook', array(
        'settings' => 'ft_social_facebook',
        'section'  => 'ft_social',
        'label'    => esc_html__( 'Facebook Link:', 'patus' ),
        'priority' => '4'
    ) );

    /* Google Plus */
    $wp_customize->add_setting( 'ft_social_google', array(
        'default'   => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_url_raw'
    ) );
    $wp_customize->add_control( 'ft_social_google', array(
        'settings' => 'ft_social_google',
        'section'  => 'ft_social',
        'label'    => esc_html__( 'Google Plus Link:', 'patus' ),
        'priority' => '4'
    ) );

    /* Colors Settings
    --------------------------------------------------------------------------*/
    
    /* Primary Color */
    $wp_customize->add_setting( 'ft_primary_color', array(
        'default'              => '#41b7d8',
        'transport'            => 'postMessage',
        'sanitize_callback'    => 'sanitize_hex_color_no_hash',
        'sanitize_js_callback' => 'maybe_hash_hex_color'
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ft_primary_color', array(
        'label'    => esc_html__( 'Primary Color', 'patus' ),
        'section'  => 'colors',
        'settings' => 'ft_primary_color',
        'priority' => 10,
    ) ) );

     /* Secondary Color */
    $wp_customize->add_setting( 'ft_secondary_color', array(
        'default'              => '#f55d2d',
        'transport'            => 'postMessage',
        'sanitize_callback'    => 'sanitize_hex_color_no_hash',
        'sanitize_js_callback' => 'maybe_hash_hex_color'
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ft_secondary_color', array(
        'label'    => esc_html__( 'Secondary Color', 'patus' ),
        'section'  => 'colors',
        'settings' => 'ft_secondary_color',
        'priority' => 10,
    ) ) );

}
add_action( 'customize_register', 'patus_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function patus_customize_preview_js() {
	wp_enqueue_script( 'patus_customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'patus_customize_preview_js' );

/**
 * Text Data Sanitization.
 */
function ft_sanitize_text($input) {
    return wp_kses_post(force_balance_tags($input));
}

/**
 * Select Data Sanitization.
 */
function ft_sanitize_select($input) {
    $valid = array(
        'left' => esc_html__('Left Sidebar', 'patus'),
        'right' => esc_html__('Right Sidebar', 'patus'),
    );
    if (array_key_exists($input, $valid)) {
        return $input;
    } else {
        return '';
    }
}
