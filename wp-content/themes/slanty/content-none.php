<?php
/**
 * The template for displaying a "No posts found" message.
 *
 * @theme slanty
 */
?>
<article id="post-0" class="post error404 not-found">
    <h1 class="entry-title"><?php _e( 'Nothing found', 'slanty' ); ?></h1>
        <div class="entry-content">
            <p><?php _e( 'No results were found. Please try again.', 'slanty' ); ?></p>
                <hr>
                    <p><?php get_search_form(); ?></p>
        </div>
</article><!-- ends post-0.post -->