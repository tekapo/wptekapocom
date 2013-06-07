<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package tawp_s
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function tawp_s_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'content',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'tawp_s_jetpack_setup' );
