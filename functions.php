<?php
function insert_bootstrap(){
	wp_enqueue_script('bootstrap',get_stylesheet_directory_uri().'/bootstrap/js/bootstrap.js',array('jquery'));
}
add_action('wp_enqueue_scripts','insert_bootstrap');
function insert_twitter(){
	wp_enqueue_script('twitter','http://platform.twitter.com/widget.js');
}
add_action('wp_enqueue_scripts','insert_twitter');
?>