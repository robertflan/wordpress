<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage SketchThemes
 * @since Lovebond Lite 1.0.0
 */

get_header(); ?>

<!-- BEGIN: BLOG -->
<section id="default_temp_page" class="skt-default-page">
    <!-- BEGIN: CONTAINER -->
   <div class="container post-wrap rpage_wrap">
   	  	<div class="row">
			<!-- BEGIN: INNER BLOG SECTION -->
            <div class="content-wrap col-md-8">

				<?php if(have_posts()) :

					while(have_posts()) : the_post(); ?>

						<?php the_content(); ?>

						<?php wp_link_pages('<p><strong>'.__('Pages: ','lovebond-lite').'</strong>', '</p>', __('number','lovebond-lite')); ?>

 					<?php endwhile; ?>

				<?php else :  ?>
					
					<h3 class="text-left"><?php _e('Apologies, No page found.','lovebond-lite'); ?></h3>
					            
				<?php endif; ?>
				
				<div class="clearfix"></div>

				<div class="author-comment-wrap">
					<!-- BEGIN: COMMENTS WRAPPER -->
	                <?php comments_template(); ?>
	                <!-- END: COMMENTS WRAPPER -->
				</div>

				<p class="text-left" style="margin-top:15px;"><?php edit_post_link( __('Edit', 'lovebond-lite'), '', ''); ?></p>
			</div>

			<!-- BEGIN: SIDEBAR BLOG -->
            <div class="sktwed-sidebar-wrap col-md-4">
                <?php get_sidebar(); ?>
            </div>
            <!-- END: SIDEBAR BLOG-->
        </div>
    </div>
    <!-- END: CONTAINER -->
</section>
<!-- END: BLOG -->

<?php get_footer(); ?>