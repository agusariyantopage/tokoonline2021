<?php
    include "../koneksi.php";

    // Ambil Variabel
    $x1 =$_POST['idkategori'];
    $x2 =$_POST['nama'];
    $x3 =$_POST['stok'];
    $x4 =$_POST['hargamodal'];
    $x5 =$_POST['hargajual'];
    $x6 =$_POST['keterangan'];
    // Perintah Upload Gambar
    $target_dir ="../gambar_barang/";
    $target_file = $target_dir.basename($_FILES["gambar"]["name"]);
    $uploadOK = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Cek Tipe File
    if($imageFileType!='jpg' && $imageFileType!='jpeg' && $imageFileType!='png'){
        echo "Tipe File Yang Diperbolehkan Hanya JPG & PNG";
        $uploadOK=0;
    } else {
        move_uploaded_file($_FILES["gambar"]["tmp_name"],$target_file);
    }
    $x7 =$_FILES['gambar']['name'];
    

    // Perintah Insert
    $sql="insert into barang(id_kategori,nama_barang,stok,harga_modal,harga_jual,keterangan,gambar) values($x1,'$x2',$x3,$x4,$x5,'$x6','$x7')";
    mysqli_query($koneksi,$sql);

    // Mengembalikan Kehalaman utama
    header("location:../index.php?p=barang");

?>