    <!-- Breadcumb (Keterangan Halaman) -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Pendaftaran Akun</li>
        </ol>
    </nav>
    <!-- Batas Breadcumb -->

    <!-- Konten Utama -->
    <div class="container-fluid">   
        <h6>Formulir Pendaftaran Akun Pelanggan</h6>
        <form action="aksi/registrasi.php" method="post">
            <label for="nik">Nomor Identitas (NIK/Nomor Paspor)</label>
            <input type="text" class="form-control" name="nik" required>
            <label for="nama">Nama Lengkap</label>
            <input type="text" class="form-control" name="nama" required>
            <label for="alamat">Alamat Lengkap</label>
            <textarea name="alamat" class="form-control" rows="5" required></textarea>
            <label for="nomortelepon">Nomor Telepon / Handphone</label>
            <input type="number" class="form-control" name="nomortelepon" required>
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" required>
            <label for="username">Username Akun</label>
            <input type="text" class="form-control" name="username" required>
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" required>

            <button type="submit" class="btn btn-info mt-2 mb-2">Proses Daftar</button>

        </form>
    </div>
    <!-- Batas Konten Utama -->