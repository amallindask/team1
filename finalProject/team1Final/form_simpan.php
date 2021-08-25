<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/tampilan-simpan.css">
    <title>Pemberian Sertifikat | CRUD</title>
</head>

<body>
    <h1 id="header">Tambah Peserta</h1>
    <form method="post" action="proses_simpan.php">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type="radio" name="gender" value="Laki-laki" required><label>Laki-Laki</label>
                    <input type="radio" name="gender" value="Perempuan" required><label>Perempuan</label>
                </td>
            </tr>
            <tr>
                <td>Tanggal Kegiatan</td>
                <td><input type="date" name="tgl_kegiatan" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat" rows="3" required></textarea></td>
            </tr>
            <tr>
                <td>Peran</td>
                <td>
                    <input type="radio" name="peran" value="Pemateri" required><label>Pemateri</label>
                    <input type="radio" name="peran" value="Peserta" required><label>Peserta</label>
                </td>
            </tr>
            <tr>
                <td>Tanggal Sertfikat</td>
                <td><input type="date" name="tgl_sertifikat" required></td>
            </tr>
        </table>
        
        <hr>
        <input type="submit" class="simpan" value="Simpan">
        <a href="index.php"><input type="button" class="batal" value="Batal"></a>
    </form>
</body>
</html>