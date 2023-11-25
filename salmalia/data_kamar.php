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
    <h1> TABEL DATA KAMAR </h1>
    <tr>
        <th> No_kamar </th>
        <th> Tipe_kamar </th>
        <th> Harga </th>
        <th> Status_ketersediaan </th>
        <th> Aksi </th>
    </tr>

<?php
    include "konek.php";
    $data=mysqli_query($koneksi, "select * from data_kamar");
    while($tampil=mysqli_fetch_array($data)){
?>
<tr>
    <td> <?php echo $tampil ['no_kamar'] ?> </td>
    <td> <?php echo $tampil ['tipe_kamar'] ?> </td>
    <td> <?php echo $tampil ['harga'] ?> </td>
    <td> <?php echo $tampil ['status_ketersediaan'] ?> </td>
    <td> <a href="hapus_data_kamar.php?id=<?php echo $tampil ['no_kamar']; ?>"> Hapus </a>
        <a href="edit_data_kamar.php?id=<?php echo $tampil ['no_kamar']; ?>"> Edit </a>
    </td>
</tr>

<?php
}
?>

</table>
<a href="input-data_kamar.php"> Tambahkan Data Baru </a>
<br><a href="home.html">Kembali</a></br>
</body>
</html>