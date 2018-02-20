<?php
/**
* Uses composer autoloader
*/
require_once( get_theme_file_path( '/vendor/autoload.php' ) );

include_once( get_template_directory() . '/inc/smart-custom-fields.php' );
include_once( get_template_directory() . '/inc/class-tgm-plugin-activation.php' );
include_once( get_template_directory() . '/functions/template-tags.php' );

/**
 * Loads customizer
 */
$includes = [
	'/inc/customizer/*',
	'/inc/customizer/*/sections/*',
	'/inc/customizer/*/sections/*/controls',
	'/inc/customizer/*/controls',
];
foreach ( $includes as $include ) {
	foreach ( glob( __DIR__ . $include . '/*.php' ) as $file ) {
		$template_name = str_replace( array( trailingslashit( __DIR__ ), '.php' ), '', $file );
		get_template_part( $template_name );
	}
}

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

			add_editor_style( wpbook_get_base_font_stylsheet() );
			add_editor_style( wpbook_get_heading_font_stylsheet() );
			add_editor_style( './assets/css/editor-style.css' );
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
					'name'     => 'ShiftNav',
					'slug'     => 'shiftnav-responsive-mobile-menu',
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
				array(
					'name'     => 'Master Slider',
					'slug'     => 'master-slider',
					'required' => false,
				),
				array(
					'name'     => 'Yoast SEO',
					'slug'     => 'wordpress-seo',
					'required' => false,
				),
				array(
					'name'     => 'Google Analytics by MonsterInsights',
					'slug'     => 'google-analytics-for-wordpress',
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
 * Registers widget areas.
 */
include_once( get_template_directory() . '/functions/register-sidebars.php' );

/**
 * Registers custom post types
 */
include_once( get_template_directory() . '/functions/register-post-types.php' );

/**
 * Enqueues scripts and styles.
 */
include_once( get_template_directory() . '/functions/enqueue-scripts.php' );

/**
 * Commen form
 */
include_once( get_template_directory() . '/functions/comment-form.php' );
