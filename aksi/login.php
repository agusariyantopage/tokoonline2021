<?php
    session_start();
    include "../admin/koneksi.php";

    $x1 =$_POST['username'];
    $x2 =$_POST['password'];
    
    $sql="select * from pelanggan where username='$x1' and password='$x2'";
    $query=mysqli_query($koneksi,$sql);
    //echo $sql;
    $sukses=mysqli_num_rows($query);

    if($sukses>=1){
        $user=mysqli_fetch_array($query);
        $_SESSION['frontend_user_id']       =$user['id_pelanggan'];
        $_SESSION['frontend_user_nama']     =$user['nama'];
        $_SESSION['frontend_user_nik']      =$user['no_identitas'];
        $_SESSION['frontend_user_alamat']   =$user['alamat'];
        $_SESSION['frontend_user_telepon']  =$user['no_telepon'];
        $_SESSION['frontend_user_email']    =$user['email'];

        header("location:../index.php");
        //echo "login sukses";
    } else {
        header("location:../index.php?page=login&msg=gagal-login");
        //echo "maaf username/email dan password yang anda masukkan salah";
    }



?>