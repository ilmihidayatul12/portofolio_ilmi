<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" crossotigin="anonymous">

    <title>Aplikasi Pendaftaran Siswa</title>
    <nav class="navbar navbar-expand-lg bg-warning">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Imelita</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline- warning" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

</head>
<body>
<div class="p-3 mb-2 text-light" style="background-color: #FF3300;">
    <div class="container">
        <div class="row">
           <div class="col">
<h2>Tabel User</h2>
<button class="btn btn-secondary" type="submit">user siswa</button>
<button class="btn btn-secondary" type="submit">user admin</button>
<table class="table table-warning table-striped">
    <tr class="table-dark">
        <th>No</th>
        <th>Id_user</th>
        <th>Username</th>
        <th>Password</th>
        <th>Level</th>
        <th>Option</th>
    </tr>

<?php
include ('koneksi.php');
$data = mysqli_query($koneksi, 'SELECT*FROM user');
$no = 1;
while ($a=mysqli_fetch_array($data)) {
?>

    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $a['No_user']; ?></td>
        <td><?php echo $a['Username']; ?></td>
        <td><?php echo $a['Password']; ?></td>
        <td><?php echo $a['Level']; ?></td>
        <td><a href="edit_user.php?id=<?php echo $a['No_user']; ?>">edit</a>
        <a href="hapus_user.php?id=<?php echo $a['No_user']; ?>">hapus</a></td>
    </tr>

<?php 
}
?>
</table>
    </div>
        </div>
           </div>
           <div class="container">
<h2>Tabel Siswa</h2>
<button class="btn btn-primary" type="submit">user siswa</button>
<a href="tambahsiswa.php"><button>+siswa</button></a>
<table class="table table-warning table-striped">
    <tr class="table-dark">
        <th>No</th>
        <th>NIS</th>
        <th>Nama</th>
        <th>jenis kelamin</th>
        <th>No telepon</th>
        <th>Alamat</th>
        <th>Option</th>
    </tr>
<?php
include ('koneksi.php');
$data = mysqli_query($koneksi, 'SELECT*FROM siswa ORDER BY NIS ASC');
$no = 1;
if (mysqli_num_rows($data)==0) {
    echo"<tr><td colspan='7'>Tidak ada data</td></tr>";
}else {
    while ($a=mysqli_fetch_array($data)) {
        ?>

        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $a['NIS']; ?></td>
            <td><?php echo $a['Nama']; ?></td>
            <td><?php echo $a['Jenis_kelamin']; ?></td>
            <td><?php echo $a['No_telepon']; ?></td>
            <td><?php echo $a['Alamat']; ?></td>
            <td><a href="edit_siswa.php?id=<?php echo $a['NIS']; ?>">edit</a>
            <a href="hapus_siswa.php?id=<?php echo $a['NIS']; ?>">hapus</a></td>
        </tr>
    
    <?php
    } 
}
?>
</table> 
</div>
<div class="container">
<h2>Tabel Wali</h2>
<button class="btn btn-primary" type="submit">user wali</button>
<a href="tambahwali.php"><button>+wali siswa</button></a>
<table class="table table-warning table-striped">
    <tr class="table-dark">
        <th>No</th>
        <th>No wali</th>
        <th>NIS</th>
        <th>Nama Ayah</th>
        <th>Pekerjaan Ayah</th>
        <th>Nama Ibu</th>
        <th>Pekerjaan Ibu</th>
        <th>No telepon wali</th>
        <th>Alamat wali</th>
        <th>opsion</th>
    </tr>
<?php
include ('koneksi.php');
$data = mysqli_query($koneksi, 'SELECT*FROM wali');
$no = 1;
if (mysqli_num_rows($data)==0) {
    echo"<tr><td colspan='10'>Tidak ada data</td></tr>";
}else {
while ($a=mysqli_fetch_array($data)) {
?>

    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $a['No_wali']; ?></td>
        <td><?php echo $a['NIS']; ?></td>
        <td><?php echo $a['Ayah']; ?></td>
        <td><?php echo $a['Pekerjaan_Ayah']; ?></td>
        <td><?php echo $a['Nama_Ibu']; ?></td>
        <td><?php echo $a['Pekerjaan_Ibu']; ?></td>
        <td><?php echo $a['No_telepon_wali']; ?></td>
        <td><?php echo $a['Alamat_wali']; ?></td>
        <td><a href="edit_wali.php?id=<?php echo $a['No_wali']; ?>">edit</a>
        <a href="hapus_wali.php?id=<?php echo $a['No_wali']; ?>">hapus</a></td>
    </tr>

<?php 
}
}
?>
</table>
<script src="assets/js/bootstrap.bundle.min.js"></script>
</div>
</div>
</body>

</html>