<?php 
/**
 * index - main file
 * @theme slanty
 */
get_header(); ?>
<div class="row" id="main">
    <figure id="container_2">
        <div class="img-layer">
	    <?php $header_image = get_header_image();
		if ( ! empty( $header_image ) ) : ?>
                <a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img id="header-img" src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
		<?php endif; ?>
        </div>
    </figure>
</div>
        <div class="add20"></div>
            <?php get_template_part( 'content', 'excerpt' ); ?>
                <?php get_template_part( 'page', 'nav' ); ?>
                    <?php get_footer(); ?>