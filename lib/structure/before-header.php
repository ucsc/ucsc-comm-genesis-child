<?php
/**
 * Header HTML markup structure
 *
 * @package Blackbird\Developers\Structure
 * @since   1.0.0
 * @author  Blackbird Consulting
 * @link    https://www.blackbirdconsult.com
 * @license GNU General Public License 2.0+
 */
 namespace UCSC\Communications\Structure;

 /**
 * Customize Site Header
 */

//Add top row
add_action('genesis_before_header', __NAMESPACE__ . '\bb_add_top_row');

function bb_add_top_row(){
	$logo = get_stylesheet_directory_uri().'/assets/images/logo-abbr.png';
	
	$custom_title = '<a href="/"><img class="header-logo" src="'.$logo.'" alt="UCSC Logo" ></a>';
	echo '<div class="page-top" id="page-top">';
	echo '<div class="top-row wrap">';
	
	echo '<div class="top-row-left">';
	echo '<div class="top-row-left-wrap">';
	echo $custom_title;
	echo '</div>';
	echo '</div>';
	echo '<div class="top-row-right">';
	genesis_widget_area( 'top-row-search' );
	wp_nav_menu( array(
        'menu' => 'Top Row Menu',
        'menu_class' => 'menu js-superfish sf-js-enabled sf-arrows',
        'container' => 'nav',
        'container_class' => 'menu-top-row-menu-container',
	) );
	
	// wp_nav_menu (array(
	// 	'theme_location'  => 'mobile-menu',
	// 	'menu'            => '',
	// 	'container'       => 'nav',
	// 	'container_class' => 'nav-primary nav-mobile',
	// 	'container_id'    => '',
	// 	'menu_class'      => 'menu genesis-nav-menu menu-primary menu-mobile responsive-menu',
	// 	'menu_id'         => '',
	// 	'echo'            => true,
	// 	'fallback_cb'     => 'wp_page_menu',
	// 	'before'          => '',
	// 	'after'           => '',
	// 	'link_before'     => '',
	// 	'link_after'      => '',
	// 	'items_wrap'      => '<div class="wrap"><ul id="%1$s" class="%2$s">%3$s</ul></div>',
	// 	'depth'           => 0,
	// 	'walker'          => ''
	// ));
	
	echo '</div>';
	echo '<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#genesis-nav-primary">';
	echo '<i class="fa fa-bars fa-2x" aria-hidden="true" ></i>';
	echo '</button>';
	echo '</div>';
    echo '</div>';
	}
	