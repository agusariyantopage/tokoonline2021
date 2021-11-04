<?php
    // Mengambil Data Transaksi Sesuai ID
    $id=$_GET['id'];

    $sql1="select pesanan.*,pelanggan.nama,provinsi.biaya 
    from pesanan,pelanggan,provinsi 
    where pesanan.id_pelanggan=pelanggan.id_pelanggan and pesanan.id_provinsi=provinsi.id_provinsi and pesanan.id_pesanan=$id";
    // echo $sql1;
    $query1=mysqli_query($koneksi,$sql1);
    $data=mysqli_fetch_array($query1);

    // Variabel Transaksi
    $nama       =$data['nama'];
    $total      =$data['total'];
    $biaya_kirim=$data['biaya'];
    $grandtotal =$total+$biaya_kirim;

?>
<!-- Breadcumb (Keterangan Halaman) -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Transaksi Berhasil</li>
        </ol>
    </nav>
    <!-- Batas Breadcumb -->

    <!-- Konten Utama -->
    <div class="container-fluid">
        <div class="container">
            <div class="card mb-4" style="max-width:500px; margin:auto;">
                <div class="card-header bg-info text-white"><i class="fas fa-key"></i> Langkah Pembayaran Transaksi</div>
                <div class="card-body">
                    <p>
                        Cara Pembayaran Transaksi #<?= $id; ?> <br>
                        <ol>
                            <li>Tentukan metode pembayaran</li>
                            <li>Transfer BCA ke Rekening : 76700000</li>
                            <li>Transfer BNI ke Rekening : 9878 7878</li>
                            <li>Transfer Mandiri ke Rekening : 765456535</li>
                            <li>Masukkan Nominal Transaksi Sesuai Pembelanjaan Anda</li>
                            <li>Pada Keterangan Transfer Tambahkan "Pembayaran Transaksi #<?= $id; ?>"</li>
                            <li>Simpan Bukti Pembayaran</li>
                            <li>Bila diperlukan silahkan upload bukti pembayaran pada menu transaksi</li>
                        </ol>
                    </p>
                </div>                
            </div>

            <div class="card mb-4" style="max-width:500px; margin:auto;">
                <div class="card-header bg-info text-white"><i class="fas fa-key"></i> Rincian Transaksi</div>
                <div class="card-body">
                    <table  style="width:100%;">
                        <tr>
                            <td>Nomor Transaksi</td>
                            <td>:</td>
                            <td><?= $id; ?></td>
                        </tr>
                        <tr>
                            <td>Nama Pelanggan</td>
                            <td>:</td>
                            <td><?= $nama; ?></td>
                        </tr>
                        <tr>
                            <td>Total Belanja</td>
                            <td>:</td>
                            <td align="right"><?= number_format($total); ?></td>
                        </tr>
                        <tr>
                            <td>Ongkos Kirim</td>
                            <td>:</td>
                            <td align="right"><?= number_format($biaya_kirim); ?></td>
                        </tr>
                        <tr>
                            <td><b>Grandtotal</b></td>
                            <td>:</td>
                            <td align="right"><b><?= number_format($grandtotal); ?></b></td>
                        </tr>
                        
                    </table>
                    <br>
                    Bila Sudah Melakukan Pembayaran Silahkan Upload Bukti Disini !
                    <hr>
                    <form action="aksi/upload_bukti.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $id; ?>">
                        <label for="bukti">Upload Bukti Pembayaran</label>
                        <input class="form-control" type="file" name="bukti" required>
                        
                        <button class="btn btn-info mt-2" type="submit">Kirim Bukti Pembayaran</button>
                    </form>
                    <hr>
                </div>                
            </div>

            

        </div>
    </div>
    <!-- Batas Konten Utama -->