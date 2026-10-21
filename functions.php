<?php
/**
 * AB Custom Theme — setup & assets
 *
 * @package AB_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Seedha access band.
}

/**
 * Theme ki bunyadi sahulatain (supports) aur menus.
 */
function ab_theme_setup() {
	load_theme_textdomain( 'ab-theme', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );            // <title> WordPress/plugin sambhale ga (SEO friendly)
	add_theme_support( 'post-thumbnails' );      // featured images
	add_theme_support( 'custom-logo' );          // Customizer se logo
	add_theme_support( 'automatic-feed-links' ); // RSS
	add_theme_support( 'responsive-embeds' );
	add_theme_support(
		'html5',
		array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' )
	);

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'ab-theme' ),
			'footer'  => __( 'Footer Menu', 'ab-theme' ),
		)
	);
}
add_action( 'after_setup_theme', 'ab_theme_setup' );

/**
 * Sirf zaroori CSS load karo — style.css (tokens + base + components).
 * Koi extra library nahi: speed pehle.
 */
function ab_enqueue_assets() {
	// Poppins — live site ka font (400/600/700/800).
	wp_enqueue_style(
		'ab-fonts',
		'https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'ab-style',
		get_stylesheet_uri(),
		array( 'ab-fonts' ),
		wp_get_theme()->get( 'Version' )
	);

	// Hero showcase ki rotation — sirf homepage par, defer ke saath.
	if ( is_front_page() ) {
		wp_enqueue_script(
			'ab-hero-showcase',
			get_template_directory_uri() . '/assets/js/hero-showcase.js',
			array(),
			wp_get_theme()->get( 'Version' ),
			array(
				'strategy'  => 'defer',
				'in_footer' => true,
			)
		);
	}
}
add_action( 'wp_enqueue_scripts', 'ab_enqueue_assets' );
