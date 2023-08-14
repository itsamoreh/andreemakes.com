<?php
/**
 * This file adds functions to the WordPress theme.
 *
 * @package am
 * @author  Amor Kumar
 * @license GNU General Public License v2 or later
 * @link    https://itsamoreh.dev
 */

namespace itsamoreh\BlockThemeStarter;

if ( ! function_exists( 'setup' ) ) {

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook.
	 */
	function setup() {

		// Make theme available for translation.
		load_theme_textdomain( 'am', get_template_directory() . '/languages' );

		// Enqueue editor styles.
		add_editor_style( '/style.css' );

		// Disable loading core block inline styles.
		add_filter( 'should_load_separate_core_block_assets', '__return_false' );

		// Remove core block patterns.
		remove_theme_support( 'core-block-patterns' );

		// Don't install bundled themes when WordPress updates.
		define( 'CORE_UPGRADE_SKIP_NEW_BUNDLED', true );

	}
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\\setup' );

/**
 * Enqueue theme style sheet.
 */
function enqueue_style_sheet() {

	wp_enqueue_style(
		'am',
		get_template_directory_uri() . '/style.css',
		array(),
		wp_get_theme( 'am' )->get( 'Version' )
	);

}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\enqueue_style_sheet' );

/**
 * Enqueue Simple Analytics scripts.
 */
function enqueue_simple_analytics() {
    wp_enqueue_script('simple-analytics', 'https://scripts.simpleanalyticscdn.com/latest.js', array(), '1.0', true);
	wp_enqueue_script('simple-analytics-auto-events', 'https://scripts.simpleanalyticscdn.com/auto-events.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\enqueue_simple_analytics');

/**
 * Register block pattern categories.
 */
function register_block_pattern_categories() {
	register_block_pattern_category(
		'other',
		array( 'label' => __( 'Other', 'am' ) )
	);
}
add_action( 'init', __NAMESPACE__ . '\\register_block_pattern_categories' );

/**
 * Help admin documentation pages.
 */
include get_template_directory() . '/docs/help-admin-pages.php';

/**
 * Hooks and other includes.
 */
// include get_template_directory() . '/inc/example-include.php';

/**
 * Register custom Gutenberg blocks.
 */
// include get_template_directory() . '/blocks-built/example-block/index.php';
