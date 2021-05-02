<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/super/assets/css/bootstrap.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/super/assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/super/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/super/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/super/assets/css/app.css">
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/super/assets/images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/assets/css/style1.css">
</head>

<body>
    <div class="cc">

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                        <br>
                            <h2 class="m-0 text-primary"><i class="nav-icon fas fa-user-plus"></i> Ulasan </h2>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="alert alert-secondary" role="alert">
                        <!-- <i class="nav-icon fas fa-home"></i> Dashboard &nbsp; &nbsp; > &nbsp; &nbsp;<i class="nav-icon fas fa-user"></i> Ulasan -->
                    </div>

                    <div class="row">
                        <div class="col">
                            <!-- Tabel -->
                            <div class="card">
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class='card-header' style="margin-left:-20px;">
                                        <a class='btn btn-primary' href="<?php echo site_url(); ?>Sm/post/">
                                            <i class="fa fa-plus"></i>
                                            <span>
                                                Tambah
                                            </span>
                                        </a>

                                        </a>
                                        <br>
                                    </div>
                                    <br>
                                    <table id="tabel" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Ulasan Siswa</th>
                                                <th>Ulasan Guru</th>
                                                <th>Hasil</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $i = 1;
                                            foreach ($similar as $rows) : ?>
                                                <tr>

                                                    <td><?php echo $i++; ?></td>
                                                    <td><?php echo $rows->ulasan1; ?></td>
                                                    <td><?php echo $rows->ulasan2; ?></td>
                                                    <td><?php echo $rows->hasil; ?>
                                                        <?php
                                                        similar_text($rows->ulasan1, $rows->ulasan2, $percent);
                                                        echo $percent;
                                                        ?>% Kemiripan
                                                    </td>


                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                    <!-- /.card-body -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->