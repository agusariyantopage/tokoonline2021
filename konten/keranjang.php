<?php
    // Mengecek Status Login 

    // Jika Belum Login diarahkan ke halaman login
    if(empty($_SESSION['frontend_user_nama'])){
        include "konten/login.php";
    } else {
?>
    <!-- Breadcumb (Keterangan Halaman) -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Keranjang</li>
        </ol>
    </nav>
    <!-- Batas Breadcumb -->

    <!-- Konten Utama -->
    <div class="container-fluid">
       <h6>Keranjang Belanja</h6>
       <br>
       <table class="table table-bordered">
           <thead class="thead-dark">
               <th>Aksi</th>
               <th>No.</th>
               <th>Deskripsi</th>
               <th>Harga</th>
               <th>Qty</th>
               <th>Subtotal</th>
           </thead>
           <tr>
               <td><i class="fas fa-trash"></i> <i class="fas fa-edit"></i></td>
               <td>1</td>
               <td>Coca Cola 1,5 Liter</td>
               <td align="right">15,000</td>
               <td align="right">3</td>
               <td align="right">45,000</td>
           </tr>
           <tr>
               <td><i class="fas fa-trash"></i> <i class="fas fa-edit"></i></td>
               <td>1</td>
               <td>Fanta 1,5 Liter</td>
               <td align="right">12,000</td>
               <td align="right">2</td>
               <td align="right">24,000</td>
           </tr>
           <tr>
               <td colspan="5"><b>GRANDTOTAL</b></td>
               <td align="right"><b>69,000</b></td>
           </tr>
       </table> 
       <br>
        <div class="row">
            <div class="col-sm-6">
                <button class="btn btn-success"><i class="fas fa-arrow-right"></i> Lanjut Belanja</button>
            </div>
            <div class="col-sm-6 text-right">
                <button class="btn btn-info"><i class="fas fa-file-invoice"></i> Check-Out</button>
            </div>
        </div>
        <br>
    </div>
    <!-- Batas Konten Utama -->
<?php
    }
?>