<?php
use Inc2734\WP_Customizer_Framework\Customizer_Framework;

$customizer = Customizer_Framework::init();
$section    = $customizer->get_section( 'layout' );

$customizer->control( 'select', 'items-archive-page-layout', [
	'label'   => __( '商品アーカイブレイアウト', 'wpbook' ),
	'default' => 'thumbnail',
	'choices' => array(
		'thumbnail'    => __( 'サムネイル', 'wpbook' ),
		'thumbnail-excerpt' => __( 'サムネイル + 抜粋', 'wpbook' ),
	),
] );

$control = $customizer->get_control( 'items-archive-page-layout' );
$control->join( $section );
