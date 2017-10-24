<?php
/**
 * The template for displaying search results pages.
 *
 * @package WordPress
 * @subpackage SketchThemes
 * @since Lovebond Lite 1.0.0
 */

get_header(); ?>

<!-- BEGIN: BLOG -->
<section id="search-wrapper" class="search-sections">
    <!-- BEGIN: CONTAINER -->
    <div class="container">

        <!-- BEGIN: INNER BLOG SECTION -->
        <div class="content-wrap col-md-8">
        	<h3 class="search-page-title"><?php _e('You are searching for...', 'lovebond-lite'); ?></h3>
        	<div class="row">
                <div class="search-wrap search-inner-wrap col-md-6">
                    <?php get_search_form(); ?>
                </div>
            </div>

            <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
                    <?php get_template_part( 'content', get_post_format() ); ?>
                <?php endwhile; ?>
                <!-- BEGIN: BLOG PAGINATION -->
                <div class="blog-page-pagination clearfix">
                    <div class="alignleft"><?php previous_posts_link( '<i class="icon wedding-maids-left-arrow"></i>'.__(' previous','lovebond-lite')) ?></div>
                    <div class="alignright"><?php next_posts_link(__('next ','lovebond-lite').'<i class="icon wedding-maids-right-arrow"></i>', '') ?></div>
                </div>
                <!-- END: BLOG PAGINATION -->
            <?php else :  ?>
                <h3 class="text-left"><?php _e('Apologies, but no results were found for the requested search.','lovebond-lite'); ?></h3>
            <?php endif; ?>
            <div class="clearfix"></div>
        </div>
        <!-- END: INNER BLOG SECTION -->

        <!-- BEGIN: SIDEBAR BLOG -->
        <div class="sktwed-sidebar-wrap col-md-4">
            <?php get_sidebar(); ?>
        </div>
        <!-- END: SIDEBAR BLOG-->

    </div>
    <!-- END: CONTAINER -->
</section>
<!-- END: BLOG -->

<?php get_footer(); ?>