<?php
    session_start();
    include "../admin/koneksi.php";

    $x1=$_SESSION['frontend_user_id'];
    $x2=$_POST['nama_penerima'];
    $x3=$_POST['alamat'];
    $x4=date("Y-m-d");
    $x5="BELUM BAYAR";
    $x6=$_POST['provinsi'];
    $x7=$_POST['total'];

    // Perintah Insert Ke Tabel pesanan
    $sql="insert into pesanan(id_pelanggan,nama_penerima,alamat_penerima,tanggal_pemesanan,status,id_provinsi,total) values($x1,'$x2','$x3','$x4','$x5',$x6,$x7)";
    //echo $sql;
    mysqli_query($koneksi,$sql);

    // Perintah Insert ke Tabel pesanan_detail
    // Perintah ambil id_pesanan
    $sql4="select * from pesanan where id_pelanggan=$x1 order by id_pesanan desc limit 1";
    //echo $sql4;
    $query4=mysqli_query($koneksi,$sql4);
    $data4=mysqli_fetch_array($query4);

    $sql2="select * from keranjang where id_pelanggan=$x1";
    $query2=mysqli_query($koneksi,$sql2);
    while($data2=mysqli_fetch_array($query2)){
        $d0=$data4['id_pesanan']; //ID Pesanan
        $d1=$data2['id_barang'];
        $d2=$data2['jumlah'];
        $d3=$data2['harga'];
        // Perintah insert pesanan detail
        $sql3="insert into pesanan_detail(id_pesanan,id_barang,jumlah,harga) values($d0,$d1,$d2,$d3)";
        mysqli_query($koneksi,$sql3);
        //echo $sql3;
    }

    // Mengosongkan Keranjang
    $sql5="delete from keranjang where id_pelanggan=$x1";
    mysqli_query($koneksi,$sql5);


    header("location:../index.php?page=sukses-checkout&id=$d0");

?>