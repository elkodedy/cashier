<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Apotik Jago - Admin</title>

  <!-- Custom fonts for this template-->
  <!-- <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> -->

  <!-- Page level plugin CSS-->
  <!-- <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet"> -->

  <!-- Custom styles for this template-->
  <!-- <link href="css/sb-admin.css" rel="stylesheet"> -->
 
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('assets/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url('assets/datatables/dataTables.bootstrap4.css') ?>" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('assets/css/sb-admin.css') ?>" rel="stylesheet">

  <!-- My Style-->
  <link href="<?php echo base_url('assets/css/mystyle.css') ?>" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Nav -->
  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="#">Hai, <?php echo $this->session->userdata("name"); ?></a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-bell fa-fw"></i>
          <span class="badge badge-danger">9+</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope fa-fw"></i>
          <span class="badge badge-danger">7</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Activity Log</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.Nav -->


  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link" href="#">
          <i class="fas fa-user-circle fa-3x"></i>
          <span>Administrator</span>
        </a>
      </li>
      <li class="nav-item" id="">
        <hr noshade width="90%">
        <!-- <h6 class="dropdown-header">Other Pages:</h6> -->
      </li>
      <li class="nav-item <?php if($this->uri->segment(2) == "") echo "active"?>" id="">
        <a class="nav-link" href="<?php echo site_url('/admin')?>">
          <i class="fas fa-fw fa-home"></i>
          <span>Beranda</span>
        </a>
      </li>
      <li class="nav-item <?php if($this->uri->segment(2) == "user") echo "active"?>" id="">
        <a class="nav-link" href="<?php echo site_url('/admin/user')?>">
          <i class="fas fa-fw fa-user"></i>
          <span>Pengguna</span>
        </a>
      </li>
      <li class="nav-item <?php if($this->uri->segment(2) == "supplier") echo "active"?>" id="">
        <a class="nav-link" href="<?php echo site_url('/admin/supplier')?>">
          <i class="fas fa-fw fa-handshake"></i>
          <span>Penyedia</span>
        </a>
      </li>
      <li class="nav-item" id="">
        <hr noshade width="90%">
        <!-- <h6 class="dropdown-header">Transaksi :</h6> -->
      </li>
      <li class="nav-item" id="purchase">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-shopping-cart"></i>
          <span>Pembelian</span>
        </a>
      </li>
      <li class="nav-item" id="">
        <hr noshade width="90%">
        <!-- <h2 class="dropdown-header align-center">Laporan :</h2> -->
      </li>
      <li class="nav-item <?php if($this->uri->segment(2) == "product") echo "active"?>" id="product">
        <a class="nav-link" href="<?php echo site_url('/admin/product')?>">
          <i class="fas fa-fw fa-archive"></i>
          <span>Produk</span>
        </a>
      </li>
      <li class="nav-item <?php if($this->uri->segment(2) == "stock") echo "active"?>" id="stock">
        <a class="nav-link"  href="<?php echo site_url('/admin/stock')?>">
          <i class="fas fa-fw fa-warehouse"></i>
          <span>Stok Produk</span>
        </a>
      </li>
      <li class="nav-item <?php if($this->uri->segment(2) == "finance") echo "active"?>" id="finance">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-money-bill-wave"></i>
          <span>Keuangan</span>
        </a>
      </li>
      <li class="nav-item dropdown <?php if($this->uri->segment(2) == "purchase_histori" or $this->uri->segment(2) == "selling_histori") echo "active"?>" id="history">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-history"></i>
          <span>Riwayat</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="<?php echo site_url('/admin/purchase_histori')?>">Pembelian</a>
          <a class="dropdown-item" href="<?php echo site_url('/admin/selling_histori')?>">Penjualan</a>
        </div>
      </li>
    </ul>
    <!-- /.Sidebar -->

    <div id="content-wrapper">
      <div class="container-fluid">
