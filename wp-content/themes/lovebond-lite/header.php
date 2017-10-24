<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "page" div.
 *
 * @package WordPress
 * @subpackage SketchThemes
 * @since Lovebond Lite 1.0.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<!--[if IE 9]>
	<meta http-equiv="X-UA-Compatible" content="IE=9" />
	<![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="index"></div>
	<div class='thetop'></div>
	<!-- BEGIN: LAYOUT/HEADERS/HEADER-1 -->
	<!-- BEGIN: HEADER -->
	<header<?php if( !is_front_page() ) { ?> id="sktwed-blogpage" <?php } ?>>
			<!-- BEGIN: MENU BUTTON -->
			<a class="main_menu_btn">
				<span class="line line1"></span>
				<span class="line line2"></span>
				<span class="line line3"></span>
			</a>		
			
			<!-- BEGIN: SUBMENU -->
			<div class="main_menu_block">
				<div class="menu_wrapper">
						<?php if ( has_nav_menu('Header') ) {
							wp_nav_menu(array( 'container_class' => 'sub_menu anim', 'menu_id' => 'menu', 'menu_class' => 'max-menu', 'theme_location' => 'Header' ));
						} else { ?>
						<div class="sub_menu anim">
							<ul id="menu" class="max-menu">
								<?php wp_list_pages('title_li'); ?>
							</ul>
						</div>
						<?php } ?>
					<div class="sub_img anim"></div>
				</div>
			</div>
			<!-- END: SUBMENU -->

			<!-- BEGIN: LOGO -->
			<div class="logo-wrap container">
				<div class="row">
					<div class="logo-img col-xs-12 col-sm-6 col-md-6">
					<?php if( get_theme_mod('lovebond_lite_logo_img', '') != '' ) { ?>
						<a href="<?php echo esc_url(home_url('/')); ?>"><img id="lovebond-logo-img" src="<?php echo esc_url( get_theme_mod('lovebond_lite_logo_img') ); ?>" alt"<?php bloginfo('name'); ?>"></a>
					<?php } elseif ( display_header_text() ) { ?>
						<!-- #description -->
						<div id="site-identity" class="logo_desp">
							<a id="site-title" href="<?php echo esc_url(home_url('/')); ?>" title="<?php bloginfo('name') ?>" ><?php bloginfo('name'); ?></a> 
							<div id="site-description"><?php bloginfo( 'description' ); ?></div>
						</div>
						<!-- #description -->
					<?php } ?>
					</div>
				</div>
			</div>
			<!-- END: LOGO -->
	</header>
	<!-- END: HEADER -->
	<!-- END: LAYOUT/HEADERS/HEADER-1 -->

	<?php if ( !is_front_page() ) {
		include("includes/breadcrumb-section.php");
	} ?>

	<div class="page">
		<?php if ( is_front_page() ) {
			get_template_part( 'includes/front', 'header-image-section' );
		} ?>