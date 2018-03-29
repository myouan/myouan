<?php
use Inc2734\WP_Customizer_Framework\Customizer_Framework;

$customizer = Customizer_Framework::init();
$customizer->section( 'main-color', [
	'title' => __( 'メインカラー', 'myouan' ),
] );

$section = $customizer->get_section( 'main-color' );

$customizer->control( 'select', 'main-color', [
	'label'   => __( 'メインカラー', 'snow-monkey' ),
	'default' => 'blue',
	'choices' => [
		'blue'     => __( '堅実（ブルー）', 'myouan' ),
		'pastel'   => __( 'かわいい（パステル）', 'myouan' ),
		'monotone' => __( 'シンプル（モノトーン）', 'myouan' ),
	],
] );

$control = $customizer->get_control( 'main-color' );
$control->join( $section );
