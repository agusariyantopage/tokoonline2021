<?php
    include "../koneksi.php";

    // Ambil Variabel
    $x0 =$_GET['id'];

    // Perintah Insert
    $sql="delete from pelanggan where id_pelanggan=$x0";
    mysqli_query($koneksi,$sql);

    // Mengembalikan Kehalaman utama
    header("location:../index.php?p=pelanggan");

?>