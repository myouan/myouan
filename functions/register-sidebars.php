<?php
function myouan_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'サイドバー', 'myouan' ),
		'id'            => 'sidebar',
		'description'   => __( 'サイドバー', 'myouan' ),
		'before_widget' => '<section id="%1$s" class="c-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h1 class="c-widget__title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => __( 'フッター', 'myouan' ),
		'id'            => 'footer',
		'description'   => __( 'フッター', 'myouan' ),
		'before_widget' => '<section id="%1$s" class="c-widget col-md-4 %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h1 class="c-widget__title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => __( 'メインビジュアル', 'myouan' ),
		'id'            => 'main-visual',
		'description'   => __( 'メインビジュアル', 'myouan' ),
		'before_widget' => '<section id="%1$s" class="c-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h1 class="c-widget__title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => __( 'トップページ上部', 'myouan' ),
		'id'            => 'front-page-top',
		'description'   => __( 'トップページ上部', 'myouan' ),
		'before_widget' => '<section id="%1$s" class="c-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h1 class="c-widget__title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => __( 'トップページ下部', 'myouan' ),
		'id'            => 'front-page-bottom',
		'description'   => __( 'トップページ下部', 'myouan' ),
		'before_widget' => '<section id="%1$s" class="c-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h1 class="c-widget__title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => __( '投稿・お知らせ記事下', 'myouan' ),
		'id'            => 'post-bottom',
		'description'   => __( '投稿・お知らせ記事下', 'myouan' ),
		'before_widget' => '<section id="%1$s" class="c-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h1 class="c-widget__title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => __( '投稿・お知らせ記事タイトル下', 'myouan' ),
		'id'            => 'post-title-bottom',
		'description'   => __( '投稿・お知らせ記事タイトル下', 'myouan' ),
		'before_widget' => '<section id="%1$s" class="c-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h1 class="c-widget__title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'myouan_widgets_init' );
