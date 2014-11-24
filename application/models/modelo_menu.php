<?php
class Modelo_menu extends CI_model{


    function __construct()
    {        
        parent::__construct();
    } 
  function obtieneMenu(){    

        $menuPrincipal='<div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Clientes <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="'.base_url("index.php/clientes/fisica").'">Fisica</a></li>
                  <li><a href="'.base_url("index.php/clientes/moral").'">Moral</a></li>
                </ul>
              </li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
            </ul>            
          </div>';      
        return $menuPrincipal;     
  }
}
?>