<?php

include "koneksi.php";

//Inisial variable
$id_profile = "";
$first_name = "";
$last_name = "";
$role = "";
$availability= "";
$usia = 0;
$lokasi = "";
$pengalaman = 0;
$email = "";

// Cek Koneksi

if ($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}

//Query untuk ambil data dari database
$sql = "SELECT * FROM profil WHERE id_profile = 1";
$result = $conn->query($sql);

// ambil data dari hasil query
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $id_profile = $row["id_profile"];
        $first_name = $row["first_name"];
        $last_name = $row["last_name"];
        $role = $row["role"];
        $availability = $row["availability"];
        $usia = $row["usia"];
        $lokasi = $row["lokasi"];
        $pengalaman = $row["pengalaman"];
        $email = $row["email"];
    }

    
} else {
    echo "0 results";
}
$conn->close();
?>