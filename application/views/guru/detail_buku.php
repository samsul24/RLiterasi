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
            <h2 class="m-0" style="color:#435ebe;"><i class="nav-icon fas fa-book"></i> Data Split </h2>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="alert alert-secondary" role="alert">
          <i class="nav-icon fas fa-home"></i> Dashboard &nbsp; &nbsp; > &nbsp; &nbsp;<i class="nav-icon fas fa-book"></i> Split
        </div>

        <div class="row">
          <div class="col">
            <!-- Tabel -->
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
              
                <br> <table id="table1" class="table table-bordered">
                  <thead>
                    <tr>
                                    <th><a>No</a></th>
                                    <th><a>PDF</a></th>
                                    <th><a>Text PDF</a></th>
                                    <th><a>Aksi</a></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach ($split as $rows) : ?>
                                    <tr>

                                        <td><?php echo $i++; ?></td>
                                        <td><iframe src="<?php echo base_url('file_buku/' . $rows->pdf_file) ?>" width="90" hight="120"></iframe></td>
                                        <td><?php echo (str_word_count($rows->deskripsi) > 10 ? substr($rows->deskripsi, 0, 30) . "[..]" : $rows->deskripsi); ?></td>

                                        <td>
                                            <!-- <a href="<?php echo site_url(); ?>Splitter/put/<?php echo $rows->id_split; ?>" class="btn btn-warning">
                                                <i class="bi bi-pen" aria-hidden="true"></i></a> -->
                                            <a href="<?= base_url(); ?>Splitter/delete_guru/<?= $rows->id_split; ?>" class="btn btn-danger" onClick="return confirm('yakin mau hapus');">
                                                <i class="bi bi-trash" aria-hidden="true"></i></a>
                                            <a href="<?= base_url(); ?>Splitter/detail_guru/<?= $rows->id_split; ?>"><button type="button" class="btn btn-outline-success block"> 
                                                    <i class="bi bi-eye" aria-hidden="true"></i></button></a>
               
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                
                </div>
            </div>

        </section>
    </div>

    
</div>
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