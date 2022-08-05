<?php
/**
 * Header Navigation template
 * @package giomaz
 */



$menu_class = \GIOMAZ_THEME\Inc\Menus::get_instance();
$header_menu_id = $menu_class->get_menu_id('giomaz-header-menu');
$header_menus   = wp_get_nav_menu_items( $header_menu_id );

?>
<nav id="navbar" class="navbar fixed-top navbar-expand-lg navbar-light py-3">
    <?php 
    if ( function_exists( 'the_custom_logo' ) ) {
      the_custom_logo();
  }
     ?>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
      aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <?php
        if ( ! empty( $header_menus ) && is_array( $header_menus ) ) {
          ?>
          <ul class="navbar-nav ms-auto">
          <?php
              foreach($header_menus as $menu_item ){
                if (! $menu_item->menu_item_parent) {
                  # code...
                }
              }
        }
        ?>
    </div>
  </nav>
  <?php 
    wp_nav_menu(
			[
				'theme_location'  => 'giomaz-header-menu',
				'container_class' => 'primary-menu-container',
			
      ]
		);
  ?>

<ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="contacts.html">CONTATTI</a>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">LABORATORI</a>
          <div class="dropdown-menu">
            <a href="#" class="dropdown-item">OROLOGERIA</a>
            <a href="#" class="dropdown-item">OREFICERIA</a>

          </div>
        </li>


        <li class="nav-item">
          <a class="nav-link" href="">GIOIELLI GAUROSA</a>
        </li>
        <a class="nav-link" href="">SERVIZI</a>
        </li>
      </ul>