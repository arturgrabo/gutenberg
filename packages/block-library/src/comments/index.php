<?php
/**
 * Server-side rendering of the `core/comments` block.
 *
 * @package WordPress
 */

/**
 * Registers the `core/comments` block on the server.
 */
function register_block_core_comments() {
	register_block_type_from_metadata(
		__DIR__ . '/comments'
	);
}
add_action( 'init', 'register_block_core_comments' );
