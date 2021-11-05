 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Pesanan</h1>
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
              <h3>Data Pesanan</h3>
            </div> 
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <!-- Kepala Tabel -->
                <thead>
                  <tr>
                    <td>ID</td>
                    <td>Nama Pelanggan</td>
                    <td>Tanggal Pemesanan</td>
                    <td>Status</td>
                    <td>Total</td>
                    <td>Sudah Upload ?</td>                    
                    <td>Aksi</td>
                  </tr>
                </thead>
                <!-- Isi Tabel -->
<?php
  $sql="select pesanan.*,pelanggan.nama from pesanan,pelanggan where pesanan.id_pelanggan=pelanggan.id_pelanggan";
  $query=mysqli_query($koneksi,$sql);
  while($kolom=mysqli_fetch_array($query)){  
?>                
                <tr>
                  <td><?= $kolom['id_pesanan']; ?></td>
                  <td><?= $kolom['nama']; ?></td>
                  <td><?= $kolom['tanggal_pemesanan']; ?></td>
                  <td><?= $kolom['status']; ?></td>
                  <td><?= $kolom['total']; ?></td>
                  <td align="center">
                    <?php 
                        if(strlen($kolom['bukti_bayar'])>=1){
                          echo "<i class='fas fa-check text-success'></i>";
                        } else {
                          echo "<i class='fas fa-times text-danger'></i>";
                        }
                    ?>
                  </td>                  
                  <td>
                    <a href="index.php?p=pesanan-edit&id=<?= $kolom['id_pesanan']; ?>"><i class="fas fa-edit"></i></a>
                  </td>
                </tr>
              
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
