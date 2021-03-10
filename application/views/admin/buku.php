<?php if($this->session->userdata('id_user_role')!= 2){redirect('login');};?>
<div class="cc">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid" >
        <div class="row mb-2">
          <div class="col-sm-6">
            <h2 class="m-0 text-success" ><i class="nav-icon fas fa-user-plus" ></i> Data User </h2>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      <div class="alert alert-secondary" role="alert">
      <i class="nav-icon fas fa-home"></i> Dashboard &nbsp; &nbsp; > &nbsp;  &nbsp;<i class="nav-icon fas fa-user"></i>  User 
        </div>
        
        <div class="row">
          <div class="col"> 
              <!-- Tabel -->
              <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
              <table id="tabel" class="table table-bordered">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Foto</th>
                  <th>Nama</th>
                  <th>Diskripsi</th>
                 
                </tr>
                </thead>
                <tbody>
                    
                    <?php 
                    $i=1;
                    foreach ($buku as $rows) : ?>
                    <tr>
            
                        <td><?php echo $i; ?></td>
                        <td><?php echo $rows->foto; ?></td>
                        <td><?php echo $rows->nama_buku; ?></td>
                        <td><?php echo $rows->diskripsi; ?></td>
                       
                    </tr>
                    <?php endforeach ; ?>
                </tbody>
              </table>             
            <!-- /.card-body -->
          </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->