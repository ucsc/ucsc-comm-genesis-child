<?php
//* Replace Content with Custom Loop
remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop',  __NAMESPACE__ .'\bb_child_page_loop' );


/**
 * Child Page Loop
 */
    
function bb_child_page_loop (){
    $id = get_the_ID();    
    $pageContent = get_the_content();
    $pageContentFormatted = apply_filters('the_content', $pageContent);
    $args = array(
        'post_parent' => $id,
		'post_type' => 'page',
		'posts_per_page' => -1,
        'orderby' => 'menu_order'
    );
    
    $child_query = new \WP_Query( $args );
    ?><article <?php post_class()?>><?php
    echo '<div class="entry-content" itemprop="text">';
    echo $pageContentFormatted;
    echo '<div class="two-thirds first">'; 
    
        while ( $child_query->have_posts() ) : $child_query->the_post();
		$pagePermalink = get_permalink($post->ID);
		$pageTitle = get_the_title($post->ID);
        $pageImage = get_the_post_thumbnail( $post_id, 'thumbnail', array( 'class' => 'alignleft' ) );
        
		$pageExcerpt = get_the_excerpt();
		
        echo '<div class="subpage-container">';   
            
            if ( has_post_thumbnail() ) {
                the_post_thumbnail('subpage-featured-image', array('class' => 'alignleft aligncenter'));
			}  
        echo '<h3><a href="'.$pagePermalink.'" rel="bookmark" title="'.$pageTitle.'">'.$pageTitle.'</a></h3>';
        echo '<p class="excerpt">'.$pageExcerpt.'</p>';
        echo'</div>';
        echo '<div class="clear"></div>';
    endwhile; 
    
	wp_reset_postdata();
	echo'</div>';
    echo '<div class="one-third">';
    if (is_page('brand-overview')){
        if ( is_active_sidebar( 'brand-page-sidebar' ) ) :
	    echo '<ul id="sidebar">';
	    	dynamic_sidebar( 'brand-page-sidebar' );
	    echo '</ul>';
        endif;}
    elseif (is_page('editorial')){
        if ( is_active_sidebar( 'editorial-page-sidebar' ) ) :
        echo '<ul id="sidebar">';
            dynamic_sidebar( 'editorial-page-sidebar' );
        echo '</ul>';
        endif;}
    elseif (is_page('visual-design')){
        if ( is_active_sidebar( 'visual-design-page-sidebar' ) ) :
        echo '<ul id="sidebar">';
            dynamic_sidebar( 'visual-design-page-sidebar' );
        echo '</ul>';
        endif;}
    elseif (is_page('media-relations')){
        if ( is_active_sidebar( 'media-relations-page-sidebar' ) ) :
        echo '<ul id="sidebar">';
            dynamic_sidebar( 'media-relations-page-sidebar' );
        echo '</ul>';
        endif;}
    elseif (is_page('social-media')){
        if ( is_active_sidebar( 'social-media-page-sidebar' ) ) :
        echo '<ul id="sidebar">';
            dynamic_sidebar( 'social-media-page-sidebar' );
        echo '</ul>';
        endif;}
    elseif (is_page('web')){
        if ( is_active_sidebar( 'web-page-sidebar' ) ) :
        echo '<ul id="sidebar">';
            dynamic_sidebar( 'web-page-sidebar' );
        echo '</ul>';
        endif;}
    elseif (is_page('email')){
        if ( is_active_sidebar( 'email-page-sidebar' ) ) :
        echo '<ul id="sidebar">';
            dynamic_sidebar( 'email-page-sidebar' );
        echo '</ul>';
        endif;}
    else {
        if ( is_active_sidebar( 'sidebar' ) ) :
            echo '<ul id="sidebar">';
                dynamic_sidebar( 'sidebar' );
            echo '</ul>';
            endif;

    }
    echo '</div>';
    echo '</div>';
    echo '</article>';
       };