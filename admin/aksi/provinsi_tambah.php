<?php
    include "../koneksi.php";

    // Ambil Variabel
    $x1 =$_POST['provinsi'];
    $x2 =$_POST['biaya'];

    // Perintah Insert
    $sql="insert into provinsi(provinsi,biaya) values('$x1',$x2)";
    mysqli_query($koneksi,$sql);

    // Mengembalikan Kehalaman utama
    header("location:../index.php?p=provinsi");

?>