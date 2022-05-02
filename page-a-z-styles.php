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
 require CHILD_THEME_DIR.'/lib/template-parts/set-up-page-header.php';
 
 //* Add Breadcrumbs
 require CHILD_THEME_DIR.'/lib/template-parts/breadcrumbs.php';

 //* Test Form
 require CHILD_THEME_DIR.'/lib/template-parts/style-guide-search-form.php';
 
 //* Add Content
//  remove_action( 'genesis_loop', 'genesis_do_loop' );
//  add_action( 'genesis_loop', __NAMESPACE__ .'\bb_a_z_styles_loop' );
 
// function bb_a_z_styles_loop()
// {
//     $pageContent = get_the_content();
//     $pageContentFormatted = apply_filters('the_content', $pageContent);
//     echo '<article class="entry">';
//     echo '<div class="entry-content">';
//     echo $pageContentFormatted;
//     // Call Post
//     $args = array (
//     'post_type' => 'a_z_style_guide',
//     'orderby' => 'title',
//     'order' => 'ASC',
//     'posts_per_page' => -1,
       
//     );
//     $azDir = new \WP_Query( $args );
//     if ($azDir->have_posts()) :
//         while ($azDir->have_posts()) :
//             $azDir->the_post();
//             $azTitle = get_the_title();
//             echo '<h2>'.$azTitle.'</h2>';
//             if( have_rows('style_definitions') ):while( have_rows('style_definitions') ): the_row();
//             // vars
//             $azItem = get_sub_field('editorial_style_item');
//             $azDef = get_sub_field('editorial_style_definition');
            
        
//             echo '<p><b>'.$azItem.':</b></p>'.$azDef.'<hr>';
//           endwhile;
//         endif;
           
//         endwhile;
//     endif;
//     wp_reset_postdata();
//     echo '</div>';
//     echo '</article>';
// }

 genesis();
