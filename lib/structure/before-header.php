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
	echo '<div class="page-top">';
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
	
	echo '</div>';
	
	echo '</div>';
    echo '</div>';
    }