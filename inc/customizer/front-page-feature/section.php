<?php
use Inc2734\WP_Customizer_Framework\Customizer_Framework;

$customizer = Customizer_Framework::init();
$customizer->section( 'front-page-feature', [
	'title'           => __( 'おすすめ', 'wpbook' ),
	'active_callback' => function() {
		if ( ! is_front_page() || is_home() ) {
			return false;
		}

		$page_template = get_post_meta( get_the_ID(), '_wp_page_template', true );
		$active_page_templates = [
			'page-templates/front-page-2.php',
			'page-templates/front-page-6.php',
		];
		if ( ! in_array( $page_template, $active_page_templates ) ) {
			return false;
		}

		return true;
	}
] );

$section = $customizer->get_section( 'front-page-feature' );

$customizer->control( 'image', 'front-page-feature-image', [
	'label' => __( '画像', 'wpbook' ),
] );

$control = $customizer->get_control( 'front-page-feature-image' );
$control->join( $section );

$customizer->control( 'textarea', 'front-page-feature-html', [
	'label' => __( 'HTML', 'wpbook' ),
] );

$control = $customizer->get_control( 'front-page-feature-html' );
$control->join( $section );
