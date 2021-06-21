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
              <li><a href="<?php echo site_url(); ?>GuruClient">Home</a></li>
              <li><a href="<?php echo site_url(); ?>GuruClient/ulasan">Ulasan</a></li>
              <li><a href="<?php echo site_url(); ?>GuruClient/profile">Profile</a></li>
              <li><a href="<?php echo site_url(); ?>GuruClient/profile">Guru</a></li>
              <li><a class="nav-link active" href="<?php echo site_url(); ?>login/out">Logout</a></li>

            </ul>
          </div><!-- /.navbar-collapse -->
        </nav>
      </div>
    </div>
  </header>
  <!--================Header Area =================-->

  <!--================Main Slider Area =================-->
  <section class="main_slider_area slider_2">
    <div id="main_slider" class="rev_slider" data-version="5.3.1.6">
      <ul>
        <li data-index="rs-2972" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="img/home-slider/slider-1.jpg" data-rotate="0" data-saveperformance="off" data-title="Web Show" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
          <!-- MAIN IMAGE -->
          <img src="<?php echo base_url(); ?>img/home-slider/slider-2.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
          <!-- LAYERS -->
          <div class="slider_text_box2">
            <div class="tp-caption first_text" data-x="['left','left','left','left','left']" data-y="['middle','middle','middle','middle','middle']" data-hoffset="['0','15','15','15','15']" data-voffset="['-30','-30','-30','-30','-60']" data-fontsize="['70','70','70','60','40']" data-lineheight="['90','90','70','70','50']" data-width="['none','none','none','none']" data-height="none" data-whitespace="['nowrap','nowrap','nowrap','nowrap','nowrap']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":1700,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"x:left(R);","ease":"Power3.easeIn"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[10,10,10,10]" data-paddingleft="[0,0,0,0]">Welcome to Profile <br><?= $this->session->userdata('username') ?><br></div>

            <div class="tp-caption secand_text" data-x="['left','left','left','left','left']" data-y="['middle','middle','middle','middle']" data-hoffset="['0','15','15','15','15']" data-voffset="['50','50','50','40','0']" data-fontsize="['28','28','28','20','20']" data-lineheight="['38','38','38','30','30']" data-width="['760','760','760','550','400']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1750,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"></div>

          </div>
        </li>
        <li data-index="rs-2973" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="img/home-slider/slider-1.jpg" data-rotate="0" data-saveperformance="off" data-title="Web Show" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
          <!-- MAIN IMAGE -->
          <img src="<?php echo base_url(); ?>img/home-slider/slider-2.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
          <!-- LAYERS -->
          <div class="slider_text_box2">
            <div class="tp-caption first_text" data-x="['left','left','left','left','left']" data-y="['middle','middle','middle','middle','middle']" data-hoffset="['0','15','15','15','15']" data-voffset="['-30','-30','-30','-30','-60']" data-fontsize="['80','80','60','60','40']" data-lineheight="['90','90','70','70','50']" data-width="['none','none','none','none']" data-height="none" data-whitespace="['nowrap','nowrap','nowrap','nowrap','nowrap']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":1700,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"x:left(R);","ease":"Power3.easeIn"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[10,10,10,10]" data-paddingleft="[0,0,0,0]">Welcome to PT Kawi Sakti Megah</div>

            <div class="tp-caption secand_text" data-x="['left','left','left','left','left']" data-y="['middle','middle','middle','middle']" data-hoffset="['0','15','15','15','15']" data-voffset="['50','50','50','40','0']" data-fontsize="['28','28','28','20','20']" data-lineheight="['38','38','38','30','30']" data-width="['760','760','760','550','400']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1750,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">Rental Scaffolding and Build Constrution</div>

            <div class="tp-caption" data-x="['left','left','left','left','left']" data-y="['middle','middle','middle','middle']" data-hoffset="['0','15','15','15','15']" data-voffset="['140','140','140','130','90']" data-fontsize="['28','28','28','28']" data-lineheight="['38','38','38','38']" data-width="['730']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1750,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"><a class="slider_btn" href="#">browse services</a></div>
          </div>
        </li>
      </ul>
    </div>
  </section>
  <!--================Header Area =================-->
  <!--================Banner Area =================-->

  <!--================End Banner Area =================-->
  <!-- <section class="our_project2_area project_grid_two"> -->
  <br>
  <br>
  <br>
  <?php if ($this->session->flashdata('warning')) { ?>
    <div class="alert alert-danger" style="margin: 1rem 5rem;" role="alert">
      <p><?= $this->session->flashdata('warning') ?></p>
    </div>
  <?php } ?>

  <form action="<?php echo site_url(); ?>GuruClient/put_process" class="needs-validation" method="POST" enctype="multipart/form-data" onload="setSelectBoxByText()">
    <?php foreach ($guru as $rows) : ?>

      <div class="container rounded bg-white mt-5 mb-5">
        <div class="row" style="border-style:2px">
          <div class="col-md-3 border-right">
            <br>
            <div class="form-control" style="height:360px;"><br>
              <img class="rounded-circle mt-5" src="<?php echo base_url('img/foto/' . $rows->foto) ?>" width="150" style="margin-left:45px">
              <form action="#" method="post" enctype="multipart/form-data"><br><br>
                <input class="btn btn-success" type="file" name="foto" id="foto" style="width:200px; margin-left:20px"><br>
                <input class="btn btn-primary" type="submit" name="submit" id="submit" value="Change Photos" style=" margin-left:100px">
              </form>
            </div>
          </div>
          <div class="col-md-5 border-right">
            <div class="p-3 py-5">

              <div class="row mt-2">
                <div class="hidden">
                  <label for="id_user" class="labels"></label>
                  <input type="text" name="id_user" class="form-control" placeholder="surname" id="id_user" value="<?php echo $rows->id_user; ?>" required readonly>
                </div>
                <div class="hidden">
                  <label for="id_user_role" class="labels"></label>
                  <input type="text" name="id_user_role" class="form-control" placeholder="surname" id="id_user_role" value="<?php echo $rows->id_user_role; ?>" required readonly>
                </div>
                <div class="hidden">
                  <label for="id_sekolah" class="labels"></label>
                  <input type="text" name="id_sekolah" class="form-control" placeholder="surname" id="id_sekolah" value="<?php echo $rows->id_sekolah; ?>" required readonly>
                </div>

                <div class="col-md-6">
                  <label for="nis" class="labels">NIP</label>
                  <input type="number" class="form-control" name="nis" placeholder="Nomor induk pegawai" id="nis" value="<?php echo $rows->nis; ?>" required>
                </div>
                <div class="col-md-6">
                  <label for="nama" class="labels">Name</label>
                  <input type="text" class="form-control" name="nama" placeholder="first name" id="nama" value="<?php echo $rows->nama; ?>" required>
                </div>
                <div class="col-md-12">
                  <label for="email" class="labels">Email </label>
                  <input type="text" class="form-control" name="email" placeholder="name@mail.com" id="email" value="<?php echo $rows->email; ?>" required readonly>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-md-12">
                  <label for="kelas" class="labels">Jabatan</label>
                  <input type="text" class="form-control" name="kelas" placeholder="Jabatan" id="kelas" value="<?php echo $rows->kelas; ?>" required>
                </div>
                <div class="col-md-12">
                  <label for="jurusan" class="labels">Mata Pelajaran</label>
                  <input type="text" class="form-control" name="jurusan" placeholder="Mata Pelajaran" id="jurusan" value="<?php echo $rows->jurusan; ?>" required>
                </div>
                <div class="col-md-12">
                  <label for="no_telp" class="labels">PhoneNumber</label>
                  <input type="tel" class="form-control" name="no_telp" placeholder="xxxxxxxx" id="no_telp" value="<?php echo $rows->no_telp; ?>" required>
                </div>
                <div class="col-md-12">
                  <label for="jenis_kelamin" class="labels">Jenis Kelamin</label>
                  <select class="form-control" name="kelamin" id="kelamin">
                    <option value="L" <?= $rows->jenis_kelamin == "L" ? "selected" : ""; ?>>Laki laki</option>
                    <option value="P" <?= $rows->jenis_kelamin == "P" ? "selected" : ""; ?>>Perempuan</option>
                  </select>
                </div>
              </div>
              <br>
            </div>
          </div>
          <div class="col-md-4 border-right">
            <div class="p-3 py-5">
              <div class="col-md-7">
                <label for="username" class="labels">Username</label>
                <input type="text" name="username" class="form-control" placeholder="username" id="username" value="<?php echo $rows->username; ?>" required readonly>
              </div>
              <div class="col-md-7">
                <label for="password" class="labels">Password</label>
                <input type="text" name="password" class="form-control" placeholder="password" id="password" value="<?php echo $rows->password; ?>" required readonly>
              </div>
            </div>
          </div>

        </div>
        <div class="mt-5 text-center">
          <button class="btn btn-primary profile-button w-25" type="submit">Save Profile</button>
        </div>
      </div>
    <?php endforeach; ?>
  </form>
  <br>
  <!--================Our Project2 Area =================-->
  <!--================End Our Project2 Area =================-->
  <!--================Get Quote Area =================-->
  <!-- <section class="get_quote_area yellow_get_quote">
    <div class="container">
      <div class="pull-left">
        <h4>Looking for a quality and affordable constructor for your next project?</h4>
      </div>
      <div class="pull-right">
        <a class="get_btn_black" href="#">GET A QUOTE</a>
      </div>
    </div> -->
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
  <?= $this->session->flashdata('result'); ?>
  <!--================End Footer Area =================-->

  <!-- Modal -->
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
            <h4><strong>Berhasil Mengubah data profile</strong></h4>
          <?php } else { ?>
            <img class="animated infinite bounce w-25" style="padding: 1rem;" src="<?= base_url(); ?>css/assets/img/gagal.png" alt="">
            <h4><strong>Berhasil Mengubah data profile</strong></h4>
          <?php } ?>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>









  <!-- jQuery (necessary for Bootstrap's JavaScript plugins -->
  <script src="<?php echo base_url() ?>css/js/jquery-2.2.4.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="<?php echo base_url() ?>css/js/bootstrap.min.js"></script>
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
  <script src="<?php echo base_url() ?>css/js/gmaps.min.js"></script>

  <script src="<?php echo base_url() ?>css/js/theme.js"></script>

  <script>
    <?php if ($this->session->flashdata('result') != null) { ?>
      setTimeout(() => {
        $("#resultModal").modal("show");
      }, 500);
    <?php } ?>

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