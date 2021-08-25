<?php 
    // Menghubungkan ke database
        require 'koneksi.php';

    // Mengambil data dari database peserta
        $peserta = mysqli_query($conn, "SELECT * FROM peserta");
        $tema    = mysqli_query($conn, "SELECT * FROM tema");

?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/tampilan.css">
        <title>Pemberian Sertifikat | CRUD</title>
        <title></title>
    </head>
    <body>
        <h1 id="header">Data Peserta</h1>
        <a class="btn" href="form_simpan.php">Tambah Peserta</a><br><br>
        
        <center>
            <label>Tema Kegiatan: </label> <br>
            <?php foreach ($tema as $tm) : ?>
            <h3><?= $tm['tema']; ?> </h3>
            <?php endforeach; ?>
        </center>
        <table>
            <tr>
                <th>No</th>
                <th>Id Peserta</th>
                <th>Nama</th>
                <th>Tanggal Kegiatan</th>
                <th>Peran</th>
                <th>Aksi</th>
            </tr>
            <?php $no = 1; ?>
            <?php foreach ($peserta as $pst) : ?>
            <tr>                
                <td><?= $no; ?></td>
                <td>Sert/DTS-VSGA.<?= $pst["id_peserta"]; ?></td>
                <td><?= $pst["nama"]; ?></td>
                <td><?= $pst["tgl_kegiatan"] ?></td>
                <td><?= $pst["peran"]; ?></td>
                <td>
                    <a href="hapus.php?id=<?= $pst['id_peserta']; ?>" onclick="return confirm('Anda yakin akan menghapus peserta ini?');">Hapus</a>
                    <a href="lihat.php?id=<?= $pst['id_peserta']; ?>">Lihat</a>
                    <a href="cetak/cetak_sertifikat.php?id=<?= $pst['id_peserta']; ?>" target="_blank">Cetak Sertifikat</a>
                </td>
            </tr>
            <?php $no++; ?>
            <?php endforeach; ?>
        </table>
    </body>
</html>