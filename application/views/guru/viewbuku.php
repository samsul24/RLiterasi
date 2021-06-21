<?php if ($this->session->userdata('id_user_role') != 3) {
    redirect('login');
};
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- maps -->

    <script src='https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.css' rel='stylesheet' />

    <!-- end maps -->
    <link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Literasi</title>

    <!-- Icon css link -->
    <link href="<?php echo base_url(); ?>css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/materialdesignicons.min.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Rev slider css -->
    <link href="<?php echo base_url(); ?>vendors/revolution/css/settings.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>vendors/revolution/css/layers.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>vendors/revolution/css/navigation.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>vendors/animate-css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>vendors/owl-carousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Extra plugin css -->
    <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>


    <!--================Header Area =================-->
    <header class="main_header_area transparent_menu">
        <div class="header_top_area">
            <div class="container">
                <div class="pull-left">
                    <a href="#"><i class="fa fa-phone"></i><?= $this->session->userdata('no_telp') ?></a>
                    <a href="#"><i class="fa fa-map-marker"></i> <?= $this->session->userdata('alamat_sekolah') ?> </a>
                    <a href="#"><i class="mdi mdi-clock"></i><?php echo date('Y-m-d / H:i:s'); ?></a>
                    <a></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <a class="nav-link" href="#"><?= $this->session->userdata('username') ?></a>

                </div>
            </div>
        </div>
        <div class="main_menu_area">
            <div class="container">
                <nav class="navbar navbar-default">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- <a class="navbar-brand" href="index.php"><img src="img/logo.png"></a> -->
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="<?php echo site_url(); ?>Guruclient">Home</a></li>
                            <li><a href="<?php echo site_url(); ?>Guruclient/ulasan">Ulasan</a></li>
                            <!-- <li><a href="<?php echo site_url(); ?>Guruclient/buku1">Buku</a></li> -->
                            <li><a href="<?php echo site_url(); ?>GuruClient/profile">Profile</a></li>
                            <li><a href="<?php echo site_url(); ?>Guruclient/profile">Guru</a></li>
                            <li><a class="nav-link active" href="<?php echo site_url(); ?>login/out">Logout</a></li>

                        </ul>
                    </div><!-- /.navbar-collapse -->
                </nav>
            </div>
        </div>
    </header>
    <!--================Header Area =================-->

    <!--================Banner Area =================-->
    <section class="banner_area">
        <div class="container">
            <div class="banner_inner_text">
                <h4>Welcome to Types Of Book</h4>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li class="active"><a href="#"><?= $this->session->userdata('nama_sekolah') ?></a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--================End Banner Area =================-->

    <!--================Our Project2 Area =================-->
    <section class="our_project_area">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="project_left_side">
                        <div class="main_w_title">
                            <h2>Buku <br class="title_br" /></h2>
                            <h6><?= $this->session->userdata('nama_sekolah') ?></h6>
                        </div>
                        <ul class="our_project_filter">
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="our_project_details">
                        <?php foreach ($buku_bebas as $rows) : ?>
                            <iframe src="<?php echo base_url('file_buku/bebas/' . $rows->pdf_file) ?>" width="100%" height="800"></iframe>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!--================End Our Project2 Area =================-->

    <!--================Get Quote Area =================-->
    <section class="get_quote_area yellow_get_quote">
        <div class="container">
            <div class="pull-left">
                <h4>Yuk Kita Literasi </h4>
            </div>
            <div class="pull-right">
                <a class="get_btn_black" href="<?php echo site_url(); ?>SiswaClient/literasi/">Ayo Literasi</a>
            </div>
        </div>
    </section>
    <!--================End Get Quote Area =================-->

    <!--================Footer Area =================-->
    <footer class="footer_area">
        <div class="footer_widgets_area">
            <div class="container">
                <div class="row footer_widgets_inner">
                    <div class="col-md-3 col-sm-6">
                        <aside class="f_widget about_widget">
                            <!-- <img src="img/footer-logo.png"> -->
                            <p><?= $this->session->userdata('visi') ?></p>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook " aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <aside class="f_widget recent_widget">
                            <div class="f_w_title">
                                <h3>New Event</h3>
                            </div>
                            <div class="recent_w_inner">
                                <div class="media">
                                    <div class="media-left">
                                    </div>
                                    <div class="media-body">
                                        <a href="#">
                                            <p><?= $this->session->userdata('website') ?></p>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </aside>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <aside class="f_widget address_widget">
                            <div class="f_w_title">
                                <h3>Office Address</h3>
                            </div>
                            <div class="address_w_inner">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                    <div class="media-body">
                                        <p> <?= $this->session->userdata('alamat_sekolah') ?></p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="media-body">
                                        <p><?= $this->session->userdata('no_telp') ?> </p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <div class="media-body">
                                        <p><?= $this->session->userdata('website') ?></p>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <aside class="f_widget give_us_widget">
                            <h5>Give Us A Call</h5>
                            <h4><?= $this->session->userdata('no_telp') ?> </h4>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_copy_right">
            <div class="container">

            </div>
        </div>
    </footer>

    <div class="modal fade" id="resultModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title text-center" id="myModalLabel"><?= $this->session->flashdata('result') == "success" ? "Berhasil" : "Gagal" ?></h3>
                </div>
                <div class="modal-body text-center">
                    <?php if ($this->session->flashdata('result') == "success") { ?>
                        <img class="animated infinite bounce w-25" style="padding: 1rem;" src="<?= base_url(); ?>css/assets/img/berhasil.png" alt="">
                        <h4><strong>Terima kasih sudah memberikan ulasan dari literasi kami</strong></h4>
                    <?php } ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url(); ?>css/js/jquery-2.2.4.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>css/js/bootstrap.min.js"></script>
    <!-- Rev slider js -->
    <script src="<?php echo base_url(); ?>vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>

    <script src="<?php echo base_url(); ?>vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/isotope/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/counterup/waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/counterup/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/flex-slider/jquery.flexslider-min.js"></script>

    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="<?php echo base_url(); ?>css/js/gmaps.min.js"></script>

    <script src="<?php echo base_url(); ?>css/js/theme.js"></script>
    <script>
        <?php if ($this->session->flashdata('result') != null) { ?>
            setTimeout(() => {
                $("#resultModal").modal("show");
            }, 500);
        <?php } ?>
    </script>
</body>

</html>