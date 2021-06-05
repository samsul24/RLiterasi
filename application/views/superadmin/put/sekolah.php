<?php if ($this->session->userdata('id_user_role') != 1) {
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
                <h3>DataTable Sekolah</h3>
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
        <div class="card-body">
                    <div class="dataTable-container">
                <!-- Section Title Starts -->

                <!-- Section Title Ends -->
                <!-- Form Starts -->
                <form action="<?php echo site_url(); ?>SekolahClient/put_process" class="needs-validation" method="POST" enctype="multipart/form-data" onload="setSelectBoxByText()">

                    <?php foreach ($sekolah as $rows) : ?>
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="id_sekolah" value="<?php echo $rows->id_sekolah; ?>" name="id_sekolah" required readonly>
                        </div>
                        <div class="form-group">
                            <label for="nama_sekolah">Nama Sekolah :</label>
                            <input type="text" class="form-control" id="nama_sekolah" value="<?php echo $rows->nama_sekolah; ?>" name="nama_sekolah" required="">
                        </div>
                        <div class="form-group">
                            <label for="npsn">NPSN :</label>
                            <input type="text" class="form-control" id="npsn" placeholder="NPSN" value="<?php echo $rows->npsn; ?>" name="npsn" required="">
                        </div>
                        <div class="form-group">
                            <label for="nss">NSS :</label>
                            <input type="text" class="form-control" id="nss" placeholder="NSS" value="<?php echo $rows->nss; ?>" name="nss" required="">
                        </div>
                        <div class="form-group">
                            <label for="alamat_sekolah">Alamat :</label>
                            <input type="text" class="form-control" id="alamat_sekolah" placeholder="Alamat Sekolah" value="<?php echo $rows->alamat_sekolah; ?>" name="alamat_sekolah" required="">
                        </div>
                        <div class="form-group">
                            <label for="kode_pos">Kode Pos :</label>
                            <input type="number" class="form-control" id="kode_pos" placeholder="Kode Pos" value="<?php echo $rows->kode_pos; ?>" name="kode_pos" required="">
                        </div>
                        <div class="form-group">
                            <label for="no_telp">No Telepon :</label>
                            <input type="number" class="form-control" id="no_telp" placeholder="Telepon" value="<?php echo $rows->no_telp; ?>" name="no_telp" required="">
                        </div>
                        <div class="form-group">
                            <label for="kelurahan">Kelurahan :</label>
                            <input type="text" class="form-control" id="kelurahan" placeholder="Kelurahan" value="<?php echo $rows->kelurahan; ?>" name="kelurahan" required="">
                        </div>
                        <div class="form-group">
                            <label for="kecamatan">Kecamatan :</label>
                            <input type="text" class="form-control" id="kecamatan" placeholder="Kecamatan" value="<?php echo $rows->kecamatan; ?>" name="kecamatan" required="">
                        </div>
                        <div class="form-group">
                            <label for="kabupaten">Kabupaten :</label>
                            <input type="text" class="form-control" id="kabupaten" placeholder="Kabupaten" value="<?php echo $rows->kabupaten; ?>" name="kabupaten" required="">
                        </div>
                        <div class="form-group">
                            <label for="provinsi">Provinsi :</label>
                            <input type="text" class="form-control" id="provinsi" placeholder="Provinsi" value="<?php echo $rows->provinsi; ?>" name="provinsi" required="">
                        </div>
                        <div class="form-group">
                            <label for="website">Website :</label>
                            <input type="text" class="form-control" id="website" placeholder="Website" value="<?php echo $rows->website; ?>" name="website" required="">
                        </div>
                        <div class="form-group">
                            <label for="visi">Visi :</label>
                            <input type="text" class="form-control" id="visi" placeholder="Visi" value="<?php echo $rows->visi; ?>" name="visi" required="">
                        </div>
                        <div class="form-group">
                            <label for="misi">Misi :</label>
                            <input type="text" class="form-control" id="misi" placeholder="Misi" value="<?php echo $rows->misi; ?>" name="misi" required="">
                        </div>
                        <div class="form-group">
                            <label for="email">Email :</label>
                            <input type="text" class="form-control" id="email" placeholder="Email" value="<?php echo $rows->email; ?>" name="email" required="" readonly>
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="verification_key" placeholder="Nama Keluarga" value="<?php echo $rows->verification_key; ?>" name="verification_key" required>
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="is_email_verified" placeholder="Nama Keluarga" value="<?php echo $rows->is_email_verified; ?>" name="is_email_verified" required>
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
                <p>2021 &copy; Literasi</p>
            </div>
            <div class="float-end">
                <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a href="#">Literasi 2021</a></p>
            </div>
        </div>
    </footer>
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