<?php
    include "../koneksi.php";

    // Ambil Variabel
    $x1 =$_POST['username'];
    $x2 =$_POST['passwd'];
    $x3 =$_POST['level'];

    // Perintah Insert
    $sql="insert into pengguna(username,password,level) values('$x1','$x2',$x3)";
    mysqli_query($koneksi,$sql);
    echo $sql;
    // Mengembalikan Kehalaman utama
    header("location:../index.php?p=user");

?>