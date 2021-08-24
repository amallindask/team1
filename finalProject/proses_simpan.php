<?php
include "koneksi.php";

$nopes = $_POST['nopes'];
$nama = $_POST['nama'];
$jenis_kel = $_POST['jenis_kel'];
$tgl_lahir = $_POST['tgl_lahir'];
$alamat = $_POST['alamat'];
$tgl_kegiatan = $_POST['tgl_kegiatan'];

$sql = $pdo->prepare("INSERT INTO peserta(nopes, nama, jenis_kel, tgl_lahir, alamat, tgl_kegiatan) VALUES(:nopes,:nama,:jk,:tgl,:alamat,:tglk)");
$sql->bindParam(':nopes', $nopes);
$sql->bindParam(':nama', $nama);
$sql->bindParam(':jk', $jenis_kel);
$sql->bindParam(':tgl', $tgl_lahir);
$sql->bindParam(':alamat', $alamat);
$sql->bindParam(':tglk', $tgl_kegiatan);
$sql->execute(); 
if($sql){ 
  header("location: index.php"); 
}else{
  echo "ERROR : Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
}
?>