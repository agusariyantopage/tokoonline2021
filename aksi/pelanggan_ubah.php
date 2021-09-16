<?php
    include "../koneksi.php";

    // Ambil Variabel
    $x0 =$_POST['idpelanggan'];
    $x1 =$_POST['noid'];
    $x2 =$_POST['nama'];
    $x3 =$_POST['alamat'];
    $x4 =$_POST['notelp'];
    $x5 =$_POST['email'];
    $x6 =$_POST['username'];
    $x7 =$_POST['passwd'];

    // Perintah Insert
    $sql="update pelanggan set no_identitas='$x1', nama='$x2', alamat='$x3', no_telepon='$x4', email='$x5', username='$x6', password='$x7' where id_pelanggan=$x0";
    mysqli_query($koneksi,$sql);
   

    // Mengembalikan Kehalaman utama
    header("location:../index.php?p=pelanggan");

?>