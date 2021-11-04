<?php
    session_start();
    include "../admin/koneksi.php";

    $x1=$_POST['id'];
    $x2=$_FILES['bukti']['name'];

    // Perintah Upload Bukti
    $target_dir ="../admin/gambar_bukti/";
    $target_file=$target_dir.basename($_FILES['bukti']['name']);
    $upload_ok=1;
    $filetype=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if(move_uploaded_file($_FILES['bukti']['tmp_name'],$target_file)){
        echo "Bukti Sukses Terupload";
    }

    $sql="update pesanan set bukti_bayar='$x2',waktu_upload_bukti=DEFAULT where id_pesanan=$x1";
    //echo $sql;
    mysqli_query($koneksi,$sql);

    header("location:../index.php?page=daftar-transaksi");

?>