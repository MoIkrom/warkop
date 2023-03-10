<?php

$username = $_POST["username"];
$password = $_POST["password"];

// syntax menyambungkan ke database = mysqli_connect( "URL server" , "username" , "password" , "database")
$koneksi = mysqli_connect("localhost", "root", "", "db_tes_catatan2");

// mysqli_query (koneksinya , SQL nya)
$sql = "SELECT * FROM users where username='$username' and `password`='$password' ";
$result = mysqli_query($koneksi, $sql);


// Variabel data untuk menyimpan hasil query dari database 
$data = array();

//  melakukan looping menggunakan while
// while ($row = mysqli_fetch_assoc($result)) {
//     $data[] = $row;
// }

// Menampilkan Hasil

if (mysqli_num_rows($result) > 0) {
    $row =  mysqli_fetch_assoc($result);
    $data["Message"] = "Success";
    $data["Status"] = "200";
    $data["user"] = $row;
} else {
    $data["Message"] = "Username or Password Wrong";
    $data["Status"] = "404";
}


// menampilkan hasil / output
echo (json_encode($data));
