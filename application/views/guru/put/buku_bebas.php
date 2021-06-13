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
            <h2 class="m-0" style="color:#435ebe;"><i class="nav-icon fas fa-book"></i> Data Buku </h2>
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
        <div class="form-container">
            <div>
                <!-- Section Title Starts -->

                <!-- Section Title Ends -->
                <!-- Form Starts -->
                <form action="<?php echo site_url(); ?>BukuBebasClient/put_process_buku_bebas" class="needs-validation" method="POST" enctype="multipart/form-data" onload="setSelectBoxByText()">

                        <?php foreach ($buku_bebas as $rows) : ?>
                        <div class="form-group">
                            <label for="id_buku_bebas">ID :</label>
                            <input type="text" class="form-control" id="id_buku_bebas" value="<?php echo $rows->id_buku_bebas; ?>" name="id_buku_bebas" required readonly>
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="id_sekolah" value="<?php echo $rows->id_sekolah; ?>" name="id_sekolah" required readonly>
                        </div>
                          <div class="form-group">
                            <label for="pdf_file">File</label>
                                <div style="background : black; width: 100px; height: 130px;">
                                <input type="file" size="32" class="form-control-file" placeholder="Choice Foto" name="pdf_file" value="<?php echo $rows->pdf_file; ?>">
                                </div>
                                <div class="invalid-feedback">
                                <?php echo form_error('pdf_file') ?>
                                </div>
                        </div>
                    <div class="form-group">
                            <label for="cover">Cover</label>
                                <div style="background : black; width: 100px; height: 130px;">
                                <input type="file" size="32" class="form-control-file" placeholder="Choice Foto" name="cover" value="<?php echo $rows->cover; ?>" >
                                </div>
                                <div class="invalid-feedback">
                                <?php echo form_error('cover') ?>
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="nama_buku">Nama Buku :</label>
                            <input type="text" class="form-control" id="nama_buku" value="<?php echo $rows->nama_buku; ?>" name="nama_buku" required>
                        </div>
                        <div class="form-group">
                            <label for="diskripsi">Deskripsi :</label>
                            <input type="text" class="form-control" id="diskripsi" placeholder="Deskripsi" value="<?php echo $rows->diskripsi; ?>" name="diskripsi" required>
                        </div>
                        <div class="form-group">
                          <input type="submit" name="Update" value="Update" class="btn btn-primary btn-user btn-block" />
                          </div>
                    <?php endforeach; ?>
                </form>
            </div>
        </div>
    </div>
    <footer>
    <div class="footer clearfix mb-0 text-muted">
        <div class="float-start">
            <p>2021 © Literasi</p>
        </div>
</div>
</footer>
</div>

<script src="<?php echo base_url() ?>assets/super/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="<?php echo base_url() ?>assets/super/assets/js/bootstrap.bundle.min.js"></script>

<script src="<?php echo base_url() ?>assets/super/assets/vendors/simple-datatables/simple-datatables.js"></script>
<script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>

<script src="<?php echo base_url() ?>assets/super/assets/js/main.js"></script>


</body>

</html>