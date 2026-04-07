<?php
/**
 * Eik & Co theme setup.
 *
 * @package eikco
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'eikco_setup' ) ) {
	function eikco_setup() {
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'editor-styles' );
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		) );

		load_theme_textdomain( 'eikco', get_template_directory() . '/languages' );
	}
}
add_action( 'after_setup_theme', 'eikco_setup' );

/**
 * Enqueue theme assets.
 *
 * Loads the theme stylesheet and the two web fonts used by the
 * design system: Newsreader (serif display + body) and IBM Plex
 * Mono (UI / nav / buttons). Both are pulled from Google Fonts
 * with preconnect hints so they start downloading immediately.
 */
function eikco_enqueue_assets() {
	wp_enqueue_style(
		'eikco-fonts',
		'https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,300;0,6..72,400;0,6..72,500;0,6..72,600;1,6..72,400&family=IBM+Plex+Mono:wght@400;500&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'eikco-style',
		get_stylesheet_uri(),
		array( 'eikco-fonts' ),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'eikco_enqueue_assets' );

/**
 * Add preconnect hints for Google Fonts so the browser opens
 * the TLS connection before it parses the stylesheet. Small
 * perf win on first paint.
 */
function eikco_resource_hints( $urls, $relation_type ) {
	if ( 'preconnect' === $relation_type ) {
		$urls[] = array(
			'href'        => 'https://fonts.gstatic.com',
			'crossorigin' => 'anonymous',
		);
		$urls[] = 'https://fonts.googleapis.com';
	}
	return $urls;
}
add_filter( 'wp_resource_hints', 'eikco_resource_hints', 10, 2 );

/**
 * Register block pattern categories for Eik & Co.
 */
function eikco_register_pattern_categories() {
	if ( function_exists( 'register_block_pattern_category' ) ) {
		register_block_pattern_category(
			'eikco',
			array( 'label' => __( 'Eik & Co', 'eikco' ) )
		);
	}
}
add_action( 'init', 'eikco_register_pattern_categories' );
