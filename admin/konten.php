<?php
    if(empty($_GET['p'])){
        include "konten/home.php";    
    }
    else if($_GET['p']=='kategori'){
        include "konten/kategori.php";
    }
    else if($_GET['p']=='barang'){
        include "konten/barang.php";
    }
    else if($_GET['p']=='provinsi'){
        include "konten/provinsi.php";
    }
    else if($_GET['p']=='pelanggan'){
        include "konten/pelanggan.php";
    }
    else if($_GET['p']=='user'){
        include "konten/user.php";
    }
    else if($_GET['p']=='pesanan'){
        include "konten/pesanan.php";
    }
    else if($_GET['p']=='pesanan-edit'){
        include "konten/pesanan-edit.php";
    }
?>