<?php
/**
 * @package Patus
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php patus_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<div class="entry-tax">
		<?php
			$category_list = get_the_category_list();
			$tag_list      = get_the_tag_list( '<ul class="post-tags"><li>', "</li>\n<li>", '</li></ul>' );
			$meta_text     = '';

			if ( $category_list ) {
				$meta_text .= '<span class="genericon genericon-category"></span>' . '%1$s';
			}

			if ( $tag_list ) {
				$meta_text .= '<span class="genericon genericon-tag"></span> ' . '%2$s';
			}

			printf(
				$meta_text,
				$category_list,
				$tag_list,
				get_permalink()
			);
		?>
		</div>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'patus' ),
				'after'  => '</div>',
			) );
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
