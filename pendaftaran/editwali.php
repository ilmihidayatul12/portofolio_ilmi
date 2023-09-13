<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Wali</title>
</head>
<body>
    <h3>Edit Data</h3>
    <form action=tambahsiswaproses.php method="POST">

    <table>
        <tr>
            <td>ID Wali</td>
            <td>:</td>
            <td><input type="text" name="Id_wali" value="<?php echo $a['Id_wali'] ; ?>"></td>
        </tr>
        <tr>
            <td>NIS</td>
            <td>:</td>
            <td><select name="NIS">
                    <option value="<?php echo $a['NIS']; ?>"></option>
            </select>
            </td>
        </tr>
        <tr>
            <td>Nama Ayah</td>
            <td>:</td>
            <td><input type="text" name="Ayah"  value="<?php echo $a['Ayah']; ?>">></td>
        </tr>
        <tr>
            <td>Pekerjaan Ayah</td>
            <td>:</td>
            <td><input type="text" name="Pekerjaan_Ayah"  value="<?php echo $a['Pekerjaan_Ayah']; ?>">></td>
        </tr>
        <tr>
            <td>Nama Ibu</td>
            <td>:</td>
            <td><input type="text" name="Nama_Ibu"  value="<?php echo $a['Nama_ibu']; ?>">></td>
        </tr>
        <tr>
            <td>Pekerjaan Ibu</td>
            <td>:</td>
            <td><input type="text" name="Pekerjaan_Ibu"  value="<?php echo $a['Pekerjaan_ibu']; ?>">></td>
        </tr>
        <tr>
            <td>No telepon wali</td>
            <td>:</td>
            <td><input type="text" name="No_telepon_wali"  value="<?php echo $a['No_telepon_wali']; ?>">></td>
        </tr>
        <tr>
            <td>Alamat wali</td>
            <td>:</td>
            <td><input type="text" name="Alamat_wali"  value="<?php echo $a['Alamat_wali']; ?>">></td>
        </tr>
        <tr>
            <td colspan="2"><input type="reset" name="reset"></td>
            <td><input type="submit" name="submit" value="submit"></td>
        </tr>
    </table>
</body>
</html>