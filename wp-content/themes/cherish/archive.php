<?php 
/**
 * The template for displaying Archives
 *
 * @package Cherish
 */

get_header(); ?>
	<header class="entry-header">
		<h1 class="archive-title"><?php the_archive_title(); ?></h1>
	</header><!-- .entry-header -->
	<?php
	while ( have_posts() ) : the_post();
		$cherish_color_meta_value = get_post_meta( get_the_ID(), 'meta-color', true );
		if ( ! $cherish_color_meta_value ) {
			echo '<div class="container">';
		} else {
			echo '<div class="container" style="background:' . esc_attr( $cherish_color_meta_value ) . ';">';
		}
		get_template_part( 'content', get_post_format() );
		echo '</div>';
	endwhile;

	the_posts_navigation( array( 'prev_text' => __( '&larr; Previous page','cherish' ), 'next_text' => __( 'Next page &rarr;', 'cherish' ) ) );

get_footer();
