<?php
/**
 * Formatting Functions
 *
 * @package     Blackbird\Developers
 * @since       1.0.0
 * @author      Blackbird Consulting
 * @link        https://www.blackbirdconsult.com
 * @license     GNU General Public License 2.0+
 */
namespace Blackbird\Developers;

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