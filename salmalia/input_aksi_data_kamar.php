<?php
include 'konek.php';

$no = $_POST['no'];
$tipe = $_POST['tipe'];
$harga =$_POST['harga'];
$status =$_POST['status'];

mysqli_query($koneksi,"insert into data_kamar values('$no', '$tipe', '$harga', '$status')");
header("location:data_kamar.php");
?>