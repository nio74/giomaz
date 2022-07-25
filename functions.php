<?php

/**
*Theme Functions
*@package giomaz
*/

function giomaz_enqueue_script(){

    wp_register_style('style-css',get_template_directory_uri(),[], fileatime(get_template_directory().'/style.css'),'all');
    wp_register_script('main-js', get_template_directory_uri(). '/assets/main.js', fileatime(get_template_directory().'/assets/main.js'),true);
   
    wp_enqueue_style('style-css');
    wp_enqueue_script('main-js');

}
add_action( 'wp_enqueue_scripts', 'giomaz_enqueue_script');
?>