<head>

    <meta charset="utf-8">
    <title>Registrasi - Literasi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.png">

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url() ?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/select2.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/stylelogin.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/color.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/styleswitcher.css">

    <!-- Template JS Files -->
    </script>
    <script src="<?php echo base_url() ?>css/js/modernizr.js"></script>

    <style type="text/css"></style>
</head>

<div class="wrapper">
    <div class="container-fluid user-auth">
        <div class="hidden-xs col-sm-4 col-md-4 col-lg-4">
            <!-- Logo Starts -->
            <a class="logo" href="index.html">
                <!-- <img id="logo-user" class="img-responsive" src="<?= base_url(); ?>css/assets/img/logo-sma.png" alt="logo"> -->
            </a>
            <!-- Logo Ends -->
            <!-- Slider Starts -->
            <div id="carousel-testimonials" class="carousel slide carousel-fade" data-ride="carousel">
                <!-- Indicators Starts -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-testimonials" data-slide-to="0" class=""></li>
                    <li data-target="#carousel-testimonials" data-slide-to="1" class=""></li>
                    <li data-target="#carousel-testimonials" data-slide-to="2" class=""></li>
                </ol>
                <!-- Indicators Ends -->
                <!-- Carousel Inner Starts -->
                <div class="carousel-inner">
                    <!-- Carousel Item Starts -->
                    <div class="item item-1">
                        <img id="logo" class="img-responsive mobile-logo" src="<?= base_url(); ?>img/home-slider/literasi1.jpg" alt="logo" style="">
                        <div>
                            <blockquote>
                                <p>pengetahuan dan kecakapan untuk mengaplikasikan pemahaman tentang konsep, risiko, keterampilan dan motivasi dalam konteks finansial</p>
                                <footer><span>Literasi</span>, Finansial</footer>
                            </blockquote>
                        </div>
                    </div>
                    <!-- Carousel Item Ends -->
                    <!-- Carousel Item Starts -->
                    <div class="item item-2 active">
                        <img id="logo" class="img-responsive mobile-logo" src="<?= base_url(); ?>img/home-slider/literasi2.jpg" alt="logo">
                        <div>
                            <blockquote>
                                <p>Literasi sains merupakan kecakapan memahami fenomena alam dan sosial di sekitar kita</p>
                                <footer><span>Literasi</span>, Sains</footer>
                            </blockquote>
                        </div>
                    </div>
                    <!-- Carousel Item Ends -->
                    <!-- Carousel Item Starts -->
                    <div class="item item-3">
                        <img id="logo" class="img-responsive mobile-logo" src="<?= base_url(); ?>img/home-slider/literasi3.jpg" alt="logo">
                        <div>
                            <blockquote>
                                <p>Literasi adalah istilah umum yang merujuk kepada seperangkat kemampuan dan keterampilan individu dalam membaca, menulis, berbicara, menghitung dan memecahkan masalah pada tingkat keahlian tertentu yang diperlukan dalam kehidupan sehari-hari</p>
                                <footer><span>Literasi</span>, Pengertian</footer>
                            </blockquote>
                        </div>
                    </div>
                    <!-- Carousel Item Ends -->
                </div>
                <!-- Carousel Inner Ends -->
            </div>
            <!-- Slider Ends -->
        </div>
        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
            <!-- Logo Starts -->
            <a class="visible-xs" href="index.html">
                <img id="logo" class="img-responsive mobile-logo" src="<?= base_url(); ?>img/home-slider/literasi1" alt="logo">
            </a>

            <!-- Logo Ends -->
            <div class="form-container">
                <div>
                    <!-- Section Title Starts -->
                    <div class="row text-center">
                        <h3 class="title-body" style="color:white;">Selamat Datang di Rumah Literasi<br>Bersama Berkumpul, Berbagi, Bergerak Bersama</h3>
                        <h2 class="title-head hidden-xs"><span>Register </span>Siswa</h2>
                    </div>
                    <!-- Section Title Ends -->
                    <!-- Form Starts -->
                    <form class="user" method="post" action="<?php echo base_url(); ?>login/reg_process">
                        <div class="form-group row">

                            <input type="text" name="nama_sekolah" class="form-control" id="exampleLastName" placeholder="Nama Sekolah">
                            <span class="text-danger"><?php echo form_error('nama_sekolah'); ?></span>

                        </div>
                        <div class="form-group">
                            <!-- <input type="email" name="email" class="form-control" id="exampleInputEmail" placeholder="Email Address"> -->
                            <input type="text" class="form-control form-control-user border-left-primary"
                                        id="email" name="email" placeholder="Email" value="<?= set_value('email')  ?>">
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            <!-- <span class="text-danger"><?php echo form_error('email'); ?></span> -->
                        </div>
                        <div class="form-group row">

                            <input type="text" name="npsn" class="form-control form-control-user" id="npsn" placeholder="NPSN">
                            <span class="text-danger"><?php echo form_error('npsn'); ?></span>

                        </div>
                        <div class="form-group">
                            <input type="submit" name="register" value="Register" class="btn btn-primary btn-user btn-block" />
                        </div>
                        <hr>

                    </form>
                    <!-- Form Ends -->
                </div>
            </div>
        </div>

    </div>
    <!-- Template JS Files -->
    <script src="<?php echo base_url() ?>css/js/jquery-2.2.4.min.js"></script>
    <script src="<?php echo base_url() ?>css/js/bootstrap.min1.js"></script>
    <script src="<?php echo base_url() ?>css/js/select2.min.js"></script>
    <script src="<?php echo base_url() ?>css/js/jquery.magnific-popup.min.js"></script>


</div>
<!-- Wrapper Ends -->


</body>