<?php
/**
 * Custom Functions
 * Theme-specific or non-boilerplate plugin-specific functions can be added here
 */
add_action('wp_print_scripts', function () {
	global $post;
	if ( is_a( $post, 'WP_Post' ) && !has_shortcode( $post->post_content, 'contact-form-7') ) {
		wp_dequeue_script( 'google-recaptcha' );
		wp_dequeue_script( 'wpcf7-recaptcha' );
	}
});

function rs_features()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
		add_image_size( 'custom_image_size_1', 650, 650, false );
		add_image_size( 'custom_image_size_2', 300, 300, false );
}

add_action('after_setup_theme', 'rs_features');