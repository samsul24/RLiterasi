<?php if ($this->session->userdata('id_user_role') != 3) {
  redirect('login');
}; ?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Literasi</title>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/super/assets/css/bootstrap.css">

  <link rel="stylesheet" href="<?php echo base_url() ?>assets/super/assets/vendors/simple-datatables/style.css">

  <link rel="stylesheet" href="<?php echo base_url() ?>assets/super/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/super/assets/vendors/bootstrap-icons/bootstrap-icons.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/super/assets/css/app.css">
  <link rel="shortcut icon" href="<?php echo base_url() ?>assets/super/assets/images/favicon.svg" type="image/x-icon">
  <!-- <link rel="stylesheet" href="<?php echo base_url() ?>css/assets/css/style1.css"> -->



</head>
<div class="cc">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h2 class="m-0" style="color:#435ebe;"><i class="nav-icon fas fa-book"></i> Tambah Data Buku </h2>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="alert alert-secondary" role="alert">
          <i class="nav-icon fas fa-home"></i> Dashboard &nbsp; &nbsp; > &nbsp; &nbsp;<i class="nav-icon fas fa-book"></i> Buku
        </div>
        <div class="row">
          <div class="col">
            <!-- Tabel -->
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <div class='card-header' style="margin-left:-20px;">

                    <!-- Section Title Ends -->
                    <!-- Form Starts -->
                <form action="<?php echo site_url(); ?>BukuBebasClient/post_process_buku" class="needs-validation" method="POST" enctype="multipart/form-data" onload="setSelectBoxByText()">
                    <div class="form-group">
                    <label for="pdf_file">File : Maximum pdf file Size 10mb</label>
                                <div style="background : black; width: 100px; height: 130px;">
                                <input type="file" size="32" class="form-control-file" placeholder="Choice Foto" name="pdf_file" >
                                </div>
                                <div class="invalid-feedback">
                                <?php echo form_error('pdf_file') ?>
                                </div>
                        </div>
                        <br>
                    <div class="form-group">
                            <label for="cover">Cover</label>
                                <div style="background : black; width: 100px; height: 130px;">
                                <input type="file" size="32" class="form-control-file" placeholder="Choice Foto" name="cover" >
                                </div>
                                <div class="invalid-feedback">
                                <?php echo form_error('cover') ?>
                                </div>
                        </div>
                        <br>
            <div class="form-group row">
                <label for="floatingSelect">Nama Buku</label>

                <input style="height:40px; width:547px;" type="text" name="nama_buku" class="form-control form-control-user" id="nama_buku" required></input>
                <span class="text-danger"></span>

            </div>
            <div class="form-group row">
                <input style="height:40px; width:547px;" type="hidden" name="id_sekolah" class="form-control form-control-user" id="id_sekolah" value="<?php echo $this->session->userdata('id_sekolah'); ?>" required readonly></input>
                <span class="text-danger"></span>

            </div>
            <div class="form-group row">
                <label for="floatingSelect">Deskripsi</label>

                <textarea style="height:96px; width:547px;" type="text" name="diskripsi" class="form-control" id="diskripsi" required></textarea>
                <span class="text-danger"></span>

            </div>

            <div class="form-group" style="margin-left: -10px;">
                <input type="submit" name="register" value="Tambahkan" style="height:40px; width:547px;" class="btn btn-primary btn-user btn-block" />
            </div>

            </form>
            <!-- Form Ends -->
        </div>
</div>
<!-- filepond validation -->