<?php
/**
 * The template part for displaying third landing section
 *
 * @package WordPress
 * @subpackage SketchThemes
 * @since Lovebond Lite 1.0.0
 */
?>
<?php if( 'none' != get_theme_mod('lovebond_lite_rat_third_section', 'none') ) {
	$the_query = new WP_Query( array( 'page_id' => get_theme_mod('lovebond_lite_rat_third_section') ) );
	if ( $the_query->have_posts() ) :
		while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<section id="section3" class="front-sections skt-default-page"><div class="skt-page-overlay"></div>
			<!-- Container-->
			<div class="container post-wrap rpage_wrap">
				
				<div class="animatedParent row section-heading-content">
					<h2 class="animated growIn col-xs-12 col-sm-3 col-md-3"><?php the_title(); ?></h2>
					<p class="animated growIn col-xs-12 col-sm-9 col-md-9"><?php echo esc_attr( get_theme_mod('lovebond_lite_rat_third_section_desc') ); ?></p>
				</div>
			
				<div class="animatedParent row gallery-inner-wrapper">
					<div class="animated fadeInUpShort col-xs-12 col-sm-12 col-md-12">	
						<?php the_content(); ?>
					</div>
				</div>			
			</div>
		</section>
		<!-- BEGAIN: SEPARATOR -->
		<div class="seperator-spare"><div id="seperator" class="seperator-inner animateme scrollme" data-scale="0" data-to="0.10" data-from="0.70" data-when="view"><i class="icon wedding-blog"></i></div></div>
		<!-- END: SEPARATOR -->
		<?php break;
		endwhile;
		wp_reset_postdata();
	endif;
} ?>