<?php
/**
 * Header HTML markup structure
 *
 * @package     UCSC\Communications
 * @since       1.0.0
 * @author      Blackbird Consulting
 * @link        https://www.blackbirdconsult.com
 * @license     GNU General Public License 2.0+
 */
namespace UCSC\Communications;

/**
 * Unregister header callbacks.
 *
 * @since 1.0.0
 *
 * @return void
 */
function unregister_header_callbacks() {

}
function bb_custom_site_title ($title,$inside,$wrap){
    if (!is_front_page()){
        $newTitle = str_replace("&amp;", "<span>&amp;</span>", $title);
        return $newTitle;

    }
}

add_filter('genesis_seo_title',__NAMESPACE__ . '\bb_custom_site_title', 10, 3);