<?php
    // Menghubungkan ke database
        require 'koneksi.php';

    // Mengambil data dari URL
        $id = $_GET['id'];

    // Mengambil data dari database
        $pst = query("SELECT * FROM peserta WHERE id_peserta = $id") [0];

    // Mengubah peserta
        if (isset ($_POST["simpan_ubah"]) ) {
            if (peserta_ubah($_POST) > 0 ){
                echo "<script>
                        alert('BERHASIL');
                        document.location.href = 'index.php';
                    </script>";
            } else{
                echo "<script>
                        alert('BERHASIL');
                        document.location.href = 'peserta_ubah.php';
                    </script>";
              }
        }


?>

<html>
<head>    
    <title>Edit Data Peserta</title>
</head>
 
<body>
    <h1 id="header">Ubah Data Sertifikat</h1>
    <form action="" method="POST">
        <table>
            <tr>
                <td>Nama</td>
                <td><input class="form-control" type="text" name="nama" value="<?= $pst['nama']; ?>"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type="radio" class="form-check-input" name="gender" value="Laki-laki"><label> Laki-Laki</label>
                    <input type="radio" class="form-check-input" name="gender" value="Perempuan"><label> Perempuan</label>
                </td>
            </tr>            
            <tr>
                <td>Alamat</td>
                <td><textarea class="form-control" name="alamat" rows="3"><?= $pst['alamat']; ?></textarea></td>
            </tr>
            <tr>
                <td>Tema</td>
                <td><textarea class="form-control" name="tema" rows="3"><?= $pst['tema']; ?></textarea></td>
            </tr>
            <tr>
                <td>Peran</td>
                <td>
                    <input type="radio" class="form-check-input" name="peran" value="Pemateri"><label> Pemateri</label>
                    <input type="radio" class="form-check-input" name="peran" value="Peserta"><label> Peserta</label>
                </td>
            </tr>
            <tr>
                <td>Tanggal Kegiatan</td>
                <td><input type="date" name="tgl_kegiatan" value="<?= $pst['tgl_kegiatan']; ?>"></td>
            </tr>
            
            <tr>
                <td>Tanggal Sertfikat</td>
                <td><input type="date" name="tgl_sertifikat" value="<?= $pst['tgl_sertifikat']; ?>"></td>
            </tr>
        </table>
        <hr>
        <input type="submit" class="simpan" value="Simpan" name="simpan_ubah">
        <a href="lihat.php"><input type="button" class="batal" value="Batal"></a>
    </form>
</body>
</html>
