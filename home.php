<?php
/**
 * Blog Archive
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
//* Move Blog Archive Title and Post Info from inside Entry Header to Entry Content on Posts page
require CHILD_THEME_DIR.'/lib/template-parts/set-up-blog-archive-header.php';

//* Add Breadcrumbs
require CHILD_THEME_DIR.'/lib/template-parts/breadcrumbs.php';



//remove_action( 'genesis_loop', 'genesis_do_loop' );
//add_action( 'genesis_loop',  __NAMESPACE__ .'\bb_front_page_content_loop' );

function bb_front_page_content_loop()
{
    echo "Hello World";
}

 genesis();