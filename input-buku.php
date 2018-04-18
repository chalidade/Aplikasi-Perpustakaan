<?php

include "data/koneksi.php";

$id        = $_POST['id'];
$judul     = $_POST['judul'];
$jenis     = $_POST['jenis'];
$tahun     = $_POST['tahun'];
$gambar    = $_POST['gambar'];

$simpan = "INSERT INTO `buku` (`id_buku`, `nama`, `jenis`, `tahun_terbit`, `gambar`) VALUES ('$id', '$judul', '$jenis', '$tahun', '$gambar');";
$proses = mysqli_query($connect, $simpan);

echo "<script>alert('Data Berhasil Disimpan'); window.location = 'admin/dashboard.php';</script>";
 ?>
