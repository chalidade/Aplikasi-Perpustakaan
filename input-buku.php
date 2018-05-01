<?php

include "data/koneksi.php";

$id        = $_POST['id'];
$judul     = $_POST['judul'];
$jenis     = $_POST['jenis'];
$tahun     = $_POST['tahun'];
$gambar    = basename($_FILES["fileToUpload"]["name"]);

$target_dir = "gambar/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

$simpan = "INSERT INTO `buku` (`id_buku`, `nama`, `jenis`, `tahun_terbit`, `gambar`) VALUES ('$id', '$judul', '$jenis', '$tahun', '$gambar');";
$proses = mysqli_query($connect, $simpan);


echo "<script>alert('Data Berhasil Disimpan'); window.location = 'admin/dashboard.php';</script>";
 ?>
