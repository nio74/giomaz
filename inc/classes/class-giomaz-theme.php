<?php
/**
 * Bootstrap Theme
 * 
 * @package giomaz
 */
namespace GIOMAZ_THEME\Inc;

use GIOMAZ_THEME\Inc\Traits\Singleton;

class GIOMAZ_THEME{
    use Singleton;

    protected function __construct(){
        wp_die('Funziona');
        //load class.
        $this->set_hooks();
    }

    protected function set_hooks(){
        //actions and filters
        
    }

   
}