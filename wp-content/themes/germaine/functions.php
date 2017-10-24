<?php
/*--------------------------------------------------------------
 * germaine functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package germaine
--------------------------------------------------------------*/

if ( ! function_exists( 'germaine_setup' ) ) :
/*--------------------------------------------------------------
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
--------------------------------------------------------------*/
function germaine_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on germaine, use a find and replace
	 * to change 'germaine' to the name of your theme in all the template files.
	--------------------------------------------------------------*/
	load_theme_textdomain( 'germaine', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	--------------------------------------------------------------*/
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	--------------------------------------------------------------*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'germaine' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	--------------------------------------------------------------*/
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	--------------------------------------------------------------*/
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'germaine_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Enable support for Custom Logo. See https://codex.wordpress.org/Theme_Logo
	add_theme_support( 'custom-logo', array(
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title' ),
	) );

	// Visual editor stylesheet
	add_editor_style( 'editor.css' );
}
endif;
add_action( 'after_setup_theme', 'germaine_setup' );

/*--------------------------------------------------------------
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
--------------------------------------------------------------*/
function germaine_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'germaine_content_width', 640 );
}
add_action( 'after_setup_theme', 'germaine_content_width', 0 );

/*--------------------------------------------------------------
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
--------------------------------------------------------------*/
function germaine_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'germaine' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'germaine_widgets_init' );

/*--------------------------------------------------------------
* Pagination
--------------------------------------------------------------*/
function germaine_pagination_links() {
  the_posts_pagination( array(
    'mid_size'  => 5,
    'prev_text' => __( 'Previous', 'germaine' ),
    'next_text' => __( 'Next', 'germaine' ),
  ) );
}

/*--------------------------------------------------------------
 * Enqueue scripts and styles.
--------------------------------------------------------------*/
function germaine_scripts() {
	// Load latest css version
	wp_enqueue_style( 'germaine-style', get_stylesheet_directory_uri() . '/style.css', array(), '2.6', "all" );

	wp_enqueue_style( 'germaine-googlefonts', 'https://fonts.googleapis.com/css?family=Great+Vibes%7CLato:300,300i,900&subset=latin-ext', null, array(), 'all' );

	wp_enqueue_script( 'germaine-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'germaine-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'germaine_scripts' );

/*--------------------------------------------------------------
 * Japanese fonts
--------------------------------------------------------------*/
function glamink_jp_fonts() {
	if (get_locale() == 'ja') :?>
		<style type="text/css">
			body {
				font-family: "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", Osaka, "メイリオ", Meiryo, sans-serif !important;
			}
		</style>
		<?php
	endif;
}
add_action( 'wp_head', 'glamink_jp_fonts' );

/*--------------------------------------------------------------
 * Custom header
--------------------------------------------------------------*/
require get_template_directory() . '/inc/custom-header.php';

/*--------------------------------------------------------------
 * Custom template tags for this theme.
--------------------------------------------------------------*/
require get_template_directory() . '/inc/template-tags.php';

/*--------------------------------------------------------------
 * Custom functions that act independently of the theme templates.
--------------------------------------------------------------*/
require get_template_directory() . '/inc/extras.php';

/*--------------------------------------------------------------
 * Customizer additions.
--------------------------------------------------------------*/
require get_template_directory() . '/inc/customizer.php';

/*--------------------------------------------------------------
 * Load Jetpack compatibility file.
--------------------------------------------------------------*/
require get_template_directory() . '/inc/jetpack.php';
