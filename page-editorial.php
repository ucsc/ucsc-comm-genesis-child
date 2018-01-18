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


//* Move Post Title and Post Info from inside Entry Header to Entry Content on Posts page
include CHILD_THEME_DIR.'/lib/template-parts/set-up-page-header.php';

//* Add Breadcrumbs
include CHILD_THEME_DIR.'/lib/template-parts/breadcrumbs.php';

//* Add Content
include CHILD_THEME_DIR.'/lib/template-parts/child-page-loop.php';

//* Add Custom Sidebar
remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );
add_action( 'genesis_sidebar', 'bb_do_editorial_sidebar' );

function bb_do_editorial_sidebar(){
    dynamic_sidebar (
        'editorial-page-sidebar'
    );
}


genesis();