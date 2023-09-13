<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa</title>
</head>
<body>
    <h3>Input Data</h3>
    <form action=tambahsiswaproses.php method="POST">
    <table>
        <tr>
            <td>NIS</td>
            <td>:</td>
            <td><input type="text" name="nis"></td>
        </tr>
        <tr>
            <td>Nama Siswa</td>
            <td>:</td>
            <td><input type="text" name="nama"></td></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><select name="jenis_kelamin">
                <option value="laki-laki">laki laki</option>
                <option value="perempuan">perempuan</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>No Telepon</td>
            <td>:</td>
            <td><input type="text" name="no_telepon"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type="text" name="alamat"></td></td>
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