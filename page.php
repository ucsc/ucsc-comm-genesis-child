<?php
/**
 * Page template
 *
 * @package UCSC\Communications
 * @since   1.0.0
 * @author  Blackbird Consulting
 * @link    https://www.blackbirdconsult.com
 * @license GNU General Public License 2.0+
 */
 namespace UCSC\Communications;
 //* Force full-width-content layout setting
add_filter('genesis_pre_get_option_site_layout', '__genesis_return_full_width_content');

//* Move Post Title and Post Info from inside Entry Header to Entry Content on Posts page
require CHILD_THEME_DIR.'/lib/template-parts/set-up-page-header.php';

//* Add Breadcrumbs
require CHILD_THEME_DIR.'/lib/template-parts/breadcrumbs.php';

genesis();