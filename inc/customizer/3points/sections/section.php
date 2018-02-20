<?php
use Inc2734\WP_Customizer_Framework\Customizer_Framework;

$customizer = Customizer_Framework::init();
$panel      = $customizer->get_panel( 'front-page-3points' );

for ( $i = 1; $i <= 3; $i ++ ) {
	$customizer->section( 'front-page-3points-' . $i, [
		'title' => sprintf( __( '(%1$d)', 'wpbook' ), $i ),
	] );

	$section = $customizer->get_section( 'front-page-3points-' . $i );
	$section->join( $panel );

	$customizer->control( 'image', 'front-page-3points-' . $i . '-image', [
		'label' => __( '画像', 'wpbook' ),
	] );

	$control = $customizer->get_control( 'front-page-3points-' . $i . '-image' );
	$control->join( $section );

	$customizer->control( 'textarea', 'front-page-3points-' . $i . '-description', [
		'label' => __( '概要', 'wpbook' ),
	] );

	$control = $customizer->get_control( 'front-page-3points-' . $i . '-description' );
	$control->join( $section );

	$customizer->control( 'text', 'front-page-3points-' . $i . '-url', [
		'label' => __( 'リンクURL', 'wpbook' ),
	] );

	$control = $customizer->get_control( 'front-page-3points-' . $i . '-url' );
	$control->join( $section );
}
