<?php
echo '<div>';  
echo '<h3>Search Style Guide</h3>';
echo    '<form role="search" action="'.site_url('/').'" method="get" id="searchform">';
echo '<input type="text" name="s" placeholder="Search Style Guide"/>';
echo    '<input type="hidden" name="post_type" value="a_z_style_guide" />';
echo '<input type="submit" alt="Search" value="Search" />';
  echo '</form>';
 echo '</div>';