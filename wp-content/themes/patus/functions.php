<?php
/**
 * Patus functions and definitions
 *
 * @package Patus
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 650; /* pixels */
}

if ( ! function_exists( 'patus_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function patus_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Patus, use a find and replace
	 * to change 'patus' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'patus', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'large-thumb', 650, 300, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'patus' ),
	) );

	// This theme styles the visual editor to resemble the theme style.
	add_editor_style( 'assets/css/editor-style.css' );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'patus_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 65,
		'width'       => 180,
		'flex-width'  => true,
		'flex-height' => true,
	) );
}
endif; // patus_setup
add_action( 'after_setup_theme', 'patus_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function patus_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'patus' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'patus_widgets_init' );

/**
 * Register Dosis Google font for Patus.
 *
 * @return string
 */
function patus_font_url() {
	$font_url = '';
	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Dosis, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Dosis font: on or off', 'patus' ) ) {
		$font_url = add_query_arg( 'family', urlencode( 'Dosis:300' ), "//fonts.googleapis.com/css" );
	}

	return $font_url;
}


/**
 * Enqueue scripts and styles.
 */
function patus_scripts() {

	// Add Dosis font, used in the main stylesheet.
	wp_enqueue_style( 'patus-dosis', patus_font_url(), array(), null );

	// Load our main stylesheet.
	wp_enqueue_style( 'patus-style', get_stylesheet_uri() );

	// Add extra styling to patus-style
	$primary   = get_theme_mod( 'ft_primary_color', '41b7d8' );
	$secondary = get_theme_mod( 'ft_secondary_color', 'f55d2d' );
	$custom_css = "
                a {color: #{$primary};
                    }
                input[type=\"reset\"],
                input[type=\"submit\"],
                input[type=\"submit\"] {
                    background: #{$primary};
                }
                #site-navigation.main-navigation.toggled .menu-toggle span,
                #site-navigation .menu ul li a:hover,
                #site-navigation .menu ul li a:focus,
                #site-navigation .menu ul ul li a:hover,
                #site-navigation .menu ul ul li a:focus,
                #site-navigation .nav-menu ul li a:hover,
                #site-navigation .nav-menu ul li a:focus,
                #site-navigation .nav-menu ul ul li a:hover,
                #site-navigation .nav-menu ul ul li a:focus,
                #site-navigation .menu li a:hover,
                #site-navigation .nav-menu li a:hover,
                #site-navigation .menu li.current-menu-item a,
                #site-navigation .menu li.current_page_item a,
                #site-navigation .nav-menu li.current-menu-item a,
                #site-navigation .nav-menu li.current_page_item a,
                .more-link,.more-link:hover,
                .loop-pagination a:hover,
                .loop-pagination span:hover,
                .loop-pagination a.current,
                .loop-pagination span.current,
                .entry-footer .post-categories li a:hover,
                .entry-footer .post-tags li a:hover,
                .post-navigation a:hover,
                .post-categories li a:hover,
                .post-tags li a:hover,
                #comments .comment .comment-wrapper .comment-meta .comment-time:hover,
                #comments .comment .comment-wrapper .comment-meta .comment-reply-link:hover,
                #comments .comment .comment-wrapper .comment-meta .comment-edit-link:hover,
                .widget a:hover,
                .widget #calendar_wrap a {
                    color: #{$secondary};
                }
                input[type=\"reset\"]:hover,
                input[type=\"submit\"]:hover,
                input[type=\"submit\"]:hover,
                .entry-meta {
                	background: #{$secondary};
                }";
    wp_add_inline_style( 'patus-style', $custom_css );

	// Enqueue jQuery
	wp_enqueue_script( 'patus-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20120206', true );
	wp_enqueue_script( 'patus-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'patus_scripts' );

/**
 * Enqueue scripts for admin page only: Theme info page
 */
function patus_admin_scripts() {
	wp_enqueue_style('ft_admincss', get_template_directory_uri() . '/assets/css/theme-info.css');
}

add_action('admin_enqueue_scripts', 'patus_admin_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Add theme info page
 */
require get_template_directory() . '/inc/dashboard.php';
