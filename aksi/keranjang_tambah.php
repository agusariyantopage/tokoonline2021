<?php
    session_start();
    include "../admin/koneksi.php";

    // Cek Posisi Login
    if(empty($_SESSION['frontend_user_nama'])){
        //echo "Anda Belum Login";
        header("location:../index.php?page=login");
    } else {
        //echo "Anda Sudah Login";
        $id_pelanggan   =$_SESSION['frontend_user_id'];
        $id_barang      =$_GET['id'];
        $harga          =$_GET['harga'];
        $jumlah         =1;

        $sql="insert into keranjang (id_pelanggan,id_barang,harga,jumlah) values($id_pelanggan,$id_barang,$harga,$jumlah)";
        mysqli_query($koneksi,$sql);
        header("location:../index.php?page=keranjang");
    }

?>