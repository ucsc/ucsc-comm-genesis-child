<?php
/**
 * Footer HTML markup structure
 *
 * @package     UCSC\Communications
 * @since       1.0.0
 * @author      Blackbird Consulting
 * @link        https://www.blackbirdconsult.com
 * @license     GNU General Public License 2.0+
 */
namespace UCSC\Communications;

// Remove Site Footer

add_action ('wp_head', __NAMESPACE__ . '\bb_customize_footer');


function bb_customize_footer (){
    remove_action( 'genesis_footer', 'genesis_do_footer' );
    //remove_action( 'genesis_footer', 'genesis_footer_markup_open', 5 );
    //remove_action( 'genesis_footer', 'genesis_footer_markup_close', 15 );
    add_action('genesis_footer', __NAMESPACE__ . '\bb_communications_footer');
}

function bb_communications_footer (){
    $footerLogo = get_stylesheet_directory_uri().'/assets/images/seal.png';
    $copywright = do_shortcode('[footer_copyright first="2017"]');
    echo '<div class="two-thirds first">';
    
    echo'<img class="" src="'.$footerLogo.'" alt="UCSC Logo" >';
    echo '<div class="footer-creds">';
    $copywright = do_shortcode('[footer_copyright]');
    echo '<p class="location">UC Santa Cruz, 1156 High Street, Santa Cruz, CA  95064</p><p class="copyright">'.$copywright.' Regents of the University of California. All Rights Reserved.</p>';
    echo '</div>';
    echo '<div class="clear"></div>';
    echo '</div>';
    echo '<div class="one-third">';
    
    echo '<div class="footer-social-container">';
    include CHILD_THEME_DIR.'/lib/template-parts/footer-social.php';
    echo '<p class="contact"><a href="'.get_permalink(300).'">Contact Us</a></p>';
    echo '</div>';
    echo '</div>';
}


/**
 * Unregister footer callbacks.
 *
 * @since 1.0.0
 *
 * @return void
 */
function unregister_footer_callbacks() {

}

 /**
 * Customize Site Footer
 */
//add_filter('genesis_footer_creds_text', __NAMESPACE__ . '\custom_footer_creds_text');
function custom_footer_creds_text($creds) {
 $creds = '[ucsc-social]'."<br><br>".'UC Santa Cruz, 1156 High Street, Santa Cruz, CA  95064'."<br><br>".'[footer_copyright first="2017"]'.' Regents of the University of California. All Rights Reserved.'  ;
 return  $creds;
}