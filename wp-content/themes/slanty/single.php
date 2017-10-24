<?php 
/**
 * single posts template
 */
get_header(); ?>
    <?php // get true or false to show header image
    if ( get_theme_mod( 'slanty_header_toggle' ) == 1 ) : ?>
    <div class="add40"></div>
            <figure id="container_2">
	        <div class="img-layer">
		<?php $header_image = get_header_image();
			if ( ! empty( $header_image ) ) :
			?>
		<a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
		<img id="header-img" src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
			<?php endif; ?>
		</div>
            </figure>
            <?php endif; ?>          
	        <div class="clearfix"></div>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<section class="row">
    <div id="content">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">		
                <h2 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
   <div class="metadata">
                        <p class="datelink"><?php the_date() ?> @ <?php the_time() ?></p>
                        <p class="cat-link"><?php _e( 'Filed under: ', 'slanty' ); ?><?php the_category(', ') ?></p>
                        <p class="tag-link"><?php _e( 'Search ', 'slanty' ); ?><?php the_tags() ?></p>
                        <p class="authorlink"><?php the_author() ?></p>
                        <p class="edit-link"><?php edit_post_link(__('Edit', 'slanty' ) ); ?></p>
                       
                    </div>
            </header>
                <div class="article-entry">
                    <?php the_content(); ?>
                </div>
                 
        </article>    
    </div><!-- ends post id -->
</section>
    <?php comments_template(); ?>
<?php endwhile; ?>

    <?php else : ?>
        <?php get_template_part( 'content', 'none' ); ?>
<?php endif; ?>

<?php get_template_part( 'page', 'nav' ); ?>
<?php get_footer(); ?>