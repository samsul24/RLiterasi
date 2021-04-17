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
  <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"> -->

  <!-- Rev slider css -->
  <link href="<?php echo base_url(); ?>vendors/revolution/css/settings.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>vendors/revolution/css/layers.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>vendors/revolution/css/navigation.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>vendors/animate-css/animate.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>vendors/owl-carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Extra plugin css -->
  <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>css/responsive.css" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>
<style>

</style>

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
  <br>
  <br>
  <form action="<?php echo site_url(); ?>pengirimanclient/put_process" class="needs-validation" method="POST" enctype="multipart/form-data" onload="setSelectBoxByText()">
    <?php foreach ($siswa as $rows) : ?>

      <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
          <div class="col-md-3 border-right">
            <br> <br>
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQF2psCzfbB611rnUhxgMi-lc2oB78ykqDGYb4v83xQ1pAbhPiB&usqp=CAU"><span class="font-weight-bold">Amelly</span><span class="text-black-50">amelly12@bbb.com</span><span> </span></div>
          </div>
          <div class="col-md-5 border-right">
            <div class="p-3 py-5">

              <div class="row mt-2">
                <div class="hidden"><label for="id_user" class="labels"></label><input type="text" class="form-control" placeholder="surname" id="id_user" value="<?php echo $rows->id_user; ?>" name="id_user" required readonly></div>
                <div class="hidden"><label for="id_user_role" class="labels"></label><input type="text" class="form-control" placeholder="surname" id="id_user_role" value="<?php echo $rows->id_user_role; ?>" name="id_user_role" required readonly></div>
                <div class="hidden"><label for="id_sekolah" class="labels"></label><input type="text" class="form-control" placeholder="surname" id="id_sekolah" value="<?php echo $rows->id_sekolah; ?>" name="id_sekolah" required readonly></div>
                <div class="col-md-6"><label for="nis" class="labels">NIS</label><input type="text" class="form-control" placeholder="first name" id="nis" value="<?php echo $rows->nis; ?>" name="nama" required readonly ></div>
                <div class="col-md-6"><label for="nama" class="labels">Name</label><input type="text" class="form-control" placeholder="first name" id="nama" value="<?php echo $rows->nama; ?>" name="nama" required ></div>
              </div>
              <div class="row mt-3">
                <div class="col-md-12"><label for="kelas" class="labels">Kelas</label><input type="text" class="form-control" placeholder="enter address" id="kelas" value="<?php echo $rows->kelas; ?>" name="nama" required ></div>
                <div class="col-md-12"><label for="email" class="labels">Email ID</label><input type="text" class="form-control" placeholder="enter address" id="email" value="<?php echo $rows->email; ?>" name="nama" required ></div>
                <div class="col-md-12"><label for="jurusan" class="labels">Jurusan</label><input type="text" class="form-control" placeholder="enter address" id="jurusan" value="<?php echo $rows->jurusan; ?>" name="nama" required ></div>
                <div class="col-md-12"><label for="no_telp" class="labels">PhoneNumber</label><input type="text" class="form-control" placeholder="enter address" id="no_telp" value="<?php echo $rows->no_telp; ?>" name="nama" required ></div>
                <div class="col-md-12"><label for="jenis_kelamin" class="labels">Jenis Kelamin</label><input type="text" class="form-control" placeholder="enter address" id="jenis_kelamin" value="<?php echo $rows->jenis_kelamin; ?>" name="nama" required ></div>
              </div>
        
              <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
            </div>
          </div>
          <div class="col-md-4 border-right">
            <div class="p-3 py-5">
            <div class="col-md-7"><label for="username" class="labels">Username</label><input type="text" class="form-control" placeholder="username" id="username" value="<?php echo $rows->username; ?>" name="nama" required></div>
                <div class="col-md-7"><label for="password" class="labels">Password</label><input type="text" class="form-control" placeholder="password" id="password" value="<?php echo $rows->username; ?>" name="nama" required></div>
             </div>
          </div>

        </div>
      </div>
      </div>
      </div>
    <?php endforeach; ?>

  </form>
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