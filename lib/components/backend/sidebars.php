<?php
/**
 * Custom Sidebars
 *
 * @package UCSC\Communications
 * @since   1.0.0
 * @author  Blackbird Consulting
 * @link    https://www.blackbirdconsult.com
 * @license GNU General Public License 2.0+
 */
 namespace UCSC\Communications;
 function bb_register_custom_sidebars(){
    /** Register Home Page widget areas */
 genesis_register_widget_area( array(
    
        'id'			=> 'top-row-search',
    
        'name'			=> __( 'Top Row Search Widget'),
    
        'description'	=> __( 'This is the search widget for the header top row.'),
    
    ) );
    }
    
    add_action ('widgets_init',__NAMESPACE__ . '\bb_register_custom_sidebars');