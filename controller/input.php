<?php
include '../config/config.php';//menyisipkan file koneksi.php
$sql = "INSERT INTO user VALUE('$_POST[username]','$_POST[password]','$_POST[name]',
'$_POST[nohp]')";
if ($conn->query($sql)) {
  echo "Record baru berhasil ditambahkan";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
header("location: ../index.php");
?>