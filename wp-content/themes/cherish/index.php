<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Cherish
 */

get_header();

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
