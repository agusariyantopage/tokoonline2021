<?php
    include "../admin/koneksi.php";

    $x1 =$_POST['nik'];
    $x2 =$_POST['nama'];
    $x3 =$_POST['alamat'];
    $x4 =$_POST['nomortelepon'];
    $x5 =$_POST['email'];
    $x6 =$_POST['username'];
    $x7 =$_POST['password'];

    $sql="insert into pelanggan(no_identitas,nama,alamat,no_telepon,email,username,password) values('$x1','$x2','$x3','$x4','$x5','$x6','$x7')";
    $query=mysqli_query($koneksi,$sql);
    echo $sql;
    $sukses=mysqli_affected_rows($koneksi);

    if($sukses>=1){
        header("location:../index.php?page=login&msg=sukses-registrasi");
    } else {
        header("location:../index.php?page=login&msg=gagal-registrasi");
    }



?>