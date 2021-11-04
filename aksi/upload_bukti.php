<?php
    session_start();
    include "../admin/koneksi.php";

    $x1=$_POST['id'];
    $x2=$_FILES['bukti']['name'];

    $sql="update pesanan set bukti_bayar='$x2',waktu_upload_bukti=DEFAULT where id_pesanan=$x1";
    echo $sql;
    //mysqli_query($koneksi,$sql);

    //header("location:../index.php?page=keranjang");

?>