<?php
$hostname = "localhost";
$database = "todo";
$username = "root";
$password = "";

//sambungkan koneksi
$connect = mysqli_connect($hostname, $username, $password, $database);

// script cek koneksi   
if (!$connect) {
    die("Koneksi Tidak Berhasil: " . mysqli_connect_error());
}

?>