<?php 
  session_start();
  include('../connection/conn_db.php');
  if(isset($_SESSION['usuario']['tipo'])){
    if($_SESSION['usuario']['tipo'] != "EMPLEADO"){
      header("Location: ../admin/index.php");
    }
  }else{
    header("Location: ../login.php");
  }
  date_default_timezone_set('America/Hermosillo');
  $fecha_hoy= date('d/m/Y');
?>
<!DOCTYPE html>
<html lang="en">
<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Empleados- Nomitel</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="./assets/css/all.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- librerias CSS -->
  <link rel="stylesheet" href="./assets/bundles/bootstrap-5.1.3/css/bootstrap.min.css">
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
                2 </span> </a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
              <div class="dropdown-header">
                Notificaciones
                <div class="float-right">
                  <a href="#">Marcar todo como leído</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-icons">
                <a href="#" class="dropdown-item dropdown-item-unread"> <span
                    class="dropdown-item-icon bg-primary text-white"> <i class="fas fa-donate"></i>
                  </span> <span class="dropdown-item-desc"> Se realizó el pago a tu nomina este periodo. <span class="time">Hace 2 minutos</span>
                  </span>
                </a>
                <a href="#" class="dropdown-item dropdown-item-unread"> <span
                    class="dropdown-item-icon bg-primary text-white"> <i class="fas fa-dollar-sign"></i>
                  </span> <span class="dropdown-item-desc">Se realizaron modificaciones a tu salario. <span class="time">Hace 1 hora</span>
                  </span>
                </a> 
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">Ver todo <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown"><a href="#" data-toggle="dropdown"
            class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="../assets/img/users/<?php echo $_SESSION['usuario']['img']; ?>"
            class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title">Hola <?php echo $_SESSION['empleado']["nombre"]; ?> </div>
              <a href="./perfil.php" class="dropdown-item has-icon"> <i class="far
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
            <a href="index.html"> <img alt="image" src="assets/img/logo-login.png" class="header-logo" style="height: 40px;" /> <span
              class="logo-name">Nomitel</span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Menú</li>
            <li class="dropdown">
              <a href="index.php" class="nav-link"><i data-feather="home"></i><span>Inicio</span></a>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link"><i data-feather="users"></i><span>Nómina</span></a>
            </li>
            <li class="dropdown">
              <a href="./solicitudes.php" class="nav-link"><i data-feather="briefcase"></i><span>Solicitudes</span></a>
            </li>
            <li class="menu-header">ADMINISTRACIÓN</li>
            <li class="dropdown active">
              <a href="./perfil.php" class="nav-link"><i data-feather="settings"></i><span>Perfil</span></a>
            </li>      
          </ul>
        </aside>
      </div>