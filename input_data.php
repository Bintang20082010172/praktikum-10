<?php
   include "koneksi.php";

    //memindahkan nilai data form ke variabel sederhana agar mudah ditulis
    $nama=$_POST["nama"];
    $kelas=$_POST["kelas"];
    $alamat=$_POST["alamat"];

    $sql="insert tb_siswa set
        nama='$nama',
        kelas='$kelas',
        alamat='$alamat'";

    mysqli_query($koneksi,$sql) or die("Proses simpan ke database gagal");
    mysqli_close($koneksi);
    header("location:cetaksiswa.php");
?>