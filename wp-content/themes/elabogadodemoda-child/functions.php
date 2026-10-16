<?php
/**
 * El Abogado de Moda — tema hijo de Hello Elementor.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style(
		'elabogadodemoda-style',
		get_stylesheet_uri(),
		[ 'hello-elementor-theme-style' ],
		wp_get_theme()->get( 'Version' )
	);
}, 20 );
