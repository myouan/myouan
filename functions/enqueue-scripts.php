<?php
function myouan_wp_enqueue_scripts() {
	$template_directory_uri = get_template_directory_uri();
	$theme   = wp_get_theme();
	$version = $theme->get( 'Version' );

	wp_enqueue_style(
		'bootstrap',
		$template_directory_uri . '/assets/packages/bootstrap/dist/css/bootstrap.min.css',
		array(),
		'3.3.7'
	);

	wp_enqueue_style(
		get_template(),
		$template_directory_uri . '/assets/css/style.min.css',
		array( 'bootstrap' ),
		$version
	);

	wp_enqueue_style(
		'myouan-override',
		$template_directory_uri . '/override.css',
		array( get_template() ),
		$version
	);

	wp_enqueue_style(
		'myouan-main-color-css',
		$template_directory_uri . '/assets/theme/main-color/' . get_theme_mod( 'main-color' ) . '.css',
		array( get_template() ),
		$version
	);

	wp_enqueue_style(
		'font-awesome',
		$template_directory_uri . '/assets/packages/font-awesome/css/font-awesome.min.css',
		array(),
		'4.7.0'
	);

	wp_enqueue_style(
		get_template() . '-base-font',
		myouan_get_base_font_stylsheet(),
		array( get_template() ),
		$version
	);

	wp_enqueue_style(
		get_template() . '-heading-font',
		myouan_get_heading_font_stylsheet(),
		array( get_template() ),
		$version
	);

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
		$template_directory_uri . '/assets/packages/bootstrap/dist/js/bootstrap.min.js',
		array( 'jquery' ),
		$version,
		true
	);

	wp_enqueue_script( 'jquery-masonry' );

	wp_enqueue_script(
		get_template(),
		$template_directory_uri . '/assets/js/app.min.js',
		array( 'bootstrap' ),
		$version,
		true
	);

	wp_enqueue_script(
		'html5shiv',
		get_template_directory_uri() . '/assets/packages/html5shiv/dist/html5shiv.min.js'
	);
	wp_script_add_data(
		'html5shiv',
		'conditional',
		'lt IE 9'
	);
}
add_action( 'wp_enqueue_scripts', 'myouan_wp_enqueue_scripts' );
