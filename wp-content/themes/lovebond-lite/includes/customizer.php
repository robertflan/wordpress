<?php

function lovebond_lite_customize_register( $wp_customize ) {

	$wp_customize->remove_control('header_textcolor');

	// ====================================
	// = Lovebond Lite Theme Pannel
	// ==================================== 
	$wp_customize->add_panel( 'sketchthemes', array(
		'title' => __( 'Static Front Page Options', 'lovebond-lite'),
		'description' => __( 'First Select "Static Front Page -> Front page displays" to "A static page"', 'lovebond-lite'),
		'priority' => 121,
		'active_callback' => 'is_front_page'
	) );

	// ====================================
	// = Lovebond Lite Theme Sections
	// ====================================
	$wp_customize->add_section( 'home_page1_settings' , array(
		'title' => __('First Landing Section','lovebond-lite'),
		'panel' => 'sketchthemes'
	) );
	$wp_customize->add_section( 'home_page2_settings' , array(
		'title' => __('Second Landing Section','lovebond-lite'),
		'panel' => 'sketchthemes'
	) );
	$wp_customize->add_section( 'home_page3_settings' , array(
		'title' => __('Third Landing Section','lovebond-lite'),
		'panel' => 'sketchthemes'
	) );
	$wp_customize->add_section( 'home_blog_settings' , array(
		'title' => __('Blog Section','lovebond-lite'),
		'panel' => 'sketchthemes'
	) );

	$wp_customize->add_section( 'social_settings' , array(
		'priority' => 3,
		'title' => __('Social Links','lovebond-lite'),

	) );
	$wp_customize->add_section( 'footer_settings' , array(
		'priority' => 4,
		'title' => __('Footer Settings','lovebond-lite'),
	) );

	// ====================================
	// = General Settings Sections
	// ====================================
	$wp_customize->add_setting( 'lovebond_lite_pri_color', array(
		'default'		   => '#ED2437',
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'lovebond_lite_pri_color', array(
		'label'	   => __( 'Color Scheme', 'lovebond-lite' ),
		'section'	 => 'colors',
	) ) );

	// ====================================
	// = Header Settings Sections
	// ====================================
	$wp_customize->add_setting( 'lovebond_lite_logo_img', array(
		'default'		   => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control(  new WP_Customize_Image_Control( $wp_customize, 'lovebond_lite_logo_img', array(
		'priority' => 1,
		'label' => __( 'Logo Image', 'lovebond-lite' ),
		'section' => 'title_tagline',
		'mime_type' => 'image',
	) ) );

	
	$wp_customize->add_setting( 'lovebond_lite_fbook_link', array(
		'default'		=> '#',
		'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control('lovebond_lite_fbook_link', array(
		'label' => __('Facebook Link', 'lovebond-lite'),
		'section' => 'social_settings',
	));

	$wp_customize->add_setting( 'lovebond_lite_twitter_link', array(
		'default'		=> '#',
		'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control('lovebond_lite_twitter_link', array(
		'label' => __('Twitter Link', 'lovebond-lite'),
		'section' => 'social_settings',
	));
	$wp_customize->add_setting( 'lovebond_lite_gplus_link', array(
		'default'		=> '#',
		'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control('lovebond_lite_gplus_link', array(
		'label' => __('Google Plus Link', 'lovebond-lite'),
		'section' => 'social_settings',
	));
	$wp_customize->add_setting( 'lovebond_lite_pinterest_link', array(
		'default'		=> '#',
		'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control('lovebond_lite_pinterest_link', array(
		'label' => __('pinterest Link', 'lovebond-lite'),
		'section' => 'social_settings',
	));
	$wp_customize->add_setting( 'lovebond_lite_skype_link', array(
		'default'		=> '#',
		'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control('lovebond_lite_skype_link', array(
		'label' => __('skype Link', 'lovebond-lite'),
		'section' => 'social_settings',
	));
	$wp_customize->add_setting( 'lovebond_lite_instagram_link', array(
		'default'		=> '#',
		'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control('lovebond_lite_instagram_link', array(
		'label' => __('instagram Link', 'lovebond-lite'),
		'section' => 'social_settings',
	));
	$wp_customize->add_setting( 'lovebond_lite_vk_link', array(
		'default'		=> '#',
		'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control('lovebond_lite_vk_link', array(
		'label' => __('vk Link', 'lovebond-lite'),
		'section' => 'social_settings',
	));
	$wp_customize->add_setting( 'lovebond_lite_whatsapp_link', array(
		'default'		=> '#',
		'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control('lovebond_lite_whatsapp_link', array(
		'label' => __('whatsapp Link', 'lovebond-lite'),
		'section' => 'social_settings',
	));
	$wp_customize->add_setting( 'lovebond_lite_dribbble_link', array(
		'default'		=> '#',
		'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control('lovebond_lite_dribbble_link', array(
		'label' => __('dribbble Link', 'lovebond-lite'),
		'section' => 'social_settings',
	));
	
	// ====================================
	// = Home Page Settings Sections
	// ====================================
	$wp_customize->add_setting( 'lovebond_lite_home_blog_sec', array(
		'default'		   => 'on',
		'sanitize_callback' => 'lovebond_lite_sanitize_on_off',
	) );
	$wp_customize->add_control( 'lovebond_lite_home_blog_sec', array(
		'label' => __( 'Home Blog Section ON/OFF', 'lovebond-lite' ),
		'section' => 'home_blog_settings',
		'type' => 'radio',
		'choices' => array(
			'on' =>'ON',
			'off'=> 'OFF'
		),
	) );

	$wp_customize->add_setting( 'lovebond_lite_home_blog_title', array(
		'default'		=> __('Recent Blog', 'lovebond-lite'),
		'sanitize_callback' => 'lovebond_lite_sanitize_textarea',
	));
	$wp_customize->add_control('lovebond_lite_home_blog_title', array(
		'label' => __('Home Blog Section Title','lovebond-lite'),
		'section' => 'home_blog_settings',
	));

	$wp_customize->add_setting( 'lovebond_lite_home_blog_num', array(
		'default'		=> '3',
		'sanitize_callback' => 'lovebond_lite_sanitize_textarea',
	));
	$wp_customize->add_control('lovebond_lite_home_blog_num', array(
		'label' => __('Number Of Blogs','lovebond-lite'),
		'section' => 'home_blog_settings',
	));

	$pages = get_pages();
	$lovebond_lite_landing_pages = array();
	$lovebond_lite_landing_pages['none'] = __('Select Page', 'lovebond-lite');
	foreach ( $pages as $page ) {
		$key = $page->ID;
		$lovebond_lite_landing_pages[$key] = $page->post_title;
	}
	// First Landing Section
	$wp_customize->add_setting( 'lovebond_lite_rat_first_section', array(
		'default'           => '',
		'sanitize_callback' => 'lovebond_lite_sanitize_pages'
	) );
	$wp_customize->add_control( 'lovebond_lite_rat_first_section', array(
		'type' => 'select',
		'section' => 'home_page1_settings',
		'label' => __( 'Select page for first landing section.', 'lovebond-lite' ),
		'choices' => $lovebond_lite_landing_pages,
	) );
	$wp_customize->add_setting( 'lovebond_lite_rat_first_section_desc', array(
		'default'		=> __('Write small description here...', 'lovebond-lite'),
		'sanitize_callback' => 'lovebond_lite_sanitize_textarea',
	));
	$wp_customize->add_control('lovebond_lite_rat_first_section_desc', array(
		'label' => __('Home First Section Description','lovebond-lite'),
		'description' => __('Enter content for Home First Section', 'lovebond-lite'),
		'section' => 'home_page1_settings',
	));
	// Second Landing Section
	$wp_customize->add_setting( 'lovebond_lite_rat_second_section', array(
		'default'           => '',
		'sanitize_callback' => 'lovebond_lite_sanitize_pages'
	) );
	$wp_customize->add_control( 'lovebond_lite_rat_second_section', array(
		'type' => 'select',
		'section' => 'home_page2_settings',
		'label' => __( 'Select page for second landing section.', 'lovebond-lite' ),
		'choices' => $lovebond_lite_landing_pages,
	) );
	$wp_customize->add_setting( 'lovebond_lite_rat_second_section_desc', array(
		'default'		=> __('Write small description here...', 'lovebond-lite'),
		'sanitize_callback' => 'lovebond_lite_sanitize_textarea',
	));
	$wp_customize->add_control('lovebond_lite_rat_second_section_desc', array(
		'label' => __('Home Second Section Description','lovebond-lite'),
		'description' => __('Enter content for Home Second Section', 'lovebond-lite'),
		'section' => 'home_page2_settings',
	));
	// Third Landing Section
	$wp_customize->add_setting( 'lovebond_lite_rat_third_section', array(
		'default'           => '',
		'sanitize_callback' => 'lovebond_lite_sanitize_pages'
	) );
	$wp_customize->add_control( 'lovebond_lite_rat_third_section', array(
		'type' => 'select',
		'section' => 'home_page3_settings',
		'label' => __( 'Select page for third landing section.', 'lovebond-lite' ),
		'choices' => $lovebond_lite_landing_pages,
	) );
	$wp_customize->add_setting( 'lovebond_lite_rat_third_section_desc', array(
		'default'		=> __('Write small description here...', 'lovebond-lite'),
		'sanitize_callback' => 'lovebond_lite_sanitize_textarea',
	));
	$wp_customize->add_control('lovebond_lite_rat_third_section_desc', array(
		'label' => __('Home Third Section Description','lovebond-lite'),
		'description' => __('Enter content for Home Third Section', 'lovebond-lite'),
		'section' => 'home_page3_settings',
	));

	// ====================================
	// = Blog Page Settings Sections
	// ====================================
	$wp_customize->add_setting( 'lovebond_lite_blogpage_heading', array(
		'default'		=> __('Blog', 'lovebond-lite'),
		'sanitize_callback' => 'lovebond_lite_sanitize_textarea',
	));
	$wp_customize->add_control('lovebond_lite_blogpage_heading', array(
		'label' => __('Posts Page Heading','lovebond-lite'),
		'section' => 'static_front_page',
	));

	// ====================================
	// = Footer Settings Sections
	// ====================================
	$wp_customize->add_setting( 'lovebond_lite_copyright', array(
		'default'		=> __('Proudly Powered by WordPress', 'lovebond-lite'),
		'sanitize_callback' => 'lovebond_lite_sanitize_textarea',
	));
	$wp_customize->add_control('lovebond_lite_copyright', array(
		'label' => __('Copyright Text','lovebond-lite'),
		'section' => 'footer_settings',
	));

}
add_action( 'customize_register', 'lovebond_lite_customize_register' );

// sanitize textarea
function lovebond_lite_sanitize_textarea( $input ) {
	return wp_kses_post( force_balance_tags( $input ) );
}

function lovebond_lite_sanitize_on_off( $input ) {
	$valid = array(
		'on' =>'ON',
		'off'=> 'OFF'
	);
 
	if ( array_key_exists( $input, $valid ) ) {
		return $input;
	} else {
		return '';
	}
}

function lovebond_lite_sanitize_background_repeat( $input ) {
	$valid = array(
		'no-repeat'  => __('No Repeat', 'lovebond-lite'),
		'repeat'	 => __('Tile', 'lovebond-lite'),
		'repeat-x'   => __('Tile Horizontally', 'lovebond-lite'),
		'repeat-y'   => __('Tile Vertically', 'lovebond-lite'),
	);
 
	if ( array_key_exists( $input, $valid ) ) {
		return $input;
	} else {
		return '';
	}
}

function lovebond_lite_sanitize_background_position( $input ) {
	$valid = array(
		'left'	   => __('Left', 'lovebond-lite'),
		'center'	 => __('Center', 'lovebond-lite'),
		'right'	  => __('Right', 'lovebond-lite'),
	);
 
	if ( array_key_exists( $input, $valid ) ) {
		return $input;
	} else {
		return '';
	}
}

function lovebond_lite_sanitize_background_attachment( $input ) {
	$valid = array(
		'scroll'	 => __('Scroll', 'lovebond-lite'),
		'fixed'	  => __('Fixed', 'lovebond-lite'),
	);
 
	if ( array_key_exists( $input, $valid ) ) {
		return $input;
	} else {
		return '';
	}
}

function lovebond_lite_active_breadcrumb_image( $control ) {
	if ( $control->manager->get_setting('breadcrumbbg_image')->value() != '' ) {
		return true;
	} else {
		return false;
	}
}

function lovebond_lite_sanitize_pages( $input ) {
	$pages = get_pages();
	$valid = array();
	$valid['none'] = __('Select Page', 'lovebond-lite');
	foreach ( $pages as $page ) {
		$key = $page->ID;
		$valid[$key] = $page->post_title;
	}
	
	if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}
?>