<?php
//* Move Post Title and Post Info from inside Entry Header to Entry Content on Posts page
add_action( 'wp_head', __NAMESPACE__ . '\reposition_blog_archive_header' );
function reposition_blog_archive_header() {


    remove_action( 'genesis_before_loop', 'genesis_do_posts_page_heading' );
    //add_action( 'genesis_after_header', 'genesis_do_posts_page_heading' );
		


}
add_action( 'genesis_after_header', __NAMESPACE__ . '\bb_blog_archive_header', 15 );

function bb_blog_archive_header(){
	$archiveTitle = get_the_title( get_option('page_for_posts', true) );
	echo '<div class="page-title">';
    echo '<div class="wrap">';
    echo '<div class="archive-description posts-page-description">';
	echo '<h1 class="archive-title">'.$archiveTitle.'</h1>';
	echo '</div>';
    echo '</div>';
    echo '</div>';
}