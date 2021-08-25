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
			<title>Data Peminjam</title>
		</head>
		<body>
		<center><h1>Cetak Sertifikat</h1></center>';
				foreach ($peserta as $pst) :
	   $html .= '';
	   			endforeach;
	$html .='</table>
			</body>
			</html>';

	$dompdf = new dompdf();
	$dompdf-> load_html($html);
	$dompdf-> render();
	$dompdf-> stream('Data_Transaksi', array("Attachment" => 0 ));
?>


