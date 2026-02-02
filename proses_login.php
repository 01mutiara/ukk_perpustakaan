<?php
 if(isset($_POST['tombol'])) {
 include 'koneksi.php'; 
 $username = $_POST['username'];
 $password = $_POST['password']; 
$query = "SELECT * FROM admin WHERE username= '$username' AND password='$password'"; 
$data = mysqli_query($koneksi, $query); 
var_dump($data);

if(mysqli_num_rows($data)>0){ 
$data = mysqli_fetch_array($data); 
session_start(); 
$_SESSION['id_admin'] = $data['id_admin'];
$_SESSION['username'] = $data['username'];
$_SESSION['nama_admin'] = $data['nama_admin'];
header("Location:admin/dashboard.php");
}else{
echo"<script>alert('Login Gagal, Username / Password Salah'); window.location.assign('login-admin.php);</script>";
}
}
?>