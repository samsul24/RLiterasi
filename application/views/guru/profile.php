
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
          <a href="#"><i class="mdi mdi-clock"></i><?php echo date('Y-m-d / H:i:s');?></a> 
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

    <!--================Main Slider Area =================-->
    <section class="main_slider_area slider_2">
    <div id="main_slider" class="rev_slider" data-version="5.3.1.6">
      <ul>
        <li data-index="rs-2972" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="img/home-slider/slider-1.jpg" data-rotate="0" data-saveperformance="off" data-title="Web Show" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
          <!-- MAIN IMAGE -->
          <img src="<?php echo base_url(); ?>img/home-slider/slider-2.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
          <!-- LAYERS -->
          <div class="slider_text_box2">
            <div class="tp-caption first_text" data-x="['left','left','left','left','left']" data-y="['middle','middle','middle','middle','middle']" data-hoffset="['0','15','15','15','15']" data-voffset="['-30','-30','-30','-30','-60']" data-fontsize="['70','70','70','60','40']" data-lineheight="['90','90','70','70','50']" data-width="['none','none','none','none']" data-height="none" data-whitespace="['nowrap','nowrap','nowrap','nowrap','nowrap']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":1700,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"x:left(R);","ease":"Power3.easeIn"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[10,10,10,10]" data-paddingleft="[0,0,0,0]">Welcome to Profile  <br><?= $this->session->userdata('nama_sekolah') ?><br></div>

            <div class="tp-caption secand_text" data-x="['left','left','left','left','left']" data-y="['middle','middle','middle','middle']" data-hoffset="['0','15','15','15','15']" data-voffset="['50','50','50','40','0']" data-fontsize="['28','28','28','20','20']" data-lineheight="['38','38','38','30','30']" data-width="['760','760','760','550','400']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1750,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"><br>Kota <?= $this->session->userdata('kabupaten') ?></div>

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
    <!--================End Main Slider Area =================-->
    <!--================Get Quote Area =================-->
    <!--  <section class="get_quote_area">
            <div class="container">
                <div class="pull-left">
                    <h4>Looking for a quality and affordable constructor for your next project?</h4>
                </div>
                <div class="pull-right">
                    <a class="get_btn" href="#">GET A QUOTE</a>
                </div>
            </div>
        </section> -->
    <!--================End Get Quote Area =================-->

    <!--================Feature Content Area =================-->
    <section class="feature_content">
    <!-- <div class="container">
            <div class="main_c_b_title">
                <h2>Profile<br class="title_br"></h2>
                <h6></h6>
            </div>
            </div> -->
    </section>
    <!--================End Feature Content Area =================-->

    <!--================Best Company Area =================-->
    <section class="best_company_area">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="b_companu_l_text">
                        <b>
                            <h4>Sejarah <?= $this->session->userdata('nama_sekolah') ?></h4><br>
                            <p>
                            Bermula dari kesadaran masyarakat, khususnya masyarakat di Madiun selatan ( Ex Kawedanan Uteran ) akan pentingnya peningkatan pendidikan, maka masyarakat sangat mendambakan adanya sebuah lembaga pendidikan setingkat SLTA, yang mana pada saat itu belum ada satupun lembaga pendidikan setingkat SLTA berdiri/beroperasi di wilayah tersebut. Sehingga setiap lulusan SMP atau MTs apabila ingin melanjutkan pendidikan ke jenjang yang lebih tinggi harus masuk ke Kota Madiun atau daerah lain sehingga lebih menyita waktu dan biaya.<br> </p>
                            <p> Keinginan masyarakat akan adanya Sekolah Menengah Atas (SMA) di Wilayah Ex Kawedanan Uteran tersebut ternyata sejalan dengan program pemerintah untuk mendirikan/membangun sekolah-sekolah baru di seluruh Indonesia, sebagai upaya pemerataan untuk memperoleh kesempatan belajar bagi anak-anak usia sekolah di seluruh tanah air. Program Pemerintah untuk mendirikan sekolah baru tersebut segera direspon oleh Pemerintah Daerah Kabupaten Madiun dan masyarakat – utamanya masyarakat di Kecamatan Geger – dengan menyiapkan lahan/lokasi pembangunan Sekolah dan persyaratan-persyaratan yang dianggap perlu. Sebagai bukti bahwa masyarakat sangat mendambakan adanya sekolah di wilayah ini, maka masyarakat rela tanah yang menjadi tumpuan kehidupannya dipakai untuk tempat/lokasi pembangunan Sekolah. </p>
                        </b>
                        <!--   <a class="slider_btn" href="#">read more</a> -->
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="b_company_image">
                    <br><br><br>
                    <br><br><br>
                        <img src="<?= base_url(); ?>img/logo.png" alt="" style="width:600px; height:620px; margin-left:100px" >
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Best Company Area =================-->

    <!--================Our Service2 Area =================-->
    <section class="our_service_area2">
        <div class="container">
            <div class="main_c_b_title">
                <h2>About<br class="title_br">Us</h2>
                <h6>All About US</h6>
            </div>
            <div class="row service2_inner">
            
                <div class="col-md-4 col-sm-6">
                    <div class="service2_item">
                        <div class="service2_item_inner">
                            <div class="service2_item_inner_content">
                                <div class="service_icon">
                                    <img src="img/icon/vision.png" alt="">
                                    <img src="img/icon/s-icon-hover-1.png" alt="">
                                </div>
                                <a href="#">
                                    <h4>Visi</h4>
                                </a>
                                <p><?= $this->session->userdata('visi') ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service2_item">
                        <div class="service2_item_inner">
                            <div class="service2_item_inner_content">
                                <div class="service_icon">
                                    <img src="img/icon/mision.png" alt="">
                                    <img src="img/icon/s-icon-hover-5.png" alt="">
                                </div>
                                <a href="#">
                                    <h4></h4>
                                </a>
                                <p><?= $this->session->userdata('website') ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service2_item">
                        <div class="service2_item_inner">
                            <div class="service2_item_inner_content">
                                <div class="service_icon">
                                    <img src="img/icon/s-icon-4.png" alt="">
                                    <img src="img/icon/s-icon-hover-4.png" alt="">
                                </div>
                                <a href="#">
                                    <h4>Misi</h4>
                                </a>
                                <p><?= $this->session->userdata('misi') ?> <br></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Our Service2 Area =================-->

    <!--================Our Project2 Area =================-->

    <!--================End Our Project2 Area =================-->

    <!--================Quoto Slider Area =================-->

    <!--================End Quoto Slider Area =================-->

    <!--================Our Team2 Area =================-->

    <!--================End Our Team2 Area =================-->

    <!--================Latest News Area =================-->

    <!--================End Latest News Area =================-->

    <!--================Clients Area =================-->
    <!--================End Clients Area =================-->

    <!--================Subscrib Form Area =================-->

    <!--================End Subscrib Form Area =================-->

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
        <h4>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          <!-- Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> -->
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </h4>
      </div>
    </div>
  </footer>
  <!--================End Footer Area =================-->









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






