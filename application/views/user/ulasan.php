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
  <link href="<?php echo base_url(); ?>css/flex.css" rel="stylesheet">
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
        <h4>Form Ulasan</h4>
      </div>
    </div>
  </section>
  <!--================End Banner Area =================-->

  <!--================Our Project Area =================-->
  <section class="our_project_area">
    <div class="container">
      <div class="row">
        <div align="right"><strong>Time Left :</strong>
          <span class="badge badge-primary" style="color: #fff;background-color: #007bff;" id="timer"></span>
        </div>
        <div class="col-xs-6">
          <h4><strong>Data Literasi</strong></h4>
          <hr>
          <?php $i = 1;
          foreach ($buku as $rows) : ?>
            <div>
              <div class="form-group">
                <label>ID Buku</label>
                <input type="number" value="<?= $rows->id_buku; ?>" class="form-control" readonly>
              </div>
              <div class="form-group">
                <label>Nama Buku</label>
                <input type="text" value="<?= $rows->nama_buku; ?>" class="form-control" readonly>
              </div>
              <div class="form-group">
                <label>Deskripsi</label>
                <textarea class="form-control" rows="3" readonly>
                  <?= $rows->diskripsi; ?>
                </textarea>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
        <div class="col-xs-6">
          <form id="contactForm" method="POST" action="<?= base_url() ?>SiswaClient/ulasan_process/" class="contact-form">
            <h4><strong>Ulasan anda</strong></h4>
            <hr>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <label for="floatingSelect">Tanggal</label>
              <input type="date" class="form-control" name="tanggal" placeholder="Tanggal ulasan" value="<?php echo date('Y-m-d'); ?>" required data-error="Please enter your message subject" readonly>
              <div class="help-block with-errors"></div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <label for="floatingSelect">Nama</label>
              <input type="text" id="name" name="name" class="form-control" placeholder="Name" value="<?= $this->session->userdata('username') ?>" required data-error="Please enter your name" readonly>
              <div class="help-block with-errors"></div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <label for="floatingSelect">Judul</label>
              <input type="text" id="judul" name="judul" class="form-control" placeholder="Judul Ulasan" required data-error="Mohon masukan judul ulasan">
              <div class="help-block with-errors"></div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <label for="floatingSelect">Message</label>
              <textarea id="message" name="keterangan" rows="7" placeholder="Ulasan" class="form-control" required data-error="Mohon tulis ulasan anda"></textarea>
              <div class="help-block with-errors"></div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
              <button type="submit" id="submit" class="btn btn-primary">Send Message</button>
              <div id="msgSubmit" class="h3 text-center hidden"></div>
              <div class="clearfix"></div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!--================End Our Project Area =================-->
  <!--================Get Quote Area =================-->
  <!-- <section class="get_quote_area yellow_get_quote">
    <div class="container">
      <div class="pull-left">
        <h4>Yuk Kita Literasi </h4>
      </div>
      <div class="pull-right">
        <a class="get_btn_black"  href="<?php echo site_url(); ?>SiswaClient/literasi/">Ayo Literasi</a>
      </div>
    </div>
  </section> -->
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

  <!-- Modal -->
  <div class="modal fade" id="resultModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title text-center" id="myModalLabel">Waktu anda sudah habis</h3>
        </div>
        <div class="modal-body text-center">
          <img class="animated infinite bounce w-25" style="padding: 1rem;" src="<?= base_url(); ?>css/assets/img/gagal.png" alt="">
          <h4><strong>Waktu dalam memberikan ulasan habis</strong></h4>
        </div>
        <div class="modal-footer">
          <a class="btn btn-default" href="<?= base_url() ?>SiswaClient/buku/">Close</a>
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
  <script>
    document.getElementById('timer').innerHTML =
      0 + ":" + 59;
    startTimer();

    function startTimer() {
      var presentTime = document.getElementById('timer').innerHTML;
      var timeArray = presentTime.split(/[:]+/);
      var m = timeArray[0];
      var s = checkSecond((timeArray[1] - 1));
      if (s == 59) {
        m = m - 1
      }
      //if(m<0){alert('timer completed')}
      document.getElementById('timer').innerHTML =
        m + ":" + s;
      setTimeout(startTimer, 1000);
    }

    function checkSecond(sec) {
      if (sec < 10 && sec >= 0) {
        sec = "0" + sec
      }; // add zero in front of numbers < 10
      if (sec < 0) {
        setTimeout(() => {
          $("#resultModal").modal("show");
        }, 500);
        // window.location.href = "<?php echo site_url(); ?>siswaclient/gagal/";
      }
      return sec;
    }
    $('#resultModal').on('hide.bs.modal', function(e) {
      window.location.href = "<?php echo site_url(); ?>siswaclient/buku/";
    })
  </script>
</body>

</html>