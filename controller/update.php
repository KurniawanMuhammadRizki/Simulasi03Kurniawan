<?php
include '../config/config.php';
$sql = "UPDATE user SET name ='$_POST[name]', password='$_POST[password]', nohp='$_POST[nohp]' where username='$_POST[username]' ;" ;
if ($conn->query($sql)){
    echo "Data Berhasil Diubah";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
header("location: ../index.php");
?>