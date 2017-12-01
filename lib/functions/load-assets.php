<?php
/**
 * Asset loader handler.
 *
 * @package     UCSC\Communications
 * @since       1.0.0
 * @author      Blackbird Consulting
 * @link        https://www.blackbirdconsult.com
 * @license     GNU General Public License 2.0+
 */
namespace UCSC\Communications;

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_assets' );
/**
 * Enqueue Scripts and Styles.
 *
 * @since 1.0.2
 *
 * @return void
 */
function enqueue_assets() {

	wp_enqueue_style( CHILD_TEXT_DOMAIN . '-fonts', '//fonts.googleapis.com/css?EB+Garamond:400,500,600,700,800', array(), CHILD_THEME_VERSION );
	wp_enqueue_style( CHILD_TEXT_DOMAIN . '-fonts-2', '//fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700', array(), CHILD_THEME_VERSION );
	wp_enqueue_style( CHILD_TEXT_DOMAIN . '-fonts-3', '//fonts.googleapis.com/css?family=Roboto:300,400,500,700', array(), CHILD_THEME_VERSION );
	wp_enqueue_style( 'dashicons' );
	
	//Back To Top
	wp_enqueue_script( CHILD_TEXT_DOMAIN .'-back-to-top', CHILD_URL . '/assets/js/blackbird-back-to-top.js', array( 'jquery' ), CHILD_THEME_VERSION, true );

	//Sticky Reveal
	wp_enqueue_script( CHILD_TEXT_DOMAIN .'-sticky-reveal', CHILD_URL . '/assets/js/sticky-reveal.js', array( 'jquery' ), CHILD_THEME_VERSION, true );

	//Hide Primary Nav Menu on Mobile
	//wp_enqueue_script( CHILD_TEXT_DOMAIN .'-hide-primary-nav', CHILD_URL . '/assets/js/hide-primary-nav-mobile.js', array( 'jquery' ), CHILD_THEME_VERSION, true );

	//Home Page Scroll
	wp_enqueue_script( CHILD_TEXT_DOMAIN .'-home-page-scroll', CHILD_URL . '/assets/js/home-page-scroll-to-here.js', array( 'jquery' ), CHILD_THEME_VERSION, true );
	
	// FontAwesome
	wp_enqueue_script( 'font-awesome', 'https://use.fontawesome.com/64d0d03cae.js',  null, true);

	// Bootstrap components js
	// wp_enqueue_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js',  null, true);
	wp_enqueue_script( CHILD_TEXT_DOMAIN .'-bootstrap-collapse', CHILD_URL . '/assets/js/collapse.js', array( 'jquery' ), CHILD_THEME_VERSION, true );
	wp_enqueue_script( CHILD_TEXT_DOMAIN .'-bootstrap-dropdown', CHILD_URL . '/assets/js/dropdown.js', array( 'jquery' ), CHILD_THEME_VERSION, true );


	// wp_enqueue_script( CHILD_TEXT_DOMAIN . '-responsive-menu', CHILD_URL . '/assets/js/responsive-menu.js', array( 'jquery' ), CHILD_THEME_VERSION, true );

	$localized_script_args = array(
		'mainMenu' => __( 'Menu', CHILD_TEXT_DOMAIN ),
		'subMenu'  => __( 'Menu', CHILD_TEXT_DOMAIN ),
	);
	wp_localize_script( CHILD_TEXT_DOMAIN . '-responsive-menu', 'developersL10n', $localized_script_args );
}