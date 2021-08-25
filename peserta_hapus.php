<?php
	// Menghubungkan ke database
		require 'koneksi.php';

	// Mengambil data peserta dari id nya
		$id = $_GET['id'];

	// Menghapus peserta
		mysqli_query($conn, "DELETE FROM peserta WHERE id_peserta = $id");

		if( mysqli_affected_rows($conn) > 0 ) {
			echo "<script>
					alert('BERHASIL');
					document.location.href = 'index.php';
				 </script>";
		}else {
			echo "<script>
					alert('GAGAL');
					document.location.href = 'index.php';
				 </script>";
		}


?>