<?php

add_action('genesis_after_header', __NAMESPACE__ . '\bb_search_results_header', 15);

function bb_search_results_header()
{
    echo '<div class="page-title"><div class="wrap">';
    echo '<h1 class="entry-title" itemprop="headline">Search Result for: '.get_search_query().'</h1>';
    echo '</div></div>';
}