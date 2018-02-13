<?php


/**
 * Social Media Archive
 *
 * @package Blackbird\Developers
 * @since   1.0.0
 * @author  Blackbird Consulting
 * @link    https://www.blackbirdconsult.com
 * @license GNU General Public License 2.0+
 */
 namespace UCSC\Genesis;

 //* Force full-width-content layout setting
 //add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );
 
 //* Move Post Title and Post Info from inside Entry Header to Entry Content on Posts page
 include CHILD_THEME_DIR.'/lib/template-parts/set-up-page-header.php';
 
 //* Add Breadcrumbs
 include CHILD_THEME_DIR.'/lib/template-parts/breadcrumbs.php';

 //* Add Sidebar
 remove_action('genesis_sidebar','genesis_do_sidebar');
 add_action('genesis_sidebar', __NAMESPACE__ . '\bb_do_sm_directory_sidebar');
 function bb_do_sm_directory_sidebar(){
        if ( is_active_sidebar( 'social-media-directory-sidebar' ) ) :
         dynamic_sidebar('social-media-directory-sidebar');
        endif;
 }
 
 //* Add Content
 remove_action( 'genesis_loop', 'genesis_do_loop' );
 add_action( 'genesis_loop', __NAMESPACE__ .'\bb_social_media_directory_loop' );
 
function bb_social_media_directory_loop()
{
    $pageContent = get_the_content();
    $pageContentFormatted = apply_filters('the_content', $pageContent);
    echo '<article class="entry">';
    echo '<div class="entry-content">';
    echo $pageContentFormatted;
    // Call Post
    $args = array (
    'post_type' => 's_m_directory',
    'meta_key' => 'sticky',
    'orderby' => 'meta_value',
    'order' => 'ASC',
    'posts_per_page' => -1,
       
    );
    $smDir = new \WP_Query( $args );
    if ($smDir->have_posts()) :
        while ($smDir->have_posts()) :
            $smDir->the_post();
            $title = get_the_title();
            $rows = get_field('social_media_property');
            echo '<div class="social-directory-row">';
            echo '<div class="one-third first">';
            echo '<p>'.$title.'</p>';
            echo '</div>';
            echo '<div class="two-thirds">';
            if ($rows) {
                echo '<ul class="social-media-list">';
                foreach ($rows as $row) {
                    if ($row['social_media_site'] == 'Facebook') :
                        $iconClass = "fa-facebook";
                    elseif ($row['social_media_site'] == 'Twitter') :
                            $iconClass = "fa-twitter";
                    elseif ($row['social_media_site'] == 'Instagram') :
                            $iconClass = "fa-instagram";
                    elseif ($row['social_media_site'] == 'Pinterest') :
                            $iconClass = "fa-pinterest-p";
                    elseif ($row['social_media_site'] == 'LinkedIn') :
                            $iconClass = "fa-linkedin";
                    elseif ($row['social_media_site'] == 'YouTube') :
                            $iconClass = "fa-youtube-play";
                    elseif ($row['social_media_site'] == 'Vimeo') :
                            $iconClass = "fa-vimeo";
                    elseif ($row['social_media_site'] == 'Flickr') :
                            $iconClass = "fa-flickr";
                    elseif ($row['social_media_site'] == 'Medium') :
                            $iconClass = "fa-medium";
                    elseif ($row['social_media_site'] == 'Tumblr') :
                            $iconClass = "fa-tumblr";
                    elseif ($row['social_media_site'] == 'Snapchat') :
                            $iconClass = "fa-snapchat-ghost";
                    elseif ($row['social_media_site'] == 'Google+') :
                            $iconClass = "fa-google-plus";
                    elseif ($row['social_media_site'] == 'Choose one') :
                            $iconClass = "";
                    endif;
           
                        echo '<li><a href="'.$row['social_media_link'].'" title="'.$row['social_media_site'].'"><i class="fa '.$iconClass.'" aria-hidden="true"></i></a></li>';
                }
                 echo '</ul>';
            }
            echo '</div>';
            echo '</div>';
        endwhile;
    endif;
    wp_reset_postdata();
    echo '</div>';
    echo '</article>';
}

 genesis();
