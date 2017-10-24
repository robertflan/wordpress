<?php
/**
* The Sidebar containing the main widget areas.
* @theme slanty
* @since slanty 0.1
*/
if ( !  is_active_sidebar( 'sidebar' ) ) : echo '<div class="no-menu"></div>'; else : ?>
<div id="sidebar">
    <div class="sidebar-container">
        <?php dynamic_sidebar( 'sidebar' ); ?>
    </div><!-- ends primary - widget-area -->
</div>
<?php endif; ?>