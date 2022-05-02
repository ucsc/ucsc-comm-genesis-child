<?php
/**
 * Description
 *
 * @package UCSC\Communications
 * @since   1.0.0
 * @author  Blackbird Consulting
 * @link    https://www.blackbirdconsult.com
 * @license GNU General Public License 2.0+
 */
namespace UCSC\Communications;

/**
 * Unregister post callbacks.
 *
 * @since 1.0.0
 *
 * @return void
 */
function unregister_post_callbacks()
{

}

add_filter('genesis_author_box_gravatar_size', __NAMESPACE__ . '\setup_author_box_gravatar_size');
/**
 * Modify size of the Gravatar in the author box.
 *
 * @since 1.0.0
 *
 * @param $size
 *
 * @return int
 */
function setup_author_box_gravatar_size( $size )
{

    return 90;
}

/* =BEGIN: Add Class to first Paragraph in WordPress the_content();
    Source: http://webdevbits.com/wordpress/add-class-to-first-paragraph-in-wordpress-the_content/
   ---------------------------------------------------------------------------------------------------- */
function bb_first_paragraph($content)
{
    // Testing to see if the content is a Page or Custom Post Type of school, if so, display the text normally (without the class = intro).
    if (is_page() ) {
      
        return preg_replace('/<p([^>]+)?>/', '<p$1 class="intro">', $content, 1);
    } else {
        return preg_replace('/<p([^>]+)?>/', '<p$1>', $content, 1);    
    }
}
  add_filter('the_content', __NAMESPACE__ . '\bb_first_paragraph');