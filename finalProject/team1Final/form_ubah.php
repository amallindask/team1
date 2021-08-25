<html>
<head>
    <link rel="stylesheet" type="text/css" href="tampilan-simpan.css">
    <title>Pemberian Sertifikat | CRUD</title>
</head>

<body>    
    <h1 id="header">Ubah Data Sertifikat</h1>
    <form method="post" action="proses_simpan.php">
        <table>
            <tr>
                <td>No Sertifikat</td>
                <td><input type="text" name="no_sertifikat"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
                    <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
                </td>
            </tr>
            <tr>
                <td>Tanggal Sertifikat</td>
                <td><input type="date" name="tgl_sertifikat"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat" rows="5"></textarea></td>
            </tr>
            <tr>
                <td>Peran</td>
                <td>
                    <input type="radio" name="peran" value="Narasumber"> Narasumber
                    <input type="radio" name="peran" value="Peserta"> Peserta
                </td>
            </tr>
            <tr>
                <td>Tema</td>
                <td><textarea name="tema" rows="5"></textarea></td>
            </tr>
        </table>
        
        <hr>
        <input type="submit" class="simpan" value="Simpan">
        <a href="index.php"><input type="button" class="batal" value="Batal"></a>
    </form>
</body>
</html>