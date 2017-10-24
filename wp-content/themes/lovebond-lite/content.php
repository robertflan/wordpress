<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage SketchThemes
 * @since Lovebond Lite 1.0.0
 */
?>
<!-- BEGIN: EACH BLOG DIVISION -->
<div id="post-<?php the_ID(); ?>" <?php post_class("animatedParent blog-page-section standard-blog"); ?>>
    <?php if(has_post_thumbnail()) {
		$thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'blog-page-thumb');
	?>
		<div class="animated fadeInUpShort blog-page-thumbnail"><img src="<?php echo esc_url($thumbnail[0]); ?>" alt="<?php the_title(); ?> Image" /></div>
	<?php } ?>

    <div class="animated fadeInUpShort blog-page-des row">
        <div class="blog-format-icon col-xs-3 col-md-3">
        <?php $format = get_post_format();
        if( $format == "quote" ){
            echo '<i class="icon wedding-quots"></i>';
        } elseif ( $format == "audio" ) {
            echo '<i class="icon wedding-picture"></i>';
        } elseif ( $format == "gallery" ) {
            echo '<i class="icon wedding-gallery"></i>';
        } elseif ( $format == "video" ) {
            echo '<i class="icon wedding-video-play-icon"></i>';
        } else {
            echo '<i class="icon wedding-picture"></i>';
        } ?>
        </div>
        <div class="blog-inner-content col-xs-8 col-md-9">
            <h3><?php the_title(); ?></h3>
            <?php the_excerpt(); ?>
            <a class="readmore" href="<?php the_permalink(); ?>"><?php _e('Continue to read', 'lovebond-lite') ?> <i class="icon wedding-maids-right-arrow"></i></a>
        </div>
    </div>
    <div class="animated fadeInUpShort blog-page-meta">
        <span class="blog-meta-author"><strong><?php _e('Author', 'lovebond-lite'); ?></strong> | <?php echo get_the_author_meta('display_name',$post->post_author); ?></span>
        <span class="blog-meta-comment"><strong><?php _e('Comments', 'lovebond-lite'); ?></strong> | <?php comments_popup_link('0 ', '1  ', '% ', '', __('Comments Off ', 'lovebond-lite') ); ?></span>
        <span class="blog-meta-date"><strong><?php _e('Date', 'lovebond-lite'); ?></strong> | <?php echo get_the_date(); ?></span>
    </div>
</div>
<!-- END: EACH BLOG DIVISION -->