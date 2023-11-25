<?php
include 'konek.php';

$id= $_GET ['id'];
mysqli_query($koneksi,"delete from reservasi where id_pembayaran ='$id'");

header("location: reservasi.php");
?>