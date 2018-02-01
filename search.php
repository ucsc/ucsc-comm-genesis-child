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
else {
  remove_action('genesis_loop','genesis_do_loop');
  add_action('genesis_loop', __NAMESPACE__ . '\bb_search_loop');
}

function bb_do_alpha_search(){
echo do_shortcode('[editorial-style-guide-search]');
}

function bb_style_guide_search_loop(){

  
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
  
}

function bb_search_loop(){

  
  echo '<article class="page entry">';
       if ( have_posts() ) : while ( have_posts() ) : the_post();
          $searchTitle = get_the_title();
          $searchPermalink = get_permalink();
          $searchImage = get_the_post_thumbnail( $post_id, 'thumbnail', array( 'class' => 'alignleft' ) );
          $searchExcerpt = get_the_excerpt();
          echo '<div class="subpage-container">';   
            
            if ( has_post_thumbnail() ) {
                the_post_thumbnail('subpage-featured-image', array('class' => 'alignleft aligncenter'));
			}  
        echo '<h3><a href="'.$searchPermalink.'" rel="bookmark" title="'.$searchTitle.'">'.$searchTitle.'</a></h3>';
        if ($searchExcerpt != '') {
          echo '<p class="excerpt">'.$searchExcerpt.'</p>';
        }
        
        
        echo'</div>';
        echo '<div class="clear"></div>';
       
      endwhile; 
    endif;
  
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