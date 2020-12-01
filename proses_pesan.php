<?php
    require_once("koneksi.php");

    $id_produk = NULL;
    $nama_produk = $_POST['nama_produk'];
    $harga_produk = $_POST['harga_produk'];

    if ($tujuan == "kosong"){
       
        echo "<p><button><a href='paket.php' style='text-decoration:none; color:black'>Back</a></button></p>";
    } else if($isipaket == ""){
        echo "<h1>isi kolom isi paket</h1>";
        
        echo "<p><button><a href='paket.php' style='text-decoration:none; color:black'>Back</a></button></p>";
    } 
    else{
        $query = "INSERT INTO pemesanan(id_produk, nama_produk, harga_produk) 
                    VALUES ('$id_produk','$nama_produk','$hargaproduk')";
        $result = mysqli_query($connect, $query);
        header("location: pesan.php");
    }
?>