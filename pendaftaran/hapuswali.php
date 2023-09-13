<?php
include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM siswa WHERE nis = '$id'");

echo '<script type="text/javascript">window.alert("Data berhasil disimpan..!")</script>';

echo '<script type="text/javascript">window.location="index.php"</script>';
header("location:index.php");

?>