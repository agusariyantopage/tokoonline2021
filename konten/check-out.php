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
            <li class="breadcrumb-item active" aria-current="page">Konfirmasi Check-Out</li>
        </ol>
    </nav>
    <!-- Batas Breadcumb -->

    <!-- Konten Utama -->
    <div class="container-fluid">
       

        <h6>Detail Transaksi</h6>
       <br>
       <table class="table table-bordered">
           <thead class="thead-dark">
               
               <th>No.</th>
               <th>Deskripsi</th>
               <th>Harga</th>
               <th>Qty</th>
               <th>Subtotal</th>
           </thead>
<?php
            $id_pelanggan=$_SESSION['frontend_user_id'];
            $sql1="select keranjang.*,barang.nama_barang from keranjang,barang where id_pelanggan=$id_pelanggan and barang.id_barang=keranjang.id_barang";
            $query1=mysqli_query($koneksi,$sql1);
            $no=0;
            $grandtotal=0;
            while($kolom1=mysqli_fetch_array($query1)){
                $no++;
                $subtotal=$kolom1['harga']*$kolom1['jumlah'];
                $grandtotal=$grandtotal+$subtotal;
            
?>           
           <tr>               
               <td><?php echo $no; ?></td>
               <td><?php echo $kolom1['nama_barang']; ?></td>
               <td align="right"><?php echo number_format($kolom1['harga']); ?></td>
               <td align="right">
                    <?php echo number_format($kolom1['jumlah']); ?>
               </td>
               <td align="right"><?php echo number_format($subtotal); ?></td>
           </tr>
<?php
            }
?>           
           <tr>
               <td colspan="4"><b>GRANDTOTAL</b></td>
               <td align="right"><b><?php echo number_format($grandtotal); ?></b></td>
           </tr>
       </table> 
       <br>

       <h6>Detail Pembeli</h6>
        <form action="aksi/keranjang_checkout.php" method="post">
            <input type="hidden" name="total" value="<?php echo $grandtotal; ?>">
            <label for="nama">Nama Pembeli</label>
            <input type="text" class="form-control" name="nama" value="<?php echo $_SESSION['frontend_user_nama']; ?>" readonly>
            <label for="nama_penerima">Nama Penerima</label>
            <input type="text" class="form-control" name="nama_penerima" required>
            <label for="alamat">Alamat Penerima</label>
            <textarea name="alamat" rows="3" class="form-control" required></textarea>
            <label for="provinsi">Provinsi Pengiriman</label>
            <select name="provinsi" class="form-control" required>
                <option value="">-- Pilih Provinsi Pengiriman --</option>
            <?php
                $sql2="select * from provinsi order by provinsi";
                $query2=mysqli_query($koneksi,$sql2);
                while($kolom2=mysqli_fetch_array($query2)){
                    echo "<option value='$kolom2[id_provinsi]'>$kolom2[provinsi]</option>";
                }
            ?>
            </select>
            <br>
            <button class="btn btn-info" type="submit">TETAPKAN</button>
        </form>
       <br>
       
    </div>
    <!-- Batas Konten Utama -->
<?php
    }
?>