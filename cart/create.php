<?php
$barang = 'meja saya baru ';
//  $id = $_POST["id"];
 $namaBarang = $_POST["nama_barang"];

//  mysqli_connect( "URL server" , "username" , "password" , "database")
$koneksi = mysqli_connect("localhost", "root", "" , "kemnaker");


// Variabel data untuk menyimpan hasil query dari database 
$data = array();

// mysqli_query (koneksinya , SQL nya)
$querydb = mysqli_query($koneksi, " INSERT INTO  barang (nama_barang) values ('$namaBarang') ");


if($error = mysqli_error($koneksi)){
    $data["status"] = "error" ;
    $data["pesan"] = $error;
}
else {
    $data["status"] = "success"; 
    $data["Hasil"] = $namaBarang; 

}

// melakukan looping menggunakan while
// while ($row = mysqli_fetch_array($querydb))
// {
//     $data[] = $row;
// }

echo json_encode($data)

?>

