<h3> Edit Data Pengunjung </h3>

<?php
include 'konek.php';
$id= $_GET['id'];
$data = mysqli_query($koneksi,"select * from data_pengunjung where no_identitas='$id'");
while($tampil= mysqli_fetch_array($data)){
?>
<form method="post" action="edit_aksi_data_pengunjung.php">
    <table>
       <tr>
          <td> no_identitas </td>
          <td>
            <input type="number" name="noi" value="<?php echo $tampil['no_identitas']; ?>">
          </td>
       </tr>
       <tr>
          <td> nama </td>
          <td>
            <input type="text" name="nam" value="<?php echo $tampil['nama']; ?>">
          </td>
       </tr>
       <tr>
          <td> alamat </td>
          <td>
            <input type="text" name="ala" value="<?php echo $tampil['alamat']; ?>">
          </td>
       </tr>
       <tr>
          <td> no_telepon </td>
          <td>
            <input type="number" name="not" value="<?php echo $tampil['no_telepon']; ?>">
          </td>
       </tr>
       <tr>
          <td> email </td>
          <td>
            <input type="text" name="emay" value="<?php echo $tampil['email']; ?>">
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