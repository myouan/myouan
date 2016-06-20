<?php
$layout = 'thumbnail';

if ( class_exists( 'SCF' ) && SCF::get_option_meta( 'theme-option', 'archive-page-layout' ) ) {
	$layout = SCF::get_option_meta( 'theme-option', 'archive-page-layout' );
}

if ( $layout === 'no-thumbnail' ) {
	get_template_part( 'templates/content/content--no-thumbnail' );
} elseif ( $layout === 'only-title' ) {
	get_template_part( 'templates/content/content--only-title' );
} else {
	get_template_part( 'templates/content/content--thumbnail' );
}
