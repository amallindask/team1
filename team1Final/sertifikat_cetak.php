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
			<style>
			@page {
                margin: 0cm 0cm;
            }

			body {
                margin-top:    3cm;
                margin-bottom: 1cm;
                margin-left:   2cm;
                margin-right:  2cm;
            }
			#watermark {
                position: fixed;
                bottom: 0px;
                right: 0px;

                width: 29.7cm;
                height: 21cm;

                z-index: -1000;
            }
            table {
            	margin-top: 2cm;
            	margin-left: 6cm;
            }

            p {
            	font-size: 20px;
            }
          
            </style>
			<title>Cetak Sertifikat</title>
		</head>
		<body>
			<div id="watermark">
				<img src="background.jpg" height="100%" width="100%"/>
			</div>
			<main>';
				foreach ($peserta as $pst) :
	   $html .= '<center>
	   				<h2>KEMENTERIAN PENDIDIKAN DAN KEBUDAYAAN <br>POLITEKNIK NEGERI CILACAP <br> PUSAT PENELITIAN DAN PENGABDIAN KEPADA MASYARAKAT</h2>
	   			</center><br>
	   			<center>
	   				<strong style="font-size: 30px;">SERTIFIKAT</strong><br>
	   				No.0'.$pst["id_peserta"].'/PL43 P.01/ VII/2020<br>
	   				Diberikan Kepada <br> <h1>'.$pst["nama"].'</h1>
	   			</center>
	   			<center>
	   			<p>Atas peran serta sebagai <strong>'.$pst["peran"].'</strong> dalam kegiatan Webinar dengan tema "'.$pst["tema"].'" yang diselenggarakan pada '.$pst["tgl_kegiatan"].', dalam kurun waktu 4 (empat) jam pertemuan yang diselengarakan oleh Pusat Penelitian dan Pengabdian Masyarakat (P3M) Politeknik Negeri Cilacap.</p><br>
	   			<center> Cilacap, '.$pst["tgl_sertifikat"].'</center>
	   			
	   		<table>
	   			<tr align="center">
	   				<td>Dr. Ir. Aris Tjahyanto M.Kom<br>
	   				<hr>Direktur Politeknik Negeri Cilacap</td>
	   				<td></td><td></td><td></td><td></td><td></td>
	   				<td></td><td></td><td></td><td></td><td></td>
	   				<td>Ganjar Ndaru Ikhtiagung, S.E., M.M. <br>
	   				<hr>Kepala P3M Politeknik Negeri Cilacap</td>
	   			</tr>
	   			';
	   			endforeach;
	$html .='</table>
			</main>
			</body>
			</html>';

	$dompdf = new dompdf();
	$dompdf-> load_html($html);
	$dompdf-> setPaper('A4', 'landscape');
	$dompdf-> render();
	$dompdf-> stream('Data_Transaksi', array("Attachment" => 0 ));
?>


