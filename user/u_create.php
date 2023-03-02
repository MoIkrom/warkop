<?php

$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$hp = $_POST["hp"];

//  mysqli_connect( "URL server" , "username" , "password" , "database")
$koneksi = mysqli_connect("localhost", "root", "", "db_tes_catatan2");


// Variabel data untuk menyimpan hasil query dari database 
$data = array();

// mysqli_query (koneksinya , SQL nya)
$querydb = mysqli_query($koneksi, " INSERT INTO  users (username , email, password , hp) VALUES ('$username','$email','$password','$hp') ");

if ($error = mysqli_error($koneksi)) {
    $data["status"] = "error";
    $data["pesan"] = $error;
} else {
    $data["status"] = "success";
}

echo json_encode($data);
