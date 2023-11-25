<?php 
    include 'konek.php';

    $id=$_POST['idpe'];
    $nam =$_POST['na'];
    $pos =$_POST['pos'];
    $sif =$_POST['sif'];

    mysqli_query($koneksi, "update pegawai set id_pegawai='$id', nama='$nam', posisi='$pos', Shift='$sif' where id_pegawai='$id'");

    header('location:pegawai.php');
?>