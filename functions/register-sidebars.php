<?php
function wpbook_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'サイドバー', 'wpbook' ),
		'id'            => 'sidebar',
		'description'   => __( 'サイドバー', 'wpbook' ),
		'before_widget' => '<section id="%1$s" class="c-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h1 class="c-widget__title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => __( 'フッター', 'wpbook' ),
		'id'            => 'footer',
		'description'   => __( 'フッター', 'wpbook' ),
		'before_widget' => '<section id="%1$s" class="c-widget col-md-4 %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h1 class="c-widget__title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => __( 'メインビジュアル', 'wpbook' ),
		'id'            => 'main-visual',
		'description'   => __( 'メインビジュアル', 'wpbook' ),
		'before_widget' => '<section id="%1$s" class="c-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h1 class="c-widget__title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => __( 'トップページ上部', 'wpbook' ),
		'id'            => 'front-page-top',
		'description'   => __( 'トップページ上部', 'wpbook' ),
		'before_widget' => '<section id="%1$s" class="c-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h1 class="c-widget__title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => __( 'トップページ下部', 'wpbook' ),
		'id'            => 'front-page-bottom',
		'description'   => __( 'トップページ下部', 'wpbook' ),
		'before_widget' => '<section id="%1$s" class="c-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h1 class="c-widget__title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => __( '投稿・お知らせ記事下', 'wpbook' ),
		'id'            => 'post-bottom',
		'description'   => __( '投稿・お知らせ記事下', 'wpbook' ),
		'before_widget' => '<section id="%1$s" class="c-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h1 class="c-widget__title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => __( '投稿・お知らせ記事タイトル下', 'wpbook' ),
		'id'            => 'post-title-bottom',
		'description'   => __( '投稿・お知らせ記事タイトル下', 'wpbook' ),
		'before_widget' => '<section id="%1$s" class="c-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h1 class="c-widget__title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'wpbook_widgets_init' );
