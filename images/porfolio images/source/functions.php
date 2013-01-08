<?php

require_once('portfolio-type.php');


add_filter('excerpt_length', 'my_excerpt_length');

function my_excerpt_length($length) {

	return 25; 

}

add_filter('excerpt_more', 'new_excerpt_more');  

function new_excerpt_more($text){  

	return ' ';  

}  

function portfolio_thumbnail_url($pid){
	$image_id = get_post_thumbnail_id($pid);  
	$image_url = wp_get_attachment_image_src($image_id,'screen-shot');  
	return  $image_url[0];  
}

?>