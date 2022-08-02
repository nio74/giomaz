<?php

namespace GIOMAZ_THEME\Inc;

use GIOMAZ_THEME\Inc\Traits\Singleton;

//require_once GIOMAZ_DIR_PATH .'/inc/traits/trait-singleton.php';


class Giomaz_theme
{
    use Singleton;

    function __construct()
    {
        Assets::get_instance();

        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        /**
         * Actions
         */

         add_action('after_setup_theme',[$this, 'setup_theme'],);
  
    }

    public function setup_theme(){
        add_theme_support( 'title-tag' );

    }



    
}
