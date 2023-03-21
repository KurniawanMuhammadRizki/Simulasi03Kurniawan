<?php
include '../config/config.php';
$username = $_GET['username'];
$sql ="DELETE from user where username='$username'"  ;
if ($conn->query($sql)){
    echo "Data Berhasil Dihapus";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
header("location: index.php");
?>