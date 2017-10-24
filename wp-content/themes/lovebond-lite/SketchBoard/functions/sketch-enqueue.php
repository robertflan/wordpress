<?php
/***********************************************
*  ENQUQUE CSS AND JAVASCRIPT
************************************************/
function lovebond_lite_theme_stylesheet()
{
	global $is_IE;
	$theme = wp_get_theme();
	
	// BEGIN: CSS
	wp_enqueue_style( 'google-font-courgette','//fonts.googleapis.com/css?family=Courgette&subset=latin,latin-ext', false, $theme->Version);
	wp_enqueue_style( 'google-font-opensans','//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300,800&subset=latin,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext,cyrillic', false, $theme->Version);
	// Font Awesome CSS
	wp_enqueue_style('font-awesome', get_template_directory_uri().'/css/font-awesome.css', false, $theme->Version);
	// Wedding Font CSS
	wp_enqueue_style('wedding-font-styles', get_template_directory_uri().'/css/wedding-font-styles.css', false, $theme->Version);
	// Animation CSS
	wp_enqueue_style('animations-wedding', get_template_directory_uri().'/css/animations-wedding.css', false, $theme->Version);
	wp_enqueue_style('animations', get_template_directory_uri().'/css/animations.css', false, $theme->Version);
	// Theme CSS
	wp_enqueue_style( 'lovebond-stylesheet', get_stylesheet_uri() );
	// Bootstrap CSS
	wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css', false, $theme->Version);
	
	// END: CSS

	if($is_IE ) {
	// BEGIN: IE CSS
		wp_enqueue_style('ie-style', get_template_directory_uri().'/css/ie-style.css', false, $theme->Version  );
		wp_enqueue_style('animation-ie', get_template_directory_uri().'/css/animations-ie-fix.css', false, $theme->Version);
		wp_enqueue_style('font-awesome-ie7', get_template_directory_uri().'/css/font-awesome-ie7.css', false, $theme->Version );

	// END: IE CSS
	}

	// BEGIN: JQUERY
	wp_enqueue_script('jquery');

	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script('comment-reply');

	// Bootstrap Carousel JS
	wp_enqueue_script('bootstrap',get_template_directory_uri().'/js/bootstrap.js', array('jquery'), '1.0', true );
	// Superfish JS
	wp_enqueue_script('superfish',get_template_directory_uri().'/js/superfish.js',array('jquery'),'1.0',true );
	// Scrollme JS
	wp_enqueue_script('css3-animate-it',get_template_directory_uri().'/js/css3-animate-it.js',array('jquery'),'1.0',true );
	wp_enqueue_script('scrollme',get_template_directory_uri().'/js/jquery.scrollme.js',array('jquery'),'1.0',true );
	// Nicescroll JS for submenu
	wp_enqueue_script('nicescroll', get_template_directory_uri().'/js/jquery.nicescroll.min.js',array('jquery'),'1.0', true);
	// Theme JS
	wp_enqueue_script('lovebond-js',get_template_directory_uri().'/js/script.js',array('jquery'),'1.0',true );

	// END: JQUERY
	
}
add_action('wp_enqueue_scripts', 'lovebond_lite_theme_stylesheet');

function lovebond_lite_head() {

	require_once( get_template_directory().'/includes/lovebond-custom-css.php' );
 
}
add_action('wp_head', 'lovebond_lite_head');