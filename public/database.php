<?php

// echo "hello";

$host = 'localhost';
$username = 'root';
$password = '';

$database = 'pwebpr-a';
$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error){
  die("koneksi database gagal: ".$conn->connect_error);
}
?>



