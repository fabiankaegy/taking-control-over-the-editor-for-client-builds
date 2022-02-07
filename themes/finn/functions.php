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


/**
 * Register Block Patterns
 */
function finn_register_block_patterns() {

	ob_start();
	include __DIR__ . '/patterns/section.php';
	$section_pattern_markup = ob_get_clean();

	register_block_pattern(
		'section',
		[
			'title'       => __( 'Section', 'finn' ),
			'description' => _x( 'A controlled locked down section pattern', 'Block pattern description', 'finn' ),
			'content'     => $section_pattern_markup,
			'categories'  => [ 'layout' ],
		]
	);

	ob_start();
	include __DIR__ . '/patterns/stats.html';
	$stats_pattern_markup = ob_get_clean();

	register_block_pattern(
		'stats',
		[
			'title'       => __( 'Stats', 'finn' ),
			'description' => _x( 'A controlled locked down stats pattern', 'Block pattern description', 'finn' ),
			'content'     => $stats_pattern_markup,
			'categories'  => [ 'layout' ],
		]
	);

	ob_start();
	include __DIR__ . '/patterns/image-divider.php';
	$image_divider_pattern_markup = ob_get_clean();

	register_block_pattern(
		'image_divider',
		[
			'title'       => __( 'Image Divider', 'finn' ),
			'description' => _x( 'A controlled locked down image divider pattern', 'Block pattern description', 'finn' ),
			'content'     => $image_divider_pattern_markup,
			'categories'  => [ 'layout' ],
		]
	);
}

add_action( 'init', 'finn_register_block_patterns' );
