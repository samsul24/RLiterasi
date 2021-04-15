<?php if($this->session->userdata('id_user_role')!=2){redirect('login');};?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - Mazer Admin Dashboard</title>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/super/assets/css/bootstrap.css">

  <link rel="stylesheet" href="<?php echo base_url() ?>assets/super/assets/vendors/iconly/bold.css">

  <link rel="stylesheet" href="<?php echo base_url() ?>assets/super/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/super/assets/vendors/bootstrap-icons/bootstrap-icons.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/super/assets/css/app.css">
  <link rel="shortcut icon" href="<?php echo base_url() ?>assets/super/assets/images/favicon.svg" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo base_url() ?>css/assets/css/style1.css">
</head>

<body>
  <div id="app">
    <div id="sidebar" class="active">
      <div class="sidebar-wrapper active ps ps--active-y">
        <div class="sidebar-header">
          <div class="d-flex justify-content-between">
            <div class="logo">
              <a href="index.html"><img src="<?php echo base_url() ?>assets/super/assets/images/logo/logo.png" alt="Logo" srcset=""></a>
            </div>
            <div class="toggler">
              <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
          </div>
        </div>
        <div class="sidebar-menu">
          <ul class="menu">
            <li class="sidebar-title">Menu</li>

            <li class="sidebar-item active ">
              <a href="<?php echo site_url(); ?>AdminClient" class="sidebar-link">
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
              </a>
            </li>

            <li class="sidebar-item  has-sub">
              <a href="#" class="sidebar-link">
                <i class="bi bi-stack"></i>
                <span>Users</span>
              </a>
              <ul class="submenu ">

                <li class="submenu-item ">
                  <a href="<?php echo site_url(); ?>AdminClient/guru">Guru</a>
                </li>
                <li class="submenu-item ">
                  <a href="<?php echo site_url(); ?>AdminClient/siswa">Siswa</a>
                </li>
              </ul>
            </li>
         
            <li class="sidebar-title">Forms &amp; Tables</li>


            <li class="sidebar-item  ">
              <a href="<?php echo site_url(); ?>bukuclient" class="sidebar-link">
                <i class="bi bi-file-earmark-medical-fill"></i>
                <span>Buku</span>
              </a>
            </li>
            <li class="sidebar-item  ">
              <a href="<?php echo site_url(); ?>bukuclient" class="sidebar-link">
                <i class="bi bi-file-earmark-medical-fill"></i>
                <span>Ulasan</span>
              </a>
            </li>
            <li class="sidebar-item  ">
              <a href="<?php echo site_url(); ?>AdminClient/siswa" class="sidebar-link">
                <i class="bi bi-file-earmark-medical-fill"></i>
                <span>Nilai</span>
              </a>
            </li>
    
            <li class="sidebar-title">Raise Support</li>

            
            <li class="sidebar-item  has-sub">
              <a href="#" class="sidebar-link">
                <i class="bi bi-life-preserver"></i>
                <span>Documentation</span>
              </a>
              <ul class="submenu ">
                <li class="submenu-item ">
                  <a href="error-403.html">Laporan PDF</a>
                </li>
                <li class="submenu-item ">
                  <a href="error-404.html">Laporan PDF</a>
                </li>
              </ul>
            </li>
            <li class="sidebar-item active ">
              <a href="<?= base_url().'Login/out' ?>" class="sidebar-link">
                <i class="bi bi-grid-fill"></i>
                <span>Logout</span>
              </a>
            </li>
          </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
          <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; height: 637px; right: 0px;">
          <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 245px;"></div>
        </div>
      </div>
    </div>
    <div id="main">
      <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
          <i class="bi bi-justify fs-3"></i>
        </a>
      </header>