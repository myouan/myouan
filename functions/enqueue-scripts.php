<?php
function wpbook_wp_enqueue_scripts() {
	$template_directory_uri = get_template_directory_uri();
	$theme   = wp_get_theme();
	$version = $theme->get( 'Version' );

	wp_enqueue_style(
		'bootstrap',
		$template_directory_uri . '/assets/vendor/bootstrap/css/bootstrap.min.css',
		array(),
		'3.3.5'
	);

	wp_enqueue_style(
		get_template(),
		$template_directory_uri . '/style.min.css',
		array( 'bootstrap' ),
		$version
	);

	wp_enqueue_style(
		'wpbook-override',
		$template_directory_uri . '/override.css',
		array( get_template() ),
		$version
	);

	if ( class_exists( 'SCF' ) ) {
		$main_color_css = SCF::get_option_meta( 'theme-option', 'main-color-setting' );
		wp_enqueue_style(
			'wpbook-main-color-css',
			$template_directory_uri . '/assets/main-color/' . $main_color_css . '.css',
			array( get_template() ),
			$version
		);
	}

	wp_enqueue_style(
		'font-awesome',
		$template_directory_uri . '/assets/vendor/font-awesome/css/font-awesome.min.css',
		array(),
		'4.6.3'
	);

	if ( wpbook_get_base_font_stylsheet() ) {
		wp_enqueue_style(
			get_template() . '-base-font',
			wpbook_get_base_font_stylsheet(),
			array( get_template() ),
			$version
		);
	}

	if ( wpbook_get_heading_font_stylsheet() ) {
		wp_enqueue_style(
			get_template() . '-heading-font',
			wpbook_get_heading_font_stylsheet(),
			array( get_template() ),
			$version
		);
	}

	if ( is_child_theme() ) {
		wp_enqueue_style(
			get_stylesheet(),
			get_stylesheet_uri(),
			array( get_template() ),
			$version
		);
	}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_script(
		'bootstrap',
		$template_directory_uri . '/assets/vendor/bootstrap/js/bootstrap.min.js',
		array( 'jquery' ),
		$version,
		true
	);

	/*
	wp_enqueue_script(
		'masonry',
		$template_directory_uri . '/assets/vendor/masonry.pkgd.min.js',
		array( 'jquery' ),
		$version,
		true
	);
	*/
	wp_enqueue_script( 'jquery-masonry' );

	wp_enqueue_script(
		get_template(),
		$template_directory_uri . '/assets/js/app.min.js',
		array( 'bootstrap' ),
		$version,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'wpbook_wp_enqueue_scripts' );
