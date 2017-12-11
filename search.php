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

//* Add Breadcrumbs
//include CHILD_THEME_DIR.'/lib/template-parts/breadcrumbs.php';

//* Add Content
//include CHILD_THEME_DIR.'/lib/template-parts/child-page-loop.php';

//* Check to see if this is a custom Alpha Menu Search

// store the post type from the URL string
//$post_type = $_GET['post_type'];
// check to see if there was a post type in the
// URL string and if a results template for that
// post type actually exists
// if ( isset( $post_type ) && locate_template( 'search-' . $post_type . '.php' ) ) {
//   // if so, load that template
//   get_template_part( 'search', $post_type );
  
//   // and then exit out
//   exit;
// }

if ( isset( $_GET['post_type'] )) {
  $post_type = $_GET['post_type'];
  if ($post_type == 'a_z_style_guide'){
    // Begin Test
    //add_action( 'pre_get_posts', __NAMESPACE__ . '\bb_customize_search_query');
    //End Test
    //* A-Z Style Guide Search Form
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
      //  $id = get_the_ID();
      //   echo '<div id="post-'.$id.'" class="posts">';     
      //     echo '<article>';        
      //     echo '<h4><a href="'.the_permalink().'" title="'.the_title().'">'.the_title().'</a><h4>';    
      //     echo '<p>'.the_content().'</p>';        
      //     echo '<p align="right"><a href="'.the_permalink().' ">Read More</a></p>'; 
      //     echo '<span class="post-meta"> Post By '.the_author().' | Date : '.date('j F Y').' </span>';  
      //     echo '</article><!-- #post --> ';
      //   echo '</div>';
//
// NEW TEST
//

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