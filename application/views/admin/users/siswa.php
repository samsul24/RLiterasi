<?php if ($this->session->userdata('id_user_role') != 2) {redirect('login');}; ?>
<html lang="en">

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
            <div class="card-body">
                    <div class="dataTable-container">
                        <table class="table table-striped dataTable-table" id="table1">
                            <thead>
                                <tr>
                                    <th data-sortable="" style="width: 11.7015%;"><a href="#" class="dataTable-sorter">Id</a></th>
                                    <th data-sortable="" style="width: 11.7015%;"><a href="#" class="dataTable-sorter">Id</a></th>
                                    <th data-sortable="" style="width: 18.9824%;"><a href="#" class="dataTable-sorter">NIS</a></th>
                                    <th data-sortable="" style="width: 16.5121%;"><a href="#" class="dataTable-sorter">Nama</a></th>
                                    <th data-sortable="" style="width: 16.5121%;"><a href="#" class="dataTable-sorter">No Telp</a></th>
                                    <th data-sortable="" style="width: 16.5121%;"><a href="#" class="dataTable-sorter">Gender</a></th>
                                    <th data-sortable="" style="width: 16.5121%;"><a href="#" class="dataTable-sorter">Kelas</a></th>
                                    <th data-sortable="" style="width: 16.5121%;"><a href="#" class="dataTable-sorter">Email</a></th>
                                    <th data-sortable="" style="width: 16.5121%;"><a href="#" class="dataTable-sorter">Jurusan</a></th>
                                    <th data-sortable="" style="width: 16.5121%;"><a href="#" class="dataTable-sorter">Username</a></th>
                                    <th data-sortable="" style="width: 16.5121%;"><a href="#" class="dataTable-sorter">Password</a></th>
                                    <th data-sortable="" style="width: 16.5121%;"><a href="#" class="dataTable-sorter">Status</a></th>
                                    <th data-sortable="" style="width: 11.4415%;"><a href="#" class="dataTable-sorter">Aksi</a></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $i=1;foreach ($siswa as $rows) : ?>
                    <tr>
            
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $rows->id_sekolah; ?></td>
                        <td><?php echo $rows->nis; ?></td>
                        <td><?php echo $rows->nama; ?></td>
                        <td><?php echo $rows->no_telp; ?></td>
                        <td><?php echo $rows->jenis_kelamin; ?></td>
                        <td><?php echo $rows->kelas; ?></td>
                        <td><?php echo $rows->email; ?></td>
                        <td><?php echo $rows->jurusan; ?></td>
                        <td><?php echo $rows->username; ?></td>
                        <td><?php echo $rows->password; ?></td>
                        <td><?php echo $rows->is_active; ?></td>
                        <td>
                            <div class="dataTable-info">
                            <a href="<?php echo site_url(); ?>userclient/put/<?php echo $rows->id_user; ?>" class="btn btn-warning">
                            <i class="fas fa-pen" aria-hidden="true">edit</i></a>
                            <a href="<?= base_url(); ?>userclient/delete/<?= $rows->id_user ;?>" class="btn btn-danger"
                            onClick="return confirm('yakin mau hapus');">
                            <i class="fa fa-trash" aria-hidden="true"></i></a></div>
                        </td>
                    </tr>
                    <?php endforeach ; ?>
                            </tbody>
                        </table>
                    </div>
                  
            </div>
        </div>

    </section>
</div>

<footer>
    <div class="footer clearfix mb-0 text-muted">
        <div class="float-start">
            <p>2021 © Mazer</p>
        </div>
        <div class="float-end">
            <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a href="http://ahmadsaugi.com">Literasi</a></p>
        </div>
    </div>
</footer>
</div>
</div>
<script src="<?php echo base_url() ?>assets/super/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="<?php echo base_url() ?>assets/super/assets/js/bootstrap.bundle.min.js"></script>

<script src="<?php echo base_url() ?>assets/super/assets/vendors/simple-datatables/simple-datatables.js"></script>


<script src="<?php echo base_url() ?>assets/super/assets/js/main.js"></script>


</body>

</html>