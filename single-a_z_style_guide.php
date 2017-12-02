<?php

/**
 * A-Z Style Guide Single Post Template
 *
 * @package Blackbird\Developers
 * @since   1.0.0
 * @author  Blackbird Consulting
 * @link    https://www.blackbirdconsult.com
 * @license GNU General Public License 2.0+
 */
namespace UCSC\Genesis;

 //* Force full-width-content layout setting
 //add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );
 //* Add Breadcrumbs
include CHILD_THEME_DIR.'/lib/template-parts/breadcrumbs.php';

 add_action( 'genesis_after_header', __NAMESPACE__ . '\bb_alpha_menu', 10 );

 
 function bb_alpha_menu(){
	echo '<div class="wrap"><p class="style-guide-subtitle"> UC Santa Cruz Editorial Style Guide</p></div>';
     
     wp_nav_menu (array(
		//'theme_location'  => 'primary-menu',
		'menu'            => 'alpha-menu',
		'container'       => 'div',
		'container_class' => '',
		'container_id'    => '',
		'menu_class'      => 'menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<div class="wrap menu-alpha-container"><ul id="%1$s" class="%2$s">%3$s</ul></div>',
		'depth'           => 0,
		'walker'          => ''
	));

	echo '<div class="menu-alpha-menu-mobile-container">';
	echo '<div class="wrap">';
    
	bb_alpha_menu_dropdown();
	echo '</div>';
	echo '</div>';
	echo '</div>';

 }

 
 
 //* Move Post Title and Post Info from inside Entry Header to Entry Content on Posts page
 include CHILD_THEME_DIR.'/lib/template-parts/set-up-page-header.php';
 //* Add Content
  remove_action( 'genesis_loop', 'genesis_do_loop' );
  add_action( 'genesis_loop', __NAMESPACE__ .'\bb_a_z_style_guide_single_loop' );

  function bb_a_z_style_guide_single_loop(){
    echo '<article class="post type-post status-publish entry">';
    echo '<div class="entry-content" itemprop="text">';
      
    if( have_rows('style_definitions') ):while( have_rows('style_definitions') ): the_row();
    // vars
    $azItem = get_sub_field('editorial_style_item');
    $azDef = get_sub_field('editorial_style_definition');
    

    echo '<p><b>'.$azItem.':</b></p>'.$azDef.'<hr>';
  endwhile;
endif;
  
   echo '</div>';
   echo '</article>'; 
  }

  //*Custom dropdown menu structure
// custom dropdown menu @ https://digwp.com/2011/11/html-formatting-custom-menus/
function bb_alpha_menu_dropdown() {
	$menu_name = 'alpha-menu'; // specify custom menu slug
	if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
		$menu = wp_get_nav_menu_object($locations[$menu_name]);
		$menu_items = wp_get_nav_menu_items($menu->term_id);

		$menu_list = '<div class="dropdown">' ."\n";
		$menu_list .='<button class="dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Filter by alpha...<span class="dashicons dashicons-arrow-down"></span></button>' ."\n";
		$menu_list .= "\t\t\t\t". '<ul class="dropdown-menu" role="menu" aria-labelledby="menu1">' ."\n";
		foreach ((array) $menu_items as $key => $menu_item) {
			$title = $menu_item->title;
			$url = $menu_item->url;
			$menu_list .= "\t\t\t\t\t". '<li><a href="'. $url .'">'. $title .'</a></li>' ."\n";
		}
		$menu_list .= "\t\t\t\t". '</ul>' ."\n";
		$menu_list .= "\t\t\t". '</nav>' ."\n";
	} else {
		// $menu_list = '<!-- no list defined -->';
	}
	echo $menu_list;
}

genesis();