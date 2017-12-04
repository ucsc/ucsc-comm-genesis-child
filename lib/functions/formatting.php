<?php
/**
 * Formatting Functions
 *
 * @package     UCSC\Communications
 * @since       1.0.0
 * @author      Blackbird Consulting
 * @link        https://www.blackbirdconsult.com
 * @license     GNU General Public License 2.0+
 */
namespace UCSC\Communications;


// Add class for screen readers to site description
add_filter( 'genesis_attr_site-description', 'genesis_attributes_screen_reader_class' );

/**
 * Back to top Button
 *
 * @author Jason Chafin
 * @uses  jquery
 *
 */

add_action ('genesis_before_footer', __NAMESPACE__ . '\blackbird_back_to_top');

function blackbird_back_to_top () {
     echo '<a class="topbutton" href="#"><i class="fa fa-chevron-up fa-2x"></i></a>';
}

 //* Customize search form input box text
 add_filter( 'genesis_search_text', __NAMESPACE__ . '\bb_search_text' );
 function bb_search_text( $text ) {
     return esc_attr( 'Search UCSC Communications...' );
 }
 
 //* Use dashicon for search button
 //* http://melchoyce.github.io/dashicons/
 add_filter( 'genesis_search_button_text', __NAMESPACE__ . '\bb_search_button_dashicon' );
 function bb_search_button_dashicon( $text ) {
     
     return esc_attr( '&#xf179;' );
     
 }
 
 // Use shortcodes in widgets
 add_filter( 'widget_text', 'do_shortcode' );

 //Custom Search Results Template Chooser
 add_filter('template_include', __NAMESPACE__ . '\bb_search_template_chooser');  
 function bb_search_template_chooser($template)   
 {    
   global $wp_query;   
   $post_type = get_query_var('post_type');   
   if( $wp_query->is_search && $post_type == 'a_z_style_guide' )   
   {
     return locate_template('style-guide-search.php');  //  redirect to style-guide-search.php
   }   
   return $template;   
 }


  // Add options page ACF
  if (function_exists('acf_add_options_page')){
    acf_add_options_page();
  }
