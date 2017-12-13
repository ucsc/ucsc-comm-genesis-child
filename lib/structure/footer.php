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
    
    echo '<div class="one-sixth first">';
    $headerLogo = get_stylesheet_directory_uri().'/assets/images/temp-logo.jpg';
    echo'<img class="" src="'.$headerLogo.'" alt="UCSC Logo" >';
    echo '</div>';
    echo '<div class="five-sixths">';
    echo '<div class="footer-creds" style="float:right">';
    //echo do_shortcode('[ucsc-social]');
    include CHILD_THEME_DIR.'/lib/template-parts/footer-social.php';
    ?>
    
    <div class="footer-social">
    <ul>
    <li><a href="http://twitter.com/ucsc"><i class="fa fa-2x fa-twitter-square" aria-hidden="true"></i></a></li>
    <li><a href="http://instagram.com/ucsc"><i class="fa fa-2x fa-instagram" aria-hidden="true"></i></a></li>
    <li><a href="http://www.facebook.com/ucsantacruz"><i class="fa fa-2x fa-facebook-square" aria-hidden="true"></i></a></li>
    <li><a href="http://youtube.com/ucsantacruz"><i class="fa fa-2x fa-youtube-square" aria-hidden="true"></i></a></li>
    <li><a href="http://www.linkedin.com/groups?home=&gid=102708"><i class="fa fa-2x fa-linkedin-square" aria-hidden="true"></i></a></li>
    </ul>
    </div>
    <?php
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