<!DOCTYPE html>
<html lang="en" ng-app="universidadApp">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="assets/css/bootstrap.css"> 
  <link rel="stylesheet" href="assets/css/estilos.css"> 
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/chosen/chosen.min.css">
  <script src="angular/angular.min.js"></script>
  <script src="angular/app.js"></script> 
  <title>Administrador</title>
</head>
<body>
<?php if ($_SESSION['nomusuario'] == 'ADMINISTRADOR' OR $_SESSION['nomusuario'] == 'administrador'): ?>
<nav class="navbar navbar-dark bg-primary">
  <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"></button>
  <div class="collapse navbar-toggleable-md" id="navbarResponsive">
    <a class="navbar-brand" href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Inicio</a>
    <ul class="nav navbar-nav">
      <li class="nav-item dropdown nav-item active">
        <a class="nav-link dropdown-toggle" href="#" id="responsiveNavbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fa fa-youtube-play" aria-hidden="true"></i> Peliculas</a>
        <div class="dropdown-menu" id="sub" aria-labelledby="responsiveNavbarDropdown">
          <a id="sub" class="dropdown-item" href="index.php?action=listadoPelis"><i class="btn btn-primary btn-sm  fa fa-list-ol"></i> Listado Peliculas</a>
          <a class="dropdown-item" href="index.php?action=peliculas"><i class="btn btn-primary btn-sm  fa fa-cart-plus"></i> Agregar Peliculas</a>
        </div>
      </li>
      <li class="nav-item dropdown nav-item active">
        <a class="nav-link dropdown-toggle" href="#" id="responsiveNavbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fa fa-universal-access" aria-hidden="true"></i> Clientes</a>
        <div class="dropdown-menu" id="sub" aria-labelledby="responsiveNavbarDropdown">
          <a id="sub" class="dropdown-item" href="index.php?action=listadoClientes"><i class="btn btn-primary btn-sm  fa fa-list-ol"></i> Listado Clientes</a>
          <a class="dropdown-item" href="index.php?action=agregarClientes"><i class="btn btn-primary btn-sm  fa fa-cart-plus"></i> Agregar Clientes</a>
        </div>
      </li> 
       <li class="nav-item dropdown nav-item active">
        <a class="nav-link dropdown-toggle" href="#" id="responsiveNavbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fa fa-usd" aria-hidden="true"></i> Alquileres</a>
        <div class="dropdown-menu" id="sub" aria-labelledby="responsiveNavbarDropdown">
          <a id="sub" class="dropdown-item" href="index.php?action=alquilar"><i class="btn btn-primary btn-sm  fa fa-list-ol"></i> Alquilar Películas</a>
          <a class="dropdown-item" href="index.php?action=listaAlquiler"><i class="btn btn-primary btn-sm  fa fa-cart-plus"></i> Listado Alquileres Clientes</a>
          <a class="dropdown-item" href="index.php?action=devoluciones"><i class="btn btn-primary btn-sm  fa fa-video-camera"></i> Devoluciones de Películas </a>
        </div>
      </li> 
     <!--  <li class="nav-item active">
        <a class="nav-link" href="index.php?action=alquilar">Alquilar Películas</a>
      </li> -->
     
       <li class="nav-item dropdown  nav-item active" id="sesion">
         <a class="nav-link dropdown-toggle" href="#" id="responsiveNavbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-windows" aria-hidden="true"></i> Bienvenido ! <?php echo  ' ' .strtoupper($_SESSION[ 'nomusuario']); ?></a>
         <div class="dropdown-menu" aria-labelledby="responsiveNavbarDropdown">
          <a class="dropdown-item" href="index.php?action=salir"><i class="btn btn-primary btn-sm fa fa-window-close-o"> </i> Cerrar Sesión</a>
          <a class="dropdown-item" href="index.php?action=config"><i class="btn btn-primary btn-sm fa fa-wrench"> </i> Configuracion</a>
          <a class="dropdown-item" href="index.php?action=usuarios"><i class="btn btn-primary btn-sm fa fa-address-book"></i> Usuarios</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<?php else: ?>

  <!-- #----------------------------------------------------------- -->
<nav class="navbar navbar-dark bg-primary">
  <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"></button>
  <div class="collapse navbar-toggleable-md" id="navbarResponsive">
    <a class="navbar-brand" href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Inicio</a>
    <ul class="nav navbar-nav">
      <li class="nav-item dropdown nav-item active">
        <a class="nav-link dropdown-toggle" href="#" id="responsiveNavbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fa fa-youtube-play" aria-hidden="true"></i> Peliculas</a>
        <div class="dropdown-menu" id="sub" aria-labelledby="responsiveNavbarDropdown">
          <a id="sub" class="dropdown-item" href="index.php?action=listadoPelis"><i class="btn btn-primary btn-sm  fa fa-list-ol"></i> Listado Peliculas</a>
          <a class="dropdown-item" href="index.php?action=peliculas"><i class="btn btn-primary btn-sm  fa fa-cart-plus"></i> Agregar Peliculas</a>
        </div>
      </li>
      <li class="nav-item dropdown nav-item active">
        <a class="nav-link dropdown-toggle" href="#" id="responsiveNavbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fa fa-universal-access" aria-hidden="true"></i> Clientes</a>
        <div class="dropdown-menu" id="sub" aria-labelledby="responsiveNavbarDropdown">
          <a id="sub" class="dropdown-item" href="index.php?action=listadoClientes"><i class="btn btn-primary btn-sm  fa fa-list-ol"></i> Listado Clientes</a>
          <a class="dropdown-item" href="index.php?action=agregarClientes"><i class="btn btn-primary btn-sm  fa fa-cart-plus"></i> Agregar Clientes</a>
        </div>
      </li> 
       <li class="nav-item dropdown nav-item active">
        <a class="nav-link dropdown-toggle" href="#" id="responsiveNavbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fa fa-usd" aria-hidden="true"></i> Alquileres</a>
        <div class="dropdown-menu" id="sub" aria-labelledby="responsiveNavbarDropdown">
          <a id="sub" class="dropdown-item" href="index.php?action=alquilar"><i class="btn btn-primary btn-sm  fa fa-list-ol"></i> Alquilar Películas</a>
          <a class="dropdown-item" href="index.php?action=listaAlquiler"><i class="btn btn-primary btn-sm  fa fa-cart-plus"></i> Listado Alquileres Clientes</a>
          <a class="dropdown-item" href="index.php?action=devoluciones"><i class="btn btn-primary btn-sm  fa fa-video-camera"></i> Devoluciones de Películas </a>
        </div>
      </li> 
     <!--  <li class="nav-item active">
        <a class="nav-link" href="index.php?action=alquilar">Alquilar Películas</a>
      </li> -->
     
       <li class="nav-item dropdown  nav-item active" id="sesion">
         <a class="nav-link dropdown-toggle" href="#" id="responsiveNavbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-windows btn btn-warning btn-sm" aria-hidden="true"></i> Bienvenido ! <?php echo  ' ' .strtoupper($_SESSION[ 'nomusuario']);  ?></a>
         <div class="dropdown-menu" aria-labelledby="responsiveNavbarDropdown">
          <a class="dropdown-item" href="index.php?action=salir"><i class="btn btn-primary btn-sm fa fa-window-close-o"> </i> Cerrar Sesión</a>
       

        </div>
      </li>
    </ul>
  </div>
</nav>
<?php endif ?>
