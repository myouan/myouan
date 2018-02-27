<?php
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if ( !is_plugin_active( 'smart-custom-fields/smart-custom-fields.php' ) ) {
	return;
}

/**
 * Added Theme option page.
 */
SCF::add_options_page(
	__( 'テーマオプション', 'wpbook' ),
	__( 'テーマオプション', 'wpbook' ),
	'manage_options',
	'theme-option'
);

/**
 * Register custom fields for option page
 *
 * @param array  $settings
 * @param string $type
 * @param string $id
 * @param string $meta_type
 * @return array
 */
function register_fields_for_option_page( $settings, $type, $id, $meta_type ) {
	if ( $id !== 'theme-option' ) {
		return $settings;
	}

	/**
	 * custom post types
	 */
	$Setting = SCF::add_setting( 'custom-post-types', __( 'カスタム投稿タイプ', 'wpbook' ) );
	$Setting->add_group( 'group-custom-post-types', false, array(
		array(
			'name'  => 'custom-post-types',
			'label' => __( '有効化するカスタム投稿タイプ', 'wpbook' ),
			'type'  => 'check',
			'choices' => array(
				'news' => __( 'お知らせ', 'wpbook' ),
				'faq'  => __( 'よくあるご質問', 'wpbook' ),
				'item' => __( '商品', 'wpbook' ),
			),
			'default' => array(
				'news', 'faq', 'item',
			),
		),
	) );
	$settings[] = $Setting;

	return $settings;
}
add_filter( 'smart-cf-register-fields', 'register_fields_for_option_page', 10, 4 );

/**
 * Register custom fields for item
 *
 * @param array  $settings
 * @param string $type
 * @param string $id
 * @param string $meta_type
 * @return array
 */
function register_fields_for_item( $settings, $type, $id, $meta_type ) {
	if ( $type !== 'item' || $meta_type !== 'post' ) {
		return $settings;
	}

	$Setting = SCF::add_setting( 'item-setting', __( '商品設定', 'wpbook' ) );
	$Setting->add_group( 'group-subcopy', false, array(
		array(
			'name'  => 'subcopy',
			'label' => __( 'サブコピー', 'wpbook' ),
			'type'  => 'text',
		),
	) );
	$Setting->add_group( 'group-price', false, array(
		array(
			'name'  => 'price',
			'label' => __( '価格', 'wpbook' ),
			'type'  => 'text',
		),
	) );
	$Setting->add_group( 'group-url', false, array(
		array(
			'name'  => 'url',
			'label' => __( 'カートURL', 'wpbook' ),
			'type'  => 'text',
		),
	) );
	$Setting->add_group( 'group-item-description', false, array(
		array(
			'name'  => 'item-description',
			'label' => __( '商品説明', 'wpbook' ),
			'type'  => 'textarea',
		),
	) );
	$Setting->add_group( 'group-main-visual', false, array(
		array(
			'name'  => 'main-visual',
			'label' => __( 'メインビジュアル', 'wpbook' ),
			'type'  => 'image',
			'size'  => 'medium',
		),
	) );
	$settings[] = $Setting;

	return $settings;
}
add_filter( 'smart-cf-register-fields', 'register_fields_for_item', 10, 4 );

/**
 * Register custom fields for item
 *
 * @param array  $settings
 * @param string $type
 * @param string $id
 * @param string $meta_type
 * @return array
 */
function register_fields_for_post_and_news( $settings, $type, $id, $meta_type ) {
	if ( ! ( $type === 'post' || $type === 'news' ) || $meta_type !== 'post' ) {
		return $settings;
	}

	$Setting = SCF::add_setting( 'item-setting', __( '商品設定', 'wpbook' ) );
	$Setting->add_group( 'group-subcopy', false, array(
		array(
			'name'  => 'subcopy',
			'label' => __( 'サブコピー', 'wpbook' ),
			'type'  => 'text',
		),
	) );
	$Setting->add_group( 'group-main-visual', false, array(
		array(
			'name'  => 'main-visual',
			'label' => __( 'メインビジュアル', 'wpbook' ),
			'type'  => 'image',
			'size'  => 'medium',
		),
	) );
	$settings[] = $Setting;

	return $settings;
}
add_filter( 'smart-cf-register-fields', 'register_fields_for_post_and_news', 10, 4 );
