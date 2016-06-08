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
 * Register custom fields
 *
 * @param array  $settings
 * @param string $type
 * @param int    $id
 * @param string $meta_type
 * @return array
 */
function register_fields( $settings, $type, $id, $meta_type ) {
	if ( $id !== 'theme-option' ) {
		return $settings;
	}

	/**
	 * color setting
	 */
	$Setting = SCF::add_setting( 'main-color-setting', __( 'メインカラー設定', 'wpbook' ) );
	$Setting->add_group( 'group-main-color-setting', false, array(
		array(
			'name'  => 'main-color-setting',
			'label' => __( 'メインカラー設定', 'wpbook' ),
			'type'  => 'radio',
			'choices' => array(
				'blue'     => __( '堅実（ブルー）', 'wpbook' ),
				'pastel'   => __( 'いかわいい（パステル）', 'wpbook' ),
				'monotone' => __( 'シンプル（モノトーン）', 'wpbook' ),
			),
			'default' => 'blue',
		),
	) );
	$settings[] = $Setting;

	/**
	 * header button
	 */
	$Setting = SCF::add_setting( 'header-btn', __( 'ヘッダーボタン', 'wpbook' ) );
	$Setting->add_group( 'group-header-btn', false, array(
		array(
			'name'  => 'header-btn-text',
			'label' => __( 'ボタンラベル', 'wpbook' ),
			'type'  => 'text',
		),
		array(
			'name'    => 'header-btn-url',
			'label'   => __( 'リンクURL', 'wpbook' ),
			'type'    => 'text',
		),
	) );
	$settings[] = $Setting;

	/**
	 * header layout
	 */
	$Setting = SCF::add_setting( 'header-layout', __( 'ヘッダーレイアウト', 'wpbook' ) );
	$Setting->add_group( 'group-header-layout-2row', false, array(
		array(
			'name'  => 'header-layout-type',
			'label' => __( '', 'wpbook' ),
			'type'  => 'radio',
			'choices' => array(
				'logo-left'   => __( '【2段レイアウト】ロゴ左 + サイト説明 + ヘッダーボタン', 'wpbook' ),
				'logo-center' => __( '【2段レイアウト】ロゴ中央', 'wpbook' ),
				'1row'        => __( '【1段レイアウト】ロゴ＋メニュー横並び', 'wpbook' ),
			),
			'default' => 'logo-left',
			'radio_direction'  => 'vertical',
		),
	) );
	$settings[] = $Setting;

	/**
	 * front page 3 points
	 */
	$Setting = SCF::add_setting( 'front-page-3points', __( 'トップページ3つのポイント', 'wpbook' ) );
	$Setting->add_group( 'group-front-page-3points-1', false, array(
		array(
			'name'  => 'front-page-3points-1-image',
			'label' => __( '画像', 'wpbook' ),
			'type'  => 'image',
		),
		array(
			'name'  => 'front-page-3points-1-description',
			'label' => __( '概要', 'wpbook' ),
			'type'  => 'textarea',
		),
		array(
			'name'  => 'front-page-3points-1-url',
			'label' => __( 'リンクURL', 'wpbook' ),
			'type'  => 'text',
		),
	) );
	$Setting->add_group( 'group-front-page-3points-2', false, array(
		array(
			'name'  => 'front-page-3points-2-image',
			'label' => __( '画像', 'wpbook' ),
			'type'  => 'image',
		),
		array(
			'name'  => 'front-page-3points-2-description',
			'label' => __( '概要', 'wpbook' ),
			'type'  => 'textarea',
		),
		array(
			'name'  => 'front-page-3points-2-url',
			'label' => __( 'リンクURL', 'wpbook' ),
			'type'  => 'text',
		),
	) );
	$Setting->add_group( 'group-front-page-3points-3', false, array(
		array(
			'name'  => 'front-page-3points-3-image',
			'label' => __( '画像', 'wpbook' ),
			'type'  => 'image',
		),
		array(
			'name'  => 'front-page-3points-3-description',
			'label' => __( '概要', 'wpbook' ),
			'type'  => 'textarea',
		),
		array(
			'name'  => 'front-page-3points-3-url',
			'label' => __( 'リンクURL', 'wpbook' ),
			'type'  => 'text',
		),
	) );
	$settings[] = $Setting;

	/**
	 * front page gallery
	 */
	$Setting = SCF::add_setting( 'front-page-gallery', __( 'トップページギャラリー', 'wpbook' ) );
	$Setting->add_group( 'group-front-page-gallery', false, array(
		array(
			'name'  => 'front-page-gallery-1',
			'label' => __( '画像', 'wpbook' ),
			'type'  => 'image',
		),
		array(
			'name'  => 'front-page-gallery-2',
			'label' => __( '画像', 'wpbook' ),
			'type'  => 'image',
		),
		array(
			'name'  => 'front-page-gallery-3',
			'label' => __( '画像', 'wpbook' ),
			'type'  => 'image',
		),
		array(
			'name'  => 'front-page-gallery-4',
			'label' => __( '画像', 'wpbook' ),
			'type'  => 'image',
		),
	) );
	$settings[] = $Setting;

	/**
	 * front page feature
	 */
	$Setting = SCF::add_setting( 'front-page-feature', __( 'トップページおすすめ', 'wpbook' ) );
	$Setting->add_group( 'group-front-page-feature', false, array(
		array(
			'name'  => 'front-page-feature-image',
			'label' => __( '画像', 'wpbook' ),
			'type'  => 'image',
		),
		array(
			'name'  => 'front-page-feature-html',
			'label' => __( 'HTML', 'wpbook' ),
			'type'  => 'wysiwyg',
		),
	) );
	$settings[] = $Setting;

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
add_filter( 'smart-cf-register-fields', 'register_fields', 10, 4 );
