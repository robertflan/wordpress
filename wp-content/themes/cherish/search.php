<?php get_header(); ?>
	<?php
	if ( have_posts() && strlen( trim( get_search_query() ) ) != 0 ) {
	?>
	<header class="entry-header">
		<h1 class="post-title"><?php printf( __( 'Search Results for: %s', 'cherish' ), get_search_query() ); ?></h1>
		<?php get_search_form(); ?>
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
	} else {
		?>
		<header class="entry-header">
			<h1 class="post-title"><?php esc_html_e( 'No results found', 'cherish' ); ?></h1>
			<?php get_search_form(); ?>
		</header><!-- .entry-header -->
	<?php
	}
	?>
<?php
get_footer();
