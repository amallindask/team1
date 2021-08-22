<?php 
	require_once '../dompdf/autoload.inc.php';
	use Dompdf\Dompdf;

	include "../koneksi.php";
	$no 	   = 1;
	$tr_pinjam = mysqli_query($db, "SELECT * FROM tbtransaksi");

	$html =
	'<!DOCTYPE html>
		<html>
		<head>
			<title>Data Peminjam</title>
		</head>
		<body>
		<center><h1>Data Peminjam</h1></center>
			<table border="1" cellpadding="10" cellspacing="0" align="center">
				<tr>
					<th>No</th>
					<th>Id Anggota</th>
					<th>Id Buku</th>
					<th>Tanggal Pinjam</th>
				</tr>';
			$i = 1;
			foreach ($tr_pinjam as $data_pinjam) {
	   $html .= '<tr>
					<td align="center">'. $i++ .'</td>
					<td align="center">'. $data_pinjam["idanggota"] .'</td>
					<td align="center">'. $data_pinjam["idbuku"] .'</td>
					<td align="center">'. $data_pinjam["tglpinjam"] .'</td>
				</tr>';
			}
	$html .='</table>
			</body>
			</html>';

	$dompdf = new dompdf();
	$dompdf-> load_html($html);
	$dompdf-> render();
	$dompdf-> stream('Data_Transaksi', array("Attachment" => 0 ));
?>


