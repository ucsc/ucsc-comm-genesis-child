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
//add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

//* Move Post Title and Post Info from inside Entry Header to Entry Content on Posts page
//include CHILD_THEME_DIR.'/lib/template-parts/set-up-page-header.php';

//* Add Breadcrumbs
//include CHILD_THEME_DIR.'/lib/template-parts/breadcrumbs.php';

//* Add Content
//include CHILD_THEME_DIR.'/lib/template-parts/child-page-loop.php';

//* Check to see if this is a custom Alpha Menu Search

// store the post type from the URL string
$post_type = $_GET['post_type'];
// check to see if there was a post type in the
// URL string and if a results template for that
// post type actually exists
if ( isset( $post_type ) && locate_template( 'search-' . $post_type . '.php' ) ) {
  // if so, load that template
  get_template_part( 'search', $post_type );
  
  // and then exit out
  exit;
}



genesis();