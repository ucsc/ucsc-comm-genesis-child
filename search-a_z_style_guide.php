<?php
/**
 * Template Name: A-Z Style Guide Search
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
//include CHILD_THEME_DIR.'/lib/template-parts/set-up-page-header.php';

//* Add Breadcrumbs
//include CHILD_THEME_DIR.'/lib/template-parts/breadcrumbs.php';


add_action( 'genesis_before_loop', __NAMESPACE__ . '\genesis_do_search_title' );
/**
 * Echo the title with the search term.
 *
 * @since 1.9.0
 */
function genesis_do_search_title() {

	$title = sprintf( '<div class="archive-description"><h1 class="archive-title">%s %s</h1></div>', apply_filters( 'genesis_search_title_text', __( 'Search Results for:', 'genesis' ) ), get_search_query() );

	echo apply_filters( 'genesis_search_title_output', $title ) . "\n";

}
// remove_action('genesis_loop', 'genesis_do_loop');
// add_action('genesis_loop,', __NAMESPACE__ . '\bb_do_style_guide_search_loop');

// function bb_do_style_guide_search_loop(){
?>
<div class="contentarea">
            <div id="content" class="content_right">  
                     <h3>Search Result for : <?php echo "$s"; ?> </h3>       
                     <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>    
                <div id="post-<?php the_ID(); ?>" class="posts">        
                     <article>        
                    <h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a><h4>        
                    <p><?php the_content(); ?></p>        
                    <p align="right"><a href="<?php the_permalink(); ?>">Read     More</a></p>    
                    <span class="post-meta"> Post By <?php the_author(); ?>    
                     | Date : <?php echo date('j F Y'); ?></span>    

                    </article><!-- #post -->    
                </div>
        <?php endwhile; ?>
    <?php endif; ?>




           </div><!-- content -->    
        </div><!-- contentarea --> 
<?php
//}

genesis();