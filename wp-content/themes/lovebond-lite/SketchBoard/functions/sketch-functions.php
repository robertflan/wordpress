<?php
/***************** EXCERPT LENGTH ************/
function lovebond_lite_excerpt_length($length) {
	return 50;
}
add_filter('excerpt_length', 'lovebond_lite_excerpt_length');

/***************** READ MORE ****************/
function lovebond_lite_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'lovebond_lite_excerpt_more');

function lovebond_lite_limit_words($string, $word_limit) {
	$words = explode(' ', $string);
	return implode(' ', array_slice($words, 0, $word_limit));
}

function lovebond_lite_class_name($classes) {
	$classes[] = 'lovebond-lite';
	return $classes;
}
add_filter('body_class','lovebond_lite_class_name');

function lovebond_lite_Hex2RGB($hexStr, $returnAsString = false, $seperator = ',') {
    $hexStr = preg_replace("/[^0-9A-Fa-f]/", '', $hexStr); // Gets a proper hex string
    $rgbArray = array();
    if (strlen($hexStr) == 6) { //If a proper hex code, convert using bitwise operation. No overhead... faster
        $colorVal = hexdec($hexStr);
        $rgbArray['red'] = 0xFF & ($colorVal >> 0x10);
        $rgbArray['green'] = 0xFF & ($colorVal >> 0x8);
        $rgbArray['blue'] = 0xFF & $colorVal;
    } elseif (strlen($hexStr) == 3) { //if shorthand notation, need some string manipulations
        $rgbArray['red'] = hexdec(str_repeat(substr($hexStr, 0, 1), 2));
        $rgbArray['green'] = hexdec(str_repeat(substr($hexStr, 1, 1), 2));
        $rgbArray['blue'] = hexdec(str_repeat(substr($hexStr, 2, 1), 2));
    } else {
        return false; //Invalid hex color code
    }
    return $returnAsString ? implode($seperator, $rgbArray) : $rgbArray; // returns the rgb string or the associative array
} 

function lovebond_lite_get_blog_url() {

    $blog_url = '';

    if ( 'posts' === get_option( 'show_on_front' ) )
        $blog_url = home_url();

    elseif ( 0 < ( $page_for_posts = get_option( 'page_for_posts' ) ) )
        $blog_url = get_permalink( $page_for_posts );

    return $blog_url ? esc_url( $blog_url ) : false;
}

/***** Costom Comment Layout ******/
function lovebond_lite_comment($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    extract($args, EXTR_SKIP);

    if ( 'div' == $args['style'] ) {
        $tag = 'div';
        $add_below = 'comment';
    } else {
        $tag = 'li';
        $add_below = 'div-comment';
    }

?>
    <div id="comment-<?php comment_ID() ?>" <?php comment_class( empty( $args['has_children'] ) ? 'comment-inner row' : 'comment-inner row parent' ) ?>>
        <div id="div-comment-<?php comment_ID(); ?>" class="comment-body clearfix div-depth-<?php echo $depth; ?>">
            <div class="comment-image col-xs-12 col-sm-3 col-md-3">
                <?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, 170 ); ?>
            </div>

            <div class="comment-text col-xs-12 col-sm-7 col-md-7">
                <h4 class="comment-text-author"><?php echo get_comment_author_link(); ?></h4>
                <p><?php comment_text(); ?></p>
                <div class="comment-time"><?php printf( '%1$s', get_comment_date( get_option( 'date_format' ) . ' | ' . get_option( 'time_format' ) ) ); ?></div>
                <?php echo comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
            </div>
        </div>
    </div>
<?php
}