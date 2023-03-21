<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "simulasi3";
// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);
// Cek Koneksi
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}
?>