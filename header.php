<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head prefix="og: http://ogp.me/ns# <?php echo ( is_single() || is_page() ) ? 'fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#' : 'fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#' ?>">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/html5shiv.min.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="container" class="l-container">
	<?php
	if ( class_exists( 'SCF' ) ) {
		$header_layout_type = SCF::get_option_meta( 'theme-option', 'header-layout-type' );
		if ( $header_layout_type ) {
			get_template_part( 'templates/layout/header/' . $header_layout_type );
		}
	}
	?>
