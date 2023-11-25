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
<h1> TAMBAH DATA KAMAR </h1>
    <form method="post" action="input_aksi_data_kamar.php">
        <table>
            <tr>
                <td> no_kamar  </td>
                <td><input type="number" name="no"></td>
            </tr>
            <tr>
                <td> tipe_kamar </td>
                <td><input type="text" name="tipe"></td>

            </tr>
            <tr>
                <td> harga </td>
                <td><input type="number" name="harga"></td>
            </tr>
            <tr>
                <td> status_ketersediaan </td>
                <td><input type="text" name="status"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
    </table>
</form>
<br><a href="data_kamar.php">Kembali</a></br>
</body>