<?php
add_action ('genesis_before_content', __NAMESPACE__ .'\bb_do_breadcrumbs', 1);

function bb_do_breadcrumbs(){

if ( function_exists('yoast_breadcrumb') ) {
	yoast_breadcrumb('
	<p class="breadcrumb">','</p>
	');
	}
}