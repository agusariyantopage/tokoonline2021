<?php
    session_start();
    include "../admin/koneksi.php";

    $x1=$_POST['id'];
    $x2=$_POST['qty'];

    $sql="update keranjang set jumlah=$x2 where id_keranjang=$x1";
    mysqli_query($koneksi,$sql);

    header("location:../index.php?page=keranjang");

?>