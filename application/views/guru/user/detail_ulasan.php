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
<div class="cc" >

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h2 class="m-0" style="color:#435ebe;"><i class="nav-icon fas fa-user-plus"></i> Data Ulasan </h2>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="alert alert-secondary" role="alert">
          <i class="nav-icon fas fa-home"></i> Dashboard &nbsp; &nbsp; > &nbsp; &nbsp;<i class="nav-icon fas fa-user"></i> Ulasan
        </div>

            <form action="<?php echo site_url(); ?>GuruClient/proses_detail"  class="needs-validation" method="POST" role="form" enctype="multipart/form-data" onload="setSelectBoxByText()">
           

                            <div class="form-group">
                            <?php foreach ($ulasan as $rows) : ?>
                            <div class="form-group">
                                <input type="hidden" class="form-control" id="id_ulasan" value="<?php echo $rows->id_ulasan; ?>" name="id_ulasan" required readonly >
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama:</label>
                                <input type="text" class="form-control" style="width:600px; " id="nama" value="<?php echo $rows->nama; ?>" name="nama" required readonly >
                            </div>
         

                            <div class="form-group">
                                <label for="ket_siswa">Ulasan Siswa </label>
                                <input type="text" class="form-control" style="width:600px;" id="ket_siswa" value="<?php echo $rows->ket_siswa; ?>" name="ket_siswa" required  readonly>
                            
                            </div>
                            <div class="form-group">
                                <label for="ulasan_guru">Ulasan Guru </label>
                                <textarea type="text" class="form-control" style="width:600px; height:450px" id="text_buku" name="text_buku" required readonly ><?php echo $rows->text_buku; ?></textarea>
                            
                            </div>
                            <div class="form-group">
                                <input type="hidden" class="form-control" id="hasil" name="hasil" value=""  required  >
                            </div>
                            
                            <div class="form-group">
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">
                            <a  style="color:white">Update </a>

                            </button>
                            <!-- The Modal -->
                            <div class="modal fade" id="myModal">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <p>Apa anda yakin ingin mengubah data ini ?</p>
                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-warning"><a  style="color:white">Update </a></button>
                                            <button type="button" class="btn btn-dark" data-dismiss="modal">Batal</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </form>
                </div>
            </div>
        </div>