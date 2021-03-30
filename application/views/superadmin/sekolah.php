<?php if($this->session->userdata('id_user_role')!= 1){redirect('login');};?>
<div class="cc">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid" >
        <div class="row mb-2">
          <div class="col-sm-6">
            <h2 class="m-0 text-success" ><i class="nav-icon fas fa-building" ></i> Data Sekolah</h2>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      <div class="alert alert-secondary" role="alert">
      <i class="nav-icon fas fa-home"></i> Dashboard &nbsp; &nbsp; > &nbsp;  &nbsp;<i class="nav-icon fas fa-building"></i> Sekolah
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
                  <th>Id Sekolah</th>
                  <th>Nama Sekolah</th>
                  <th>NPSN</th>
                  <th>NSS</th>
                  <th>Alamat</th>
                  <th>Kode Pos</th>
                  <th>No Tlp</th>
                  <th>Kelurahan</th>
                  <th>Kecamatan</th>
                  <th>Kabupaten</th>
                  <th>Provinsi</th>
                  <th>Website</th>
                  <th>Email</th>
                  <th>Visi</th>
                  <th>Misi</th>
                  <th>Aksi</th>
                 
                 
                </tr>
                </thead>
                <tbody>
                    <?php foreach ($sekolah as $rows) : ?>
                    <tr>
                        <td><?php echo $rows->id_sekolah; ?></td>
                        <td><?php echo $rows->nama_sekolah; ?></td>
                        <td><?php echo $rows->npsn; ?></td>
                        <td><?php echo $rows->nss; ?></td>
                        <td><?php echo $rows->alamat_sekolah; ?></td>
                        <td><?php echo $rows->kode_pos; ?></td>
                        <td><?php echo $rows->no_telp; ?></td>
                        <td><?php echo $rows->kelurahan; ?></td>
                        <td><?php echo $rows->kecamatan; ?></td>
                        <td><?php echo $rows->kabupaten; ?></td>
                        <td><?php echo $rows->provinsi; ?></td>
                        <td><?php echo $rows->website; ?></td>
                        <td><?php echo $rows->email; ?></td>
                        <td><?php echo $rows->visi; ?></td>
                        <td><?php echo $rows->misi; ?></td>
                        <td>
                            <a href="<?php echo site_url(); ?>sekolahclient/put/<?php echo $rows->id_sekolah; ?>" class="btn btn-warning">
                            <i class="fa fa-pen" aria-hidden="true"></i></a>
                            <a href="<?= base_url(); ?>sekolahclient/delete/<?= $rows->id_sekolah ;?>" class="btn btn-danger"
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