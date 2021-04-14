
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
<br><br><br><br>

    <div class="row mt-3" style="margin-left:300px;">
        <div class="col d-flex justify-content-center">
                <div class="card-body">

<body>
<div class="container">
 <div class="w3-panel w3-teal">
 <center><h3 style="color:white;">Form Ulasan </h3></center>
 </div>
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
                window.location.href="<?php echo site_url(); ?>siswaclient/berhasil/";
              }

  return sec;
}
</script>


 <td height="27"><div align="left"><strong><?php echo "Tanggal : ".date("d-M-y");?></strong></div></td>
 <form action="<?php echo site_url('siswaclient/ulasan_process');?>" class="needs-validation" method="POST" enctype="multipart/form-data">
 
   
 <div class="w3-row-padding">
        <div class="w3-half">
        <input type="text" value="<?= $this->session->userdata('username') ?>" required readonly>
                <input class="w3-input w3-border" type="text" placeholder="Judul" name="judul" style="width:200px;" id="judul">
        </div>
    </div>
    <br>
    <div class="w3-padding">
            <textarea name="ket_siswa"style="width:640px;height:200px" id="ket_siswa"  placeholder="Keterangan"></textarea>
    </div>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="margin-left:px;width:140px;height:40px">
                                Kirim
                            </button>
                            <!-- The Modal -->
                            <div class="modal fade" id="myModal">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <p>Apa anda yakin ingin menambah data ini ?</p>
                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Kirim</button>
                                            <button type="button" class="btn btn-dark" data-dismiss="modal">Batal</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
        <!-- <button class="w3-button w3-block w3-teal w3-section w3-padding" type="submit" >Kirim Komentar</button> -->
    </div>
    </form>
</div>
<div class="container">

     </div>
     </div>
 </div>
</body>

            </div>
        </div>
    </div>

 <br><br><br><br><br><br><br><br><br>
  <!-- ======= Footer ======= -->
 

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