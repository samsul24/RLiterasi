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
                    <?= $this->session->flashdata('message'); ?>

                    <div class="dataTable-container">
                        <table class="table table-striped " id="table1">
                            <thead>
                                <tr>
                                    <th data-sortable="" style="width: 11.7015%;"><a href="#" class="dataTable-sorter">No</a></th>
                                    <th data-sortable="" style="width: 16.5121%;"><a href="#" class="dataTable-sorter">Nama</a></th>
                                    <th data-sortable="" style="width: 16.5121%;"><a href="#" class="dataTable-sorter">Nilai</a></th>
                                    <th data-sortable="" style="width: 16.5121%;"><a href="#" class="dataTable-sorter">Grade</a></th>
                                    <th data-sortable="" style="width: 16.5121%;"><a href="#" class="dataTable-sorter">Aksi</a></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach ($detail_ulasan as $rows) : ?>
                                    <tr>

                                        <td><?php echo $i++; ?></td>
                                        <td><?php echo $rows->nama; ?></td>
                                        <td><?php echo $rows->hasil; ?>
                                            <?php similar_text($rows->ulasan_siswa, $rows->ulasan_guru, $percent); ?>
                                        </td>
                                        <td>
                                            <?php
                                            foreach ($kategori as $k) :
                                                if (($percent >= $k->start) and ($percent <= $k->end)) {
                                                    $hasil = $k->grade;
                                                }
                                            endforeach;
                                            echo "Nilai Anda masuk dalam kategori " . $hasil;
                                            ?>
                                        </td>

                                        <td>
                                            <a href="<?php echo site_url(); ?>AdminClient/delete_nilai/<?php echo $rows->id_detail_ulasan; ?>" class="btn btn-danger" onClick="return confirm('yakin mau hapus');">
                                                <i class="fa fa-trash" aria-hidden="true">delete</i></a>
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
<script>
    // Simple Datatable
    let table1 = document.querySelector('#table1');
    let dataTable = new simpleDatatables.DataTable(table1);
</script>

<script src="<?php echo base_url() ?>assets/super/assets/js/main.js"></script>



</body>

</html>