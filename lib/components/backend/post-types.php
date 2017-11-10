<?php
/**
 * Post Types
 *
 * @package UCSC\Communications
 * @since   1.0.0
 * @author  Blackbird Consulting
 * @link    https://www.blackbirdconsult.com
 * @license GNU General Public License 2.0+
 */
namespace UCSC\Communications;


/**
 * Create Social Media Directory Post Type
 * @since 1.0.0
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function bb_register_social_media_directory_post_type() {
	$labels = array(
		'name' => 'Social Media Directory',
		'singular_name' => 'Social Media Directory Item',
		'add_new' => 'Add New',
		'add_new_item' => 'Add New Social Media Directory Item',
		'edit_item' => 'Edit Social Media Directory Item',
		'new_item' => 'New Social Media Directory Item',
		'view_item' => 'View Social Media Directory Item',
		'search_items' => 'Search Social Media Directory Items',
		'not_found' =>  'No Social Media Directory items found',
		'not_found_in_trash' => 'No Social Media Directory items found in trash',
		'parent_item_colon' => '',
		'menu_name' => 'SM Directory'
	);
	
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
        'show_in_menu' => true,
        'menu_position' => 20, 
		'query_var' => true,
		'rewrite' => array('slug' => 'sm-directory'),
		'capability_type' => 'post',
		'has_archive' => false, 
		'hierarchical' => false,
        'menu_position' => null,
        'menu_icon' => 'dashicons-share',
        'supports' => array('title','custom-fields'),        
	); 
	register_post_type( 's_m_directory', $args );
}
add_action( 'init', __NAMESPACE__ . '\bb_register_social_media_directory_post_type' );	