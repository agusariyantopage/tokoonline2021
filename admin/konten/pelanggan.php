 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Pelanggan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><a href="#">Home</a></li>
              
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <row>
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3>Data Pelanggan</h3>
            </div> 
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <!-- Kepala Tabel -->
                <thead>
                  <tr>
                    <td>ID</td>
                    <td>Nomor Identitas</td>
                    <td>Nama Pelanggan</td>
                    <td>Alamat</td>
                    <td>No Telepon</td>
                    <td>Email</td>
                    <td>Username</td>
                    <td>Password</td>
                    <td>Aksi</td>
                  </tr>
                </thead>
                <!-- Isi Tabel -->
<?php
  $sql="select * from pelanggan";
  $query=mysqli_query($koneksi,$sql);
  while($kolom=mysqli_fetch_array($query)){  
?>                
                <tr>
                  <td><?= $kolom['id_pelanggan']; ?></td>
                  <td><?= $kolom['no_identitas']; ?></td>
                  <td><?= $kolom['nama']; ?></td>
                  <td><?= $kolom['alamat']; ?></td>
                  <td><?= $kolom['no_telepon']; ?></td>
                  <td><?= $kolom['email']; ?></td>
                  <td><?= $kolom['username']; ?></td>
                  <td><?= $kolom['password']; ?></td>
                  <td>
                    <button type="button" class="btn btn-link" data-toggle="modal" data-target="#editModal<?= $kolom['id_pelanggan']; ?>"><i class="fas fa-edit"></i></button>
                    <button type="button" class="btn btn-link"><a onclick="return confirm('Apakah Yakin Data Ini Dihapus??')" href="aksi/pelanggan_hapus.php?id=<?= $kolom['id_pelanggan']; ?>"><i class="fas fa-trash"></i></a></button>
                  </td>
                </tr>
<!-- Modal Edit -->
<div class="modal fade" id="editModal<?= $kolom['id_pelanggan']; ?>" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Ubah Pelanggan</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" enctype="multipart/form-data" action="aksi/pelanggan_ubah.php">
        <div>
          <label for="idpelanggan">ID Pelanggan</label>  
          <input type="text" class="form-control" readonly name="idpelanggan" value="<?= $kolom['id_pelanggan']; ?>">
        </div>
        <div>
          <label for="noid">Nomer Identitas</label>
          <input type="text" name="noid" class="form-control" value="<?= $kolom['no_identitas']; ?>">
        </div>
        <div>
          <label for="nama">Nama</label>
          <input type="text" name="nama" class="form-control" value="<?= $kolom['nama']; ?>">
        </div>
        <div>
          <label for="alamat">Alamat</label>
          <textarea name="alamat" id="alamat" class="form-control" rows="3"><?= $kolom['alamat']; ?></textarea>
        </div>
        <div>
          <label for="notelp">Nomor Telepon</label>
          <input type="text" name="notelp" class="form-control" value="<?= $kolom['no_telepon']; ?>">
        </div>  
        <div>
          <label for="email">Email</label>
          <input type="email" name="email" class="form-control" value="<?= $kolom['email']; ?>">
        </div>
        <div>
          <label for="username">Username</label>
          <input type="text" name="username" class="form-control" value="<?= $kolom['username']; ?>">
        </div>  
        <div>
          <label for="passwd">Password</label>
          <input type="password" name="passwd" class="form-control" value="<?= $kolom['password']; ?>">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Ubah</button>
        </form>
      </div>
    </div>
  </div>
</div>                
<?php
  }
?>                
              </table>
            </div> 
          </div>
        </div>
      </row>
             
        
      </div><!-- /.container-fluid -->
      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Modal Untuk Tambah Kategori -->
