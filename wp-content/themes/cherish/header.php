<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cherish
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> itemscope="itemscope" itemtype="http://schema.org/WebPage">
<div id="page" class="site">
<a href="#wrapper" class="skip-link screen-reader-text"><?php esc_html_e( 'Skip to content', 'cherish' );?></a>
<nav id="site-navigation" class="main-navigation" role="navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
	<button id="mobile-menu-toggle" aria-controls="top-bar-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'cherish' ); ?></button>
	<?php wp_nav_menu( array( 'theme_location' => 'header', 'menu_id' => 'top-bar-menu', 'depth' => 3, 'container' => false ) ); ?>
</nav>
<?php
if ( is_home() || is_front_page() ) { ?>
	<div id="header" role="banner">
	<?php
	the_custom_logo();
	if ( display_header_text() ) {
	?>
		<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
		<?php
		if ( get_option( 'blogdescription' ) ) {?>
			<div class="site-description"><?php bloginfo( 'description' ); ?></div>
		<?php
		}
		cherish_action();
	}
	?>
	</div>
<?php
}
?>
<div id="wrapper" role="main">
