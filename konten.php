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
    else if($_GET['p']=='pelanggan'){
        include "konten/pelanggan.php";
    }
?>