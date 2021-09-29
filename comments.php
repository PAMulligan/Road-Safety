<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>

<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
<?php
		return;
	}
?>
<?php if ( have_comments() ) : ?>
<h3 id="comments">
	<?php comments_number('No Responses', 'One Response', '% Responses' );?>
	to &#8220;
	<?php the_title(); ?>
	&#8221;</h3>
<div class="navigation">
	<div class="alignleft">
		<?php previous_comments_link() ?>
	</div>
	<div class="alignright">
		<?php next_comments_link() ?>
	</div>
</div>
<ol class="commentlist">
	<?php wp_list_comments(); ?>
</ol>
<div class="navigation">
	<div class="alignleft">
		<?php previous_comments_link() ?>
	</div>
	<div class="alignright">
		<?php next_comments_link() ?>
	</div>
</div>
<?php else : ?>
<?php if ( comments_open() ) : ?>
<?php else : // comments are closed ?>
<p class="nocomments"><small>Comments are closed.</small></p>
<?php endif; ?>
<?php endif; ?>
<?php if ( comments_open() ) : ?>
<div id="respond">
	<h3>
		<?php comment_form_title( 'Leave a Reply', 'Leave a Reply to %s' ); ?>
	</h3>
	<div class="cancel-comment-reply">
		<?php cancel_comment_reply_link(); ?>
	</div>
	<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
	<p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>
	<?php else : ?>
	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
		<ul class="list--form clearfix">
			<?php if ( is_user_logged_in() ) : ?>
			<li>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a></li>
			<?php else : ?>
			<li>
				<label for="author">Name
					<?php if ($req) echo "*"; ?>
				</label>
				<input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
			</li>
			<li>
				<label for="email">Email (will not be published)
					<?php if ($req) echo "*"; ?>
				</label>
				<input type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
			<li>
				<label for="url">Website</label>
				<input type="text" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" size="22" tabindex="3" />
			</li>
			<?php endif; ?>
			<li>
				<label for="comment">Comment</label>
				<textarea name="comment" id="comment" cols="58" rows="10" tabindex="4"></textarea>
			</li>
			<li>
				<input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
				<?php comment_id_fields(); ?>
			</li>
		</ul>
		<?php do_action('comment_form', $post->ID); ?>
	</form>
	<?php endif; ?>
</div>
<?php endif; ?>
