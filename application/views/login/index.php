<head>

    <meta charset="utf-8">
    <title>Login - Literasi</title>
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
            <a class="logo" href="#">
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
                        <img id="logo" class="img-responsive mobile-logo" src="<?= base_url(); ?>img/home-slider/literasi1.jpg" alt="logo">
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
            <a class="visible-xs" href="#">
                <img href="#"id="logo" class="img-responsive mobile-logo" src="<?= base_url(); ?>css/assets/img/logo-sma.png" style="width:50px; height:50px" alt="logo">
            </a>
            
            <!-- Logo Ends -->
            <div class="form-container">
                <div>
<br>
<br>
                    <!-- Section Title Starts -->
                    <div class="row text-center">
                        <p class="info-form">Selamat Datang di Rumah Literasi<br>Bersama Berkumpul, Berbagi, Bergerak Bersama</p>
                        <h2 class="title-head hidden-xs">Log<span>-in </span></h2>
                        <?= $this->session->flashdata('message'); ?>

                    </div>
                    <!-- Section Title Ends -->
                    <!-- Form Starts -->
                    <form action="<?php echo site_url() ?>login/log_process" method='post'>
                        <!-- Input Field Starts -->
                        <div class="form-group">
                            <input class="form-control" name="user" id="user" placeholder="Masukkan username" type="text" required="">
                        </div>
                        <!-- Input Field Ends -->
                        <!-- Input Field Starts -->
                        <div class="form-group">
                            <input class="form-control" name="password" id="password" placeholder="Masukkan password" type="password" required="">
                        </div>
                        <!-- Input Field Ends -->
                        <!-- Submit Form Button Starts -->
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">login</button>
                        <p class="text-center">
                        <a  href="<?php base_url() ?>Register/forgotPassword">reset password?</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a  href="<?php base_url() ?>Register/awal">create account</a>
                        </p>
                            <hr>
                            <!-- <center><p>OR</p></center> -->
                        <p class="text-center">
                    <a href="<?php echo site_url() ?>Login/reg">Register Sekolah &nbsp;&nbsp;<img src="<?php echo base_url() ?>assets/super/assets/vendors/svg-loaders/circles.svg" class="me-4" style="width: 3rem" alt="audio"></a>
                        </p>
                        <!-- Submit Form Button Ends -->
                    </form>
                    <!-- Form Ends -->
                    <br><br><br>
                    <!-- <div class="form-group">
                    <p class="text-center">
                    <a class="btn btn-primary" href="<?php echo site_url() ?>Login/reg">Register Sekolah &nbsp;&nbsp;<img src="<?php echo base_url() ?>assets/super/assets/vendors/svg-loaders/circles.svg" class="me-4" style="width: 3rem" alt="audio"></a>
                    </p>
                </div> -->
    <p class="text-center copyright-text">Copyright © 2021 RLiterasi</p>
                </div>
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