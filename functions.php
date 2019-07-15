<?php

// Adding the CSS and JS files

function bh_setup(){
	wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300|Roboto:500&display=swap');
	//wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Open+Sans:600&display=swap');
	wp_enqueue_style('fontawesome', '//use.fontawesome.com/releases/v5.8.2/css/all.css');
	wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime(), 'all');
	wp_enqueue_script('jquery-script', get_template_directory_uri() .'/js/jquery-3.4.1.min.js', array('jquery'), null, true);
	wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), NULL, microtime(), true);
	
}

add_action('wp_enqueue_scripts', 'bh_setup');

// Adding Theme Support

function bh_init(){
	add_theme_support('post-thumbnails');
	add_theme_support('title-tag');
	add_theme_support('html5', array('comment-list', 'comment-form', 'search-form'));
}

add_action('after_setup_theme', 'bh_init');

?>