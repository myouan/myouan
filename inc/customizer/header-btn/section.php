<?php
use Inc2734\WP_Customizer_Framework\Customizer_Framework;

$customizer = Customizer_Framework::init();
$customizer->section( 'header-btn', [
	'title'           => __( 'ヘッダーボタン', 'wpbook' ),
	'active_callback' => function() {
		return 'logo-left' === get_theme_mod( 'header-layout-type' );
	}
] );

$section = $customizer->get_section( 'header-btn' );

$customizer->control( 'text', 'header-btn-text', [
	'label' => __( 'ボタンラベル', 'snow-monkey' ),
] );

$control = $customizer->get_control( 'header-btn-text' );
$control->join( $section );

$customizer->control( 'text', 'header-btn-url', [
	'label' => __( 'リンクURL', 'snow-monkey' ),
] );

$control = $customizer->get_control( 'header-btn-url' );
$control->join( $section );
