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
<h1> TAMBAH DATA PEGAWAI </h1>
    <form method="post" action="input_aksi_pegawai.php">
        <table>
            <tr>
                <td> id_pegawai </td>
                <td><input type="text" name="id_pegawai"></td>
            </tr>
            <tr>
                <td> nama </td>
                <td><input type="text" name="nama"></td>

            </tr>
            <tr>
                <td> posisi </td>
                <td><input type="text" name="pos"></td>

            </tr>
            <tr>
                <td> Shift </td>
                <td><input type="text" name="Shift"></td>

            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
    </table>
</form>
<br><a href="pegawai.php">Kembali</a></br>
</body>