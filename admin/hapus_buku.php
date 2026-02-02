<?php
$id = $_GET['id'];
include '../koneksi.php';
$query =  mysqli_query($koneksi, "DELETE FROM buku WHERE id_buku= '$id'");
header("location:?halaman=data_buku");
if($data) {
echo"<script>alert('data berhasil dihapus'); window.location.assign('?halaman=data_buku');</script>";
}else{
echo"<script>alert('data gagal dihapus'); window.location.assign('?halaman=data_buku');</script>";
}