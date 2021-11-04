<?php
    session_start();
    include "admin/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyToko Platform Belanja Paling Oke</title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <!-- Library Font Awesome -->
    <link rel="stylesheet" href="asset/fa/css/all.css">
  
</head>

<body>
    <!-- NavBar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-danger">
        <!-- Just an image -->
        
        <a class="navbar-brand" href="index.php"><i class="fa fa-shopping-bag"></i> MyToko 1.0</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=profil">Profile</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Produk
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php
                            $sql1="select * from kategori order by kategori";
                            $q1=mysqli_query($koneksi,$sql1);
                            while($kolom1=mysqli_fetch_array($q1)){
                            
                        ?>

                        <a class="dropdown-item" href="index.php?page=produk-bykategori&id=<?php echo $kolom1['id_kategori']; ?>"><?php echo $kolom1['kategori']; ?></a>
                        
                        <?php
                            }
                        ?>        
                        
                        <div class="dropdown-divider"></div>

                        <a class="dropdown-item" href="index.php?page=produk-all">Semua Produk</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=cara-transaksi">Cara Transaksi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=hubungi-kami">Hubungi Kami</a>
                </li>
            </ul>

            <!-- Kelompok Menu Transaksi -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=keranjang">
                        <i class="fas fa-shopping-cart"></i>
                    </a>            
                </li>
<?php
                // Pengecekan Status Login 
                if(!empty($_SESSION['frontend_user_nama'])){
                    // Tampilkan Menu Nama User dan Logout                
?>
                <!-- Menu Muncul Saat Login Sukses (START) -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"></i> <?php echo $_SESSION['frontend_user_nama']; ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Profil</a>
                        <a class="dropdown-item" href="index.php?page=daftar-transaksi">Daftar Transaksi</a>
                        <a class="dropdown-item" href="#">Bantuan</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="aksi/logout.php">
                        Logout
                    </a>            
                </li>
                <!-- Menu Muncul Saat Login Sukses (END) -->
<?php
                } else {
                    // Tampilkan Menu Login dan Daftar               
?>
                <!-- Menu Muncul Saat Belum Login (START) -->
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=daftar">
                        Daftar
                    </a>            
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=login">
                        Login
                    </a>            
                </li>
                <!-- Menu Muncul Saat Belum Login (END) -->
<?php
                }
?>                
                <!-- <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li> -->
            </ul>
        </div>
    </nav>
    <!-- Batas NavBar -->

    <!-- Header -->
    <div class="container mt-5 mb-4">
        <div class="row">
            <div class="col-lg-8 mb-4">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/avel-chuklanov-DUmFLtMeAbQ-unsplash.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/bench-accounting-C3V88BOoRoM-unsplash (1).jpg" class="d-block w-100"
                                alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/clark-street-mercantile-P3pI6xzovu0-unsplash.jpg" class="d-block w-100"
                                alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12 mb-4"> 
                <img class="w-100 h-100" src="img/andres-jasso-tBvCDh0GNXg-unsplash (1).jpg" alt="">
            </div>
        </div>
    </div>
    <!-- Batas Header -->
    
    <?php include "konten.php"; ?>
    
    <!-- Footer -->
        <footer class="page-footer bg-dark">
            <div class="footer-copyright text-center pt-2">
                <a href="#"><i class="fab fa-facebook-square"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>

            </div>
            <div class="footer-copyright text-center text-small pb-2 text-white-50">
                <i>Copyyright &copy; 2021 By Agus Ariyanto</i>
            </div>
        </footer>
    <!-- Batas Footer -->

    
    <!-- JS -->
    <script src="asset/js/jquery-3.6.0.min.js"></script>
    <script src="asset/js/bootstrap.bundle.min.js"></script>
</body>

</html>