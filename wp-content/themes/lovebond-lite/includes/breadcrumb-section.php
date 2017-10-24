<?php
/**
 * The template part for displaying Breadcrumb
 *
 * @package WordPress
 * @subpackage SketchThemes
 * @since Lovebond Lite 1.0.0
 */
?>
<!-- BEGIN: BREADCRUMBS -->
<div class="sktwed-breadcrumbs">
    <div class="container">
        <div class="sktwed-breadcrumbs-title">
            <h3>
                <?php if( is_404() ) :
                    echo '404';
                elseif ( is_day() ) :
                    printf( __( 'Daily Archives: <span>%s</span>', 'lovebond-lite' ), date_i18n( get_the_date() ) );
                elseif ( is_month() ) :
                    printf( __( 'Monthly Archives: <span>%s</span>', 'lovebond-lite' ), get_the_date('F Y') );
                elseif ( is_year() ) :
                    printf( __( 'Yearly Archives: <span>%s</span>', 'lovebond-lite' ), get_the_date('Y') );
                elseif ( is_home() ) :
                    echo esc_attr( get_theme_mod('lovebond_lite_blogpage_heading', __('Blog', 'lovebond-lite') ) );
                elseif ( is_author() ) :
                    global $wp_query; $curauth = $wp_query->get_queried_object(); printf( __('Author', 'lovebond-lite') . ': ' . $curauth->display_name );
                elseif ( is_category() ) :
                    printf( __( 'Category Archives: %s', 'lovebond-lite' ), '<span>' . single_cat_title( '', false ) . '</span>' );
                elseif ( is_tag() ) :
                    printf( __( 'Tag Archives : %s', 'lovebond-lite' ), '<span>' . single_tag_title( '', false ) . '</span>' );
                elseif ( is_search() ) :
                    _e('Search', 'lovebond-lite');
                else :
                    the_title();
                endif;
                ?>
            </h3>

            <ul class="sktwed-page-breadcrumbs">
                <?php if ( is_home() ) { ?>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php _e('Home', 'lovebond-lite'); ?></a></li>
                    <li>/</li>
                    <li class="sktwed-state-active"><a href="javascript:void(0);"><?php echo esc_attr( get_theme_mod('lovebond_lite_blogpage_heading', __('Blog', 'lovebond-lite') ) ); ?></a></li>
                <?php } elseif( is_404() ) { ?>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php _e('Home', 'lovebond-lite'); ?></a></li>
                    <li>/</li>
                    <li class="sktwed-state-active"><a href="javascript:void(0);"><?php _e('404', 'lovebond-lite'); ?></a></li>
                <?php } elseif( ( class_exists('lovebond_lite_breadcumb_class') ) ) {
                    $lovebond_breadcumb = new lovebond_lite_breadcumb_class();
                    $lovebond_breadcumb->lovebond_lite_custom_breadcrumb();
                } ?>
            </ul>
        </div>
    </div>
</div>
<div class="breacrumbs-sep"></div>
<!-- END: BREADCRUMBS -->