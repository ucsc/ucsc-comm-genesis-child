<?php
//* Move Post Title and Post Info from inside Entry Header to Entry Content on Posts page
add_action( 'wp_head', __NAMESPACE__ . '\reposition_entry_header' );
function reposition_entry_header() {



		remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_open', 5 );
		remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
		//remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );
		remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_close', 15 );

		//add_action( 'genesis_after_header', 'genesis_do_post_title', 15 );
		//add_action( 'genesis_after_header', 'genesis_post_info', 15 );



}
add_action( 'genesis_after_header', __NAMESPACE__ . '\bb_page_header', 15 );

function bb_page_header(){
	$pageTitle = get_the_title();
	echo '<div class="page-title">';
	echo '<div class="wrap">';
	echo '<h1 class="entry-title" itemprop="headline">'.$pageTitle.'</h1>';
	echo '</div>';
	echo '</div>';
}