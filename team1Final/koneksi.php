<?php
	// Mengubungkan ke database
		$conn = mysqli_connect('localhost','root','','db_sertifikat');

	// Mengambil data dari database
		function query($query) {
			global $conn;
			$result     = mysqli_query($conn, $query);
			$rows       = [];
			while ($row = mysqli_fetch_assoc($result) ) {
				$rows[] = $row;
			}
			return $rows;
		}

	// Menambah peserta
		function peserta_tambah($data) {
			global $conn;

			$nama 		  	= $_POST['nama'];
			$gender			= $_POST['gender'];
			$tgl_kegiatan	= $_POST['tgl_kegiatan'];
			$alamat 		= $_POST['alamat'];
			$peran			= $_POST['peran'];
			$tgl_sertifikat	= $_POST['tgl_sertifikat'];

 			mysqli_query($conn, "INSERT INTO peserta VALUES('','$nama','$gender','$tgl_kegiatan','$alamat','$peran','$tgl_kegiatan')");
 			return mysqli_affected_rows($conn);
		}

	// Mengubah peserta
		function peserta_ubah($data) {
			global $conn;

			$id_peserta     = $_POST['id_peserta'];
	        $nama           = $_POST['nama'];
	        $jenis_kelamin  = $_POST['jenis_kelamin'];
	        $tgl_kegiatan   = $_POST['tgl_kegiatan'];
	        $alamat         = $_POST['alamat'];
	        $peran          = $_POST['peran'];
	        $tgl_sertifikat = $_POST['tgl_sertifikat'];

	        mysqli_query($conn, "UPDATE peserta SET
	        					nama 			= '$nama',
	        					jenis_kelamin	= '$jenis_kelamin',
	        					tgl_kegiatan 	= '$tgl_kegiatan',
	        					alamat 			= '$alamat',
	        					peran 			= '$peran',
	        					tgl_sertifikat  = '$tgl_sertifikat'
	        			WHERE 	id_peserta 		= $id_peserta");

            return mysqli_affected_rows($conn);
		}

?>