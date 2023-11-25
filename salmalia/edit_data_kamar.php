<h3> Edit Data Kamar </h3>

<?php
include 'konek.php';
$id= $_GET['id'];
$data = mysqli_query($koneksi,"select * from data_kamar where no_kamar='$id'");
while($tampil= mysqli_fetch_array($data)){
?>
<form method="post" action="edit_aksi_data_kamar.php">
    <table>
       <tr>
          <td> no_kamar </td>
          <td>
            <input type="number" name="nokm" value="<?php echo $tampil['no_kamar']; ?>">
          </td>
       </tr>
       <tr>
          <td> tipe_kamar </td>
          <td>
            <input type="text" name="tk" value="<?php echo $tampil['tipe_kamar']; ?>">
          </td>
       </tr>
       <tr>
          <td> harga </td>
          <td>
            <input type="text" name="har" value="<?php echo $tampil['harga']; ?>">
          </td>
       </tr>
       <tr>
          <td> status_ketersediaan </td>
          <td>
            <input type="text" name="sk" value="<?php echo $tampil['status_ketersediaan']; ?>">
          </td>
       </tr>
       <tr>
        <td>
            <input type="submit" value="simpan">
        </td>
       </tr>
    </table>
</form>

<?php
}
?>