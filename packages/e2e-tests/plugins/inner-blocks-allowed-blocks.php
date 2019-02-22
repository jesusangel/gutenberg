<?php
/**
 * Plugin Name: Gutenberg Test InnerBlocks Allowed Blocks
 * Plugin URI: https://github.com/WordPress/gutenberg
 * Author: Gutenberg Team
 *
 * @package gutenberg-test-inner-blocks-allowed-blocks
 */

/**
 * Registers a custom script for the plugin.
 */
function enqueue_block_icons_plugin_script() {
	wp_enqueue_script(
		'gutenberg-test-block-icons',
		plugins_url( 'inner-blocks-allowed-blocks/index.js', __FILE__ ),
		array(
			'wp-blocks',
			'wp-components',
			'wp-editor',
			'wp-element',
			'wp-hooks',
			'wp-i18n',
		),
		filemtime( plugin_dir_path( __FILE__ ) . 'inner-blocks-allowed-blocks/index.js' ),
		true
	);
}

add_action( 'init', 'enqueue_block_icons_plugin_script' );
