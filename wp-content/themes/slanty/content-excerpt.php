<?php
/*
 * excerpt part - aka the loop for excerpts!
 */
if (have_posts()) : while (have_posts()) : the_post(); ?>
<section class="row">
    <div id="content">
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
            <h1 class="entry-title" id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
                <div class="metadata">
                    <p class="datelink"><?php the_date() ?> @ <?php the_time() ?> <span class="authorlink"><?php the_author() ?><span></p>
                    <p class="edit-link"><?php edit_post_link(__('Edit', 'slanty' ) ); ?></p>
                </div>
        </header>
            <article class="entry">
                <figure>
                <?php if ( has_post_thumbnail() ) { 
                      the_post_thumbnail(); 
                      } else {
                      echo '<div class="no-thumb"></div>';
                      } ?>
                </figure>
                    <?php the_excerpt(''); ?>
                        <nav class="pagination"><?php wp_link_pages(); ?></nav>
            </article>
    </div><!-- ends post id -->
	</div>
</section>
<?php endwhile; ?>

    <?php else : ?>
        <?php get_template_part( 'content', 'none' ); ?>
<?php endif; ?>
<div class="clearfix"></div>