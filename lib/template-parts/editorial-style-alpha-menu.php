<?php
add_action( 'genesis_after_header', __NAMESPACE__ . '\bb_alpha_menu', 10 );

 
 function bb_alpha_menu(){
     
     wp_nav_menu (array(
		//'theme_location'  => 'primary-menu',
		'menu'            => 'alpha-menu',
		'container'       => 'div',
		'container_class' => '',
		'container_id'    => '',
		'menu_class'      => 'menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<div class="wrap menu-alpha-container"><ul id="%1$s" class="%2$s">%3$s</ul></div>',
		'depth'           => 0,
		'walker'          => ''
	));

	echo '<div class="menu-alpha-menu-mobile-container">';
	echo '<div class="wrap">';
    
	bb_alpha_menu_dropdown();
	echo '</div>';
	echo '</div>';
	echo '</div>';

 }

//*Custom dropdown menu structure
// custom dropdown menu @ https://digwp.com/2011/11/html-formatting-custom-menus/
function bb_alpha_menu_dropdown() {
	$menu_name = 'alpha-menu'; // specify custom menu slug
	if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
		$menu = wp_get_nav_menu_object($locations[$menu_name]);
		$menu_items = wp_get_nav_menu_items($menu->term_id);

		$menu_list = '<div class="dropdown">' ."\n";
		$menu_list .='<button class="dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Filter by alpha...<span class="dashicons dashicons-arrow-down"></span></button>' ."\n";
		$menu_list .= "\t\t\t\t". '<ul class="dropdown-menu" role="menu" aria-labelledby="menu1">' ."\n";
		foreach ((array) $menu_items as $key => $menu_item) {
			$title = $menu_item->title;
			$url = $menu_item->url;
			$menu_list .= "\t\t\t\t\t". '<li><a href="'. $url .'">'. $title .'</a></li>' ."\n";
		}
		$menu_list .= "\t\t\t\t". '</ul>' ."\n";
		$menu_list .= "\t\t\t". '</nav>' ."\n";
	} else {
		// $menu_list = '<!-- no list defined -->';
	}
	echo $menu_list;
}