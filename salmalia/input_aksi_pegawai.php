<?php
include 'konek.php';

$id = $_POST['id_pegawai'];
$nama = $_POST['nama'];
$pos = $_POST['pos'];
$shift = $_POST ['Shift'];

mysqli_query($koneksi,"insert into pegawai values('$id', '$nama', '$pos', '$shift')");
header("location:pegawai.php");
?>