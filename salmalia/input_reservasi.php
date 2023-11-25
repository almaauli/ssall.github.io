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
<h1> TAMBAH DATA RESERVASI </h1>
    <form method="post" action="input_aksi_reservasi.php">
        <table>
            <tr>
                <td> no_kamar </td>
                <td><input type="number" name="nok"></td>

            </tr>
            <tr>
                <td>  tipe_kamar </td>
                <td><input type="text" name="tk"></td>

            </tr>
            <tr>
                <td> no_identitas </td>
                <td><input type="number" name="no"></td>

            </tr>
            <tr>
                <td> tgl_masuk </td>
                <td><input type="date" name="tg"></td>

            </tr>
            <tr>
                <td> tgl_keluar </td>
                <td><input type="date" name="tgl"></td>

            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
    </table>
</form>
<br><a href="reservasi.php">Kembali</a></br>
</body>