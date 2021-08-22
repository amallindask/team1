<?php
include'../koneksi.php';

$id_transaksi=$_POST['id_transaksi'];
$id_anggota=$_POST['id_anggota'];
$id_buku=$_POST['id_buku'];
$tgl_pinjam=$_POST['tgl_pinjam'];
$tgl_kembali=$_POST['tgl_kembali'];

If(isset($_POST['simpan'])){
	
	
	mysqli_query($db,
		"UPDATE tbtransaksi
		SET idtransaksi='$id_transaksi',idanggota='$id_anggota',idbuku='$id_buku',tglpinjam='$tgl_pinjam',tglkembali='$tgl_kembali'
		WHERE idtransaksi='$id_transaksi'"
	);
	header("location:../index.php?p=laporan-transaksi");
}
?>
