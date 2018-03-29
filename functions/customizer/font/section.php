<?php
use Inc2734\WP_Customizer_Framework\Customizer_Framework;

$customizer = Customizer_Framework::init();
$customizer->section( 'font', [
	'title' => __( 'フォント', 'myouan' ),
] );
