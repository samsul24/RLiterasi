<head>

    <meta charset="utf-8">
    <title>Login - Bayya Bitcoin Crypto Currency Template</title>
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
    <script src="https://widgets.bitcoin.com/widget.js" id="btcwdgt">
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
                                <p>This is a realistic program for anyone looking for site to invest. Paid to me regularly, keep up good work!</p>
                                <footer><span>Lucy Smith</span>, England</footer>
                            </blockquote>
                        </div>
                    </div>
                    <!-- Carousel Item Ends -->
                    <!-- Carousel Item Starts -->
                    <div class="item item-2 active">
                        <img id="logo" class="img-responsive mobile-logo" src="<?= base_url(); ?>img/home-slider/literasi2.jpg" alt="logo">
                        <div>
                            <blockquote>
                                <p>Bitcoin doubled in 7 days. You should not expect anything more. Excellent customer service!</p>
                                <footer><span>Slim Hamdi</span>, Tunisia</footer>
                            </blockquote>
                        </div>
                    </div>
                    <!-- Carousel Item Ends -->
                    <!-- Carousel Item Starts -->
                    <div class="item item-3">
                        <img id="logo" class="img-responsive mobile-logo" src="<?= base_url(); ?>img/home-slider/literasi3.jpg" alt="logo">
                        <div>
                            <blockquote>
                                <p>My family and me want to thank you for helping us find a great opportunity to make money online. Very happy with how things are going!</p>
                                <footer><span>Rawia Chniti</span>, Russia</footer>
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
                        <h2 class="title-head hidden-xs">member <span>login</span></h2>
                        <p class="info-form">Send, receive and securely store your coins in your wallet</p>
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
                            </p>
                        </div>
                        <!-- Submit Form Button Ends -->
                    </form>
                    <!-- Form Ends -->
                </div>
            </div>
            <!-- Copyright Text Starts -->
            <p class="text-center copyright-text">Copyright © 2018 Bayya All Rights Reserved</p>
            <!-- Copyright Text Ends -->
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