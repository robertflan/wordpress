<?php
/**
 * The template part for displaying a message that posts cannot be found
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage SketchThemes
 * @since Lovebond Lite 1.0.0
 */
?>
<!-- BEGIN: EACH BLOG DIVISION -->
<div id="post-none" class="animatedParent blog-page-section standard-blog">
    <div class="notfound-title col-xs-12 col-sm-6 col-md-6">
		<h2><?php _e('No Post Found', 'lovebond-lite'); ?></h2>
	</div>
	<div class="notfound-text col-xs-12 col-sm-6 col-md-5">
		<h4><?php _e('Create a new post or search existing...', 'lovebond-lite'); ?></h4>
		<div class="sktwed-widget-list">
			<div class="sktwed-widget-content">
				<?php get_search_form(); ?>
			</div>
		</div>
		<div class="backtohome">
			<div class="backbtn-click">
				<a href="#" onClick="history.back();return false;"><span><i class="icon wedding-maids-left-arrow"></i></span> <?php _e('Back', 'lovebond-lite'); ?> </a>
			</div>
			<div class="backbtn-seperator"></div>
			<div class="backtohome-click">
				<a href="<?php echo esc_url(home_url('/')); ?>"><?php _e('Take me at home', 'lovebond-lite'); ?> <span><i class="icon wedding-maids-right-arrow"></i></span></a>
			</div>
		</div>
	</div>
</div>
<!-- END: EACH BLOG DIVISION -->