<?php
/**
 * Page template
 *
 * @package Blackbird\Developers
 * @since   1.0.0
 * @author  Blackbird Consulting
 * @link    https://www.blackbirdconsult.com
 * @license GNU General Public License 2.0+
 */
 namespace UCSC\Genesis;
 //* Force full-width-content layout setting
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

//* Search Results Term for page title
include CHILD_THEME_DIR.'/lib/template-parts/set-up-search-results-header.php';

if ( isset( $_GET['post_type'] )) {
  $post_type = $_GET['post_type'];
  if ($post_type == 'a_z_style_guide'){
    add_action ('genesis_before_content', __NAMESPACE__ .'\bb_do_alpha_search', 20);
    remove_action('genesis_loop','genesis_do_loop');
    //* Add Alpha Menu
 include CHILD_THEME_DIR.'/lib/template-parts/editorial-style-alpha-menu.php';
    add_action ('genesis_loop', __NAMESPACE__ . '\bb_style_guide_search_loop');
  }
  
 
}

function bb_do_alpha_search(){
echo do_shortcode('[editorial-style-guide-search]');
}

function bb_style_guide_search_loop(){
  //echo 'hello world';
  
  echo '<article class="page entry">';
       if ( have_posts() ) : while ( have_posts() ) : the_post();
          $azTitle = get_the_title();
            echo '<h2>'.$azTitle.'</h2>';
            if( have_rows('style_definitions') ):while( have_rows('style_definitions') ): the_row();
            // vars
            
            $azItem = get_sub_field('editorial_style_item');
            $azDef = get_sub_field('editorial_style_definition');
           
       
            echo '<p><b>'.$azItem.':</b></p>'.$azDef.'<hr>';


           endwhile; 
       endif;
       
       
      endwhile; 
    endif;
  
  
  
  
          //    echo '<!-- content -->';   
          // echo '</article><!-- contentarea -->';
  
}


/**
 * Customize the A-Z Menu Search Query
 *
 * @since 1.9.0
 */

function bb_customize_search_query ($query) {
  //$search_query = get_search_query();
  // $meta_query = array(
  //   array(
  //     'key' => 'editorial_style_definition',
  //     'value' => $search_query,
  //     'compare' => 'EXISTS'
  //   )
  // );
  
          // Change the query parameters
          $query->set( 'posts_per_page', -1 );
          $query->set( 'orderby', 'meta_value' );
          $query->set( 'order', 'ASC' );
          
  

  
  };

genesis();