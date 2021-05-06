<?php if($this->session->userdata('id_user_role')!=2){redirect('login');};?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - Mazer Admin Dashboard</title>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/super/assets/css/bootstrap.css">

  <link rel="stylesheet" href="<?php echo base_url() ?>assets/super/assets/vendors/iconly/bold.css">

  <link rel="stylesheet" href="<?php echo base_url() ?>assets/super/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/super/assets/vendors/bootstrap-icons/bootstrap-icons.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/super/assets/css/app.css">
  <link rel="shortcut icon" href="<?php echo base_url() ?>assets/super/assets/images/favicon.svg" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo base_url() ?>css/assets/css/style1.css">



</head>


      <div class="page-heading">
        <h3>Profile Statistics</h3>
      </div>
      <div class="page-content">
        <section class="row">
          <div class="col-12 col-lg-9">
            <div class="row">
              <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                  <div class="card-body px-3 py-4-5">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="stats-icon purple">
                          <i class="iconly-boldShow"></i>
                        </div>
                      </div>
                      <div class="col-md-8">
                        <h6 class="text-muted font-semibold">Online </h6>
                        <h6 class="font-extrabold mb-0">1</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                  <div class="card-body px-3 py-4-5">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="stats-icon blue">
                          <i class="iconly-boldProfile"></i>
                        </div>
                      </div>
                      <div class="col-md-8">
                        <h6 class="text-muted font-semibold">User</h6>
                        <h6 class="font-extrabold mb-0">
                        <?php  
                        $user = $this->db->get('user')->num_rows();
                        print($user);
                        ?> 
                        </h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                  <div class="card-body px-3 py-4-5">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="stats-icon green">
                          <i class="bi-file-earmark-medical-fill"></i>
                        </div>
                      </div>
                      <div class="col-md-8">
                        <h6 class="text-muted font-semibold">Buku</h6>
                        <h6 class="font-extrabold mb-0">
                        <?php  
                        $buku = $this->db->get('buku')->num_rows();
                        print($buku);
                        ?> 
                        </h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                  <div class="card-body px-3 py-4-5">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="stats-icon red">
                          <i class="bi-file-earmark-medical-fill"></i>
                        </div>
                      </div>
                      <div class="col-md-8">
                        <h6 class="text-muted font-semibold">Ulasan</h6>
                        <h6 class="font-extrabold mb-0">
                        <?php  
                        $role = $this->db->get('ulasan')->num_rows();
                        print($role);
                        ?> 
                     
                        </h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                    </div>
                                    <div class="card-body">
                                        <div id="chart-profile-visit"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                           
              <div class="col-12 col-xl-8">
                <div class="card">
                  <div class="card-header">
                    <h4>Nilai</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-hover table-lg">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Comment</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="col-3">
                              <div class="d-flex align-items-center">
                                <div class="avatar avatar-md">
                                  <img src="<?php echo base_url() ?>assets/super/assets/images/faces/5.jpg">
                                </div>
                                <p class="font-bold ms-3 mb-0">Si Cantik</p>
                              </div>
                            </td>
                            <td class="col-auto">
                              <p class=" mb-0">100</p>
                            </td>
                          </tr>
                          <tr>
                            <td class="col-3">
                              <div class="d-flex align-items-center">
                                <div class="avatar avatar-md">
                                  <img src="<?php echo base_url() ?>assets/super/assets/images/faces/2.jpg">
                                </div>
                                <p class="font-bold ms-3 mb-0">Si Ganteng</p>
                              </div>
                            </td>
                            <td class="col-auto">
                              <p class=" mb-0">90</p>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-3">
            <div class="card">
              <div class="card-body py-4 px-5">
                <div class="d-flex align-items-center">
                  <div class="avatar avatar-xl">
                    <img src="<?php echo base_url() ?>assets/super/assets/images/faces/1.jpg" alt="Face 1">
                  </div>
                  <div class="ms-3 name">
                    <h5 class="font-bold"><?=$this->session->userdata('nama') ?></h5>
                    <h6 class="text-muted mb-0"><?=$this->session->userdata('nis') ?></h6>
                  </div>
                </div>
              </div>
            </div>
           
            <div class="card">
                            <div class="card-header">
                                <h4>Visitors Profile</h4>
                            </div>
                            <div class="card-body">
                                <div id="chart-visitors-profile"></div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

      <footer>
        <div class="footer clearfix mb-0 text-muted">
          <div class="float-start">
            <p>2021 © Mazer</p>
          </div>
          <div class="float-end">
            <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a href="http://ahmadsaugi.com">Literasi</a></p>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <script src="<?php echo base_url() ?>assets/super/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  <script src="<?php echo base_url() ?>assets/super/assets/js/bootstrap.bundle.min.js"></script>

  <script src="<?php echo base_url() ?>assets/super/assets/vendors/apexcharts/apexcharts.js"></script>
  <script src="<?php echo base_url() ?>assets/super/assets/js/pages/dashboard.js"></script>

  <script src="<?php echo base_url() ?>assets/super/assets/js/main.js"></script>


  <svg id="SvgjsSvg1302" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
    <defs id="SvgjsDefs1303"></defs>
    <polyline id="SvgjsPolyline1304" points="0,0"></polyline>
    <path id="SvgjsPath1305" d="M-1 45L-1 45C-1 45 18.130434782608695 45 18.130434782608695 45C18.130434782608695 45 30.217391304347828 45 30.217391304347828 45C30.217391304347828 45 42.30434782608696 45 42.30434782608696 45C42.30434782608696 45 54.391304347826086 45 54.391304347826086 45C54.391304347826086 45 66.47826086956522 45 66.47826086956522 45C66.47826086956522 45 78.56521739130434 45 78.56521739130434 45C78.56521739130434 45 90.65217391304348 45 90.65217391304348 45C90.65217391304348 45 102.73913043478261 45 102.73913043478261 45C102.73913043478261 45 114.82608695652175 45 114.82608695652175 45C114.82608695652175 45 126.91304347826087 45 126.91304347826087 45C126.91304347826087 45 139 45 139 45C139 45 139 45 139 45 "></path>
  </svg>
</body>

</html>