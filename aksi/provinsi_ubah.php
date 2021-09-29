<?php
    include "../koneksi.php";

    // Ambil Variabel
    $x0 =$_POST['idprovinsi'];
    $x1 =$_POST['provinsi'];
    $x2 =$_POST['biaya'];

    // Perintah Insert
    $sql="update provinsi set provinsi='$x1',biaya=$x2 where id_provinsi=$x0";
    mysqli_query($koneksi,$sql);

    // Mengembalikan Kehalaman utama
    header("location:../index.php?p=provinsi");

?>