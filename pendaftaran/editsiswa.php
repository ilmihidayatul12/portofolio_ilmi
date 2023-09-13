<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Siswa</title>
</head>
<body>
    <h3>Edit Data</h3>
    <form action=editsiswa.php method="POST">
<?php
include 'koneksi.php' ;
$id = $_GET['id'];
$data = mysqli_query($koneksi, 'SELECT*FROM siswa WHERE nis=$id')
?>

    <table>
        <tr>
            <td>NIS</td>
            <td>:</td>
            <td><input type="text" name="nis" value="<?php echo $a['NIS']; ?>"></td>
        </tr>
        <tr>
            <td>Nama Siswa</td>
            <td>:</td>
            <td><input type="text" name="nama" value="<?php echo $a['Nama_siswa']; ?>">></td></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><select name="jenis_kelamin">
                <option value="<?php echo $Jenis_kelamin; ?>" selected><?php echo $a['Jenis_kelamin']; ?>"</option>
                <option value="laki-laki">laki laki</option>
                <option value="perempuan">perempuan</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>No Telepon</td>
            <td>:</td>
            <td><input type="text" name="no_telepon" value="<?php echo $a['No_telepon']; ?>">></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type="text" name="alamat" value="<?php echo $a['Alamat']; ?>">></td></td>
        </tr>
        <tr>
        <td colspan="3">
            <a href="index.php"><button>kembali</button></a>
            <input type="reset" name="reset">
            <input type="submit" name="submit" value="submit"></td>
        </tr>
    </table>
</body>
</html>