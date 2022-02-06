<?php
/**
 * Functions PHP
 *
 * @package Finn
 */

/**
 * Setup Theme Options
 */
function finn_theme_setup() {
	add_theme_support( 'editor-styles' );
}

add_action( 'theme_setup', 'finn_theme_setup' );


/**
 * Enqueue Assets in Editor
 */
function finn_enqueue_block_editor_assets() {

	$script_assets = include __DIR__ . '/build/index.asset.php';
	wp_enqueue_script(
		'finn-editor-script',
		get_template_directory_uri() . '/build/index.js',
		$script_assets['dependencies'],
		$script_assets['version'],
		true
	);

}

add_action( 'enqueue_block_editor_assets', 'finn_enqueue_block_editor_assets' );
