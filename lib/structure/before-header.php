<?php
/**
 * Header Top HTML markup structure
 *
 * @package Blackbird\Developers\Structure
 * @since   1.0.0
 * @author  Blackbird Consulting
 * @link    https://www.blackbirdconsult.com
 * @license GNU General Public License 2.0+
 */
 namespace UCSC\Communications\Structure;

 add_action('wp_head', __NAMESPACE__ . '\bb_top_row_select');
 function bb_top_row_select(){
	 if (is_front_page()){
		add_action('genesis_before_header', __NAMESPACE__ . '\bb_add_top_row_front');
	 }
	 else {
		add_action('genesis_before_header', __NAMESPACE__ . '\bb_add_top_row');
	 }
 }

// Front/Home Page drop-down
function bb_add_top_row_front(){
	$logo = get_stylesheet_directory_uri().'/assets/images/logo-abbr.png';
	
	$custom_title = '<a href="/"><img class="header-logo" src="'.$logo.'" alt="UCSC Logo" ></a>';
	echo '<div class="page-top front-top" id="page-top">';
	echo '<div class="top-row wrap">';
	
	echo '<div class="top-row-left">';
	echo '<div class="top-row-left-wrap">';
	echo $custom_title;
	echo '</div>';
	echo '</div>';
	echo '<div class="top-row-right">';
	echo '<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#genesis-nav-primary">';
	echo '<i class="fa fa-bars fa-2x" aria-hidden="true" ></i>';
	//echo '<span class="dashicons dashicons-menu"></span>';
	echo '</button>';
	genesis_widget_area( 'top-row-search' );
	echo '</div>';
	echo '</div>';
	//Primary Nav Mobile	
	wp_nav_menu (array(
		'theme_location'  => 'mobile-menu',
		'menu'            => 'main-menu',
		'container'       => 'nav',
		'container_class' => 'nav-primary collapse',
		'container_id'    => 'genesis-nav-primary',
		'menu_class'      => 'menu genesis-nav-menu menu-primary js-superfish sf-js-enabled sf-arrows',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<div class="wrap"><ul id="%1$s" class="%2$s">%3$s</ul></div>',
		'depth'           => 0,
		'walker'          => ''
	));
    echo '</div>';
	}

	//Inner pages top row

	function bb_add_top_row(){
		$logo = get_stylesheet_directory_uri().'/assets/images/logo-abbr.png';
		
		$custom_title = '<a href="/"><img class="header-logo" src="'.$logo.'" alt="UCSC Logo" ></a>';
		echo '<div class="page-top" id="">';
		echo '<div class="top-row wrap">';
		
		echo '<div class="top-row-left">';
		echo '<div class="top-row-left-wrap">';
		echo $custom_title;
		echo '</div>';
		echo '</div>';
		echo '<div class="top-row-right">';
		genesis_widget_area( 'top-row-search' );
		echo '</div>';
		echo '<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-target">';
		echo '<i class="fa fa-bars fa-2x" aria-hidden="true" ></i>';
		echo '</button>';
		echo '</div>';

		echo '</div>';
		}
	