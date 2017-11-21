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
    echo '<div class= "hero-nav-container">';
    echo '<div class= "wrap">';
    echo '<div class= "hero-nav">';
    wp_nav_menu( array(
        //'theme_location' => 'after-header-menu',
		'menu' => 'primary-menu-2',
        'menu_class' => 'menu genesis-nav-menu menu-primary js-superfish sf-js-enabled sf-arrows',
        'menu_id' => '', 
        
        'container' => 'nav',
        'container_class' => 'nav-primary',
        
        
          ) );
    
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '<div class=hero-banner-container>';
    echo '<div class= "wrap">';
    echo '<div class= "hero-banner">';
    $headerLogo = get_stylesheet_directory_uri().'/assets/images/temp-logo.jpg';
    echo'<img class="" src="'.$headerLogo.'" alt="UCSC Logo" >';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '<div class=hero-title-container>';
    echo '<div class= "wrap">';
    echo '<div class= "hero-title">';
    $headerTitle = get_bloginfo( 'name' );
    $headerDescription = get_bloginfo( 'description' );
    $headerUrl = get_bloginfo( 'url' );
    
    echo '<div class="title-area"><p class="site-title" itemprop="headline"><a href="'.$headerUrl.'">'.$headerTitle.'</a></p><p class="site-description screen-reader-text" itemprop="description">'.$headerDescription.'</p></div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    //sample text -- remove!
    echo '<div class="wrap">';
    echo '<div class="container">
    <h2>Simple Collapsible</h2>
    <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Simple collapsible</button>
    <div id="demo" class="collapse">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </div>
</div>';
    echo '</div>';
    //end Sample Text
    echo '<div class=hero-chevron-container>';
    //echo '<div class= "wrap">';
    //echo '<div class= "hero-chevron">';
    echo '<i class="fa fa-angle-down fa-4x"></i>';
    //echo '</div>';
    //echo '</div>';
    echo '</div>';
    echo '</div>';
}


