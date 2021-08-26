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
                <td><label>No. 0<?= $pst["id_peserta"]; ?>/PL43 P.01/ VII/2020</label></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><label><?= $pst['nama']; ?></label></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><label><?php if($pst['jenis_kelamin'] == "L"){echo "Laki Laki";}else{echo "Perempuan";} ?></label></td>
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
            	<td><label><?= $pst['tgl_sertifikat']; ?></label></td>
            </tr>
        </table>
<?php endforeach; ?>
<center>
        <a class="btn btn-warning btn-sm" style="font-size: 10px;" href="peserta_ubah.php?id=<?= $pst['id_peserta']; ?>">Ubah</a>
        <a class="btn btn-danger btn-sm" style="font-size: 10px;" href="peserta_hapus.php?id=<?= $pst['id_peserta']; ?>" onclick="return confirm('Anda yakin akan menghapus peserta ini?');">Hapus</a>
        <a class="btn btn-success btn-sm" style="font-size: 10px;" href="cetak_sertifikat.php?id=<?= $pst['id_peserta']; ?>" target="_blank">Cetak Sertifikat</a>
</center>
</body>
</html>