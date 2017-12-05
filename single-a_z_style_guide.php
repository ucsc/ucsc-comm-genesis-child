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
//* Add Alpha Menu
 include CHILD_THEME_DIR.'/lib/template-parts/editorial-style-alpha-menu.php';

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