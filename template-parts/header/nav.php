<?php
/**
 * Header Navigation template
 * @package giomaz
 */
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
    </div>
  </nav>