<html lang="en">

<head>
  <style>
    .gm-control-active>img {
      box-sizing: content-box;
      display: none;
      left: 50%;
      pointer-events: none;
      position: absolute;
      top: 50%;
      transform: translate(-50%, -50%)
    }

    .gm-control-active>img:nth-child(1) {
      display: block
    }

    .gm-control-active:hover>img:nth-child(1),
    .gm-control-active:active>img:nth-child(1) {
      display: none
    }

    .gm-control-active:hover>img:nth-child(2),
    .gm-control-active:active>img:nth-child(3) {
      display: block
    }
  </style>
  <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Google+Sans:400,500,700">
  <style>
    .gm-ui-hover-effect {
      opacity: .6
    }

    .gm-ui-hover-effect:hover {
      opacity: 1
    }
  </style>
  <style>
    .gm-style .gm-style-cc a,
    .gm-style .gm-style-cc button,
    .gm-style .gm-style-cc span,
    .gm-style .gm-style-mtc div {
      font-size: 10px;
      box-sizing: border-box
    }
  </style>
  <style>
    @media print {

      .gm-style .gmnoprint,
      .gmnoprint {
        display: none
      }
    }

    @media screen {

      .gm-style .gmnoscreen,
      .gmnoscreen {
        display: none
      }
    }
  </style>
  <style>
    .gm-style-pbc {
      transition: opacity ease-in-out;
      background-color: rgba(0, 0, 0, 0.45);
      text-align: center
    }

    .gm-style-pbt {
      font-size: 22px;
      color: white;
      font-family: Roboto, Arial, sans-serif;
      position: relative;
      margin: 0;
      top: 50%;
      -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
      transform: translateY(-50%)
    }
  </style>
  <style>
    .gm-style img {
      max-width: none;
    }

    .gm-style {
      font: 400 11px Roboto, Arial, sans-serif;
      text-decoration: none;
    }
  </style>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- maps -->

  <script src="https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.js"></script>
  <link href="https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.css" rel="stylesheet">

  <!-- end maps -->
  <link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>PT KAWI SAKTI MANDIRI - Construction</title>

  <!-- Icon css link -->
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/materialdesignicons.min.css" rel="stylesheet">

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Rev slider css -->
  <link href="vendors/revolution/css/settings.css" rel="stylesheet">
  <link href="vendors/revolution/css/layers.css" rel="stylesheet">
  <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
  <link href="vendors/animate-css/animate.css" rel="stylesheet">
  <link href="vendors/owl-carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Extra plugin css -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
  <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/44/8/common.js"></script>
  <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/44/8/util.js"></script>
  <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/44/8/map.js"></script>
  <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/44/8/marker.js"></script>
  <style type="text/css"></style>
  <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/44/8/stats.js"></script>
  <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/44/8/onion.js"></script>
  <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/44/8/infowindow.js"></script>
  <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/44/8/controls.js"></script>
</head>

<body>


  <!--================Header Area =================-->
  <header class="main_header_area">
    <div class="header_top_area">
      <div class="container">
        <div class="pull-left">
          <a href="#"><i class="fa fa-phone"></i>(0341) 350003</a>
          <a href="#"><i class="fa fa-map-marker"></i> Jl. Janti Barat Blok A/17 A Malang </a>
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
            <a class="navbar-brand" href="index.php"><img src="img/logo.png"></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.php">Home</a></li>
              <li><a href="projectBar.php">Project</a></li>
              <li><a href="AboutUs.php">About Us</a></li>
              <li><a href="skafoldBar.php">Skafold</a></li>
              <li><a href="admin/login.php">Login</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </nav>
      </div>
    </div>
  </header>
  <!--================Header Area =================-->

  <!--================Main Slider Area =================-->
  <section class="main_slider_area" style="overflow: visible;">
    <div id="main_slider" class="rev_slider revslider-initialised tp-simpleresponsive" data-version="5.3.1.6" style="margin-top: 0px; margin-bottom: 0px; height: 700px;" data-slideactive="rs-2972">
      <ul class="tp-revslider-mainul" style="visibility: visible; display: block; overflow: hidden; width: 793px; height: 100%; max-height: none; left: 0px;">
        <li data-index="rs-2972" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="img/home-slider/slider-1.jpg" data-rotate="0" data-saveperformance="off" data-title="Web Show" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="" class="tp-revslider-slidesli active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 20; visibility: inherit; opacity: 1; background-color: rgba(255, 255, 255, 0);">
          <!-- MAIN IMAGE -->
          <div class="slotholder" style="position: absolute; top: 0px; left: 0px; z-index: 0; width: 100%; height: 100%; visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
            <!--Runtime Modification - Img tag is Still Available for SEO Goals in Source - <img src="img/home-slider/slider-1.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg defaultimg" data-no-retina="">-->
            <div class="tp-bgimg defaultimg " style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url(&quot;img/home-slider/slider-1.jpg&quot;); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; z-index: 20; visibility: inherit; position: inherit; transform: matrix(1, 0, 0, 1, 0, 0);" src="img/home-slider/slider-1.jpg"></div>
          </div>
          <!-- LAYERS -->
          <div class="slider_text_box2">
            <div class="tp-parallax-wrap" style="position: absolute; display: block; visibility: visible; left: 37px; top: 280px; z-index: 1;">
              <div class="tp-loop-wrap" style="position:absolute;display:block;;">
                <div class="tp-mask-wrap" style="position: absolute; display: block; overflow: visible;">
                  <div class="tp-caption first_text" data-x="['left','left','left','left','left']" data-y="['middle','middle','middle','middle','middle']" data-hoffset="['0','15','15','15','15']" data-voffset="['-30','-30','-30','-30','-60']" data-fontsize="['70','70','70','60','40']" data-lineheight="['90','90','70','70','50']" data-width="['none','none','none','none']" data-height="none" data-whitespace="['nowrap','nowrap','nowrap','nowrap','nowrap']" data-type="text" data-responsive_offset="on" data-frames="[{&quot;from&quot;:&quot;z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;&quot;,&quot;speed&quot;:1500,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:1700,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1000,&quot;to&quot;:&quot;x:left(R);&quot;,&quot;ease&quot;:&quot;Power3.easeIn&quot;}]" data-textalign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[10,10,10,10]" data-paddingleft="[0,0,0,0]" id="layer-587510050" style="visibility: inherit; transition: none 0s ease 0s; text-align: center; line-height: 70px; border-width: 0px; margin: 0px; padding: 0px 0px 10px; letter-spacing: 0px; font-weight: 700; font-size: 70px; white-space: nowrap; min-height: 0px; min-width: 0px; max-height: none; max-width: none; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform-origin: 50% 50% 0px;">Welcome to PT Kawi Sakti Megah</div>
                </div>
              </div>
            </div>

            <div class="tp-parallax-wrap" style="position: absolute; display: block; visibility: visible; left: 37px; top: 381px; z-index: 1;">
              <div class="tp-loop-wrap" style="position:absolute;display:block;;">
                <div class="tp-mask-wrap" style="position: absolute; display: block; overflow: hidden; transform: matrix(1, 0, 0, 1, 0, 0);">
                  <div class="tp-caption secand_text" data-x="['left','left','left','left','left']" data-y="['middle','middle','middle','middle']" data-hoffset="['0','15','15','15','15']" data-voffset="['50','50','50','40','0']" data-fontsize="['28','28','28','20','20']" data-lineheight="['38','38','38','30','30']" data-width="['760','760','760','550','400']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames="[{&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;speed&quot;:2000,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:1750,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]" data-textalign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" id="layer-233926588" style="visibility: inherit; transition: none 0s ease 0s; text-align: left; line-height: 38px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-weight: 400; font-size: 28px; white-space: normal; min-height: 0px; min-width: 760px; max-height: none; max-width: 760px; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform-origin: 50% 50% 0px;">Rental Scaffolding and Build Constrution</div>
                </div>
              </div>
            </div>

            <div class="tp-parallax-wrap" style="position: absolute; display: block; visibility: visible; left: 37px; top: 459px; z-index: 1;">
              <div class="tp-loop-wrap" style="position:absolute;display:block;;">
                <div class="tp-mask-wrap" style="position: absolute; display: block; overflow: hidden; transform: matrix(1, 0, 0, 1, 0, 0);">
                  <div class="tp-caption" data-x="['left','left','left','left','left']" data-y="['middle','middle','middle','middle']" data-hoffset="['0','15','15','15','15']" data-voffset="['140','140','140','130','90']" data-fontsize="['28','28','28','28']" data-lineheight="['38','38','38','38']" data-width="['730']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames="[{&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;speed&quot;:2000,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:1750,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]" data-textalign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" id="layer-813621817" style="visibility: inherit; transition: none 0s ease 0s; text-align: left; line-height: 38px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-weight: 400; font-size: 28px; white-space: normal; min-height: 0px; min-width: 730px; max-height: none; max-width: 730px; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform-origin: 50% 50% 0px;"><a class="slider_btn" href="skafoldBar.php"> Rent-Scaffolding </a></div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li data-index="rs-2973" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="img/home-slider/slider-1.jpg" data-rotate="0" data-saveperformance="off" data-title="Web Show" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="" class="tp-revslider-slidesli" style="width: 100%; height: 100%; overflow: hidden;">
          <!-- MAIN IMAGE -->
          <div class="slotholder" style="position:absolute; top:0px; left:0px; z-index:0;width:100%;height:100%;">
            <!--Runtime Modification - Img tag is Still Available for SEO Goals in Source - <img src="img/home-slider/slider-2.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg defaultimg" data-no-retina="">-->
            <div class="tp-bgimg defaultimg " style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url(&quot;img/home-slider/slider-2.jpg&quot;); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 0;" src="img/home-slider/slider-2.jpg"></div>
          </div>
          <!-- LAYERS -->
          <div class="slider_text_box2">
            <div class="tp-parallax-wrap " style="position:absolute;display:block;;visibility:hidden">
              <div class="tp-loop-wrap" style="position:absolute;display:block;;">
                <div class="tp-mask-wrap" style="position:absolute;display:block;;">
                  <div class="tp-caption first_text" data-x="['left','left','left','left','left']" data-y="['middle','middle','middle','middle','middle']" data-hoffset="['0','15','15','15','15']" data-voffset="['-30','-30','-30','-30','-60']" data-fontsize="['80','80','60','60','40']" data-lineheight="['90','90','70','70','50']" data-width="['none','none','none','none']" data-height="none" data-whitespace="['nowrap','nowrap','nowrap','nowrap','nowrap']" data-type="text" data-responsive_offset="on" data-frames="[{&quot;from&quot;:&quot;z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;&quot;,&quot;speed&quot;:1500,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:1700,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1000,&quot;to&quot;:&quot;x:left(R);&quot;,&quot;ease&quot;:&quot;Power3.easeIn&quot;}]" data-textalign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[10,10,10,10]" data-paddingleft="[0,0,0,0]" id="layer-487716626" style="visibility: hidden;">Welcome to PT Kawi Sakti Megah</div>
                </div>
              </div>
            </div>

            <div class="tp-parallax-wrap " style="position:absolute;display:block;;visibility:hidden">
              <div class="tp-loop-wrap" style="position:absolute;display:block;;">
                <div class="tp-mask-wrap" style="position:absolute;display:block;;">
                  <div class="tp-caption secand_text" data-x="['left','left','left','left','left']" data-y="['middle','middle','middle','middle']" data-hoffset="['0','15','15','15','15']" data-voffset="['50','50','50','40','0']" data-fontsize="['28','28','28','20','20']" data-lineheight="['38','38','38','30','30']" data-width="['760','760','760','550','400']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames="[{&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;speed&quot;:2000,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:1750,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]" data-textalign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" id="layer-401382540" style="visibility: hidden;">Rental Scaffolding and Build Constrution</div>
                </div>
              </div>
            </div>

            <div class="tp-parallax-wrap " style="position:absolute;display:block;;visibility:hidden">
              <div class="tp-loop-wrap" style="position:absolute;display:block;;">
                <div class="tp-mask-wrap" style="position:absolute;display:block;;">
                  <div class="tp-caption" data-x="['left','left','left','left','left']" data-y="['middle','middle','middle','middle']" data-hoffset="['0','15','15','15','15']" data-voffset="['140','140','140','130','90']" data-fontsize="['28','28','28','28']" data-lineheight="['38','38','38','38']" data-width="['730']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames="[{&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;speed&quot;:2000,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:1750,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]" data-textalign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" id="layer-464367321" style="visibility: hidden;"><a class="slider_btn" href="#">browse services</a></div>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
      <div class="tp-loader spinner0" style="display: none;">
        <div class="dot1"></div>
        <div class="dot2"></div>
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
      </div>
      <div class="tp-bannertimer" style="visibility: hidden; width: 0.0295567%; transform: translate3d(0px, 0px, 0px);"></div>
      <div class="tp-bullets normal vertical nav-pos-hor-left nav-pos-ver-center nav-dir-vertical noSwipe tp-forcenotvisible" style="height: 30px; width: 70px; top: 50%; transform: matrix(1, 0, 0, 1, 45, -15); left: 0px;">
        <div class="tp-bullet selected" style="top: 0px; left: 0px;"><span class="tp-bullet-inner"></span></div>
        <div class="tp-bullet" style="top: 27px; left: 0px;"><span class="tp-bullet-inner"></span></div>
      </div>
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
              <img src="img/icon/s-icon-6.png" alt="">
              <img src="img/icon/s-icon-hover-6.png" alt="">
            </div>
            <a href="#">
              <h4>Penyewaan Skafolding</h4>
            </a>
            <p>Melayani penyewaan Skafolding dengan ketepatan waktu pengiriman dan kemudahan peminjaman</p>

          </div>
        </div>
        <div class="service_item">
          <div class="service_item_inner">
            <div class="service_icon">
              <img src="img/icon/s-icon-2.png" alt="">
              <img src="img/icon/s-icon-hover-2.png" alt="">
            </div>
            <a href="#">
              <h4>Konsultasi PRA Konstruksi</h4>
            </a>
            <p>Jasa Konsultasi bagi anda yang membutuhkan bantuan dalam hal perencanaan , design ataupun estimasi biaya</p>

          </div>
        </div>
        <div class="service_item">
          <div class="service_item_inner">
            <div class="service_icon">
              <img src="img/icon/s-icon-3.png" alt="">
              <img src="img/icon/s-icon-hover-3.png" alt="">
            </div>
            <a href="#">
              <h4>Perawatan Gedung</h4>
            </a>
            <p>Layanan Perawatan gedung secara umum, pengecekan bangunan </p>

          </div>
        </div>
        <div class="service_item">
          <div class="service_item_inner">
            <div class="service_icon">
              <img src="img/icon/s-icon-1.png" alt="">
              <img src="img/icon/s-icon-hover-1.png" alt="">
            </div>
            <a href="#">
              <h4>Rancang Bangun</h4>
            </a>
            <p>Melayani perencanaan pembangunan hingga akhir proses pmbangunan sebagai konsultan</p>
          </div>
        </div>
        <div class="service_item">
          <div class="service_item_inner">
            <div class="service_icon">
              <img src="img/icon/s-icon-5.png" alt="">
              <img src="img/icon/s-icon-hover-5.png" alt="">
            </div>
            <a href="#">
              <h4>RENOVASI</h4>
            </a>
            <p>Jasa Renovasi bagi para client yang menginginkan perubahan untuk customer</p>
          </div>
        </div>
        <div class="service_item">
          <div class="service_item_inner">
            <div class="service_icon">
              <img src="img/icon/s-icon-4.png" alt="">
              <img src="img/icon/s-icon-hover-4.png" alt="">
            </div>
            <a href="#">
              <h4>Supplier</h4>
            </a>
            <p>Menerima juga jasa gudang penyediaan peralatan kantor serta kelengkapan AC <br></p>

          </div>
        </div>
      </div>
    </div>
    <div class="right_service">
      <div class="right_service_text">
        <div class="main_b_title">
          <h2>Lingkup <br class="title_br"> Jasa</h2>
          <h6>PT Kawi Sakti Megah</h6>
        </div>
        <p>Perusahaan Jasa dibidang konstruksi melayani Rental Scaffolding, Perancah, Steger yang mengutamakan kualitas. Dengan struktur yang kokoh dengan bahan Scaffolding Galvanish serta memperhitungkan standar keselamatan sehingga aman pada saat digunakan</p>
        <p>Kami Melayani instansi ataupun pribadi mulai dari perencanaan bangunan hingga tahap finishing . karena keinginan dari setiap client berbeda maka kami siap dengan berbagai macam solusi terbaik bagi clien kami</p>
        <p>Pada setiap tahap kami kerjakan dengan penuh tanggung jawab. seperti pemenuhan target, interaktif dengan relasi dan laporan yang akurat dan terpercaya</p>
        <p>Rancangan akan dihitung secara terperinci sehingga client dan perusahaan akan bekerja sama dengan baik dengan transparansi . disitu adalah salah satu kelebihan dari perusahaan kami</p>
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
              <h2>Rental <br class="title_br"> Scaffolding</h2>
              <h6>PT Kawi Sakti Megah</h6>
            </div>
            <ul class="our_project_filter">
              <li class="active" data-filter="*"><a href="#">All</a></li>
              <li data-filter=".building"><a href="#">Jack Base</a></li>
              <li data-filter=".interior"><a href="#">U-head jack</a></li>
              <li data-filter=".design"><a href="#">Rangka Besi</a></li>
              <li data-filter=".isolation"><a href="#">Frame</a></li>
              <li data-filter=".plumbing"><a href="#">Join Pin</a></li>
              <li data-filter=".tiling"><a href="#">Cross Brace </a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-9">
          <div class="our_project_details" style="position: relative; height: 1080px;">
            <div class="project_item building isolation tiling" style="position: absolute; left: 0px; top: 0px;">
              <img src="img/project/project-1.jpeg" alt="">
              <div class="project_hover">
                <div class="project_hover_inner">
                  <div class="project_hover_content">
                    <a href="#">
                      <h4>Jack Base</h4>
                    </a>
                    <!--  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </p> -->
                    <a class="view_btn" href="#">View Project</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="project_item building isolation plumbing" style="position: absolute; left: 360px; top: 0px;">
              <img src="img/project/project-2.jpg" alt="">
              <div class="project_hover">
                <div class="project_hover_inner">
                  <div class="project_hover_content">
                    <a href="#">
                      <h4>U-head jack</h4>
                    </a>
                    <!--  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </p> -->
                    <a class="view_btn" href="#">View Project</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="project_item building interior design" style="position: absolute; left: 0px; top: 360px;">
              <img src="img/project/project-3.jpg" alt="">
              <div class="project_hover">
                <div class="project_hover_inner">
                  <div class="project_hover_content">
                    <a href="#">
                      <h4>Rangka Besi </h4>
                    </a>
                    <!--   <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </p> -->
                    <a class="view_btn" href="#">View Project</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="project_item interior isolation plumbing" style="position: absolute; left: 360px; top: 360px;">
              <img src="img/project/project-4.jpg" alt="">
              <div class="project_hover">
                <div class="project_hover_inner">
                  <div class="project_hover_content">
                    <a href="#">
                      <h4>Frame</h4>
                    </a>
                    <!--   <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </p> -->
                    <a class="view_btn" href="#">View Project</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="project_item interior design tiling" style="position: absolute; left: 0px; top: 720px;">
              <img src="img/project/project-5.jpg" alt="">
              <div class="project_hover">
                <div class="project_hover_inner">
                  <div class="project_hover_content">
                    <a href="#">
                      <h4>Join Pin</h4>
                    </a>
                    <!--  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </p> -->
                    <a class="view_btn" href="#">View Project</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="project_item design plumbing tiling" style="position: absolute; left: 360px; top: 720px;">
              <img src="img/project/project-6.jpg" alt="">
              <div class="project_hover">
                <div class="project_hover_inner">
                  <div class="project_hover_content">
                    <a href="#">
                      <h4>Cross Brace</h4>
                    </a>
                    <!--  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </p> -->
                    <a class="view_btn" href="#">View Project</a>
                  </div>
                </div>
              </div>
            </div>
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
          <h2>Bekerja<br class="title_br">dengan Kami</h2>
          <h6>Mari Mencapai Perubahan yang cemerlang</h6>
        </div>
        <p>Perusahaan yang sudah berdiri lebih dari dua puluh tahun . kami bekerja dengan Etos Kerja dan Komitmen Tinggi dan Kami pelopor awal perentalan Scaffolding yang terpercaya Di Malang Raya</p>
        <a class="get_bg_btn" href="AboutUs.php">Lihat Profile</a>
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
            <i class="fa fa-archive" aria-hidden="true"></i>
            <h4 class="counter">245</h4>
            <h5>total projects</h5>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="counter_item">
            <i class="fa fa-building-o" aria-hidden="true"></i>
            <h4 class="counter">535</h4>
            <h5>houses build</h5>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="counter_item">
            <i class="fa fa-users" aria-hidden="true"></i>
            <h4 class="counter">288</h4>
            <h5>experiences staff</h5>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="counter_item">
            <i class="fa fa-smile-o" aria-hidden="true"></i>
            <h4 class="counter">750</h4>
            <h5>happy clients</h5>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Counter Area =================-->

  <!--================Testimonials Area =================-->
  <!--   <section class="testimonials_area">
            <div class="container">
                <div class="row testimonials_inner">
                    <div class="col-md-4">
                        <div class="main_w_title">
                            <h2>Client <br class="title_br" />Says</h2>
                            <h6>Golden Word</h6>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="testimonials_slider owl-carousel">
                            <div class="item">
                                <div class="testi_left">
                                    <i class="fa fa-quote-right" aria-hidden="true"></i>
                                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment.</p>
                                    <a href="#"><h4>Eng. Abul Kalam</h4></a>
                                </div>
                                <div class="testi_right">
                                    <img src="img/testimonials/test-1.jpg" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="testi_left">
                                    <i class="fa fa-quote-right" aria-hidden="true"></i>
                                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment.</p>
                                    <a href="#"><h4>Eng. Abul Kalam</h4></a>
                                </div>
                                <div class="testi_right">
                                    <img src="img/testimonials/test-1.jpg" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="testi_left">
                                    <i class="fa fa-quote-right" aria-hidden="true"></i>
                                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment.</p>
                                    <a href="#"><h4>Eng. Abul Kalam</h4></a>
                                </div>
                                <div class="testi_right">
                                    <img src="img/testimonials/test-1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
  <!--================End Testimonials Area =================-->

  <!--================Latest News Area =================-->
  <!--  <section class="latest_news_area">
            <div class="container">
                <div class="main_c_b_title">
                    <h2>latest <br class="title_br" />news</h2>
                    <h6>Construction World</h6>
                </div>
                <div class="row latest_news_inner">
                    <div class="col-md-4 col-sm-6">
                        <div class="latest_news_item">
                            <div class="news_image">
                                <img src="img/blog/l-news/l-news-1.jpg" alt="">
                                <div class="l_date">
                                    <h5>14</h5>
                                    <h6>Aug</h6>
                                </div>
                            </div>
                            <div class="news_content">
                                <a href="#"><h4>The Road To Success Is Always Under Construction</h4></a>
                                <h6>Posted By <a href="#">Admin</a></h6>
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                <div class="pull-left">
                                    <a href="#">2 Comments</a>
                                </div>
                                <div class="pull-right">
                                    <a href="#">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="latest_news_item">
                            <div class="news_image">
                                <img src="img/blog/l-news/l-news-2.jpg" alt="">
                                <div class="l_date">
                                    <h5>14</h5>
                                    <h6>Aug</h6>
                                </div>
                            </div>
                            <div class="news_content">
                                <a href="#"><h4>The Road To Success Is Always Under Construction</h4></a>
                                <h6>Posted By <a href="#">Admin</a></h6>
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                <div class="pull-left">
                                    <a href="#">2 Comments</a>
                                </div>
                                <div class="pull-right">
                                    <a href="#">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="latest_news_item">
                            <div class="news_image">
                                <img src="img/blog/l-news/l-news-3.jpg" alt="">
                                <div class="l_date">
                                    <h5>14</h5>
                                    <h6>Aug</h6>
                                </div>
                            </div>
                            <div class="news_content">
                                <a href="#"><h4>The Road To Success Is Always Under Construction</h4></a>
                                <h6>Posted By <a href="#">Admin</a></h6>
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                <div class="pull-left">
                                    <a href="#">2 Comments</a>
                                </div>
                                <div class="pull-right">
                                    <a href="#">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
  <!--================End Latest News Area =================-->

  <!--================Clients Area =================-->
  <!--  <section class="clients_area">
            <div class="container">
                <div class="clients_slider owl-carousel">
                    <div class="item">
                        <img src="img/clients/client-1.png" alt="">
                    </div>
                    <div class="item">
                        <img src="img/clients/client-2.png" alt="">
                    </div>
                    <div class="item">
                        <img src="img/clients/client-3.png" alt="">
                    </div>
                    <div class="item">
                        <img src="img/clients/client-4.png" alt="">
                    </div>
                    <div class="item">
                        <img src="img/clients/client-5.png" alt="">
                    </div>
                    <div class="item">
                        <img src="img/clients/client-6.png" alt="">
                    </div>
                </div>
            </div>
        </section> -->
  <!--================End Clients Area =================-->

  <!--================Map Area =================-->
  <div id="mapBox" class="mapBox row m0" data-lat="40.7112969" data-lon="-74.1393991" data-zoom="10" data-marker="img/map-marker.png" data-info="Malang, uttara, Sector 10, Road 22" data-mlat="40.7112969" data-mlon="-74.1393991" style="position: relative; overflow: hidden;">
    <div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
      <div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;">
        <div tabindex="0" aria-label="Map" aria-roledescription="map" role="group" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: pan-x pan-y;">
          <div style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);">
            <div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;">
              <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                <div style="position: absolute; z-index: 990; transform: matrix(1, 0, 0, 1, -29, -3);">
                  <div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;">
                    <div style="width: 256px; height: 256px;"></div>
                  </div>
                  <div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px;">
                    <div style="width: 256px; height: 256px;"></div>
                  </div>
                  <div style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px;">
                    <div style="width: 256px; height: 256px;"></div>
                  </div>
                  <div style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px;">
                    <div style="width: 256px; height: 256px;"></div>
                  </div>
                  <div style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px;">
                    <div style="width: 256px; height: 256px;"></div>
                  </div>
                  <div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px;">
                    <div style="width: 256px; height: 256px;"></div>
                  </div>
                  <div style="position: absolute; left: -512px; top: 0px; width: 256px; height: 256px;">
                    <div style="width: 256px; height: 256px;"></div>
                  </div>
                  <div style="position: absolute; left: -512px; top: -256px; width: 256px; height: 256px;">
                    <div style="width: 256px; height: 256px;"></div>
                  </div>
                  <div style="position: absolute; left: 512px; top: -256px; width: 256px; height: 256px;">
                    <div style="width: 256px; height: 256px;"></div>
                  </div>
                  <div style="position: absolute; left: 512px; top: 0px; width: 256px; height: 256px;">
                    <div style="width: 256px; height: 256px;"></div>
                  </div>
                  <div style="position: absolute; left: -768px; top: 0px; width: 256px; height: 256px;">
                    <div style="width: 256px; height: 256px;"></div>
                  </div>
                  <div style="position: absolute; left: -768px; top: -256px; width: 256px; height: 256px;">
                    <div style="width: 256px; height: 256px;"></div>
                  </div>
                </div>
              </div>
            </div>
            <div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div>
            <div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div>
            <div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;">
              <div style="position: absolute; left: 0px; top: 0px; z-index: -1;">
                <div style="position: absolute; z-index: 990; transform: matrix(1, 0, 0, 1, -29, -3);">
                  <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 0px;"></div>
                  <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 0px;"></div>
                  <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: -256px;"></div>
                  <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: -256px;"></div>
                  <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: -256px;"></div>
                  <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: 0px;"></div>
                  <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -512px; top: 0px;"></div>
                  <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -512px; top: -256px;"></div>
                  <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 512px; top: -256px;"></div>
                  <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 512px; top: 0px;"></div>
                  <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -768px; top: 0px;"></div>
                  <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -768px; top: -256px;"></div>
                </div>
              </div>
              <div style="width: 118px; height: 143px; overflow: hidden; position: absolute; left: -59px; top: -143px; z-index: 0;"><img alt="" src="img/map-marker.png" draggable="false" style="position: absolute; left: 0px; top: 0px; user-select: none; width: 118px; height: 143px; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
            </div>
            <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
              <div style="position: absolute; z-index: 990; transform: matrix(1, 0, 0, 1, -29, -3);">
                <div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i10!2i301!3i385!4i256!2m3!1e0!2sm!3i547274472!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjF8cy5lOmwudC5mfHAuYzojZmY0NDQ0NDQscy50OjV8cC5jOiNmZmYyZjJmMixzLnQ6MnxwLnY6b2ZmLHMudDozfHAuczotMTAwfHAubDo0NSxzLnQ6NDl8cC52OnNpbXBsaWZpZWQscy50OjUwfHMuZTpsLml8cC52Om9mZixzLnQ6NHxwLnY6b2ZmLHMudDo2fHAuYzojZmZmZGVhMDZ8cC52Om9u!4e0&amp;key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE&amp;token=129700" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                <div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i10!2i300!3i385!4i256!2m3!1e0!2sm!3i547274508!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjF8cy5lOmwudC5mfHAuYzojZmY0NDQ0NDQscy50OjV8cC5jOiNmZmYyZjJmMixzLnQ6MnxwLnY6b2ZmLHMudDozfHAuczotMTAwfHAubDo0NSxzLnQ6NDl8cC52OnNpbXBsaWZpZWQscy50OjUwfHMuZTpsLml8cC52Om9mZixzLnQ6NHxwLnY6b2ZmLHMudDo2fHAuYzojZmZmZGVhMDZ8cC52Om9u!4e0&amp;key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE&amp;token=104642" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                <div style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i10!2i300!3i384!4i256!2m3!1e0!2sm!3i547274508!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjF8cy5lOmwudC5mfHAuYzojZmY0NDQ0NDQscy50OjV8cC5jOiNmZmYyZjJmMixzLnQ6MnxwLnY6b2ZmLHMudDozfHAuczotMTAwfHAubDo0NSxzLnQ6NDl8cC52OnNpbXBsaWZpZWQscy50OjUwfHMuZTpsLml8cC52Om9mZixzLnQ6NHxwLnY6b2ZmLHMudDo2fHAuYzojZmZmZGVhMDZ8cC52Om9u!4e0&amp;key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE&amp;token=97528" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                <div style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i10!2i301!3i384!4i256!2m3!1e0!2sm!3i547274508!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjF8cy5lOmwudC5mfHAuYzojZmY0NDQ0NDQscy50OjV8cC5jOiNmZmYyZjJmMixzLnQ6MnxwLnY6b2ZmLHMudDozfHAuczotMTAwfHAubDo0NSxzLnQ6NDl8cC52OnNpbXBsaWZpZWQscy50OjUwfHMuZTpsLml8cC52Om9mZixzLnQ6NHxwLnY6b2ZmLHMudDo2fHAuYzojZmZmZGVhMDZ8cC52Om9u!4e0&amp;key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE&amp;token=118320" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                <div style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i10!2i302!3i384!4i256!2m3!1e0!2sm!3i547274508!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjF8cy5lOmwudC5mfHAuYzojZmY0NDQ0NDQscy50OjV8cC5jOiNmZmYyZjJmMixzLnQ6MnxwLnY6b2ZmLHMudDozfHAuczotMTAwfHAubDo0NSxzLnQ6NDl8cC52OnNpbXBsaWZpZWQscy50OjUwfHMuZTpsLml8cC52Om9mZixzLnQ6NHxwLnY6b2ZmLHMudDo2fHAuYzojZmZmZGVhMDZ8cC52Om9u!4e0&amp;key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE&amp;token=8041" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                <div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i10!2i302!3i385!4i256!2m3!1e0!2sm!3i547274448!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjF8cy5lOmwudC5mfHAuYzojZmY0NDQ0NDQscy50OjV8cC5jOiNmZmYyZjJmMixzLnQ6MnxwLnY6b2ZmLHMudDozfHAuczotMTAwfHAubDo0NSxzLnQ6NDl8cC52OnNpbXBsaWZpZWQscy50OjUwfHMuZTpsLml8cC52Om9mZixzLnQ6NHxwLnY6b2ZmLHMudDo2fHAuYzojZmZmZGVhMDZ8cC52Om9u!4e0&amp;key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE&amp;token=55075" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                <div style="position: absolute; left: -512px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i10!2i299!3i385!4i256!2m3!1e0!2sm!3i547274508!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjF8cy5lOmwudC5mfHAuYzojZmY0NDQ0NDQscy50OjV8cC5jOiNmZmYyZjJmMixzLnQ6MnxwLnY6b2ZmLHMudDozfHAuczotMTAwfHAubDo0NSxzLnQ6NDl8cC52OnNpbXBsaWZpZWQscy50OjUwfHMuZTpsLml8cC52Om9mZixzLnQ6NHxwLnY6b2ZmLHMudDo2fHAuYzojZmZmZGVhMDZ8cC52Om9u!4e0&amp;key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE&amp;token=123060" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                <div style="position: absolute; left: -512px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i10!2i299!3i384!4i256!2m3!1e0!2sm!3i547274508!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjF8cy5lOmwudC5mfHAuYzojZmY0NDQ0NDQscy50OjV8cC5jOiNmZmYyZjJmMixzLnQ6MnxwLnY6b2ZmLHMudDozfHAuczotMTAwfHAubDo0NSxzLnQ6NDl8cC52OnNpbXBsaWZpZWQscy50OjUwfHMuZTpsLml8cC52Om9mZixzLnQ6NHxwLnY6b2ZmLHMudDo2fHAuYzojZmZmZGVhMDZ8cC52Om9u!4e0&amp;key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE&amp;token=115946" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                <div style="position: absolute; left: 512px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i10!2i303!3i384!4i256!2m3!1e0!2sm!3i547274460!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjF8cy5lOmwudC5mfHAuYzojZmY0NDQ0NDQscy50OjV8cC5jOiNmZmYyZjJmMixzLnQ6MnxwLnY6b2ZmLHMudDozfHAuczotMTAwfHAubDo0NSxzLnQ6NDl8cC52OnNpbXBsaWZpZWQscy50OjUwfHMuZTpsLml8cC52Om9mZixzLnQ6NHxwLnY6b2ZmLHMudDo2fHAuYzojZmZmZGVhMDZ8cC52Om9u!4e0&amp;key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE&amp;token=82807" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                <div style="position: absolute; left: 512px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i10!2i303!3i385!4i256!2m3!1e0!2sm!3i547274448!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjF8cy5lOmwudC5mfHAuYzojZmY0NDQ0NDQscy50OjV8cC5jOiNmZmYyZjJmMixzLnQ6MnxwLnY6b2ZmLHMudDozfHAuczotMTAwfHAubDo0NSxzLnQ6NDl8cC52OnNpbXBsaWZpZWQscy50OjUwfHMuZTpsLml8cC52Om9mZixzLnQ6NHxwLnY6b2ZmLHMudDo2fHAuYzojZmZmZGVhMDZ8cC52Om9u!4e0&amp;key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE&amp;token=75867" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                <div style="position: absolute; left: -768px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i10!2i298!3i385!4i256!2m3!1e0!2sm!3i547274508!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjF8cy5lOmwudC5mfHAuYzojZmY0NDQ0NDQscy50OjV8cC5jOiNmZmYyZjJmMixzLnQ6MnxwLnY6b2ZmLHMudDozfHAuczotMTAwfHAubDo0NSxzLnQ6NDl8cC52OnNpbXBsaWZpZWQscy50OjUwfHMuZTpsLml8cC52Om9mZixzLnQ6NHxwLnY6b2ZmLHMudDo2fHAuYzojZmZmZGVhMDZ8cC52Om9u!4e0&amp;key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE&amp;token=102268" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                <div style="position: absolute; left: -768px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i10!2i298!3i384!4i256!2m3!1e0!2sm!3i547274508!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjF8cy5lOmwudC5mfHAuYzojZmY0NDQ0NDQscy50OjV8cC5jOiNmZmYyZjJmMixzLnQ6MnxwLnY6b2ZmLHMudDozfHAuczotMTAwfHAubDo0NSxzLnQ6NDl8cC52OnNpbXBsaWZpZWQscy50OjUwfHMuZTpsLml8cC52Om9mZixzLnQ6NHxwLnY6b2ZmLHMudDo2fHAuYzojZmZmZGVhMDZ8cC52Om9u!4e0&amp;key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE&amp;token=95154" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
              </div>
            </div>
          </div>
          <div class="gm-style-pbc" style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;">
            <p class="gm-style-pbt"></p>
          </div>
          <div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;">
            <div style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);">
              <div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div>
              <div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div>
              <div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;">
                <div title="" role="button" tabindex="0" style="width: 118px; height: 143px; overflow: hidden; position: absolute; cursor: pointer; touch-action: none; left: -59px; top: -143px; z-index: 0;"><img alt="" src="https://maps.gstatic.com/mapfiles/transparent.png" draggable="false" style="width: 118px; height: 143px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
              </div>
              <div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div>
            </div>
          </div>
        </div><iframe aria-hidden="true" frameborder="0" tabindex="-1" style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none;"></iframe>
        <div style="pointer-events: none; width: 100%; height: 100%; box-sizing: border-box; position: absolute; z-index: 1000002; opacity: 0; border: 2px solid rgb(26, 115, 232);"></div>
        <div>
          <div class="gmnoprint gm-bundled-control" draggable="false" controlwidth="40" controlheight="81" style="margin: 10px; user-select: none; position: absolute; left: 0px; top: 0px;">
            <div class="gmnoprint" controlwidth="40" controlheight="81" style="position: absolute; left: 0px; top: 0px;">
              <div draggable="false" style="user-select: none; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 40px; height: 81px;"><button draggable="false" title="Zoom in" aria-label="Zoom in" type="button" class="gm-control-active" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M18%207h-7V0H7v7H0v4h7v7h4v-7h7z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M18%207h-7V0H7v7H0v4h7v7h4v-7h7z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M18%207h-7V0H7v7H0v4h7v7h4v-7h7z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"></button>
                <div style="position: relative; overflow: hidden; width: 30px; height: 1px; margin: 0px 5px; background-color: rgb(230, 230, 230); top: 0px;"></div><button draggable="false" title="Zoom out" aria-label="Zoom out" type="button" class="gm-control-active" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%207h18v4H0V7z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%207h18v4H0V7z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%207h18v4H0V7z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"></button>
              </div>
            </div>
          </div>
        </div>
        <div></div>
        <div></div>
        <div></div>
        <div><button draggable="false" title="Toggle fullscreen view" aria-label="Toggle fullscreen view" type="button" class="gm-control-active gm-fullscreen-control" style="background: none rgb(255, 255, 255); border: 0px; margin: 10px; padding: 0px; text-transform: none; appearance: none; position: absolute; cursor: pointer; user-select: none; border-radius: 2px; height: 40px; width: 40px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; overflow: hidden; top: 0px; right: 0px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%200v6h2V2h4V0H0zm16%200h-4v2h4v4h2V0h-2zm0%2016h-4v2h6v-6h-2v4zM2%2012H0v6h6v-2H2v-4z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%200v6h2V2h4V0H0zm16%200h-4v2h4v4h2V0h-2zm0%2016h-4v2h6v-6h-2v4zM2%2012H0v6h6v-2H2v-4z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%200v6h2V2h4V0H0zm16%200h-4v2h4v4h2V0h-2zm0%2016h-4v2h6v-6h-2v4zM2%2012H0v6h6v-2H2v-4z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"></button></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div>
          <div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom" draggable="false" controlwidth="0" controlheight="0" style="margin: 10px; user-select: none; position: absolute; display: none; bottom: 14px; right: 0px;">
            <div class="gmnoprint" controlwidth="40" controlheight="40" style="display: none; position: absolute;">
              <div style="background-color: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; width: 40px; height: 40px;"><button draggable="false" title="Rotate map clockwise" aria-label="Rotate map clockwise" type="button" class="gm-control-active" style="background: none; display: none; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; left: 0px; top: 0px; overflow: hidden; width: 40px; height: 40px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E" style="width: 20px; height: 20px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E" style="width: 20px; height: 20px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E" style="width: 20px; height: 20px;"></button>
                <div style="position: relative; overflow: hidden; width: 30px; height: 1px; margin: 0px 5px; background-color: rgb(230, 230, 230); display: none;"></div><button draggable="false" title="Rotate map counterclockwise" aria-label="Rotate map counterclockwise" type="button" class="gm-control-active" style="background: none; display: none; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; left: 0px; top: 0px; overflow: hidden; width: 40px; height: 40px; transform: scaleX(-1);"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E" style="width: 20px; height: 20px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E" style="width: 20px; height: 20px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E" style="width: 20px; height: 20px;"></button>
                <div style="position: relative; overflow: hidden; width: 30px; height: 1px; margin: 0px 5px; background-color: rgb(230, 230, 230); display: none;"></div><button draggable="false" title="Tilt map" aria-label="Tilt map" type="button" class="gm-tilt gm-control-active" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; top: 0px; left: 0px; overflow: hidden; width: 40px; height: 40px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2016%22%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2016h8V9H0v7zm10%200h8V9h-8v7zM0%207h8V0H0v7zm10-7v7h8V0h-8z%22/%3E%3C/svg%3E" style="width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2016%22%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2016h8V9H0v7zm10%200h8V9h-8v7zM0%207h8V0H0v7zm10-7v7h8V0h-8z%22/%3E%3C/svg%3E" style="width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2016%22%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2016h8V9H0v7zm10%200h8V9h-8v7zM0%207h8V0H0v7zm10-7v7h8V0h-8z%22/%3E%3C/svg%3E" style="width: 18px;"></button>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a target="_blank" rel="noopener" href="https://maps.google.com/maps?ll=40.711297,-74.139399&amp;z=10&amp;t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=apiv3" title="Open this area in Google Maps (opens a new window)" style="position: static; overflow: visible; float: none; display: inline;">
              <div style="width: 66px; height: 26px; cursor: pointer;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/google_white5.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div>
            </a></div>
        </div>
        <div></div>
        <div>
          <div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 249px; bottom: 0px; width: 121px;">
            <div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px;">
              <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                <div style="width: 1px;"></div>
                <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
              </div>
              <div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><button draggable="false" title="Map Data" aria-label="Map Data" type="button" style="background: none; display: none; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; color: rgb(0, 0, 0); font-family: inherit;">Map Data</button><span>Map data ©2021 Google</span></div>
            </div>
          </div>
          <div style="position: absolute; user-select: none; height: 14px; line-height: 14px; right: 166px; bottom: 0px;" draggable="false" class="gm-style-cc">
            <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
              <div style="width: 1px;"></div>
              <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
            </div>
            <div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><span>5 km&nbsp;</span>
              <div style="position: relative; display: inline-block; height: 8px; bottom: -1px; width: 47px;">
                <div style="width: 100%; height: 4px; position: absolute; left: 0px; top: 0px;"></div>
                <div style="width: 4px; height: 8px; left: 0px; top: 0px; background-color: rgb(255, 255, 255);"></div>
                <div style="width: 4px; height: 8px; position: absolute; background-color: rgb(255, 255, 255); right: 0px; bottom: 0px;"></div>
                <div style="position: absolute; background-color: rgb(102, 102, 102); height: 2px; left: 1px; bottom: 1px; right: 1px;"></div>
                <div style="position: absolute; width: 2px; height: 6px; left: 1px; top: 1px; background-color: rgb(102, 102, 102);"></div>
                <div style="width: 2px; height: 6px; position: absolute; background-color: rgb(102, 102, 102); bottom: 1px; right: 1px;"></div>
              </div>
            </div>
          </div>
          <div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 95px; bottom: 0px;">
            <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
              <div style="width: 1px;"></div>
              <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
            </div>
            <div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a href="https://www.google.com/intl/en-US_US/help/terms_maps.html" target="_blank" rel="noopener" style="text-decoration: none; cursor: pointer; color: rgb(0, 0, 0);">Terms of Use</a></div>
          </div>
          <div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;">
            <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
              <div style="width: 1px;"></div>
              <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
            </div>
            <div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a target="_blank" rel="noopener" title="Report errors in the road map or imagery to Google" dir="ltr" href="https://www.google.com/maps/@40.7112969,-74.1393991,10z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); text-decoration: none; position: relative;">Report a map error</a></div>
          </div>
          <div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;">
            <div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(0, 0, 0); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Map data ©2021 Google</div>
          </div>
        </div>
        <div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-sizing: border-box; box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 300px; height: 180px; position: absolute; left: 247px; top: 145px;">
          <div style="padding: 0px 0px 10px; font-size: 16px; box-sizing: border-box;">Map Data</div>
          <div style="font-size: 13px;">Map data ©2021 Google</div><button draggable="false" title="Close" aria-label="Close" type="button" class="gm-ui-hover-effect" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: absolute; cursor: pointer; user-select: none; top: 0px; right: 0px; width: 37px; height: 37px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20d%3D%22M19%206.41L17.59%205%2012%2010.59%206.41%205%205%206.41%2010.59%2012%205%2017.59%206.41%2019%2012%2013.41%2017.59%2019%2019%2017.59%2013.41%2012z%22/%3E%3Cpath%20d%3D%22M0%200h24v24H0z%22%20fill%3D%22none%22/%3E%3C/svg%3E" alt="" style="pointer-events: none; display: block; width: 13px; height: 13px; margin: 12px;"></button>
        </div>
      </div>
    </div>
  </div>
  <!--================End Map Area =================-->

  <!--================New Maps  =================-->
  <!--  <div id='map' style='width: 100px; height: 300px;'>
        <script>
         mapboxgl.accessToken = 'pk.eyJ1IjoiZXJpbmFhbmciLCJhIjoiY2szenl5cnR4MjA5NDNlbzF3c2YwN29lNSJ9.8XbRp2vvNU_yUIvpsT0xyA';
            var map = new mapboxgl.Map({
            container: 'map',
                style: 'mapbox://styles/mapbox/streets-v11'
             });
            </div>
            </script> -->


  <!--================End New maps =================-->
  <!--================Address Area =================-->
  <!--   <section class="address_area">
            <div class="container">
                <div class="row address_inner">
                    <div class="col-md-4">
                        <div class="media">
                            <div class="media-left">
                                <img src="img/icon/place-icon.png" alt="">
                            </div>
                            <div class="media-body">
                                <h4>Office Address :</h4>
                                <h5>1234 Cafficic, California, USA</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="media">
                            <div class="media-left">
                                <img src="img/icon/phone-icon.png" alt="">
                            </div>
                            <div class="media-body">
                                <h5>(012) 3456789</h5>
                                <h5>(012) 3456789</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="media">
                            <div class="media-left">
                                <img src="img/icon/inbox-icon.png" alt="">
                            </div>
                            <div class="media-body">
                                <h5>info@domain.com</h5>
                                <h5>info@domain.com</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
  <!--================End Address Area =================-->

  <!--================Footer Area =================-->
  <footer class="footer_area">
    <div class="footer_widgets_area">
      <div class="container">
        <div class="row footer_widgets_inner">
          <div class="col-md-3 col-sm-6">
            <aside class="f_widget about_widget">
              <img src="img/footer-logo.png">
              <p>Kami melayani pengerjaan dengan konsultan Proyek Terbaik, serta mempunyai kulifikasi tinggi sebagai perusahaan bidang rental Sacffolding dan konstruktor </p>
              <ul>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
              </ul>
            </aside>
          </div>
          <div class="col-md-3 col-sm-6">
            <aside class="f_widget recent_widget">
              <div class="f_w_title">
                <h3>Recent Portofolio</h3>
              </div>
              <div class="recent_w_inner">
                <div class="media">
                  <div class="media-left">
                  </div>
                  <div class="media-body">
                    <a href="#">
                      <p>Pengerjaan Gedung UMM 1</p>
                    </a>
                  </div>
                </div>
                <div class="media">
                  <div class="media-left">
                  </div>
                  <div class="media-body">
                    <a href="#">
                      <p>Pengerjaan kantor BCA Sukun</p>
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
                    <p> Jl. Janti Barat Blok A/17 A Malang</p>
                  </div>
                </div>
                <div class="media">
                  <div class="media-left">
                    <i class="fa fa-phone"></i>
                  </div>
                  <div class="media-body">
                    <p>(0341) 350003 </p>
                  </div>
                </div>
                <div class="media">
                  <div class="media-left">
                    <i class="fa fa-envelope"></i>
                  </div>
                  <div class="media-body">
                    <p>info@domain.com</p>
                  </div>
                </div>
              </div>
            </aside>
          </div>
          <div class="col-md-3 col-sm-6">
            <aside class="f_widget give_us_widget">
              <h5>Give Us A Call</h5>
              <h4>(0341) 350003 </h4>
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
  <script src="js/jquery-2.2.4.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Rev slider js -->
  <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
  <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
  <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
  <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
  <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
  <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>

  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
  <script src="vendors/isotope/isotope.pkgd.min.js"></script>
  <script src="vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
  <script src="vendors/counterup/waypoints.min.js"></script>
  <script src="vendors/counterup/jquery.counterup.min.js"></script>
  <script src="vendors/flex-slider/jquery.flexslider-min.js"></script>

  <!--gmaps Js-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
  <script src="js/gmaps.min.js"></script>

  <script src="js/theme.js"></script>


</body>
<!-- 
</html>
<div class="carousel-item-a intro-item bg-image" style="background-image: url(assets/img/background2.jpg)">
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <img src="<?php echo base_url(); ?>css/assets/img/12.png" width="50px" height="50px">
    <script src="<?php echo base_url() ?>css/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>css/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url() ?>css/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="<?php echo base_url() ?>css/assets/vendor/php-email-form/validate.js"></script>
    <script src="<?php echo base_url() ?>css/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url() ?>css/assets/vendor/scrollreveal/scrollreveal.min.js"></script>

    <title>RLiterasi</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">


    <link rel="icon" href="<?php echo base_url() ?>css/assets/img/vedc.jpg">
    <link href="<?php echo base_url() ?>css/assets/img1/apple-touch-icon.png" rel="apple-touch-icon">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url() ?>css/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/assets/vendor/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/assets/vendor/animate.css/animate.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/assets/vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/assets/css/style.css">
  </head>

  <body>
    <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
      <div class="container">
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span></span>
          <span></span>
          <span></span>
        </button>
        <a class="navbar-brand text-brand" href="index.html">
          <img src="<?php echo base_url(); ?>css/assets/img/logo-sma.png" width="50px" height="50px">
          R-<span class="color-b">Literasi
            <?= $this->session->userdata('nama_sekolah') ?>
          </span></a>
        <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
          <span class="fa fa-search" aria-hidden="true"></span>
        </button>
        <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="<?php echo site_url(); ?>login/out">Logout</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url(); ?>siswaclient">Beranda</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url(); ?>siswaclient/buku">Buku</a>
            </li>

          </ul>
        </div>

      </div>
    </nav>

    <div class="intro intro-carousel">
      <div id="carousel" class="owl-carousel owl-theme">
        <div class="carousel-item-a intro-item bg-image" style="background-image:url(<?php echo base_url(); ?>css/assets/img1/4.jpg)">
          <div class="overlay overlay-a"></div>
          <div class="intro-content display-table">
            <div class="table-cell">
              <div class="container">
                <div class="row">
                  <div class="col-lg-8">
                    <div class="intro-body">
                      <p class="intro-title-top">Website Literasi
                        <br> 2021
                      </p>
                      <h1 class="intro-title mb-4">
                        <span class="color-b"> <?= $this->session->userdata('nama_sekolah') ?></span> <br>Kota <?= $this->session->userdata('kabupaten') ?>
                      </h1>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item-a intro-item bg-image" style="background-image: url(<?php echo base_url(); ?>css/assets/img1/3.jpg)">
          <div class="overlay overlay-a"></div>
          <div class="intro-content display-table">
            <div class="table-cell">
              <div class="container">
                <div class="row">
                  <div class="col-lg-8">
                    <div class="intro-body">
                      <p class="intro-title-top">Website Literasi
                        <br> 2021
                      </p>
                      <h1 class="intro-title mb-4">
                        <span class="color-b"> <?= $this->session->userdata('nama_sekolah') ?></span><br> Kota <?= $this->session->userdata('kabupaten') ?>
                      </h1>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item-a intro-item bg-image" style="background-image: url(<?php echo base_url(); ?>css/assets/img1/1.jpg)">
          <div class="overlay overlay-a"></div>
          <div class="intro-content display-table">
            <div class="table-cell">
              <div class="container">
                <div class="row">
                  <div class="col-lg-8">
                    <div class="intro-body">
                      <p class="intro-title-top">Website Literasi
                        <br> 2021
                      </p>
                      <h1 class="intro-title mb-4">
                        <span class="color-b"> <?= $this->session->userdata('nama_sekolah') ?></span><br> Kota <?= $this->session->userdata('kabupaten') ?>
                      </h1>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item-a intro-item bg-image" style="background-image: url(<?php echo base_url(); ?>css/assets/img1/2.jpg)">
          <div class="overlay overlay-a"></div>
          <div class="intro-content display-table">
            <div class="table-cell">
              <div class="container">
                <div class="row">
                  <div class="col-lg-8">
                    <div class="intro-body">
                      <p class="intro-title-top">Website Literasi
                        <br> 2021
                      </p>
                      <h1 class="intro-title mb-4">
                        <span class="color-b"> <?= $this->session->userdata('nama_sekolah') ?></span><br> Kota <?= $this->session->userdata('kabupaten') ?>
                      </h1>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item-a intro-item bg-image" style="background-image: url(<?php echo base_url(); ?>css/assets/img1/5.jpg)">
          <div class="overlay overlay-a"></div>
          <div class="intro-content display-table">
            <div class="table-cell">
              <div class="container">
                <div class="row">
                  <div class="col-lg-8">
                    <div class="intro-body">
                      <p class="intro-title-top">Website Literasi
                        <br> 2021
                      </p>
                      <h1 class="intro-title mb-4">
                        <span class="color-b"> <?= $this->session->userdata('nama_sekolah') ?></span><br> Kota <?= $this->session->userdata('kabupaten') ?>
                      </h1>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br><br>

    <div class="sec text-center aos-init aos-animate" data-aos="zoom-in-up">
      <h1>
        <?php
        $kalimat = "Sedang serius belajar PHP di duniailkom";
        $posisi = strpos($kalimat, "php", 9);
        var_dump($posisi);
        ?>

      </h1>
      <br>
      <br>
      <br>
      <h1 class="text-center big" style="color:#85a657">Vidios</h1>
      <h2 class="subHeading">Vidios</h2>
      <div class="sec text-center" style="padding: 70px;">
        <div class="row">
          <div class="col-lg-4 col-md-12 mb-4">

            <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">

                <div class="modal-content">

                  <div class="modal-body mb-0 p-0">

                    <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tJ65wgRPS3o" allowfullscreen=""></iframe>
                    </div>

                  </div>

                  <div class="modal-footer justify-content-center">
                    <span class="mr-4">Spread the word!</span>
                    <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
                    <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
                    <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
                    <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

                  </div>

                </div>

              </div>
            </div>

            <a><img class="img-fluid z-depth-1" style="height=10px" src="<?php echo base_url(); ?>css/assets/img1/1.jpg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=730&amp;w=1260" alt="video" data-toggle="modal" data-target="#modal1"></a>

          </div>

          <div class="col-lg-4 col-md-6 mb-4">

            <div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">

                <div class="modal-content">

                  <div class="modal-body mb-0 p-0">

                    <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/HduzzmUDZcI" allowfullscreen=""></iframe>
                    </div>

                  </div>

                  <div class="modal-footer justify-content-center">
                    <span class="mr-4">Spread the word!</span>
                    <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
                    <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
                    <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
                    <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

                  </div>

                </div>

              </div>
            </div>

            <a><img class="img-fluid z-depth-1" src="<?php echo base_url(); ?>css/assets/img1/2.jpg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=780&amp;w=1260" alt="video" data-toggle="modal" data-target="#modal6"></a>

          </div>

          <div class="col-lg-4 col-md-6 mb-4">

            <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">

                <div class="modal-content">

                  <div class="modal-body mb-0 p-0">

                    <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/HeJDyVYfUV8" allowfullscreen=""></iframe>
                    </div>

                  </div>

                  <div class="modal-footer justify-content-center">
                    <span class="mr-4">Spread the word!</span>
                    <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
                    <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
                    <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
                    <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

                  </div>

                </div>

              </div>
            </div>

            <a><img class="img-fluid z-depth-1" src="<?php echo base_url(); ?>css/assets/img1/3.jpg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" alt="video" data-toggle="modal" data-target="#modal4"></a>

          </div>

        </div>
      </div>
    </div>


    <main id="main">

      <section class="section-news section-t8">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="title-wrap d-flex justify-content-between">
                <div class="title-box">
                  <h2 class="title-a" style="">Galeri</h2>
                </div>
                <div class="title-link">
                  <a href="<?php echo site_url(); ?>userlogin/galeri">All News
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div id="new-carousel" class="owl-carousel owl-theme">
            <div class="carousel-item-c">
              <div class="card-box-b card-shadow news-box">
                <div class="img-box-b">
                  <img src="<?php echo base_url(); ?>css/assets/img/2.jpg" alt="" class="img-b img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-header-b">
                    <div class="card-category-b">
                      <a href="#" class="category-b">Learning</a>
                    </div>
                    <div class="card-title-b">
                      <h2 class="title-2">
                        <a href="blog-single.html">Learning is comming
                          <br> new</a>
                      </h2>
                    </div>
                    <div class="card-date">
                      <span class="date-b">18 Sep. 2021</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item-c">
              <div class="card-box-b card-shadow news-box">
                <div class="img-box-b">
                  <img src="<?php echo base_url(); ?>css/assets/img/1.jpg" alt="" class="img-b img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-header-b">
                    <div class="card-category-b">
                      <a href="#" class="category-b">Politik</a>
                    </div>
                    <div class="card-title-b">
                      <h2 class="title-2">
                        <a href="blog-single.html">Politik is comming
                          <br> new</a>
                      </h2>
                    </div>
                    <div class="card-date">
                      <span class="date-b">18 Sep. 2021</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

      </section>

      </section>

    </main>




    <section class="section-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-4">
            <div class="widget-a">
              <div class="w-header-a">
                <h3 class="w-title-a text-brand">R-<span class="color-b">Literasi</h3>
              </div>
              <div class="w-body-a">
                <p class="w-text-a color-text-a">
                  Literasi adalah kemampuan seseorang dalam mengolah
                  dan memahami informasi saat melakukan proses membaca dan menulis. </p>
              </div>
              <div class="w-footer-a">
                <ul class="list-unstyled">
                  <li class="color-a">
                  <li class="color-a">
                    <span class="color-text-a">Email .</span>sman1geger@gmail.com
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-4 section-md-t3">
            <div class="widget-a">
              <div class="w-header-a">
                <h3 class="w-title-a text-brand">Event</h3>
              </div>
              <div class="w-body-a">
                <div class="w-body-a">
                  <ul class="list-unstyled">
                    <li class="item-list-a">
                      <i class="fa fa-angle-right"></i> <a href="http://sman1geger.sch.id/2020/12/12/sma-award-2020/">SMA Award 2020</a>
                    </li>
                    <li class="item-list-a">
                      <i class="fa fa-angle-right"></i> <a href="http://sman1geger.sch.id/2020/11/25/dampak-pendidikan-di-era-pandemi-covid-19/">Dampak Pendidkan (Covid-19)</a>
                    </li>

                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-4 section-md-t3">
            <div class="widget-a">
              <div class="w-header-a">
                <h3 class="w-title-a text-brand">About</h3>
              </div>
              <div class="w-body-a">
                <ul class="list-unstyled">
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="http://sman1geger.sch.id">SMAN 1 Geger</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="http://belajar.sman1geger.sch.id/perpus/">Perpustakaan</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="http://elearning.sman1geger.sch.id/login/index.php">Elearning</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="http://belajar.sman1geger.sch.id/ekstrasmager">Blog SMAN 1 Geger</a>
                  </li>

                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <nav class="nav-footer">
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a href="#">Home</a>
                </li>
                <li class="list-inline-item">
                  <a href="#">About</a>
                </li>
                <li class="list-inline-item">
                  <a href="#">Property</a>
                </li>
                <li class="list-inline-item">
                  <a href="#">Blog</a>
                </li>
                <li class="list-inline-item">
                  <a href="#">Contact</a>
                </li>
              </ul>
            </nav>
            <div class="socials-a">
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-dribbble" aria-hidden="true"></i>
                  </a>
                </li>
              </ul>
            </div>
            <div class="copyright-footer">
              <p class="copyright color-text-a">
              </p>
            </div>
            <div class="credits">
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="<?php echo base_url() ?>css/assets/js/main.js"></script>
  </body>

  </html> -->