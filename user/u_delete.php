<?php

$idUser = $_POST["id_user"];

// syntax menyambungkan ke database = mysqli_connect( "URL server" , "username" , "password" , "database")
$koneksi = mysqli_connect("localhost", "root", "", "db_tes_catatan2");

// Variabel data untuk menyimpan hasil query dari database 
$data = array();

// // syntax query = mysqli_query (koneksinya , SQL nya) mysqli_query (koneksinya , SQL nya)
$query = "DELETE FROM users WHERE id_user = $idUser";
$result = mysqli_query($koneksi, $query);

// Kondisi jika error / Berhasil
if ($error = mysqli_error($koneksi)) {
    $data["status"] = "error";
    $data["pesan"] = $error;
} else {
    $data["status"] = "Success Delete Data";
}

// menampilkan hasil / output
echo json_encode($data);
