<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


    include "koneksi.php";

    $sql = "INSERT INTO profil (
        -- id_profile, 
        first_name, 
        last_name, 
        role, 
        availability, 
        usia, 
        lokasi, 
        pengalaman, 
        email)
    VALUES (
        -- '1',
        'Ilham', 
        'Fiqri', 
        'Back End Developer', 
        'Fulltime',
         '19',
        'Jakarta',
        '2',
         'ilham.fw18@gmail.com');
    
    
    ";

    //Cek Query berhasil atau tidak
    if($conn->query($sql) == TRUE){
        echo "Insert Data telah berhasil";

    }else{
        echo "Insert data gagal";

    }

?>