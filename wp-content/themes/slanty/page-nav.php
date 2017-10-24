<?php if( is_single() ) { ?>
<div id="navigation">
    <p><?php previous_post_link();  ?> <span> &#8656; <?php _e( 'More Pages', 'slanty' ); ?> &#8658; <?php next_post_link(); ?></span></p>
</div>
<?php } elseif( is_category() || is_tag() || is_archive() || is_author() || is_paged() ) { ?>
        <div id="navigation">
            <p><?php posts_nav_link(); ?></p>
        </div>
<?php } elseif( is_home() || is_front_page() && is_home() ) { ?>
 <div id="navigation">
            <p><?php posts_nav_link(); ?></p>
        </div>
<?php } else { echo '<div class="no-menu"></div>'; } ?>