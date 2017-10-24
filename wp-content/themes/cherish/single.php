<?php
get_header();

$cherish_color_meta_value = get_post_meta( get_the_ID(), 'meta-color', true );
if ( ! $cherish_color_meta_value ) {
	echo '<div class="container">';
} else {
	echo '<div class="container" style="background:' . esc_attr( $cherish_color_meta_value ) . ';">';
}

while ( have_posts() ) : the_post(); ?>
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="post-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->
	<?php
	if ( is_attachment() ) {
		echo '<div class="fullimg">' . wp_get_attachment_image( '','full' ) . '</div>';
		if ( ! empty( $post->post_excerpt ) ) :
			echo '<br /><p>' . the_excerpt() . '</p>';
		endif;
		next_image_link();
		previous_image_link();
	} else {
		if ( has_post_thumbnail() ) {
			the_post_thumbnail();
		}
		the_content();
		wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages: ', 'cherish' ), 'after' => '</div>' ) );
	}
	cherish_meta();

endwhile;

the_post_navigation( array( 'prev_text' => '&larr; %title', 'next_text' => '%title &rarr;', 'cherish' ) );

comments_template( '', true );

echo '</div></div>';

get_footer();
