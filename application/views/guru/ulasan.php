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
    <link rel="stylesheet" href="<?php echo base_url() ?>css/assets/css/style1.css">



</head>
<div class="cc">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h2 class="m-0 text-success"><i class="nav-icon fas fa-user-plus"></i> Data Buku </h2>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="alert alert-secondary" role="alert">
          <i class="nav-icon fas fa-home"></i> Dashboard &nbsp; &nbsp; > &nbsp; &nbsp;<i class="nav-icon fas fa-user"></i> Buku
        </div>

        <div class="row">
          <div class="col">
            <!-- Tabel -->
            <div class="card">
              <!-- /.card-header -->
              <div class="card-b  ody">
                <div class='card-header' style="margin-left:-20px;">
                  <a class='btn btn-success' href="<?php echo site_url(); ?>guruclient/post/">
                    <i class="fa fa-plus"></i>
                    <span>
                      Tambah
                    </span>
                  </a>
                  </a>
                  <br>
                </div>
                <br>
                <table id="tabel" class="table table-bordered">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>judul Buku</th>
                      <th>Keterangan</th>
                      <th>Jumlah Karakter</th>
                      <th>Aksi</t>
                    </tr>
                  </thead>
                  <tbody>

                    <?php
                    $i = 1;
                    foreach ($ulasan as $rows) : ?>
                      <tr>

                        <td><?php echo $i++; ?></td>
                        <td><?php echo $rows->id_user; ?></td>
                        <td><?php echo $rows->judul; ?></td>
                        <td><?php echo $rows->keterangan; ?></td>
                        <td style="text-align: center;"><?= str_word_count($rows->keterangan); ?></td>
                        <td>
                          <a href="<?php echo site_url(); ?>guruclient/put/<?php echo $rows->id_ulasan; ?>" class="btn btn-warning">
                            <i class="fa fa-pen" aria-hidden="true"></i></a>
                          <a href="<?= base_url(); ?>guruclient/delete/<?= $rows->id_ulasan; ?>" class="btn btn-danger" onClick="return confirm('yakin mau hapus');">
                            <i class="fa fa-trash" aria-hidden="true"></i></a>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
                <!-- /.card-body -->
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->