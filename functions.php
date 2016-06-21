<?php
include_once( get_template_directory() . '/vendor/smart-custom-fields.php' );
include_once( get_template_directory() . '/vendor/class-tgm-plugin-activation.php' );
include_once( get_template_directory() . '/functions/template-tags.php' );

if ( ! function_exists( 'wpbook_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 */
	function wpbook_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 */
		load_theme_textdomain( 'wpbook', get_template_directory() . '/languages' );

		/**
		 *  Add default posts and comments RSS feed links to head.
		 */
		add_theme_support( 'automatic-feed-links' );

		/**
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/**
		 * Enable support for custom logo.
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 240,
			'width'       => 240,
			'flex-height' => true,
		) );

		/**
		 * Enable support for Post Thumbnails on posts and pages.
		 */
		add_theme_support( 'post-thumbnails' );

		/**
		 * This theme uses wp_nav_menu() in locations.
		 */
		register_nav_menus( array(
			'global-nav' => __( 'グローバルメニュー（PC のみ）', 'wpbook' ),
			'header-nav' => __( 'ヘッダーメニュー（PC のみ）', 'wpbook' ),
			'footer-nav' => __( 'フッターメニュー（PC のみ）', 'wpbook' ),
			'drawer-nav' => __( 'モバイル用メニュー（ドロワー）', 'wpbook' ),
			'mobile-nav' => __( 'モバイル用メニュー（ロゴ下）', 'wpbook' ),
			'social-nav' => __( 'ソーシャルアカウントメニュー', 'wpbook' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		/*
		 * This theme styles the visual editor.
		 */
		function wpbook_add_editor_styles() {
			add_editor_style( array(
				get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css',
				get_template_directory_uri() . '/assets/vendor/font-awesome/css/font-awesome.min.css',
			) );
			if ( wpbook_get_base_font_stylsheet() ) {
				add_editor_style( wpbook_get_base_font_stylsheet() );
			}
			if ( wpbook_get_heading_font_stylsheet() ) {
				add_editor_style( wpbook_get_heading_font_stylsheet() );
			}
			add_editor_style( './editor-style.css' );
		}
		add_action( 'admin_init', 'wpbook_add_editor_styles' );

		/**
		 *  Indicate widget sidebars can use selective refresh in the Customizer.
		 */
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Added excerpt in page.
		 */
		add_post_type_support( 'page', 'excerpt' );

		/**
		 * Register the required plugins for this theme.
		 */
		function wpbook_register_required_plugins() {
			$plugins = array(
				array(
					'name'     => 'Smart Custom Fields',
					'slug'     => 'smart-custom-fields',
					'required' => true,
				),
				array(
					'name'     => 'MW WP Form',
					'slug'     => 'mw-wp-form',
					'required' => false,
				),
				array(
					'name'     => 'WP-PageNavi',
					'slug'     => 'wp-pagenavi',
					'required' => false,
				),
			);

			$config = array(
				'id'           => 'wpbook',
				'has_notices'  => true,
				'dismissable'  => true,
				'is_automatic' => true,
			);
			tgmpa( $plugins, $config );
		}
		add_action( 'tgmpa_register', 'wpbook_register_required_plugins' );
	}
}
add_action( 'after_setup_theme', 'wpbook_setup' );

/**
 * Sets the content width in pixels, based on the theme's design and stylesheet.
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wpbook_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wpbook_content_width', 1140 );
}
add_action( 'after_setup_theme', 'wpbook_content_width', 0 );

/**
 * Registers widget areas.
 */
function wpbook_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'サイドバー', 'wpbook' ),
		'id'            => 'sidebar',
		'description'   => __( 'サイドバー', 'wpbook' ),
		'before_widget' => '<section id="%1$s" class="p-widget p-widget--sidebar %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h1 class="p-widget__title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => __( 'フッター', 'wpbook' ),
		'id'            => 'footer',
		'description'   => __( 'フッター', 'wpbook' ),
		'before_widget' => '<section id="%1$s" class="p-widget p-widget--footer col-md-4 %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h1 class="p-widget__title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => __( 'メインビジュアル', 'wpbook' ),
		'id'            => 'main-visual',
		'description'   => __( 'メインビジュアル', 'wpbook' ),
		'before_widget' => '<section id="%1$s" class="p-widget p-widget--main-visual %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h1 class="p-widget__title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => __( 'トップページ上部', 'wpbook' ),
		'id'            => 'front-page-top',
		'description'   => __( 'トップページ上部', 'wpbook' ),
		'before_widget' => '<section id="%1$s" class="p-widget p-widget--front-page-top %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h1 class="p-widget__title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => __( 'トップページ下部', 'wpbook' ),
		'id'            => 'front-page-bottom',
		'description'   => __( 'トップページ下部', 'wpbook' ),
		'before_widget' => '<section id="%1$s" class="p-widget p-widget--front-page-bottom %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h1 class="p-widget__title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => __( '投稿・お知らせ記事下', 'wpbook' ),
		'id'            => 'post-bottom',
		'description'   => __( '投稿・お知らせ記事下', 'wpbook' ),
		'before_widget' => '<section id="%1$s" class="p-widget p-widget--post-bottom %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h1 class="p-widget__title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => __( '投稿・お知らせ記事タイトル下', 'wpbook' ),
		'id'            => 'post-title-bottom',
		'description'   => __( '投稿・お知らせ記事タイトル下', 'wpbook' ),
		'before_widget' => '<section id="%1$s" class="p-widget p-widget-post-title-bottom %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h1 class="p-widget__title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'wpbook_widgets_init' );

/**
 * Registers custom post types
 */
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

/**
 * Enqueues scripts and styles.
 */
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
		'3.3.5'
	);

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

	wp_enqueue_script(
		'masonry',
		$template_directory_uri . '/assets/vendor/masonry.pkgd.min.js',
		array( 'jquery' ),
		$version,
		true
	);

	wp_enqueue_script(
		get_template(),
		$template_directory_uri . '/assets/js/app.min.js',
		array( 'bootstrap' ),
		$version,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'wpbook_wp_enqueue_scripts' );

/**
 * Output hentry class  when the single page only
 *
 * @param array $classes
 * @return array
 */
function wpbook_post_class( $classes ) {
	$allow_hentry_post_types = apply_filters( 'wpbook_allow_hentry_post_types', array( 'post' ) );
	if ( ! in_array( get_post_type(), $allow_hentry_post_types ) ) {
		$classes = array_diff( $classes, array( 'hentry' ) );
	}
	return $classes;
}
add_filter( 'post_class', 'wpbook_post_class' );

/**
 * Comment form text field styling
 *
 * @param array $fields
 * @return array
 */
function wpbook_comment_form_default_fields( $fields ) {
	foreach ( $fields as $key => $field ) {
		$fields[$key] = preg_replace( '/(id=".+?")/', '$1 class="form-control"', $field );
	}
	return $fields;
}
add_filter( 'comment_form_default_fields', 'wpbook_comment_form_default_fields' );

/**
 * Comment form textarea styling
 *
 * @param string $comment_field
 * @return string
 */
function wpbook_comment_form_field_comment( $comment_field ) {
	$comment_field = preg_replace( '/(id=".+?")/', '$1 class="form-control"', $comment_field );
	return $comment_field;
}
add_filter( 'comment_form_field_comment', 'wpbook_comment_form_field_comment' );

/**
 * Comment form button styling
 *
 * @param string $comment_field
 * @return string
 */
function wpbook_comment_form_submit_field( $submit_field ) {
	$submit_field = str_replace( 'class="submit"', 'class="submit btn btn-primary"', $submit_field );
	return $submit_field;
}
add_filter( 'comment_form_submit_field', 'wpbook_comment_form_submit_field' );

/**
 * Calendar styling
 *
 * @param string $calendar
 * @return string
 */
function wpbook_get_calendar( $calendar ) {
	return str_replace( '<table', '<table class="table"', $calendar );
}
add_filter( 'get_calendar', 'wpbook_get_calendar' );

/**
 * Drawer nav
 *
 * @param string $nav_menu
 * @param array $args
 * @return string
 */
function wpbook_drawer_nav( $nav_menu, $args ) {
	if ( $args->theme_location !== 'drawer-nav' ) {
		return $nav_menu;
	}

	$nav_menu = preg_replace(
		'/^<div class="menu-short-container">(.*)<\/div>$/ms',
		'<nav class="c-drawer__body c-drawer__body--fixed" role="navigation" aria-expanded="false">$1</nav>',
		$nav_menu
	);

	$nav_menu = preg_replace(
		'/<ul id="menu-.+?" class="menu">/ms',
		'<ul class="c-drawer__menus">',
		$nav_menu
	);

	$nav_menu = preg_replace(
		'/<ul class="sub-menu">/ms',
		'<div class="c-drawer__toggle"><i class="fa fa-angle-right"></i></div><ul class="c-drawer__submenus sub-menu">',
		$nav_menu
	);

	$nav_menu = preg_replace(
		'/menu-item-has-children(.*?)"/ms',
		'menu-item-has-children$1" aria-expanded="false"',
		$nav_menu
	);

	return $nav_menu;
}
add_filter( 'wp_nav_menu', 'wpbook_drawer_nav', 10, 2 );

function wpbook_drawer_nav_menu_css_class( $classes, $item, $args, $depth ) {
	if ( $args->theme_location !== 'drawer-nav' ) {
		return $classes;
	}
	if ( $depth > 0 ) {
		$classes[] = 'c-drawer__submenu';
	} else {
		$classes[] = 'c-drawer__menu';
	}
	return $classes;
}
add_filter( 'nav_menu_css_class', 'wpbook_drawer_nav_menu_css_class', 10, 4 );
