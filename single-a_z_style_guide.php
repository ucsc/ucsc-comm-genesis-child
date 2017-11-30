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

 add_action( 'genesis_after_header', __NAMESPACE__ . '\bb_alpha_menu', 20 );
 
 function bb_alpha_menu(){
     //echo "hello world";
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

genesis();