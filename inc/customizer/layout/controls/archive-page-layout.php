<?php
use Inc2734\WP_Customizer_Framework\Customizer_Framework;

$customizer = Customizer_Framework::init();
$section    = $customizer->get_section( 'layout' );

$customizer->control( 'select', 'archive-page-layout', [
	'label'   => __( 'ブログ・お知らせアーカイブレイアウト', 'wpbook' ),
	'default' => 'thumbnail',
	'choices' => array(
		'thumbnail'    => __( 'サムネイルあり', 'wpbook' ),
		'no-thumbnail' => __( 'サムネイルなし', 'wpbook' ),
		'only-title'   => __( 'タイトルのみ', 'wpbook' ),
	),
] );

$control = $customizer->get_control( 'archive-page-layout' );
$control->join( $section );
