<?php
    include "../koneksi.php";

    // Ambil Variabel
    $x0 =$_POST['idkategori'];
    $x1 =$_POST['kategori'];

    // Perintah Insert
    $sql="update kategori set kategori='$x1' where id_kategori=$x0";
    mysqli_query($koneksi,$sql);

    // Mengembalikan Kehalaman utama
    header("location:../index.php?p=kategori");

?>