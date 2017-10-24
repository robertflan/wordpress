<!DOCTYPE html>
<html <?php language_attributes(); ?>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <a class="screen-reader-text" href="#primary" title="<?php esc_attr_e( 'Skip to content', 'slanty' ); ?>"><?php _e( 'Skip to content', 'slanty' ); ?></a>
    <div class="wrap">
        <div class="grids">
            <div class="row">
                <header class="site-header"> 
                    <div class="grid-4" id="hgroup">
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url() ); ?>/"><?php bloginfo('name'); ?></a></h1> 
                        <h2 class="site-description"><?php bloginfo('description'); ?></span></h2>
                    </div>
                        <div class="grid-8">
                            <?php if( has_nav_menu( 'primary' )) : ?>
                                <nav id="access">
                                    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'nav' ) ); ?>
                                </nav><div class="clearfix"></div>
                            <?php else : ?>
                                <div class="no-menu"></div>
                            <?php endif; ?>
                        </div><!-- ends grid-8 -->
                </header>
            </div>