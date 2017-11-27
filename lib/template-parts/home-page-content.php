<?php
remove_action( 'genesis_after_header', 'genesis_do_nav' );
remove_action( 'genesis_header', 'genesis_header_markup_open', 5 );
remove_action( 'genesis_header', 'genesis_do_header' );
remove_action( 'genesis_header', 'genesis_header_markup_close', 15 );
//* Replace Content with Custom Loop
remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop',  __NAMESPACE__ .'\bb_front_page_content_loop' );

function bb_front_page_content_loop() {
    
    echo '<p>Ice cream cake candy cotton candy brownie. Chocolate bar pudding croissant pie chocolate cake chocolate candy chocolate bar brownie. Jelly-o bear claw gummi bears. Icing cake pie biscuit danish chocolate bar. Apple pie croissant powder cupcake bear claw jelly cookie marzipan. Chupa chups sweet chocolate cake candy fruitcake. Chocolate cake liquorice chupa chups. Marzipan carrot cake caramels. Jujubes dragée jelly-o cupcake caramels jelly gummies carrot cake tootsie roll. Sugar plum oat cake candy cake donut chocolate cake macaroon. Pudding muffin gingerbread tootsie roll tootsie roll lollipop. Icing halvah jelly beans muffin.
    Apple pie cheesecake marshmallow marshmallow marzipan lemon drops. Candy canes gummi bears carrot cake chupa chups. Croissant gingerbread bonbon oat cake. Chocolate bar oat cake ice cream chupa chups gummi bears danish. Danish biscuit jelly-o tart topping. Toffee gummi bears muffin lemon drops tootsie roll danish lollipop icing. Brownie sweet soufflé gummies danish. Cookie sweet roll candy canes chupa chups halvah powder sweet bonbon lollipop. Candy canes bonbon sweet roll jelly tootsie roll jelly beans. Brownie croissant icing soufflé gingerbread brownie. Sugar plum sugar plum marzipan marzipan marshmallow pie chocolate cake muffin. Donut wafer candy. Icing tiramisu carrot cake donut gingerbread gummi bears.
    Marshmallow dessert candy canes biscuit. Sweet roll chocolate bar dragée cheesecake jelly dragée. Tootsie roll jelly beans croissant tiramisu. Cotton candy carrot cake soufflé donut cake lollipop. Cupcake candy cake sugar plum croissant gummies. Cake sweet cake gingerbread liquorice cake. Chocolate dessert lemon drops. Liquorice wafer muffin. Dessert cake dessert. Bear claw gingerbread jelly beans wafer wafer. Fruitcake bonbon croissant biscuit danish caramels chocolate bar chupa chups cupcake. Bear claw cotton candy oat cake muffin jelly beans. Gingerbread soufflé sweet roll toffee macaroon cake muffin. Tiramisu halvah pie chupa chups.
    Caramels dragée donut cookie tootsie roll. Lollipop icing carrot cake toffee wafer macaroon muffin cheesecake. Wafer candy dragée gingerbread pudding wafer. Cake dragée lollipop macaroon muffin halvah. Marshmallow sugar plum jelly-o. Jujubes caramels tart sesame snaps croissant. Sweet roll soufflé cupcake gingerbread donut chocolate gummi bears chocolate cake. Sesame snaps caramels fruitcake bonbon oat cake jelly-o toffee soufflé jelly-o. Cupcake cake sugar plum topping icing sweet croissant sweet biscuit. Oat cake cake wafer apple pie cotton candy pastry halvah carrot cake jelly. Pastry macaroon tart. Dessert caramels icing marzipan pudding biscuit cotton candy chocolate cake. Chocolate cake marshmallow jelly beans cupcake lollipop bear claw macaroon. Cotton candy pudding chocolate cake candy canes cookie brownie carrot cake.
    Tootsie roll pie chupa chups ice cream apple pie powder wafer. Dessert soufflé icing cookie chupa chups jujubes pudding croissant. Muffin soufflé oat cake. Lollipop bear claw candy canes lemon drops pudding sugar plum marshmallow tart. Pie cookie sweet roll gummi bears. Chocolate bar jelly-o dragée chocolate cake icing wafer. Sugar plum chupa chups pudding dessert tootsie roll caramels lemon drops cookie wafer. Jelly beans chocolate cake cotton candy ice cream chocolate cake sweet roll marzipan. Jelly-o chocolate muffin ice cream candy bonbon chocolate cake. Tiramisu gummi bears gummi bears tart jujubes jelly lollipop biscuit sweet roll. Dessert halvah jelly jelly cupcake cotton candy. Gummi bears marzipan chocolate cake.</p>';
}
add_action ('genesis_after_header',__NAMESPACE__ . '\bb_home_hero', 20);

function bb_home_hero() {
    
    echo '<div class= "hero-home">';
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
    echo '<div class=hero-banner-title-container>';
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
    
    echo '<div class=hero-chevron-container>';
    echo '<div class= "wrap">';
    echo '<div class= "hero-chevron">';
    echo '<i class="fa fa-angle-down fa-4x"></i>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    
}


