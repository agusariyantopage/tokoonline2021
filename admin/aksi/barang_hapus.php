<?php
    include "../koneksi.php";

    // Ambil Variabel
    $x0 =$_GET['id'];

    // Perintah Insert
    $sql="delete from barang where id_barang=$x0";
    mysqli_query($koneksi,$sql);

    // Mengembalikan Kehalaman utama
    header("location:../index.php?p=barang");

?>