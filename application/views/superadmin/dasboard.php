<?php if($this->session->userdata('id_user_role')!=1){redirect('login');};?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - Super Admin Dashboard</title>

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

<div id="main-content">

      <div class="page-heading">
        <h3>Dashboard Profile </h3>
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
                        <h6 class="font-extrabold mb-0">
                        <?php  
                        $this->db->where('is_active', 'aktif');
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
                          <i class="iconly-boldAdd-User"></i>
                        </div>
                      </div>
                      <div class="col-md-8">
                        <h6 class="text-muted font-semibold">Role</h6>
                        <h6 class="font-extrabold mb-0">
                        <?php  
                        $role = $this->db->get('user_role')->num_rows();
                        print($role);
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
                          <i class="iconly-boldHome"></i>
                        </div>
                      </div>
                      <div class="col-md-8">
                        <h6 class="text-muted font-semibold">Sekolah</h6>
                        <h6 class="font-extrabold mb-0">
                        <?php  
                        $sekolah = $this->db->get('sekolah')->num_rows();
                        print($sekolah);
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
                        <canvas id="bar">
                        </canvas>
                        <?php
                         $nama_user= "";
                         $jumlah=null;
                                foreach ($users as $rows) : 
                                         $user=$rows->nama; 
                                         $nama_user .= "'$user'". ", ";
                                         $user=$rows->id_sekolah; 
                                         $jumlah .= "'$user'". ", ";
                                    ?>                                        
                                    </tr>
                                <?php endforeach; ?>
                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
          
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
                                <div id="pie"></div>
                                <?php
                         $nama_user= "";
                         $jumlah=null;
                                foreach ($users as $rows) : 
                                         $user=$rows->jenis_kelamin; 
                                         $nama_user .= "'$user'". ", ";
                                         $user=$rows->id_sekolah; 
                                         $jumlah .= "'$user'". ", ";
                                    ?>                                        
                                    </tr>
                                <?php endforeach; ?>
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
<link rel="stylesheet" href="<?php echo base_url() ?>assets/super/assets/vendors/chartjs/Chart.min.css">

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<!-- <script src="https://cdn.plot.ly/plotly-2.0.0-rc.3.min.js"></script> -->
<script type="text/javascript">
var chartColors = {
    red: 'rgb(255, 99, 132)',
    orange: 'rgb(255, 159, 64)',
    yellow: 'rgb(255, 205, 86)',
    green: 'rgb(75, 192, 192)',
    info: '#41B1F9',
    blue: '#3245D1',
    purple: 'rgb(153, 102, 255)',
    grey: '#EBEFF6'
};
var ctx = document.getElementById("bar").getContext("2d");
var myBar = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [<?php echo $nama_user; ?>],
        datasets: [{
            label: 'User',
            backgroundColor: [chartColors.orange, chartColors.blue, chartColors.grey, chartColors.grey, chartColors.info, chartColors.blue, chartColors.grey],
             borderColor: ['rgb(255, 99, 132)'],
            data: [
              
              <?php
              //  $this->db->group_by('user');
              //  $this->db->select('user');
              //  $this->db->select("count(*) as date");
              //   $this->db->where('is_active', 'aktif');
              //   $this->db->where('date_created');
              //   $user = $this->db->get('user')->num_rows();
                echo $jumlah; 
                ?>
            ]
        }]
    },
    options: {
        responsive: true,
        barRoundness: 1,
        title: {
            display: true,
            text: "Students in 2020"
        },
        legend: {
            display: false
        },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true,
                    suggestedMax: 40 + 20,
                    padding: 10,
                },
                gridLines: {
                    drawBorder: false,
                }
            }],
            xAxes: [{
                gridLines: {
                    display: false,
                    drawBorder: false
                }
            }]
        }
    }
});
var ctx = document.getElementById("pie").getContext("2d");
var myBar = new Chart(ctx, {
    type: 'pie',
    data: {
        // labels: [<?php echo $nama_user; ?>],
        datasets: [{
          labels: ['Male', 'Female'],
            backgroundColor: ['#435ebe','#55c6e8'],
            data: [
              
              <?php
              //  $this->db->group_by('user');
              //  $this->db->select('user');
              //  $this->db->select("count(*) as date");
              //   $this->db->where('is_active', 'aktif');
              //   $this->db->where('date_created');
              //   $user = $this->db->get('user')->num_rows();
                echo $jumlah; 
                ?>
            ]
        }]
    },
    options: {
    series: [50,50],
    labels: ['Male', 'Female'],
    colors: ['#435ebe','#55c6e8'],
    chart: {
      type: 'donut',
      width: '100%',
      height:'350px'
    },
    legend: {
      position: 'bottom'
    },
    plotOptions: {
      pie: {
        donut: {
          size: '30%'
        }
      }
    }
    }
});
</script>
<script> src="<?php echo base_url() ?>assets/super/assets/vendors/chartjs/Chart.min.js"></script>
<!-- <script src="<?php echo base_url() ?>assets/super/assets/js/pages/ui-chartjs.js"></script> -->
