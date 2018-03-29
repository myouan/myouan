<?php
use Inc2734\WP_Customizer_Framework\Customizer_Framework;

$customizer = Customizer_Framework::init();
$customizer->panel( 'front-page-3points', array(
	'title'           => __( '3つのポイント', 'myouan' ),
	'active_callback' => function() {
		if ( ! is_front_page() || is_home() ) {
			return false;
		}

		$page_template = get_post_meta( get_the_ID(), '_wp_page_template', true );
		$active_page_templates = [
			'page-templates/front-page-1.php',
			'page-templates/front-page-2.php',
			'page-templates/front-page-3.php',
			'page-templates/front-page-4.php',
		];
		if ( ! in_array( $page_template, $active_page_templates ) ) {
			return false;
		}

		return true;
	}
) );
