    <!-- Breadcumb (Keterangan Halaman) -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Halaman Login</li>
        </ol>
    </nav>
    <!-- Batas Breadcumb -->

    <!-- Konten Utama -->
    <div class="container-fluid">
        <div class="container">
            <div class="card mb-4" style="max-width:500px; margin:auto;">
                <div class="card-header bg-info text-white"><i class="fas fa-key"></i> Akses Login</div>
                <div class="card-body">
                    <form action="aksi/login.php" method="post">
                        <label for="username">Username / Email</label>
                        <input type="text" class="form-control" name="username" required>
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" required>
                        <button class="btn btn-info mt-4">Sign-In</button>
                    </form>
                </div>
                <div class="card-footer">
                    <a href="#">Buat Akun</a> | <a href="#">Lupa Password </a>
                </div>
            </div>

        </div>
    </div>
    <!-- Batas Konten Utama -->