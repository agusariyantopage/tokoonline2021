<?php
    if(empty($_GET['page'])){
        include "konten/index.php";
    }
    else if($_GET['page']=='profil') {
        include "konten/profil.php";    
    }
    else if($_GET['page']=='produk-bykategori') {
        include "konten/produk-bykategori.php";    
    }
    else if($_GET['page']=='produk-all') {
        include "konten/produk-all.php";    
    }
    else if($_GET['page']=='cara-transaksi') {
        include "konten/cara-transaksi.php";    
    }
    else if($_GET['page']=='hubungi-kami') {
        include "konten/hubungi-kami.php";    
    }
    else if($_GET['page']=='daftar') {
        include "konten/daftar.php";    
    }
    else if($_GET['page']=='login') {
        include "konten/login.php";    
    }
    else if($_GET['page']=='keranjang') {
        include "konten/keranjang.php";    
    }
    
    

?>