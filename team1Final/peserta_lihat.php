<?php 
  // Menghubungkan ke database
    require 'koneksi.php';

  // Menggabil data peserta
    $id     = $_GET['id'];
    $peserta  = mysqli_query($conn, "SELECT * FROM peserta WHERE id_peserta = $id");
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
          <h1 class="text-center" style="color: white;">Lihat Data Sertifikat</h1>
          <div class="text-center" style="height: auto; --bs-bg-opacity: .6;">
          </div>
      </div>
      <div class="card">
        <div class="card-body">
           <?php foreach ( $peserta as $pst ) : ?>
           <table class="table table-striped">
            <tr>
                <td style="width: 20%;">Id Peserta</td>
                <td style="width: 10%">:</td>
                <td>
                  <label>No. 0<?= $pst["id_peserta"]; ?>/PL43 P.01/ VII/2020</label>
                </td>
            </tr>
            <tr>
                <td style="width: 20%;">Nama</td>
                <td>:</td>
                <td>
                  <label><?= $pst['nama']; ?></label>
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                  <label>
                    <?php if($pst['jenis_kelamin'] == "L"){
                      echo "Laki Laki";}else{echo "Perempuan";
                    } ?>
                    </label>
                </td>
            </tr>
            <tr>
                <td>Tanggal Kegiatan</td>
                <td>:</td>
                <td>
                  <label><?= $pst['tgl_kegiatan']; ?></label>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>
                  <label><?= $pst['alamat']; ?></label>
                </td>
            </tr>
            <tr>
                <td>Peran</td>
                <td>:</td>
                <td>
                  <label><?= $pst['peran']; ?></label>
                </td>
            </tr>
            <tr>
              <td>Tanggal Sertifikat</td>
              <td>:</td>
              <td>
                <label><?= $pst['tgl_kegiatan']; ?></label>
              </td>
            </tr>
        </table>
        <?php endforeach; ?>
        </div>
      </div>  
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>