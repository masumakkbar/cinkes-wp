<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package cinkes
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function cinkes_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'cinkes_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function cinkes_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'cinkes_pingback_header' );

// cinkes_classes_sidebar
function cinkes_classes_sidebar_func() {
    if ( is_active_sidebar( 'classes-sidebar' ) ) {

        dynamic_sidebar( 'classes-sidebar' );
    }
}
add_action( 'cinkes_classes_sidebar', 'cinkes_classes_sidebar_func', 20 );