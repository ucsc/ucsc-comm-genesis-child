<?php
// Editorial Style Guide Search Form
echo '<div class="style-guide-search">';  
echo    '<form class="search-form" role="search" itemprop="potentialAction" itemscope="" itemtype="https://schema.org/SearchAction" action="'.site_url('/').'" method="get" id="searchform">';
echo '<meta itemprop="target" content="'.site_url().'/?s={s}">';
echo '<label class="search-form-label screen-reader-text" for="searchform-editorial-styles">Search Style Guide</label>';
echo '<input type="search" name="s" id="searchform-editorial-styles" placeholder="Search Style Guide..."/>';
echo    '<input type="hidden" name="post_type" value="a_z_style_guide" />';
echo '<input type="submit" value="'.esc_attr( '&#xf179;' ).'" />';
echo '</form>';
echo '</div>';