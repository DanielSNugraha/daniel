<!DOCTYPE html>
<html lang="en">
<?php 
include("controller/koneksi.php");
session_start();

if(isset($_SESSION['admin'])){
  $id_admin = $_SESSION['admin'];
  $select = mysqli_query($conn, "SELECT * FROM admin WHERE id_admin='$id_admin'");
  foreach($select as $as){
    $nama = $as['nama_admin'];
  }
}

if(isset($_SESSION['penyewa'])){
  $id_penyewa = $_SESSION['penyewa'];
  $select = mysqli_query($conn, "SELECT * FROM penyewa WHERE id_penyewa='$id_penyewa'");
  foreach($select as $as){
    $nama = $as['nama_penyewa'];
  }
}

if(isset($_SESSION['eo'])){
  $id_eo = $_SESSION['eo'];
  $select = mysqli_query($conn, "SELECT * FROM eo WHERE id_eo='$id_eo'");
  foreach($select as $as){
    $nama = $as['nama_eo'];
  }
}


?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Beranda</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      
      <!-- Notifications Dropdown Menu -->
      
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Sewa Kios</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        
        <div class="info">
          <a href="#" class="d-block"><?=$nama;?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <?php if(isset($id_admin)){?>
          
          <li class="nav-item">
            <a href="sewa.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Sewa
                
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="mall.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Mall
                
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="eo.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Event Organizer
                
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="penyewa.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Data Penyewa
                
              </p>
            </a>
          </li>

          

          <li class="nav-item">
            <a href="controller/logout.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Logout
                
              </p>
            </a>
          </li>
          <?php } ?>
          
          <?php if(isset($id_penyewa)){?>
          
          <li class="nav-item">
            <a href="mall.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Kios
                
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="pembayaran.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Pembayaran
                
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="sewa.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Riwayat Sewa
                
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="form_edit_penyewa.php?id=<?=$id_penyewa?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Profil
                
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="controller/logout.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Logout
                
              </p>
            </a>
          </li>
          <?php } ?>

          <?php if(isset($id_eo)){?>
          
          
          <li class="nav-item">
            <a href="sewa.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Sewa
                
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="controller/logout.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Logout
                
              </p>
            </a>
          </li>
          <?php } ?>
          
          
         
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>