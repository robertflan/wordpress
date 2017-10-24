<?php
/*
 * Use a child theme for customization (see http://codex.wordpress.org/Theme_Development and
 * http://codex.wordpress.org/Child_Themes).
 * @package WordPress - n/a
 * @subpackage slanty
 * @since slanty 0.1
 * © 2014 Larry Judd, Tradesouthwest.com
 */

include_once get_template_directory() . '/library/theme-options.php';

function slanty_setup() {
    
    // set width of external linked media players not defined
     global $content_width;
    if ( !isset( $content_width  ) ) {
        $content_width  = 720;
    }

    // custom editor style support
    add_editor_style( 'editor-style.css' );
    
    // This theme uses Featured Images (change size below by removing comment element)
    add_theme_support('post-thumbnails'); 

    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');

    // add tag support to pages
    register_taxonomy_for_object_type('post_tag', 'page');

    // for WordPress 4.1 and above only
    add_theme_support( 'title-tag' ); 

    // language support - add your translation
    load_theme_textdomain('slanty', get_template_directory() . '/library/languages');

    // This theme uses wp_nav_menu in one location.
    register_nav_menus( array(
        'primary' => __( 'Main Primary Navigation', 'slanty' )
        ) );     

    // supports custom header upload image
    // Add a filter to image_width and image_height to change the width and height of your custom header.
    $custom_header_support = array(
	'default-image'  => get_template_directory_uri() . '/assets/photo-12.png',
	'random-default' => false,
        'width'          => '1440',
    	'height'         => '648',
    	'flex-height'    => true,
    	'flex-width'     => true,
    	'uploads'        => true,
        'header-text'    => false
	);

	add_theme_support( 'custom-header', $custom_header_support );
}

add_action('after_setup_theme', 'slanty_setup');

function slanty_add_theme_scripts() {    
   
    // Loads default main stylesheet.
    wp_enqueue_style( 'style', get_stylesheet_uri() ); 

    // Font awsome enqueue
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() .'/assets/fonts/css/font-awesome.css' );

    // scripts for image control of header image.
    wp_enqueue_script( 'slanty-backstretch', get_stylesheet_directory_uri() . '/assets/backstretch.js', array( 'jquery' ), '', true );
    wp_enqueue_script( 'slanty-backstretch-set', get_stylesheet_directory_uri().'/assets/backstretch-set.js' , array( 'jquery' ), '', true );
    // wp localize for header image
    wp_localize_script( 'slanty-backstretch-set', 'BackStretchImg', array( 'src' => get_header_image() ) );

     /*
      * Adds JavaScript to pages with the comment form to support
      * sites with threaded comments (when in use).
      */
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
	wp_enqueue_script( 'comment-reply' );  
}
    add_action( 'wp_enqueue_scripts', 'slanty_add_theme_scripts' );

    // add ie conditional html5 shim to header
function slanty_add_ie_html5_shim () {
      echo "<!--[if lt IE 9]>\n";
        echo '<script src="', get_template_directory_uri() .'/js/html5shiv.js"></script>'."\n";
        echo '<meta http-equiv="X-UA-Compatible" content="IE=9"/>'."\n";
        echo "<![endif]-->\n";
}
    add_action('wp_head', 'slanty_add_ie_html5_shim');
   /**
     * customer background color and image support 
     */
    add_theme_support( 'custom-background' );
    $args = array(
    'default-color'          => 'FAFAFB',
    'default-image'          => '',	
    );
    add_theme_support( 'custom-background', $args );
   
function slanty_widgets_init() {
  register_sidebar(array(
            'name' => __('Primary Footer Widget Area', 'slanty'),
            'id' => 'sidebar',
            'description' => __('The main-side widget area', 'slanty'),
            'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widgettitle">',
            'after_title' => '</h3>',
        ));
}
add_action( 'widgets_init', 'slanty_widgets_init' );

add_filter( 'wp_title', 'slanty_filter_wp_title', 10, 2 );
/**
 * Filters the page title appropriately depending on the current page
 *
 * @uses	get_bloginfo()
 * @uses	is_home()
 * @uses	is_front_page()
 *
 * @since slanty 0.1
 */
function slanty_filter_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

	// Add the site name.
	$title .= get_bloginfo( 'name' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'slanty' ), max( $paged, $page ) );

	return $title;
}

function slanty_custom_excerpt_more($more)   
{  
$str =  __( 'Read Article: ', 'slanty' );
return  ' ... <br>' . '<a class="more-link" href="'. get_permalink($post->ID) . '">' . $str .   get_the_title() . '</a>'; 
}   
add_filter('excerpt_more', 'slanty_custom_excerpt_more');  

    /**
     * Add a style block to the theme for title, post meta and link color.
     *
     * This function is attached to the 'wp_head' action hook.
     *
     * @since Slanty 0.1
     */
    add_action( 'wp_head', 'slanty_styles' );
function slanty_styles() 
{
    $slanty_theme_options = slanty_theme_options(); 
    if (isset ($slanty_theme_options['link_color'] ) ) { ?>
    <style>

    /* option for link colors */
    .post-meta a, .entry-content a, .widget a, .site-title a, .header-wrap a, .header-wrap a:visited, .entry-title a, #access a { 
        color: <?php echo esc_attr( $slanty_theme_options['link_color'] ); ?> !important; 
    }

    </style>
        <?php } else { ?>
        <style>
        .post-meta a, .entry-content a, .widget a, #site-title a, a, #site-title a:visited, .entry-title a { 
        color: royalblue !important; }
        </style>
<?php } ?>
<?php
} // end link color
?>
