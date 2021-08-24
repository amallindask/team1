<html>
<head>
    <title>Pemberian Sertifikat | CRUD</title>
</head>

<body>
    <h1>Tambah Peserta</h1>
    <form method="post" action="proses_simpan.php">
        <table cellpadding="8">
            <tr>
                <td>No Peserta</td>
                <td><input type="text" name="nopes"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type="radio" name="jenis_kel" value="Laki-laki"> Laki-laki
                    <input type="radio" name="jenis_kel" value="Perempuan"> Perempuan
                </td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input type="date" name="tgl_lahir"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat"></textarea></td>
            </tr>
            <tr>
                <td>Tanggal Kegiatan</td>
                <td><input type="date" name="tgl_kegiatan"></td>
            </tr>
        </table>
        
        <hr>
        <input type="submit" value="Simpan">
        <a href="index.php"><input type="button" value="Batal"></a>
    </form>
</body>
</html>