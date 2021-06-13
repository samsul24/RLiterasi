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
                <h3>Edit Profile</h3>
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
                <form action="<?php echo site_url(); ?>AdminClient/put_process_profile" class="needs-validation" method="POST" enctype="multipart/form-data" onload="setSelectBoxByText()">
        
                <?php $no = 1;
                foreach ($user as $rows) : ?>
                  <div class="hidden">
                  <label for="id_user" class="labels"></label>
                  <input type="hidden" name="id_user" class="form-control" placeholder="surname" id="id_user" value="<?php echo $rows->id_user; ?>" required readonly>
                </div>
                <div class="hidden">
                  <label for="id_user_role" class="labels"></label>
                  <input type="hidden" name="id_user_role" class="form-control" placeholder="surname" id="id_user_role" value="<?php echo $rows->id_user_role; ?>" required readonly>
                </div>


                
                <div class="card-body">
                    <div class="form-group row">
                        <label for="text" class="col-sm-2 col-form-label">NIP</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nis" name="nis" readonly
                                value="<?= $rows->nis; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="text" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" name="email" readonly
                                value="<?= $rows->email; ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="text" class="col-sm-2 col-form-label">Jabatan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="kelas" name="kelas" readonly
                                value="<?= $rows->kelas; ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="text" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $rows->nama; ?>">
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="text" class="col-sm-2 col-form-label">No telp</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="no_telp" name="no_telp"
                                value="<?= $rows->no_telp; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                        <select class="form-control" name="kelamin" id="kelamin">
                    <option value="L" <?= $rows->jenis_kelamin == "L" ? "selected" : ""; ?>>Laki laki</option>
                    <option value="P" <?= $rows->jenis_kelamin == "P" ? "selected" : ""; ?>>Perempuan</option>
                  </select>
                        </div>
                    </div>
                    <div class=" form-group row">
                        <div class="col-sm-2">Foto</div>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-3">
        								<input type="hidden" name="old_foto" value="<?php echo $rows->foto; ?>">
                                    <img src="<?= base_url('assets/admin/img/') . $rows->foto ?>"class="img-thumbnail">
                                <div class="col-sm-9">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="foto" name="foto" value="<?php echo $rows->foto; ?>">
                                        <label class="custom-file-label" for="foto"></label>
                                        <div class="invalid-feedback">
                                <?php echo form_error('foto') ?>
                                </div>
                                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                    <div class="form-group row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class=" btn btn-primary"><i
                                    class="fas fa-save"></i>&nbsp;Simpan</button>
                            <a href="<?php echo base_url("admin/profile"); ?>" class="btn btn-primary"> <i
                                    class="fas fa-arrow-left"></i>&nbsp;Kembali </a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <br>
        </div>
    </div>
</div>
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