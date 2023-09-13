<?php
include 'koneksi.php';
if (isset($_POST['$submit'])) {

$nis            = $_POST['NIS'];
$nama           = $_POST['Nama'];
$jenis_kelamin  = $_POST['Jenis_kelamin'];
$no_telepon     = $_POST['No_telepon'];
$alamat         = $_POST['Alamat'];

mysqli_query($koneksi, "INSERT INTO siswa VALUE('$NIS', '$Nama', '$Jenis_kelamin', '$No_telepon', '$Alamat')");

echo '<script type="text/javascript">window.alert("Data berhasil disimpan..!")</script>';

echo '<script type="text/javascript">window.location="index.php"</script>';
}
header("location:index.php");

?>