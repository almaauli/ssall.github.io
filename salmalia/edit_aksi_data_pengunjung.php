<?php 
    include 'konek.php';

    $noi =$_POST['noi'];
    $nam =$_POST['nam'];
    $ala =$_POST['ala'];
    $not =$_POST['not'];
    $emay =$_POST['emay'];

    mysqli_query($koneksi, "update data_pengunjung set no_identitas='$noi', nama='$nam', alamat='$ala', no_telepon='$not', email='$emay' where no_identitas='$noi'");
    header('location:data_pengunjung.php');
?>