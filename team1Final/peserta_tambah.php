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
?>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Pemberian Sertifikat | CRUD</title>
</head>

<body style="--bs-body-color: #333;">
    <div class="container w-50">
    <h1 class="p-2 text-center bg-warning shadow-sm">Tambah Peserta</h1>
    <form class="my-1 shadow-sm" action="" method="POST">
        <table class="table fw-bold bg-info">
            <tr>
                <td>Nama</td>
                <td><input class="form-control" type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type="radio" class="form-check-input" name="gender" value="Laki-laki" required><label> Laki-Laki</label>
                    <input type="radio" class="form-check-input" name="gender" value="Perempuan" required><label> Perempuan</label>
                </td>
            </tr>            
            <tr>
                <td>Alamat</td>
                <td><textarea class="form-control" name="alamat" rows="3" required></textarea></td>
            </tr>
            <tr>
                <td>Tema</td>
                <td><textarea class="form-control" name="tema" rows="3" required></textarea></td>
            </tr>
            <tr>
                <td>Peran</td>
                <td>
                    <input type="radio" class="form-check-input" name="peran" value="Pemateri" required><label> Pemateri</label>
                    <input type="radio" class="form-check-input" name="peran" value="Peserta" required><label> Peserta</label>
                </td>
            </tr>
            <tr>
                <td>Tanggal Kegiatan</td>
                <td><input type="date" name="tgl_kegiatan" required></td>
            </tr>
            
            <tr>
                <td>Tanggal Sertfikat</td>
                <td><input type="date" name="tgl_sertifikat" required></td>
            </tr>
        </table>
        
        <hr>
        <input type="submit" class="button bg-info rounded shadow-sm" value="Simpan" name="simpan">
        <a href="index.php"><input type="button" class="button rounded shadow-sm" value="Batal"></a>
    </form>
</body>
</html>