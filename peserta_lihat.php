<?php 
	// Menghubungkan ke database
		require 'koneksi.php';

	// Menggabil data peserta
		$id 		= $_GET['id'];
		$peserta 	= mysqli_query($conn, "SELECT * FROM peserta WHERE id_peserta = $id");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Detail Peserta</title>
	<link rel="stylesheet" type="text/css" href="css/tampilan-simpan.css">
</head>
<body>
<center>
	<h1>Detail Peserta</h1>
</center>
<?php foreach ( $peserta as $pst ) : ?>
	<table>
            <tr>
                <td>Id Peserta</td>
                <td><label>Sert/DTS-VSGA.<?= $pst['id_peserta']; ?></label></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><label><?= $pst['nama']; ?></label></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><label><?= $pst['jenis_kelamin']; ?></label></td>
            </tr>
            <tr>
                <td>Tanggal Kegiatan</td>
                <td><label><?= $pst['tgl_kegiatan']; ?></label></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><label><?= $pst['alamat']; ?></label><td>
            </tr>
            <tr>
                <td>Peran</td>
                <td><label><?= $pst['peran']; ?></label></td>
            </tr>
            <tr>
            	<td>Tanggal Sertifikat</td>
            	<td><label><?= $pst['created_at']; ?></label></td>
            </tr>
        </table>
<?php endforeach; ?>
<center>
        <a href="hapus.php?id=<?= $pst['id_peserta']; ?>" onclick="return confirm('Anda yakin akan menghapus peserta ini?');">Hapus</a>
        <a href="#">Ubah</a>
        <a href="#">Cetak Sertifikat</a>
</center>
</body>
</html>