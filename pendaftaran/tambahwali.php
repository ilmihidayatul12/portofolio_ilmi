<?php
include ('koneksi.php');
$hasil = mysqli_query($koneksi,"SELECT max(No_wali) as maxcode FROM wali");
$data = mysqli_fetch_assoc($hasil);
$No_wali = $data['maxcode'];
$No_wali++;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Wali</title>
</head>
<body>
    <h3>Input Data</h3>
    <form action=tambahsiswaproses.php method="POST">

    <table>
        <tr>
            <td>ID Wali</td>
            <td>:</td>
            <td><input type="text" name="No_wali" value="<?php echo $No_wali ; ?>" readonly></td>
        </tr>
        <tr>
            <td>NIS</td>
            <td>:</td>
            <td><select name="NIS">
                <?php
                include 'koneksi.php';
                $data = mysqli_query($koneksi, 'SELECT*FROM siswa ORDER BY NIS ASC');

                while ($a=mysqli($data)) {

                    ?>
                    <option value="<?php echo $a['NIS']; ?>"><?php
                    echo $A['NIS']; ?></option>
                    <?php
                }
                ?>
            </select>
            </td>
        </tr>
        <tr>
            <td>Nama Ayah</td>
            <td>:</td>
            <td><input type="text" name="Ayah"></td>
        </tr>
        <tr>
            <td>Pekerjaan Ayah</td>
            <td>:</td>
            <td><input type="text" name="Pekerjaan_Ayah"></td>
        </tr>
        <tr>
            <td>Nama Ibu</td>
            <td>:</td>
            <td><input type="text" name="Nama_Ibu"></td>
        </tr>
        <tr>
            <td>Pekerjaan Ibu</td>
            <td>:</td>
            <td><input type="text" name="Pekerjaan_Ibu"></td>
        </tr>
        <tr>
            <td>No telepon wali</td>
            <td>:</td>
            <td><input type="text" name="No_telepon_wali"></td>
        </tr>
        <tr>
            <td>Alamat wali</td>
            <td>:</td>
            <td><input type="text" name="Alamat_wali"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="reset" name="reset"></td>
            <td><input type="submit" name="submit" value="submit"></td>
        </tr>
    </table>
</body>
</html>