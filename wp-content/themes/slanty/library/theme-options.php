<?php
/**
 * Set up the default theme options
 *
 * @param string $name  The option name
 *
 * @since slanty 0.1
 */
// declare some default settings for options 
function slanty_theme_options() {
    //delete_option( 'slanty_theme_options' );
    $slanty_theme_options = array (
       'slanty_fonts'    => 'arial',
       'slanty_awesome'  => 'fa-instagram',
       'slanty_sochead'  => '',
       'slanty_facebook' => '',
       'slanty_twitter'  => '',
       'slanty_youtube'  => '',
       'slanty_gplus'    => ''
        );
    return get_option( 'slanty_theme_options', $slanty_theme_options );
}
// some sanity for checkbox
function slanty_sanitize_checkbox( $input ) {
	return absint( $input );
}

// Register the new customizer settings and controls
function slanty_customize_register($wp_customize) 
{

// Create string for options 
    $slanty_theme_options = slanty_theme_options();

/** Add a custom section into customizer
 * for social media options, fonts selector and excerpt control
 */
    $wp_customize->add_section( 'slanty_social', array(
        'title'       => __( 'Social Media', 'slanty' ),
        'priority'    => 25,
    ) );
    $wp_customize->add_section( 'slanty_select_fonts', array(
        'title'       => __( 'Fonts Selection', 'slanty' ),
        'description' => __( 'Dropdown List of Fonts for Theme', 'slanty' ),
        'priority'    => 30,
    ) );
    $wp_customize->add_section( 'slanty_excerpt', array(
        'title'       => __( 'Content Control', 'slanty' ),
        'priority'    => 35,
    ) );


// social header text
    $wp_customize->add_setting('slanty_theme_options[slanty_sochead]', array(
        'default'           => '',
        'type'              => 'option',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control('slanty_theme_options[slanty_sochead]', array(
        'label'    => __('Text for Social section', 'slanty'),
        'description' => __( 'Insert text to display at top of social links', 'slanty' ),
        'section'  => 'slanty_social',
        'settings' => 'slanty_theme_options[slanty_sochead]',
    ) );

// facebook
    $wp_customize->add_setting('slanty_theme_options[slanty_facebook]', array(
        'default'           => '',
        'type'              => 'option',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control('slanty_theme_options[slanty_facebook]', array(
        'label'    => __('Facebook', 'slanty'),
        'section'  => 'slanty_social',
        'settings' => 'slanty_theme_options[slanty_facebook]',
    ) );
	
// twitter
    $wp_customize->add_setting('slanty_theme_options[slanty_twitter]', array(
        'default'           => '',
        'type'              => 'option',
	'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control('slanty_theme_options[slanty_twitter]', array(
        'label'    => __('Twitter', 'slanty'),
        'section'  => 'slanty_social',
        'settings' => 'slanty_theme_options[slanty_twitter]',
    ) );

// gplus
    $wp_customize->add_setting('slanty_theme_options[slanty_gplus]', array(
        'default'           => '',
        'type'              => 'option',
	'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control('slanty_theme_options[slanty_gplus]', array(
        'label'    => __('Google Plus', 'slanty'),
        'section'  => 'slanty_social',
        'settings' => 'slanty_theme_options[slanty_gplus]',
    ) );
	
// instagram by default
    $wp_customize->add_setting('slanty_theme_options[slanty_instagram]', array(
        'default'           => '',
        'type'              => 'option',
	'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control('slanty_theme_options[slanty_instagram]', array(
       'label'    => __('Your Custom Social Link', 'slanty'),
       'section'  => 'slanty_social',
       'settings' => 'slanty_theme_options[slanty_instagram]',
    ) );

// Add a font-awesome icon for custom social
    $wp_customize->add_setting( 'slanty_theme_options[slanty_awesome]', array(
        'default'           => 'fa-instagram',
        'type'              => 'option',
        'sanitize_callback' => 'sanitize_text_field',
        'capability'        => 'edit_theme_options',
    ) );
    $wp_customize->add_control( 'slanty_theme_options[slanty_awesome]', array(
        'section'  => 'slanty_social',
        'settings' => 'slanty_theme_options[slanty_awesome]',
        'label'    => __( 'Select Custom Icon', 'slanty' ),
        'type'     => 'select',
        'choices'  => array( 
            'fa-apple'              => 'iTunes', 
            'fa-delicious'          => 'De.li.cio.us',
            'fa-rss-square'         => 'Feed (RSS)',
            'fa-instagram'          => 'Instagram',
            'fa-linkedin-square'    => 'LinkedIn',
            'fa-lastfm'             => 'Last FM',
            'fa-pinterest'          => 'Pinterest',
            'fa-youtube-play'       => 'Play button',
            'fa-slideshare'         => 'SlideShare',
            'fa-stumbleupon-circle' => 'StumbledUpon',
            'fa-tumblr-square'      => 'tumblr',
            'fa-youtube-square'     => 'YouTube icon',
            'fa-vimeo-square'       => 'Vimeo',
            'fa-vine'               => 'Vine',
            'fa-heart'              => 'Heart (for misc. link)' ),
    ) );
// ends social media choices 

// Add a Font control
    $wp_customize->add_setting( 'slanty_theme_options[slanty_fonts]', array(
        'default'           => 'Arial',
        'type'              => 'option',
        'sanitize_callback' => 'sanitize_text_field',
        'capability'        => 'edit_theme_options',
    ) );
    $wp_customize->add_control( 'slanty_theme_options[slanty_fonts]', array(
        'section'  => 'slanty_select_fonts',
        'settings' => 'slanty_theme_options[slanty_fonts]',
        'label'    => 'Google Font Selections',
        'type'     => 'select',
        'choices'  => array( 
            'Arial, Helvetica, sans-serif'         => 'Arial',
            'sans-serif'                           => 'Sans-Serif', 
            'Santion_Light'                        => 'Santion_Light',
            'akaDora'                              => 'akaDora',
            'Rock_Elegance'                        => 'Rock_Elegance',
            'Champagne_Limousines'                 => 'Champagne_Limousines',
            'Georgia, serif'                       => 'Georgia',
            '"Times New Roman", Times, serif'      => 'Times New Roman',
            '"Lucida Console", Monaco, monospace'  => 'Monaco Monospace',
            '"Comic Sans MS", cursive, sans-serif' => 'Comic San MS',
            'helvetica'                            => 'Helvetica',
            '"Arial Black", Gadget, sans-serif'    => 'Arial Black',
            'Verdana, Geneva, sans-serif'          => 'Verdana',
            'courier'                              => 'Courier' ),
    ) );

// Color options links
    $wp_customize->add_setting( 'slanty_link_color', array(
        'default'           => '#0055aa',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( 
    $wp_customize, 'slanty_link_color', array(
        'label'    => __( 'Links Color', 'slanty' ),
        'section'  => 'colors',
        'settings' => 'slanty_link_color',
    ) ) );

// Color options content background
    $wp_customize->add_setting('slanty_content_back', array(
        'default'           => '#fafafa',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( 
    $wp_customize, 'slanty_content_back', array(
        'label'    => __( 'Content Background Color', 'slanty' ),
        'section'  => 'colors',
        'settings' => 'slanty_content_back',
    ) ) );

// Color options content text
    $wp_customize->add_setting( 'slanty_text_color', array(
        'default'           => '#0055aa',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( 
    $wp_customize, 'slanty_text_color', array(
        'label'    => __( 'Content Text Color', 'slanty' ),
        'section'  => 'colors',
        'settings' => 'slanty_text_color',
    ) ) );

    // turn on or off header image
    $wp_customize->add_setting( 'slanty_header_toggle', array( 
	'default' => 1, 
        'sanitize_callback' => 'slanty_sanitize_checkbox',
       
    ) );
    $wp_customize->add_control( new WP_Customize_Control(
    $wp_customize, 'slanty_header_toggle', array(
 	'label'     => __( 'Show Header Image on Pages?', 'slanty' ),
        'description' => __( 'Check box to show header image on posts.', 'slanty' ),
	'section'   => 'header_image',
	'type'      => 'checkbox',
    ) ) );

    // turn on or off excerpt control
    $wp_customize->add_setting( 'slanty_excerpt', array( 
	'default' => 1, 
        'sanitize_callback' => 'slanty_sanitize_checkbox',
       
    ) );
    $wp_customize->add_control( new WP_Customize_Control(
    $wp_customize, 'slanty_excerpt', array(
 	'label'     => __( 'Show excerpt only?', 'slanty' ),
        'description' => __( 'Check box to force showing excerpt only, on blog page (even if set in Admin).', 'slanty' ),
	'section'   => 'slanty_excerpt',
	'type'      => 'checkbox',
    ) ) );

}

// create custom fonts style for content
function slanty_styles_method() {
    wp_enqueue_style( 'slanty-custom-style', get_template_directory_uri() . '/library/slanty-custom.css' ); 
    $options = get_option( 'slanty_theme_options' );

        if(!isset($options['slanty_fonts']) ) { $options['slanty_fonts'] = "arial"; }
        $custom_css = "
             body > div {
             font-family: {$options['slanty_fonts']} !important;
        }"; 
    wp_add_inline_style( 'slanty-custom-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'slanty_styles_method' );

// add theme mods output
function slanty_customize_css() {
    ?>
    <style type="text/css">
    a, .site-title a, .entry-header .entry-title a, #access a, a:link { 
        color:<?php echo get_theme_mod( 'slanty_link_color', '#003388' ); ?> !important; 
    }
    .wrap { 
        background-color:<?php echo get_theme_mod( 'slanty_content_back', '#fafafa' ); ?>; 
    }
    article.entry, .hentry, .wrap:not(a) { 
        color:<?php echo get_theme_mod( 'slanty_text_color', '#333333' ); ?>; 
    }
    </style>
<?php 
}
add_action( 'wp_head', 'slanty_customize_css');

add_action( 'customize_register', 'slanty_customize_register' );