<?php

$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "portofolio";

//membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

//Pengecekan 

if ($conn->connect_error){
    die("Koneksi Gagal". $conn->connect_error);
}

// echo "Koneksi Berhasil";

?>