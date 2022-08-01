<?php 

namespace PROVA_TRAIT;

use PROVA\traits_prova;

class USATRAITS{
    use traits_prova;

    public function __construct()
    {
        wp_die('classe che usa il singleton');
    }
}

?>