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
                    <h3>DataTable Siswa</h3>
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
            <div class="card-body">
                
                <div>
                    <!-- Section Title Starts -->

                    <!-- Section Title Ends -->
                    <!-- Form Starts -->
                <form action="<?php echo site_url(); ?>BukuClient/post_process" class="needs-validation" method="POST" enctype="multipart/form-data" onload="setSelectBoxByText()">
                    <div class="form-group">
                            <label for="pdf_file">File : Maximum pdf file Size 10mb</label>
                                <div style="background : black; width: 100px; height: 130px;">
                                <input type="file" size="32" class="form-control-file" placeholder="Choice Foto" name="pdf_file" >
                                </div>
                                <div class="invalid-feedback">
                                <?php echo form_error('pdf_file') ?>
                                </div>
                        </div>
                    <div class="form-group">
                            <label for="cover">Cover</label>
                                <div style="background : black; width: 100px; height: 130px;">
                                <input type="file" size="32" class="form-control-file" placeholder="Choice Foto" name="cover" >
                                </div>
                                <div class="invalid-feedback">
                                <?php echo form_error('cover') ?>
                                </div>
                        </div>
            <div class="form-group row">
                <label for="floatingSelect">Nama Buku</label>

                <input style="height:40px; width:547;" type="text" name="nama_buku" class="form-control form-control-user" id="nama_buku" required></input>
                <span class="text-danger"></span>

            </div>
            <div class="form-group row">
                <input style="height:40px; width:547;" type="hidden" name="id_sekolah" class="form-control form-control-user" id="id_sekolah" value="<?php echo $this->session->userdata('id_sekolah'); ?>" required readonly></input>
                <span class="text-danger"></span>

            </div>
            <div class="form-group row">
                <label for="floatingSelect">Deskripsi</label>

                <textarea style="height:96px; width:547;" type="text" name="diskripsi" class="form-control" id="diskripsi" required></textarea>
                <span class="text-danger"></span>

            </div>

            <div class="form-group">
                <input type="submit" name="register" value="Tambahkan" style="height:40px; width:547;" class="btn btn-primary btn-user btn-block" />
            </div>

            </form>
            <!-- Form Ends -->
        </div>
</div>
<!-- filepond validation -->
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