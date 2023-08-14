<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "class_ranks";

$koneksi = mysqli_connect($hostname, $username, $password, $database);

if($koneksi->connect_error) {
    var_dump($koneksi->connect_error);
    die("Koneksi Bermasalah");
}
// echo "Koneksi Berhasil";

// die(var_dump($koneksi));

$sql = "SELECT * FROM students";
$result = $koneksi->query($sql);
$data = $result->fetch_all(MYSQLI_ASSOC);
// $data_satuan = $result->fetch_assoc();

die(var_dump($data));
// var_dump($data_satuan); 

?>