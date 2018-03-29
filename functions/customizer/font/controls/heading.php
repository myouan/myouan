<?php
use Inc2734\WP_Customizer_Framework\Customizer_Framework;

$customizer = Customizer_Framework::init();
$section    = $customizer->get_section( 'font' );

$customizer->control( 'select', 'heading-font', [
	'label'   => __( '見出しフォント', 'snow-monkey' ),
	'default' => 'sans-serif',
	'choices' => [
		'sans-serif' => __( 'ゴシック', 'myouan' ),
		'serif'      => __( '明朝', 'myouan' ),
	],
] );

$control = $customizer->get_control( 'heading-font' );
$control->join( $section );
