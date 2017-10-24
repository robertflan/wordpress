<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Cherish
 */

get_header(); ?>
	<header class="entry-header">
		<h1 class="archive-title"><?php esc_html_e( 'Page not found', 'cherish' ); ?></h1>
	</header><!-- .entry-header -->
	<div class="post">
	<?php get_search_form(); ?>
	</div>
<?php
get_footer();
