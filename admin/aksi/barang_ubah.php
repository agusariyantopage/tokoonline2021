<?php
    include "../koneksi.php";

    // Ambil Variabel
    $x0 =$_POST['idbarang'];
    $x1 =$_POST['idkategori'];
    $x2 =$_POST['nama'];
    $x3 =$_POST['stok'];
    $x4 =$_POST['hargamodal'];
    $x5 =$_POST['hargajual'];
    $x6 =$_POST['keterangan'];
    $x7 =$_FILES['gambar']['name'];
    if($_FILES['gambar']['size']!=0){
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
        // Perintah Update Bila Gambar Diubah
         $sql="update barang set id_kategori=$x1,nama_barang='$x2',stok=$x3,harga_modal=$x4,harga_jual=$x5,keterangan='$x6',gambar='$x7' where id_barang=$x0";
    } else {
        // Perintah Update Bila Gambar Diubah
        $sql="update barang set id_kategori=$x1,nama_barang='$x2',stok=$x3,harga_modal=$x4,harga_jual=$x5,keterangan='$x6',gambar=gambar where id_barang=$x0";        
    }
    mysqli_query($koneksi,$sql);

    // Mengembalikan Kehalaman utama
    header("location:../index.php?p=barang");

?>