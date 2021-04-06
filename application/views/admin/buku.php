<?php if($this->session->userdata('id_user_role')!= 2){redirect('login');};?>
<div class="cc">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid" >
        <div class="row mb-2">
          <div class="col-sm-6">
            <h2 class="m-0 text-success" ><i class="nav-icon fas fa-user-plus" ></i> Data Buku </h2>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      <div class="alert alert-secondary" role="alert">
      <i class="nav-icon fas fa-home"></i> Dashboard &nbsp; &nbsp; > &nbsp;  &nbsp;<i class="nav-icon fas fa-user"></i>  Buku 
        </div>
        
        <div class="row">
          <div class="col"> 
              <!-- Tabel -->
              <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
            <div class='card-header' style="margin-left:-20px;">
              <a class='btn btn-primary'href="<?php echo site_url(); ?>bukuclient/post/">
                  <i class="fa fa-plus"></i>
                  <span >
                      Tambah
                  </span>
                  </a>
                 
                </a> 
              <br>
            </div>   
            <br>
              <table id="tabel" class="table table-bordered">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Foto</th>
                  <th>Nama</th>
                  <th>Diskripsi</th>
                  <th>Aksi</th>
                 
                </tr>
                </thead>
                <tbody>
                    
                    <?php 
                    $i=1;
                    foreach ($buku as $rows) : ?>
                    <tr>
            
                        <td><?php echo $i++; ?></td>
                        <td><iframe src="<?php echo base_url('file_buku/' . $rows->file_pdf) ?>" width="90" hight="120" ></iframe></td>
                        <td><?php echo $rows->nama_buku; ?></td>
                        <td><?php echo $rows->diskripsi; ?></td>
                       
                    <td>
                            <a href="<?php echo site_url(); ?>bukuclient/put/<?php echo $rows->id_buku; ?>" class="btn btn-warning">
                            <i class="fa fa-pen" aria-hidden="true"></i></a>
                            <a href="<?= base_url(); ?>bukuclient/delete/<?= $rows->id_buku ;?>" class="btn btn-danger"
                            onClick="return confirm('yakin mau hapus');">
                            <i class="fa fa-trash" aria-hidden="true"></i></a>
                        </td>
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