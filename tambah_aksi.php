<?php 
// koneksi database
include 'koneksi.php';
 

$nama = $_POST['nama'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];
 if (!empty($nama) || !empty($no_hp) || !empty($alamat)) {
// menginput data ke database
mysqli_query($koneksi,"insert into pengunjung values('','$nama','$no_hp','$alamat')");
 }
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>