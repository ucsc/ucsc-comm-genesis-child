<?php
$rows = get_field('social_media_property','option');
if ($rows){
        echo '<div class="footer-social">';
    echo '<ul>';
    foreach ($rows as $row) {
        if ($row['social_media_site'] == 'Facebook') :
            $iconClass = "fa-facebook-square";
        elseif ($row['social_media_site'] == 'Twitter') :
                $iconClass = "fa-twitter-square";
        elseif ($row['social_media_site'] == 'Instagram') :
                $iconClass = "fa-instagram";
        elseif ($row['social_media_site'] == 'Pinterest') :
                $iconClass = "fa-pinterest-p";
        elseif ($row['social_media_site'] == 'LinkedIn') :
                $iconClass = "fa-linkedin-square";
        elseif ($row['social_media_site'] == 'YouTube') :
                $iconClass = "fa-youtube-square";
        elseif ($row['social_media_site'] == 'Vimeo') :
                $iconClass = "fa-vimeo";
        elseif ($row['social_media_site'] == 'Flickr') :
                $iconClass = "fa-flickr";
        elseif ($row['social_media_site'] == 'Medium') :
                $iconClass = "fa-medium";
        elseif ($row['social_media_site'] == 'Tumblr') :
                $iconClass = "fa-tumblr";
        elseif ($row['social_media_site'] == 'Snapchat') :
                $iconClass = "fa-snapchat-ghost";
        elseif ($row['social_media_site'] == 'Google+') :
                $iconClass = "fa-google-plus";
        elseif ($row['social_media_site'] == 'Choose one') :
                $iconClass = "";
        endif;

            echo '<li><a href="'.$row['social_media_link'].'" title="'.$row['social_media_site'].'"><i class="fa fa-2x '.$iconClass.'" aria-hidden="true"></i></a></li>';
    }
    echo '</ul>';
    echo '</div>';
}