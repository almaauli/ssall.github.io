<html>
<table border="1">
<head>
    <style>
      table {
  border-collapse: collapse;
  width: 100%;
  margin-bottom: 20px;
}

/* Gaya untuk sel header tabel */
th, td {
  padding: 12px 15px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

th {
  background-color: #f2f2f2;
}

/* Gaya alternatif untuk baris ganjil */
tr:nth-child(odd) {
  background-color: #f9f9f9;
}

tr:nth-child(even) {
  background-color: #c5c5c5;
}

h1 {
    text-align: center;
    color: white;
}

body {
    background-image: url("hot.jpeg");
    background-attachment: fixed ;
    background-size: cover;
}
        </style>
</head>
<body>
    <h1> TABEL DATA PENGUNJUNG </h1>
    <tr>
        <th> No_identitas </th>
        <th> Nama </th>
        <th> Alamat </th>
        <th> No telepon </th>
        <th> Email </th>
        <th> Aksi </th>
    </tr>

<?php
    include "konek.php";
    $data=mysqli_query($koneksi, "SELECT * from data_pengunjung");
    while($tampil=mysqli_fetch_array($data)){
?>
<tr>
    <td> <?php echo $tampil ['no_identitas'] ?> </td>
    <td> <?php echo $tampil ['nama'] ?> </td>
    <td> <?php echo $tampil ['alamat'] ?> </td>
    <td> <?php echo $tampil ['no_telepon'] ?> </td>
    <td> <?php echo $tampil ['email'] ?> </td>
    <td> <a href="hapus_data_pengunjung.php?id=<?php echo $tampil ['no_identitas']; ?>"> Hapus </a>
        <a href="edit_data_pengunjung.php?id=<?php echo $tampil ['no_identitas']; ?>"> Edit </a>
</tr>

<?php
}
?>

</table>
<a href="input_data_pengunjung.php">Tambahkan Data</a>
<br><a href="home.html">Kembali</a></br>
</body>
</html>