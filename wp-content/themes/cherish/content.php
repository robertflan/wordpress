<?php
/**
 * Template for displaying posts on archives and index.
 *
 * @package Cherish
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_single() ) {
			the_title( sprintf( '<h1 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' );
		} else {
			the_title( sprintf( '<h2 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
		}
		?>
	</header><!-- .entry-header -->

	<?php
	if ( strpos( $post->post_content,'[gallery' ) === false ) {
		if ( has_post_thumbnail() ) {
			the_post_thumbnail();
		}
	}
	the_content();
	wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages: ', 'cherish' ), 'after' => '</div>' ) );
	cherish_meta();
	?>						
</div>
