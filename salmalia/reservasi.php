<html>
<table border="1">
<head>
    <style>
         /* Gaya umum untuk tabel */
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
    <h1> TABEL RESERVASI </h1>
    <tr>
        <th> Id_pembayaran </th>
        <th> No_kamar </th>
        <th> Tipe_kamar </th>
        <th> No_identitas </th>
        <th> Tgl_masuk </th>
        <th> Tgl_keluar </th>
        <th> Aksi </th>
    </tr>

<?php
    include "konek.php";
    $data=mysqli_query($koneksi, "SELECT * from reservasi");
    while($tampil=mysqli_fetch_array($data)){
?>
<tr>
    <td> <?php echo $tampil ['id_pembayaran'] ?> </td>
    <td> <?php echo $tampil ['no_kamar'] ?> </td>
    <td> <?php echo $tampil ['tipe_kamar'] ?> </td>
    <td> <?php echo $tampil ['no_identitas'] ?> </td>
    <td> <?php echo $tampil ['tgl_masuk'] ?> </td>
    <td> <?php echo $tampil ['tgl_keluar'] ?> </td>
    <td> <a href="hapus_reservasi.php?id=<?php echo $tampil ['id_pembayaran']; ?>"> Hapus </a>
    <a href="edit_reservasi.php?id=<?php echo $tampil ['id_pembayaran']; ?>"> Edit </a>
</tr>

<?php
}
?>

</table>
<a href="input_reservasi.php">Tambahkan Data</a>
<br><a href="home.html">Kembali</a></br>

</body>
</html>