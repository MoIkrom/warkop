<?php

$idUser = $_POST["id_user"];
$barcode = $_POST["barcode"];
$namaBarang = $_POST["nama_barang"];
$kategori = $_POST["kategori"];
$hargaBeli = $_POST["harga_beli"];
$hargajual = $_POST["harga_jual"];
$stock = $_POST["stok"];

//  mysqli_connect( "URL server" , "username" , "password" , "database")
$koneksi = mysqli_connect("localhost", "root", "", "db_tes_catatan2");


// Variabel data untuk menyimpan hasil query dari database 
$data = array();

// mysqli_query (koneksinya , SQL nya)
$querydb = mysqli_query($koneksi, " INSERT INTO  barang (id_user , barcode, nama_barang , kategori, harga_beli , harga_jual, stok ) VALUES ('$idUser','$barcode','$namaBarang','$kategori','$hargaBeli','$hargajual','$stock') ");
$qry = mysqli_query($koneksi, "select * from barang where id_barang = (select last_insert_id()) ");


if ($error = mysqli_error($koneksi)) {
    $data["status"] = "error";
    $data["pesan"] = $error;
} else {
    $data["status"] = "success";
    // $data["Data"] = $querydb;
    $data[] = mysqli_fetch_assoc($qry);
}

echo json_encode($data);
