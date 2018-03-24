<?php
use Inc2734\WP_Customizer_Framework\Customizer_Framework;

$customizer = Customizer_Framework::init();
$section    = $customizer->get_section( 'font' );

$customizer->control( 'select', 'base-font', [
	'label'   => __( '基本フォント', 'snow-monkey' ),
	'default' => 'sans-serif',
	'choices' => [
		'sans-serif' => __( 'ゴシック', 'wpbook' ),
		'serif'      => __( '明朝', 'wpbook' ),
	],
] );

$control = $customizer->get_control( 'base-font' );
$control->join( $section );
