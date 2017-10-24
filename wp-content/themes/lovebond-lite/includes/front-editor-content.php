<?php
/**
 * The template part for displaying editor content and recent blog
 *
 * @package WordPress
 * @subpackage SketchThemes
 * @since Lovebond Lite 1.0.0
 */
?>
<?php if ( 'page' == get_option( 'show_on_front' ) ) { ?>
	<!-- PAGE EDITER CONTENT -->
	<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>
			<section id="front-content-section" class="front-sections skt-default-page"><div class="skt-page-overlay"></div>
				<!-- Container-->
				<div class="container post-wrap rpage_wrap">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</section>
			<!-- BEGAIN: SEPARATOR -->
			<div class="seperator-spare"><div id="seperator1" class="seperator-inner animateme scrollme" data-scale="0" data-to="0.10" data-from="0.70" data-when="view"><i class="icon wedding-calender"></i></div></div>
			<!-- END: SEPARATOR -->
		<?php endwhile; ?>
	<?php endif; ?>
<?php } ?>


<?php  if( get_theme_mod('lovebond_lite_home_blog_sec', 'on') == 'on') { ?>
<section id="front-blog-section" class="front-sections skt-default-page"><div class="skt-page-overlay"></div>
	<!-- Container-->
	<div class="container post-wrap rpage_wrap">
			<?php if( get_theme_mod('lovebond_lite_home_blog_title', __('Recent Blog', 'lovebond-lite') != '' ) ) { ?>
				<div class="animatedParent row section-heading-content">
					<h2 class="animated growIn col-xs-12 col-sm-3 col-md-3"><?php echo esc_attr( get_theme_mod( 'lovebond_lite_home_blog_title', __('Recent Blog', 'lovebond-lite') ) ); ?></h2>
				</div>
			<?php } ?>

			<!-- BEGIN: BLOG INNER WRAPPER -->
			<div class="blog-inner-wrapper gallery-inner-wrapper">
			<?php $lovebond_lite_blogno = get_theme_mod('lovebond_lite_home_blog_num', '3' );
				$lovebond_lite_latest_loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => $lovebond_lite_blogno,'ignore_sticky_posts' => true ) );
			?>
			<?php if ( $lovebond_lite_latest_loop->have_posts() ) : ?>
				<!-- the loop -->
				<?php while ( $lovebond_lite_latest_loop->have_posts() ) : $lovebond_lite_latest_loop->the_post(); ?>
				<div class="animatedParent blog-section col-xs-6 col-sm-6 col-md-4">
					<div class="animated growIn slow blog-img-wrap">
						<?php if(has_post_thumbnail()) {
							the_post_thumbnail('blog-shortcode-thumb');
						} else { ?>
							<img src="<?php echo get_template_directory_uri().'/images/blog-thumb-360x495.png'; ?>" alt="<?php the_title(); ?> Image" />
						<?php } ?>
						<div class="blog-over"></div>
						<div class="blog-meta-wrap slideUp">
							<span class="meta-date"><strong><?php _e('Date', 'lovebond-lite'); ?></strong> | <?php echo get_the_time('d'); ?> | <?php echo get_the_time('F'); ?> | <?php echo get_the_time('Y'); ?></span>
							<span class="meta-comment"><strong><?php _e('Comments', 'lovebond-lite'); ?></strong> | <?php comments_popup_link('0 ', '1  ', '% ', '', __('Comments Off ', 'lovebond-lite') ); ?></span>
							<span class="meta-author"><strong><?php _e('Author', 'lovebond-lite'); ?></strong> | <?php echo get_the_author(); ?></span>
						</div>
					</div>

					<div class="blog-content-wrap">
						<h3><?php echo lovebond_lite_limit_words(get_the_title(), '4'); ?>...</h3>
						<p><?php echo lovebond_lite_limit_words(get_the_excerpt(), '26'); ?></p>
						<a href="<?php the_permalink(); ?>"><?php _e('Continue to read', 'lovebond-lite') ?> <i class="icon wedding-maids-right-arrow"></i></a>
					</div>
				</div>
				<?php endwhile; ?>
			<?php else : ?>
					<h2><?php _e('No Post Found','lovebond-lite'); ?></h2>
			<?php endif;
			$blog_url = lovebond_lite_get_blog_url();
			if( $blog_url ) { ?>
				<div class="view-all-blog col-sm-12 col-xs-12 col-md-12">
					<a class="view-all-link" href="<?php echo $blog_url; ?>"><?php _e('View All Blog', 'lovebond-lite'); ?>&nbsp;<i class="fa fa-hand-o-right"></i></a>
				</div>
			<!-- END: BLOG INNER WRAPPER -->
			<?php }
			wp_reset_postdata(); ?>
		</div>
 	</div>
</section>
<?php } ?>