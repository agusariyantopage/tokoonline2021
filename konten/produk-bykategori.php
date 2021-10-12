    <?php
        $id_kategori=$_GET['id'];
        $sql2="select * from kategori where id_kategori=$id_kategori";
        $query2=mysqli_query($koneksi,$sql2);
        $kolom2=mysqli_fetch_array($query2);

        $kategori=$kolom2['kategori'];
    ?>
    <!-- Breadcumb (Keterangan Halaman) -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Produk Berdasarkan Kategori : <?php echo $kategori; ?></li>
        </ol>
    </nav>
    <!-- Batas Breadcumb -->

    <!-- Konten Utama -->
    <div class="container-fluid">
        <h6>Daftar Produk Kategori : <?php echo $kategori; ?></h6>
        <div class="row text-center">
            <?php
                $sql1="select * from barang where id_kategori=$id_kategori";
                $query1=mysqli_query($koneksi,$sql1);
                while($kolom1=mysqli_fetch_array($query1)){
            ?>
            <div class="col-md-2 mb-5">
                <div class="card h-100"> 
                    <div class="card-header"><?= $kolom1['nama_barang']; ?></div>
                    <div class="card-body">
                        <img src="admin/gambar_barang/<?= $kolom1['gambar']; ?>" width="100%" alt="">
                        <p style="font-size:14px;">
                        <?= $kolom1['keterangan']; ?><br>
                        <?= $kolom1['harga_jual']; ?>
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="#"><i class="fas fa-shopping-cart"></i></a>&nbsp;
                        <a href="#"><i class="fas fa-info-circle"></i></a>
                    </div>
                </div>                
            </div>
            <?php
                } // Tutup While
            ?>
        </div>
    </div>
    <!-- Batas Konten Utama -->