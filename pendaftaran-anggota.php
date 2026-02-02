<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pendaftaran Anggota</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light"> 
<div class="vh-100 row justify-content-center align-items-center"> 
<form method="post" action="proses_anggota.php" class="col-md-3 border p-4 bg-white rounded-4">
<h4 class="text-center">Pendaftaran Anggota</h4>
<input name="nis" type="number" class="form-control mb-3" placeholder="NIS"> 
<input name="nama_anggota" type="text" class="form-control mb-3" placeholder="Nama Anggota">
<input name="username" type="text" class="form-control mb-3" placeholder="Username">
<input name="password" type="text" class="form-control mb-3" placeholder="Password">
<input name="kelas" type="text" class="form-control mb-3" placeholder="Kelas">
<button type="submit" name="tombol" class="btn btn-success w-100 mb-2">Daftar</button> 
<a href="login-admin.php" class="text-decoration-none">Login sebagai admin</a><br>
<a href="login-anggota.php" class="text-decoration-none">Login sebagai Anggota</a>
</form>
</div>

</body>
</html>
<?php
if(isset($_POST['tombol'])){
include 'koneksi.php';
$nis= $_POST['nis'];
$nama_anggota=$_POST['nama_anggota'];
$username= $_POST['username'];
$password= $_POST['password'];
$kelas= $_POST['kelas'];
$query="INSERT INTO anggota (nis,nama_anggota, username, password, kelas) VALUES ('$nis', '$nama_anggota', '$username', '$pas $password','$kelas')";
$data= mysqli_query($koneksi, $query);
if($data) {
session_start();
$_SESSION['id_anggota'] = mysqli_insert_id($koneksi);
$_SESSION['username'] = $username;
$_SESSION['password'] = $password;
$_SESSION['nama_anggota'] = $nama_anggota;
echo"<script>alert(' Pendaftaran Berhasil'); window.location.assign('anggota/dashboard.php');</script>";
}else{
echo"<script>alert('X Pendaftaran Gagal'); window.location.assign('pendaftaran-anggota.php'); </script>";
}
}
?>