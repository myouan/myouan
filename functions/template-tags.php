<?php
/**
 * Getting 3points
 *
 * @return array
 */
function myouan_get_3points() {
	$points = array();

	for ( $i = 1; $i <= 3; $i ++ ) {
		$point = array();

		$image_url = get_theme_mod( 'front-page-3points-' . $i . '-image' );
		if ( $image_url ) {
			$point = array_merge( $point, array(
				'image' => $image_url,
			) );
		}

		$point_description = get_theme_mod( 'front-page-3points-' . $i . '-description' );
		if ( $point_description ) {
			$point = array_merge( $point, array(
				'description' => $point_description,
			) );
		}

		$point_url = get_theme_mod( 'front-page-3points-' . $i . '-url' );
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

/**
 * Getting base font setting stylesheet
 *
 * @param string
 */
function myouan_get_base_font_stylsheet() {
	if ( 'serif' === get_theme_mod( 'base-font' ) ) {
		return get_template_directory_uri() . '/assets/theme/theme-option/base-font/serif.css';
	} else {
		return get_template_directory_uri() . '/assets/theme/theme-option/base-font/sans-serif.css';
	}
}

/**
 * Getting heading font setting stylesheet
 *
 * @param string
 */
function myouan_get_heading_font_stylsheet() {
	if ( 'serif' === get_theme_mod( 'heading-font' ) ) {
		return get_template_directory_uri() . '/assets/theme/theme-option/heading-font/serif.css';
	} else {
		return get_template_directory_uri() . '/assets/theme/theme-option/heading-font/sans-serif.css';
	}
}
