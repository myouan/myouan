<?php
/**
 * Getting 3points
 *
 * @return array
 */
function wpbook_get_3points() {
	if ( ! class_exists( 'SCF' ) ) {
		return array();
	}

	$points = array();

	for ( $i = 1; $i <= 3; $i ++ ) {
		$point = array();

		$point_image = SCF::get_option_meta( 'theme-option', 'front-page-3points-' . $i . '-image' );
		if ( $point_image ) {
			$image_url = wp_get_attachment_url( $point_image );
			if ( $image_url ) {
				$point = array_merge( $point, array(
					'image' => $image_url,
				) );
			}
		}

		$point_description = SCF::get_option_meta( 'theme-option', 'front-page-3points-' . $i . '-description' );
		if ( $point_description ) {
			$point = array_merge( $point, array(
				'description' => $point_description,
			) );
		}

		$point_url = SCF::get_option_meta( 'theme-option', 'front-page-3points-' . $i . '-url' );
		if ( $point_url ) {
			$point = array_merge( $point, array(
				'url' => $point_url,
			) );
		}

		if ( $point ) {
			$points[] = $point;
		}
	}

	return $points;
}
