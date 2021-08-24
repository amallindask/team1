<?php
include "koneksi.php";

$no_sertifikat = $_POST['no_sertifikat'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tgl_sertifikat = $_POST['tgl_sertifikat'];
$alamat = $_POST['alamat'];
$peran = $_POST['peran'];
$tema = $_POST['tema'];

$sql = $pdo->prepare("INSERT INTO peserta(no_sertifikat, nama, jenis_kelamin, tgl_sertifikat, alamat, peran, tema) VALUES(:no_sertifikat,:nama,:jenis_kelamin,:tgl_sertifikat,:alamat,:peran,:tema)");
$sql->bindParam(':no_sertifikat', $no_sertifikat);
$sql->bindParam(':nama', $nama);
$sql->bindParam(':jenis_kelamin', $jenis_kelamin);
$sql->bindParam(':tgl_sertifikat', $tgl_sertifikat);
$sql->bindParam(':alamat', $alamat);
$sql->bindParam(':peran', $peran);
$sql->bindParam(':tema', $tema);
$sql->execute(); 
if($sql){ 
  header("location: index.php"); 
}else{
  echo "ERROR : Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
}
?>