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
                    <h3>DataTable Kategori</h3>
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
                    <div class='card-header' style="margin-left:-20px;">
                        <div class="card">

                            <?= $this->session->flashdata('message'); ?>
                            <div class="card-content">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#border-less">
                                    Tambah
                                </button>
                                <!--BorderLess Modal Modal -->
                                <div class="modal fade text-left modal-borderless" id="border-less" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Jumlah Kategori Nilai</h5>
                                                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="<?php echo site_url(); ?>AdminClient/post_kategori/" method="post">
                                                    <div class="form-group">
                                                        <label for="count">Jumlah</label>
                                                        <input type="number" class="form-control" id="count" name="count" aria-describedby="count" placeholder="Jumlah" value=1>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light-primary" data-bs-dismiss="modal">
                                                            <i class="bx bx-x d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Close</span>
                                                        </button>
                                                        <button type="submit" class="btn btn-primary ml-1">
                                                            <i class="bx bx-check d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Accept</span>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="dataTable-container">
                                    <table class="table table-striped dataTable-table" id="table1">
                                        <thead>
                                            <tr>
                                                <th data-sortable="" style="width: 11.7015%;"><a href="#" class="dataTable-sorter">No</a></th>
                                                <th data-sortable="" style="width: 16.5121%;"><a href="#" class="dataTable-sorter">Start</a></th>
                                                <th data-sortable="" style="width: 16.5121%;"><a href="#" class="dataTable-sorter">End</a></th>
                                                <th data-sortable="" style="width: 16.5121%;"><a href="#" class="dataTable-sorter">Grade</a></th>
                                                <th data-sortable="" style="width: 16.5121%;"><a href="#" class="dataTable-sorter">Aksi</a></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            foreach ($kategori as $rows) : ?>
                                                <tr>

                                                    <td><?php echo $i++; ?></td>
                                                    <td><?php echo $rows->start; ?></td>
                                                    <td><?php echo $rows->end; ?>
                                                    <td><?php echo $rows->grade; ?>
                                                    </td>

                                                    <td>
                                                        <a href="<?php echo site_url(); ?>AdminClient/put_kategori/<?php echo $rows->id_kategori; ?>" class="btn btn-warning">
                                                            <i class="bi bi-pen" aria-hidden="true"></i></a>
                                                        <a href="<?= base_url(); ?>AdminClient/delete_kategori/<?= $rows->id_kategori; ?>" class="btn btn-danger" onClick="return confirm('yakin mau hapus');">
                                                            <i class="bi bi-trash" aria-hidden="true"></i></a>
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


</body>

</html>