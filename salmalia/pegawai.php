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
    <h1> TABEL PEGAWAI </h1>
    <tr>
        <th> Id_pegawai </th>
        <th> Nama </th>
        <th> Posisi </th>
        <th> Shift </th>
        <th> Aksi </th>
    </tr>

<?php
    include "konek.php";
    $data=mysqli_query($koneksi, "SELECT * from pegawai");
    while($tampil=mysqli_fetch_array($data)){
?>
<tr>
    <td> <?php echo $tampil ['id_pegawai'] ?> </td>
    <td> <?php echo $tampil ['nama'] ?> </td>
    <td> <?php echo $tampil ['posisi'] ?> </td>
    <td> <?php echo $tampil ['Shift'] ?> </td>
    <td> <a href="hapus_pegawai.php?id=<?php echo $tampil ['id_pegawai']; ?>"> Hapus </a>
        <a href="edit_pegawai.php?id=<?php echo $tampil ['id_pegawai']; ?>"> Edit </a>
</tr>

<?php
}
?>

</table>
<a href="input_pegawai.php">Tambahkan Data</a>
<br><a href="home.html">Kembali</a></br>
</body>
</html>