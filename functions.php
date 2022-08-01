<?php

/**
*Theme Functions
*
*@package giomaz
*/



if(!defined('GIOMAZ_DIR_PATH')){
    define('GIOMAZ_DIR_PATH', untrailingslashit(get_template_directory()));
}

require_once GIOMAZ_DIR_PATH . '/inc/helpers/autoloader.php';
//require_once GIOMAZ_DIR_PATH . '/inc/classes/class-giomaz-theme.php';



 function giomaz_get_theme_instance(){
   \NOMEMIO\Giomaz_theme::get_instance();
   
} 

giomaz_get_theme_instance();

/* require_once GIOMAZ_DIR_PATH . '/inc/classes/class-test.php';

function istanziate_test_php(){
    $t = new TEST_PHP\Test_php();
    $t->prova_test();
    
} */

//istanziate_test_php();
 
function giomaz_enqueue_script(){

    //Register Styles
    wp_register_style('style-css',get_template_directory_uri(),[], fileatime(get_template_directory().'/style.css'),'all');
    wp_register_style('bootstrap-css',get_template_directory_uri().'/assets/src/library/css/bootstrap.min.css',[], false,'all');

    //Register Scripts
    wp_register_script('main-js', get_template_directory_uri(). '/assets/main.js', fileatime(get_template_directory().'/assets/main.js'),true);
   // wp_register_script('hide-navbar-js', get_template_directory_uri(). '/assets/hide-navbar.js', fileatime(get_template_directory().'/assets/hide-navbar.js'),true);
    wp_register_script('bootstrap-js', get_template_directory_uri(). '/assets/src/library/js/bootstrap.min.js',[],false,true);
   
    //Enqueue Stiles
    wp_enqueue_style('style-css');
    wp_enqueue_style('bootstrap-css');
    //Enqueue Scripts
    wp_enqueue_script('main-js');
   // wp_enqueue_script('hide-navbar-js');
    wp_enqueue_script('bootstrap-js');

}
add_action( 'wp_enqueue_scripts', 'giomaz_enqueue_script');
