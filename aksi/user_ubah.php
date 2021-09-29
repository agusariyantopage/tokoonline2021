<?php
    include "../koneksi.php";

    // Ambil Variabel
    $x0 =$_POST['idpengguna'];
    $x1 =$_POST['username'];
    $x2 =$_POST['passwd'];
    $x3 =$_POST['level'];

    // Perintah Insert
    $sql="update pengguna set username='$x1',password='$x2',level=$x3 where id_pengguna=$x0";
    mysqli_query($koneksi,$sql);
    echo $sql;
    // Mengembalikan Kehalaman utama
    header("location:../index.php?p=user");

?>