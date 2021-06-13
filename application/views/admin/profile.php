    <?php if ($this->session->userdata('id_user_role') != 2) {
        redirect('login');
    }; ?>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Literasi</title>

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&amp;display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/super/assets/css/bootstrap.css">

        <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
        <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/super/assets/vendors/simple-datatables/style.css">

        <link rel="stylesheet" href="<?php echo base_url() ?>assets/super/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/super/assets/vendors/bootstrap-icons/bootstrap-icons.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/super/assets/css/app.css">
        <link rel="shortcut icon" href="<?php echo base_url() ?>assets/super/assets/images/favicon.svg" type="image/x-icon">
        <link rel="stylesheet" href="<?php echo base_url() ?>css/assets/css/style1.css">




    </head>
    <div id="main-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>DataTable Buku</h3>
                    <p class="text-subtitle text-muted">For user to check they list</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">DataTable</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    Simple Datatable
                </div>
            </div>
            <div class="form-container">
                <div>
                    <!-- Section Title Starts -->

                    <!-- Section Title Ends -->
                    <!-- Form Starts -->
                    <form action="<?php echo site_url(); ?>Adminlient/put_process_profile" class="needs-validation" method="POST" enctype="multipart/form-data" onload="setSelectBoxByText()">
            <div class="row no-gutters">
            <div class="col-md-4">
                <?php $no = 1;
                foreach ($user as $rows) : ?>
                <img src="<?= base_url('assets/admin/img/') . $rows->foto ?>" class="card-img" alt="..."
                    width="200%">
            </div>
            <div class="col-md-8">
                <div class="card-body">

                    <h5 class="card-title text-dark">NIP &nbsp;: <?= $rows->nis ?></h5>
                    <h5 class="card-title text-dark">Email &nbsp;: <?= $rows->email ?></h5>
                    <h5 class="card-title text-dark">Jabatan &nbsp;: <?= $rows->kelas ?></h5>
                    <h5 class="card-title text-dark">Nama&nbsp;: <?= $rows->nama ?></h5>
                    <h5 class="card-title text-dark">No.Telp &nbsp;: <?= $rows->no_telp ?></h5>
                    <h5 class="card-title text-dark">Gender &nbsp;: <?= $rows->jenis_kelamin ?></h5>
                    <!-- <p class="card-text "><small class="text-muted">Tgl.
                            pembuatan,&nbsp;<?= date('d  F Y H:i:s', ($rows->date_created)); ?></small> -->
                    <?php endforeach ?>
                    <a href="<?php echo base_url("AdminClient/edit_profile"); ?>" class="btn btn-primary"> <i
                            class="fas fa-pen"></i>&nbsp;Edit</a>
                    <a href="<?php echo base_url("admin/Change_Password"); ?>" class="btn btn-primary"> <i
                            class="fas fa-key"></i>&nbsp;Ubah Kata Sandi</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<footer>
    <div class="footer clearfix mb-0 text-muted">
        <div class="float-start">
            <p>2021 © Literasi</p>
        </div>
        <div class="float-end">
        </div>
    </div>
</footer>
</div>
</div>
<script src="<?php echo base_url() ?>assets/super/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="<?php echo base_url() ?>assets/super/assets/js/bootstrap.bundle.min.js"></script>

<script src="<?php echo base_url() ?>assets/super/assets/vendors/simple-datatables/simple-datatables.js"></script>


<script src="<?php echo base_url() ?>assets/super/assets/js/main.js"></script>
<script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>

<script src="<?php echo base_url() ?>assets/super/assets/js/main.js"></script>



</body>

</html>