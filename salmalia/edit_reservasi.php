<h3> Edit Data Reservasi </h3>

<?php
include 'konek.php';
$id= $_GET['id'];
$data = mysqli_query($koneksi,"select *from reservasi where id_pembayaran='$id'");
while($tampil= mysqli_fetch_array($data)){
?>
<form method="post" action="edit_aksi_reservasi.php">
   <table>
      <tr>
         <td> id_pembayaran </td>
         <td>
            <input type="number" name="idp" value="<?php echo $tampil['id_pembayaran']; ?>">
         </td>
      </tr>
      <tr>
         <td> no_kamar </td>
         <td>
            <input type="number" name="nok" value="<?php echo $tampil['no_kamar']; ?>">
         </td>
      </tr>
      <tr>
         <td> tipe_kamar </td>
         <td>
            <input type="text" name="tk" value="<?php echo $tampil['tipe_kamar']; ?>">
         </td>
      </tr>
      <tr>
         <td> no_identitas </td>
         <td>
            <input type="text" name="nid" value="<?php echo $tampil ['no_identitas']; ?>">
         </td>
      </tr>
      <tr>
         <td> tgl_masuk </td>
         <td> 
            <input type="text" name="tgm" value="<?php echo $tampil ['tgl_masuk']; ?>">
         </td>
      </tr>
      <tr>
         <td> tgl_keluar </td>
         <td>
            <input type="text" name="tgk" value="<?php echo $tampil ['tgl_keluar']; ?>">
         </td>
      </tr>
      <tr>
         <td>
            <input type="submit" value="SIMPAN">
         </td>
      </tr>
   </table>
<form>

<?php
}
?>