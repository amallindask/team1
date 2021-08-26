<?php 
	// Menghubungkan ke database
		require 'koneksi.php';

	// Mengambil data dari URL
        $id = $_GET['id'];

    // Mengambil data dari database
        $srt = query("SELECT * FROM sertifikat WHERE id_sertifikat = $id")[0];

	// Mengubah Sertifikat
        if (isset ($_POST["simpan"]) ) {
            if (sertifikat_ubah($_POST) > 0 ){
                echo "<script>
                        alert('BERHASIL');
                        document.location.href = 'index.php';
                    </script>";
            }else {
            	echo "<script>
                        alert('GAGAL');
                        document.location.href = 'sertifikat_ubah.php?id=1';
                    </script>";
            }
        }

    // Mengambil data dari database
        $sertifikat = query("SELECT * FROM sertifikat");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Ubah Sertifikat</title>
</head>
<body>
	<h1>Ubah Sertifikat</h1>
	<form action="" method="POST">
		<input type="text" name="id_sertifikat" value="<?= $srt["id_sertifikat"]; ?>">
		<div>
			<label for="judul">Judul Sertifikat</label>
			<textarea id="judul" name="judul"><?= $srt["head"]; ?></textarea>
		</div>
		<div>
			<label for="no_sertifikat">No Sertifikat</label>
			<input type="text" name="no_sertifikat" id="no_sertifikat" value="<?= $srt["no_sertifikat"]; ?>" readonly>
		</div>
		<div>
			<label for="tema">Tema</label>
			<textarea id="tema" name="tema"><?= $srt["tema"]; ?></textarea>
		</div>
		<div>
			<label for="tgl_kegiatan">Tanggal Kegiatan</label>
			<input type="date" name="tgl_kegiatan" value="<?= $srt["tgl_kegiatan"]; ?>">
		</div>
		<input type="submit" name="simpan" value="Simpan">
	</form>
</body>
</html>