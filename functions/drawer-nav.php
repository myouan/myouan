<?php
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

/**
 * Drawer nav item classes
 *
 * @param array $classes
 * @param object $item
 * @param object $args
 * @param int $depth
 * @return array
 */
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
