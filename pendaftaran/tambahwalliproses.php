<?php
include 'koneksi.php';
if (isset($_POST['$submit'])) {

$id_wali         = $_POST['Id_wali'];
$nis             = $_POST['NIS'];
$nama            = $_POST['Ayah'];
$nama_ayah       = $_POST['Pekerjaan_Ayah'];
$nama_ibu        = $_POST['Nama_Ibu'];
$nama_ibu        = $_POST['Pekerjaan_ibu'];
$no_telepon_wali = $_POST['No_telepon_wli'];
$alamat_wali     = $_POST['Alamat_wali'];

mysqli_query($koneksi, "INSERT INTO wali VALUE('$Id_wali', '$NIS', '$Ayah', '$Pekerjaan_Ayah', '$Nama_ibu', '$Pekerjaan_ibu', '$No_telepon_wali', '$Alamat_wali')");

echo '<script type="text/javascript">windows.alert("Data berhasil disimpan..!")</script>';

echo '<script type="text/javascript">window.location="index.php"</script>';
}
header("location:index.php");

?>