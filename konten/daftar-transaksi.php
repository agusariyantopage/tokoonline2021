<?php
    // Mengecek Status Login 

    // Jika Belum Login diarahkan ke halaman login
    if(empty($_SESSION['frontend_user_nama'])){
        include "konten/login.php";
    } else {
?>
    <!-- Breadcumb (Keterangan Halaman) -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Daftar Transaksi</li>
        </ol>
    </nav>
    <!-- Batas Breadcumb -->

    <!-- Konten Utama -->
    <div class="container-fluid">
       <h6>Daftar Transaksi</h6>
       <br>
       <table class="table table-bordered">
           <thead class="thead-dark">
               <th>Aksi</th>
               <th>ID</th>
               <th>Nama Penerima</th>
               <th>Tanggal Trx</th>
               <th>Status</th>
               <th>Total Belanja</th>
           </thead>
<?php
            $id_pelanggan=$_SESSION['frontend_user_id'];
            $sql1="select * from pesanan where id_pelanggan=$id_pelanggan";
            $query1=mysqli_query($koneksi,$sql1);
            //$no=0;
            //$grandtotal=0;
            while($kolom1=mysqli_fetch_array($query1)){
                //$no++;
                //$subtotal=$kolom1['harga']*$kolom1['jumlah'];
                //$grandtotal=$grandtotal+$subtotal;
            
?>           
           <tr>
               <td>
                    <a href="index.php?page=sukses-checkout&id=<?= $kolom1['id_pesanan']; ?>"><i class="fas fa-credit-card"></i></a>                 
                    <a href="#"><i class="fas fa-print"></i></a>
                    <a href="admin/gambar_bukti/<?= $kolom1['bukti_bayar']; ?>" target="blank"><i class="fas fa-image"></i></a>                 
               </td>
               <td><?= $kolom1['id_pesanan']; ?></td>
               <td><?= $kolom1['nama_penerima']; ?></td>
               <td><?= $kolom1['tanggal_pemesanan']; ?></td>
               <td>
                   <?php
                        if($kolom1['status']=='BELUM BAYAR'){
                            echo "<div class='badge badge-danger'>";
                        } else {
                            echo "<div class='badge badge-success'>";
                        }
                        echo $kolom1['status']."</div>";
                   ?>                   
                </td>
               <td align="right"><?php echo number_format($kolom1['total']); ?></td>
           </tr>
<?php
            }
?>           
           
       </table> 
       <br>
        
    </div>
    <!-- Batas Konten Utama -->
<?php
    }
?>