<?php
/**
 * The template for displaying custom search form.
 *
 * @package WordPress
 * @subpackage SketchThemes
 * @since Lovebond Lite 1.0.0
 */

get_header(); ?>
<div class="search-box">
	<form id="searchform" class="sktwed-search-form searchform" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
	    <input id="s" class="sktwed-search field" type="text" name="s" placeholder="<?php esc_attr_e('Search', 'lovebond-lite' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" />
	    <div class="sktwed-sub-button search-icon"><i class="icon wedding-maids-right-arrow"></i><input id="searchsubmit" class="sktwed-sub-btn submit" type="submit" name="submit" value="submit" /></div>
	</form>
</div>