<?php
$hostname = "localhost";
$database = "todo";
$username = "root";
$password = "";

//sambungkan koneksi
$connect = mysqli_connect($hostname, $username, $password, $database);

// script cek koneksi   
if ($conn->connect_error){
    echo json_encode("Connection failed: " . $conn->connect_error);
}

?>