<?php
include 'konek.php';

$id = $_POST['iden'];
$nama = $_POST['nama'];
$ala = $_POST['al'];
$notl = $_POST ['no'];
$emi = $_POST ['em'];

mysqli_query($koneksi,"insert into data_pengunjung values('$id', '$nama', '$ala', '$notl', '$emi')");
header("location:data_pengunjung.php");
?>