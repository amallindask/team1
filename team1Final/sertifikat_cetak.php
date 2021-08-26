<?php 
	require_once 'dompdf/autoload.inc.php';
	use Dompdf\Dompdf;


	require 'koneksi.php';

	$id 	   = $_GET['id'];
	$no 	   = 1;
	$peserta   = mysqli_query($conn, "SELECT * FROM peserta WHERE id_peserta = $id");

	$html =
	'<!DOCTYPE html>
		<html>
		<head>
			<title>Cetak Sertifikat</title>
		</head>
		<body>
		<center></center>';
				foreach ($peserta as $pst) {
	   $html .= '<center>
	   				<h3>KEMENTERIAN PENDIDIKAN DAN KEBUDAYAAN POLITEKNIK NEGERI CILACAP <br> PUSAT PENELITIAN DAN PENGABDIAN KEPADA MASYARAKAT</h3>
	   			</center><br>
	   			<center>
	   				<strong>SERTIFIKAT</strong><br>
	   				No.0'.$pst["id_peserta"].'/PL43 P.01/ VII/2020<br><br>
	   				Diberikan Kepada <br>'.$pst["nama"].'
	   			</center><br><br><br>
	   			Atas peran serta sebagai <strong>'.$pst["peran"].'</strong> dalam kegiatan Webinar dengan tema "'.$pst["tema"].'" yang diselenggarakan pada '.$pst["tgl_kegiatan"].', dalam kurun waktu 4 (empat) jam pertemuan yang diselengarakan oleh Pusat Penelitian dan Pengabdian Masyarakat (P3M) Politeknik Negeri Cilacap.<br><br>
	   			<center>'.$pst["tgl_sertifikat"].'</center><br>
	   			Ganjar Ndaru Ikhtiagung, S.E., M.M. <br>
	   			ttd <br><br>
	   			Dr. Ir. Aris Tjahyanto M.Kom <br>
	   			ttd <br><br>
	   			';
	   			}
	$html .='</table>
			</body>
			</html>';

	$dompdf = new dompdf();
	$dompdf-> load_html($html);
	$dompdf-> setPaper('A4', 'landscape');
	$dompdf-> render();
	$dompdf-> stream('Data_Transaksi', array("Attachment" => 0 ));
?>


