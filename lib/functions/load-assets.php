<?php
/**
 * Asset loader handler.
 *
 * @package UCSC\Communications
 * @since   1.0.0
 * @author  Blackbird Consulting
 * @link    https://www.blackbirdconsult.com
 * @license GNU General Public License 2.0+
 */
namespace UCSC\Communications;

/**
 * Replace WordPress jQuery with Google Hosted Libraries
 *
 * @author Blackbird Consulting/Jason Chafin
 * @link   https://gist.github.com/Herm71/916bc9481f62845ddc97248a871cab4a
 */

add_action('init', __NAMESPACE__ . '\bb_modify_jquery');

function bb_modify_jquery()
{
    if (!is_admin()) {
        $jquery_replace = get_option('jquery_replace');
        if ($jquery_replace == 1) {         
        
            // deregister WordPress JQuery
            wp_deregister_script('jquery');
            //register and enqueue jquery
            wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', null, true); // register the external file  
            wp_enqueue_script('jquery'); // enqueue the external file
        }
    }
}

add_action('wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_assets' );
/**
 * Enqueue Scripts and Styles.
 *
 * @since 1.0.2
 *
 * @return void
 */
function enqueue_assets()
{

    wp_enqueue_style(CHILD_TEXT_DOMAIN . '-roboto-condensed-garamond', 'https://fonts.googleapis.com/css?family=EB+Garamond:400,500,700|Roboto+Condensed:300,400,700|Roboto:300,400,500,700', array(), CHILD_THEME_VERSION);
    //wp_enqueue_style( CHILD_TEXT_DOMAIN . '-roboto-condensed', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700', array(), CHILD_THEME_VERSION );
    wp_enqueue_style('dashicons');

    //Styles
    wp_enqueue_style(CHILD_TEXT_DOMAIN .'-ucsc-c-and-m-styles', get_stylesheet_directory_uri() . '/build/style-index.css', null , CHILD_THEME_VERSION );

    //Merged
    wp_enqueue_script( CHILD_TEXT_DOMAIN .'-merged', CHILD_URL . '/build/theme.js', array( 'jquery' ), CHILD_THEME_VERSION, true );
        
    // FontAwesome
    wp_enqueue_script('font-awesome', 'https://use.fontawesome.com/64d0d03cae.js',  null, true);

    $localized_script_args = array(
    'mainMenu' => __('Menu', CHILD_TEXT_DOMAIN),
    'subMenu'  => __('Menu', CHILD_TEXT_DOMAIN),
    );
    wp_localize_script(CHILD_TEXT_DOMAIN . '-responsive-menu', 'developersL10n', $localized_script_args);
}