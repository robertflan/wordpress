<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package WordPress
 * @subpackage SketchThemes
 * @since Lovebond Lite 1.0.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<?php if ( have_comments() ) : ?>
	<div class="comments-wrap">
	    <h3 class="comments-heading"><?php _e('comments', 'lovebond-lite'); ?></h3>
	    <div class="sidebar-title-seperator"></div>
		
		<div class="comments-inner-wrap">
			<?php wp_list_comments( 'type=all&callback=lovebond_lite_comment' ); ?>

			<div class="comment-nav">
				<div class="alignleft">
					<?php previous_comments_link() ?>
				</div>

				<div class="alignright">
					<?php next_comments_link() ?>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>
		
<?php // If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
?>
	<div class="comments-wrap">
		<div class="comments-inner-wrap">
			<p class="comment-notice"><?php _e( 'Comments are closed.', 'lovebond-lite' ); ?></p>
		</div>
	</div>
<?php endif; ?>

<?php if ( comments_open() ) : ?>

<!-- BEGIN: COMMENT FORM WRAPPER -->
<div class="comment-form-wrap">
	<h3 class="comment-form-heading">leave a reply</h3>
	<div class="sidebar-title-seperator"></div>
	
	<div class="comment-form-inner row">
		<?php $commenter = wp_get_current_commenter();
			$req = get_option( 'require_name_email' );
			$aria_req = ( $req ? " aria-required='true'" : '' );
		 ?>
		<?php $comment_args = array( 'title_reply'=> '',

			'fields' => apply_filters( 'comment_form_default_fields', array(

			'author' => '<input id="author" class="comment-input-field col-xs-12 col-sm-5 col-md-5" name="author" type="text"  placeholder="'. __("Name", "lovebond-lite") .'" value="' . esc_attr( $commenter["comment_author"] ) . '" ' . $aria_req . ' />',

		    'email'  => '<input id="email" class="comment-input-field col-xs-12 col-sm-5 col-md-5" name="email" type="email"  placeholder="'.__("E-mail", "lovebond-lite").'" value="' . esc_attr(  $commenter["comment_author_email"] ) . '" ' . $aria_req . ' />',

		    'phone' => '<input id="phone" class="comment-input-field col-xs-12 col-sm-5 col-md-5" name="author" type="text"  placeholder="'. __("Phone", "lovebond-lite") . '" ' .' />',

		    'subject' => '<input id="subject" class="comment-input-field col-xs-12 col-sm-5 col-md-5" name="author" type="text"  placeholder="'. __("Subject", "lovebond-lite") . '" ' .' />'
		    ) ),

		    'comment_field' => '<textarea id="comment" class="comment-input-field comment-msg-field col-xs-12 col-sm-11 col-md-11" name="comment" aria-required="true" placeholder="'.__('Message', 'lovebond-lite').'"' . $aria_req . '></textarea>',

		    'comment_notes_after' => '',

		    'label_submit' => __('Submit', 'lovebond-lite')

		);
		?>
		<?php comment_form($comment_args); ?>
		</div>
</div>
<!-- END: COMMENT FORM WRAPPER -->
<?php endif; ?>