 <?php
    // Mengambil Data Pesanan Sesuai ID
    $id=$_GET['id'];
    $sql="select pesanan.*,pelanggan.nama from pesanan,pelanggan where pesanan.id_pelanggan=pelanggan.id_pelanggan and id_pesanan=$id";
    $query=mysqli_query($koneksi,$sql);
    $kolom=mysqli_fetch_array($query);

 ?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Verifikasi Pesanan</h1>
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
      <table class="table">
        <tr>
          <td>Nomor Pesanan</td>
          <td>:</td>
          <td><?= $kolom['id_pesanan']; ?></td>
        </tr>
        <tr>
          <td>Nama Pelanggan</td>
          <td>:</td>
          <td><?= $kolom['nama']; ?></td>
        </tr>
        <tr>
          <td>Nama Penerima</td>
          <td>:</td>
          <td><?= $kolom['nama_penerima']; ?></td>
        </tr>
        <tr>
          <td>Alamat Penerima</td>
          <td>:</td>
          <td><?= $kolom['alamat_penerima']; ?></td>
        </tr>
        <tr>
          <td>Tanggal Pemesanan</td>
          <td>:</td>
          <td><?= $kolom['tanggal_pemesanan']; ?></td>
        </tr>
        <tr>
          <td>Status</td>
          <td>:</td>
          <td><?= $kolom['status']; ?></td>
        </tr>
        <tr>
          <td>Total</td>
          <td>:</td>
          <td><?= $kolom['total']; ?></td>
        </tr>
        <tr>
          <td>Bukti Pembayaran</td>
          <td>:</td>
          <td><img src="gambar_bukti/<?= $kolom['bukti_bayar']; ?>" width="100%"></td>
        </tr>
        <tr>
          <td>Waktu Upload Bukti</td>
          <td>:</td>
          <td><?= $kolom['waktu_upload_bukti']; ?></td>
        </tr>        
      </table>
      
      <br>
      <button class="btn btn-warning" type="submit">Update Status</button>       
      <br>  
      </div><!-- /.container-fluid -->
      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Modal Untuk Tambah Kategori -->
