<?php 

namespace NOMEMIO;

use GIOMAZ_THEME\Inc\Traits\Singleton;

//require_once GIOMAZ_DIR_PATH .'/inc/traits/trait-singleton.php';


class Giomaz_theme{
    use Singleton;

    function __construct()
    {
        wp_die('prova');
        $this->setup_hooks();
    }

    protected function setup_hooks(){

        

    }

}

?>