<h3> Edit Data Pegawai </h3>

<?php
include 'konek.php';
$id= $_GET['id'];
$data = mysqli_query($koneksi,"select * from pegawai where id_pegawai='$id'");
while($tampil= mysqli_fetch_array($data)){
?>
<form method="post" action="edit_aksi_pegawai.php">
    <table>
       <tr>
          <td> Id_pegawai </td>
          <td>
            <input type="number" name="idpe" value="<?php echo $tampil['id_pegawai']; ?>">
          </td>
       </tr>
       <tr>
          <td> Nama </td>
          <td>
            <input type="text" name="na" value="<?php echo $tampil['nama']; ?>">
          </td>
       </tr>
       <tr>
          <td> posisi </td>
          <td>
            <input type="text" name="pos" value="<?php echo $tampil['posisi']; ?>">
          </td>
       </tr>
       <tr>
          <td> shift </td>
          <td>
            <input type="text" name="sif" value="<?php echo $tampil['Shift']; ?>">
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