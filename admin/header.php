<?php
session_start();
include('../connection/conn_db.php');

if(isset($_SESSION['nombre'])){
  $nombre = $_SESSION['nombre'];
}else{
  header('Location: ../login.php');
}
date_default_timezone_set('America/Hermosillo');

?>


<!DOCTYPE html>
<html lang="en">
<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Administración- Nomitel</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <link rel="stylesheet" href="assets/bundles/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="assets/bundles/fullcalendar/fullcalendar.min.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
              collapse-btn"> <i data-feather="align-justify"></i></a></li>
              <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
            </ul>
          </div>
          <ul class="navbar-nav navbar-right">
            <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
              class="nav-link nav-link-lg message-toggle"><i data-feather="bell"></i>
              <span class="badge headerBadge1">
                1 </span> </a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
              <div class="dropdown-header">
                Notificaciones
                <div class="float-right">
                  <a href="#">Marcar todo como leído</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-icons">
                <a href="#" class="dropdown-item dropdown-item-unread"> <span
                    class="dropdown-item-icon bg-warning text-white"> <i class="fas fa-bullhorn"></i>
                  </span> <span class="dropdown-item-desc"> No se han registrados algunos movimientos en el IMSS <span class="time">Hace 2 minutos</span>
                  </span>
                </a>

              </div>
              <div class="dropdown-footer text-center">
                <a href="#">Ver todo <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown"><a href="#" data-toggle="dropdown"
            class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="assets/img/user.png"
            class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title">Hola <?php echo $_SESSION['nombre']; ?> </div>
              <a href="#" class="dropdown-item has-icon"> <i class="far
                fa-user"></i> Perfil
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item has-icon text-danger" data-toggle="modal" data-target="#logoutModal"> <i class="fas fa-sign-out-alt"></i>
                Cerrar sesión
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.php"> <img alt="image" src="assets/img/logo-login.png" class="header-logo" style="height: 40px;" /> <span
              class="logo-name">Nomitel</span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Menú</li>
            <li class="dropdown active">
              <a href="index.php" class="nav-link"><i data-feather="home"></i><span>Inicio</span></a>
            </li>
            <li class="dropdown">
              <a href="empleados/index.php" class="nav-link"><i data-feather="users"></i><span>Empleados</span></a>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                data-feather="briefcase"></i><span>Mi organización</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="atraccion_add.php">Departamentos</a></li>
                  <li><a class="nav-link" href="atraccion_base.php">Puestos</a></li>
                  <li><a class="nav-link" href="atraccion_base.php">Organigrama</a></li>
                </ul>
              </li>
              <li class="dropdown">
              <a href="#" class="nav-link"><i data-feather="clock"></i><span>Control de asistencia</span></a>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                data-feather="folder"></i><span>IMSS</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="atraccion_add.php">Departamentos</a></li>
                  <li><a class="nav-link" href="atraccion_base.php">Puestos</a></li>
                  <li><a class="nav-link" href="atraccion_base.php">Organigrama</a></li>
                </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link"><i data-feather="pie-chart"></i><span>Reportes</span></a>
            </li>
            <li class="menu-header">ADMINISTRACIÓN</li>
            <li>
              <a class="nav-link" href="#"><i data-feather="settings"></i><span>Configuración</span></a>
            </li>
            <li>
              <a class="nav-link" href="#"><i data-feather="user-plus"></i><span>Usuarios</span></a>
            </li>


              
            </ul>
          </aside>
        </div>