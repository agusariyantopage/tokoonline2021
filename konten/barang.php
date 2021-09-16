 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Barang</h1>
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
              <h3>Data Barang</h3>
            </div> 
            <div class="card-body">
              <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModal">
              <i class="fas fa-plus"></i> Tambah</button>
              
              <table id="example1" class="table table-bordered table-striped">
                <!-- Kepala Tabel -->
                <thead>
                  <tr>
                    <td>ID Barang</td>
                    <td>Kategori</td>
                    <td>Nama Barang</td>
                    <td>Stok</td>
                    <td>Harga Modal</td>
                    <td>Harga Jual</td>
                    <td>Keterangan</td>
                    <td>Gambar</td>
                    <td>Aksi</td>
                  </tr>
                </thead>
                <!-- Isi Tabel -->
<?php
  $sql="select barang.*,kategori.kategori from barang,kategori where barang.id_kategori=kategori.id_kategori";
  $query=mysqli_query($koneksi,$sql);
  while($kolom=mysqli_fetch_array($query)){  
?>                
                <tr>
                  <td><?= $kolom['id_barang']; ?></td>
                  <td><?= $kolom['kategori']; ?></td>
                  <td><?= $kolom['nama_barang']; ?></td>
                  <td><?= $kolom['stok']; ?></td>
                  <td><?= $kolom['harga_modal']; ?></td>
                  <td><?= $kolom['harga_jual']; ?></td>
                  <td><?= $kolom['keterangan']; ?></td>
                  <td><img src="gambar_barang/<?= $kolom['gambar']; ?>" class="img-thumbnail" alt=""></td>
                  <td>
                    <button type="button" class="btn btn-link" data-toggle="modal" data-target="#editModal<?= $kolom['id_barang']; ?>"><i class="fas fa-edit"></i></button>
                    <button type="button" class="btn btn-link"><a onclick="return confirm('Apakah Yakin Data Ini Dihapus??')" href="aksi/barang_hapus.php?id=<?= $kolom['id_barang']; ?>"><i class="fas fa-trash"></i></a></button>
                  </td>
                </tr>
<!-- Modal Edit -->
<div class="modal fade" id="editModal<?= $kolom['id_barang']; ?>" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Ubah Barang</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" enctype="multipart/form-data" action="aksi/barang_ubah.php">
          <input type="hidden" name="idbarang" value="<?= $kolom['id_barang']; ?>">
          <div>         
            <label for="idkategori">Kategori</label>
            <select class="form-control" required name="idkategori">
             
<?php
              // Mengambil Nilai Kategori Berdasarkan Id Kategori
              $id_kat=$kolom['id_kategori'];
              $sql2="select * from kategori where id_kategori=$id_kat";
              $query2=mysqli_query($koneksi,$sql2);
              $kolom2=mysqli_fetch_array($query2);
              echo "<option value='$kolom2[id_kategori]'>$kolom2[kategori]</option>";

              $sql1="select * from kategori order by kategori";
              $query1=mysqli_query($koneksi,$sql1);
              while($kolom1=mysqli_fetch_array($query1)){
                echo "<option value='$kolom1[id_kategori]'>$kolom1[kategori]</option>";
              }
?>
            </select>
          </div>
          <div>
            <label for="nama">Nama Barang</label>
            <input type="text" value="<?= $kolom['nama_barang'] ?>" required class="form-control" name="nama">
          </div>
          <div>
            <label for="stok">Jumlah Stok</label>
            <input type="number" value="<?= $kolom['stok'] ?>" required class="form-control" name="stok">
          </div>          
          <div>
            <label for="hargamodal">Harga Modal</label>
            <input type="number" value="<?= $kolom['harga_modal'] ?>" required class="form-control" name="hargamodal">
          </div>
          <div>
            <label for="hargajual">Harga Jual</label>
            <input type="number" value="<?= $kolom['harga_jual'] ?>" required class="form-control" name="hargajual">
          </div>
          <div>
            <label for="keterangan">Keterangan</label>
            <textarea name="keterangan" class="form-control" rows="3"><?= $kolom['keterangan'] ?></textarea>
          </div>
          <div>
            <label for="gambar">Gambar Lama</label><br>
            <img src="gambar_barang/<?= $kolom['gambar'] ?>" class="img-thumbnail" alt="">            
          </div>
          <div>
            <label for="gambar">Gambar Baru</label>            
            <input type="file" class="form-control" name="gambar">
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
 <!-- Modal Tambah -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Barang Baru</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" enctype="multipart/form-data" action="aksi/barang_tambah.php">
          <div>         
            <label for="idkategori">Kategori</label>
            <select class="form-control" required name="idkategori">
              <option class="form-control" value="">Pilih Kategori Barang</option>
<?php
              $sql1="select * from kategori order by kategori";
              $query1=mysqli_query($koneksi,$sql1);
              while($kolom1=mysqli_fetch_array($query1)){
                echo "<option value='$kolom1[id_kategori]'>$kolom1[kategori]</option>";
              }
?>
            </select>
          </div>
          <div>
            <label for="nama">Nama Barang</label>
            <input type="text" required class="form-control" name="nama">
          </div>
          <div>
            <label for="stok">Jumlah Stok</label>
            <input type="number" required class="form-control" name="stok">
          </div>          
          <div>
            <label for="hargamodal">Harga Modal</label>
            <input type="number" required class="form-control" name="hargamodal">
          </div>
          <div>
            <label for="hargajual">Harga Jual</label>
            <input type="number" required class="form-control" name="hargajual">
          </div>
          <div>
            <label for="keterangan">Keterangan</label>
            <textarea name="keterangan" class="form-control" rows="3"></textarea>
          </div>
          <div>
            <label for="gambar">Gambar</label>
            <input type="file" class="form-control" name="gambar">
          </div>
         
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
