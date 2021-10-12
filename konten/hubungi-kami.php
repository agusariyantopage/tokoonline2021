    <!-- Breadcumb (Keterangan Halaman) -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Hubungi Kami</li>
        </ol>
    </nav>
    <!-- Batas Breadcumb -->

    <!-- Konten Utama -->
    <div class="container-fluid">   
        <div class="row">
            <!-- Kolom Untuk Form -->
            <div class="col-lg-6">
                <h6>Formulir Kontak</h6>
                <form action="">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" required>
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" required>
                    <label for="kategori">Kategori</label>
                    <select name="kategori" class="form-control" required>
                        <option value="">-- Pilih Kategori Pesan --</option>
                        <option value="Informasi Produk">Informasi Produk</option>
                        <option value="Saran">Saran</option>
                        <option value="Komplain">Komplain</option>
                        <option value="Permohonan Kerjasama">Permohonan Kerjasama</option>
                        <option value="Lain-Lain">Lain-Lain</option>
                    </select>
                    <label for="pesan">Pesan</label>
                    <textarea name="pesan" class="form-control" rows="5" required></textarea>
                    <button type="submit" class="btn btn-info mt-3 mb-3">Kirim Pesan</button>
                </form>
            </div>    

            <!-- Kolom Untuk Map  -->
            <div class="col-lg-6">
                <h6>Lokasi Kantor Kami</h6>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.643020906105!2d115.17497661451807!3d-8.630227090112388!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd238ce24326885%3A0xee78d72f4f7fa4c9!2sSMK%20Pariwisata%20Triatma%20Jaya%20Badung!5e0!3m2!1sen!2sid!4v1633658580429!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
    <!-- Batas Konten Utama -->