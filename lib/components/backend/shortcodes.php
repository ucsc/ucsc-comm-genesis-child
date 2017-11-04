<?php
/**
 * Custom Shortcodes
 *
 * @package UCSC\Communications
 * @since   1.0.0
 * @author  Blackbird Consulting
 * @link    https://www.blackbirdconsult.com
 * @license GNU General Public License 2.0+
 */
namespace UCSC\Communications;
 
 //Jason's Test Functions
function say_hello() {

return 'Hello!';

}

add_shortcode('say-hello', __NAMESPACE__ . '\say_hello');

function ucsc_social_sharing(){
    ?>
    
    <div class="footer-social">
    <ul>
    <li><a href="http://twitter.com/ucsc"><i class="fa fa-3x fa-twitter-square" aria-hidden="true"></i></a></li>
    <li><a href="http://instagram.com/ucsc"><i class="fa fa-3x fa-instagram" aria-hidden="true"></i></a></li>
    <li><a href="http://www.facebook.com/ucsantacruz"><i class="fa fa-3x fa-facebook-square" aria-hidden="true"></i></a></li>
    <li><a href="http://youtube.com/ucsantacruz"><i class="fa fa-3x fa-youtube-square" aria-hidden="true"></i></a></li>
    <li><a href="http://www.linkedin.com/groups?home=&gid=102708"><i class="fa fa-3x fa-linkedin-square" aria-hidden="true"></i></a></li>
    </ul>
    </div>
    <?php
    
    }
    
    add_shortcode('ucsc-social', __NAMESPACE__ . '\ucsc_social_sharing');
