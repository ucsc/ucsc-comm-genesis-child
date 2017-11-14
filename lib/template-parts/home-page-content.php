<?php
remove_action( 'genesis_after_header', 'genesis_do_nav' );
remove_action( 'genesis_header', 'genesis_header_markup_open', 5 );
remove_action( 'genesis_header', 'genesis_do_header' );
remove_action( 'genesis_header', 'genesis_header_markup_close', 15 );
//* Replace Content with Custom Loop
remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop',  __NAMESPACE__ .'\bb_front_page_content_loop' );

function bb_front_page_content_loop() {
    
    echo "Hello World";
}
add_action ('genesis_after_header',__NAMESPACE__ . '\bb_home_hero', 20);

function bb_home_hero() {
    
 
    echo '<div class= "hero-container">';
    echo '<div class= "wrap">';
    wp_nav_menu( array(
        'menu' => 'after-header-menu',
        'menu_class' => 'menu genesis-nav-menu menu-primary js-superfish sf-js-enabled sf-arrows',
        'menu_id' => 'hello', 
        
        'container' => 'nav',
        'container_class' => 'nav-primary',
        
        
          ) );
    
    echo '</div>';
    echo '</div>';
}


