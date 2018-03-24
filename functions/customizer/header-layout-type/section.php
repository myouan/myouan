<?php
use Inc2734\WP_Customizer_Framework\Customizer_Framework;

$customizer = Customizer_Framework::init();
$customizer->section( 'header-layout', [
	'title' => __( 'ヘッダーレイアウト', 'wpbook' ),
] );

$section = $customizer->get_section( 'header-layout' );

$customizer->control( 'select', 'header-layout-type', [
	'label'   => __( 'ヘッダーレイアウト', 'snow-monkey' ),
	'default' => 'logo-left',
	'choices' => [
		'logo-left'   => __( '【2段レイアウト】ロゴ左 + サイト説明 + ヘッダーボタン', 'wpbook' ),
		'logo-center' => __( '【2段レイアウト】ロゴ中央', 'wpbook' ),
		'1row'        => __( '【1段レイアウト】ロゴ＋メニュー横並び', 'wpbook' ),
		'overlay'     => __( '【1段レイアウト】ロゴ＋メニュー横並び、トップページのみオーバレイ', 'wpbook' ),
	],
] );

$control = $customizer->get_control( 'header-layout-type' );
$control->join( $section );
