<?php

include "../data/koneksi.php";
$id   = $_REQUEST['id'];
$data = $_REQUEST['data'];
$sts  = $_REQUEST['status'];

if($data == 'buku') {
  $hapus = "DELETE FROM `buku` WHERE `buku`.`id_buku` = '$id'";
  $proses = mysqli_query($connect, $hapus);
  echo "<script>alert('Data Berhasil Dihapus'); window.location = 'data-buku.php';</script>";
} else {
  if($sts == 0){
  $pinjam = "Select * from `data_pinjaman` Where `no` = '$id';";
  $query  = mysqli_query($connect, $pinjam);
  while ($row  = mysqli_fetch_row($query))
  {
  $kembali   = $row[4];
  $dibalikin = date('d-m-Y',time() + (0 * 24 * 60 * 60));
  $terlambat = $dibalikin - $kembali;
  if($terlambat <= 0) {
  $denda     = 0;
  } else {
  $denda     = number_format($terlambat*500);
  }
  $update = "UPDATE `data_pinjaman` SET `status` = '1' WHERE `data_pinjaman`.`no` = $id;";
  $proses = mysqli_query($connect, $update);
  }
} else {
  $update = "UPDATE `data_pinjaman` SET `status` = '0' WHERE `data_pinjaman`.`no` = $id;";
  $proses = mysqli_query($connect, $update);
}
  echo "<script>alert('Buku Dikembalikan, Denda Anda = Rp ".$denda."'); window.location = 'data-peminjam.php';</script>";
}

 ?>
