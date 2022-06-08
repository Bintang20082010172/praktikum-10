<?php
    include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman daftar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- formulir sign up -->
    <section class="box-formulir">
        <h2><center>DAFTAR SISWA BARU</center></h2>
        <br>
    
        <!-- bagian form -->
        <form action="input_data.php" method="post">
            <div class="box">
                <table border="0" class="table-form">
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>
                           <input type="text" name="nama" class="input-control" maxlength="255">
                        </td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td>:</td>
                        <td>
                           <input type="text" name="kelas" class="input-control" maxlength="100">
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>
                           <input type="text" name="alamat" class="input-control" maxlength="255">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                             <!-- button untuk submit data ke database -->
                             <input type="submit" name="submit" class="btn-submit" value="Submit">
                        </td>
                    </tr>
                </table>
            </div>
        </form>
</body>
</html>