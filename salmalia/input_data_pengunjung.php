<style> 
h1 {
    text-align: center;
    color: white;
}

body {
    background-image: url("hot.jpeg");
    background-attachment: fixed ;
    background-size: cover;
    color: white;
}
</style>

<body>
<h1> TAMBAH DATA PENGUNJUNG </h1>
    <form method="post" action="input_aksi_data_pengunjung.php">
        <table>
            <tr>
                <td> no_identitas </td>
                <td><input type="text" name="iden"></td>
            </tr>
            <tr>
                <td> nama </td>
                <td><input type="text" name="nama"></td>

            </tr>
            <tr>
                <td> alamat </td>
                <td><input type="text" name="al"></td>

            </tr>
            <tr>
                <td> no_telepon </td>
                <td><input type="number" name="no"></td>

            </tr>
            <tr>
                <td> email </td>
                <td><input type="text" name="em"></td>

            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
    </table>
</form>
<br><a href="data_pengunjung.php">Kembali</a></br>
</body>