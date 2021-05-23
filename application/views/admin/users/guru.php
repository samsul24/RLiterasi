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
                <h3>DataTable Guru</h3>
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
                <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                    <div class="dataTable-top">
                        <div class="dataTable-dropdown"><select class="dataTable-selector form-select">
                                <option value="5">5</option>
                                <option value="10" selected="">10</option>
                                <option value="15">15</option>
                                <option value="20">20</option>
                                <option value="25">25</option>
                            </select><label>entries per page</label></div>
                        <div class="dataTable-search"><input class="dataTable-input" placeholder="Search..." type="text"></div>
                    </div>
                    <div class="dataTable-container">
                        <table class="table table-striped dataTable-table" id="table1">
                            <thead>
                                <tr>
                                    <th data-sortable="" style="width: 11.7015%;"><a href="#" class="dataTable-sorter">Id</a></th>
                                    <th data-sortable="" style="width: 41.7354%;"><a href="#" class="dataTable-sorter">Id Sekolah</a></th>
                                    <th data-sortable="" style="width: 41.7354%;"><a href="#" class="dataTable-sorter">User Role</a></th>
                                    <th data-sortable="" style="width: 18.9824%;"><a href="#" class="dataTable-sorter">NIP</a></th>
                                    <th data-sortable="" style="width: 16.5121%;"><a href="#" class="dataTable-sorter">Nama</a></th>
                                    <th data-sortable="" style="width: 16.5121%;"><a href="#" class="dataTable-sorter">No Telp</a></th>
                                    <th data-sortable="" style="width: 16.5121%;"><a href="#" class="dataTable-sorter">Username</a></th>
                                    <th data-sortable="" style="width: 16.5121%;"><a href="#" class="dataTable-sorter">Password</a></th>
                                    <th data-sortable="" style="width: 11.4415%;"><a href="#" class="dataTable-sorter">Aksi</a></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $i=1;foreach ($guru as $rows) : ?>
                    <tr>
            
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $rows->id_sekolah; ?></td>
                        <td><?php echo $rows->id_user_role; ?></td>
                        <td><?php echo $rows->nis; ?></td>
                        <td><?php echo $rows->nama; ?></td>
                        <td><?php echo $rows->no_telp; ?></td>
                        <td><?php echo $rows->username; ?></td>
                        <td><?php echo $rows->password; ?></td>
                        <td>
                            <div class="dataTable-info">
                            <!-- <a href="<?php echo site_url(); ?>AdminClient/put/<?php echo $rows->id_user; ?>" class="btn btn-warning">
                            <i class="fa fa-pen" aria-hidden="true"></i></a> -->
                            <a href="<?= base_url(); ?>AdminClient/delete_guru/<?= $rows->id_user ;?>" class="btn btn-danger"
                            onClick="return confirm('yakin mau hapus');">
                            <i class="bi bi-trash" aria-hidden="true"></i></a></div>
                        </td>
                    </tr>
                    <?php endforeach ; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="dataTable-bottom">
                        <div class="dataTable-info">Showing 1 to 10 of 26 entries</div>
                        <ul class="pagination pagination-primary float-end dataTable-pagination">
                            <li class="page-item pager"><a href="#" class="page-link" data-page="1">‹</a></li>
                            <li class="page-item active"><a href="#" class="page-link" data-page="1">1</a></li>
                            <li class="page-item"><a href="#" class="page-link" data-page="2">2</a></li>
                            <li class="page-item"><a href="#" class="page-link" data-page="3">3</a></li>
                            <li class="page-item pager"><a href="#" class="page-link" data-page="2">›</a></li>
                        </ul>
                    </div>
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
<script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/vendors/simple-datatables/simple-datatables.js"></script>
<script>
    // Simple Datatable
    let table1 = document.querySelector('#table1');
    let dataTable = new simpleDatatables.DataTable(table1);
</script>

<script src="<?php echo base_url() ?>assets/super/assets/js/main.js"></script>


</body>

</html>