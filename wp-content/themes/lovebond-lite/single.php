<?php
/**
 * The Template for displaying all single posts.
 * @package WordPress
 * @SketchThemes
 */
?>

<?php get_header(); ?>
	<!-- BEGIN: BLOG -->
    <section id="blog-wrapper" class="blog-sections">
        <!-- BEGIN: CONTAINER -->
        <div class="container">

            <!-- BEGIN: INNER BLOG SECTION -->
            <div class="content-wrap col-md-8">
				<?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>

						<!-- BEGIN: EACH BLOG DIVISION -->
	                	<div class="animatedParent blog-page-section standard-blog">
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
							            <?php the_content(); ?>
							            <?php wp_link_pages(array('before' => '<p><strong>'.__('Pages :','lovebond-lite').'</strong>','after' => '</p>', __('number','lovebond-lite'),));	?>
							        </div>
							    </div>
							    <div class="animated fadeInUpShort blog-page-meta">
							        <span class="blog-meta-author"><strong><?php _e('Author', 'lovebond-lite'); ?></strong> | <?php echo get_the_author_meta('display_name',$post->post_author); ?></span>
							        <span class="blog-meta-comment"><strong><?php _e('Comments', 'lovebond-lite'); ?></strong> | <?php comments_popup_link('0 ', '1  ', '% ') ; ?></span>
							        <span class="blog-meta-date"><strong><?php _e('Date', 'lovebond-lite'); ?></strong> | <?php echo get_the_date(); ?></span>
							    </div>
							</div>
							<!-- END: EACH BLOG DIVISION -->
					<?php endwhile; ?>
				<?php else : ?>
					<h2><?php _e('Not Found','lovebond-lite'); ?></h2>
				<?php endif; ?>
				<div class="clearfix"></div>
				
				<!-- BEGIN: BLOG PAGINATION -->
                <div class="blog-page-pagination post-pagination clearfix">
                    <div class="alignleft"><?php previous_post_link( __('<i class="icon wedding-maids-left-arrow"></i> %link','lovebond-lite') ); ?></div>
                    <div class="alignright"><?php next_post_link( __('%link <i class="icon wedding-maids-right-arrow"></i>','lovebond-lite') ); ?></div>
                </div>
                <!-- END: BLOG PAGINATION -->
                <div class="clearfix"></div>
                
                <div class="author-comment-wrap">
	                <div class="comments-wrap">
					    <h3 class="comments-heading"><?php _e('categories & tags', 'lovebond-lite'); ?></h3>
					    <div class="sidebar-title-seperator"></div>
						
						<div class="comments-inner-wrap">
							<?php if (has_category()) { ?><p class="blog-meta-comment"><strong><?php _e('In ','lovebond-lite'); ?></strong><?php the_category(', '); ?></p><?php } ?>
							<?php the_tags('<p class="blog-meta-comment"><strong>'.__('By ', 'lovebond-lite').'</strong>', ', ', '</p>'); ?>
						</div>
					</div>

					<!-- BEGIN: COMMENTS WRAPPER -->
	                <?php comments_template(); ?>
	                <!-- END: COMMENTS WRAPPER -->
				</div>
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