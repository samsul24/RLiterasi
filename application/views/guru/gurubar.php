<?php if($this->session->userdata('id_user_role')!=3){redirect('GuruClient');};?>

<style>
    nav-treeview:hover{
        color : #435ebe;
    }
</style>

<body class="hold-transition sidebar-mini" >
<div class="wrapper" style="position:relative;">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-dark" style="height: 57px;" >
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block" >
        <a href="<?php echo site_url(); ?>adminclient" class="nav-link">Home</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
    </ul>
  </nav>
  <aside class="main-sidebar sidebar-light-green elevation-4">
    <a href="<?php echo site_url(); ?>GuruClient/ulasan" class="brand-link" style="background-color: #fff; color:#435ebe">
    <img src="<?php echo base_url() ?>assets/super/assets/vendors/svg-loaders/audio.svg" class="brand-image img-circle elevation-3" style="opacity: .8; margin-left:18px;" alt="audio">
      <h4 class="me-6" style="color:#435ebe; margin-top:5px"><?= $this->session->userdata('nama_sekolah') ?></h4>
    </a>
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               
          <li class="nav-item ">
           <a href="<?php echo site_url(); ?>GuruClient" class="nav-link" id="navHome">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
           
            <li class="nav-item has-treeview">
            <a href="" class="nav-link" id="navData" style="background:#435ebe;">
              <i class="bi bi-person-lines-fill" style="color:white"></i>
              <p style="color:white">&nbsp;&nbsp;
                User
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url(); ?>GuruClient/siswa" class="nav-link">
                  <i class="nav-icon fas fa-user"></i>
                  <p>Siswa</p>
                </a>
              </li>
            </ul>
            <li class="nav-item has-treeview">
            <a href="" class="nav-link" id="navData" style="background:#435ebe;">
              <i class="bi bi-book" style="color:white"></i>
              <p style="color:white">
              &nbsp;&nbsp; Literasi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url(); ?>GuruClient/ulasan" class="nav-link">
                <i class="bi bi-bookmark"></i>&nbsp;&nbsp;Ulasan
          
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url(); ?>GuruClient/detail" class="nav-link">
                <i class="bi bi-bookmark-check"></i>&nbsp;&nbsp;Detail Ulasan
                </a>
              </li>
            </ul>
            <li class="nav-item has-treeview">
            <a href="" class="nav-link" id="navData" style="background:#435ebe;">
              <i class="bi bi-book-fill" style="color:white"></i>
              <p style="color:white">
              &nbsp;&nbsp; Buku
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url(); ?>GuruClient/buku" class="nav-link">
                <i class="bi bi-book"></i>&nbsp;&nbsp;Buku Wajib
          
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url(); ?>GuruClient/buku_bebas" class="nav-link">
                <i class="bi bi-book"></i>&nbsp;&nbsp;Buku Bebas
          
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url(); ?>Splitter/detail_buku_guru" class="nav-link">
                <i class="bi bi-bookmark-check"></i>&nbsp;&nbsp;Split Buku
                </a>
              </li>
            </ul>
        
          <li class="nav-item">
           <a href="<?php echo site_url(); ?>GuruClient/nilai" class="nav-link" id="navHome">
           <i class="bi bi-file-check"></i>
              <p>
              &nbsp;&nbsp;Nilai
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="" class="nav-link" id="navData" style="background:#435ebe;">
              <i class="nav-icon fas fa-users" style="color:white"></i>
              <p style="color:white">
              Rekap Litersi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url(); ?>LaporanPdf" class="nav-link">
                <i class="fas fa-file-pdf"></i>
                  <p>Laporan PDF</p>
                </a>
              </li>
            </ul>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url(); ?>laporanexcel" class="nav-link">
                  <i class="fas fa-file-excel"></i>
                  <p>Laporan Excel</p>
                </a>
              </li>
            </ul>
            </li>
          
          <li class="nav-item" style="background:#435ebe; ">
           <a href="<?= base_url().'login/out' ?>" onClick="return confirm('Logout sekarang ??');" class="nav-link" id="navHome">
              <i class="nav-icon fas fa-sign-out-alt" style=color:white;></i>
              <p style="color:white;">
                Logout
              </p>
            </a>
          </li>

         
        
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>