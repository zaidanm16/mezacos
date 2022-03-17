<?php
//deklarasi parameter koneksi database
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "mezacosdb";

//koneksi ke database
    $koneksi = mysqli_connect($host, $user, $pass, $db);

//cek koneksi
    if(!$koneksi) {
        die("Koneksi gagal : ".mysqli_connect_error());
    }
?>