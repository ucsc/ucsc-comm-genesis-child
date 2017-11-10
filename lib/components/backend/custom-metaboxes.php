<?php
/**
 * Custom Metaboxes
 *
 * @package UCSC\Communications
 * @since   1.0.0
 * @author  Blackbird Consulting
 * @link    https://www.blackbirdconsult.com
 * @license GNU General Public License 2.0+
 */
namespace UCSC\Communications;


/**
 * Create custom metabox Social Media Directory
 * @since 1.0.0
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
add_action('admin_init', __NAMESPACE__ .'\admin_init');
add_action('save_post', __NAMESPACE__ .'\save_sticky');

function admin_init(){
    add_meta_box("smSticky-meta", "Social Media Sticky", __NAMESPACE__ ."\meta_options", "s_m_directory", "side", "low");
}
 
 
function meta_options(){
    global $post;
    $custom = get_post_custom($post->ID);
    $sticky = $custom["sticky"][0];
?>
<label>Sticky:</label><input name="sticky" value="<?php echo $sticky; ?>" />
<?php
}


function save_sticky(){
global $post;
update_post_meta($post->ID, "sticky", $_POST["sticky"]);
}