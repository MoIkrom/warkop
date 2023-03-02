<?php

//  mysqli_connect( "URL server" , "username" , "password" , "database")
$koneksi = mysqli_connect("localhost", "root", "", "db_tes_catatan2");

// mysqli_query (koneksinya , SQL nya)
$sql = "SELECT * FROM users ORDER BY username";
$result = mysqli_query($koneksi, $sql);


// Variabel data untuk menyimpan hasil query dari database 
$data = array();

//  melakukan looping menggunakan while
 while ($row = mysqli_fetch_assoc($result))
 {
     $data[] = $row;
}

echo (json_encode($data));


// if ($error = mysqli_error($koneksi)) {
//     $data["status"] = "error";
//     $data["pesan"] = $error;
// } else {
//     $data["Data"] = "ini Data";
// }







