<?php
    session_start();
    include "../koneksi.php";

    // Ambil Variabel
    $x1 =$_POST['username'];
    $x2 =$_POST['password'];

    // Perintah Cek Apakah Username dan Password Benar
    $sql="select * from pengguna where username='$x1' and password='$x2'";
    $query=mysqli_query($koneksi,$sql);
    $ketemu=mysqli_num_rows($query);

    if($ketemu>=1){
        // Register Session Pengguna
        $kolom=mysqli_fetch_array($query);
        $_SESSION['backend_user']=$kolom['username'];
        $_SESSION['backend_pass']=$kolom['password'];
        $_SESSION['backend_level']=$kolom['level'];
        header("location:../index.php");
    } else {
        
        header("location:../login.php?error=invalid-login");
    }

    // Mengembalikan Kehalaman utama
    //header("location:../index.php?p=kategori");

?>