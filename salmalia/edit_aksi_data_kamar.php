<?php 
    include 'konek.php';

    $no=$_POST['nokm'];
    $ti =$_POST['tk'];
    $hg =$_POST['har'];
    $st =$_POST['sk'];

    mysqli_query($koneksi, "update data_kamar set no_kamar='$no', tipe_kamar='$ti', harga='$hg', status_ketersediaan='$st' where no_kamar='$no'");

    header('location:data_kamar.php');
?>