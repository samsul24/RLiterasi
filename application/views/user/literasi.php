
<div class="carousel-item-a intro-item bg-image" style="background-image: url(assets/img/background2.jpg)">
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
<img src="<?php echo base_url(); ?>css/assets/img/12.png"  width="50px" height="50px">
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
    <img src="<?php echo base_url(); ?>css/assets/img/logo-sma.png"  width="50px" height="50px">
          R-<span class="color-b">Literasi</span></a>
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
            <a class="nav-link" href="<?php echo site_url(); ?>bukuclient/buku">Buku</a>
          </li>
         
        </ul>
      </div>
     
    </div>
</nav>
  <br><br>


  <main id="main">

    <!-- ======= Agents Section ======= -->

    <!-- ======= Latest News Section ======= -->
    <section class="section-news section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">

              <html>

<body>
<div>Time left = <span id="timer"></span></div>
</body>
</html>
<script>
document.getElementById('timer').innerHTML =
  0 + ":" + 59;
startTimer();
function startTimer() {
  var presentTime = document.getElementById('timer').innerHTML;
  var timeArray = presentTime.split(/[:]+/);
  var m = timeArray[0];
  var s = checkSecond((timeArray[1] - 1));
  if(s==59){m=m-1}
  //if(m<0){alert('timer completed')}
  document.getElementById('timer').innerHTML =
    m + ":" + s;
  setTimeout(startTimer, 1000);
}
function checkSecond(sec) {
  if (sec < 10 && sec >= 0) {sec = "0" + sec}; // add zero in front of numbers < 10
  if (sec < 0) {
                window.location.href="<?php echo site_url(); ?>siswaclient/ulasan/";
              }

  return sec;
}
</script>



<!-- 
    <p id="demo"></p>
      <script>
      var countDownDate = new Date("march 19, 2021 08:08:00").getTime();

        var x = setInterval(function() {

            var now = new Date().getTime();
              
            var distance = countDownDate - now;
              
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);
              
            document.getElementById("demo").innerHTML = minutes + "m " + seconds + "s ";
              
              if (distance < 0) {
                clearInterval(x);
                window.location.href="<?php echo site_url(); ?>siswaclient/ulasan/";
              }
        }, 1000);
      </script> -->


      <?php $i=1; foreach ($buku as $rows) : ?>
                <h2 class="title-a" style="color:#85a657">Buku <?php echo $rows->nama_buku; ?></h2>
                <tr>
                    <iframe src="<?php echo base_url('file_buku/' . $rows->file_pdf) ?>" width="1110" height="1110" ></iframe>
                </tr>
                <?php endforeach ; ?>
            </div>
          </div>
        </div>
      </div>
      <div class='card-header' style="margin-left:-20px;">
                  <a class='btn btn-success'href="<?php echo site_url(); ?>siswaclient/ulasan/">
                      <i class="fa fa-book"></i>
                      <span >
                          Tulis Ulasan
                      </span>
                      </a>
                     
                    </a> <br><br>
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
              dan memahami informasi saat melakukan proses membaca dan menulis.  </p>
            </div>
            <div class="w-footer-a">
              <ul class="list-unstyled">
                <li class="color-a">
                <li class="color-a">
                  <span class="color-text-a">Email .</span>sman1geger@gmail.com</li>
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