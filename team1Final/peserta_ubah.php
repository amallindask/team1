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
                        alert('GAGAL');
                        document.location.href = 'index.php';
                    </script>";
              }
        }
?>

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
    <div class="container">
        <div class="p-5 mb-3 bg-success p-2 text-white bg-opacity-75 shadow-sm">
            <h1 class="text-center" style="color: white;">Ubah Data Sertifikat</h1>
            <div class="text-center" style="height: auto; --bs-bg-opacity: .6;">
            </div>
        </div>
        <form class="my-1 shadow-sm" action="" method="POST">
        <div class="card">
            <div class="card-body">
                <div class="row mb-3">
            <label class="col-sm-2 col-form-label">ID Sertifikat</label>
            <div class="col-sm-10">
              <input type="text" class="form-control"  value="<?= $pst['id_peserta']; ?>" readonly>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nama" value="<?= $pst['nama']; ?>">
            </div>
          </div>
          <fieldset class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="L" <?php if($pst['jenis_kelamin'] == "L"){echo "checked";}else{echo " ";} ?>>
                    <label class="form-check-label" for="gridRadios1">Laki-laki</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="P" <?php if($pst['jenis_kelamin'] == "P"){echo "checked";}else{echo " ";} ?>>
                    <label class="form-check-label" for="gridRadios2">Perempuan</label>
                </div>
            </div>
          </fieldset>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
              <textarea class="form-control" name="alamat" rows="3"><?= $pst['alamat']; ?></textarea>
            </div>
          </div>
           <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Tema Kegiatan</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="tema" value="<?= $pst['tema']; ?>">
            </div>
          </div>
          <fieldset class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Peran</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="peran" value="Pemateri" <?php if($pst['peran'] == "Pemateri"){echo "checked";}else{echo " ";} ?>>
                    <label class="form-check-label" for="gridRadios1">Pemateri</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="peran" value="Peserta" <?php if($pst['peran'] == "Peserta"){echo "checked";}else{echo " ";} ?>>
                    <label class="form-check-label" for="gridRadios2">Peserta</label>
                </div>
            </div>
          </fieldset>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Tanggal Kegiatan</label>
            <div class="col-sm-4">
              <input type="date" class="form-control" name="tgl_kegiatan" value="<?= $pst['tgl_kegiatan']; ?>">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Tanggal Sertifikat</label>
            <div class="col-sm-4">
              <input type="date" class="form-control" name="tgl_sertifikat" value="<?= $pst['tgl_sertifikat']; ?>">
            </div>
          </div>
          <br>
          <center>
            <button type="submit" class="btn btn-primary btn-sm" value="Simpan" name="simpan_ubah">Ubah</button>
            <a href="index.php" type="submit" class="btn btn-danger btn-sm" value="Batal">Batal</a>
          </center>
            </div>
        </div>
      </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>
