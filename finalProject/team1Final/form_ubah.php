<?php
	require 'koneksi.php';

	if(isset($_POST['simpan']))
	{
		$id             = $_POST['id'];
        $nama           = $_POST['nama'];
        $jenis_kelamin  = $_POST['jenis_kelamin'];
        $tgl_kegiatan   = $_POST['tgl_kegiatan'];
        $alamat         = $_POST['alamat'];
        $peran          = $_POST['peran'];
        $tgl_sertifikat = $_POST['created_at'];

	 	mysqli_query($conn, "UPDATE peserta SET nama='$nama', jenis_kelamin='$jenis_kelamin', tgl_kegiatan='$tgl_kegiatan', alamat='$alamat', peran='$peran', tgl_sertifikat='$created_at' WHERE id_peserta=$id");
		header("Location: lihat.php");
	}
?>

<?php
    $id = $_GET['id'];
     
    $peserta = mysqli_query($conn, "SELECT * FROM peserta WHERE id_peserta = $id");
     
    while($pst = mysqli_fetch_array($peserta))
    {
        $nama           = $pst['nama'];
        $jenis_kelamin  = $pst['jenis_kelamin'];
        $tgl_kegiatan   = $pst['tgl_kegiatan'];
        $alamat         = $pst['alamat'];
        $peran          = $pst['peran'];
        $tgl_sertifikat = $pst['created_at'];
    }
?>

<html>
<head>    
    <title>Edit Data Peserta</title>
</head>
 
<body>
    <h1 id="header">Ubah Data Sertifikat</h1>
    <form method="post" action="lihat.php">
        <table>
            <tr>
                <td>No Sertifikat</td>
                <td><input type="text" name="no_sertifikat"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
                    <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
                </td>
            </tr>
            <tr>
                <td>Tanggal Kegiatan</td>
                <td><input type="date" name="tgl_kegiatan" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat" rows="2" required></textarea></td>
            </tr>
            <tr>
                <td>Peran</td>
                <td>
                    <input type="radio" name="peran" value="Pemateri" required><label>Pemateri</label>
                    <input type="radio" name="peran" value="Peserta" required><label>Peserta</label>
                </td>
            </tr>
            <tr>
                <td>Tanggal Sertfikat</td>
                <td><input type="date" name="created_at" required></td>
            </tr>
        </table>
        <hr>
        <input type="submit" class="simpan" value="Simpan">
        <a href="lihat.php"><input type="button" class="batal" value="Batal"></a>
    </form>
</body>
</html>
