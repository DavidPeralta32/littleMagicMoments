<?php
class menuSecciones{

    public function __construct()
    {
        
    }

    public function menuSeccion($nombreSeccion){
        $menu = "<section class='menu' style='padding: 0;'>
                  <nav class='navbar navbar-expand-lg navbar-light' id='navBar'>
                      <div class='container-fluid'>
                          <button class='navbar-toggler' type='button' data-bs-toggle='collapse'
                              data-bs-target='#navbarTogglerDemo01' aria-controls='navbarTogglerDemo01' aria-expanded='false'
                              aria-label='Toggle navigation'>
                              <span class='navbar-toggler-icon'></span>
                          </button>
                          <div class='collapse navbar-collapse' id='navbarTogglerDemo01'>
                              <a class='navbar-brand' href='../index.php' style='font-size: 15px;'><img
                                      src='../img/logo_preview_rev_1.png' class='logo-navbar'></a>
                              <h3 style='color:white;'>$nombreSeccion</h3>
                              <ul class='navbar-nav ms-auto mb-2 mb-lg-0'>
                                <li class='nav-item dropdown'>
                                    <a class='nav-link active dropdown-toggle' style='color:white;' href='#' id='navbarDropdown' role='button'
                                        data-bs-toggle='dropdown' aria-expanded='false'>
                                        Categorias
                                    </a>
                                    <ul class='dropdown-menu' aria-labelledby='navbarDropdown'>
                                        <li><a class='dropdown-item' href='xvView.php'>XV Años</a></li>
                                        <li><a class='dropdown-item' href='bodaView.php'>Boda</a></li>
                                        <li><a class='dropdown-item' href='CumpleañosView.php'>Cumpleaños</a></li>
                                        <li><a class='dropdown-item' href='graduacionView.php'>Graduacion</a></li>
                                        <li><a class='dropdown-item' href='bautizoView.php'>Bautizo</a></li>
                                        <li><a class='dropdown-item' href='babyShowerView.php'>Baby shower</a></li>
                                        <li><a class='dropdown-item' href='otrosView.php'>Otros</a></li>
                                    </ul>
                                </li>
                                  <li class='nav-item'>
                                      <a class='nav-link active' aria-current='page' href='#footerSeccionContacto'style='color: white;'>Contactanos</a>
                                  </li>
                                  <li class='nav-item'>
                                      <a class='nav-link active' href='' style='color: white;'>
                                      <i class='fas fa-user-circle'></i></a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </nav>
              </section>";
              return $menu;
      }

}



?>