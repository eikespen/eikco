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
 */
function eikco_enqueue_assets() {
	wp_enqueue_style(
		'eikco-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'eikco_enqueue_assets' );

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
