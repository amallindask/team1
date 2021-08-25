<?php
	include "koneksi.php";

	$nama 		  	= $_POST['nama'];
	$gender			= $_POST['gender'];
	$tgl_kegiatan	= $_POST['tgl_kegiatan'];
	$alamat 		= $_POST['alamat'];
	$peran			= $_POST['peran'];
	$tgl_sertifikat	= $_POST['tgl_sertifikat'];

 	$sql = mysqli_query($conn, "INSERT INTO peserta VALUES('','$nama','$gender','$tgl_kegiatan','$alamat','$peran','$tgl_kegiatan')");

 	if ( mysqli_affected_rows($conn) > 0 ) {
		echo "<script>
				alert('Berhasil menambah peserta');
				document.location.href = 'index.php';
		 	</script>";
 	}else {
 		echo "<script>
				alert('Gagal menambah peserta');
				document.location.href = 'form_simpan.php';
		 	</script>";
 	}
?>