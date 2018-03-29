<?php
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if ( !is_plugin_active( 'smart-custom-fields/smart-custom-fields.php' ) ) {
	return;
}

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

	$Setting = SCF::add_setting( 'item-setting', __( '商品設定', 'myouan' ) );
	$Setting->add_group( 'group-subcopy', false, array(
		array(
			'name'  => 'subcopy',
			'label' => __( 'サブコピー', 'myouan' ),
			'type'  => 'text',
		),
	) );
	$Setting->add_group( 'group-price', false, array(
		array(
			'name'  => 'price',
			'label' => __( '価格', 'myouan' ),
			'type'  => 'text',
		),
	) );
	$Setting->add_group( 'group-url', false, array(
		array(
			'name'  => 'url',
			'label' => __( 'カートURL', 'myouan' ),
			'type'  => 'text',
		),
	) );
	$Setting->add_group( 'group-item-description', false, array(
		array(
			'name'  => 'item-description',
			'label' => __( '商品説明', 'myouan' ),
			'type'  => 'textarea',
		),
	) );
	$Setting->add_group( 'group-main-visual', false, array(
		array(
			'name'  => 'main-visual',
			'label' => __( 'メインビジュアル', 'myouan' ),
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

	$Setting = SCF::add_setting( 'item-setting', __( '商品設定', 'myouan' ) );
	$Setting->add_group( 'group-subcopy', false, array(
		array(
			'name'  => 'subcopy',
			'label' => __( 'サブコピー', 'myouan' ),
			'type'  => 'text',
		),
	) );
	$Setting->add_group( 'group-main-visual', false, array(
		array(
			'name'  => 'main-visual',
			'label' => __( 'メインビジュアル', 'myouan' ),
			'type'  => 'image',
			'size'  => 'medium',
		),
	) );
	$settings[] = $Setting;

	return $settings;
}
add_filter( 'smart-cf-register-fields', 'register_fields_for_post_and_news', 10, 4 );
