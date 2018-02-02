<?php
/**
 * @package inc2734/wp-customizer-framework
 * @author inc2734
 * @license GPL-2.0+
 */

namespace Inc2734\WP_Customizer_Framework;

use Inc2734\WP_Customizer_Framework\App\Styles;
use Inc2734\WP_Customizer_Framework\App\Manager\Panel_Manager;
use Inc2734\WP_Customizer_Framework\App\Manager\Section_Manager;
use Inc2734\WP_Customizer_Framework\App\Manager\Control_Manager;

/**
 * Framework for WordPress Theme Customization API
 * @see https://codex.wordpress.org/Theme_Customization_API
 */
class Customizer_Framework {

	/**
	 * @var Inc2734\WP_Customizer_Framework\Customizer_Framework
	 */
	protected static $instance;

	/**
	 * @var array
	 */
	protected static $controls = array();

	/**
	 * @var Panel_Manager
	 */
	public static $panel_manager;

	/**
	 * @var Section_Manager
	 */
	public static $section_manager;

	/**
	 * @var Control_Manager
	 */
	public static $control_manager;

	protected function __construct() {
		add_action( 'admin_enqueue_scripts', function() {
			wp_enqueue_script(
				'inc2734-wp-customizer-framework',
				site_url( str_replace( ABSPATH, '', __DIR__ ) . '/assets/js/wp-customizer-framework.js' ),
				[ 'jquery' ],
				false,
				true
			);
		} );

		add_action( 'wp_head', function() {
			echo '<style>';
			do_action( 'inc2734_wp_customizer_framework_print_styles' );
			echo '</style>';
		} );

		self::$panel_manager   = new Panel_Manager( $this );
		self::$section_manager = new Section_Manager( $this );
		self::$control_manager = new Control_Manager( $this );

		add_action( 'customize_register', array( $this, '_customize_register' ) );
	}

	/**
	 * Create instance
	 *
	 * @return Inc2734_WP_Customizer_Framework
	 */
	public static function init() {
		if ( is_null( self::$instance ) ) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	/**
	 * Create instance for styles with customizer
	 *
	 * @return Styles
	 */
	public static function styles() {
		return new Styles();
	}

	/**
	 * Setup customizer
	 *
	 * @param WP_Customize_Manager $wp_customize
	 * @return void
	 */
	public function _customize_register( \WP_Customize_Manager $wp_customize ) {
		foreach ( self::$control_manager->get_controls() as $control ) {
			$wp_customize->add_setting( $control->get_id(), $control->get_setting_args() );

			if ( ! $control->section() ) {
				continue;
			}

			$control->register_control( $wp_customize );
			$section = $control->section();
			$panel   = $section->panel();

			$args = $section->get_args();
			if ( ! empty( $panel ) ) {
				$args = array_merge( $args, array(
					'panel' => $panel->get_id(),
				) );
			}

			if ( ! $wp_customize->get_section( $section->get_id() ) && $args ) {
				$wp_customize->add_section( $section->get_id(), $args );
			}

			if ( ! empty( $panel ) ) {
				$wp_customize->add_panel( $panel->get_id(), $panel->get_args() );
			}

			$partial = $control->partial();
			if ( $partial ) {
				$wp_customize->selective_refresh->add_partial( $partial->get_id(), $partial->get_args() );
			}
		}
	}

	/**
	 * Add Panel
	 *
	 * @param string $panel_id
	 * @param array $args
	 * @return Panel
	 */
	public function panel( $panel_id, $args ) {
		return self::$panel_manager->add( $panel_id, $args );
	}

	/**
	 * Add Section
	 *
	 * @param string $section_id
	 * @param array $args
	 * @return Section
	 */
	public function section( $section_id, $args ) {
		return self::$section_manager->add( $section_id, $args );
	}

	/**
	 * Add Control
	 *
	 * @param string $type
	 * @param string $control_id
	 * @param array $args
	 * @return Control
	 */
	public function control( $type, $control_id, $args ) {
		return self::$control_manager->add( $type, $control_id, $args );
	}

	/**
	 * Get Panel
	 *
	 * @param string $panel_id
	 * @return Panel|null
	 */
	public function get_panel( $panel_id ) {
		return self::$panel_manager->get( $panel_id );
	}

	/**
	 * Get Section
	 *
	 * @param string $section_id
	 * @return Section|null
	 */
	public function get_section( $section_id ) {
		return self::$section_manager->get( $section_id );
	}

	/**
	 * Get Control
	 *
	 * @param string $control_id
	 * @return Control|null
	 */
	public function get_control( $control_id ) {
		return self::$control_manager->get( $control_id );
	}

	/**
	 * @deprecated
	 */
	public function register( $control ) {
		return $control;
	}
}
