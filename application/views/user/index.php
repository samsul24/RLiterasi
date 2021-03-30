<?php if ($this->session->userdata('id_user_role') != 4) {
  redirect('login');
}; ?>

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

    <!-- Vendor CSS Files -->
    <title>RLiterasi</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->

    <link rel="icon" href="<?php echo base_url() ?>css/assets/img/vedc.jpg">
    <link href="<?php echo base_url() ?>css/assets/img1/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
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
    </div><!-- End Intro Section -->
    <br><br>

    <div class="sec text-center aos-init aos-animate" data-aos="zoom-in-up">
      <h1>

      </h1>
      <br>
      <br>
      <br>
      <h1 class="text-center big" style="color:#85a657">Vidios</h1>
      <h2 class="subHeading">Vidios</h2>
      <div class="sec text-center" style="padding: 70px;">
        <!-- Grid row -->
        <div class="row">
          <!-- Grid column -->
          <div class="col-lg-4 col-md-12 mb-4">

            <!--Modal: Name-->
            <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">

                <!--Content-->
                <div class="modal-content">

                  <!--Body-->
                  <div class="modal-body mb-0 p-0">

                    <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tJ65wgRPS3o" allowfullscreen=""></iframe>
                    </div>

                  </div>

                  <!--Footer-->
                  <div class="modal-footer justify-content-center">
                    <span class="mr-4">Spread the word!</span>
                    <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
                    <!--Twitter-->
                    <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
                    <!--Google +-->
                    <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
                    <!--Linkedin-->
                    <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

                  </div>

                </div>
                <!--/.Content-->

              </div>
            </div>
            <!--Modal: Name-->

            <a><img class="img-fluid z-depth-1" style="height=10px" src="<?php echo base_url(); ?>css/assets/img1/1.jpg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=730&amp;w=1260" alt="video" data-toggle="modal" data-target="#modal1"></a>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-4 col-md-6 mb-4">

            <!--Modal: Name-->
            <div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">

                <!--Content-->
                <div class="modal-content">

                  <!--Body-->
                  <div class="modal-body mb-0 p-0">

                    <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/HduzzmUDZcI" allowfullscreen=""></iframe>
                    </div>

                  </div>

                  <!--Footer-->
                  <div class="modal-footer justify-content-center">
                    <span class="mr-4">Spread the word!</span>
                    <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
                    <!--Twitter-->
                    <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
                    <!--Google +-->
                    <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
                    <!--Linkedin-->
                    <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

                  </div>

                </div>
                <!--/.Content-->

              </div>
            </div>
            <!--Modal: Name-->

            <a><img class="img-fluid z-depth-1" src="<?php echo base_url(); ?>css/assets/img1/2.jpg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=780&amp;w=1260" alt="video" data-toggle="modal" data-target="#modal6"></a>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-4 col-md-6 mb-4">

            <!--Modal: Name-->
            <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">

                <!--Content-->
                <div class="modal-content">

                  <!--Body-->
                  <div class="modal-body mb-0 p-0">

                    <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/HeJDyVYfUV8" allowfullscreen=""></iframe>
                    </div>

                  </div>

                  <!--Footer-->
                  <div class="modal-footer justify-content-center">
                    <span class="mr-4">Spread the word!</span>
                    <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
                    <!--Twitter-->
                    <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
                    <!--Google +-->
                    <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
                    <!--Linkedin-->
                    <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

                  </div>

                </div>
                <!--/.Content-->

              </div>
            </div>
            <!--Modal: Name-->

            <a><img class="img-fluid z-depth-1" src="<?php echo base_url(); ?>css/assets/img1/3.jpg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" alt="video" data-toggle="modal" data-target="#modal4"></a>

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->
      </div>
    </div>


    <main id="main">

      <!-- ======= Agents Section ======= -->

      <!-- ======= Latest News Section ======= -->
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

      </section><!-- End Latest News Section -->

      </section><!-- End Testimonials Section -->

    </main><!-- End #main -->




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
                <!-- © Copyright -->
                <!-- <span class="color-a">EstateAgency</span> All Rights Reserved. -->
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
  </html>