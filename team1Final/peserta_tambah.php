<?php 
    // Menghubungkan ke database
      require 'koneksi.php';

    // Menambah peserta
      if( isset($_POST["simpan"]) ) {
          if (peserta_tambah($_POST) > 0) {
              echo "<script>
              alert('BERHASIL');
              document.location.href = 'index.php';
              </script>";
          } else{
              echo "<script>
              alert('GAGAL');
              document.location.href = 'peserta_tambah.php';
              </script>";
          }
      }

  $peserta       = mysqli_query($conn, "SELECT * FROM peserta");
  $jml_peserta   = mysqli_num_rows($peserta);
  $id_sertifikat = $jml_peserta + 1;
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
            <h1 class="text-center" style="color: white;">Tambah Data Sertifikat</h1>
            <div class="text-center" style="height: auto; --bs-bg-opacity: .6;">
            </div>
        </div>
        <form class="my-1 shadow-sm" action="" method="POST">
        <div class="card">
            <div class="card-body">
                <div class="row mb-3">
            <label class="col-sm-2 col-form-label">ID Sertifikat</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" value="No. <?= $id_sertifikat ?>/PL43 P.01/ VII/2020" readonly>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="nama">Nama</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nama" name="nama" required="required">
            </div>
          </div>
          <fieldset class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <label class="form-check-label" for="Laki">Laki-laki</label>
                    <input class="form-check-input" type="radio" id="Laki" name="jenis_kelamin" value="L">                    
                </div>
                <div class="form-check">                    
                    <label class="form-check-label" for="Perempuan">Perempuan</label>
                    <input class="form-check-input" type="radio" id="Perempuan" name="jenis_kelamin" value="P">
                </div>
            </div>
          </fieldset>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="alamat">Alamat</label>
            <div class="col-sm-10">
              <textarea class="form-control" id="alamat" name="alamat" required></textarea>
            </div>
          </div>
           <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="tema">Tema Kegiatan</label>
            <div class="col-sm-10">
              <textarea class="form-control" id="tema" name="tema"></textarea>
            </div>
          </div>
          <fieldset class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Peran</legend>
            <div class="col-sm-10">
                <div class="form-check">                    
                    <label class="form-check-label" for="Pemateri">Pemateri</label>
                    <input class="form-check-input" type="radio" id="Pemateri" name="peran" value="Pemateri">
                </div>
                <div class="form-check">                    
                    <label class="form-check-label" for="Peserta">Peserta</label>
                    <input class="form-check-input" type="radio" id="Peserta" name="peran" value="Peserta">
                </div>
            </div>
          </fieldset>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="tgl_kegiatan">Tanggal Kegiatan</label>
            <div class="col-sm-4">
              <input type="date" class="form-control" id="tgl_kegiatan" name="tgl_kegiatan" required="required">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="tgl_sertifikat">Tanggal Sertifikat</label>
            <div class="col-sm-4">
              <input type="date" class="form-control" id="tgl_sertifikat" name="tgl_sertifikat" required="required">
            </div>
          </div>
          <br>
          <center>
            <button type="submit" class="btn btn-primary btn-sm" value="Simpan" name="simpan">Simpan</button>
            <a href="index.php" type="submit" class="btn btn-danger btn-sm" value="Batal">Batal</a>
          </center>
            </div>
        </div>
      </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>