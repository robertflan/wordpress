<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage SketchThemes
 * @since Lovebond Lite 1.0.0
 */

get_header(); ?>
<!-- BEGIN: ERROR SECTION -->
	<section id="notfound-wrapper">

		<!-- BEGIN: CONTAINER -->
		<div class="container">

			<!-- BEGIN: INNER WRAPPER -->
			<div class="row notfound-inner-wrapper">

				<div class="notfound-title col-xs-12 col-sm-6 col-md-6">
					<h2><?php _e('404', 'lovebond-lite'); ?></h2>
				</div>
				<div class="notfound-text col-xs-12 col-sm-6 col-md-5">
					<h4><?php _e('the page you are looking for doesn\'t exist', 'lovebond-lite'); ?></h4>
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
			<!-- END: INNER WRAPPER -->

		</div>
		<!-- END: CONTAINER -->

	</section>
	<!-- BEGIN: ERROR SECTION -->
	
<?php get_footer(); ?>