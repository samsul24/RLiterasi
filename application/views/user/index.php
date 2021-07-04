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

  <!-- maps -->

  <script src='https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.js'></script>
  <link href='https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.css' rel='stylesheet' />

  <!-- end maps -->
  <link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32" />
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Literasi </title>

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
          <a href="#"><i class="mdi mdi-clock"></i><?php echo date('Y-m-d / H:i:s'); ?></a>
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
            <img src="<?php echo base_url(); ?>img/icon/logo.png" width="200px" height="80px" style="margin:hidden"> <a class="navbar-brand" href="#"></a>
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
              <li><a href="<?php echo site_url(); ?>SiswaClient/buku">Buku</a></li>
              <!-- <li><a class="nav-link active" href="<?php echo site_url(); ?>Login/out">Logout</a></li> -->

              <?php if (empty($this->session->userdata('id_user'))) { ?>

                <li><a href="<?php echo site_url(); ?>Login">Login</a></li>
              <?php } else { ?>
                <li><a class="nav-link active" href="<?php echo site_url(); ?>SiswaClient/profile/<?= $this->session->userdata('id_user'); ?>">Profile</a></li>
                <li><a class="nav-link active" href="<?php echo site_url(); ?>Login/out">LogOut</a></li>
                <li><a class="nav-link active" href="<?php echo site_url(); ?>SiswaClient/nilai/<?= $this->session->userdata('id_user'); ?>"><?= $this->session->userdata('username') ?></a></li>

              <?php } ?>
              <!-- <li><a class="nav-link active" href="#"><img src="<?= base_url(); ?>css/assets/img/profil.jpg" style="height: 50px;" class="rounded-circle" alt=""></a></li> -->

            </ul>
          </div><!-- /.navbar-collapse -->
        </nav>
      </div>
    </div>
  </header>
  <!--================Header Area =================-->

  <!--================Main Slider Area =================-->
  <section class="main_slider_area">
    <div id="main_slider" class="rev_slider" data-version="5.3.1.6">
      <ul>
        <li data-index="rs-2972" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="img/home-slider/slider-1.jpg" data-rotate="0" data-saveperformance="off" data-title="Web Show" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
          <!-- MAIN IMAGE -->
          <img src="<?php echo base_url(); ?>img/home-slider/slider-1.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
          <!-- LAYERS -->
          <div class="slider_text_box2">
            <div class="tp-caption first_text" data-x="['left','left','left','left','left']" data-y="['middle','middle','middle','middle','middle']" data-hoffset="['0','15','15','15','15']" data-voffset="['-30','-30','-30','-30','-60']" data-fontsize="['70','70','70','60','40']" data-lineheight="['90','90','70','70','50']" data-width="['none','none','none','none']" data-height="none" data-whitespace="['nowrap','nowrap','nowrap','nowrap','nowrap']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":1700,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"x:left(R);","ease":"Power3.easeIn"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[10,10,10,10]" data-paddingleft="[0,0,0,0]">Welcome to Literasi <br><?= $this->session->userdata('nama_sekolah') ?><br></div>

            <div class="tp-caption secand_text" data-x="['left','left','left','left','left']" data-y="['middle','middle','middle','middle']" data-hoffset="['0','15','15','15','15']" data-voffset="['50','50','50','40','0']" data-fontsize="['28','28','28','20','20']" data-lineheight="['38','38','38','30','30']" data-width="['760','760','760','550','400']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1750,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"><br>Kota <?= $this->session->userdata('kabupaten') ?></div>

            <div class="tp-caption" data-x="['left','left','left','left','left']" data-y="['middle','middle','middle','middle']" data-hoffset="['0','15','15','15','15']" data-voffset="['140','140','140','130','90']" data-fontsize="['28','28','28','28']" data-lineheight="['38','38','38','38']" data-width="['730']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1750,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"><a class="slider_btn" href="<?php echo site_url(); ?>SiswaClient/literasi/"> Do-literacy </a></div>
          </div>
        </li>
        <li data-index="rs-2973" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="img/home-slider/slider-1.jpg" data-rotate="0" data-saveperformance="off" data-title="Web Show" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
          <!-- MAIN IMAGE -->
          <img src="<?php echo base_url(); ?>img/home-slider/slider-2.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
          <!-- LAYERS -->
          <div class="slider_text_box2">
            <div class="tp-caption first_text" data-x="['left','left','left','left','left']" data-y="['middle','middle','middle','middle','middle']" data-hoffset="['0','15','15','15','15']" data-voffset="['-30','-30','-30','-30','-60']" data-fontsize="['80','80','60','60','40']" data-lineheight="['90','90','70','70','50']" data-width="['none','none','none','none']" data-height="none" data-whitespace="['nowrap','nowrap','nowrap','nowrap','nowrap']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":1700,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"x:left(R);","ease":"Power3.easeIn"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[10,10,10,10]" data-paddingleft="[0,0,0,0]">Welcome to Literasi <br><?= $this->session->userdata('nama_sekolah') ?><br></div>

            <div class="tp-caption secand_text" data-x="['left','left','left','left','left']" data-y="['middle','middle','middle','middle']" data-hoffset="['0','15','15','15','15']" data-voffset="['50','50','50','40','0']" data-fontsize="['28','28','28','20','20']" data-lineheight="['38','38','38','30','30']" data-width="['760','760','760','550','400']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1750,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"><br>Kota <?= $this->session->userdata('kabupaten') ?></div>

            <div class="tp-caption" data-x="['left','left','left','left','left']" data-y="['middle','middle','middle','middle']" data-hoffset="['0','15','15','15','15']" data-voffset="['140','140','140','130','90']" data-fontsize="['28','28','28','28']" data-lineheight="['38','38','38','38']" data-width="['730']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1750,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"><a class="slider_btn" href="#">Do-literacy</a></div>
          </div>
        </li>
      </ul>
    </div>
  </section>
  <!--================End Main Slider Area =================-->
  <!--================Get Quote Area =================-->
  <!--   <section class="get_quote_area">
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

  <!--================Who We Are Area =================-->
  <!--    <section class="who_we_are_area">
            <div class="container">
                <div class="row who_we_inner">
                    <div class="col-md-5">
                        <div class="who_we_left_content">
                            <div class="main_w_title">
                                <h2>Who <br class="title_br" /> We Are?</h2>
                                <h6>All About US</h6>
                            </div>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</p>
                            <div class="border_bar"></div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="who_we_image">
                            <img src="img/who-we.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
  <!--================End Who We Are Area =================-->

  <!--================Our Service Area =================-->
  <section class="our_service_area">
    <div class="left_service">
      <div class="left_service_inner">
        <div class="service_item">
          <div class="service_item_inner">
            <div class="service_icon">
              <img src="img/icon/book.png" alt="" style="width: 50px; height:50px;">
              <img src="img/icon/s-icon-hover-4.png" alt="">
            </div>
            <a href="#">
              <h4>Membaca</h4>
            </a>
            <p>“Membacalah anda akan mengenal dunia lebih dekat. Menulislah anda akan dikenal dekat oleh dunia”
              ― Madi Ar-Ranim</p>

          </div>
        </div>
        <div class="service_item">
          <div class="service_item_inner">
            <div class="service_icon">
              <img src="img/icon/book.png" alt="" style="width: 50px; height:50px;">
              <img src="img/icon/s-icon-hover-4.png" alt="">
            </div>
            <a href="#">
              <h4>Buku</h4>
            </a>
            <p>“Siapapun yang terhibur dengan buku-buku, kebahagiaan tak akan sirna dari dirinya.”
              ― Ali bin Abi Thalib</p>

          </div>
        </div>
        <div class="service_item">
          <div class="service_item_inner">
            <div class="service_icon">
              <img src="img/icon/book.png" alt="" style="width: 50px; height:50px;">
              <img src="img/icon/s-icon-hover-4.png" alt="">
            </div>
            <a href="#">
              <h4>Omnilegent</h4>
            </a>
            <p>“Hidup tanpa buku seperti ruang gelap tak berlampu”
              ― Titon Rahmawan </p>

          </div>
        </div>
        <div class="service_item">
          <div class="service_item_inner">
            <div class="service_icon">
              <img src="img/icon/book.png" alt="" style="width: 50px; height:50px;">
              <img src="img/icon/s-icon-hover-4.png" alt="">
            </div>
            <a href="#">
              <h4>Logophile </h4>
            </a>
            <p>Buku harus dijadikan kapak untuk mencairkan lautan beku dalam diri kita - Franz Kafka</p>
          </div>
        </div>
        <div class="service_item">
          <div class="service_item_inner">
            <div class="service_icon">
              <img src="img/icon/book.png" alt="" style="width: 50px; height:50px;">
              <img src="img/icon/s-icon-hover-4.png" alt="">
            </div>
            <a href="#">
              <h4>Budaya Literasi</h4>
            </a>“Penguatan budaya literasi adalah kunci memajukan negeri ini.”
            ― Lenang Manggala</p>
          </div>
        </div>
        <div class="service_item">
          <div class="service_item_inner">
            <div class="service_icon">
              <img src="img/icon/book.png" alt="" style="width: 50px; height:50px;">
              <img src="img/icon/s-icon-hover-4.png" alt="">
            </div>
            <a href="#">
              <h4>Epeolatry </h4>
            </a>
            <p>“Percayalah, buku yang baik entah bagaimana, pasti akan menemukan pembacanya.”
              ― Titon Rahmawan <br></p>

          </div>
        </div>
      </div>
    </div>
    <div class="right_service">
      <div class="right_service_text">
        <div class="main_b_title">
          <h2>Lingkup <br class="title_br" /> Literasi</h2>
          <h6><?= $this->session->userdata('nama_sekolah') ?></h6>
        </div>
        <p>Visi :</p>
        <p><?= $this->session->userdata('visi') ?></p>
        <p>Misi :</p>
        <p><?= $this->session->userdata('misi') ?></p>
        <div class="border_bar"></div>
      </div>
    </div>
  </section>
  <!--================End Our Service Area =================-->

  <!--================Our Project Area =================-->
  <section class="our_project_area">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="project_left_side">
            <div class="main_w_title">
              <h2>Literasi <br class="title_br" /></h2>
              <h6><?= $this->session->userdata('nama_sekolah') ?></h6>
            </div>
            <ul class="our_project_filter">
              <li class="active" data-filter="*"><a href="#">All</a></li>
              <li data-filter=".building"><a href="#">Novel</a></li>
              <li data-filter=".interior"><a href="#">Komik</a></li>
              <li data-filter=".design"><a href="#">Pusat Dunia</a></li>
              <li data-filter=".isolation"><a href="#">Ilmu Komunikasi</a></li>
              <li data-filter=".plumbing"><a href="#">Sains</a></li>
              <li data-filter=".tiling"><a href="#">History </a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-9">
          <div class="our_project_details">
            <?php foreach ($buku_bebas as $rows) : ?>
              <div class="project_item building ">
                <img src="<?php echo base_url('file_buku/cover/' . $rows->cover) ?>" width="150" hight="200" alt=""></img>
                <div class="project_hover">
                  <div class="project_hover_inner">
                    <div class="project_hover_content">
                      <a href="#">
                        <h4><?php echo $rows->nama_buku; ?></h4>
                      </a>
                      <!--  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </p> -->
                      <a class="view_btn" href="<?php echo site_url(); ?>SiswaClient/buku">View Project</a>
                    </div>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Our Project Area =================-->

  <!--================Work Area =================-->
  <section class="work_area">
    <div class="container">
      <div class="work_content">
        <div class="main_c_title">
          <h2>Membaca<br class="title_br" />dengan Kami</h2>
          <h6>Mari MeningkatkaN Minat Baca Di Indonesia</h6>
        </div>
        <p>Literasi adalah kemampuan seseorang dalam mengolah
          dan memahami informasi saat melakukan proses membaca dan menulis.</p>
        <a class="get_bg_btn" href="#">Lihat Profile</a>
      </div>
    </div>
  </section>
  <!--================End Work Area =================-->

  <!--================Our Team Area =================-->

  <!--================End Our Team Area =================-->

  <!--================Counter Area =================-->
  <section class="counter_area">
    <div class="container">
      <div class="row counter_inner">
        <div class="col-md-3 col-sm-6">
          <div class="counter_item">
            <i class="fa fa-book" aria-hidden="true"></i>
            <h4 class="counter">
              <?php
              $this->db->where('buku.id_sekolah', $this->session->userdata('id_sekolah'));
              // $this->db->where('is_active', 'aktif');
              $buku = $this->db->get('buku')->num_rows();
              print($buku);
              ?>

            </h4>
            <h5>Total Buku</h5>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="counter_item">
            <i class="fa fa-building-o" aria-hidden="true"></i>
            <h4 class="counter">
              <?php
              $this->db->where('user.id_sekolah', $this->session->userdata('id_sekolah'));
              $this->db->where('id_user_role', 4);
              $user = $this->db->get('user')->num_rows();
              print($user);
              ?>

            </h4>
            <h5>Total Siswa</h5>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="counter_item">
            <i class="fa fa-users" aria-hidden="true"></i>
            <h4 class="counter">
              <?php
              $this->db->where('user.id_sekolah', $this->session->userdata('id_sekolah'));
              $this->db->where('id_user_role', 3);
              $user = $this->db->get('user')->num_rows();
              print($user);
              ?>
            </h4>
            <h5>Total Guru</h5>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="counter_item">
            <i class="fa fa-smile-o" aria-hidden="true"></i>
            <h4 class="counter">
              <?php
              $this->db->where('ulasan.id_sekolah', $this->session->userdata('id_sekolah'));
              $ulasan = $this->db->get('ulasan')->num_rows();
              print($ulasan);
              ?>
            </h4>
            <h5>Ulasan</h5>
          </div>
        </div>
      </div>
    </div>
  </section>
  <style>
    .google-maps {
      position: relative;
      padding-bottom: 37%;
      height: 0;
      overflow: hidden;
    }

    .google-maps iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100% !important;
      height: 500 !important;
    }
  </style>
  <div class="google-maps">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.583650189403!2d111.53013701422037!3d-7.727739178722517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79bce811e2a437%3A0x5c12acad7e1e9766!2sSMAN%201%20Geger!5e0!3m2!1sid!2sid!4v1624185744022!5m2!1sid!2sid" width="1460" height="500" frameborder="0" style="border:0" allowfullscreen="" loading="lazy"></iframe>
  </div>
  <!--================Map Area =================-->
  <!-- <div src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.5044441073137!2d112.61347971422283!3d-7.946708281364234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78827687d272e7%3A0x789ce9a636cd3aa2!2sPoliteknik%20Negeri%20Malang!5e0!3m2!1sid!2sid!4v1624123656523!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" data-info="Malang, uttara, Sector 10, Road 22" data-mlat="40.7112969" data-mlon="-74.1393991"></div> -->
  <footer class="footer_area">
    <div class="footer_widgets_area">
      <div class="container">
        <div class="row footer_widgets_inner">
          <div class="col-md-3 col-sm-6">
            <aside class="f_widget about_widget">
              <img src="<?php echo base_url(); ?>img/icon/logo1.png" width="250px" height="100px" style="margin-top:-30px">
              <p><?= $this->session->userdata('visi') ?></p>
              <ul>
                <li><a href="#"><i class="fas fa-facebook " aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fas fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fas fa-google-plus" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fas fa-pinterest" aria-hidden="true"></i></a></li>
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

</html>