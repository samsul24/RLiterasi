<!-- <div class="carousel-item-a intro-item bg-image" style="background-image: url(assets/img/background2.jpg)"> -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

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
  <link href="<?php echo base_url(); ?>css/flex.css" rel="stylesheet">
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
  <header class="main_header_area">
    <div class="header_top_area">
      <div class="container">
        <div class="pull-left">
          <a href="#"><i class="fa fa-phone"></i><?= $this->session->userdata('no_telp') ?></a>
          <a href="#"><i class="fa fa-map-marker"></i> <?= $this->session->userdata('alamat_sekolah') ?> </a>
          <a href="#"><i class="mdi mdi-clock"></i><?php echo date('Y-m-d / H:i:s');?></a>
        </div>
        <!--  <div class="pull-right">
                        <ul class="header_social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div> -->
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
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="<?php echo site_url(); ?>SiswaClient">Home</a></li>
              <!-- <li><a href="projectBar.php">Project</a></li> -->
              <!-- <li><a href="AboutUs.php">About Us</a></li> -->
              <li><a href="<?php echo site_url(); ?>SiswaClient/buku">Buku</a></li>
              <li><a class="nav-link active" href="<?php echo site_url(); ?>Login/out">Logout</a></li>
              <li><a class="nav-link active" href="#"><?= $this->session->userdata('username') ?></a></li>
              <!-- <li><a class="nav-link active" href="#"><img src="<?= base_url(); ?>css/assets/img/profil.jpg" style="height: 50px;" class="rounded-circle" alt=""></a></li> -->

            </ul>
          </div><!-- /.navbar-collapse -->
        </nav>
      </div>
    </div>
  </header>
  <!--================Header Area =================-->
  <!-- mobile-menu-area start -->
  <div class="mobile-menu-area hidden-lg hidden-md hidden-sm">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mobile-menu">
            <div class="logo">
              <a href="<?php echo site_url(); ?>index-2.html"><img src="<?php echo site_url(); ?>assets/literasi/img/logo/logo.png" alt="" /></a>
            </div>
            <nav id="dropdown">
              <ul>
                <li><a class="pages" href="<?php echo site_url(); ?>index-2.html">Home</a>
                  <ul class="sub-menu">
                    <li><a href="<?php echo site_url(); ?>index-2.html">Home 01</a></li>
                    <li><a href="<?php echo site_url(); ?>index-3.html">Home 02</a></li>
                  </ul>
                </li>
                <li><a href="<?php echo site_url(); ?>about.html">About us</a></li>
                <li><a href="<?php echo site_url(); ?>investment.html">Investment</a></li>
                <li><a class="pages" href="#">Pages</a>
                  <ul class="sub-menu">
                    <li><a href="<?php echo site_url(); ?>team.html">team</a></li>
                    <li><a href="<?php echo site_url(); ?>faq.html">FAQ</a></li>
                    <li><a href="<?php echo site_url(); ?>review.html">Reviews</a></li>
                    <li><a href="<?php echo site_url(); ?>login.html">Login</a></li>
                    <li><a href="<?php echo site_url(); ?>signup.html">Register</a></li>
                  </ul>
                </li>
                <li><a class="pages" href="#">Blog</a>
                  <ul class="sub-menu">
                    <li><a href="<?php echo site_url(); ?>blog.html">Blog grid</a></li>
                    <li><a href="<?php echo site_url(); ?>blog-sidebar.html">Blog Sidebar</a></li>
                    <li><a href="<?php echo site_url(); ?>blog-details.html">Blog Details</a></li>
                  </ul>
                </li>
                <li><a href="<?php echo site_url(); ?>contact.html">contacts</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- mobile-menu-area end -->
  </header>
  <!-- header end -->

  <!-- Start breadcumb Area -->
  <div class="page-area">
    <div class="breadcumb-overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="breadcrumb text-center">
            <div class="section-headline white-headline">
              <h3>Blog Sidebar</h3>
            </div>
            <ul class="breadcrumb-bg">
              <li class="home-bread">Home</li>
              <li>Blog Sidebar</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End breadcumb Area -->
  <section class="our_project_area">
    <div class="container">
      <div class="row">
        <div class="col d-flex flex-column text-center">
          <div class="card-body">

            <img class="animated infinite bounce w-25" src="<?= base_url(); ?>css/assets/img/berhasil.png" alt="">
            <br><br>
            <h1>Berhasil</h1>
            <h2>Selamat anda telah membaca literasi dan memberikan ulasan</h2>
            <br>
            <a class='btn btn-success' href="<?php echo site_url(); ?>SiswaClient/buku">
              <span>
                Selesai
              </span>
            </a>
          </div>
        </div>
      </div>
    </div>

  </section>
</body>
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
</body>

</html>