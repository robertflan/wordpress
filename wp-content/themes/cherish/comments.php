<?php
/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments">
<?php
if ( have_comments() ) {
	?>
	<h2 id="comments-title"><?php comments_number(); ?></h2>

	<?php
	the_comments_navigation( array( 'prev_text' => __( '&larr; Older Comments','cherish' ), 'next_text' => __( 'Newer Comments &rarr;', 'cherish' ) ) );
	?>		
	<ol class="commentlist">
		<?php wp_list_comments( 'callback=cherish_comment' ); ?>
	</ol>
	<?php
}

comment_form();
?>
</div>
