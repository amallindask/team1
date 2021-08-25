<?php
    // Menghubungkan ke database
        require 'koneksi.php';

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

    // Mengambil data dari database
        $peserta = query("SELECT * FROM peserta");
?>

<html>
<head>    
    <title>Edit Data Peserta</title>
</head>
 
<body>
    <h1 id="header">Ubah Data Sertifikat</h1>
    <form action="" method="POST">
        <?php foreach ($peserta as $pst) : ?>
        <table>
            <tr>
                <td><input type="hidden" name="id_peserta" value="<?= $pst["id_peserta"]; ?>"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?= $pst["nama"]; ?>"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="Laki-laki" checked> Laki-laki
                    <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
                </td>
            </tr>
            <tr>
                <td>Tanggal Kegiatan</td>
                <td><input type="date" name="tgl_kegiatan" value="<?= $pst["tgl_kegiatan"]; ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat" rows="2"><?= $pst["alamat"]; ?></textarea></td>
            </tr>
            <tr>
                <td>Peran</td>
                <td>
                    <input type="radio" name="peran" value="Pemateri" checked=""><label>Pemateri</label>
                    <input type="radio" name="peran" value="Peserta"><label>Peserta</label>
                </td>
            </tr>
            <tr>
                <td>Tanggal Sertfikat</td>
                <td><input type="date" name="tgl_sertifikat" value="<?= $pst["tgl_sertifikat"]; ?>"></td>
            </tr>
        </table>
        <?php endforeach; ?>
        <hr>
        <input type="submit" class="simpan" value="Simpan" name="simpan_ubah">
        <a href="lihat.php"><input type="button" class="batal" value="Batal"></a>
    </form>
</body>
</html>
