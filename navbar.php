<nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
       
        <div id="logo-prodil"> <h1>PRODIL GROUP</h1><span>INGENIERIA & ARQUITECTURA</span></div>
    </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo02">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a id="inicio" class="nav-link" aria-current="page" href="<?php echo URL_HOST; ?>">INICIO</a>
          </li>
          <li class="nav-item dropdown">
            <a id="empresa" class="nav-link dropdown-toggle" href="<?php echo URL_HOST."/empresa"; ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              EMPRESA
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="<?php echo URL_HOST."/sobre-nosotros"; ?>">SOBRE NOSOTROS</a></li>
              <li><a class="dropdown-item" href="<?php echo URL_HOST."/contactanos"; ?>">CONTACTANOS</a></li>

            </ul>
          </li>
          <li class="nav-item dropdown">
            <a id="nuestros-productos" class="nav-link dropdown-toggle" href="<?php echo URL_HOST."/nuestros-productos"; ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              NUESTROS PRODUCTOS
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="<?php echo URL_HOST."/nuestros-productos"; ?>">PRODUCTOS</a></li>
              <li><a class="dropdown-item" href="<?php echo URL_HOST."/nuestros-productos#procom"; ?>">PROCOM</a></li>
              <li><a class="dropdown-item" href="<?php echo URL_HOST."/nuestros-productos#verigas"; ?>">VERIGAS</a></li>
              <li><a class="dropdown-item" href="<?php echo URL_HOST."/nuestros-productos#construnow"; ?>">CONSTRUNOW</a></li>
              <li><a class="dropdown-item" href="<?php echo URL_HOST."/nuestros-productos#prodilmat"; ?>">PRODILMAT</a></li>
            </ul>
          </li>
         <!--  <li class="nav-item">
            <a id="galeria" class="nav-link" aria-current="page" href="<?php echo URL_HOST."/galeria-proyectos"; ?>">GALERIA DE PROYECTOS</a>
          </li> -->
        </ul>
        <!-- <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> -->
      </div>
    </div>
  </nav>