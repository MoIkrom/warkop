<?php

$idUser = $_POST["id_user"];
$username = $_POST["username"];
$password = $_POST["password"];
$hp = $_POST["hp"];

// syntax menyambungkan ke database = mysqli_connect( "URL server" , "username" , "password" , "database")
$koneksi = mysqli_connect("localhost", "root", "", "db_tes_catatan2");


// Variabel data untuk menyimpan hasil query dari database 
$data = array();

// mysqli_query (koneksinya , SQL nya)
$querydb = mysqli_query($koneksi, " UPDATE users SET `username` = '$username' , `password` = '$password' , `hp` = '$hp' where id_user = '$idUser' ");

// Kondisi jika error / Berhasil
if ($error = mysqli_error($koneksi)) {
    $data["status"] = "error";
    $data["pesan"] = $error;
} else {
    $data["status"] = "success Edit Data";
}

// menampilkan hasil / output
echo (json_encode($data));
