<?php
/*
 * content template - aka the loop!
 * Please note that trackback rdf must stay in comment for XHTML 
 * to work with HTML. Do not remove comment element.
*/
if (have_posts()) : while (have_posts()) : the_post(); ?>
<section class="row">
    <div id="content">
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
            <h1 class="entry-title" id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
                <div class="metadata">
                    <p class="datelink"><?php the_date() ?> @ <?php the_time() ?> <span class="authorlink"><?php the_author() ?><span></p>
                    <?php if( current_user_can('editor')) {  ?> 
                    <p class="edit-link"><?php edit_post_link(__('Edit', 'slanty' ) ); ?></p>
                    <?php } ?>
                </div>
        </header>
            <article class="entry">

                <?php // get true or false to show excerpt only
                if ( ( get_theme_mod( 'slanty_excerpt' ) == 1 ) && is_home() ) : ?>
                <?php the_excerpt(); ?>
                    <?php else : ?>
                <figure>
                <?php if ( has_post_thumbnail() ) { 
                      the_post_thumbnail(); 
                      } else {
                      echo '<div class="no-thumb"></div>';
                      } ?>
                </figure>
                    <?php the_content(); ?>
                        <nav class="pagination"><?php wp_link_pages(); ?></nav>
                <?php endif; ?>
                        
            <!--
            <?php trackback_rdf(); ?>
            -->
            </article>
    </div><!-- ends post id -->
	</div>
</section>
<?php endwhile; ?>

    <?php else : ?>
        <?php get_template_part( 'content', 'none' ); ?>
<?php endif; ?>
<div class="clearfix"></div>