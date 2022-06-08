<!DOCTYPE html>
<html>
    <head>
        <title>Siswa Baru</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <center><h2>Daftar siswa baru</h2></center><br>
        <center><table border="1">
            <tr><th>Id_siswa</th><th>Nama</th><th>Kelas</th><th>Alamat</th>
            <?php
            include 'koneksi.php';
            $pesan = mysqli_query($koneksi, "SELECT * from tb_siswa");
            $no = 1;
            foreach ($pesan as $row) {
                echo "<tr>
            <td>$no</td>
            <td>" . $row['id_siswa'] . "</td>
            <td>" . $row['nama'] . "</td>
            <td>" . $row['kelas'] . "</td>
            <td>" . $row['alamat'] . "</td>
              </tr>";
                $no++;
            }
            ?>
        </table></center><br>
        <center><a href="homepage.php" class="btn-submit">Kembali</a>
        <a href="reportdataexcel.php" class="btn-submit">Report Excel</a></center>
    </body>
</html>