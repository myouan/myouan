<?php
use Inc2734\WP_Customizer_Framework\Customizer_Framework;

$customizer = Customizer_Framework::init();
$customizer->section( 'main-color', [
	'title' => __( 'メインカラー', 'wpbook' ),
] );

$section = $customizer->get_section( 'main-color' );

$customizer->control( 'select', 'main-color', [
	'label'   => __( 'メインカラー', 'snow-monkey' ),
	'default' => 'blue',
	'choices' => [
		'blue'     => __( '堅実（ブルー）', 'wpbook' ),
		'pastel'   => __( 'かわいい（パステル）', 'wpbook' ),
		'monotone' => __( 'シンプル（モノトーン）', 'wpbook' ),
	],
] );

$control = $customizer->get_control( 'main-color' );
$control->join( $section );
