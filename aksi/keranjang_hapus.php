<?php
    session_start();
    include "../admin/koneksi.php";

    $id=$_GET['id'];
    $sql="delete from keranjang where id_keranjang=$id";
    mysqli_query($koneksi,$sql);
    header("location:../index.php?page=keranjang");

?>