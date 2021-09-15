<?php
    include "../koneksi.php";

    // Ambil Variabel
    $x1 =$_POST['kategori'];

    // Perintah Insert
    $sql="insert into kategori(kategori) values('$x1')";
    mysqli_query($koneksi,$sql);

    // Mengembalikan Kehalaman utama
    header("location:../index.php?p=kategori");

?>