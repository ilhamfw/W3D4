<?php
    include "koneksi.php";

    if(isset($_POST['submit'])){
        $id_profile = $_POST["id_profile"];
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $role = $_POST["role"];
        $availability = $_POST["availability"];
        $usia = $_POST["usia"];
        $lokasi = $_POST["lokasi"];
        $pengalaman = $_POST["pengalaman"];
        $email = $_POST["email"];
    }

    var_dump($first_name, $last_name, $role, $availability, $usia, $lokasi, $pengalaman, $email, $id_profile);

    //query update
    $sql = $conn->prepare("UPDATE profil SET 
    first_name=?,
    last_name=?,
    role=?,
    availability=?,
    usia=?,
    lokasi=?,
    pengalaman=?,
    email=?, 
    
    WHERE id_profile = ?");

    $sql->bind_param("ssssisis", $first_name, $last_name, $role, $availability, $usia, $lokasi, $pengalaman, $email, $id_profile);

    if($sql -> execute){
        echo "Update Data Berhasil";
    } else {
        echo "update data gagal" .$conn->error;
    }

    //tambahkan commit
    $conn-> commit();


?>