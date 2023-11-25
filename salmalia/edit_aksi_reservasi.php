<?php
    include 'konek.php';
    
    $idp =$_POST['idp'];
    $nok =$_POST['nok'];
    $tk =$_POST['tk'];
    $nid =$_POST['nid'];
    $tgm =$_POST['tgm'];
    $tgk =$_POST['tgk'];

    mysqli_query($koneksi, "update reservasi set id_pembayaran= '$idp', no_kamar='$nok', tipe_kamar='$tk', no_identitas='$nid', tgl_masuk='$tgm',tgl_keluar='$tgk' where id_pembayaran= '$idp'");
    header('location:reservasi.php');
?>