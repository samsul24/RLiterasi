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
            <h2 class="m-0" style="color:#435ebe;"><i class="nav-icon fas fa-user-plus"></i> Data User </h2>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="alert alert-secondary" role="alert">
          <i class="nav-icon fas fa-home"></i> Dashboard &nbsp; &nbsp; > &nbsp; &nbsp;<i class="nav-icon fas fa-user"></i> User
        </div>

        <div class="row">
          <div class="col">
            <!-- Tabel -->
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <div class='card-header' style="margin-left:-20px;">
                
                </div>
                <table id="tabel" class="table table-bordered">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Hasil</th>
                      <th>Nilai</th>
                      <th>Aksi</th>

                    </tr>
                  </thead>
                  <tbody>

                  <?php
                                        $i = 1;
                                        foreach ($detail_ulasan as $rows) : ?>
                                            <tr>

                                                <td><?php echo $i++; ?></td>
                                                <td><?php echo $rows->nama; ?></td>
                                                <td><?php echo $rows->hasil; ?></td>
                                                    <td >
                                                    <?php 
                                                    if ($rows->hasil<40){
                                                        echo "E";}
                                                    else if($rows->hasil<55){
                                                        echo "D";}
                                                    else if($rows->hasil<60){
                                                        echo "C";}
                                                    else if($rows->hasil<70){
                                                        echo "B";}
                                                    else if($rows->hasil<80){
                                                       echo "B+";}
                                                    else if ($rows->hasil<90){
                                                        echo "A";}
                                                    else if ($rows->hasil<=100){
                                                        echo "A+";}?>
                                                    </td>
                                                    <td>
                                                    <a href="<?php echo site_url(); ?>GuruClient/delete_nilai/<?php echo $rows->id_detail_ulasan;; ?>" class="btn btn-danger">
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
