<?php
/*
Template Name: Archives Template
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->

				<div class="archive-lists">
					<h2><?php esc_html_e( 'Last 30 Posts', 'patus' ); ?></h2>
						<?php 
						$args = array(
							'post_type'      => 'post',
							'post_status'    => 'publish',
							'nopaging'       => 'true',
							'posts_per_page' => 30
						);
						$the_query = new WP_Query( $args );
						?>
						<?php if ( $the_query->have_posts() ) : ?>
						<ul>
							<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<li><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><span class="comments_number"><?php comments_number( '0', '1', '%', '' ); ?></span><span class="archdate"><?php the_time(__ ( 'n.j.y', 'patus' )); ?></span><?php the_title(); ?></a></li>
							<?php endwhile; endif; wp_reset_postdata(); ?>
						</ul>
					<h2><?php esc_html_e( 'Monthly Archives', 'patus' ); ?></h2>
						<ul class="archive-month">
							<?php wp_get_archives( 'type=monthly&show_post_count=0' ); ?>
						</ul>		
					<h2><?php esc_html_e( 'Archives by Subject', 'patus' ); ?></h2>
						<ul class="archive-cat">
							<?php wp_list_categories( 'title_li=' ); ?>
						</ul>
				</div>
			</article>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>