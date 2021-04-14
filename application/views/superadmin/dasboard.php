<?php if($this->session->userdata('id_user_role')!=1){redirect('login');};?>

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
                        <h6 class="text-muted font-semibold">Online</h6>
                        <h6 class="font-extrabold mb-0">1/h6>
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
                    <h4>Profile Visit</h4>
                  </div>
                  <div class="card-body" style="position: relative;">
                    <div id="chart-profile-visit" style="min-height: 315px;">
                      <div id="apexchartscr781j6t" class="apexcharts-canvas apexchartscr781j6t apexcharts-theme-light" style="width: 681px; height: 300px;"><svg id="SvgjsSvg2676" width="681" height="300" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                          <g id="SvgjsG2678" class="apexcharts-inner apexcharts-graphical" transform="translate(39.25, 30)">
                            <defs id="SvgjsDefs2677">
                              <linearGradient id="SvgjsLinearGradient2682" x1="0" y1="0" x2="0" y2="1">
                                <stop id="SvgjsStop2683" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                <stop id="SvgjsStop2684" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                <stop id="SvgjsStop2685" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                              </linearGradient>
                              <clipPath id="gridRectMaskcr781j6t">
                                <rect id="SvgjsRect2687" width="635.75" height="232.348" x="-2" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                              </clipPath>
                              <clipPath id="gridRectMarkerMaskcr781j6t">
                                <rect id="SvgjsRect2688" width="635.75" height="236.348" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                              </clipPath>
                            </defs>
                            <rect id="SvgjsRect2686" width="36.85208333333333" height="232.348" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient2682)" class="apexcharts-xcrosshairs" y2="232.348" filter="none" fill-opacity="0.9"></rect>
                            <g id="SvgjsG2704" class="apexcharts-xaxis" transform="translate(0, 0)">
                              <g id="SvgjsG2705" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText2707" font-family="Helvetica, Arial, sans-serif" x="26.322916666666668" y="261.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                  <tspan id="SvgjsTspan2708">Jan</tspan>
                                  <title>Jan</title>
                                </text><text id="SvgjsText2710" font-family="Helvetica, Arial, sans-serif" x="78.96875" y="261.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                  <tspan id="SvgjsTspan2711">Feb</tspan>
                                  <title>Feb</title>
                                </text><text id="SvgjsText2713" font-family="Helvetica, Arial, sans-serif" x="131.61458333333334" y="261.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                  <tspan id="SvgjsTspan2714">Mar</tspan>
                                  <title>Mar</title>
                                </text><text id="SvgjsText2716" font-family="Helvetica, Arial, sans-serif" x="184.26041666666669" y="261.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                  <tspan id="SvgjsTspan2717">Apr</tspan>
                                  <title>Apr</title>
                                </text><text id="SvgjsText2719" font-family="Helvetica, Arial, sans-serif" x="236.90625000000003" y="261.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                  <tspan id="SvgjsTspan2720">May</tspan>
                                  <title>May</title>
                                </text><text id="SvgjsText2722" font-family="Helvetica, Arial, sans-serif" x="289.5520833333333" y="261.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                  <tspan id="SvgjsTspan2723">Jun</tspan>
                                  <title>Jun</title>
                                </text><text id="SvgjsText2725" font-family="Helvetica, Arial, sans-serif" x="342.19791666666663" y="261.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                  <tspan id="SvgjsTspan2726">Jul</tspan>
                                  <title>Jul</title>
                                </text><text id="SvgjsText2728" font-family="Helvetica, Arial, sans-serif" x="394.84374999999994" y="261.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                  <tspan id="SvgjsTspan2729">Aug</tspan>
                                  <title>Aug</title>
                                </text><text id="SvgjsText2731" font-family="Helvetica, Arial, sans-serif" x="447.48958333333326" y="261.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                  <tspan id="SvgjsTspan2732">Sep</tspan>
                                  <title>Sep</title>
                                </text><text id="SvgjsText2734" font-family="Helvetica, Arial, sans-serif" x="500.1354166666666" y="261.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                  <tspan id="SvgjsTspan2735">Oct</tspan>
                                  <title>Oct</title>
                                </text><text id="SvgjsText2737" font-family="Helvetica, Arial, sans-serif" x="552.78125" y="261.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                  <tspan id="SvgjsTspan2738">Nov</tspan>
                                  <title>Nov</title>
                                </text><text id="SvgjsText2740" font-family="Helvetica, Arial, sans-serif" x="605.4270833333334" y="261.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                  <tspan id="SvgjsTspan2741">Dec</tspan>
                                  <title>Dec</title>
                                </text></g>
                              <line id="SvgjsLine2742" x1="0" y1="233.348" x2="631.75" y2="233.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1"></line>
                            </g>
                            <g id="SvgjsG2755" class="apexcharts-grid">
                              <g id="SvgjsG2756" class="apexcharts-gridlines-horizontal">
                                <line id="SvgjsLine2771" x1="0" y1="0" x2="631.75" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                <line id="SvgjsLine2772" x1="0" y1="58.087" x2="631.75" y2="58.087" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                <line id="SvgjsLine2773" x1="0" y1="116.174" x2="631.75" y2="116.174" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                <line id="SvgjsLine2774" x1="0" y1="174.26100000000002" x2="631.75" y2="174.26100000000002" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                <line id="SvgjsLine2775" x1="0" y1="232.348" x2="631.75" y2="232.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                              </g>
                              <g id="SvgjsG2757" class="apexcharts-gridlines-vertical"></g>
                              <line id="SvgjsLine2758" x1="0" y1="233.348" x2="0" y2="239.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                              <line id="SvgjsLine2759" x1="52.645833333333336" y1="233.348" x2="52.645833333333336" y2="239.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                              <line id="SvgjsLine2760" x1="105.29166666666667" y1="233.348" x2="105.29166666666667" y2="239.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                              <line id="SvgjsLine2761" x1="157.9375" y1="233.348" x2="157.9375" y2="239.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                              <line id="SvgjsLine2762" x1="210.58333333333334" y1="233.348" x2="210.58333333333334" y2="239.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                              <line id="SvgjsLine2763" x1="263.2291666666667" y1="233.348" x2="263.2291666666667" y2="239.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                              <line id="SvgjsLine2764" x1="315.875" y1="233.348" x2="315.875" y2="239.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                              <line id="SvgjsLine2765" x1="368.5208333333333" y1="233.348" x2="368.5208333333333" y2="239.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                              <line id="SvgjsLine2766" x1="421.16666666666663" y1="233.348" x2="421.16666666666663" y2="239.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                              <line id="SvgjsLine2767" x1="473.81249999999994" y1="233.348" x2="473.81249999999994" y2="239.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                              <line id="SvgjsLine2768" x1="526.4583333333333" y1="233.348" x2="526.4583333333333" y2="239.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                              <line id="SvgjsLine2769" x1="579.1041666666666" y1="233.348" x2="579.1041666666666" y2="239.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                              <line id="SvgjsLine2770" x1="631.75" y1="233.348" x2="631.75" y2="239.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                              <line id="SvgjsLine2777" x1="0" y1="232.348" x2="631.75" y2="232.348" stroke="transparent" stroke-dasharray="0"></line>
                              <line id="SvgjsLine2776" x1="0" y1="1" x2="0" y2="232.348" stroke="transparent" stroke-dasharray="0"></line>
                            </g>
                            <g id="SvgjsG2778" class="apexcharts-yaxis-annotations"></g>
                            <g id="SvgjsG2779" class="apexcharts-xaxis-annotations"></g>
                            <g id="SvgjsG2780" class="apexcharts-point-annotations"></g>
                            <g id="SvgjsG2689" class="apexcharts-bar-series apexcharts-plot-series">
                              <g id="SvgjsG2690" class="apexcharts-series" rel="1" seriesName="sales" data:realIndex="0">
                                <path id="SvgjsPath2692" d="M 7.896875000000001 232.348L 7.896875000000001 167.00012500000003L 44.748958333333334 167.00012500000003L 44.748958333333334 167.00012500000003L 44.748958333333334 232.348L 44.748958333333334 232.348z" fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskcr781j6t)" pathTo="M 7.896875000000001 232.348L 7.896875000000001 167.00012500000003L 44.748958333333334 167.00012500000003L 44.748958333333334 167.00012500000003L 44.748958333333334 232.348L 44.748958333333334 232.348z" pathFrom="M 7.896875000000001 232.348L 7.896875000000001 232.348L 44.748958333333334 232.348L 44.748958333333334 232.348L 44.748958333333334 232.348L 7.896875000000001 232.348" cy="167.00012500000003" cx="60.54270833333334" j="0" val="9" barHeight="65.347875" barWidth="36.85208333333333"></path>
                                <path id="SvgjsPath2693" d="M 60.54270833333334 232.348L 60.54270833333334 87.13049999999998L 97.39479166666666 87.13049999999998L 97.39479166666666 87.13049999999998L 97.39479166666666 232.348L 97.39479166666666 232.348z" fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskcr781j6t)" pathTo="M 60.54270833333334 232.348L 60.54270833333334 87.13049999999998L 97.39479166666666 87.13049999999998L 97.39479166666666 87.13049999999998L 97.39479166666666 232.348L 97.39479166666666 232.348z" pathFrom="M 60.54270833333334 232.348L 60.54270833333334 232.348L 97.39479166666666 232.348L 97.39479166666666 232.348L 97.39479166666666 232.348L 60.54270833333334 232.348" cy="87.13049999999998" cx="113.18854166666668" j="1" val="20" barHeight="145.21750000000003" barWidth="36.85208333333333"></path>
                                <path id="SvgjsPath2694" d="M 113.18854166666668 232.348L 113.18854166666668 14.521749999999997L 150.040625 14.521749999999997L 150.040625 14.521749999999997L 150.040625 232.348L 150.040625 232.348z" fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskcr781j6t)" pathTo="M 113.18854166666668 232.348L 113.18854166666668 14.521749999999997L 150.040625 14.521749999999997L 150.040625 14.521749999999997L 150.040625 232.348L 150.040625 232.348z" pathFrom="M 113.18854166666668 232.348L 113.18854166666668 232.348L 150.040625 232.348L 150.040625 232.348L 150.040625 232.348L 113.18854166666668 232.348" cy="14.521749999999997" cx="165.83437500000002" j="2" val="30" barHeight="217.82625000000002" barWidth="36.85208333333333"></path>
                                <path id="SvgjsPath2695" d="M 165.83437500000002 232.348L 165.83437500000002 87.13049999999998L 202.68645833333335 87.13049999999998L 202.68645833333335 87.13049999999998L 202.68645833333335 232.348L 202.68645833333335 232.348z" fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskcr781j6t)" pathTo="M 165.83437500000002 232.348L 165.83437500000002 87.13049999999998L 202.68645833333335 87.13049999999998L 202.68645833333335 87.13049999999998L 202.68645833333335 232.348L 202.68645833333335 232.348z" pathFrom="M 165.83437500000002 232.348L 165.83437500000002 232.348L 202.68645833333335 232.348L 202.68645833333335 232.348L 202.68645833333335 232.348L 165.83437500000002 232.348" cy="87.13049999999998" cx="218.48020833333337" j="3" val="20" barHeight="145.21750000000003" barWidth="36.85208333333333"></path>
                                <path id="SvgjsPath2696" d="M 218.48020833333337 232.348L 218.48020833333337 159.73925L 255.3322916666667 159.73925L 255.3322916666667 159.73925L 255.3322916666667 232.348L 255.3322916666667 232.348z" fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskcr781j6t)" pathTo="M 218.48020833333337 232.348L 218.48020833333337 159.73925L 255.3322916666667 159.73925L 255.3322916666667 159.73925L 255.3322916666667 232.348L 255.3322916666667 232.348z" pathFrom="M 218.48020833333337 232.348L 218.48020833333337 232.348L 255.3322916666667 232.348L 255.3322916666667 232.348L 255.3322916666667 232.348L 218.48020833333337 232.348" cy="159.73925" cx="271.1260416666667" j="4" val="10" barHeight="72.60875000000001" barWidth="36.85208333333333"></path>
                                <path id="SvgjsPath2697" d="M 271.1260416666667 232.348L 271.1260416666667 87.13049999999998L 307.97812500000003 87.13049999999998L 307.97812500000003 87.13049999999998L 307.97812500000003 232.348L 307.97812500000003 232.348z" fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskcr781j6t)" pathTo="M 271.1260416666667 232.348L 271.1260416666667 87.13049999999998L 307.97812500000003 87.13049999999998L 307.97812500000003 87.13049999999998L 307.97812500000003 232.348L 307.97812500000003 232.348z" pathFrom="M 271.1260416666667 232.348L 271.1260416666667 232.348L 307.97812500000003 232.348L 307.97812500000003 232.348L 307.97812500000003 232.348L 271.1260416666667 232.348" cy="87.13049999999998" cx="323.771875" j="5" val="20" barHeight="145.21750000000003" barWidth="36.85208333333333"></path>
                                <path id="SvgjsPath2698" d="M 323.771875 232.348L 323.771875 14.521749999999997L 360.62395833333335 14.521749999999997L 360.62395833333335 14.521749999999997L 360.62395833333335 232.348L 360.62395833333335 232.348z" fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskcr781j6t)" pathTo="M 323.771875 232.348L 323.771875 14.521749999999997L 360.62395833333335 14.521749999999997L 360.62395833333335 14.521749999999997L 360.62395833333335 232.348L 360.62395833333335 232.348z" pathFrom="M 323.771875 232.348L 323.771875 232.348L 360.62395833333335 232.348L 360.62395833333335 232.348L 360.62395833333335 232.348L 323.771875 232.348" cy="14.521749999999997" cx="376.41770833333334" j="6" val="30" barHeight="217.82625000000002" barWidth="36.85208333333333"></path>
                                <path id="SvgjsPath2699" d="M 376.41770833333334 232.348L 376.41770833333334 87.13049999999998L 413.26979166666666 87.13049999999998L 413.26979166666666 87.13049999999998L 413.26979166666666 232.348L 413.26979166666666 232.348z" fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskcr781j6t)" pathTo="M 376.41770833333334 232.348L 376.41770833333334 87.13049999999998L 413.26979166666666 87.13049999999998L 413.26979166666666 87.13049999999998L 413.26979166666666 232.348L 413.26979166666666 232.348z" pathFrom="M 376.41770833333334 232.348L 376.41770833333334 232.348L 413.26979166666666 232.348L 413.26979166666666 232.348L 413.26979166666666 232.348L 376.41770833333334 232.348" cy="87.13049999999998" cx="429.06354166666665" j="7" val="20" barHeight="145.21750000000003" barWidth="36.85208333333333"></path>
                                <path id="SvgjsPath2700" d="M 429.06354166666665 232.348L 429.06354166666665 159.73925L 465.915625 159.73925L 465.915625 159.73925L 465.915625 232.348L 465.915625 232.348z" fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskcr781j6t)" pathTo="M 429.06354166666665 232.348L 429.06354166666665 159.73925L 465.915625 159.73925L 465.915625 159.73925L 465.915625 232.348L 465.915625 232.348z" pathFrom="M 429.06354166666665 232.348L 429.06354166666665 232.348L 465.915625 232.348L 465.915625 232.348L 465.915625 232.348L 429.06354166666665 232.348" cy="159.73925" cx="481.70937499999997" j="8" val="10" barHeight="72.60875000000001" barWidth="36.85208333333333"></path>
                                <path id="SvgjsPath2701" d="M 481.70937499999997 232.348L 481.70937499999997 87.13049999999998L 518.5614583333333 87.13049999999998L 518.5614583333333 87.13049999999998L 518.5614583333333 232.348L 518.5614583333333 232.348z" fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskcr781j6t)" pathTo="M 481.70937499999997 232.348L 481.70937499999997 87.13049999999998L 518.5614583333333 87.13049999999998L 518.5614583333333 87.13049999999998L 518.5614583333333 232.348L 518.5614583333333 232.348z" pathFrom="M 481.70937499999997 232.348L 481.70937499999997 232.348L 518.5614583333333 232.348L 518.5614583333333 232.348L 518.5614583333333 232.348L 481.70937499999997 232.348" cy="87.13049999999998" cx="534.3552083333333" j="9" val="20" barHeight="145.21750000000003" barWidth="36.85208333333333"></path>
                                <path id="SvgjsPath2702" d="M 534.3552083333333 232.348L 534.3552083333333 14.521749999999997L 571.2072916666666 14.521749999999997L 571.2072916666666 14.521749999999997L 571.2072916666666 232.348L 571.2072916666666 232.348z" fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskcr781j6t)" pathTo="M 534.3552083333333 232.348L 534.3552083333333 14.521749999999997L 571.2072916666666 14.521749999999997L 571.2072916666666 14.521749999999997L 571.2072916666666 232.348L 571.2072916666666 232.348z" pathFrom="M 534.3552083333333 232.348L 534.3552083333333 232.348L 571.2072916666666 232.348L 571.2072916666666 232.348L 571.2072916666666 232.348L 534.3552083333333 232.348" cy="14.521749999999997" cx="587.0010416666667" j="10" val="30" barHeight="217.82625000000002" barWidth="36.85208333333333"></path>
                                <path id="SvgjsPath2703" d="M 587.0010416666667 232.348L 587.0010416666667 87.13049999999998L 623.853125 87.13049999999998L 623.853125 87.13049999999998L 623.853125 232.348L 623.853125 232.348z" fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskcr781j6t)" pathTo="M 587.0010416666667 232.348L 587.0010416666667 87.13049999999998L 623.853125 87.13049999999998L 623.853125 87.13049999999998L 623.853125 232.348L 623.853125 232.348z" pathFrom="M 587.0010416666667 232.348L 587.0010416666667 232.348L 623.853125 232.348L 623.853125 232.348L 623.853125 232.348L 587.0010416666667 232.348" cy="87.13049999999998" cx="639.646875" j="11" val="20" barHeight="145.21750000000003" barWidth="36.85208333333333"></path>
                              </g>
                              <g id="SvgjsG2691" class="apexcharts-datalabels" data:realIndex="0"></g>
                            </g>
                            <line id="SvgjsLine2781" x1="0" y1="0" x2="631.75" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                            <line id="SvgjsLine2782" x1="0" y1="0" x2="631.75" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                          </g>
                          <g id="SvgjsG2743" class="apexcharts-yaxis" rel="0" transform="translate(9.25, 0)">
                            <g id="SvgjsG2744" class="apexcharts-yaxis-texts-g"><text id="SvgjsText2745" font-family="Helvetica, Arial, sans-serif" x="20" y="31.4" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                <tspan id="SvgjsTspan2746">32</tspan>
                              </text><text id="SvgjsText2747" font-family="Helvetica, Arial, sans-serif" x="20" y="89.48700000000001" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                <tspan id="SvgjsTspan2748">24</tspan>
                              </text><text id="SvgjsText2749" font-family="Helvetica, Arial, sans-serif" x="20" y="147.574" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                <tspan id="SvgjsTspan2750">16</tspan>
                              </text><text id="SvgjsText2751" font-family="Helvetica, Arial, sans-serif" x="20" y="205.66100000000003" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                <tspan id="SvgjsTspan2752">8</tspan>
                              </text><text id="SvgjsText2753" font-family="Helvetica, Arial, sans-serif" x="20" y="263.748" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                <tspan id="SvgjsTspan2754">0</tspan>
                              </text></g>
                          </g>
                          <g id="SvgjsG2679" class="apexcharts-annotations"></g>
                        </svg>
                        <div class="apexcharts-legend" style="max-height: 150px;"></div>
                        <div class="apexcharts-tooltip apexcharts-theme-light">
                          <div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                          <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker"></span>
                            <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                              <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                              <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                            </div>
                          </div>
                        </div>
                        <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                          <div class="apexcharts-yaxistooltip-text"></div>
                        </div>
                        <div class="apexcharts-toolbar" style="top: 0px; right: 3px;">
                          <div class="apexcharts-menu-icon" title="Menu"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                              <path fill="none" d="M0 0h24v24H0V0z"></path>
                              <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
                            </svg></div>
                          <div class="apexcharts-menu">
                            <div class="apexcharts-menu-item exportSVG" title="Download SVG">Download SVG</div>
                            <div class="apexcharts-menu-item exportPNG" title="Download PNG">Download PNG</div>
                            <div class="apexcharts-menu-item exportCSV" title="Download CSV">Download CSV</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="resize-triggers">
                      <div class="expand-trigger">
                        <div style="width: 730px; height: 340px;"></div>
                      </div>
                      <div class="contract-trigger"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-xl-4">
                <div class="card">
                  <div class="card-header">
                    <h4>Profile Visit</h4>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-6">
                        <div class="d-flex align-items-center">
                          <svg class="bi text-primary" width="32" height="32" fill="blue" style="width:10px">
                            <use xlink:href="<?php echo base_url() ?>assets/super/assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill"></use>
                          </svg>
                          <h5 class="mb-0 ms-3">Europe</h5>
                        </div>
                      </div>
                      <div class="col-6">
                        <h5 class="mb-0">862</h5>
                      </div>
                      <div class="col-12" style="position: relative;">
                        <div id="chart-europe" style="min-height: 95px;">
                          <div id="apexchartsx1t7strz" class="apexcharts-canvas apexchartsx1t7strz apexcharts-theme-light" style="width: 681px; height: 80px;"><svg id="SvgjsSvg2784" width="681" height="80" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                              <g id="SvgjsG2786" class="apexcharts-inner apexcharts-graphical" transform="translate(22, 30)">
                                <defs id="SvgjsDefs2785">
                                  <clipPath id="gridRectMaskx1t7strz">
                                    <rect id="SvgjsRect2794" width="655" height="37" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                  </clipPath>
                                  <clipPath id="gridRectMarkerMaskx1t7strz">
                                    <rect id="SvgjsRect2795" width="653" height="39" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                  </clipPath>
                                  <linearGradient id="SvgjsLinearGradient2800" x1="0" y1="0" x2="0" y2="1">
                                    <stop id="SvgjsStop2801" stop-opacity="0.65" stop-color="rgba(83,80,233,0.65)" offset="0"></stop>
                                    <stop id="SvgjsStop2802" stop-opacity="0.5" stop-color="rgba(169,168,244,0.5)" offset="1"></stop>
                                    <stop id="SvgjsStop2803" stop-opacity="0.5" stop-color="rgba(169,168,244,0.5)" offset="1"></stop>
                                  </linearGradient>
                                </defs>
                                <line id="SvgjsLine2791" x1="0" y1="0" x2="0" y2="35" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="35" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                <g id="SvgjsG2806" class="apexcharts-xaxis" transform="translate(0, 0)">
                                  <g id="SvgjsG2807" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g>
                                </g>
                                <g id="SvgjsG2822" class="apexcharts-grid">
                                  <g id="SvgjsG2823" class="apexcharts-gridlines-horizontal" style="display: none;">
                                    <line id="SvgjsLine2825" x1="0" y1="0" x2="649" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine2826" x1="0" y1="5" x2="649" y2="5" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine2827" x1="0" y1="10" x2="649" y2="10" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine2828" x1="0" y1="15" x2="649" y2="15" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine2829" x1="0" y1="20" x2="649" y2="20" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine2830" x1="0" y1="25" x2="649" y2="25" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine2831" x1="0" y1="30" x2="649" y2="30" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine2832" x1="0" y1="35" x2="649" y2="35" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                  </g>
                                  <g id="SvgjsG2824" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                  <line id="SvgjsLine2834" x1="0" y1="35" x2="649" y2="35" stroke="transparent" stroke-dasharray="0"></line>
                                  <line id="SvgjsLine2833" x1="0" y1="1" x2="0" y2="35" stroke="transparent" stroke-dasharray="0"></line>
                                </g>
                                <g id="SvgjsG2796" class="apexcharts-area-series apexcharts-plot-series">
                                  <g id="SvgjsG2797" class="apexcharts-series" seriesName="series1" data:longestSeries="true" rel="1" data:realIndex="0">
                                    <path id="SvgjsPath2804" d="M 0 35L 0 29.5C 29.628260869565214 29.5 55.02391304347826 5 84.65217391304347 5C 104.40434782608695 5 121.33478260869565 15 141.08695652173913 15C 160.8391304347826 15 177.7695652173913 23.5 197.52173913043478 23.5C 217.27391304347825 23.5 234.20434782608694 18 253.9565217391304 18C 273.7086956521739 18 290.6391304347826 28 310.39130434782606 28C 330.14347826086953 28 347.0739130434782 14.75 366.8260869565217 14.75C 386.57826086956516 14.75 403.5086956521739 4.75 423.2608695652174 4.75C 443.01304347826084 4.75 459.94347826086954 23.5 479.695652173913 23.5C 499.44782608695647 23.5 516.3782608695651 18 536.1304347826086 18C 555.8826086956522 18 572.8130434782607 28 592.5652173913043 28C 612.3173913043478 28 629.2478260869565 14.75 649 14.75C 649 14.75 649 14.75 649 35M 649 14.75z" fill="url(#SvgjsLinearGradient2800)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskx1t7strz)" pathTo="M 0 35L 0 29.5C 29.628260869565214 29.5 55.02391304347826 5 84.65217391304347 5C 104.40434782608695 5 121.33478260869565 15 141.08695652173913 15C 160.8391304347826 15 177.7695652173913 23.5 197.52173913043478 23.5C 217.27391304347825 23.5 234.20434782608694 18 253.9565217391304 18C 273.7086956521739 18 290.6391304347826 28 310.39130434782606 28C 330.14347826086953 28 347.0739130434782 14.75 366.8260869565217 14.75C 386.57826086956516 14.75 403.5086956521739 4.75 423.2608695652174 4.75C 443.01304347826084 4.75 459.94347826086954 23.5 479.695652173913 23.5C 499.44782608695647 23.5 516.3782608695651 18 536.1304347826086 18C 555.8826086956522 18 572.8130434782607 28 592.5652173913043 28C 612.3173913043478 28 629.2478260869565 14.75 649 14.75C 649 14.75 649 14.75 649 35M 649 14.75z" pathFrom="M -1 45L -1 45L 84.65217391304347 45L 141.08695652173913 45L 197.52173913043478 45L 253.9565217391304 45L 310.39130434782606 45L 366.8260869565217 45L 423.2608695652174 45L 479.695652173913 45L 536.1304347826086 45L 592.5652173913043 45L 649 45"></path>
                                    <path id="SvgjsPath2805" d="M 0 29.5C 29.628260869565214 29.5 55.02391304347826 5 84.65217391304347 5C 104.40434782608695 5 121.33478260869565 15 141.08695652173913 15C 160.8391304347826 15 177.7695652173913 23.5 197.52173913043478 23.5C 217.27391304347825 23.5 234.20434782608694 18 253.9565217391304 18C 273.7086956521739 18 290.6391304347826 28 310.39130434782606 28C 330.14347826086953 28 347.0739130434782 14.75 366.8260869565217 14.75C 386.57826086956516 14.75 403.5086956521739 4.75 423.2608695652174 4.75C 443.01304347826084 4.75 459.94347826086954 23.5 479.695652173913 23.5C 499.44782608695647 23.5 516.3782608695651 18 536.1304347826086 18C 555.8826086956522 18 572.8130434782607 28 592.5652173913043 28C 612.3173913043478 28 629.2478260869565 14.75 649 14.75" fill="none" fill-opacity="1" stroke="#5350e9" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskx1t7strz)" pathTo="M 0 29.5C 29.628260869565214 29.5 55.02391304347826 5 84.65217391304347 5C 104.40434782608695 5 121.33478260869565 15 141.08695652173913 15C 160.8391304347826 15 177.7695652173913 23.5 197.52173913043478 23.5C 217.27391304347825 23.5 234.20434782608694 18 253.9565217391304 18C 273.7086956521739 18 290.6391304347826 28 310.39130434782606 28C 330.14347826086953 28 347.0739130434782 14.75 366.8260869565217 14.75C 386.57826086956516 14.75 403.5086956521739 4.75 423.2608695652174 4.75C 443.01304347826084 4.75 459.94347826086954 23.5 479.695652173913 23.5C 499.44782608695647 23.5 516.3782608695651 18 536.1304347826086 18C 555.8826086956522 18 572.8130434782607 28 592.5652173913043 28C 612.3173913043478 28 629.2478260869565 14.75 649 14.75" pathFrom="M -1 45L -1 45L 84.65217391304347 45L 141.08695652173913 45L 197.52173913043478 45L 253.9565217391304 45L 310.39130434782606 45L 366.8260869565217 45L 423.2608695652174 45L 479.695652173913 45L 536.1304347826086 45L 592.5652173913043 45L 649 45"></path>
                                    <g id="SvgjsG2798" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                      <g class="apexcharts-series-markers">
                                        <circle id="SvgjsCircle2840" r="0" cx="0" cy="0" class="apexcharts-marker wuwdvmfkv no-pointer-events" stroke="#ffffff" fill="#5350e9" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                      </g>
                                    </g>
                                  </g>
                                  <g id="SvgjsG2799" class="apexcharts-datalabels" data:realIndex="0"></g>
                                </g>
                                <line id="SvgjsLine2835" x1="0" y1="0" x2="649" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                <line id="SvgjsLine2836" x1="0" y1="0" x2="649" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                <g id="SvgjsG2837" class="apexcharts-yaxis-annotations"></g>
                                <g id="SvgjsG2838" class="apexcharts-xaxis-annotations"></g>
                                <g id="SvgjsG2839" class="apexcharts-point-annotations"></g>
                                <rect id="SvgjsRect2841" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect>
                                <rect id="SvgjsRect2842" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect>
                              </g>
                              <rect id="SvgjsRect2790" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                              <g id="SvgjsG2820" class="apexcharts-yaxis" rel="0" transform="translate(-8, 0)">
                                <g id="SvgjsG2821" class="apexcharts-yaxis-texts-g"></g>
                              </g>
                              <g id="SvgjsG2787" class="apexcharts-annotations"></g>
                            </svg>
                            <div class="apexcharts-legend" style="max-height: 40px;"></div>
                            <div class="apexcharts-tooltip apexcharts-theme-light">
                              <div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                              <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(83, 80, 233);"></span>
                                <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                  <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                  <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                </div>
                              </div>
                            </div>
                            <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                              <div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                            </div>
                            <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                              <div class="apexcharts-yaxistooltip-text"></div>
                            </div>
                          </div>
                        </div>
                        <div class="resize-triggers">
                          <div class="expand-trigger">
                            <div style="width: 706px; height: 96px;"></div>
                          </div>
                          <div class="contract-trigger"></div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6">
                        <div class="d-flex align-items-center">
                          <svg class="bi text-success" width="32" height="32" fill="blue" style="width:10px">
                            <use xlink:href="<?php echo base_url() ?>assets/super/assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill"></use>
                          </svg>
                          <h5 class="mb-0 ms-3">America</h5>
                        </div>
                      </div>
                      <div class="col-6">
                        <h5 class="mb-0">375</h5>
                      </div>
                      <div class="col-12" style="position: relative;">
                        <div id="chart-america" style="min-height: 95px;">
                          <div id="apexchartsoqj468o4" class="apexcharts-canvas apexchartsoqj468o4 apexcharts-theme-light" style="width: 681px; height: 80px;"><svg id="SvgjsSvg2844" width="681" height="80" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                              <g id="SvgjsG2846" class="apexcharts-inner apexcharts-graphical" transform="translate(22, 30)">
                                <defs id="SvgjsDefs2845">
                                  <clipPath id="gridRectMaskoqj468o4">
                                    <rect id="SvgjsRect2854" width="655" height="37" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                  </clipPath>
                                  <clipPath id="gridRectMarkerMaskoqj468o4">
                                    <rect id="SvgjsRect2855" width="653" height="39" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                  </clipPath>
                                  <linearGradient id="SvgjsLinearGradient2860" x1="0" y1="0" x2="0" y2="1">
                                    <stop id="SvgjsStop2861" stop-opacity="0.65" stop-color="rgba(0,139,117,0.65)" offset="0"></stop>
                                    <stop id="SvgjsStop2862" stop-opacity="0.5" stop-color="rgba(128,197,186,0.5)" offset="1"></stop>
                                    <stop id="SvgjsStop2863" stop-opacity="0.5" stop-color="rgba(128,197,186,0.5)" offset="1"></stop>
                                  </linearGradient>
                                </defs>
                                <line id="SvgjsLine2851" x1="0" y1="0" x2="0" y2="35" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="35" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                <g id="SvgjsG2866" class="apexcharts-xaxis" transform="translate(0, 0)">
                                  <g id="SvgjsG2867" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g>
                                </g>
                                <g id="SvgjsG2882" class="apexcharts-grid">
                                  <g id="SvgjsG2883" class="apexcharts-gridlines-horizontal" style="display: none;">
                                    <line id="SvgjsLine2885" x1="0" y1="0" x2="649" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine2886" x1="0" y1="5" x2="649" y2="5" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine2887" x1="0" y1="10" x2="649" y2="10" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine2888" x1="0" y1="15" x2="649" y2="15" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine2889" x1="0" y1="20" x2="649" y2="20" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine2890" x1="0" y1="25" x2="649" y2="25" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine2891" x1="0" y1="30" x2="649" y2="30" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine2892" x1="0" y1="35" x2="649" y2="35" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                  </g>
                                  <g id="SvgjsG2884" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                  <line id="SvgjsLine2894" x1="0" y1="35" x2="649" y2="35" stroke="transparent" stroke-dasharray="0"></line>
                                  <line id="SvgjsLine2893" x1="0" y1="1" x2="0" y2="35" stroke="transparent" stroke-dasharray="0"></line>
                                </g>
                                <g id="SvgjsG2856" class="apexcharts-area-series apexcharts-plot-series">
                                  <g id="SvgjsG2857" class="apexcharts-series" seriesName="series1" data:longestSeries="true" rel="1" data:realIndex="0">
                                    <path id="SvgjsPath2864" d="M 0 35L 0 29.5C 29.628260869565214 29.5 55.02391304347826 5 84.65217391304347 5C 104.40434782608695 5 121.33478260869565 15 141.08695652173913 15C 160.8391304347826 15 177.7695652173913 23.5 197.52173913043478 23.5C 217.27391304347825 23.5 234.20434782608694 18 253.9565217391304 18C 273.7086956521739 18 290.6391304347826 28 310.39130434782606 28C 330.14347826086953 28 347.0739130434782 14.75 366.8260869565217 14.75C 386.57826086956516 14.75 403.5086956521739 4.75 423.2608695652174 4.75C 443.01304347826084 4.75 459.94347826086954 23.5 479.695652173913 23.5C 499.44782608695647 23.5 516.3782608695651 18 536.1304347826086 18C 555.8826086956522 18 572.8130434782607 28 592.5652173913043 28C 612.3173913043478 28 629.2478260869565 14.75 649 14.75C 649 14.75 649 14.75 649 35M 649 14.75z" fill="url(#SvgjsLinearGradient2860)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskoqj468o4)" pathTo="M 0 35L 0 29.5C 29.628260869565214 29.5 55.02391304347826 5 84.65217391304347 5C 104.40434782608695 5 121.33478260869565 15 141.08695652173913 15C 160.8391304347826 15 177.7695652173913 23.5 197.52173913043478 23.5C 217.27391304347825 23.5 234.20434782608694 18 253.9565217391304 18C 273.7086956521739 18 290.6391304347826 28 310.39130434782606 28C 330.14347826086953 28 347.0739130434782 14.75 366.8260869565217 14.75C 386.57826086956516 14.75 403.5086956521739 4.75 423.2608695652174 4.75C 443.01304347826084 4.75 459.94347826086954 23.5 479.695652173913 23.5C 499.44782608695647 23.5 516.3782608695651 18 536.1304347826086 18C 555.8826086956522 18 572.8130434782607 28 592.5652173913043 28C 612.3173913043478 28 629.2478260869565 14.75 649 14.75C 649 14.75 649 14.75 649 35M 649 14.75z" pathFrom="M -1 45L -1 45L 84.65217391304347 45L 141.08695652173913 45L 197.52173913043478 45L 253.9565217391304 45L 310.39130434782606 45L 366.8260869565217 45L 423.2608695652174 45L 479.695652173913 45L 536.1304347826086 45L 592.5652173913043 45L 649 45"></path>
                                    <path id="SvgjsPath2865" d="M 0 29.5C 29.628260869565214 29.5 55.02391304347826 5 84.65217391304347 5C 104.40434782608695 5 121.33478260869565 15 141.08695652173913 15C 160.8391304347826 15 177.7695652173913 23.5 197.52173913043478 23.5C 217.27391304347825 23.5 234.20434782608694 18 253.9565217391304 18C 273.7086956521739 18 290.6391304347826 28 310.39130434782606 28C 330.14347826086953 28 347.0739130434782 14.75 366.8260869565217 14.75C 386.57826086956516 14.75 403.5086956521739 4.75 423.2608695652174 4.75C 443.01304347826084 4.75 459.94347826086954 23.5 479.695652173913 23.5C 499.44782608695647 23.5 516.3782608695651 18 536.1304347826086 18C 555.8826086956522 18 572.8130434782607 28 592.5652173913043 28C 612.3173913043478 28 629.2478260869565 14.75 649 14.75" fill="none" fill-opacity="1" stroke="#008b75" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskoqj468o4)" pathTo="M 0 29.5C 29.628260869565214 29.5 55.02391304347826 5 84.65217391304347 5C 104.40434782608695 5 121.33478260869565 15 141.08695652173913 15C 160.8391304347826 15 177.7695652173913 23.5 197.52173913043478 23.5C 217.27391304347825 23.5 234.20434782608694 18 253.9565217391304 18C 273.7086956521739 18 290.6391304347826 28 310.39130434782606 28C 330.14347826086953 28 347.0739130434782 14.75 366.8260869565217 14.75C 386.57826086956516 14.75 403.5086956521739 4.75 423.2608695652174 4.75C 443.01304347826084 4.75 459.94347826086954 23.5 479.695652173913 23.5C 499.44782608695647 23.5 516.3782608695651 18 536.1304347826086 18C 555.8826086956522 18 572.8130434782607 28 592.5652173913043 28C 612.3173913043478 28 629.2478260869565 14.75 649 14.75" pathFrom="M -1 45L -1 45L 84.65217391304347 45L 141.08695652173913 45L 197.52173913043478 45L 253.9565217391304 45L 310.39130434782606 45L 366.8260869565217 45L 423.2608695652174 45L 479.695652173913 45L 536.1304347826086 45L 592.5652173913043 45L 649 45"></path>
                                    <g id="SvgjsG2858" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                      <g class="apexcharts-series-markers">
                                        <circle id="SvgjsCircle2900" r="0" cx="0" cy="0" class="apexcharts-marker wug8y6xcw no-pointer-events" stroke="#ffffff" fill="#008b75" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                      </g>
                                    </g>
                                  </g>
                                  <g id="SvgjsG2859" class="apexcharts-datalabels" data:realIndex="0"></g>
                                </g>
                                <line id="SvgjsLine2895" x1="0" y1="0" x2="649" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                <line id="SvgjsLine2896" x1="0" y1="0" x2="649" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                <g id="SvgjsG2897" class="apexcharts-yaxis-annotations"></g>
                                <g id="SvgjsG2898" class="apexcharts-xaxis-annotations"></g>
                                <g id="SvgjsG2899" class="apexcharts-point-annotations"></g>
                                <rect id="SvgjsRect2901" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect>
                                <rect id="SvgjsRect2902" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect>
                              </g>
                              <rect id="SvgjsRect2850" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                              <g id="SvgjsG2880" class="apexcharts-yaxis" rel="0" transform="translate(-8, 0)">
                                <g id="SvgjsG2881" class="apexcharts-yaxis-texts-g"></g>
                              </g>
                              <g id="SvgjsG2847" class="apexcharts-annotations"></g>
                            </svg>
                            <div class="apexcharts-legend" style="max-height: 40px;"></div>
                            <div class="apexcharts-tooltip apexcharts-theme-light">
                              <div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                              <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 139, 117);"></span>
                                <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                  <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                  <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                </div>
                              </div>
                            </div>
                            <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                              <div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                            </div>
                            <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                              <div class="apexcharts-yaxistooltip-text"></div>
                            </div>
                          </div>
                        </div>
                        <div class="resize-triggers">
                          <div class="expand-trigger">
                            <div style="width: 706px; height: 96px;"></div>
                          </div>
                          <div class="contract-trigger"></div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6">
                        <div class="d-flex align-items-center">
                          <svg class="bi text-danger" width="32" height="32" fill="blue" style="width:10px">
                            <use xlink:href="<?php echo base_url() ?>assets/super/assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill"></use>
                          </svg>
                          <h5 class="mb-0 ms-3">Indonesia</h5>
                        </div>
                      </div>
                      <div class="col-6">
                        <h5 class="mb-0">1025</h5>
                      </div>
                      <div class="col-12" style="position: relative;">
                        <div id="chart-indonesia" style="min-height: 95px;">
                          <div id="apexchartsl0w110o1" class="apexcharts-canvas apexchartsl0w110o1 apexcharts-theme-light" style="width: 681px; height: 80px;"><svg id="SvgjsSvg2904" width="681" height="80" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                              <g id="SvgjsG2906" class="apexcharts-inner apexcharts-graphical" transform="translate(22, 30)">
                                <defs id="SvgjsDefs2905">
                                  <clipPath id="gridRectMaskl0w110o1">
                                    <rect id="SvgjsRect2914" width="655" height="37" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                  </clipPath>
                                  <clipPath id="gridRectMarkerMaskl0w110o1">
                                    <rect id="SvgjsRect2915" width="653" height="39" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                  </clipPath>
                                  <linearGradient id="SvgjsLinearGradient2920" x1="0" y1="0" x2="0" y2="1">
                                    <stop id="SvgjsStop2921" stop-opacity="0.65" stop-color="rgba(220,53,69,0.65)" offset="0"></stop>
                                    <stop id="SvgjsStop2922" stop-opacity="0.5" stop-color="rgba(238,154,162,0.5)" offset="1"></stop>
                                    <stop id="SvgjsStop2923" stop-opacity="0.5" stop-color="rgba(238,154,162,0.5)" offset="1"></stop>
                                  </linearGradient>
                                </defs>
                                <line id="SvgjsLine2911" x1="0" y1="0" x2="0" y2="35" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="35" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                <g id="SvgjsG2926" class="apexcharts-xaxis" transform="translate(0, 0)">
                                  <g id="SvgjsG2927" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g>
                                </g>
                                <g id="SvgjsG2942" class="apexcharts-grid">
                                  <g id="SvgjsG2943" class="apexcharts-gridlines-horizontal" style="display: none;">
                                    <line id="SvgjsLine2945" x1="0" y1="0" x2="649" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine2946" x1="0" y1="5" x2="649" y2="5" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine2947" x1="0" y1="10" x2="649" y2="10" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine2948" x1="0" y1="15" x2="649" y2="15" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine2949" x1="0" y1="20" x2="649" y2="20" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine2950" x1="0" y1="25" x2="649" y2="25" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine2951" x1="0" y1="30" x2="649" y2="30" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine2952" x1="0" y1="35" x2="649" y2="35" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                  </g>
                                  <g id="SvgjsG2944" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                  <line id="SvgjsLine2954" x1="0" y1="35" x2="649" y2="35" stroke="transparent" stroke-dasharray="0"></line>
                                  <line id="SvgjsLine2953" x1="0" y1="1" x2="0" y2="35" stroke="transparent" stroke-dasharray="0"></line>
                                </g>
                                <g id="SvgjsG2916" class="apexcharts-area-series apexcharts-plot-series">
                                  <g id="SvgjsG2917" class="apexcharts-series" seriesName="series1" data:longestSeries="true" rel="1" data:realIndex="0">
                                    <path id="SvgjsPath2924" d="M 0 35L 0 29.5C 29.628260869565214 29.5 55.02391304347826 5 84.65217391304347 5C 104.40434782608695 5 121.33478260869565 15 141.08695652173913 15C 160.8391304347826 15 177.7695652173913 23.5 197.52173913043478 23.5C 217.27391304347825 23.5 234.20434782608694 18 253.9565217391304 18C 273.7086956521739 18 290.6391304347826 28 310.39130434782606 28C 330.14347826086953 28 347.0739130434782 14.75 366.8260869565217 14.75C 386.57826086956516 14.75 403.5086956521739 4.75 423.2608695652174 4.75C 443.01304347826084 4.75 459.94347826086954 23.5 479.695652173913 23.5C 499.44782608695647 23.5 516.3782608695651 18 536.1304347826086 18C 555.8826086956522 18 572.8130434782607 28 592.5652173913043 28C 612.3173913043478 28 629.2478260869565 14.75 649 14.75C 649 14.75 649 14.75 649 35M 649 14.75z" fill="url(#SvgjsLinearGradient2920)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskl0w110o1)" pathTo="M 0 35L 0 29.5C 29.628260869565214 29.5 55.02391304347826 5 84.65217391304347 5C 104.40434782608695 5 121.33478260869565 15 141.08695652173913 15C 160.8391304347826 15 177.7695652173913 23.5 197.52173913043478 23.5C 217.27391304347825 23.5 234.20434782608694 18 253.9565217391304 18C 273.7086956521739 18 290.6391304347826 28 310.39130434782606 28C 330.14347826086953 28 347.0739130434782 14.75 366.8260869565217 14.75C 386.57826086956516 14.75 403.5086956521739 4.75 423.2608695652174 4.75C 443.01304347826084 4.75 459.94347826086954 23.5 479.695652173913 23.5C 499.44782608695647 23.5 516.3782608695651 18 536.1304347826086 18C 555.8826086956522 18 572.8130434782607 28 592.5652173913043 28C 612.3173913043478 28 629.2478260869565 14.75 649 14.75C 649 14.75 649 14.75 649 35M 649 14.75z" pathFrom="M -1 45L -1 45L 84.65217391304347 45L 141.08695652173913 45L 197.52173913043478 45L 253.9565217391304 45L 310.39130434782606 45L 366.8260869565217 45L 423.2608695652174 45L 479.695652173913 45L 536.1304347826086 45L 592.5652173913043 45L 649 45"></path>
                                    <path id="SvgjsPath2925" d="M 0 29.5C 29.628260869565214 29.5 55.02391304347826 5 84.65217391304347 5C 104.40434782608695 5 121.33478260869565 15 141.08695652173913 15C 160.8391304347826 15 177.7695652173913 23.5 197.52173913043478 23.5C 217.27391304347825 23.5 234.20434782608694 18 253.9565217391304 18C 273.7086956521739 18 290.6391304347826 28 310.39130434782606 28C 330.14347826086953 28 347.0739130434782 14.75 366.8260869565217 14.75C 386.57826086956516 14.75 403.5086956521739 4.75 423.2608695652174 4.75C 443.01304347826084 4.75 459.94347826086954 23.5 479.695652173913 23.5C 499.44782608695647 23.5 516.3782608695651 18 536.1304347826086 18C 555.8826086956522 18 572.8130434782607 28 592.5652173913043 28C 612.3173913043478 28 629.2478260869565 14.75 649 14.75" fill="none" fill-opacity="1" stroke="#dc3545" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskl0w110o1)" pathTo="M 0 29.5C 29.628260869565214 29.5 55.02391304347826 5 84.65217391304347 5C 104.40434782608695 5 121.33478260869565 15 141.08695652173913 15C 160.8391304347826 15 177.7695652173913 23.5 197.52173913043478 23.5C 217.27391304347825 23.5 234.20434782608694 18 253.9565217391304 18C 273.7086956521739 18 290.6391304347826 28 310.39130434782606 28C 330.14347826086953 28 347.0739130434782 14.75 366.8260869565217 14.75C 386.57826086956516 14.75 403.5086956521739 4.75 423.2608695652174 4.75C 443.01304347826084 4.75 459.94347826086954 23.5 479.695652173913 23.5C 499.44782608695647 23.5 516.3782608695651 18 536.1304347826086 18C 555.8826086956522 18 572.8130434782607 28 592.5652173913043 28C 612.3173913043478 28 629.2478260869565 14.75 649 14.75" pathFrom="M -1 45L -1 45L 84.65217391304347 45L 141.08695652173913 45L 197.52173913043478 45L 253.9565217391304 45L 310.39130434782606 45L 366.8260869565217 45L 423.2608695652174 45L 479.695652173913 45L 536.1304347826086 45L 592.5652173913043 45L 649 45"></path>
                                    <g id="SvgjsG2918" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                      <g class="apexcharts-series-markers">
                                        <circle id="SvgjsCircle2960" r="0" cx="0" cy="0" class="apexcharts-marker w8x5v5oql no-pointer-events" stroke="#ffffff" fill="#dc3545" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                      </g>
                                    </g>
                                  </g>
                                  <g id="SvgjsG2919" class="apexcharts-datalabels" data:realIndex="0"></g>
                                </g>
                                <line id="SvgjsLine2955" x1="0" y1="0" x2="649" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                <line id="SvgjsLine2956" x1="0" y1="0" x2="649" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                <g id="SvgjsG2957" class="apexcharts-yaxis-annotations"></g>
                                <g id="SvgjsG2958" class="apexcharts-xaxis-annotations"></g>
                                <g id="SvgjsG2959" class="apexcharts-point-annotations"></g>
                                <rect id="SvgjsRect2961" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect>
                                <rect id="SvgjsRect2962" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect>
                              </g>
                              <rect id="SvgjsRect2910" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                              <g id="SvgjsG2940" class="apexcharts-yaxis" rel="0" transform="translate(-8, 0)">
                                <g id="SvgjsG2941" class="apexcharts-yaxis-texts-g"></g>
                              </g>
                              <g id="SvgjsG2907" class="apexcharts-annotations"></g>
                            </svg>
                            <div class="apexcharts-legend" style="max-height: 40px;"></div>
                            <div class="apexcharts-tooltip apexcharts-theme-light">
                              <div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                              <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(220, 53, 69);"></span>
                                <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                  <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                  <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                </div>
                              </div>
                            </div>
                            <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                              <div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                            </div>
                            <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                              <div class="apexcharts-yaxistooltip-text"></div>
                            </div>
                          </div>
                        </div>
                        <div class="resize-triggers">
                          <div class="expand-trigger">
                            <div style="width: 706px; height: 96px;"></div>
                          </div>
                          <div class="contract-trigger"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-xl-8">
                <div class="card">
                  <div class="card-header">
                    <h4>Latest Comments</h4>
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
                              <p class=" mb-0">Congratulations on your graduation!</p>
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
                              <p class=" mb-0">Wow amazing design! Can you make another
                                tutorial for
                                this design?</p>
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
                    <h5 class="font-bold">John Duck</h5>
                    <h6 class="text-muted mb-0">@johnducky</h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <h4>Recent Messages</h4>
              </div>
              <div class="card-content pb-4">
                <div class="recent-message d-flex px-4 py-3">
                  <div class="avatar avatar-lg">
                    <img src="<?php echo base_url() ?>assets/super/assets/images/faces/4.jpg">
                  </div>
                  <div class="name ms-4">
                    <h5 class="mb-1">Hank Schrader</h5>
                    <h6 class="text-muted mb-0">@johnducky</h6>
                  </div>
                </div>
                <div class="recent-message d-flex px-4 py-3">
                  <div class="avatar avatar-lg">
                    <img src="<?php echo base_url() ?>assets/super/assets/images/faces/5.jpg">
                  </div>
                  <div class="name ms-4">
                    <h5 class="mb-1">Dean Winchester</h5>
                    <h6 class="text-muted mb-0">@imdean</h6>
                  </div>
                </div>
                <div class="recent-message d-flex px-4 py-3">
                  <div class="avatar avatar-lg">
                    <img src="<?php echo base_url() ?>assets/super/assets/images/faces/1.jpg">
                  </div>
                  <div class="name ms-4">
                    <h5 class="mb-1">John Dodol</h5>
                    <h6 class="text-muted mb-0">@dodoljohn</h6>
                  </div>
                </div>
                <div class="px-4">
                  <button class="btn btn-block btn-xl btn-light-primary font-bold mt-3">Start
                    Conversation</button>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <h4>Visitors Profile</h4>
              </div>
              <div class="card-body" style="position: relative;">
                <div id="chart-visitors-profile" style="min-height: 317.7px;">
                  <div id="apexcharts6w4pxhxal" class="apexcharts-canvas apexcharts6w4pxhxal apexcharts-theme-light" style="width: 681px; height: 317.7px;"><svg id="SvgjsSvg3001" width="681" height="317.7" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                      <foreignObject x="0" y="0" width="681" height="317.7">
                        <div class="apexcharts-legend apexcharts-align-center position-bottom" xmlns="http://www.w3.org/1999/xhtml" style="inset: auto 0px 1px; position: absolute; max-height: 175px;">
                          <div class="apexcharts-legend-series" rel="1" seriesname="Male" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="1" data:collapsed="false" style="background: rgb(67, 94, 190) !important; color: rgb(67, 94, 190); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="1" i="0" data:default-text="Male" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Male</span></div>
                          <div class="apexcharts-legend-series" rel="2" seriesname="Female" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="2" data:collapsed="false" style="background: rgb(85, 198, 232) !important; color: rgb(85, 198, 232); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="2" i="1" data:default-text="Female" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Female</span></div>
                        </div>
                        <style type="text/css">
                          .apexcharts-legend {
                            display: flex;
                            overflow: auto;
                            padding: 0 10px;
                          }

                          .apexcharts-legend.position-bottom,
                          .apexcharts-legend.position-top {
                            flex-wrap: wrap
                          }

                          .apexcharts-legend.position-right,
                          .apexcharts-legend.position-left {
                            flex-direction: column;
                            bottom: 0;
                          }

                          .apexcharts-legend.position-bottom.apexcharts-align-left,
                          .apexcharts-legend.position-top.apexcharts-align-left,
                          .apexcharts-legend.position-right,
                          .apexcharts-legend.position-left {
                            justify-content: flex-start;
                          }

                          .apexcharts-legend.position-bottom.apexcharts-align-center,
                          .apexcharts-legend.position-top.apexcharts-align-center {
                            justify-content: center;
                          }

                          .apexcharts-legend.position-bottom.apexcharts-align-right,
                          .apexcharts-legend.position-top.apexcharts-align-right {
                            justify-content: flex-end;
                          }

                          .apexcharts-legend-series {
                            cursor: pointer;
                            line-height: normal;
                          }

                          .apexcharts-legend.position-bottom .apexcharts-legend-series,
                          .apexcharts-legend.position-top .apexcharts-legend-series {
                            display: flex;
                            align-items: center;
                          }

                          .apexcharts-legend-text {
                            position: relative;
                            font-size: 14px;
                          }

                          .apexcharts-legend-text *,
                          .apexcharts-legend-marker * {
                            pointer-events: none;
                          }

                          .apexcharts-legend-marker {
                            position: relative;
                            display: inline-block;
                            cursor: pointer;
                            margin-right: 3px;
                            border-style: solid;
                          }

                          .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                          .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                            display: inline-block;
                          }

                          .apexcharts-legend-series.apexcharts-no-click {
                            cursor: auto;
                          }

                          .apexcharts-legend .apexcharts-hidden-zero-series,
                          .apexcharts-legend .apexcharts-hidden-null-series {
                            display: none !important;
                          }

                          .apexcharts-inactive-legend {
                            opacity: 0.45;
                          }
                        </style>
                      </foreignObject>
                      <g id="SvgjsG3003" class="apexcharts-inner apexcharts-graphical" transform="translate(12, 0)">
                        <defs id="SvgjsDefs3002">
                          <clipPath id="gridRectMask6w4pxhxal">
                            <rect id="SvgjsRect3005" width="665" height="289" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                          </clipPath>
                          <clipPath id="gridRectMarkerMask6w4pxhxal">
                            <rect id="SvgjsRect3006" width="663" height="291" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                          </clipPath>
                          <filter id="SvgjsFilter3015" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                            <feFlood id="SvgjsFeFlood3016" flood-color="#000000" flood-opacity="0.45" result="SvgjsFeFlood3016Out" in="SourceGraphic"></feFlood>
                            <feComposite id="SvgjsFeComposite3017" in="SvgjsFeFlood3016Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite3017Out"></feComposite>
                            <feOffset id="SvgjsFeOffset3018" dx="1" dy="1" result="SvgjsFeOffset3018Out" in="SvgjsFeComposite3017Out"></feOffset>
                            <feGaussianBlur id="SvgjsFeGaussianBlur3019" stdDeviation="1 " result="SvgjsFeGaussianBlur3019Out" in="SvgjsFeOffset3018Out"></feGaussianBlur>
                            <feMerge id="SvgjsFeMerge3020" result="SvgjsFeMerge3020Out" in="SourceGraphic">
                              <feMergeNode id="SvgjsFeMergeNode3021" in="SvgjsFeGaussianBlur3019Out"></feMergeNode>
                              <feMergeNode id="SvgjsFeMergeNode3022" in="[object Arguments]"></feMergeNode>
                            </feMerge>
                            <feBlend id="SvgjsFeBlend3023" in="SourceGraphic" in2="SvgjsFeMerge3020Out" mode="normal" result="SvgjsFeBlend3023Out"></feBlend>
                          </filter>
                          <filter id="SvgjsFilter3028" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                            <feFlood id="SvgjsFeFlood3029" flood-color="#000000" flood-opacity="0.45" result="SvgjsFeFlood3029Out" in="SourceGraphic"></feFlood>
                            <feComposite id="SvgjsFeComposite3030" in="SvgjsFeFlood3029Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite3030Out"></feComposite>
                            <feOffset id="SvgjsFeOffset3031" dx="1" dy="1" result="SvgjsFeOffset3031Out" in="SvgjsFeComposite3030Out"></feOffset>
                            <feGaussianBlur id="SvgjsFeGaussianBlur3032" stdDeviation="1 " result="SvgjsFeGaussianBlur3032Out" in="SvgjsFeOffset3031Out"></feGaussianBlur>
                            <feMerge id="SvgjsFeMerge3033" result="SvgjsFeMerge3033Out" in="SourceGraphic">
                              <feMergeNode id="SvgjsFeMergeNode3034" in="SvgjsFeGaussianBlur3032Out"></feMergeNode>
                              <feMergeNode id="SvgjsFeMergeNode3035" in="[object Arguments]"></feMergeNode>
                            </feMerge>
                            <feBlend id="SvgjsFeBlend3036" in="SourceGraphic" in2="SvgjsFeMerge3033Out" mode="normal" result="SvgjsFeBlend3036Out"></feBlend>
                          </filter>
                        </defs>
                        <g id="SvgjsG3007" class="apexcharts-pie">
                          <g id="SvgjsG3008" transform="translate(0, 0) scale(1)">
                            <circle id="SvgjsCircle3009" r="40.2" cx="329.5" cy="143.5" fill="transparent"></circle>
                            <g id="SvgjsG3010" class="apexcharts-slices">
                              <g id="SvgjsG3011" class="apexcharts-series apexcharts-pie-series" seriesName="Male" rel="1" data:realIndex="0">
                                <path id="SvgjsPath3012" d="M 329.5 9.5 A 134 134 0 1 1 202.0584268164494 184.90827724624296 L 291.2675280449348 155.92248317387288 A 40.2 40.2 0 1 0 329.5 103.3 L 329.5 9.5 z" fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="252" data:startAngle="0" data:strokeWidth="2" data:value="70" data:pathOrig="M 329.5 9.5 A 134 134 0 1 1 202.0584268164494 184.90827724624296 L 291.2675280449348 155.92248317387288 A 40.2 40.2 0 1 0 329.5 103.3 L 329.5 9.5 z" stroke="#ffffff"></path>
                              </g>
                              <g id="SvgjsG3024" class="apexcharts-series apexcharts-pie-series" seriesName="Female" rel="2" data:realIndex="1">
                                <path id="SvgjsPath3025" d="M 202.0584268164494 184.90827724624296 A 134 134 0 0 1 329.476612588142 9.500002040936693 L 329.4929837764426 103.30000061228101 A 40.2 40.2 0 0 0 291.2675280449348 155.92248317387288 L 202.0584268164494 184.90827724624296 z" fill="rgba(85,198,232,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="108" data:startAngle="252" data:strokeWidth="2" data:value="30" data:pathOrig="M 202.0584268164494 184.90827724624296 A 134 134 0 0 1 329.476612588142 9.500002040936693 L 329.4929837764426 103.30000061228101 A 40.2 40.2 0 0 0 291.2675280449348 155.92248317387288 L 202.0584268164494 184.90827724624296 z" stroke="#ffffff"></path>
                              </g>
                              <g id="SvgjsG3013" class="apexcharts-datalabels"><text id="SvgjsText3014" font-family="Helvetica, Arial, sans-serif" x="399.9653802100579" y="194.6960954746744" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-text apexcharts-pie-label" filter="url(#SvgjsFilter3015)" style="font-family: Helvetica, Arial, sans-serif;">70.0%</text></g>
                              <g id="SvgjsG3026" class="apexcharts-datalabels"><text id="SvgjsText3027" font-family="Helvetica, Arial, sans-serif" x="259.0346197899421" y="92.3039045253256" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-text apexcharts-pie-label" filter="url(#SvgjsFilter3028)" style="font-family: Helvetica, Arial, sans-serif;">30.0%</text></g>
                            </g>
                          </g>
                        </g>
                        <line id="SvgjsLine3037" x1="0" y1="0" x2="659" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                        <line id="SvgjsLine3038" x1="0" y1="0" x2="659" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                      </g>
                      <g id="SvgjsG3004" class="apexcharts-annotations"></g>
                    </svg>
                    <div class="apexcharts-tooltip apexcharts-theme-dark">
                      <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(67, 94, 190);"></span>
                        <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                          <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                          <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                        </div>
                      </div>
                      <div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(85, 198, 232);"></span>
                        <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                          <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                          <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="resize-triggers">
                  <div class="expand-trigger">
                    <div style="width: 730px; height: 343px;"></div>
                  </div>
                  <div class="contract-trigger"></div>
                </div>
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