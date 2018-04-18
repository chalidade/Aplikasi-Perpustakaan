<?php

include "data/koneksi.php";
$id     = rand();
$id_buku= $_POST['buku'];
$nama   = $_POST['nama'];
$email  = $_POST['email'];
$prodi  = $_POST['prodi'];
$alamat = $_POST['alamat'];
$pinjam = date("d-m-Y");
$kembali = date('d-m-Y',time() + (7 * 24 * 60 * 60));

$simpan = "INSERT INTO `peminjam` (`id_peminjam`, `alamat`, `nama`, `email`, `program_studi`) VALUES ('$id', '$alamat', '$nama', '$email', '$prodi');";
$proses = mysqli_query($connect, $simpan);

$data   = "INSERT INTO `data_pinjaman` (`id_peminjam`, `id_buku`, `tgl_pinjam`, `tgl_kembali`) VALUES ('$id', '$id_buku', '$pinjam', '$kembali');";
$proses = mysqli_query($connect, $data);

echo "<script>alert('Data Berhasil Disimpan'); window.location = 'index.php';</script>";
?>
