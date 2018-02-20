<?php
use Inc2734\WP_Customizer_Framework\Customizer_Framework;

$customizer = Customizer_Framework::init();
$customizer->panel( 'front-page-3points', array(
	'title'           => __( '3つのポイント', 'wpbook' ),
	'active_callback' => function() {
		return is_front_page() && ! is_home();
	}
) );
