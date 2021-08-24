<html>
<head>
    <title>Pemberian Sertifikat | CRUD</title>
</head>

<body>
    <h1>Data Peserta</h1>
    <a href="form_simpan.php">Tambah Data</a><br><br>
    <table border="1" width="100%">
        <tr>
            <th>No Peserta</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Alamat></th>
            <th colspan="2">Pilihan</th>
        </tr>

        <?php
        include "koneksi.php";

        $sql = $pdo->prepare("SELECT * FROM peserta");
        $sql->execute(); 
        while($data = $sql->fetch()){ 
            echo "<tr>";
            echo "<td>".$data['nopes']."</td>";
            echo "<td>".$data['nama']."</td>";
            echo "<td>".$data['jenis_kel']."</td>";
            echo "<td>".$data['tgl_lahir']."</td>";
            echo "<td>".$data['alamat']."</td>";
            echo "<td><a href='form_ubah.php?id=".$data['id']."'>Ubah</a></td>";
            echo "<td><a href='proses_hapus.php?id=".$data['id']."'>Hapus</a></td>";
            echo "</tr>";
        } 
        ?>
    </table>
</body>
</html>