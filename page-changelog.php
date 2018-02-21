<?php
/**
 * Page template
 *
 * @package UCSC\Communications
 * @since   1.0.0
 * @author  Blackbird Consulting
 * @link    https://www.blackbirdconsult.com
 * @license GNU General Public License 2.0+
 */
 namespace UCSC\Communications;
 //* Force full-width-content layout setting
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

//* Move Post Title and Post Info from inside Entry Header to Entry Content on Posts page
include CHILD_THEME_DIR.'/lib/template-parts/set-up-page-header.php';

//* Add Breadcrumbs
include CHILD_THEME_DIR.'/lib/template-parts/breadcrumbs.php';

//* Replace Content with Custom Loop
remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop',  __NAMESPACE__ .'\bb_change_log_loop' );

function bb_change_log_loop(){
    echo '<ul class="rev-date">';
    $args = array(
		'post_type' => 'page',
		'posts_per_page' => -1,
        'orderby' => 'modified',
    );

    $child_query = new \WP_Query( $args );
    while ( $child_query->have_posts() ) : $child_query->the_post();
    $pagePermalink = get_permalink($post->ID);
    $pageTitle = get_the_title($post->ID);
    $modDate = get_the_modified_date($post->ID);
    $modAuthor = get_the_modified_author($post->ID);
    echo '<li><a href="'.$pagePermalink.'" rel="bookmark" title="'.$pageTitle.'">' . $pageTitle . '</a> -- Revised on: '.$modDate.', by: '.$modAuthor.'</li>';

endwhile;
echo '</ul>';


        
};

genesis();