<?php
use Inc2734\WP_Customizer_Framework\Customizer_Framework;

$customizer = Customizer_Framework::init();
$section    = $customizer->get_section( 'layout' );

$customizer->control( 'select', 'archive-page-layout', [
	'label'   => __( 'ブログ・お知らせアーカイブレイアウト', 'myouan' ),
	'default' => 'thumbnail',
	'choices' => array(
		'thumbnail'    => __( 'サムネイルあり', 'myouan' ),
		'no-thumbnail' => __( 'サムネイルなし', 'myouan' ),
		'only-title'   => __( 'タイトルのみ', 'myouan' ),
	),
] );

$control = $customizer->get_control( 'archive-page-layout' );
$control->join( $section );
