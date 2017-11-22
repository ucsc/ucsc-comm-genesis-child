<?php
/**
 * Menu HTML markup structure
 *
 * @package     UCSC\Communications
 * @since       1.0.0
 * @author      Blackbird Consulting
 * @link        https://www.blackbirdconsult.com
 * @license     GNU General Public License 2.0+
 */
namespace UCSC\Communications;

/**
 * Unregister menu callbacks.
 *
 * @since 1.0.0
 *
 * @return void
 */
function unregister_menu_callbacks() {
	remove_action( 'genesis_after_header', 'genesis_do_subnav' );
}

// Reposition the secondary navigation menu
add_action( 'genesis_footer', 'genesis_do_subnav', 5 );

add_filter( 'wp_nav_menu_args', __NAMESPACE__ . '\setup_secondary_menu_args' );
/**
 * Reduce the secondary navigation menu to one level depth.
 *
 * @since 1.0.0
 *
 * @param array $args
 *
 * @return array
 */
function setup_secondary_menu_args( array $args ) {

	if ( 'secondary' != $args['theme_location'] ) {
		return $args;
	}

	$args['depth'] = 1;

	return $args;
}

/**
 * Create a new menu location for Mobile
 *
 * @since 1.0.0
 *
 * @param array $args
 *
 * @return array
 */

add_action( 'after_setup_theme', __NAMESPACE__ . '\bb_register_mobile_menu' );
function bb_register_mobile_menu() {
	register_nav_menu( 'mobile-menu', __( 'Mobile Menu' ) );
}

//* Add custom classes to navigation menu
add_filter( 'genesis_attr_nav-primary', __NAMESPACE__ . '\bb_new_primary_nav_class' );
function bb_new_primary_nav_class( $attributes ) {
 $attributes['class'] = 'nav-primary navbar-collapse collapse navbar-target';
return $attributes;
}
