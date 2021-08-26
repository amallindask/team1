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

<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">    
    <title>Edit Data Peserta</title>
</head>
 
<body style="--bs-body-color: #333;">
    <div class="container w-50">
    <h1 class="p-2 text-center bg-warning shadow-sm">Ubah Data Sertifikat</h1>
    <form class="my-1 shadow-sm" action="" method="POST">
        <table class="table fw-bold bg-info">
            <tr>
                <td>Id Peserta</td>
                <td><input type="hidden"class="form-control" name="id_peserta" value="<?= $pst['id_peserta']; ?>" readonly></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input class="form-control" type="text" name="nama" value="<?= $pst['nama']; ?>"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type="radio" class="form-check-input" name="jenis_kelamin" value="L" <?php if($pst['jenis_kelamin'] == "L"){echo "checked";}else{echo " ";} ?>><label> Laki-Laki</label>
                    <input type="radio" class="form-check-input" name="jenis_kelamin" value="P" <?php if($pst['jenis_kelamin'] == "P"){echo "checked";}else{echo " ";} ?>><label> Perempuan</label>
                </td>
            </tr>            
            <tr>
                <td>Alamat</td>
                <td><textarea class="form-control" name="alamat" rows="3"><?= $pst['alamat']; ?></textarea></td>
            </tr>
            <tr>
                <td>Tema Kegiatan</td>
                <td><input class="form-control" type="text" name="tema" value="<?= $pst['tema']; ?>"></td>
            </tr>
            <tr>
                <td>Peran</td>
                <td>
                    <input type="radio" class="form-check-input" name="peran" value="Pemateri" <?php if($pst['peran'] == "Pemateri"){echo "checked";}else{echo " ";} ?> ><label> Pemateri</label>
                    <input type="radio" class="form-check-input" name="peran" value="Peserta" <?php if($pst['peran'] == "Peserta"){echo "checked";}else{echo " ";} ?> ><label> Peserta</label>
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
        <input type="submit" class="button" value="Simpan" name="simpan_ubah">
        <a href="index.php"><input type="button" class="button" value="Batal"></a>
    </form>
</body>
</html>
