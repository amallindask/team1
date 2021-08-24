<html>
<head>
    <link rel="stylesheet" type="text/css" href="tampilan.css">
    <title>Pemberian Sertifikat | CRUD</title>
</head>

<body>
    <h1 id="header">Data Peserta</h1>
    <a class="btn" type="button" href="form_simpan.php" style="float: right;">Tambah Data</a><br><br>
    <table>
        <tr align="center">
            <th>No</th>
            <th>No Sertifikat</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Sertifikat</th>
            <th>Alamat</th>
            <th>Peran</th>
            <th>Tema</th>
            <th>Pilihan</th>
        </tr>

        <?php
        include "koneksi.php";
        $no = 1;
        $sql = $pdo->prepare("SELECT * FROM peserta");
        $sql->execute(); 
        while($data = $sql->fetch()){ 
            echo "<tr align='center'>";
            echo "<td>".$no++."</td>";
            echo "<td>".$data['no_sertifikat']."</td>";
            echo "<td>".$data['nama']."</td>";
            echo "<td>".$data['jenis_kelamin']."</td>";
            echo "<td>".$data['tgl_sertifikat']."</td>";
            echo "<td>".$data['alamat']."</td>";
            echo "<td>".$data['peran']."</td>";
            echo "<td>".$data['tema']."</td>";
            echo "<td><a href='lihat.php?id=".$data['id_sertifikat']."'>Lihat</a>
                    <a href='form_ubah.php?id=".$data['id_sertifikat']."'>Ubah</a>
                    <a href='hapus.php?id=".$data['id_sertifikat']."'>Hapus</a>
                    <a href='cetak.php?id=".$data['id_sertifikat']."'>Cetak</a>

            </td>";
        } 
        ?>
    </table>
</body>
</html>