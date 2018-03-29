<?php
use Inc2734\WP_Customizer_Framework\Customizer_Framework;

$customizer = Customizer_Framework::init();
$customizer->section( 'front-page-gallery', [
	'title'           => __( 'ギャラリー', 'myouan' ),
	'active_callback' => function() {
		if ( ! is_front_page() || is_home() ) {
			return false;
		}

		$page_template = get_post_meta( get_the_ID(), '_wp_page_template', true );
		if ( 'page-templates/front-page-2.php' !== $page_template ) {
			return false;
		}

		return true;
	}
] );

$section = $customizer->get_section( 'front-page-gallery' );

for ( $i = 1; $i <= 4; $i ++ ) {
	$customizer->control( 'image', 'front-page-gallery-' . $i, [
		'label' => __( '画像', 'myouan' ),
	] );

	$control = $customizer->get_control( 'front-page-gallery-' . $i );
	$control->join( $section );
}
