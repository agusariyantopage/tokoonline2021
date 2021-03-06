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
            <li class="breadcrumb-item active" aria-current="page">Keranjang</li>
        </ol>
    </nav>
    <!-- Batas Breadcumb -->

    <!-- Konten Utama -->
    <div class="container-fluid">
       <h6>Keranjang Belanja</h6>
       <br>
       <table class="table table-bordered">
           <thead class="thead-dark">
               <th>Aksi</th>
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
               <td>
                   <a href="aksi/keranjang_hapus.php?id=<?php echo $kolom1['id_keranjang']; ?>"><i class="fas fa-trash"></i></a>                   
               </td>
               <td><?php echo $no; ?></td>
               <td><?php echo $kolom1['nama_barang']; ?></td>
               <td align="right"><?php echo number_format($kolom1['harga']); ?></td>
               <td align="right" style="max-width:80px;">
                   <form action="aksi/keranjang_ubah.php" method="post">
                       <input type="hidden" name="id" value="<?php echo $kolom1['id_keranjang']; ?>"> 
                       <div class="form-row">
                            <div class="col">
                                <input type="number" name="qty" class="form-control" value="<?php echo number_format($kolom1['jumlah']); ?>">
                            </div>
                            <div class="col">
                                <button class="btn btn-warning" type="submit"><i class="fas fa-edit"></i></button>
                            </div>
                       </div>
                   </form>
               </td>
               <td align="right"><?php echo number_format($subtotal); ?></td>
           </tr>
<?php
            }
?>           
           <tr>
               <td colspan="5"><b>GRANDTOTAL</b></td>
               <td align="right"><b><?php echo number_format($grandtotal); ?></b></td>
           </tr>
       </table> 
       <br>
        <div class="row">
            <div class="col-sm-6">
                <a href="index.php?page=produk-all">
                    <button class="btn btn-success"><i class="fas fa-arrow-right"></i> Lanjut Belanja</button>
                </a>
            </div>
            <div class="col-sm-6 text-right">
                <a href="index.php?page=check-out">
                <button class="btn btn-info"><i class="fas fa-file-invoice"></i> Check-Out</button>
                </a>
            </div>
        </div>
        <br>
    </div>
    <!-- Batas Konten Utama -->
<?php
    }
?>