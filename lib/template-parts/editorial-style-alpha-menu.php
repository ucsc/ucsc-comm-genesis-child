<?php
add_action( 'genesis_after_header', __NAMESPACE__ . '\bb_alpha_menu2', 10 );

 
 function bb_alpha_menu2(){
	echo '<div class="wrap"><p class="style-guide-subtitle"> UC Santa Cruz Editorial Style Guide</p></div>';
     
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