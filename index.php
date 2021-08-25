<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Pemberian Sertifikat | CRUD</title>
  </head>
  <body>
    <?php 
    // Menghubungkan ke database
        require 'koneksi.php';

    // Mengambil data dari database peserta
        $peserta = mysqli_query($conn, "SELECT * FROM peserta");
        $tema    = mysqli_query($conn, "SELECT * FROM tema");

    ?>
    <div class="container-fluid">
        <div class="p-5 mb-5 bg-success p-2 text-white bg-opacity-75 shadow-sm">
            <h1 class="text-center" style="color: white;">Data Pemberian Sertifikat</h1>
            <div class="text-center" style="height: auto; --bs-bg-opacity: .6;">
            <?php foreach ($tema as $tm) : ?>
            <h3 style="color: white;"><?= $tm['tema']; ?> </h3>
            <?php endforeach; ?>
            </div>
        </div>
        <div class="header">
            <a class="btn btn-primary btn-sm shadow-sm" style="float: right;" href="form_simpan.php">Tambah Data</a><br><br>
        </div>
        <table class="table table-bordered table-hover table-responsive text-center">
            <thead class="bg-success p-2 text-white bg-opacity-50">
            <tr>
                <th>No</th>
                <th>Id Peserta</th>
                <th class="col-4">Nama</th>
                <th>Tanggal Kegiatan</th>
                <th>Peran</th>
                <th class="col-3">Aksi</th>
            </tr>
            </thead>
            <?php $no = 1; ?>
            <?php foreach ($peserta as $pst) : ?>
            <tbody>
            <tr>                
                <td><?= $no; ?></td>
                <td>Sert/DTS-VSGA.<?= $pst["id_peserta"]; ?></td>
                <td><?= $pst["nama"]; ?></td>
                <td style="width: 10%;"><?= $pst["tgl_kegiatan"] ?></td>
                <td><?= $pst["peran"]; ?></td>
                <td>
                    <a class="btn btn-primary btn-sm" style="font-size: 10px;" href="lihat.php?id=<?= $pst['id_peserta']; ?>">Lihat</a>
                    <a class="btn btn-warning btn-sm" style="font-size: 10px;" href="ubah.php?id=<?= $pst['id_peserta']; ?>">Ubah</a>
                     <a class="btn btn-danger btn-sm" style="font-size: 10px;" href="hapus.php?id=<?= $pst['id_peserta']; ?>" onclick="return confirm('Anda yakin akan menghapus peserta ini?');">Hapus</a>
                    <a class="btn btn-success btn-sm" style="font-size: 10px;" href="cetak/cetak_sertifikat.php?id=<?= $pst['id_peserta']; ?>" target="_blank">Cetak Sertifikat</a>
                </td>
            </tr>
            </tbody>
            <?php $no++; ?>
            <?php endforeach; ?>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>