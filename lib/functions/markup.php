<?php
/**
 * Description
 *
 * @package     UCSC\Communications
 * @since       1.0.0
 * @author      Blackbird Consulting
 * @link        https://www.blackbirdconsult.com
 * @license     GNU General Public License 2.0+
 */
namespace UCSC\Communications;

//add_action('wp_head', __NAMESPACE__ . '\bb_is_parent');

// function bb_is_parent() {
//     global $post;

//     $children = get_pages('child_of='.$post->ID);
//     if( count( $children ) > 0 ) {
//         remove_action( 'genesis_loop', 'genesis_do_loop' );
//         add_action( 'genesis_loop',  __NAMESPACE__ .'\bb_child_page_loop' );
//     }

    
// }




/**
 * Child Page Loop
 */
    
// function bb_child_page_loop (){
//     $id = get_the_ID();    
//     $pageContent = get_the_content();
//     $pageContentFormatted = apply_filters('the_content', $pageContent);
//     $args = array(
//         'post_parent' => $id,
// 		'post_type' => 'page',
// 		'posts_per_page' => -1,
//         'orderby' => 'menu_order'
//     );
    
//     $child_query = new \WP_Query( $args );
//     ?><article <?php post_class()?>><?php
//     echo '<div class="entry-content" itemprop="text">';
//     echo $pageContentFormatted;
//     echo '<div class="two-thirds first">'; 
    
//         while ( $child_query->have_posts() ) : $child_query->the_post();
// 		$pagePermalink = get_permalink($post->ID);
// 		$pageTitle = get_the_title($post->ID);
//         $pageImage = get_the_post_thumbnail( $post_id, 'thumbnail', array( 'class' => 'alignleft' ) );
        
// 		$pageExcerpt = get_the_excerpt();
		
//         echo '<div class="one-fourth first">';  
            
//             if ( has_post_thumbnail() ) {
//                 the_post_thumbnail('subpage-featured-image');
// 			}
// 		echo '</div>';
// 		echo '<div class="three-fourths">';   
//         echo '<h3><a href="'.$pagePermalink.'" rel="bookmark" title="'.$pageTitle.'">'.$pageTitle.'</a></h3>';
//         echo $pageExcerpt;
//         echo'</div>';
//     endwhile; 
    
// 	wp_reset_postdata();
// 	echo'</div>';
// 	echo '<div class="one-third">';
//     if ( is_active_sidebar( 'sidebar' ) ) :
// 	echo '<ul id="sidebar">';
// 		dynamic_sidebar( 'sidebar' );
// 	echo '</ul>';
//     endif; 
//     echo '</div>';
//     echo '</div>';
//     echo '</article>';
//    }
