<?php

function load_style() {
    wp_enqueue_style('bootstrap.min.css', get_template_directory_uri(). '/bootstrap-3.3.7-dist/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap-theme.min.css', get_template_directory_uri() . '/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css');
    wp_enqueue_style('screen.css', get_template_directory_uri() . '/stylesheets/screen.css');
}

add_action ('wp_enqueue_scrips', 'load_style');

function load_script() {
    wp_enqueue_script('jquery-3.1.1.min.js', get_template_directory_uri() . '/js/jquery-3.1.1.min.js');
    wp_enqueue_script('main.js', get_template_directory_uri() . '/js/main.js');
}

add_action ('wp_enqueue_scrips', 'load_script');

?>