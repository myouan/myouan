<?php
function wpbook_register_post_types() {
	if ( !class_exists( 'SCF' ) ) {
		return;
	}

	$active_custom_post_types = SCF::get_option_meta( 'theme-option', 'custom-post-types' );

	if ( in_array( 'news', $active_custom_post_types ) ) {
		register_post_type(
			'news',
			array(
				'label'       => __( 'お知らせ', 'wpbook' ),
				'public'      => true,
				'has_archive' => true,
				'supports'    => array(
					'title', 'editor', 'excerpt', 'author', 'thumbnail',
				),
			)
		);
	}

	if ( in_array( 'faq', $active_custom_post_types ) ) {
		register_post_type(
			'faq',
			array(
				'label'       => __( 'よくあるご質問', 'wpbook' ),
				'public'      => true,
				'has_archive' => true,
				'supports'    => array(
					'title', 'editor', 'author',
				),
			)
		);
	}

	if ( in_array( 'item', $active_custom_post_types ) ) {
		register_post_type(
			'item',
			array(
				'label'       => __( '商品', 'wpbook' ),
				'public'      => true,
				'has_archive' => true,
				'supports'    => array(
					'title', 'editor', 'excerpt', 'author', 'thumbnail',
				),
			)
		);
	}
}
add_action( 'init', 'wpbook_register_post_types' );
