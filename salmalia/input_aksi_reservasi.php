<?php
include 'konek.php';

$nok = $_POST['nok'];
$tp = $_POST['tk'];
$noti = $_POST ['no'];
$tg = $_POST ['tg'];
$tgl = $_POST ['tgl'];

mysqli_query($koneksi,"insert into reservasi values('$nok', '$tp', '$noti', '$tg', '$tgl')");
header("location:reservasi.php");
?>