<?php

$idBarang = $_POST["id_barang"];
$idUser = $_POST["id_user"];
$barcode = $_POST["barcode"];
$namabarang = $_POST["nama_barang"];
$kategori = $_POST["kategori"];
$harga_beli = $_POST["harga_beli"];
$harga_jual = $_POST["harga_jual"];
$stok = $_POST["stok"];

// syntax menyambungkan ke database = mysqli_connect( "URL server" , "username" , "password" , "database")
$koneksi = mysqli_connect("localhost", "root", "", "db_tes_catatan2");


// Variabel data untuk menyimpan hasil query dari database 
$data = array();

// mysqli_query (koneksinya , SQL nya)
$query =  " UPDATE barang SET id_user = '$idUser' , barcode = '$barcode' , nama_barang = '$namabarang' , kategori = '$kategori' , harga_beli ='$harga_beli' , harga_jual ='$harga_jual' , stok = '$stok'  where id_barang = '$idBarang' ";
$querydb = mysqli_query($koneksi, $query);


// Kondisi jika error / Berhasil
if ($error = mysqli_error($koneksi)) {
    $data["status"] = "error";
    $data["pesan"] = $error;
} else {
    $data["status"] = "success Edit Data";
}

// menampilkan hasil / output
echo (json_encode($data));
