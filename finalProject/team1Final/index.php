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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <title>Pemberian Sertifikat | CRUD</title>
        <title></title>
    </head>
    <body style="--bs-body-color: #333;">
    <div class="container-fluid">
        <div class="bg-warning p-2 mb-2">
            <h1 class="text-center">Data Peserta</h1>
            <div class="text-center" style="height: auto; --bs-bg-opacity: .6;">
            <?php foreach ($tema as $tm) : ?>
            <h3><?= $tm['tema']; ?> </h3>
            <?php endforeach; ?>
            </div>
        </div>
        <div class="container-fluid">
            <a class="btn btn-primary btn-sm" href="form_simpan.php">Tambah Peserta</a><br><br>
        </div>
        <table class="table table-bordered table-striped table-hover text-center">
            <thead class="bg-info">
            <tr>
                <th>No</th>
                <th>Id Peserta</th>
                <th>Nama</th>
                <th>Tanggal Kegiatan</th>
                <th>Peran</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <?php $no = 1; ?>
            <?php foreach ($peserta as $pst) : ?>
            <tbody>
            <tr>                
                <td><?= $no; ?></td>
                <td>Sert/DTS-VSGA.<?= $pst["id_peserta"]; ?></td>
                <td><?= $pst["nama"]; ?></td>
                <td><?= $pst["tgl_kegiatan"] ?></td>
                <td><?= $pst["peran"]; ?></td>
                <td>
                    <a class="btn btn-secondary btn-sm" href="hapus.php?id=<?= $pst['id_peserta']; ?>" onclick="return confirm('Anda yakin akan menghapus peserta ini?');">Hapus</a>
                    <a class="btn btn-success btn-sm" href="lihat.php?id=<?= $pst['id_peserta']; ?>">Lihat</a>
                    <a class="btn btn-primary btn-sm" href="cetak/cetak_sertifikat.php?id=<?= $pst['id_peserta']; ?>" target="_blank">Cetak Sertifikat</a>
                </td>
            </tr>
            </tbody>
            <?php $no++; ?>
            <?php endforeach; ?>
        </table>
    </div>
    </body>
</html>