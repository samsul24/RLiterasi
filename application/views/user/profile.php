<?php if ($this->session->userdata('id_user_role') != 4) {
  redirect('login');
};
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>img/favicon-32x32.png" sizes="32x32" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Profile - Literasi</title>
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
  <header class="main_header_area">
    <div class="header_top_area">
      <div class="container">
        <div class="pull-left">
          <a href="#"><i class="fa fa-phone"></i><?= $this->session->userdata('no_telp') ?></a>
          <a href="#"><i class="fa fa-map-marker"></i> <?= $this->session->userdata('alamat_sekolah') ?> </a>
          <a href="#"><i class="mdi mdi-clock"></i>08 AM - 04 PM</a>
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
            <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt=""></a>
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
    <!--================Banner Area =================-->
    <section class="banner_area">
        <div class="container">
            <div class="banner_inner_text">
                <h4>Edit User Profile</h4>
            </div>
        </div>
    </section>
    <!--================End Banner Area =================-->
    <!-- <section class="our_project2_area project_grid_two"> -->
    <br>
    <div class="container-fluid">
        <div class="product-status mg-b-30">
            <div class="container-fluid" style="background-color: #FFB74D">
                <h5> <b> Silahkan edit profile anda </b></h5><br>
                <div class="product-status-wrap">
                    <div class="row">
                        <?php while ($show = mysqli_fetch_array($queryUser)) { ?>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <img id="myImg" src="img/users/<?php echo $show['foto']; ?>" width="200"><br><br><br>
                                <form action="uploadPhotos.php" method="post" enctype="multipart/form-data">
                                    <input type="file" name="foto" id="foto" />
                                    <input type="submit" name="submit" id="submit" value="Change Photos" />
                                </form>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                <!-- EDIT DATA PROFIL -->
                                <form action="" method="post">
                                    <h4><b> Nama &emsp;&emsp;&emsp; &emsp; &emsp; &emsp; : <input type="text" name="nama" placeholder="nama" value="<?php echo $show['nama']; ?>"></h4> </b> <br>
                                    <h4><b> E-mail &emsp;&emsp;&emsp; &emsp; &emsp; &emsp; : <input type="text" name="email" placeholder="email" value="<?php echo $show['email']; ?>"></h4></b><br>
                                    <h4><b> No Telepon &emsp;&emsp; &emsp; &emsp;: <input type="text" name="noTelp" placeholder="noTelp" value="<?php echo $show['no_telp']; ?>"></h4></b><br>
                                    <h4><b> Alamat &emsp;&emsp;&emsp;&emsp; &emsp; &emsp; : <input type="text" name="alamat" placeholder="alamat" value="<?php echo $show['alamat']; ?>"></h4></b><br>
                                    <br>
                                    <br>
                                    <input class="btn btn-primary" type="submit" value="submit" name="submit">
                                    <a type="button" href="ProfilBar.php" class="btn btn-danger">Kembali Ke Profile</a>
                                    <a type="button" class="btn btn-info" href="admin/forgot-password/forgot-password.php?edit">Ganti Password</a>
                                </form>
                            </div>
                            <br>
                            <br>
                        <?php } ?>
                        <br>
                        <br>
                    </div>
                </div>
                <br>
                <br>
                <br>
            </div>
        </div>
    </div>
    <br>
    <!--================Our Project2 Area =================-->
    <!--================End Our Project2 Area =================-->
    <!--================Get Quote Area =================-->
    <section class="get_quote_area yellow_get_quote">
        <div class="container">
            <div class="pull-left">
                <h4>Looking for a quality and affordable constructor for your next project?</h4>
            </div>
            <div class="pull-right">
                <a class="get_btn_black" href="#">GET A QUOTE</a>
            </div>
        </div>
        <!-- </section> -->
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
        <!--================End Footer Area =================-->









        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?php echo base_url() ?>js/jquery-2.2.4.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="<?php echo base_url() ?>vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="<?php echo base_url() ?>vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="<?php echo base_url() ?>vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="<?php echo base_url() ?>vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="<?php echo base_url() ?>vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="<?php echo base_url() ?>vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>

        <script src="<?php echo base_url() ?>vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="<?php echo base_url() ?>vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="<?php echo base_url() ?>vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="<?php echo base_url() ?>vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script src="<?php echo base_url() ?>vendors/counterup/waypoints.min.js"></script>
        <script src="<?php echo base_url() ?>vendors/counterup/jquery.counterup.min.js"></script>
        <script src="<?php echo base_url() ?>vendors/flex-slider/jquery.flexslider-min.js"></script>

        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="<?php echo base_url() ?>js/gmaps.min.js"></script>

        <script src="<?php echo base_url() ?>js/theme.js"></script>

        <script>
            function showPass() {
                var x = document.getElementById('password');
                if (x.type === "password") {
                    x.type = "text";
                } else {
                    x.type = "password";
                }
            }
        </script>
</body>

</html>