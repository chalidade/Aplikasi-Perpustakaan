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
  $update = "UPDATE `data_pinjaman` SET `status` = '1' WHERE `data_pinjaman`.`no` = $id;";
  $proses = mysqli_query($connect, $update);
} else {
  $update = "UPDATE `data_pinjaman` SET `status` = '0' WHERE `data_pinjaman`.`no` = $id;";
  $proses = mysqli_query($connect, $update);
}
  echo "<script>alert('Data Berhasil Diupdate'); window.location = 'data-peminjam.php';</script>";
}

 ?>
